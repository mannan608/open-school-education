<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\EligibilityApplication;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Throwable;

class CheckEligibilityController extends Controller
{
    public function index()
    {
        $industries = json_decode(
            File::get(resource_path('data/categories.json')),
            true
        );

        return view(
            'frontend.pages.check-eligibility.index',
            compact('industries')
        );
    }

    public function saveStep(Request $request): JsonResponse
    {
        $step = (int) $request->input('step');

        if (!in_array($step, [1, 2, 3])) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid form step.',
            ], 422);
        }

        /*
        |--------------------------------------------------------------------------
        | Validation
        |--------------------------------------------------------------------------
        */

        $rules = match ($step) {
            1 => [
                'first_name' => ['required', 'string', 'max:255'],
                'last_name'  => ['required', 'string', 'max:255'],
                'phone'      => ['required', 'string', 'max:30'],
                'email'      => ['required', 'email', 'max:255'],
            ],

            2 => [
                'industry'            => ['required', 'string', 'max:255'],
                'qualification'       => ['required', 'string', 'max:255'],
                'experience_years'    => ['required', 'integer', 'min:0', 'max:50'],
                'experience_location' => ['required', 'string', 'max:255'],
                'has_formal_qualification' => ['required', 'boolean'],
            ],

            3 => [
                'state' => [
                    'required',
                    'string',
                    'in:ACT,NSW,NT,QLD,SA,TAS,VIC,WA',
                ],
                'g-recaptcha-response' => ['nullable', 'string'],
                'terms_accepted' => ['required', 'accepted'],
            ],
        };

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please correct the highlighted errors.',
                'errors'  => $validator->errors(),
            ], 422);
        }

        /*
        |--------------------------------------------------------------------------
        | Create Application
        |--------------------------------------------------------------------------
        |
        | No checking for existing records.
        | Every Step 1 submission creates a new application.
        |
        */

        $application = new EligibilityApplication();

        /*
        |--------------------------------------------------------------------------
        | Step 1
        |--------------------------------------------------------------------------
        */

        if ($step === 1) {
            $application->first_name = $request->input('first_name');
            $application->last_name  = $request->input('last_name');
            $application->email      = $request->input('email');
            $application->phone      = $request->input('phone');

            $application->current_step = 1;
            $application->status = 'draft';

            $application->save();

            /*
            |--------------------------------------------------------------------------
            | Send Admin Email
            |--------------------------------------------------------------------------
            */

            try {
                Mail::raw(
                    "New Eligibility Lead Registered\n\n" .
                    "Name: {$application->first_name} {$application->last_name}\n" .
                    "Phone: {$application->phone}\n" .
                    "Email: {$application->email}\n\n" .
                    "Application ID: {$application->id}\n" .
                    "Status: Draft\n" .
                    "Current Step: 1\n",
                    function ($message) {
                        $message
                            ->to('enrol@liacollege.edu.au')
                            ->subject('New Lead - Lia College Eligibility Form');
                    }
                );
            } catch (Throwable $e) {
                Log::error(
                    'Eligibility Step 1 Mail Error: ' . $e->getMessage()
                );
            }
        }

        /*
        |--------------------------------------------------------------------------
        | Step 2
        |--------------------------------------------------------------------------
        */

        if ($step === 2) {
            $application->industry = $request->input('industry');
            $application->qualification = $request->input('qualification');
            $application->experience_years = $request->input('experience_years');
            $application->experience_location = $request->input('experience_location');
            $application->has_formal_qualification =
                $request->boolean('has_formal_qualification');

            $application->current_step = 2;
            $application->status = 'draft';

            $application->save();
        }

        /*
        |--------------------------------------------------------------------------
        | Step 3
        |--------------------------------------------------------------------------
        */

        if ($step === 3) {
            $application->state = $request->input('state');
            $application->terms_accepted =
                $request->boolean('terms_accepted');

            $application->current_step = 3;
            $application->status = 'submitted';

            $application->save();
        }

        /*
        |--------------------------------------------------------------------------
        | Response
        |--------------------------------------------------------------------------
        */

        return response()->json([
            'success' => true,
            'message' => $step === 3
                ? 'Thank you! Your eligibility check has been submitted successfully.'
                : 'Progress saved.',

            'application_id' => $application->id,
            'step' => $application->current_step,
            'status' => $application->status,
            'completed' => $application->status === 'submitted',
        ]);
    }
}