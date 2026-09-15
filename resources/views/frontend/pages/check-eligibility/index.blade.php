@extends('frontend.layouts.app')

@section('content')
    <section>
        <div x-data="eligibilityForm()"
            class="w-full max-w-2xl bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden">
            <!-- Header -->
            <div class="bg-indigo-900 text-white p-6 sm:p-8">
                <h2 class="text-2xl sm:text-3xl font-bold">Check Your Eligibility</h2>
                <p class="text-indigo-200 text-sm sm:text-base mt-1">Complete the steps below to find out if you qualify.</p>

                <!-- Progress Bar -->
                <div x-show="!submitted" class="mt-6">
                    <div class="flex justify-between text-xs font-semibold uppercase tracking-wider mb-2 text-indigo-200">
                        <span :class="step >= 1 ? 'text-white' : ''">1. Personal Info</span>
                        <span :class="step >= 2 ? 'text-white' : ''">2. Experience</span>
                        <span :class="step >= 3 ? 'text-white' : ''">3. Location</span>
                    </div>
                    <div class="w-full bg-indigo-950/50 rounded-full h-2">
                        <div class="bg-indigo-400 h-2 rounded-full transition-all duration-300 ease-out"
                            :style="`width: ${((step - 1) / 2) * 100}%`"></div>
                    </div>
                </div>
            </div>

            <!-- Form Body -->
            <div class="p-6 sm:p-8">

                <!-- Success State -->
                <template x-if="submitted">
                    <div class="text-center py-8">
                        <div
                            class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">Application Submitted!</h3>
                        <p class="text-slate-600 max-w-md mx-auto" x-text="successMessage"></p>
                    </div>
                </template>

                <!-- Multistep Form -->
                <form x-show="!submitted" @submit.prevent="submitStep">

                    <!-- STEP 1 -->
                    <div x-show="step === 1" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-x-4"
                        x-transition:enter-end="opacity-100 translate-x-0" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase text-slate-600 mb-1">First Name *</label>
                                <input type="text" x-model="formData.first_name"
                                    class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm"
                                    placeholder="John">
                                <template x-if="errors.first_name">
                                    <p class="text-rose-500 text-xs mt-1" x-text="errors.first_name[0]"></p>
                                </template>
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase text-slate-600 mb-1">Last Name *</label>
                                <input type="text" x-model="formData.last_name"
                                    class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm"
                                    placeholder="Doe">
                                <template x-if="errors.last_name">
                                    <p class="text-rose-500 text-xs mt-1" x-text="errors.last_name[0]"></p>
                                </template>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 mb-1">Email Address *</label>
                            <input type="email" x-model="formData.email"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm"
                                placeholder="john@example.com">
                            <template x-if="errors.email">
                                <p class="text-rose-500 text-xs mt-1" x-text="errors.email[0]"></p>
                            </template>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 mb-1">Phone Number *</label>
                            <input type="tel" x-model="formData.phone"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm"
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
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm bg-white">
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
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm"
                                placeholder="e.g. Diploma of Building and Construction">
                            <template x-if="errors.qualification">
                                <p class="text-rose-500 text-xs mt-1" x-text="errors.qualification[0]"></p>
                            </template>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 mb-1">Years of relevant work
                                experience? *</label>
                            <input type="number" min="0" max="50" x-model="formData.experience_years"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm"
                                placeholder="3">
                            <template x-if="errors.experience_years">
                                <p class="text-rose-500 text-xs mt-1" x-text="errors.experience_years[0]"></p>
                            </template>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 mb-1">Where is your work
                                experience? *</label>
                            <input type="text" x-model="formData.experience_location"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm"
                                placeholder="e.g. Australia, Overseas, or both">
                            <template x-if="errors.experience_location">
                                <p class="text-rose-500 text-xs mt-1" x-text="errors.experience_location[0]"></p>
                            </template>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-600 mb-2">Do you have any formal
                                qualifications? *</label>
                            <div class="flex items-center space-x-6">
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="radio" :value="1"
                                        x-model.number="formData.has_formal_qualification"
                                        class="text-indigo-600 focus:ring-indigo-500">
                                    <span class="text-sm">Yes</span>
                                </label>
                                <label class="flex items-center space-x-2 cursor-pointer">
                                    <input type="radio" :value="0"
                                        x-model.number="formData.has_formal_qualification"
                                        class="text-indigo-600 focus:ring-indigo-500">
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
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm bg-white">
                                <option value="">Select State</option>
                                <option value="NSW">New South Wales</option>
                                <option value="VIC">Victoria</option>
                                <option value="QLD">Queensland</option>
                                                                
                            </select>
                            <template x-if="errors.state">
                                <p class="text-rose-500 text-xs mt-1" x-text="errors.state[0]"></p>
                            </template>
                        </div>

                        <div class="pt-2">
                            <label class="flex items-start space-x-3 cursor-pointer">
                                <input type="checkbox" x-model="formData.terms_accepted"
                                    class="mt-1 rounded text-indigo-600 focus:ring-indigo-500">
                                <span class="text-sm text-slate-600">I agree to the privacy policy and consent to being
                                    contacted regarding my eligibility assessment.</span>
                            </label>
                            <template x-if="errors.terms_accepted">
                                <p class="text-rose-500 text-xs mt-1" x-text="errors.terms_accepted[0]"></p>
                            </template>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="mt-8 flex justify-between items-center border-t border-slate-100 pt-5">
                        <button type="button" x-show="step > 1" @click="step--"
                            class="px-5 py-2.5 text-sm font-semibold text-slate-600 bg-slate-100 hover:bg-slate-200 rounded-lg transition">
                            Back
                        </button>

                        <div class="ml-auto">
                            <button type="submit" :disabled="loading"
                                class="px-6 py-2.5 text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg shadow-md transition disabled:opacity-50 flex items-center space-x-2">
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
        </div>

        <!-- Alpine.js Application Script -->
        <script>
            function eligibilityForm() {
                return {
                    step: 1,
                    loading: false,
                    submitted: false,
                    successMessage: '',
                    applicationId: null,
                    errors: {},
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
                                    this.submitted = true;
                                    this.successMessage = data.message;
                                } else {
                                    this.step++;
                                }
                            } else if (response.status === 422) {
                                this.errors = data.errors || {};
                            } else {
                                alert(data.message || 'An unexpected error occurred.');
                            }
                        } catch (e) {
                            alert('Failed to connect to server. Please try again.');
                        } finally {
                            this.loading = false;
                        }
                    }
                }
            }
        </script>
    </section>
@endsection
