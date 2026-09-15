@extends('frontend.layouts.app')

@section('content')
    <style>[x-cloak] { display: none !important; }</style>
    <section class="relative overflow-hidden bg-slate-50 px-4 py-12 sm:px-6 lg:py-20">
        <div class="absolute inset-x-0 top-0 -z-0 h-72 bg-gradient-to-br from-brand-950 via-brand-800 to-secondary-700"></div>
        <div class="relative z-10 mx-auto grid max-w-6xl gap-8 lg:grid-cols-[0.85fr_1.15fr] lg:items-center" x-data="eligibilityForm()">
            <div class="px-2 text-white sm:px-4 lg:px-0">
                <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-1.5 text-xs font-semibold uppercase tracking-[0.14em] text-secondary-100 backdrop-blur-sm">
                    <span class="h-1.5 w-1.5 rounded-full bg-secondary-300"></span> Recognition of prior learning
                </span>
                <h1 class="mt-5 text-4xl font-bold leading-tight sm:text-5xl">Turn your experience into opportunity.</h1>
                <p class="mt-5 max-w-xl text-base leading-7 text-brand-100 sm:text-lg">Answer a few questions and our team will help identify the right pathway for your skills and goals.</p>
                <div class="mt-8 grid max-w-lg grid-cols-3 gap-3 text-center">
                    <div class="rounded-2xl border border-white/15 bg-white/10 px-3 py-4 backdrop-blur-sm"><strong class="block text-xl">3</strong><span class="mt-1 block text-xs text-brand-100">simple steps</span></div>
                    <div class="rounded-2xl border border-white/15 bg-white/10 px-3 py-4 backdrop-blur-sm"><strong class="block text-xl">2 min</strong><span class="mt-1 block text-xs text-brand-100">to complete</span></div>
                    <div class="rounded-2xl border border-white/15 bg-white/10 px-3 py-4 backdrop-blur-sm"><strong class="block text-xl">100%</strong><span class="mt-1 block text-xs text-brand-100">obligation free</span></div>
                </div>
            </div>

            <div class="overflow-hidden rounded-3xl border border-white/70 bg-white shadow-2xl shadow-brand-950/25">
                <div class="border-b border-slate-100 px-6 py-6 sm:px-8">
                    <div class="flex items-start justify-between gap-4">
                        <div><p class="text-sm font-semibold text-brand-600">Eligibility check</p><h2 class="mt-1 text-2xl font-bold text-slate-900">Let’s get started</h2></div>
                        <span class="rounded-full bg-brand-50 px-3 py-1.5 text-xs font-bold text-brand-700" x-text="`Step ${step} of 3`"></span>
                    </div>
                    <div class="mt-6 flex items-center gap-2">
                        <template x-for="number in 3" :key="number"><div class="h-1.5 flex-1 rounded-full transition-colors duration-300" :class="number <= step ? 'bg-brand-500' : 'bg-slate-100'"></div></template>
                    </div>
                    <div class="mt-2 flex justify-between text-[11px] font-medium text-slate-400"><span>About you</span><span>Experience</span><span>Confirm</span></div>
                </div>

                <form class="p-6 sm:p-8" @submit.prevent="submitStep" novalidate>
                    <template x-if="formError"><div class="mb-5 flex gap-3 rounded-xl border border-error-200 bg-error-50 p-3 text-sm text-error-700" role="alert"><svg class="mt-0.5 h-5 w-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v4m0 4h.01M10.3 3.9l-8 14A2 2 0 004 21h16a2 2 0 001.7-3.1l-8-14a2 2 0 00-3.4 0z"/></svg><span x-text="formError"></span></div></template>

                    <!-- STEP 1 -->
                    <div x-show="step === 1" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-x-4"
                        x-transition:enter-end="opacity-100 translate-x-0" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase text-slate-600 mb-1">First Name *</label>
                                <input type="text" x-model="formData.first_name"
                                    class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100"
                                    placeholder="John">
                                <template x-if="errors.first_name">
                                    <p class="text-rose-500 text-xs mt-1" x-text="errors.first_name[0]"></p>
                                </template>
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase text-slate-600 mb-1">Last Name *</label>
                                <input type="text" x-model="formData.last_name"
                                    class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100"
                                    placeholder="Doe">
                                <template x-if="errors.last_name">
                                    <p class="text-rose-500 text-xs mt-1" x-text="errors.last_name[0]"></p>
                                </template>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 mb-1">Email Address *</label>
                            <input type="email" x-model="formData.email"
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100"
                                placeholder="john@example.com">
                            <template x-if="errors.email">
                                <p class="text-rose-500 text-xs mt-1" x-text="errors.email[0]"></p>
                            </template>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 mb-1">Phone Number *</label>
                            <input type="tel" x-model="formData.phone"
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100"
                                placeholder="0400 000 000">
                            <template x-if="errors.phone">
                                <p class="text-rose-500 text-xs mt-1" x-text="errors.phone[0]"></p>
                            </template>
                        </div>
                    </div>

                    <!-- STEP 2 -->
                    <div x-show="step === 2" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-x-4"
                        x-transition:enter-end="opacity-100 translate-x-0" class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 mb-1">Which Industry are you
                                interested in? *</label>
                            <select x-model="formData.industry"
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-brand-500 focus:ring-4 focus:ring-brand-100">
                                <option value="">Select Industry</option>
                                @foreach ($industries as $industry)
                                    <option value="{{ $industry['id'] }}">
                                        {{ $industry['name'] }}
                                    </option>
                                @endforeach
                            </select>
                            <template x-if="errors.industry">
                                <p class="text-rose-500 text-xs mt-1" x-text="errors.industry[0]"></p>
                            </template>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 mb-1">What qualification are you
                                looking for? *</label>
                            <input type="text" x-model="formData.qualification"
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100"
                                placeholder="e.g. Diploma of Building and Construction">
                            <template x-if="errors.qualification">
                                <p class="text-rose-500 text-xs mt-1" x-text="errors.qualification[0]"></p>
                            </template>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 mb-1">Years of relevant work
                                experience? *</label>
                            <input type="number" min="0" max="50" x-model="formData.experience_years"
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100"
                                placeholder="3">
                            <template x-if="errors.experience_years">
                                <p class="text-rose-500 text-xs mt-1" x-text="errors.experience_years[0]"></p>
                            </template>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 mb-1">Where is your work
                                experience? *</label>
                            <input type="text" x-model="formData.experience_location"
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100"
                                placeholder="e.g. Australia, Overseas, or both">
                            <template x-if="errors.experience_location">
                                <p class="text-rose-500 text-xs mt-1" x-text="errors.experience_location[0]"></p>
                            </template>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 mb-2">Do you have any formal
                                qualifications? *</label>
                            <div class="grid grid-cols-2 gap-3">
                                <label class="flex cursor-pointer items-center gap-2 rounded-xl border border-slate-200 px-4 py-3 text-sm font-medium text-slate-700 transition hover:border-brand-300 has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
                                    <input type="radio" :value="1"
                                        x-model.number="formData.has_formal_qualification"
                                        class="text-brand-600 focus:ring-brand-500">
                                    <span class="text-sm">Yes</span>
                                </label>
                                <label class="flex cursor-pointer items-center gap-2 rounded-xl border border-slate-200 px-4 py-3 text-sm font-medium text-slate-700 transition hover:border-brand-300 has-[:checked]:border-brand-500 has-[:checked]:bg-brand-50">
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
                    </div>

                    <!-- STEP 3 -->
                    <div x-show="step === 3" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-x-4"
                        x-transition:enter-end="opacity-100 translate-x-0" class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 mb-1">What state do you live in?
                                *</label>
                            <select x-model="formData.state"
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-brand-500 focus:ring-4 focus:ring-brand-100">
                                <option value="">Select State</option>
                                <option value="NSW">New South Wales</option>
                                <option value="VIC">Victoria</option>
                                <option value="QLD">Queensland</option>
                                <option value="WA">Western Australia</option>
                                <option value="SA">South Australia</option>
                                <option value="TAS">Tasmania</option>
                                <option value="ACT">Australian Capital Territory</option>
                                <option value="NT">Northern Territory</option>
                            </select>
                            <template x-if="errors.state">
                                <p class="text-rose-500 text-xs mt-1" x-text="errors.state[0]"></p>
                            </template>
                        </div>

                        <div class="pt-2">
                            <label class="flex cursor-pointer items-start gap-3 rounded-xl border border-slate-200 bg-slate-50 p-4">
                                <input type="checkbox" x-model="formData.terms_accepted"
                                    class="mt-0.5 rounded border-slate-300 text-brand-600 focus:ring-brand-500">
                                <span class="text-sm text-slate-600">I agree to the privacy policy and consent to being
                                    contacted regarding my eligibility assessment.</span>
                            </label>
                            <template x-if="errors.terms_accepted">
                                <p class="text-rose-500 text-xs mt-1" x-text="errors.terms_accepted[0]"></p>
                            </template>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="mt-8 flex items-center justify-between border-t border-slate-100 pt-5">
                        <button type="button" x-show="step > 1" @click="step--"
                            class="rounded-xl px-5 py-3 text-sm font-semibold text-slate-600 transition hover:bg-slate-100">
                            Back
                        </button>

                        <div class="ml-auto">
                            <button type="submit" :disabled="loading"
                                class="flex items-center gap-2 rounded-xl bg-brand-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-brand-600/20 transition hover:bg-brand-700 disabled:cursor-not-allowed disabled:opacity-50">
                                <span
                                    x-text="loading ? 'Processing...' : (step === 3 ? 'Submit Eligibility Check' : 'Next Step')"></span>
                                <svg x-show="!loading" class="w-4 h-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                </form>
            </div>

            <div x-cloak x-show="successModal" x-transition.opacity class="fixed inset-0 z-50 flex items-center justify-center bg-slate-950/60 p-4 backdrop-blur-sm" role="dialog" aria-modal="true" aria-labelledby="success-title" @keydown.escape.window="returnToStart()">
                <div x-show="successModal" x-transition.scale.origin.center class="w-full max-w-md rounded-3xl bg-white p-8 text-center shadow-2xl">
                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-success-100 text-success-600"><svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg></div>
                    <p class="mt-6 text-sm font-semibold text-success-700">Application received</p>
                    <h3 id="success-title" class="mt-2 text-2xl font-bold text-slate-900">Thank you for getting in touch.</h3>
                    <p class="mt-3 leading-6 text-slate-600" x-text="successMessage"></p>
                    <p class="mt-4 text-sm text-slate-400">Returning to the first step shortly…</p>
                    <button type="button" @click="returnToStart()" class="mt-7 w-full rounded-xl bg-brand-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-brand-700">Start a new check</button>
                </div>
            </div>
        </div>

        <!-- Alpine.js Application Script -->
        <script>
            function eligibilityForm() {
                return {
                    step: 1,
                    loading: false,
                    successModal: false,
                    successMessage: '',
                    applicationId: null,
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
                    async submitStep() {
                        this.loading = true;
                        this.errors = {};
                        this.formError = '';

                        const payload = {
                            step: this.step,
                            application_id: this.applicationId,
                            ...this.formData
                        };

                        try {
                            const response = await fetch("{{ route('eligibility.step.save') }}", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                    "Accept": "application/json",
                                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute(
                                        'content')
                                },
                                body: JSON.stringify(payload)
                            });

                            const data = await response.json();

                            if (response.ok && data.success) {
                                this.applicationId = data.application_id;

                                if (data.completed) {
                                    this.successMessage = data.message;
                                    this.successModal = true;
                                    window.setTimeout(() => this.returnToStart(), 4000);
                                } else {
                                    this.step++;
                                }
                            } else if (response.status === 422) {
                                this.errors = data.errors || {};
                                this.formError = data.message || '';
                            } else {
                                this.formError = data.message || 'An unexpected error occurred. Please try again.';
                            }
                        } catch (e) {
                            this.formError = 'Failed to connect to the server. Please try again.';
                        } finally {
                            this.loading = false;
                        }
                    },
                    returnToStart() {
                        window.location.assign("{{ route('eligibility') }}");
                    }
                }
            }
        </script>
    </section>
@endsection
