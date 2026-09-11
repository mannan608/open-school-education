@extends('frontend.layouts.app')

@section('content')

{{-- =========================================================
    FAQ SECTION
========================================================= --}}
<section
    id="faq"
    class="relative overflow-hidden bg-slate-50 py-20 sm:py-24 lg:py-28"
>
    {{-- Background Decoration --}}
    <div class="pointer-events-none absolute inset-0 overflow-hidden">
        <div class="absolute -left-40 top-20 h-80 w-80 rounded-full bg-brand-cyan/5 blur-3xl"></div>
        <div class="absolute -right-40 bottom-20 h-96 w-96 rounded-full bg-brand-blue/5 blur-3xl"></div>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- =====================================================
            SECTION HEADER
        ====================================================== --}}
        <div class="mx-auto mb-14 max-w-3xl text-center lg:mb-16">

            <div class="mb-5 inline-flex items-center gap-3 rounded-full border border-brand-cyan/20 bg-white px-4 py-2 shadow-sm">
                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-brand-cyan/10">
                    <i
                        data-lucide="circle-help"
                        class="h-4 w-4 text-brand-cyan"
                    ></i>
                </span>

                <span class="text-[11px] font-black uppercase tracking-[0.22em] text-brand-blue">
                    Frequently Asked Questions
                </span>
            </div>

            <h2 class="text-3xl font-black leading-tight tracking-tight text-brand-navy sm:text-4xl lg:text-5xl">
                Everything You Need
                <span class="text-brand-cyan">
                    To Know
                </span>
            </h2>

            <p class="mx-auto mt-5 max-w-2xl text-base leading-8 text-slate-500 sm:text-lg">
                Find answers to the most common questions about Recognition of Prior Learning,
                eligibility, evidence and the qualification process.
            </p>

        </div>


        {{-- =====================================================
            MAIN FAQ GRID
        ====================================================== --}}
        <div class="grid grid-cols-1 items-start gap-8 lg:grid-cols-12 lg:gap-10">

            {{-- =================================================
                LEFT INFORMATION CARD
            ================================================== --}}
            <div class="lg:col-span-4">

                <div class="lg:sticky lg:top-28">

                    {{-- Intro Card --}}
                    <div class="relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-7 shadow-sm sm:p-8">

                        {{-- Decorative Icon --}}
                        <div class="absolute -right-10 -top-10 h-32 w-32 rounded-full bg-brand-cyan/5"></div>

                        <div class="relative">

                            {{-- Icon --}}
                            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-brand-blue to-brand-cyan text-white shadow-lg shadow-brand-blue/20">
                                <i
                                    data-lucide="messages-square"
                                    class="h-7 w-7"
                                ></i>
                            </div>

                            <h3 class="mt-6 text-xl font-black tracking-tight text-brand-navy">
                                Have more questions?
                            </h3>

                            <p class="mt-3 text-sm leading-7 text-slate-500">
                                Our RPL specialists can help you understand the assessment process,
                                required evidence, eligibility and next steps.
                            </p>

                            {{-- Contact Button --}}
                            <a
                                href="mailto:info@openschooleducation.com"
                                class="group mt-6 flex w-full items-center justify-between rounded-2xl bg-slate-50 px-4 py-4 transition-all duration-300 hover:bg-brand-lightBg"
                            >
                                <span class="flex items-center gap-3">

                                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-white text-brand-cyan shadow-sm">
                                        <i
                                            data-lucide="mail"
                                            class="h-5 w-5"
                                        ></i>
                                    </span>

                                    <span>
                                        <span class="block text-xs font-bold uppercase tracking-wider text-slate-400">
                                            Email Us
                                        </span>

                                        <span class="mt-0.5 block text-sm font-extrabold text-brand-navy">
                                            Our RPL Team
                                        </span>
                                    </span>

                                </span>

                                <span class="flex h-9 w-9 items-center justify-center rounded-full bg-white text-brand-blue shadow-sm transition-transform duration-300 group-hover:translate-x-1">
                                    <i
                                        data-lucide="arrow-up-right"
                                        class="h-4 w-4"
                                    ></i>
                                </span>

                            </a>

                        </div>

                    </div>


                    {{-- Quick Help --}}
                    <div class="mt-5 rounded-3xl bg-brand-navy p-6 text-white shadow-xl shadow-brand-navy/10">

                        <div class="flex items-start gap-4">

                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white/10">
                                <i
                                    data-lucide="headphones"
                                    class="h-5 w-5 text-brand-cyan"
                                ></i>
                            </div>

                            <div>
                                <p class="text-sm font-extrabold">
                                    Need personal guidance?
                                </p>

                                <p class="mt-1 text-xs leading-6 text-slate-300">
                                    Speak with our team about your experience and eligibility.
                                </p>
                            </div>

                        </div>

                        <a
                            href="#assessment-form"
                            class="group mt-5 inline-flex items-center gap-2 text-xs font-black uppercase tracking-wider text-brand-cyan"
                        >
                            Start Your Assessment

                            <i
                                data-lucide="arrow-right"
                                class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                            ></i>
                        </a>

                    </div>

                </div>

            </div>


            {{-- =================================================
                FAQ ACCORDION
            ================================================== --}}
            <div
                class="lg:col-span-8"
                x-data="{
                    active: 0,

                    faqs: [
                        {
                            question: 'Am I eligible for RPL recognition?',
                            answer: 'If you have relevant work experience, informal training, or existing skills in automotive electrical systems — such as working 20+ hours per week on vehicle electrical services — you may be eligible. A free preliminary assessment will help determine your suitability.',
                            icon: 'user-check'
                        },
                        {
                            question: 'What evidence is required to qualify?',
                            answer: 'Standard evidence typically includes work logs, photos or videos of completed work, employer references, a resume detailing relevant experience, payslips, or previous transcripts and certificates. An assessor confirms the exact requirements for your situation.',
                            icon: 'file-check-2'
                        },
                        {
                            question: 'How long does the RPL process take?',
                            answer: 'The estimated duration is around 4–12 weeks depending on your existing experience, the quality of your evidence and any outstanding assessment requirements.',
                            icon: 'clock-3'
                        },
                        {
                            question: 'Is this qualification nationally recognised?',
                            answer: 'Yes. AUR30320 – Certificate III in Automotive Electrical Technology is a nationally recognised qualification under the Australian Qualifications Framework, issued by our partner Registered Training Organisations (RTO 31518).',
                            icon: 'badge-check'
                        },
                        {
                            question: 'Do I need to attend any classes?',
                            answer: 'No classroom attendance is required. RPL assesses the skills you already have. If small gaps are identified, targeted gap training may be recommended so you can complete the remaining units.',
                            icon: 'graduation-cap'
                        }
                    ]
                }"
            >

                <div class="space-y-4">

                    <template x-for="(faq, index) in faqs" :key="index">

                        <div
                            class="group overflow-hidden rounded-3xl border bg-white transition-all duration-500"
                            :class="
                                active === index
                                    ? 'border-brand-cyan/40 shadow-xl shadow-brand-blue/10'
                                    : 'border-slate-200/80 shadow-sm hover:-translate-y-0.5 hover:border-brand-cyan/30 hover:shadow-lg'
                            "
                        >

                            {{-- QUESTION --}}
                            <button
                                type="button"
                                class="flex w-full items-center gap-4 p-5 text-left sm:p-6"
                                @click="active = active === index ? null : index"
                                :aria-expanded="active === index"
                            >

                                {{-- Number / Icon --}}
                                <div
                                    class="relative flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl transition-all duration-500"
                                    :class="
                                        active === index
                                            ? 'bg-brand-cyan text-white shadow-lg shadow-brand-cyan/30'
                                            : 'bg-brand-lightBg text-brand-blue group-hover:bg-brand-cyan/10'
                                    "
                                >

                                    <span
                                        x-show="active !== index"
                                        x-transition.opacity
                                        class="absolute"
                                    >
                                        <i
                                            :data-lucide="faq.icon"
                                            class="h-5 w-5"
                                        ></i>
                                    </span>

                                    <span
                                        x-show="active === index"
                                        x-transition.opacity
                                        class="absolute"
                                    >
                                        <i
                                            data-lucide="check"
                                            class="h-5 w-5"
                                        ></i>
                                    </span>

                                </div>


                                {{-- Question --}}
                                <span class="min-w-0 flex-1">

                                    <span
                                        class="mb-1 block text-[10px] font-black uppercase tracking-[0.18em]"
                                        :class="
                                            active === index
                                                ? 'text-brand-cyan'
                                                : 'text-slate-400'
                                        "
                                    >
                                        Question <span x-text="String(index + 1).padStart(2, '0')"></span>
                                    </span>

                                    <span
                                        class="block text-base font-extrabold leading-6 tracking-tight text-brand-navy sm:text-lg"
                                        x-text="faq.question"
                                    ></span>

                                </span>


                                {{-- Toggle --}}
                                <span
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border transition-all duration-500"
                                    :class="
                                        active === index
                                            ? 'rotate-180 border-brand-cyan bg-brand-cyan text-white'
                                            : 'border-slate-200 bg-slate-50 text-brand-blue'
                                    "
                                >
                                    <i
                                        data-lucide="chevron-down"
                                        class="h-5 w-5"
                                    ></i>
                                </span>

                            </button>


                            {{-- ANSWER --}}
                            <div
                                x-show="active === index"
                                x-collapse.duration.400ms
                            >

                                <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6 sm:pb-7">

                                    <div class="flex gap-4">

                                        {{-- Answer Indicator --}}
                                        <div class="hidden shrink-0 pt-1 sm:block">

                                            <div class="h-8 w-px bg-brand-cyan/30"></div>

                                        </div>

                                        <p
                                            class="text-sm leading-7 text-slate-500 sm:text-[15px]"
                                            x-text="faq.answer"
                                        ></p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </template>

                </div>


                {{-- Bottom Help --}}
                <div class="mt-6 flex flex-col gap-4 rounded-2xl border border-dashed border-slate-300 bg-white/70 p-5 sm:flex-row sm:items-center sm:justify-between">

                    <div class="flex items-center gap-3">

                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-lightBg text-brand-cyan">
                            <i
                                data-lucide="help-circle"
                                class="h-5 w-5"
                            ></i>
                        </span>

                        <div>
                            <p class="text-sm font-extrabold text-brand-navy">
                                Can't find the answer?
                            </p>

                            <p class="text-xs text-slate-400">
                                Our team is here to help.
                            </p>
                        </div>

                    </div>

                    <a
                        href="mailto:info@openschooleducation.com"
                        class="inline-flex items-center gap-2 text-xs font-black uppercase tracking-wider text-brand-blue transition-colors hover:text-brand-cyan"
                    >
                        Contact Us

                        <i
                            data-lucide="arrow-right"
                            class="h-4 w-4"
                        ></i>
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>


