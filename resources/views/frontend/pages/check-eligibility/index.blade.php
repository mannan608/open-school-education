@extends('frontend.layouts.app')

@section('content')
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <section class="relative overflow-hidden bg-slate-50 px-4 py-12 sm:px-6 lg:py-20">
        <!-- Background -->
        <div class="absolute inset-x-0 top-0 -z-0 h-72 bg-gradient-to-br from-brand-950 via-brand-800 to-secondary-700">
        </div>

        <div class="relative z-10 mx-auto grid max-w-6xl gap-8 lg:grid-cols-[0.85fr_1.15fr] lg:items-center"
            x-data="eligibilityForm()">

            <!-- =========================================================
                     LEFT CONTENT
                ========================================================== -->

            <div class="px-2 text-white sm:px-4 lg:px-0">

                <span
                    class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-1.5 text-xs font-semibold uppercase tracking-[0.14em] text-secondary-100 backdrop-blur-sm">
                    <span class="h-1.5 w-1.5 rounded-full bg-secondary-300"></span>

                    Recognition of prior learning
                </span>

                <h1 class="mt-5 text-4xl font-bold leading-tight sm:text-5xl">
                    Turn your experience into opportunity.
                </h1>

                <p class="mt-5 max-w-xl text-base leading-7 text-brand-100 sm:text-lg">
                    Answer a few questions and our team will help identify
                    the right pathway for your skills and goals.
                </p>

                <div class="mt-8 grid max-w-lg grid-cols-3 gap-3 text-center">

                    <div class="rounded-2xl border border-white/15 bg-white/10 px-3 py-4 backdrop-blur-sm">
                        <strong class="block text-xl">3</strong>
                        <span class="mt-1 block text-xs text-brand-100">
                            simple steps
                        </span>
                    </div>

                    <div class="rounded-2xl border border-white/15 bg-white/10 px-3 py-4 backdrop-blur-sm">
                        <strong class="block text-xl">2 min</strong>
                        <span class="mt-1 block text-xs text-brand-100">
                            to complete
                        </span>
                    </div>

                    <div class="rounded-2xl border border-white/15 bg-white/10 px-3 py-4 backdrop-blur-sm">
                        <strong class="block text-xl">100%</strong>
                        <span class="mt-1 block text-xs text-brand-100">
                            obligation free
                        </span>
                    </div>

                </div>
            </div>


            <!-- =========================================================
                     FORM CARD
                ========================================================== -->

            <div class="overflow-hidden rounded-3xl border border-white/70 bg-white shadow-2xl shadow-brand-950/25">

                <!-- Header -->

                <div class="border-b border-slate-100 px-6 py-6 sm:px-8">

                    <div class="flex items-start justify-between gap-4">

                        <div>
                            <p class="text-sm font-semibold text-brand-600">
                                Eligibility check
                            </p>

                            <h2 class="mt-1 text-2xl font-bold text-slate-900">
                                Let's get started
                            </h2>
                        </div>

                        <span class="rounded-full bg-brand-50 px-3 py-1.5 text-xs font-bold text-brand-700"
                            x-text="`Step ${step} of 3`"></span>

                    </div>


                    <!-- Progress -->

                    <div class="mt-6 flex items-center gap-2">

                        <template x-for="number in 3" :key="number">
                            <div class="h-1.5 flex-1 rounded-full transition-colors duration-300"
                                :class="number <= step ?
                                    'bg-brand-500' :
                                    'bg-slate-100'">
                            </div>
                        </template>

                    </div>

                    <div class="mt-2 flex justify-between text-[11px] font-medium text-slate-400">
                        <span>About you</span>
                        <span>Experience</span>
                        <span>Confirm</span>
                    </div>

                </div>


                <!-- =====================================================
                         FORM
                    ====================================================== -->

                <form class="p-6 sm:p-8" method="POST" action="{{ route('eligibility.submit') }}"
                    @submit.prevent="submitForm" novalidate>
                    @csrf


                    <!-- Global Error -->

                    <template x-if="formError">

                        <div class="mb-5 flex gap-3 rounded-xl border border-error-200 bg-error-50 p-3 text-sm text-error-700"
                            role="alert">

                            <svg class="mt-0.5 h-5 w-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v4m0 4h.01M10.3 3.9l-8 14A2 2 0 004 21h16a2 2 0 001.7-3.1l-8-14a2 2 0 00-3.4 0z" />
                            </svg>

                            <span x-text="formError"></span>

                        </div>

                    </template>


                    <!-- =================================================
                             STEP 1
                        ================================================== -->

                    <div x-show="step === 1" x-cloak x-transition class="space-y-4">

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                            <!-- First Name -->

                            <div>

                                <label class="mb-1 block text-xs font-bold uppercase text-slate-600">
                                    First Name *
                                </label>

                                <input type="text" x-model="formData.first_name" autocomplete="given-name"
                                    class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100"
                                    placeholder="John">

                                <template x-if="errors.first_name">

                                    <p class="mt-1 text-xs text-rose-500" x-text="errors.first_name[0]"></p>

                                </template>

                            </div>


                            <!-- Last Name -->

                            <div>

                                <label class="mb-1 block text-xs font-bold uppercase text-slate-600">
                                    Last Name *
                                </label>

                                <input type="text" x-model="formData.last_name" autocomplete="family-name"
                                    class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100"
                                    placeholder="Doe">

                                <template x-if="errors.last_name">

                                    <p class="mt-1 text-xs text-rose-500" x-text="errors.last_name[0]"></p>

                                </template>

                            </div>

                        </div>


                        <!-- Email -->

                        <div>

                            <label class="mb-1 block text-xs font-bold uppercase text-slate-600">
                                Email Address *
                            </label>

                            <input type="email" x-model="formData.email" autocomplete="email"
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100"
                                placeholder="john@example.com">

                            <template x-if="errors.email">

                                <p class="mt-1 text-xs text-rose-500" x-text="errors.email[0]"></p>

                            </template>

                        </div>


                        <!-- Phone -->

                        <div>

                            <label class="mb-1 block text-xs font-bold uppercase text-slate-600">
                                Phone Number *
                            </label>

                            <input type="tel" x-model="formData.phone" autocomplete="tel"
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100"
                                placeholder="0400 000 000">

                            <template x-if="errors.phone">

                                <p class="mt-1 text-xs text-rose-500" x-text="errors.phone[0]"></p>

                            </template>

                        </div>

                    </div>


                    <!-- =================================================
                             STEP 2
                        ================================================== -->

                    <div x-show="step === 2" x-cloak x-transition class="space-y-4">

                        <!-- Industry -->

                        <div>

                            <label class="mb-1 block text-xs font-bold uppercase text-slate-600">
                                Which Industry are you interested in? *
                            </label>

                            <select x-model="formData.industry"
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-brand-500 focus:ring-4 focus:ring-brand-100">

                                <option value="">
                                    Select Industry
                                </option>

                                @foreach ($industries as $industry)
                                    <option value="{{ $industry['id'] }}">
                                        {{ $industry['name'] }}
                                    </option>
                                @endforeach

                            </select>

                            <template x-if="errors.industry">

                                <p class="mt-1 text-xs text-rose-500" x-text="errors.industry[0]"></p>

                            </template>

                        </div>


                        <!-- Qualification -->

                        <div>

                            <label class="mb-1 block text-xs font-bold uppercase text-slate-600">
                                What qualification are you looking for? *
                            </label>

                            <input type="text" x-model="formData.qualification"
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100"
                                placeholder="e.g. Diploma of Building and Construction">

                            <template x-if="errors.qualification">

                                <p class="mt-1 text-xs text-rose-500" x-text="errors.qualification[0]"></p>

                            </template>

                        </div>


                        <!-- Experience Years -->

                        <div>

                            <label class="mb-1 block text-xs font-bold uppercase text-slate-600">
                                Years of relevant work experience? *
                            </label>

                            <input type="number" min="0" max="50"
                                x-model.number="formData.experience_years"
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100"
                                placeholder="3">

                            <template x-if="errors.experience_years">

                                <p class="mt-1 text-xs text-rose-500" x-text="errors.experience_years[0]"></p>

                            </template>

                        </div>



                        <!-- Formal Qualification -->

                        

                    </div>


                    <!-- =================================================
                             STEP 3
                        ================================================== -->

                    <div x-show="step === 3" x-cloak x-transition class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 mb-2">Do you have any formal
                                qualifications? *</label>
                            <div class="grid grid-cols-2 gap-3">
                                <label
                                    class="flex cursor-pointer items-center gap-2 rounded-xl border border-slate-200 px-4 py-3 text-sm font-medium text-slate-700 transition hover:border-brand-300 has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                                    <input type="radio" :value="1"
                                        x-model.number="formData.has_formal_qualification"
                                        class="text-brand-600 focus:ring-brand-500">
                                    <span class="text-sm">Yes</span>
                                </label>
                                <label
                                    class="flex cursor-pointer items-center gap-2 rounded-xl border border-slate-200 px-4 py-3 text-sm font-medium text-slate-700 transition hover:border-brand-300 has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                                    <input type="radio" :value="0"
                                        x-model.number="formData.has_formal_qualification"
                                        class="text-brand-600 focus:ring-brand-500">
                                    <span class="text-sm">No</span>
                                </label>
                            </div>
                            <template x-if="errors.has_formal_qualification">
                                <p class="text-rose-500 text-xs mt-1" x-text="errors.has_formal_qualification[0]"></p>
                            </template>
                        </div>

                        <!-- State -->

                        <div>

                            <label class="mb-1 block text-xs font-bold uppercase text-slate-600">
                                What state do you live in? *
                            </label>

                            <select x-model="formData.state"
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-brand-500 focus:ring-4 focus:ring-brand-100">

                                <option value="">
                                    Select State
                                </option>

                                @foreach (\App\Models\EligibilityApplication::STATES as $code => $stateName)
                                    <option value="{{ $code }}">
                                        {{ $stateName }}
                                    </option>
                                @endforeach

                            </select>

                            <template x-if="errors.state">

                                <p class="mt-1 text-xs text-rose-500" x-text="errors.state[0]"></p>

                            </template>

                        </div>


                        <!-- Terms -->

                        <div class="pt-2">

                            <label
                                class="flex cursor-pointer items-start gap-3 rounded-xl border border-slate-200 bg-slate-50 p-4">

                                <input type="checkbox" x-model="formData.terms_accepted"
                                    class="mt-0.5 rounded border-slate-300 text-brand-600 focus:ring-brand-500">

                                <span class="text-sm leading-6 text-slate-600">
                                    I agree to the privacy policy and consent
                                    to being contacted regarding my eligibility
                                    assessment.
                                </span>

                            </label>

                            <template x-if="errors.terms_accepted">

                                <p class="mt-1 text-xs text-rose-500" x-text="errors.terms_accepted[0]"></p>

                            </template>

                        </div>

                    </div>


                    <!-- =================================================
                             ACTIONS
                        ================================================== -->

                    <div class="mt-8 flex items-center justify-between border-t border-slate-100 pt-5">

                        <!-- Back -->
                        <button type="button" x-show="step > 1" x-cloak @click="previousStep()"
                            class="rounded-xl px-5 py-3 text-sm font-semibold text-slate-600 transition hover:bg-slate-100">
                            ← Back
                        </button>

                        <!-- Spacer when Back is hidden -->
                        <div x-show="step === 1"></div>

                        <!-- Next / Submit -->
                        <button type="button" :disabled="loading" @click="step < 3 ? nextStep() : submitForm()"
                            class="ml-auto flex items-center gap-2 rounded-xl bg-brand-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-brand-600/20 transition hover:bg-brand-700 disabled:cursor-not-allowed disabled:opacity-50">

                            <span
                                x-text="
                            loading
                                ? 'Processing...'
                                : (step === 3
                                    ? 'Submit Eligibility Check'
                                    : 'Next Step')
                        "></span>

                            <!-- Arrow -->
                            <svg x-show="!loading && step < 3" class="h-4 w-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>

                            <!-- Check -->
                            <svg x-show="!loading && step === 3" class="h-4 w-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>

                        </button>

                    </div>

                </form>

            </div>


            <!-- =========================================================
                     SUCCESS MODAL
                ========================================================== -->

            <div x-cloak x-show="successModal" x-transition.opacity
                class="fixed inset-0 z-50 flex items-center justify-center bg-slate-950/60 p-4 backdrop-blur-sm"
                role="dialog" aria-modal="true" aria-labelledby="success-title"
                @keydown.escape.window="returnToStart()">

                <div x-show="successModal" x-transition.scale.origin.center
                    class="w-full max-w-md rounded-3xl bg-white p-8 text-center shadow-2xl">

                    <div
                        class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-success-100 text-success-600">

                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>

                    </div>

                    <p class="mt-6 text-sm font-semibold text-success-700">
                        Application received
                    </p>

                    <h3 id="success-title" class="mt-2 text-2xl font-bold text-slate-900">
                        Thank you for getting in touch.
                    </h3>

                    <p class="mt-3 leading-6 text-slate-600" x-text="successMessage"></p>

                    <p class="mt-4 text-sm text-slate-400">
                        Returning to the first step shortly…
                    </p>

                    <button type="button" @click="returnToStart()"
                        class="mt-7 w-full rounded-xl bg-brand-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-brand-700">
                        Start a new check
                    </button>

                </div>

            </div>

        </div>


        <!-- =============================================================
                 ALPINE APPLICATION
            ============================================================= -->

        <script>
            function eligibilityForm() {
                return {
                    step: 1,
                    loading: false,
                    successModal: false,
                    successMessage: '',
                    errors: {},
                    formError: '',

                    formData: {
                        first_name: '',
                        last_name: '',
                        email: '',
                        phone: '',
                        industry: '',
                        qualification: '',
                        experience_years: '',
                        experience_location: '',
                        has_formal_qualification: null,
                        state: '',
                        terms_accepted: false
                    },

                    nextStep() {
                        this.errors = {};
                        this.formError = '';

                        if (this.step < 3) {
                            this.step++;
                        }
                    },

                    previousStep() {
                        this.errors = {};
                        this.formError = '';

                        if (this.step > 1) {
                            this.step--;
                        }
                    },

                    async submitForm() {
                        this.loading = true;
                        this.errors = {};
                        this.formError = '';

                        const csrfToken = document.querySelector(
                            'input[name="_token"]'
                        )?.value;

                        try {
                            const response = await fetch(
                                "{{ route('eligibility.submit') }}", {
                                    method: 'POST',

                                    headers: {
                                        'Content-Type': 'application/json',
                                        'Accept': 'application/json',
                                        'X-CSRF-TOKEN': csrfToken,
                                        'X-Requested-With': 'XMLHttpRequest'
                                    },

                                    body: JSON.stringify(this.formData)
                                }
                            );

                            const data = await response.json();

                            if (response.ok && data.success) {

                                this.successMessage = data.message;
                                this.successModal = true;

                                return;
                            }

                            if (response.status === 422) {
                                this.errors = data.errors || {};
                                this.formError = data.message || '';
                                return;
                            }

                            if (response.status === 419) {
                                this.formError =
                                    'Your session has expired. Please refresh the page and try again.';
                                return;
                            }

                            this.formError =
                                data.message ||
                                'Something went wrong. Please try again.';

                        } catch (error) {

                            console.error(error);

                            this.formError =
                                'Unable to connect to the server. Please try again.';

                        } finally {
                            this.loading = false;
                        }
                    },

                    returnToStart() {
                        window.location.reload();
                    }
                }
            }
        </script>

    </section>
@endsection