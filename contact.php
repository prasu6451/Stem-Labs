<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Vidyantraa — Contact</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

  <!-- Styles: matches the spacious pages (same tokens, spacing & behavior) -->
  <style>
    :root{
      --bg:#071026;
      --card:#071527;
      --accent:#6ee7b7;
      --accent-2:#7dd3fc;
      --muted:#94a3b8;
      --muted-2:#9fb3c6;
      --text-dark:#04222a;
      --glass: rgba(255,255,255,0.03);
      --radius:18px;
      --max:1200px;
    }
    *{box-sizing:border-box}
    html,body{height:100%;margin:0;background:linear-gradient(180deg,var(--bg),#031222 120%);color:#e6eef8;font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;}

    /* page container: make it fluid on small screens */
    .page{max-width:var(--max);width:92%;margin:48px auto;padding:clamp(20px,3.5vw,60px) clamp(16px,2.5vw,40px);}

    .section{
      background:linear-gradient(180deg, rgba(255,255,255,0.02), transparent);
      border-radius:18px;
      padding:clamp(18px,2.6vw,48px);
      margin-bottom:32px;
      box-shadow: 0 14px 60px rgba(2,6,23,0.55);
    }
    h1{font-size:clamp(28px,3.6vw,44px);margin:0 0 12px 0;line-height:1.06}
    h2{font-size:clamp(20px,2.2vw,28px);margin:0 0 10px 0;line-height:1.08}
    p{margin:0 0 14px 0;color:var(--muted);line-height:1.6}
    .grid{display:grid;gap:22px}

    /* Layout helpers */
    /* two-col uses fluid second column but keeps a sensible min */
    .two-col{display:grid;grid-template-columns:1fr minmax(260px,480px);gap:28px;align-items:start}
    .feature-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:22px}

    /* Buttons */
    .btn{background:linear-gradient(90deg,var(--accent),var(--accent-2)); color:#022; padding:12px 16px;border-radius:14px;border:none;font-weight:800;cursor:pointer;box-shadow:0 14px 40px rgba(34,197,94,0.12);transition:transform .14s ease;min-width:160px}
    .btn.secondary{background:transparent;border:1px solid rgba(255,255,255,0.06);color:var(--accent-2);font-weight:700;min-width:140px}
    .btn:active{transform:translateY(2px)}
    .cta-row{display:flex;gap:12px;margin-top:16px;flex-wrap:wrap}

    /* Placeholders */
    .img-box{height:220px;border-radius:12px;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:800;letter-spacing:0.2px}
    .img-box.large{height:clamp(220px,22vw,320px)}
    .img-box--1{background:linear-gradient(135deg,#0b6b8a,#3bb7c7)}
    .img-box--2{background:linear-gradient(135deg,#7c4dff,#4fb0ff)}
    .img-box--3{background:linear-gradient(135deg,#ff7ab6,#ffb96b)}
    .img-box--muted{background:linear-gradient(135deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01)); color: var(--muted-2); font-weight:800}

    /* Contact layout and inputs */
    /* contact uses a fluid secondary column with a sensible min width */
    .contact{display:grid;grid-template-columns:1fr minmax(260px,440px);gap:24px;align-items:start}
    label{font-size:14px;color:var(--muted);display:block;margin-bottom:8px}
    input[type="text"], input[type="email"], input[type="tel"], textarea, select{width:100%;padding:12px;border-radius:12px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit;font-size:clamp(14px,1.2vw,15px)}
    textarea{min-height:180px;resize:vertical}
    .muted{color:var(--muted);font-size:14px}
    .form-row{display:grid;grid-template-columns:repeat(2,1fr);gap:12px}
    .full{grid-column:1/-1}

    /* select placeholder -> dark text on selection */
    select{ color: var(--muted); }
    select:focus{ color: var(--text-dark); outline: none; }
    select:valid{ color: var(--text-dark); }

    /* small helper text */
    .hint{font-size:13px;color:var(--muted);margin-top:8px}

    /* subtle card style used in the right column */
    .card{background:var(--glass);border-radius:12px;padding:16px;border:1px solid rgba(255,255,255,0.03);box-shadow:0 8px 30px rgba(2,6,23,0.35)}

    /* responsive tweaks */
    @media (max-width:1100px){
      .contact{grid-template-columns:1fr}
      .two-col{grid-template-columns:1fr}
      .page{padding:28px 20px}
      .img-box.large{height:clamp(200px,28vw,260px)}
      .section{padding:20px}
    }
    @media (max-width:900px){
      .two-col{grid-template-columns:1fr}
      .page{padding:24px 16px}
      .cta-row{gap:10px}
      .btn{min-width:140px}
    }
    @media (max-width:760px){
      .contact{grid-template-columns:1fr}
      .img-box{height:180px}
      h1{font-size:34px}
      h2{font-size:22px}
      .page{padding:18px 12px}
      .form-row{grid-template-columns:1fr}
      .cta-row{justify-content:flex-start}
      .muted{font-size:13px}
    }

    /* reveal + micro animations */
    .reveal{opacity:0;transform:translateY(22px) scale(.995);transition: all 800ms cubic-bezier(.16,1,.3,1)}
    .reveal.show{opacity:1;transform:none}
    .floaty{animation:floaty 6s ease-in-out infinite}
    @keyframes floaty{0%{transform:translateY(0)}50%{transform:translateY(-10px)}100%{transform:translateY(0)}}
  </style>

  <!-- React + Babel CDN -->
  <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
  <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>
<body>
  <?php include __DIR__ . "/includes/header.php"; ?>
   <!-- insert header here -->
  <div id="site-header"></div>
  

  <!-- existing root for React content -->
  <div id="root"></div>

  <script>
  async function loadHeader() {
    try {
      const res = await fetch('./header-footer/header.html', {cache: 'no-cache'});
      if (!res.ok) throw new Error('header fetch failed');
      const html = await res.text();
      const holder = document.getElementById('site-header');
      holder.innerHTML = html;

      // initialize mobile menu toggle
      const toggle = holder.querySelector('.nav-toggle');
      const nav = holder.querySelector('.nav');
      if (toggle && nav) {
        toggle.addEventListener('click', () => {
          const expanded = toggle.getAttribute('aria-expanded') === 'true';
          toggle.setAttribute('aria-expanded', String(!expanded));
          nav.classList.toggle('open');
        });

        // close menu when a nav link is clicked (mobile)
        holder.querySelectorAll('.nav a').forEach(a => a.addEventListener('click', () => {
          nav.classList.remove('open');
          toggle.setAttribute('aria-expanded', 'false');
        }));
      }
    } catch (err) {
      console.warn('Could not load header:', err);
    }
  }

  // load header as soon as possible
  loadHeader();
</script>

  <script type="text/babel">
    const { useState, useEffect } = React;

    /* reveal on scroll hook (same as other pages) */
    function useReveal() {
      useEffect(() => {
        const obs = new IntersectionObserver(entries => {
          for (const ent of entries) {
            if (ent.isIntersecting) {
              ent.target.classList.add('show');
              obs.unobserve(ent.target);
            }
          }
        }, { threshold: 0.12 });
        document.querySelectorAll('.reveal').forEach(el => obs.observe(el));
        return () => obs.disconnect();
      }, []);
    }

    /* Hero */
    function Hero(){
      useReveal();
      return (
        <section className="section reveal" aria-labelledby="hero-title">
          <div className="two-col">
            <div>
              <h1 id="hero-title">Contact & Request a Presentation</h1>
              <p className="muted">Fill the form to request a school presentation, get program details, or inquire about partnerships. Provide as much detail as possible and our team will contact you to schedule.</p>

              <div className="cta-row">
                <button className="btn" onClick={()=>document.getElementById('form')?.scrollIntoView({behavior:'smooth'})}>Request a Presentation</button>
                <button className="btn secondary" onClick={()=>alert('Download contact brochure placeholder')}>Download Info Pack</button>
              </div>

              <div style={{display:'flex',gap:18,marginTop:26,flexWrap:'wrap'}}>
                <div style={{minWidth:180, background:'linear-gradient(180deg, rgba(255,255,255,0.01), transparent)', padding:18, borderRadius:12, border:'1px solid rgba(255,255,255,0.03)'}}>
                  <div style={{fontSize:13,color:'var(--muted)'}}>Response time</div>
                  <div style={{fontWeight:900,fontSize:20,marginTop:8}}>1-2 business days</div>
                </div>

                <div style={{minWidth:180, background:'linear-gradient(180deg, rgba(255,255,255,0.01), transparent)', padding:18, borderRadius:12, border:'1px solid rgba(255,255,255,0.03)'}}>
                  <div style={{fontSize:13,color:'var(--muted)'}}>Support</div>
                  <div style={{fontWeight:900,fontSize:20,marginTop:8}}>Partnerships team</div>
                </div>
              </div>
            </div>

            <div>
              <div className="img-box large img-box--1" aria-hidden="true">Contact / presentation image</div>
            </div>
          </div>
        </section>
      );
    }

    /* Contact form section */
    function ContactForm(){
      useReveal();
      const [form, setForm] = useState({
        name: '',
        school: '',
        mobile: '',
        email: '',
        city: '',
        program: '',
        message: ''
      });
      const [status, setStatus] = useState(null);

      function update(k, v){ setForm(f => ({...f, [k]: v})) }

      function submit(e){
  e.preventDefault();

  if (!form.name.trim() || !form.email.trim() || !form.message.trim()) {
    setStatus('Please fill required fields.');
    return;
  }

  setStatus('Sending...');

  fetch('/backend/contact.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: new URLSearchParams({
      name: form.name,
      email: form.email,
      message: `
School: ${form.school}
Mobile: ${form.mobile}
City: ${form.city}
Program: ${form.program}

${form.message}
      `
    })
  })
  .then(res => res.text())
  .then(res => {
    if (res === 'success') {
      setStatus('Request sent! Our team will contact you.');
      setForm({
        name:'', school:'', mobile:'',
        email:'', city:'', program:'', message:''
      });
    } else {
      setStatus('Something went wrong.');
    }
  })
  .catch(() => {
    setStatus('Server error. Try again later.');
  });
}


      return (
        <section className="section reveal" aria-labelledby="contact-title" id="form">
          <h2 id="contact-title">Request a Presentation</h2>
          <p className="muted">Complete the form below — tell us about your school (or yourself) and the program you're interested in. We'll follow up to schedule a presentation.</p>

          <form onSubmit={submit} style={{marginTop:28}}>
            <div className="contact">
              <div>
                <div className="form-row" style={{marginBottom:16}}>
                  <div>
                    <label htmlFor="name">Full name</label>
                    <input id="name" type="text" value={form.name} onChange={e=>update('name', e.target.value)} required />
                  </div>

                  <div>
                    <label htmlFor="school">School name</label>
                    <input id="school" type="text" value={form.school} onChange={e=>update('school', e.target.value)} />
                  </div>
                </div>

                <div className="form-row" style={{marginBottom:16}}>
                  <div>
                    <label htmlFor="mobile">Mobile</label>
                    <input id="mobile" type="tel" value={form.mobile} onChange={e=>update('mobile', e.target.value)} required placeholder="e.g. +91 98765 43210" />
                  </div>

                  <div>
                    <label htmlFor="email">Email</label>
                    <input id="email" type="email" value={form.email} onChange={e=>update('email', e.target.value)} required />
                  </div>
                </div>

                <div className="form-row" style={{marginBottom:16}}>
                  <div>
                    <label htmlFor="city">City</label>
                    <input id="city" type="text" value={form.city} onChange={e=>update('city', e.target.value)} />
                  </div>

                  <div>
                    <label htmlFor="program">Program of interest</label>
                    {/* placeholder uses empty value so select:valid works and selected text becomes dark */}
                    <select id="program" value={form.program} onChange={e=>update('program', e.target.value)} required>
                      <option value="" disabled hidden>Select program</option>
                      <option value="NEET">NEET Track</option>
                      <option value="JEE">JEE Track</option>
                      <option value="Foundation">Foundation (Grades 6-9)</option>
                      <option value="STEM Labs">STEM Labs</option>
                      <option value="Custom">Custom / Other</option>
                    </select>
                  </div>
                </div>

                <div>
                  <label htmlFor="message">Message</label>
                  <textarea id="message" value={form.message} onChange={e=>update('message', e.target.value)} placeholder="Your notes: preferred dates, number of students, any questions..." />
                </div>

                <div style={{marginTop:20, display:'flex', gap:16, alignItems:'center'}}>
                  <button type="submit" className="btn">Request a Presentation</button>
                  <div className="muted" aria-live="polite">{status}</div>
                </div>
              </div>

              <div>
                <div className="card">
                  <div style={{fontWeight:900,fontSize:18}}>Need help now?</div>
                  <div className="muted" style={{marginTop:12,lineHeight:1.6}}>Email partnerships@vidyantraa.example or call +91 98765 43210. (Placeholders — replace with real contacts)</div>

                  <div style={{marginTop:18}}>
                    <div style={{fontWeight:900}}>Office timings</div>
                    <div className="muted" style={{marginTop:8}}>Mon — Sat: 9:00 AM — 6:00 PM</div>
                  </div>

                  <div style={{marginTop:18}}>
                    <div style={{fontWeight:900}}>Request type</div>
                    <div className="muted" style={{marginTop:8}}>Presentation / Demo / Partnership</div>
                  </div>
                </div>

                <div style={{marginTop:20}} className="card">
                  <div style={{fontWeight:900}}>What we need</div>
                  <div className="muted" style={{marginTop:12,lineHeight:1.6}}>Preferred date/time for presentation, estimated student count, and target grades help us plan an effective session.</div>
                </div>
              </div>
            </div>
          </form>
        </section>
      );
    }

    /* Page compose */
    function ContactPage(){
      useReveal();
      return (
        <main className="page" role="main">
          <Hero />
          <ContactForm />
        </main>
      );
    }

    ReactDOM.createRoot(document.getElementById('root')).render(<ContactPage />);
  </script>

    <!-- insert footer here -->
<div id="site-footer"></div>
<script>
  async function loadFooter() {
    try {
      // relative path from the HTML page to the footer file
      const res = await fetch('./header-footer/footer.html', { cache: 'no-cache' });
      if (!res.ok) throw new Error('footer fetch failed: ' + res.status);
      const html = await res.text();
      document.getElementById('site-footer').innerHTML = html;
      // footer.html includes its own inline init script (so it runs after injection)
    } catch (err) {
      console.warn('Could not load footer:', err);
    }
  }
  loadFooter();
</script>
<?php include __DIR__ . "/includes/footer.php"; ?>
</body>
</html>
