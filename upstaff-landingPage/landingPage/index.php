<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>upstaff Academy</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Google Fonts: DM Sans -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>

<body class="overflow-x-hidden" style="background:var(--page-bg);color:var(--page-text) overflow-y-auto w-full h-full">

    <div id="main-page" class="min-h-screen">

        <?php include 'includes/header.php'; ?>

        <!-- HERO -->
        <section id="hero" class="
               min-h-screen
               px-12 pt-[160px] pb-20
               flex flex-col justify-center
               relative overflow-hidden
               max-[768px]:px-6 max-[768px]:pt-[120px] max-[768px]:pb-[60px]
             ">

            <!-- Slideshow background -->
            <div class="absolute inset-0 z-0 overflow-hidden">
                <div class="hero-slideshow-track flex h-full">
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/1.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/2.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/3.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/4.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/5.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/6.JPG');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/7.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/8.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/9.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/10.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/11.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/12.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/13.jpg');">
                    </div>
                    <!-- duplicates for seamless loop -->
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/1.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/2.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/3.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/4.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/5.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/6.JPG');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/7.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/8.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/9.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/10.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/11.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/12.jpg');">
                    </div>
                    <div class="flex-shrink-0 w-screen h-full bg-cover bg-center" style="background-image: url('image/13.jpg');">
                    </div>
                </div>
            </div>

            <!-- Dark tint overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-[#0d0c0b] via-[#0d0c0b]/60 to-transparent"></div>

            <!-- Hero content -->
            <h1 class="
        relative z-[2]
        text-[clamp(3rem,8vw,8rem)] font-bold leading-[1.05] tracking-[-0.02em]
        text-white max-w-[720px]
        [text-shadow:0_2px_40px_rgba(0,0,0,0.5)]
      ">
                Welcome to<br />
                <em class="italic text-[#87ceeb]">upstaff</em><br />
                Academy
            </h1>

            <p class="
        relative z-[2]
        text-base leading-[1.8] text-white/80
        mt-7 max-w-[380px]
        [text-shadow:0_1px_12px_rgba(0,0,0,0.4)]
      ">
                Learn faster. Build skills. Connect with opportunities.<br />
            </p>

            <div class="relative z-[2] flex gap-4 mt-11">
                <a href="#" class="
             text-[0.85rem] font-semibold tracking-[0.06em] uppercase
             px-9 py-3.5
             bg-[rgb(41,167,206)] rounded-full
             shadow-[0_4px_24px_rgba(10,67,85,0.4)]
             hover:bg-[#16a0d6] hover:-translate-y-0.5 hover:shadow-[0_8px_32px_rgb(255,255,255)]
             transition-all duration-[250ms]
           ">Get Started</a>
                <a href="#" class="
             text-[0.85rem] font-light tracking-[0.06em] uppercase
             px-8 py-3.5
             border border-white/40 rounded-full
             text-white/85
             shadow-[0_4px_24px_rgba(95,218,255,0.4)]
             hover:text-white hover:border-white/80 hover:-translate-y-0.5
             transition-all duration-[250ms]
           ">Learn More</a>
            </div>
        </section>


        <!-- FEATURES SECTION -->
        <section id="features"
            class="relative py-28 px-10 overflow-hidden" style="background:var(--section-bg) max-[768px]:px-6 max-[768px]:py-20">

            <!-- Subtle grid texture overlay -->
            <div class="absolute inset-0 opacity-[0.03] pointer-events-none"
                style="background-image: linear-gradient(var(--grid-texture) 1px, transparent 1px), linear-gradient(90deg, var(--grid-texture) 1px, transparent 1px); background-size: 60px 60px;">
            </div>

            <!-- Ambient glow -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[900px] h-[600px] rounded-full pointer-events-none"
                style="background: radial-gradient(ellipse at center, var(--glow-color) 0%, transparent 70%);">
            </div>

            <div class="relative z-[1] max-w-[1200px] mx-auto">

                <!-- Section header -->
                <div class="mb-20 max-[768px]:mb-12">
                    <p class="text-[0.72rem] font-semibold tracking-[0.22em] uppercase mb-4" style="color:var(--accent)">Platform
                        Features</p>
                    <h2
                        class="text-[clamp(2.4rem,5vw,4rem)] font-bold leading-[1.08] tracking-[-0.02em] max-w-[560px]" style="color:var(--page-text)">
                        Everything your team needs to <em style="font-style:italic;color:var(--accent)">grow</em>
                    </h2>
                    <p class="mt-5 text-base leading-[1.85] max-w-[480px] font-light" style="color:var(--muted)">
                        upstaff Academy is a built-in Learning Management System designed to help employees learn
                        smarter, build real-world skills, and stay ahead in their careers — all within one unified
                        platform.
                    </p>
                </div>

                <!-- Feature cards grid -->
                <div class="grid grid-cols-3 gap-5 max-[1024px]:grid-cols-2 max-[640px]:grid-cols-1">

                    <!-- Card 1 -->
                    <div
                        class="feature-card group relative flex flex-col gap-4 p-7 rounded-2xl transition-all duration-[350ms] cursor-default" style="border:1px solid var(--card-border);background:var(--card-bg)" onmouseover="this.style.background='var(--card-hover-bg)';this.style.borderColor='var(--card-hover-border)'" onmouseout="this.style.background='var(--card-bg)';this.style.borderColor='var(--card-border)'">
                        <div
                            class="w-11 h-11 rounded-xl flex items-center justify-center transition-colors duration-[350ms]" style="background:var(--icon-bg);border:1px solid var(--icon-border)">
                            <svg class="w-5 h-5" style="color:var(--accent)" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path d="M12 2L2 7l10 5 10-5-10-5z" />
                                <path d="M2 17l10 5 10-5" />
                                <path d="M2 12l10 5 10-5" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-[1rem] font-semibold mb-2 tracking-[-0.01em]" style="color:var(--page-text)">General Skills
                                Library</h3>
                            <p class="text-[0.85rem] leading-[1.8] font-light" style="color:var(--muted)">Access a curated library
                                of foundational courses covering communication, workplace readiness, compliance, and
                                professional essentials — available to every employee from day one.</p>
                        </div>
                        <div
                            class="mt-auto pt-2 flex items-center gap-1.5 text-[0.75rem] font-medium tracking-[0.06em] uppercase" style="color:var(--accent-60) opacity-0 group-hover:opacity-100 transition-opacity duration-[300ms]">
                            <span>Explore Library</span>
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="feature-card group relative flex flex-col gap-4 p-7 rounded-2xl transition-all duration-[350ms] cursor-default" style="border:1px solid var(--card-border);background:var(--card-bg)" onmouseover="this.style.background='var(--card-hover-bg)';this.style.borderColor='var(--card-hover-border)'" onmouseout="this.style.background='var(--card-bg)';this.style.borderColor='var(--card-border)'">
                        <div
                            class="w-11 h-11 rounded-xl flex items-center justify-center transition-colors duration-[350ms]" style="background:var(--icon-bg);border:1px solid var(--icon-border)">
                            <svg class="w-5 h-5" style="color:var(--accent)" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-[1rem] font-semibold mb-2 tracking-[-0.01em]" style="color:var(--page-text)">Upskilling Paths
                            </h3>
                            <p class="text-[0.85rem] leading-[1.8] font-light" style="color:var(--muted)">Role-specific learning
                                journeys that guide employees through progressive skill development — from beginner
                                fundamentals to advanced, job-ready expertise tailored to their career goals.</p>
                        </div>
                        <div
                            class="mt-auto pt-2 flex items-center gap-1.5 text-[0.75rem] font-medium tracking-[0.06em] uppercase" style="color:var(--accent-60) opacity-0 group-hover:opacity-100 transition-opacity duration-[300ms]">
                            <span>View Paths</span>
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="feature-card group relative flex flex-col gap-4 p-7 rounded-2xl transition-all duration-[350ms] cursor-default" style="border:1px solid var(--card-border);background:var(--card-bg)" onmouseover="this.style.background='var(--card-hover-bg)';this.style.borderColor='var(--card-hover-border)'" onmouseout="this.style.background='var(--card-bg)';this.style.borderColor='var(--card-border)'">
                        <div
                            class="w-11 h-11 rounded-xl flex items-center justify-center transition-colors duration-[350ms]" style="background:var(--icon-bg);border:1px solid var(--icon-border)">
                            <svg class="w-5 h-5" style="color:var(--accent)" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path d="M18 20V10M12 20V4M6 20v-6" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-[1rem] font-semibold mb-2 tracking-[-0.01em]" style="color:var(--page-text)">Progress Tracking
                            </h3>
                            <p class="text-[0.85rem] leading-[1.8] font-light" style="color:var(--muted)">Real-time dashboards give
                                employees and managers full visibility into course completion, assessment scores, and
                                learning milestones — so growth is always measurable and transparent.</p>
                        </div>
                        <div
                            class="mt-auto pt-2 flex items-center gap-1.5 text-[0.75rem] font-medium tracking-[0.06em] uppercase" style="color:var(--accent-60) opacity-0 group-hover:opacity-100 transition-opacity duration-[300ms]">
                            <span>See Analytics</span>
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div
                        class="feature-card group relative flex flex-col gap-4 p-7 rounded-2xl transition-all duration-[350ms] cursor-default" style="border:1px solid var(--card-border);background:var(--card-bg)" onmouseover="this.style.background='var(--card-hover-bg)';this.style.borderColor='var(--card-hover-border)'" onmouseout="this.style.background='var(--card-bg)';this.style.borderColor='var(--card-border)'">
                        <div
                            class="w-11 h-11 rounded-xl flex items-center justify-center transition-colors duration-[350ms]" style="background:var(--icon-bg);border:1px solid var(--icon-border)">
                            <svg class="w-5 h-5" style="color:var(--accent)" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <circle cx="12" cy="8" r="4" />
                                <path d="M6 20v-1a6 6 0 0 1 12 0v1" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-[1rem] font-semibold mb-2 tracking-[-0.01em]" style="color:var(--page-text)">Personalized
                                Learning</h3>
                            <p class="text-[0.85rem] leading-[1.8] font-light" style="color:var(--muted)">Smart recommendations
                                adapt to each learner's pace, role, and progress. Every employee gets a tailored
                                experience — not a one-size-fits-all curriculum.</p>
                        </div>
                        <div
                            class="mt-auto pt-2 flex items-center gap-1.5 text-[0.75rem] font-medium tracking-[0.06em] uppercase" style="color:var(--accent-60) opacity-0 group-hover:opacity-100 transition-opacity duration-[300ms]">
                            <span>Learn More</span>
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div
                        class="feature-card group relative flex flex-col gap-4 p-7 rounded-2xl transition-all duration-[350ms] cursor-default" style="border:1px solid var(--card-border);background:var(--card-bg)" onmouseover="this.style.background='var(--card-hover-bg)';this.style.borderColor='var(--card-hover-border)'" onmouseout="this.style.background='var(--card-bg)';this.style.borderColor='var(--card-border)'">
                        <div
                            class="w-11 h-11 rounded-xl flex items-center justify-center transition-colors duration-[350ms]" style="background:var(--icon-bg);border:1px solid var(--icon-border)">
                            <svg class="w-5 h-5" style="color:var(--accent)" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-[1rem] font-semibold mb-2 tracking-[-0.01em]" style="color:var(--page-text)">HR &amp; Team
                                Management</h3>
                            <p class="text-[0.85rem] leading-[1.8] font-light" style="color:var(--muted)">Assign courses, set
                                deadlines, and manage teams at scale. HR managers get a full organizational view —
                                tracking who's learning, who's excelling, and where support is needed.</p>
                        </div>
                        <div
                            class="mt-auto pt-2 flex items-center gap-1.5 text-[0.75rem] font-medium tracking-[0.06em] uppercase" style="color:var(--accent-60) opacity-0 group-hover:opacity-100 transition-opacity duration-[300ms]">
                            <span>Manage Teams</span>
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div
                        class="feature-card group relative flex flex-col gap-4 p-7 rounded-2xl transition-all duration-[350ms] cursor-default" style="border:1px solid var(--card-border);background:var(--card-bg)" onmouseover="this.style.background='var(--card-hover-bg)';this.style.borderColor='var(--card-hover-border)'" onmouseout="this.style.background='var(--card-bg)';this.style.borderColor='var(--card-border)'">
                        <div
                            class="w-11 h-11 rounded-xl flex items-center justify-center transition-colors duration-[350ms]" style="background:var(--icon-bg);border:1px solid var(--icon-border)">
                            <svg class="w-5 h-5" style="color:var(--accent)" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8">
                                <circle cx="12" cy="8" r="6" />
                                <path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-[1rem] font-semibold mb-2 tracking-[-0.01em]" style="color:var(--page-text)">Certifications
                                &amp; Badges</h3>
                            <p class="text-[0.85rem] leading-[1.8] font-light" style="color:var(--muted)">Reward learning with
                                verifiable digital certificates and achievement badges. Recognized credentials that
                                employees can showcase — and organizations can use to validate internal expertise.</p>
                        </div>
                        <div
                            class="mt-auto pt-2 flex items-center gap-1.5 text-[0.75rem] font-medium tracking-[0.06em] uppercase" style="color:var(--accent-60) opacity-0 group-hover:opacity-100 transition-opacity duration-[300ms]">
                            <span>View Credentials</span>
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>

                </div>

                <!-- Bottom CTA strip -->
                <div
                    class="mt-16 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 pt-10 border-t" style="border-top-color:var(--cta-divider)">
                    <div>
                        <p class="font-medium text-[1.05rem] mb-1" style="color:var(--page-text)">Ready to start learning?</p>
                        <p class="text-[0.85rem] font-light" style="color:var(--muted)">Join thousands of employees already growing
                            with upstaff Academy.</p>
                    </div>
                    <a href="#"
                        class="text-[0.82rem] font-semibold tracking-[0.08em] uppercase px-8 py-3 rounded-full transition-all duration-[280ms] whitespace-nowrap" style="background:var(--cta-btn-bg);border:1px solid var(--cta-btn-border);color:var(--cta-btn-text)" onmouseover="this.style.background='var(--cta-btn-hover-bg)';this.style.color='#ffffff'" onmouseout="this.style.background='var(--cta-btn-bg)';this.style.color='var(--cta-btn-text)'">Get
                        Started</a>
                </div>

            </div>
        </section>


        <!-- ABOUT US SECTION -->
        <section id="about" class="relative py-28 px-10 overflow-hidden max-[768px]:px-6 max-[768px]:py-20"
            style="background: var(--about-bg);">

            <!-- Decorative dividers -->
            <div class="absolute top-0 left-10 right-10 h-px"
                style="background: linear-gradient(90deg, transparent, var(--section-divider), transparent);"></div>

            <!-- Floating accent circles -->
            <div class="absolute top-20 right-[8%] w-[320px] h-[320px] rounded-full pointer-events-none opacity-[0.05]"
                style="background: radial-gradient(circle, var(--accent) 0%, transparent 70%);"></div>
            <div class="absolute bottom-16 left-[5%] w-[200px] h-[200px] rounded-full pointer-events-none opacity-[0.04]"
                style="background: radial-gradient(circle, var(--accent-teal) 0%, transparent 70%);"></div>

            <div class="relative z-[1] max-w-[1200px] mx-auto">

                <!-- Label -->
                <p class="text-[0.72rem] font-semibold tracking-[0.22em] uppercase mb-6" style="color:var(--accent-teal)">About Us</p>

                <!-- Two-column layout -->
                <div class="grid grid-cols-[1fr_1.1fr] gap-16 items-start max-[900px]:grid-cols-1 max-[900px]:gap-10">

                    <!-- Left: Headline + stats -->
                    <div>
                        <h2
                            class="text-[clamp(2.2rem,4.5vw,3.6rem)] font-bold leading-[1.08] tracking-[-0.02em] mb-10" style="color:var(--page-text)">
                            Built for the<br />
                            <em style="font-style:italic;color:var(--accent)">people</em> who<br />
                            power your business
                        </h2>

                        <div
                            class="grid grid-cols-2 gap-px rounded-2xl overflow-hidden" style="background:var(--stat-grid-bg);border:1px solid var(--stat-grid-border)">
                            <div class="px-6 py-6" style="background:var(--stat-bg)">
                                <p class="text-[2rem] font-bold tracking-[-0.03em]" style="color:var(--page-text)">500<span
                                        style="color:var(--accent)">+</span></p>
                                <p class="text-[0.78rem] mt-1 font-light tracking-[0.04em]" style="color:var(--muted)">Courses
                                    Available</p>
                            </div>
                            <div class="px-6 py-6" style="background:var(--stat-bg)">
                                <p class="text-[2rem] font-bold tracking-[-0.03em]" style="color:var(--page-text)">12<span
                                        style="color:var(--accent)">k+</span></p>
                                <p class="text-[0.78rem] mt-1 font-light tracking-[0.04em]" style="color:var(--muted)">Active
                                    Learners</p>
                            </div>
                            <div class="px-6 py-6" style="background:var(--stat-bg)">
                                <p class="text-[2rem] font-bold tracking-[-0.03em]" style="color:var(--page-text)">98<span
                                        style="color:var(--accent)">%</span></p>
                                <p class="text-[0.78rem] mt-1 font-light tracking-[0.04em]" style="color:var(--muted)">Completion
                                    Rate</p>
                            </div>
                            <div class="px-6 py-6" style="background:var(--stat-bg)">
                                <p class="text-[2rem] font-bold tracking-[-0.03em]" style="color:var(--page-text)">40<span
                                        style="color:var(--accent)">+</span></p>
                                <p class="text-[0.78rem] mt-1 font-light tracking-[0.04em]" style="color:var(--muted)">Industry
                                    Categories</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Story + values -->
                    <div class="flex flex-col gap-8">
                        <div>
                            <h3 class="text-[0.72rem] font-semibold tracking-[0.18em] uppercase mb-4" style="color:var(--story-label)">
                                Our Story</h3>
                            <p class="text-[0.95rem] leading-[1.9] font-light" style="color:var(--muted)">
                                upstaff Academy was born from a simple conviction: every employee deserves access to
                                world-class learning — not just the people at the top. We built a Learning Management
                                System directly into the upstaff platform so that skill-building isn't a separate
                                afterthought, it's woven into the daily rhythm of work.
                            </p>
                            <p class="text-[0.95rem] leading-[1.9] font-light" style="color:var(--muted) mt-4">
                                From frontline workers to senior managers, our platform offers both general skills for
                                workplace readiness and targeted upskilling paths that move with an employee's
                                ambitions. Learning on upstaff Academy feels less like mandatory training and more like
                                a genuine investment in people.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-[0.72rem] font-semibold tracking-[0.18em] uppercase mb-5" style="color:var(--story-label)">
                                What We Stand For</h3>
                            <div class="flex flex-col gap-4">

                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-8 h-8 flex-shrink-0 rounded-lg flex items-center justify-center mt-0.5" style="background:var(--val-icon-bg);border:1px solid var(--val-icon-border)">
                                        <svg class="w-4 h-4" style="color:var(--accent)" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-[0.88rem] font-medium mb-1" style="color:var(--page-text)">Learning for Everyone</p>
                                        <p class="text-[0.82rem] leading-[1.75] font-light" style="color:var(--muted)">No
                                            gatekeeping. Every team member has access to core skills regardless of their
                                            role or seniority.</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-8 h-8 flex-shrink-0 rounded-lg flex items-center justify-center mt-0.5" style="background:var(--val-icon-bg);border:1px solid var(--val-icon-border)">
                                        <svg class="w-4 h-4" style="color:var(--accent)" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10" />
                                            <path d="M12 8v4l3 3" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-[0.88rem] font-medium mb-1" style="color:var(--page-text)">Learn at Your Pace</p>
                                        <p class="text-[0.82rem] leading-[1.75] font-light" style="color:var(--muted)">Self-paced
                                            modules mean employees learn when and how it suits them — no rigid
                                            schedules.</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-8 h-8 flex-shrink-0 rounded-lg flex items-center justify-center mt-0.5" style="background:var(--val-icon-bg);border:1px solid var(--val-icon-border)">
                                        <svg class="w-4 h-4" style="color:var(--accent)" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />
                                            <polyline points="17 6 23 6 23 12" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-[0.88rem] font-medium mb-1" style="color:var(--page-text)">Growth That's Measurable
                                        </p>
                                        <p class="text-[0.82rem] leading-[1.75] font-light" style="color:var(--muted)">We believe in
                                            data-driven development. Every step forward is tracked, recognized, and
                                            celebrated.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom team callout banner -->
                <div class="mt-20 relative rounded-2xl overflow-hidden p-10 max-[768px]:p-7" style="border:1px solid var(--callout-border)"
                    style="background: var(--callout-bg);">
                    <div class="absolute inset-0 pointer-events-none opacity-[0.04]"
                        style="background-image: linear-gradient(var(--callout-grid) 1px, transparent 1px), linear-gradient(90deg, var(--callout-grid) 1px, transparent 1px); background-size: 40px 40px;">
                    </div>
                    <div
                        class="relative z-[1] flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
                        <div>
                            <p class="font-semibold text-[1.1rem] mb-1.5 tracking-[-0.01em]" style="color:var(--page-text)">Backed by the
                                upstaff team</p>
                            <p class="text-[0.85rem] font-light leading-[1.75] max-w-[480px]" style="color:var(--muted)">upstaff
                                Academy is developed in-house by a team passionate about workforce development,
                                instructional design, and making technology that genuinely helps people thrive at work.
                            </p>
                        </div>
                        <a href="#"
                            class="flex-shrink-0 text-[0.8rem] font-medium tracking-[0.08em] uppercase px-7 py-3 rounded-full transition-all duration-[250ms] whitespace-nowrap" style="border:1px solid var(--callout-btn-border);color:var(--callout-btn-text)" onmouseover="this.style.background='var(--callout-btn-hover-bg)';this.style.borderColor='var(--callout-btn-hover-border)'" onmouseout="this.style.background='transparent';this.style.borderColor='var(--callout-btn-border)'">Meet
                            the Team &#8594;</a>
                    </div>
                </div>

            </div>

            <div class="absolute bottom-0 left-10 right-10 h-px"
                style="background: linear-gradient(90deg, transparent, var(--bottom-divider), transparent);"></div>
        </section>


    </div><!-- end #main-page -->
    <?php include 'includes/footer.php'; ?>
    <script src="script.js"></script>
</body>

</html>