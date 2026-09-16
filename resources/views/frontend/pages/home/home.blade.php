@extends('frontend.layouts.app')

@section('content')
    {{-- =========================================================
    HERO SECTION
========================================================= --}}
    <section id="home" class="relative isolate overflow-hidden bg-slate-950 text-white">
        {{-- Background --}}
        <div class="absolute inset-0 -z-20">
            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBEg6iqgSVx27x3YZFV5wlGCd-2TeYOVWh3tC7kLi3DTN3D6Err8OPppnGZQnp_de5eCWFdw8yhbVR9jAuCskT-NoEOlBUTTHmG5-ZGilA_VpvH71K2wCboY9P1zGAzyhlVnHY7Ppf5T-8fX7VuSX8ZFor3f4ZiIwYjBRhu7Qda-wrRUZ9NlJV97QW6_P_CtozfkgfIwrCDB4_wtvMGhI2GZagXP5i8Sv8fShS22_umXvektjZf01B2NQ"
                alt="Modern collaborative study space"
                class="h-full w-full object-cover object-center opacity-30 transition duration-[2000ms] ease-out hover:scale-105">
        </div>

        {{-- Tailwind-only overlays --}}
        {{-- EXACT ORIGINAL GRADIENT --}}
        <div
            class="absolute inset-0 -z-10 bg-[linear-gradient(90deg,rgba(13,82,181,0.94)_0%,rgba(9,52,117,0.88)_45%,rgba(15,23,42,0.78)_100%)]">
        </div>

        {{-- Bottom fade --}}
        <div class="absolute inset-x-0 bottom-0 -z-10 h-32 bg-gradient-to-t from-slate-950/40 to-transparent"></div>


        {{-- Decorative blobs --}}
        <div class="absolute -left-24 top-20 -z-10 h-72 w-72 rounded-full bg-brand-500/10 blur-3xl"></div>
        <div class="absolute -right-24 bottom-10 -z-10 h-96 w-96 rounded-full bg-secondary-400/10 blur-3xl"></div>

        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
            <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-12 lg:gap-10">

                {{-- Hero Content --}}
                <div class="space-y-7 lg:col-span-7">

                    {{-- Badge --}}
                    <div
                        class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.18em] text-secondary-300 shadow-lg backdrop-blur-md transition duration-500 hover:border-secondary-400/40 hover:bg-white/15">
                        <span class="relative flex h-2.5 w-2.5">
                            <span
                                class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary-400 opacity-60"></span>
                            <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-secondary-400"></span>
                        </span>
                        Empower Your Future
                    </div>

                    {{-- Heading --}}
                    <div class="space-y-3">
                        <h1 class="text-4xl font-black leading-[1.05] tracking-tight text-white sm:text-5xl lg:text-7xl">
                            Turn Your Ambition
                            <span
                                class="block bg-gradient-to-r from-secondary-300 via-white to-brand-300 bg-clip-text text-transparent">
                                Into Achievement
                            </span>
                        </h1>

                        <div class="h-1 w-20 rounded-full bg-gradient-to-r from-secondary-400 to-brand-500"></div>
                    </div>

                    {{-- Description --}}
                    <p class="max-w-2xl text-base leading-8 text-slate-200 sm:text-lg">
                        Develop real-world skills, earn nationally recognized credentials,
                        and receive personalized guidance to prepare for a successful and
                        rewarding career in Australia.
                    </p>

                    {{-- Feature Cards --}}
                    <div class="grid grid-cols-1 gap-4 pt-2 sm:grid-cols-2">
                        <div
                            class="group rounded-2xl border border-white/10 bg-white/10 p-4 backdrop-blur-md transition-all duration-500 hover:-translate-y-1 hover:border-white/20 hover:bg-white/15 hover:shadow-xl">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-500/80 shadow-lg transition duration-300 group-hover:scale-110 group-hover:rotate-3">
                                    <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    </svg>
                                </div>

                                <div>
                                    <h4 class="text-sm font-bold text-white">Anywhere Anytime</h4>
                                    <p class="mt-1 text-xs leading-5 text-slate-300">
                                        Flexible remote submission and streamlined qualification pathways.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="group rounded-2xl border border-white/10 bg-white/10 p-4 backdrop-blur-md transition-all duration-500 hover:-translate-y-1 hover:border-white/20 hover:bg-white/15 hover:shadow-xl">
                            <div class="flex items-start gap-3">
                                <div
                                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-secondary-500/80 shadow-lg transition duration-300 group-hover:scale-110 group-hover:-rotate-3">
                                    <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    </svg>
                                </div>

                                <div>
                                    <h4 class="text-sm font-bold text-white">Online &amp; Offline Support</h4>
                                    <p class="mt-1 text-xs leading-5 text-slate-300">
                                        Comprehensive assessor assistance every step of the journey.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Form --}}
                <div id="eligibility-form" class="lg:col-span-5">
                    <div
                        class="group rounded-3xl border border-white/20 bg-white p-6 text-slate-900 shadow-2xl shadow-black/30 transition-all duration-500 hover:-translate-y-2 hover:shadow-black/40 sm:p-8">

                        <div class="mb-7 text-center">
                            <span
                                class="inline-flex rounded-full bg-brand-50 px-3 py-1 text-[10px] font-bold uppercase tracking-widest text-brand-600">
                                Free Assessment
                            </span>

                            <h3 class="mt-3 text-2xl font-black text-slate-900">
                                Submit Your Query
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-slate-500">
                                Have a Query? Send it to us &amp; get assessed in 24 hours.
                            </p>
                        </div>

                        <form action="#" method="POST" class="space-y-4"
                            onsubmit="event.preventDefault(); alert('Query submitted successfully! An assessor will contact you shortly.');">
                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <div>
                                    <label for="firstName" class="mb-1.5 block text-xs font-bold text-slate-700">
                                        First Name *
                                    </label>
                                    <input id="firstName" type="text" required placeholder="Enter Your First Name"
                                        class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3 py-3 text-xs text-slate-900 outline-none transition-all duration-300 placeholder:text-slate-400 focus:border-brand-500 focus:bg-white focus:ring-4 focus:ring-brand-500/10">
                                </div>

                                <div>
                                    <label for="lastName" class="mb-1.5 block text-xs font-bold text-slate-700">
                                        Last Name *
                                    </label>
                                    <input id="lastName" type="text" required placeholder="Enter Your Last Name"
                                        class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3 py-3 text-xs text-slate-900 outline-none transition-all duration-300 placeholder:text-slate-400 focus:border-brand-500 focus:bg-white focus:ring-4 focus:ring-brand-500/10">
                                </div>
                            </div>

                            <div>
                                <label for="email" class="mb-1.5 block text-xs font-bold text-slate-700">
                                    Email *
                                </label>

                                <input id="email" type="email" required placeholder="Enter Your Email"
                                    class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3 py-3 text-xs text-slate-900 outline-none transition-all duration-300 placeholder:text-slate-400 focus:border-brand-500 focus:bg-white focus:ring-4 focus:ring-brand-500/10">
                            </div>

                            <div>
                                <label for="subject" class="mb-1.5 block text-xs font-bold text-slate-700">
                                    Industry / Subject *
                                </label>

                                <select id="subject" required
                                    class="w-full rounded-xl border border-slate-200 bg-slate-50 px-3 py-3 text-xs text-slate-700 outline-none transition-all duration-300 focus:border-brand-500 focus:bg-white focus:ring-4 focus:ring-brand-500/10">
                                    <option disabled selected value="">Select Your Industry</option>
                                    @foreach ($industries as $industry)
                                        <option value="{{ $industry['slug'] }}">
                                            {{ $industry['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label for="message" class="mb-1.5 block text-xs font-bold text-slate-700">
                                    Message <span class="font-normal text-slate-400">(optional)</span>
                                </label>

                                <textarea id="message" rows="3" placeholder="Tell us about your work experience or desired qualification..."
                                    class="w-full resize-none rounded-xl border border-slate-200 bg-slate-50 px-3 py-3 text-xs text-slate-900 outline-none transition-all duration-300 placeholder:text-slate-400 focus:border-brand-500 focus:bg-white focus:ring-4 focus:ring-brand-500/10"></textarea>
                            </div>

                            <button type="submit"
                                class="group flex w-full items-center justify-center gap-2 rounded-xl bg-brand-500 px-4 py-3.5 text-sm font-bold text-white shadow-lg shadow-brand-500/20 transition-all duration-300 hover:-translate-y-1 hover:bg-brand-600 hover:shadow-xl hover:shadow-brand-500/30 active:translate-y-0">
                                Submit Now
                                <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" />
                                </svg>
                            </button>

                            <p class="flex items-center justify-center gap-1.5 text-[10px] text-slate-400">
                                <svg class="h-3.5 w-3.5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path clip-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        fill-rule="evenodd" />
                                </svg>
                                Your information is protected by our privacy commitment.
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- =========================================================
    REVIEWS
========================================================= --}}
    <section aria-label="Google Customer Reviews" class=" bg-slate-50 py-14">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 items-center gap-8 lg:grid-cols-12">

                {{-- Rating --}}
                <div
                    class="border-b border-slate-200 pb-7 text-center lg:col-span-3 lg:border-b-0 lg:border-r lg:pb-0 lg:pr-8 lg:text-left">
                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-slate-500">
                        Reviews &amp; Feedback
                    </span>

                    <div class="mt-1 text-3xl font-black text-slate-900">
                        EXCELLENT
                    </div>

                    <div class="my-2 text-lg tracking-wide text-amber-400">
                        ★★★★★
                    </div>

                    <p class="text-xs text-slate-500">
                        Based on
                        <strong class="text-slate-800">70+ authentic reviews</strong>
                    </p>

                    <div class="mt-3 text-sm font-bold">
                        <span class="text-blue-600">G</span><span class="text-red-500">o</span><span
                            class="text-yellow-500">o</span><span class="text-blue-500">g</span><span
                            class="text-green-500">l</span><span class="text-red-500">e</span>
                        <span class="text-slate-600">Reviews</span>
                    </div>
                </div>

                {{-- Reviews --}}
                <div class="grid grid-cols-1 gap-5 md:grid-cols-3 lg:col-span-9">

                    @foreach ([
            [
                'initial' => 'I',
                'name' => 'Istika Sapkota',
                'color' => 'bg-emerald-600',
                'text' => 'She was really nice and made us understand every detail about first aid and CPR, and all the required practical units.',
            ],
            [
                'initial' => 'K',
                'name' => 'Kalpana Tamang',
                'color' => 'bg-amber-600',
                'text' => 'I feel so comfortable and very knowledgeable and experienced. Training was well organized, practical and easy to follow.',
            ],
            [
                'initial' => 'T',
                'name' => 'Tabsum Chhetri',
                'color' => 'bg-indigo-600',
                'text' => 'Fatima literally she is the sweetest assessor. She gave me confidence and assisted through every single compliance check!',
            ],
        ] as $review)
                        <div
                            class="group relative rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-500 hover:-translate-y-2 hover:border-brand-200 hover:shadow-xl">

                            <div class="mb-3 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="{{ $review['color'] }} flex h-9 w-9 items-center justify-center rounded-full text-xs font-bold text-white shadow-sm transition duration-300 group-hover:scale-110">
                                        {{ $review['initial'] }}
                                    </div>

                                    <div>
                                        <h5 class="text-xs font-bold text-slate-800">
                                            {{ $review['name'] }}
                                        </h5>
                                        <span class="text-[10px] text-slate-400">
                                            7 months ago
                                        </span>
                                    </div>
                                </div>

                                <span class="font-bold text-blue-500">G</span>
                            </div>

                            <div class="mb-2 text-xs tracking-wide text-amber-400">
                                ★★★★★
                            </div>

                            <p class="line-clamp-3 text-xs leading-5 text-slate-600">
                                {{ $review['text'] }}
                            </p>

                            <button type="button"
                                class="mt-3 text-[11px] font-bold text-brand-500 transition hover:text-brand-700 hover:underline">
                                Read more
                            </button>
                        </div>
                    @endforeach

                </div>
            </div>

            <div
                class="mt-7 flex flex-col justify-between gap-3 border-t border-slate-200 pt-5 text-[11px] text-slate-400 sm:flex-row sm:items-center">
                <span>Showing our latest verified learner reviews</span>

                <span class="inline-flex items-center gap-1 font-semibold text-slate-600">
                    <svg class="h-4 w-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                        <path clip-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            fill-rule="evenodd" />
                    </svg>
                    Verified by Trustindex
                </span>
            </div>

        </div>
    </section>

@include('frontend.pages.about.section')


    <section id="courses" class=" bg-slate-50 py-20 lg:py-24">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- Header --}}
            <div class="mx-auto mb-12 max-w-3xl text-center">

                <span
                    class="inline-flex rounded-full bg-brand-50 px-4 py-1.5 text-[10px] font-bold uppercase tracking-[0.18em] text-brand-600">
                    Explore Your Path
                </span>

                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                    Qualification
                    <span class="text-brand-500">
                        Industries
                    </span>
                </h2>

                <div class="mx-auto mt-4 h-1 w-14 rounded-full bg-brand-500"></div>

                <p class="mt-5 text-sm leading-7 text-slate-600">
                    Select your industry below to convert your verifiable Australian and overseas workplace skills into
                    official accredited certificates.
                </p>

            </div>

            {{-- Industry grid --}}
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ($industries as $industry)
                    <article
                        class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-lg">

                        {{-- Image --}}
                        <div class="relative h-52 overflow-hidden">

                            <img src="{{ $industry['image'] }}" alt="{{ $industry['name'] }}"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105">

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent">
                            </div>

                            <span
                                class="absolute left-4 top-4 flex h-8 w-8 items-center justify-center rounded-lg bg-slate-950/70 text-[10px] font-bold text-white backdrop-blur-sm">
                                {{ sprintf('%02d', $loop->iteration) }}
                            </span>

                        </div>


                        {{-- Content --}}
                        <div class="p-5">

                            <h3
                                class="min-h-[48px] text-base font-extrabold leading-6 text-slate-900 transition group-hover:text-brand-600">
                                {{ $industry['name'] }}
                            </h3>

                            <a href="{{ route('industries.index', $industry['slug']) }}"
                                class="mt-5 inline-flex w-full items-center justify-center gap-2 rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-xs font-bold text-slate-700 transition hover:border-brand-500 hover:bg-brand-500 hover:text-white">
                                Explore Industry

                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" />
                                </svg>

                            </a>

                        </div>

                    </article>
                @endforeach

            </div>

        </div>
    </section>


    {{-- =========================================================
    CTA
========================================================= --}}
    <section aria-label="Quick Application Callout" class=" bg-white text-white py-16  lg:py-20">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="relative overflow-hidden rounded-3xl bg-brand-600 px-6 py-10 sm:px-10 lg:px-12">

                {{-- Subtle background image --}}
                <div class="absolute inset-0 opacity-10">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuD73VTZPW1GD8oymxYSkKHoyNSM2quckKcvPe2LERChkVToRk746QL_glBYdDIhhMc4ko5Kzz3y89rVJ0FYW9hWUo2FEa7YtexPW0JfsHhMI4-nyGb3S5lwO_fY_12MtdOBC1N0KVbsuUdsn2I4hfNPe3-eRYmHozShCZ_7CXSL9LPhP69pvjFwFETcCTqlczcVS6QRXsJ1vfStGL9mysBmxFL6EEjxeXi0rSA0Q8AcdJjnd-Jsb9A0Uw"
                        alt="" class="h-full w-full object-cover">
                </div>

                <div class="relative flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">

                    <div class="max-w-2xl">

                        <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-secondary-200">
                            Start Your Journey
                        </span>

                        <h2 class="mt-2 text-2xl font-extrabold tracking-tight sm:text-3xl lg:text-4xl">
                            Build a Better Future With
                            <span class="text-secondary-200">
                                Open School Education
                            </span>
                        </h2>

                        <p class="mt-4 text-sm leading-7 text-blue-100 sm:text-base">
                            You deserve better career growth and industry recognition.
                            Start with our quick Free Eligibility Assessment and our senior consultant will contact you
                            directly.
                        </p>

                    </div>

                    <a href="#eligibility-form"
                        class="inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-white px-6 py-3.5 text-sm font-bold text-slate-900 transition hover:bg-slate-100">
                        Check Your Eligibility

                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" />
                        </svg>

                    </a>

                </div>

            </div>

        </div>
    </section>


    {{-- =========================================================
    WHY CHOOSE US
========================================================= --}}
@include('frontend.pages.about.why')
@endsection
