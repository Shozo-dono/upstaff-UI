<header class="
      fixed top-0 left-0 right-0 z-[100]
      flex items-center justify-between
      px-10 py-4
      backdrop-blur-[18px]
      border-b
      max-[768px]:px-5
    " style="background: var(--header-bg); border-color: var(--header-border);">

    <!-- Logo area -->
    <div class="flex items-center gap-2.5">
        <div class="w-[42px] h-[42px] flex-shrink-0">
            <img src="image/logo.png" alt="upstaff Logo" class="w-full h-full object-contain" />
        </div>
        <span class="text-[1.45rem] font-bold tracking-[0.04em]" style="color: var(--page-text);">upstaff</span>
    </div>

    <!-- Nav links -->
    <nav class="flex gap-9 max-[768px]:hidden">
        <a href="#hero"
            class="text-[0.82rem] font-normal tracking-[0.1em] transition-colors duration-[250ms]"
            style="color: var(--nav-text);"
            onmouseover="this.style.color='var(--nav-hover)'"
            onmouseout="this.style.color='var(--nav-text)'">HOME</a>
        <a href="#features"
            class="text-[0.82rem] font-normal tracking-[0.1em] transition-colors duration-[250ms]"
            style="color: var(--nav-text);"
            onmouseover="this.style.color='var(--nav-hover)'"
            onmouseout="this.style.color='var(--nav-text)'">FEATURES</a>
        <a href="#about"
            class="text-[0.82rem] font-normal tracking-[0.1em] transition-colors duration-[250ms]"
            style="color: var(--nav-text);"
            onmouseover="this.style.color='var(--nav-hover)'"
            onmouseout="this.style.color='var(--nav-text)'">ABOUT</a>
        <a href="#contact-section"
            class="text-[0.82rem] font-normal tracking-[0.1em] transition-colors duration-[250ms]"
            style="color: var(--nav-text);"
            onmouseover="this.style.color='var(--nav-hover)'"
            onmouseout="this.style.color='var(--nav-text)'">CONTACT</a>
    </nav>

    <!-- Right side: CTA + toggle -->
    <div class="flex flex-row items-center gap-3 max-[768px]:gap-2">

        <!-- Theme toggle button -->
        <button id="theme-toggle" aria-label="Toggle dark/light mode" title="Toggle theme">
            <!-- Sun icon (shown in dark mode → click to go light) -->
            <svg id="icon-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none">
                <circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/>
                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
                <line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/>
                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
            </svg>
            <!-- Moon icon (shown in light mode → click to go dark) -->
            <svg id="icon-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
            </svg>
        </button>

        <!-- Login/Register pill -->
        <a href="#" class="
             text-[0.78rem] font-medium tracking-[0.1em] uppercase
             px-[22px] py-[9px]
             border rounded-full
             cursor-pointer whitespace-nowrap inline-flex items-center
             transition-all duration-[250ms]
             max-[768px]:hidden
           "
           style="border-color: var(--pill-border); color: var(--pill-text); background: transparent;"
           onmouseover="this.style.background='var(--pill-hover-bg)'; this.style.borderColor='var(--pill-hover-border)'"
           onmouseout="this.style.background='transparent'; this.style.borderColor='var(--pill-border)'">LogIn/Register</a>
    </div>
</header>
