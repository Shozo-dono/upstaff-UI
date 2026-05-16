(function () {
  // ── Smooth scroll ─────────────────────────────────────────────────────────
  const allLinks = document.querySelectorAll('a[href^="#"]');
  allLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      const hash = this.getAttribute("href");
      if (hash === "#" || hash === "") return;
      const target = document.querySelector(hash);
      if (target) {
        e.preventDefault();
        const offset = 85;
        const elementPosition = target.getBoundingClientRect().top + window.scrollY;
        window.scrollTo({ top: elementPosition - offset, behavior: "smooth" });
        history.pushState(null, null, hash);
      }
    });
  });

  if (window.location.hash) {
    setTimeout(() => {
      const target = document.querySelector(window.location.hash);
      if (target) {
        const offset = 85;
        const y = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top: y, behavior: "smooth" });
      }
    }, 100);
  }

  // ── Dark / Light mode toggle ───────────────────────────────────────────────
  const html      = document.documentElement;
  const btn       = document.getElementById("theme-toggle");
  const iconSun   = document.getElementById("icon-sun");
  const iconMoon  = document.getElementById("icon-moon");

  // Read saved preference, or default to light
  const savedTheme = localStorage.getItem("upstaff-theme") || "light";
  applyTheme(savedTheme);

  if (btn) {
    btn.addEventListener("click", () => {
      const next = html.classList.contains("dark") ? "light" : "dark";
      applyTheme(next);
      localStorage.setItem("upstaff-theme", next);
    });
  }

  function applyTheme(theme) {
    if (theme === "dark") {
      html.classList.add("dark");
      if (iconSun)  iconSun.style.display  = "block";
      if (iconMoon) iconMoon.style.display = "none";
      if (btn) btn.setAttribute("title", "Switch to light mode");
    } else {
      html.classList.remove("dark");
      if (iconSun)  iconSun.style.display  = "none";
      if (iconMoon) iconMoon.style.display = "block";
      if (btn) btn.setAttribute("title", "Switch to dark mode");
    }
  }
})();
