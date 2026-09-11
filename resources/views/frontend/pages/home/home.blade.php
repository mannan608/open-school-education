@extends('frontend.layouts.app')

@section('content')
{{-- =========================================================
     FAQ
========================================================== --}}
<section
    id="faq"
    class="scroll-mt-28 bg-brand-lightBg py-20 lg:py-28"
>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 gap-14 lg:grid-cols-12 lg:gap-16">

            {{-- =================================================
                 FAQ LEFT CONTENT
            ================================================== --}}
            <div class="lg:col-span-5">

                <div class="lg:sticky lg:top-32">

                    {{-- Heading --}}
                    <div
                        data-reveal
                        class="-translate-x-12 opacity-0 transition-all duration-1000 ease-out"
                    >
                        <span
                            class="inline-flex items-center gap-2.5 text-[11px] font-extrabold uppercase tracking-[0.25em] text-brand-cyan"
                        >
                            FAQ

                            <span class="h-px w-8 bg-brand-cyan/60"></span>
                        </span>

                        <h2
                            class="mt-5 text-3xl font-black leading-[1.12] tracking-tight text-brand-navy sm:text-4xl lg:text-[2.6rem]"
                        >
                            Frequently Asked
                            <span class="text-brand-cyan">
                                Questions
                            </span>
                        </h2>

                        <p
                            class="mt-5 text-base leading-8 text-slate-500 sm:text-lg"
                        >
                            Everything you need to know about getting qualified through Recognition of Prior
                            Learning.
                        </p>
                    </div>


                    {{-- Contact Card --}}
                    <div
                        data-reveal
                        class="translate-y-12 opacity-0 transition-all delay-200 duration-1000 ease-out"
                    >
                        <div
                            class="mt-10 rounded-3xl border border-slate-200/70 bg-white p-7 shadow-sm transition-all duration-500 hover:-translate-y-1 hover:shadow-xl"
                        >

                            {{-- Icon --}}
                            <span
                                class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-brand-blue to-brand-cyan text-white shadow-lg shadow-brand-blue/25"
                            >
                                <i
                                    data-lucide="message-square"
                                    class="h-6 w-6"
                                ></i>
                            </span>


                            <h3
                                class="mt-5 text-lg font-extrabold text-brand-navy"
                            >
                                Still have questions?
                            </h3>


                            <p
                                class="mt-2 text-sm leading-7 text-slate-500"
                            >
                                Our RPL specialists are happy to walk you through the process, evidence and
                                pricing — obligation free.
                            </p>


                            <a
                                href="mailto:info@openschooleducation.com"
                                class="group mt-5 inline-flex items-center gap-2.5 rounded-xl border border-slate-200 px-5 py-3 text-xs font-extrabold uppercase tracking-wider text-brand-blue transition-all duration-500 hover:-translate-y-0.5 hover:border-brand-cyan hover:bg-brand-lightBg hover:shadow-lg"
                            >
                                <i
                                    data-lucide="mail"
                                    class="h-4 w-4 text-brand-cyan"
                                ></i>

                                Email Our Team

                                <i
                                    data-lucide="arrow-right"
                                    class="h-4 w-4 transition-transform duration-500 group-hover:translate-x-1"
                                ></i>
                            </a>

                        </div>
                    </div>

                </div>

            </div>


            {{-- =================================================
                 FAQ ACCORDION
            ================================================== --}}
            <div class="lg:col-span-7">

                <div
                    x-data="{ active: 0 }"
                    class="space-y-4"
                >

                    {{-- =================================================
                         FAQ 01
                    ================================================== --}}
                    <div
                        data-reveal
                        class="translate-y-12 opacity-0 transition-all duration-1000 ease-out"
                    >

                        <div
                            class="overflow-hidden rounded-2xl border bg-white transition-all duration-500"
                            :class="
                                active === 0
                                    ? 'border-brand-cyan/50 shadow-xl shadow-brand-blue/10'
                                    : 'border-slate-200/80 shadow-sm hover:border-brand-cyan/40'
                            "
                        >

                            {{-- Question --}}
                            <button
                                type="button"
                                @click="active = active === 0 ? null : 0"
                                class="flex w-full items-center justify-between gap-5 p-5 text-left sm:p-6"
                                :aria-expanded="active === 0"
                            >

                                <span class="flex items-center gap-4">

                                    <span
                                        class="hidden text-xs font-black tracking-widest transition-colors duration-300 sm:block"
                                        :class="
                                            active === 0
                                                ? 'text-brand-cyan'
                                                : 'text-slate-300'
                                        "
                                    >
                                        01
                                    </span>

                                    <span
                                        class="text-base font-extrabold tracking-tight text-brand-navy sm:text-lg"
                                    >
                                        Am I eligible for RPL recognition?
                                    </span>

                                </span>


                                {{-- Plus Icon --}}
                                <span
                                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full transition-all duration-500"
                                    :class="
                                        active === 0
                                            ? 'rotate-45 bg-brand-cyan text-white shadow-lg shadow-brand-cyan/40'
                                            : 'bg-brand-lightBg text-brand-cyan'
                                    "
                                >
                                    <i
                                        data-lucide="plus"
                                        class="h-5 w-5"
                                    ></i>
                                </span>

                            </button>


                            {{-- Answer --}}
                            <div
                                x-show="active === 0"
                                x-collapse.duration.500ms
                            >
                                <div class="min-h-0">

                                    <p
                                        class="px-5 pb-6 text-sm leading-7 text-slate-500 sm:px-6 sm:pl-[4.25rem]"
                                    >
                                        If you have relevant work experience, informal training, or existing
                                        skills in automotive electrical systems — such as working 20+ hours
                                        per week on vehicle electrical services — you may be eligible. A free
                                        preliminary assessment will help determine your suitability.
                                    </p>

                                </div>
                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                         FAQ 02
                    ================================================== --}}
                    <div
                        data-reveal
                        class="translate-y-12 opacity-0 transition-all delay-100 duration-1000 ease-out"
                    >

                        <div
                            class="overflow-hidden rounded-2xl border bg-white transition-all duration-500"
                            :class="
                                active === 1
                                    ? 'border-brand-cyan/50 shadow-xl shadow-brand-blue/10'
                                    : 'border-slate-200/80 shadow-sm hover:border-brand-cyan/40'
                            "
                        >

                            <button
                                type="button"
                                @click="active = active === 1 ? null : 1"
                                class="flex w-full items-center justify-between gap-5 p-5 text-left sm:p-6"
                                :aria-expanded="active === 1"
                            >

                                <span class="flex items-center gap-4">

                                    <span
                                        class="hidden text-xs font-black tracking-widest transition-colors duration-300 sm:block"
                                        :class="
                                            active === 1
                                                ? 'text-brand-cyan'
                                                : 'text-slate-300'
                                        "
                                    >
                                        02
                                    </span>

                                    <span
                                        class="text-base font-extrabold tracking-tight text-brand-navy sm:text-lg"
                                    >
                                        What evidence is required to qualify?
                                    </span>

                                </span>


                                <span
                                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full transition-all duration-500"
                                    :class="
                                        active === 1
                                            ? 'rotate-45 bg-brand-cyan text-white shadow-lg shadow-brand-cyan/40'
                                            : 'bg-brand-lightBg text-brand-cyan'
                                    "
                                >
                                    <i
                                        data-lucide="plus"
                                        class="h-5 w-5"
                                    ></i>
                                </span>

                            </button>


                            <div
                                x-show="active === 1"
                                x-collapse.duration.500ms
                            >
                                <div class="min-h-0">

                                    <p
                                        class="px-5 pb-6 text-sm leading-7 text-slate-500 sm:px-6 sm:pl-[4.25rem]"
                                    >
                                        Standard evidence typically includes work logs, photos or videos of
                                        completed work, employer references, a resume detailing relevant
                                        experience, payslips, or previous transcripts and certificates. An
                                        assessor confirms the exact requirements for your situation.
                                    </p>

                                </div>
                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                         FAQ 03
                    ================================================== --}}
                    <div
                        data-reveal
                        class="translate-y-12 opacity-0 transition-all delay-200 duration-1000 ease-out"
                    >

                        <div
                            class="overflow-hidden rounded-2xl border bg-white transition-all duration-500"
                            :class="
                                active === 2
                                    ? 'border-brand-cyan/50 shadow-xl shadow-brand-blue/10'
                                    : 'border-slate-200/80 shadow-sm hover:border-brand-cyan/40'
                            "
                        >

                            <button
                                type="button"
                                @click="active = active === 2 ? null : 2"
                                class="flex w-full items-center justify-between gap-5 p-5 text-left sm:p-6"
                                :aria-expanded="active === 2"
                            >

                                <span class="flex items-center gap-4">

                                    <span
                                        class="hidden text-xs font-black tracking-widest transition-colors duration-300 sm:block"
                                        :class="
                                            active === 2
                                                ? 'text-brand-cyan'
                                                : 'text-slate-300'
                                        "
                                    >
                                        03
                                    </span>

                                    <span
                                        class="text-base font-extrabold tracking-tight text-brand-navy sm:text-lg"
                                    >
                                        How long does the RPL process take?
                                    </span>

                                </span>


                                <span
                                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full transition-all duration-500"
                                    :class="
                                        active === 2
                                            ? 'rotate-45 bg-brand-cyan text-white shadow-lg shadow-brand-cyan/40'
                                            : 'bg-brand-lightBg text-brand-cyan'
                                    "
                                >
                                    <i
                                        data-lucide="plus"
                                        class="h-5 w-5"
                                    ></i>
                                </span>

                            </button>


                            <div
                                x-show="active === 2"
                                x-collapse.duration.500ms
                            >
                                <div class="min-h-0">

                                    <p
                                        class="px-5 pb-6 text-sm leading-7 text-slate-500 sm:px-6 sm:pl-[4.25rem]"
                                    >
                                        The estimated duration is around 4–12 weeks depending on your
                                        existing experience, the quality of your evidence and any outstanding
                                        assessment requirements.
                                    </p>

                                </div>
                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                         FAQ 04
                    ================================================== --}}
                    <div
                        data-reveal
                        class="translate-y-12 opacity-0 transition-all delay-300 duration-1000 ease-out"
                    >

                        <div
                            class="overflow-hidden rounded-2xl border bg-white transition-all duration-500"
                            :class="
                                active === 3
                                    ? 'border-brand-cyan/50 shadow-xl shadow-brand-blue/10'
                                    : 'border-slate-200/80 shadow-sm hover:border-brand-cyan/40'
                            "
                        >

                            <button
                                type="button"
                                @click="active = active === 3 ? null : 3"
                                class="flex w-full items-center justify-between gap-5 p-5 text-left sm:p-6"
                                :aria-expanded="active === 3"
                            >

                                <span class="flex items-center gap-4">

                                    <span
                                        class="hidden text-xs font-black tracking-widest transition-colors duration-300 sm:block"
                                        :class="
                                            active === 3
                                                ? 'text-brand-cyan'
                                                : 'text-slate-300'
                                        "
                                    >
                                        04
                                    </span>

                                    <span
                                        class="text-base font-extrabold tracking-tight text-brand-navy sm:text-lg"
                                    >
                                        Is this qualification nationally recognised?
                                    </span>

                                </span>


                                <span
                                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full transition-all duration-500"
                                    :class="
                                        active === 3
                                            ? 'rotate-45 bg-brand-cyan text-white shadow-lg shadow-brand-cyan/40'
                                            : 'bg-brand-lightBg text-brand-cyan'
                                    "
                                >
                                    <i
                                        data-lucide="plus"
                                        class="h-5 w-5"
                                    ></i>
                                </span>

                            </button>


                            <div
                                x-show="active === 3"
                                x-collapse.duration.500ms
                            >
                                <div class="min-h-0">

                                    <p
                                        class="px-5 pb-6 text-sm leading-7 text-slate-500 sm:px-6 sm:pl-[4.25rem]"
                                    >
                                        Yes. AUR30320 – Certificate III in Automotive Electrical Technology
                                        is a nationally recognised qualification under the Australian
                                        Qualifications Framework, issued by our partner Registered Training
                                        Organisations (RTO 31518).
                                    </p>

                                </div>
                            </div>

                        </div>

                    </div>


                    {{-- =================================================
                         FAQ 05
                    ================================================== --}}
                    <div
                        data-reveal
                        class="translate-y-12 opacity-0 transition-all delay-300 duration-1000 ease-out"
                    >

                        <div
                            class="overflow-hidden rounded-2xl border bg-white transition-all duration-500"
                            :class="
                                active === 4
                                    ? 'border-brand-cyan/50 shadow-xl shadow-brand-blue/10'
                                    : 'border-slate-200/80 shadow-sm hover:border-brand-cyan/40'
                            "
                        >

                            <button
                                type="button"
                                @click="active = active === 4 ? null : 4"
                                class="flex w-full items-center justify-between gap-5 p-5 text-left sm:p-6"
                                :aria-expanded="active === 4"
                            >

                                <span class="flex items-center gap-4">

                                    <span
                                        class="hidden text-xs font-black tracking-widest transition-colors duration-300 sm:block"
                                        :class="
                                            active === 4
                                                ? 'text-brand-cyan'
                                                : 'text-slate-300'
                                        "
                                    >
                                        05
                                    </span>

                                    <span
                                        class="text-base font-extrabold tracking-tight text-brand-navy sm:text-lg"
                                    >
                                        Do I need to attend any classes?
                                    </span>

                                </span>


                                <span
                                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full transition-all duration-500"
                                    :class="
                                        active === 4
                                            ? 'rotate-45 bg-brand-cyan text-white shadow-lg shadow-brand-cyan/40'
                                            : 'bg-brand-lightBg text-brand-cyan'
                                    "
                                >
                                    <i
                                        data-lucide="plus"
                                        class="h-5 w-5"
                                    ></i>
                                </span>

                            </button>


                            <div
                                x-show="active === 4"
                                x-collapse.duration.500ms
                            >
                                <div class="min-h-0">

                                    <p
                                        class="px-5 pb-6 text-sm leading-7 text-slate-500 sm:px-6 sm:pl-[4.25rem]"
                                    >
                                        No classroom attendance is required. RPL assesses the skills you
                                        already have. If small gaps are identified, targeted gap training may
                                        be recommended so you can complete the remaining units.
                                    </p>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>



