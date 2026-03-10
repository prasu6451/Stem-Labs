<!-- header.html -->
<header class="site-header" role="banner" aria-label="Main navigation">
  <div class="container">
    <a class="brand" href="home.html" aria-label="Vidyantraa home">
      <div class="logo">V</div>
      <div class="brand-text">
        <div class="brand-name">Vidyantraa</div>
        <div class="brand-sub">STEM & Exam Prep</div>
      </div>
    </a>

    <button class="nav-toggle" aria-controls="primary-nav" aria-expanded="false" aria-label="Open menu">
      <span class="hamburger"></span>
    </button>

    <nav id="primary-nav" class="nav" role="navigation" aria-label="Primary">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="schools.php">For Schools</a></li>
        <li><a href="students_parents.php">Students & Parents</a></li>
        <li><a href="stems.php">STEM Labs</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>

    <div class="header-cta">
      <a class="btn-cta" href="contact.html">Request Presentation</a>
    </div>
  </div>

  <style>
    .site-header{position:sticky;top:0;z-index:60;background:linear-gradient(180deg, rgba(2,6,23,0.88), rgba(2,6,23,0.75));backdrop-filter:blur(6px);border-bottom:1px solid rgba(255,255,255,0.03)}
    .site-header .container{max-width:1200px;margin:0 auto;padding:12px 20px;display:flex;align-items:center;gap:18px}
    .brand{display:flex;align-items:center;gap:12px;text-decoration:none;color:inherit}
    .logo{width:48px;height:48px;border-radius:10px;background:linear-gradient(90deg,#6ee7b7,#7dd3fc);display:flex;align-items:center;justify-content:center;color:#022;font-weight:800;font-size:18px}
    .brand-name{font-weight:800;line-height:1;color:#eaf6f0}
    .brand-sub{font-size:12px;color:#9fb3c6;margin-top:2px}

    .nav{margin-left:auto;display:flex;align-items:center}
    .nav ul{display:flex;gap:18px;list-style:none;padding:0;margin:0}
    .nav a{color:var(--muted,#9fb3c6);text-decoration:none;padding:8px 10px;border-radius:10px;font-weight:600}
    .nav a:hover,.nav a:focus{color:#e6eef8;background:rgba(255,255,255,0.02)}

    .header-cta{margin-left:12px}
    .btn-cta{display:inline-block;background:linear-gradient(90deg,#6ee7b7,#7dd3fc);color:#022;padding:10px 14px;border-radius:12px;font-weight:800;text-decoration:none;box-shadow:0 8px 26px rgba(34,197,94,0.08)}

    .nav-toggle{display:none;background:transparent;border:0;color:inherit;padding:8px;border-radius:8px;cursor:pointer}
    .hamburger{width:22px;height:2px;background:#e6eef8;display:block;position:relative}
    .hamburger:before,.hamburger:after{content:"";position:absolute;left:0;width:22px;height:2px;background:#e6eef8}
    .hamburger:before{top:-7px}
    .hamburger:after{top:7px}

    @media (max-width:980px){
      .nav{position:fixed;right:12px;top:74px;background:linear-gradient(180deg, rgba(7,18,38,0.98), rgba(3,11,19,0.98));padding:14px;border-radius:12px;box-shadow:0 10px 40px rgba(2,6,23,0.6);transform:translateY(-10px);opacity:0;transition:all .22s;pointer-events:none;flex-direction:column}
      .nav.open{opacity:1;transform:none;pointer-events:auto}
      .nav ul{flex-direction:column;gap:10px}
      .brand-sub{display:none}
      .nav-toggle{display:block;margin-left:auto}
      .header-cta{display:none}
    }
  </style>

  <!-- ✅ FIX: Hamburger menu functionality -->
  <script>
    (() => {
      const btn = document.querySelector('.nav-toggle');
      const nav = document.getElementById('primary-nav');
      if (!btn || !nav) return;

      const toggleMenu = () => {
        const isOpen = nav.classList.toggle('open');
        btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        btn.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
      };

      btn.addEventListener('click', (e) => {
        e.stopPropagation();
        toggleMenu();
      });

      // Close when clicking outside
      document.addEventListener('click', (e) => {
        if (nav.classList.contains('open') &&
            !e.target.closest('#primary-nav') &&
            !e.target.closest('.nav-toggle')) {
          nav.classList.remove('open');
          btn.setAttribute('aria-expanded', 'false');
          btn.setAttribute('aria-label', 'Open menu');
        }
      });

      // Close on ESC key
      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && nav.classList.contains('open')) {
          nav.classList.remove('open');
          btn.setAttribute('aria-expanded', 'false');
          btn.setAttribute('aria-label', 'Open menu');
        }
      });
    })();
  </script>
</header>
