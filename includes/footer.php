<!-- header-footer/footer.html -->
<footer class="site-footer" role="contentinfo" aria-label="Footer">
  <div class="footer-inner">
    <div class="col about">
      <div class="brand">
        <div class="logo">V</div>
        <div class="brand-text">
          <div class="brand-name">Vidyantraa</div>
          <div class="brand-sub">STEM & Exam Prep</div>
        </div>
      </div>
      <p class="muted">Hands-on STEM labs and focused exam tracks for students aged 12–19. Partner schools, practical projects and data-driven learning.</p>
      <div class="contact-small">
        <div><strong>Email</strong> partnerships@vidyantraa.example</div>
        <div><strong>Phone</strong> +91 98765 43210</div>
      </div>
    </div>

    <div class="col links">
      <div class="col-title">Quick links</div>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="schools.html">For Schools</a></li>
        <li><a href="students-parents.html">Students & Parents</a></li>
        <li><a href="stems.html">STEM Labs</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>

    <div class="col newsletter">
      <div class="col-title">Newsletter</div>
      <p class="muted">Get monthly updates about workshops, demos & bootcamps.</p>

      <form id="footer-newsletter" action="backend/subscribe.php" method="POST" aria-label="Subscribe to newsletter">

        <label for="newsletter-email" class="visually-hidden">Email</label>
        <input id="newsletter-email" name="email" type="email" placeholder="you@example.com" required />
        <button class="btn-cta" type="submit">Subscribe</button>
        <div id="newsletter-status" class="muted" aria-live="polite" style="margin-top:8px"></div>
      </form>

      <div style="margin-top:18px">
        <div class="col-title">Follow</div>
        <div class="socials">
          <a href="#" aria-label="facebook">Facebook</a>
          <a href="#" aria-label="instagram">Instagram</a>
          <a href="#" aria-label="youtube">YouTube</a>
        </div>
      </div>
    </div>
  </div>

  <div class="copyright">© <span id="cur-year"></span> Vidyantraa. All rights reserved.</div>

  <style>
    /* Footer styles — self-contained; matches your site's tokens */
    .site-footer{background:linear-gradient(180deg,#061223,#04121a);color:#e6eef8;padding:40px 0;border-top:1px solid rgba(255,255,255,0.03)}
    .footer-inner{max-width:1200px;margin:0 auto;padding:0 20px;display:grid;grid-template-columns:1fr 220px 320px;gap:28px;align-items:start}
    .site-footer .brand{display:flex;gap:12px;align-items:center}
    .logo{width:48px;height:48px;border-radius:10px;background:linear-gradient(90deg,#6ee7b7,#7dd3fc);display:flex;align-items:center;justify-content:center;color:#022;font-weight:800}
    .brand-name{font-weight:800;color:#eaf6f0}
    .brand-sub{font-size:12px;color:#9fb3c6}

    .col-title{font-weight:800;margin-bottom:10px}
    .muted{color:#9fb3c6}
    .col ul{list-style:none;padding:0;margin:0}
    .col ul li{margin-bottom:8px}
    .col ul a{color:#d6eaf0;text-decoration:none;opacity:0.9}
    .col ul a:hover{opacity:1;text-decoration:underline}

    .contact-small div{margin-top:8px;color:#9fb3c6;font-size:14px}

    /* newsletter */
    #footer-newsletter{display:flex;gap:10px;align-items:center;margin-top:6px}
    #footer-newsletter input{flex:1;padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit}
    .btn-cta{background:linear-gradient(90deg,#6ee7b7,#7dd3fc);color:#022;padding:10px 14px;border-radius:10px;border:none;font-weight:800;cursor:pointer}

    .socials{display:flex;gap:10px;margin-top:8px}
    .socials a{color:#9fb3c6;text-decoration:none;padding:6px 8px;border-radius:8px;background:rgba(255,255,255,0.02)}
    .socials a:hover{background:rgba(255,255,255,0.03);color:#e8fbf0}

    .copyright{max-width:1200px;margin:18px auto 0;padding:0 20px;color:#8fa9b9;font-size:13px}

    /* responsive */
    @media (max-width:980px){
      .footer-inner{grid-template-columns:1fr;gap:18px}
      #footer-newsletter{flex-direction:column;align-items:stretch}
    }

    /* small accessibility helper */
    .visually-hidden{position:absolute!important;height:1px;width:1px;overflow:hidden;clip:rect(1px,1px,1px,1px);white-space:nowrap}
  </style>

  <script>
(function initFooter() {
  try {
    // Set current year
    const yearEl = document.getElementById('cur-year');
    if (yearEl) yearEl.textContent = new Date().getFullYear();

    const form = document.getElementById('footer-newsletter');
    const status = document.getElementById('newsletter-status');

    if (form) {
      form.addEventListener('submit', function(e) {
        e.preventDefault();

        const emailInput = document.getElementById('newsletter-email');
        const email = emailInput ? emailInput.value.trim() : '';

        if (!email) {
          if (status) status.textContent = 'Enter a valid email.';
          return;
        }

        if (status) status.textContent = 'Subscribing...';

        // Prepare form data
        const formData = new FormData();
        formData.append('email', email);

        // Send AJAX POST request to subscribe.php
        fetch(form.action, {
          method: 'POST',
          body: formData
        })
        .then(response => response.text())
        .then(message => {
          if (status) status.textContent = message;
          if (emailInput) emailInput.value = '';
        })
        .catch(error => {
          console.error('Newsletter subscription failed:', error);
          if (status) status.textContent = 'Subscription failed. Try again.';
        });
      });
    }
  } catch (err) {
    console.warn('footer init failed', err);
  }
})();
</script>

</footer>