{{-- =========================================================
    FINAL CTA
========================================================= --}}
<section class="relative overflow-hidden bg-white py-20 sm:py-24 lg:py-28">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="relative overflow-hidden rounded-[2rem] bg-gradient-to-br from-brand-navy via-brand-blue to-brand-deep px-6 py-14 shadow-2xl shadow-brand-navy/20 sm:px-10 sm:py-16 lg:rounded-[2.5rem] lg:px-20 lg:py-20">

            {{-- =================================================
                BACKGROUND PATTERN
            ================================================== --}}
            <div class="pointer-events-none absolute inset-0 opacity-40">

                <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.04)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.04)_1px,transparent_1px)] bg-[size:48px_48px]"></div>

            </div>


            {{-- Glow --}}
            <div class="pointer-events-none absolute -right-32 -top-32 h-96 w-96 rounded-full bg-brand-cyan/20 blur-3xl"></div>

            <div class="pointer-events-none absolute -bottom-40 -left-20 h-96 w-96 rounded-full bg-brand-blue/40 blur-3xl"></div>


            {{-- Rings --}}
            <div class="pointer-events-none absolute -right-20 -top-20 hidden h-72 w-72 rounded-full border border-white/10 sm:block"></div>

            <div class="pointer-events-none absolute -right-8 -top-8 hidden h-48 w-48 rounded-full border border-brand-cyan/20 sm:block"></div>


            {{-- =================================================
                CONTENT
            ================================================== --}}
            <div class="relative z-10 mx-auto max-w-4xl text-center">

                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 rounded-full border border-brand-cyan/30 bg-white/5 px-4 py-2 backdrop-blur">

                    <span class="flex h-5 w-5 items-center justify-center rounded-full bg-brand-cyan/20">
                        <i
                            data-lucide="sparkles"
                            class="h-3 w-3 text-brand-cyan"
                        ></i>
                    </span>

                    <span class="text-[10px] font-black uppercase tracking-[0.2em] text-brand-cyan">
                        Ready To Get Started?
                    </span>

                </div>


                {{-- Heading --}}
                <h2 class="mt-6 text-3xl font-black leading-[1.08] tracking-tight text-white sm:text-4xl lg:text-5xl">
                    Turn Your Experience Into a
                    <span class="bg-gradient-to-r from-brand-cyan to-brand-cyanPale bg-clip-text text-transparent">
                        Qualification.
                    </span>
                </h2>


                {{-- Description --}}
                <p class="mx-auto mt-5 max-w-2xl text-sm leading-7 text-slate-300 sm:text-base sm:leading-8 lg:text-lg">
                    Find out whether your existing automotive electrical skills can qualify you
                    for RPL — it takes less than a minute and costs nothing.
                </p>


                {{-- =================================================
                    CTA BUTTONS
                ================================================== --}}
                <div class="mt-8 flex flex-col items-stretch justify-center gap-3 sm:flex-row sm:items-center">

                    {{-- Primary --}}
                    <a
                        href="#assessment-form"
                        class="group inline-flex items-center justify-center gap-3 rounded-2xl bg-brand-cyan px-7 py-4 text-sm font-black uppercase tracking-wider text-white shadow-xl shadow-brand-cyan/25 transition-all duration-300 hover:-translate-y-1 hover:bg-brand-cyanHover hover:shadow-2xl hover:shadow-brand-cyan/30"
                    >
                        <span>
                            Check My Eligibility
                        </span>

                        <span class="flex h-7 w-7 items-center justify-center rounded-full bg-white/15">

                            <i
                                data-lucide="arrow-right"
                                class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                            ></i>

                        </span>

                    </a>


                    {{-- Secondary --}}
                    <a
                        href="mailto:info@openschooleducation.com"
                        class="inline-flex items-center justify-center gap-2.5 rounded-2xl border border-white/15 bg-white/5 px-7 py-4 text-sm font-bold text-white backdrop-blur transition-all duration-300 hover:-translate-y-1 hover:border-brand-cyan/40 hover:bg-white/10"
                    >

                        <i
                            data-lucide="mail"
                            class="h-4 w-4 text-brand-cyan"
                        ></i>

                        Email Our Team

                    </a>

                </div>


                {{-- =================================================
                    TRUST POINTS
                ================================================== --}}
                <div class="mt-9 flex flex-wrap items-center justify-center gap-x-7 gap-y-3">

                    <span class="inline-flex items-center gap-2 text-xs font-bold text-slate-300">

                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-brand-cyan/10">
                            <i
                                data-lucide="shield-check"
                                class="h-3.5 w-3.5 text-brand-cyan"
                            ></i>
                        </span>

                        Free assessment

                    </span>


                    <span class="hidden h-4 w-px bg-white/10 sm:block"></span>


                    <span class="inline-flex items-center gap-2 text-xs font-bold text-slate-300">

                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-brand-cyan/10">
                            <i
                                data-lucide="clock-3"
                                class="h-3.5 w-3.5 text-brand-cyan"
                            ></i>
                        </span>

                        60-second process

                    </span>


                    <span class="hidden h-4 w-px bg-white/10 sm:block"></span>


                    <span class="inline-flex items-center gap-2 text-xs font-bold text-slate-300">

                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-brand-cyan/10">
                            <i
                                data-lucide="badge-check"
                                class="h-3.5 w-3.5 text-brand-cyan"
                            ></i>
                        </span>

                        Expert guidance

                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    LUCIDE ICON INITIALISATION
========================================================= --}}
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    });

    document.addEventListener('alpine:init', () => {
        Alpine.effect(() => {
            setTimeout(() => {
                if (typeof lucide !== 'undefined') {
                    lucide.createIcons();
                }
            }, 0);
        });
    });
</script>
@endpush

@endsection