{{-- =========================================================
     FINAL CTA
========================================================== --}}
<section class="bg-white py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div
            data-reveal
            class="scale-95 opacity-0 transition-all duration-1000 ease-out"
        >

            <div
                class="relative overflow-hidden rounded-[2.5rem] bg-gradient-to-br from-brand-blue via-brand-navy to-brand-deep px-6 py-16 text-center text-white shadow-2xl shadow-brand-navy/30 sm:px-12 lg:px-20 lg:py-20"
            >

                {{-- Background Grid --}}
                <div
                    class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,0.04)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,0.04)_1px,transparent_1px)] bg-[size:52px_52px] [mask-image:radial-gradient(ellipse_70%_80%_at_50%_50%,black,transparent)]"
                ></div>


                {{-- Decorative Circles --}}
                <div
                    class="pointer-events-none absolute -right-24 -top-24 h-72 w-72 rounded-full border border-brand-cyan/25 transition-transform duration-1000 hover:scale-110"
                ></div>

                <div
                    class="pointer-events-none absolute -right-10 -top-10 h-40 w-40 rounded-full border border-brand-cyan/35 transition-transform duration-1000 hover:scale-110"
                ></div>

                <div
                    class="pointer-events-none absolute -bottom-32 -left-20 h-80 w-80 rounded-full bg-brand-cyan/15 blur-3xl"
                ></div>


                {{-- CTA Content --}}
                <div class="relative z-10">

                    {{-- Badge --}}
                    <span
                        class="inline-flex items-center gap-2.5 rounded-full border border-brand-cyan/40 bg-brand-cyan/10 px-4 py-2 text-[11px] font-bold uppercase tracking-[0.2em] text-brand-cyanSoft"
                    >
                        Ready To Get Started?
                    </span>


                    {{-- Heading --}}
                    <h2
                        class="mx-auto mt-6 max-w-3xl text-3xl font-black leading-[1.1] tracking-tight sm:text-4xl lg:text-5xl"
                    >
                        Turn Your Experience Into a

                        <span
                            class="bg-gradient-to-r from-brand-cyan to-brand-cyanPale bg-clip-text text-transparent"
                        >
                            Qualification.
                        </span>
                    </h2>


                    {{-- Description --}}
                    <p
                        class="mx-auto mt-5 max-w-2xl text-base leading-8 text-slate-300 sm:text-lg"
                    >
                        Find out whether your existing automotive electrical skills can qualify you for RPL —
                        it takes less than a minute and costs nothing.
                    </p>


                    {{-- Buttons --}}
                    <div
                        class="mt-9 flex flex-wrap items-center justify-center gap-4"
                    >

                        {{-- Primary --}}
                        <a
                            href="#assessment-form"
                            class="group inline-flex items-center gap-3 rounded-xl bg-brand-cyan px-8 py-4 text-sm font-extrabold uppercase tracking-wider text-white shadow-xl shadow-brand-cyan/30 transition-all duration-500 hover:-translate-y-1 hover:bg-brand-cyanHover hover:shadow-2xl hover:shadow-brand-cyan/50"
                        >
                            Check My Eligibility

                            <i
                                data-lucide="arrow-right"
                                class="h-5 w-5 transition-transform duration-500 group-hover:translate-x-1.5"
                            ></i>
                        </a>


                        {{-- Secondary --}}
                        <a
                            href="mailto:info@openschooleducation.com"
                            class="inline-flex items-center gap-2.5 rounded-xl border border-white/20 bg-white/5 px-7 py-4 text-sm font-bold text-white backdrop-blur transition-all duration-500 hover:-translate-y-1 hover:border-brand-cyan/60 hover:bg-white/10"
                        >
                            <i
                                data-lucide="mail"
                                class="h-4 w-4 text-brand-cyan"
                            ></i>

                            Email Our Team
                        </a>

                    </div>


                    {{-- Trust Points --}}
                    <div
                        class="mt-10 flex flex-wrap items-center justify-center gap-x-8 gap-y-3"
                    >

                        <span
                            class="flex items-center gap-2 text-xs font-bold text-slate-300"
                        >
                            <i
                                data-lucide="shield-check"
                                class="h-4 w-4 text-brand-cyan"
                            ></i>

                            Free assessment
                        </span>


                        <span
                            class="flex items-center gap-2 text-xs font-bold text-slate-300"
                        >
                            <i
                                data-lucide="clock"
                                class="h-4 w-4 text-brand-cyan"
                            ></i>

                            60-second check
                        </span>


                        <span
                            class="flex items-center gap-2 text-xs font-bold text-slate-300"
                        >
                            <i
                                data-lucide="badge-check"
                                class="h-4 w-4 text-brand-cyan"
                            ></i>

                            Price match guarantee
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        /* ================================
           Lucide Icons
        ================================= */
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }


        /* ================================
           Footer Year
        ================================= */
        const year = document.getElementById('year');

        if (year) {
            year.textContent = new Date().getFullYear();
        }


        /* ================================
           Scroll Reveal
        ================================= */
        const revealElements =
            document.querySelectorAll('[data-reveal]');

        if (revealElements.length) {

            const revealObserver =
                new IntersectionObserver(
                    function (entries, observer) {

                        entries.forEach(function (entry) {

                            if (!entry.isIntersecting) {
                                return;
                            }

                            entry.target.classList.remove(
                                'opacity-0',
                                'translate-y-12',
                                '-translate-y-12',
                                'translate-x-12',
                                '-translate-x-12',
                                'scale-95'
                            );

                            observer.unobserve(entry.target);
                        });

                    },
                    {
                        threshold: 0.12,
                        rootMargin: '0px 0px -60px 0px'
                    }
                );


            revealElements.forEach(function (element) {
                revealObserver.observe(element);
            });
        }


        /* ================================
           Navbar Shadow
        ================================= */
        const navbar =
            document.getElementById('navbar');

        if (navbar) {

            function updateNavbar() {

                const scrolled =
                    window.scrollY > 12;

                navbar.classList.toggle(
                    'shadow-lg',
                    scrolled
                );

                navbar.classList.toggle(
                    'shadow-brand-blue/10',
                    scrolled
                );

                navbar.classList.toggle(
                    'border-slate-200',
                    scrolled
                );

                navbar.classList.toggle(
                    'border-slate-100',
                    !scrolled
                );
            }


            updateNavbar();

            window.addEventListener(
                'scroll',
                updateNavbar,
                {
                    passive: true
                }
            );
        }


        /* ================================
           Animated Counters
        ================================= */
        const statsSection =
            document.getElementById('stats');

        if (statsSection) {

            let counted = false;

            const statsObserver =
                new IntersectionObserver(
                    function (entries, observer) {

                        if (
                            !entries[0].isIntersecting ||
                            counted
                        ) {
                            return;
                        }

                        counted = true;


                        document
                            .querySelectorAll('[data-count]')
                            .forEach(function (element) {

                                const target =
                                    parseFloat(
                                        element.dataset.count || 0
                                    );

                                const decimals =
                                    parseInt(
                                        element.dataset.decimals || 0,
                                        10
                                    );

                                const suffix =
                                    element.dataset.suffix || '';

                                const duration = 1800;

                                const start =
                                    performance.now();


                                function animate(currentTime) {

                                    const progress =
                                        Math.min(
                                            (currentTime - start) /
                                            duration,
                                            1
                                        );

                                    const eased =
                                        1 -
                                        Math.pow(
                                            1 - progress,
                                            3
                                        );

                                    element.textContent =
                                        (
                                            target * eased
                                        ).toFixed(decimals) +
                                        suffix;


                                    if (progress < 1) {
                                        requestAnimationFrame(
                                            animate
                                        );
                                    }
                                }


                                requestAnimationFrame(animate);
                            });


                        observer.unobserve(statsSection);
                    },
                    {
                        threshold: 0.3
                    }
                );


            statsObserver.observe(statsSection);
        }


        /* ================================
           Assessment Form
        ================================= */
        const leadForm =
            document.getElementById('lead-form');

        if (leadForm) {

            const submitBtn =
                document.getElementById('submit-btn');

            const formBody =
                document.getElementById('form-body');

            const formSuccess =
                document.getElementById('form-success');

            const resetBtn =
                document.getElementById('form-reset');


            leadForm.addEventListener(
                'submit',
                function (event) {

                    event.preventDefault();


                    if (submitBtn) {

                        submitBtn.disabled = true;

                        submitBtn.classList.add(
                            'cursor-not-allowed',
                            'opacity-80'
                        );


                        const textNode =
                            submitBtn.firstChild;

                        if (textNode) {
                            textNode.textContent =
                                'Submitting ';
                        }
                    }


                    setTimeout(function () {

                        const nameInput =
                            document.getElementById('name');

                        const firstName =
                            nameInput
                                ? nameInput.value
                                    .trim()
                                    .split(' ')[0]
                                : '';


                        const successName =
                            document.getElementById(
                                'success-name'
                            );


                        if (successName) {

                            successName.textContent =
                                firstName
                                    ? ', ' + firstName
                                    : '';
                        }


                        if (formBody) {
                            formBody.classList.add('hidden');
                        }


                        if (formSuccess) {

                            formSuccess.classList.remove(
                                'hidden'
                            );

                            formSuccess.classList.add(
                                'flex'
                            );
                        }

                    }, 1100);
                }
            );


            if (resetBtn) {

                resetBtn.addEventListener(
                    'click',
                    function () {

                        leadForm.reset();


                        if (submitBtn) {

                            submitBtn.disabled = false;

                            submitBtn.classList.remove(
                                'cursor-not-allowed',
                                'opacity-80'
                            );


                            const textNode =
                                submitBtn.firstChild;

                            if (textNode) {

                                textNode.textContent =
                                    'Submit Assessment ';
                            }
                        }


                        if (formSuccess) {

                            formSuccess.classList.add(
                                'hidden'
                            );

                            formSuccess.classList.remove(
                                'flex'
                            );
                        }


                        if (formBody) {
                            formBody.classList.remove(
                                'hidden'
                            );
                        }
                    }
                );
            }
        }

    });
</script>
@endsection