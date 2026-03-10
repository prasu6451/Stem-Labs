<!doctype html> 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Vidyantraa — For Schools (spacious)</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

  <!-- Styles: responsive adjustments ONLY (no logic / class / id changes) -->
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
      --radius:16px;
      --max:1200px;
    }
    *{box-sizing:border-box}
    html,body{
  height:100%;
  margin:0;
  background:linear-gradient(180deg,var(--bg),#031222 120%);
  color:#e6eef8;
  font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;
  -webkit-text-size-adjust:100%;
  -ms-text-size-adjust:100%;
  overflow-x:hidden;
  min-height:100vh;
  /* contain overscroll so inner scrolls don't 'chain' to the outer page */
  overscroll-behavior-y: contain;
  background-attachment: fixed;
}


    /* page container: fluid with max width */
    .page{max-width:var(--max);width:92%;margin:48px auto;padding:clamp(20px,3.5vw,60px) clamp(16px,2.5vw,40px);} 

    .section{
      background:linear-gradient(180deg, rgba(255,255,255,0.02), transparent);
      border-radius:18px;
      padding:clamp(18px,2.6vw,48px);
      margin-bottom:32px;
      box-shadow: 0 14px 60px rgba(2,6,23,0.55);
    }
    h1{font-size:clamp(28px,3.6vw,44px);margin:0 0 14px 0;line-height:1.06}
    h2{font-size:clamp(20px,2.2vw,28px);margin:0 0 12px 0;line-height:1.08}
    h3{margin:0 0 12px 0}
    p{margin:0 0 14px 0;color:var(--muted);line-height:1.6}
    .grid{display:grid;gap:22px}

    /* Layout units */
    /* make the second column fluid but keep a sensible min width */
    .two-col{display:grid;grid-template-columns:1fr minmax(260px,480px);gap:28px;align-items:start}
    .feature-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:18px}

    /* CTA button */
    .btn{background:linear-gradient(90deg,var(--accent),var(--accent-2)); color:#022; padding:12px 16px;border-radius:14px;border:none;font-weight:800;cursor:pointer;box-shadow:0 14px 40px rgba(34,197,94,0.12);transition:transform .14s ease;min-width:140px}
    .btn.secondary{background:transparent;border:1px solid rgba(255,255,255,0.06);color:var(--accent-2);font-weight:700}
    .btn:active{transform:translateY(2px)}
    .cta-row{display:flex;gap:12px;margin-top:16px;flex-wrap:wrap}

    /* Placeholder boxes (larger) */
    .img-box{height:220px;border-radius:12px;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:800;letter-spacing:0.2px}
    .img-box.large{height:clamp(200px,22vw,320px)}
    .img-box--1{background:linear-gradient(135deg,#0b6b8a,#3bb7c7)}
    .img-box--2{background:linear-gradient(135deg,#7c4dff,#4fb0ff)}
    .img-box--3{background:linear-gradient(135deg,#ff7ab6,#ffb96b)}
    .img-box--4{background:linear-gradient(135deg,#66e0a9,#4dd0e1)}
    .img-box--muted{background:linear-gradient(135deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01)); color: var(--muted-2); font-weight:800}

    /* Cards and blocks (roomier) */
    .card{background:linear-gradient(180deg, rgba(255,255,255,0.01), transparent);padding:22px;border-radius:14px;border:1px solid rgba(255,255,255,0.03);min-height:160px}
    .step{flex:1;min-width:180px;background:linear-gradient(180deg, rgba(255,255,255,0.01), transparent);padding:18px;border-radius:14px;border:1px solid rgba(255,255,255,0.03);text-align:center;min-height:160px}
    .step-num{background:rgba(255,255,255,0.03);padding:10px;border-radius:12px;display:inline-block;font-weight:800;margin-bottom:12px}

    /* Carousel / case */
    .carousel{position:relative;overflow:hidden;border-radius:14px;padding:18px;background:linear-gradient(90deg, rgba(125,211,252,0.03), rgba(110,231,183,0.02));
  /* ensure carousel never creates an extra scroll context */
  overscroll-behavior: contain;
}

/* prevent slides from ever exceeding viewport width */
.slides{display:flex;gap:16px;transition:transform .6s cubic-bezier(.22,.9,.32,1);will-change:transform;max-width:100%;}

/* contain overscroll inside interactive areas */
.contact, .slides, textarea { overscroll-behavior: contain; -webkit-overflow-scrolling: touch; }

    .slides{display:flex;gap:16px;transition:transform .6s cubic-bezier(.22,.9,.32,1);will-change:transform}
    /* ensure each case keeps a comfortable width on desktop but can shrink on smaller screens */
    .case{min-width:340px;flex:0 0 340px;background:linear-gradient(180deg,#06203a, #042235);padding:16px;border-radius:14px;box-shadow:0 10px 40px rgba(2,6,23,0.6)}
    .case .img-box{height:200px;border-radius:10px}

    /* Contact form (roomier) */
    .contact{display:grid;grid-template-columns:1fr 1fr;gap:18px}
    label{font-size:14px;color:var(--muted);display:block;margin-bottom:8px}
    input[type="text"], input[type="email"], textarea, select{width:100%;padding:12px;border-radius:12px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit;font-size:clamp(14px,1.2vw,15px)}
    textarea{min-height:160px;resize:vertical}
    .muted{color:var(--muted);font-size:14px}

    /* select placeholder -> dark text on selection */
    select{ color: var(--muted); }
    select:focus{ color: var(--text-dark); outline: none; }
    select:valid{ color: var(--text-dark); }

    /* responsive tweaks */
    @media (max-width:1100px){
      .two-col{grid-template-columns:1fr}
      .page{padding:28px 20px}
      .img-box.large{height:clamp(180px,28vw,260px)}
      .case{min-width:300px;flex:0 0 300px}
    }
    @media (max-width:900px){
      .feature-grid{grid-template-columns:repeat(auto-fit,minmax(220px,1fr));}
      .cta-row{gap:10px}
      .btn{min-width:120px}
    }
    @media (max-width:760px){
      .contact{grid-template-columns:1fr}
      .img-box{height:160px}
      h1{font-size:34px}
      h2{font-size:22px}
      .page{padding:18px 12px}
      .card{padding:16px}
      .slides{gap:12px}
      .case{min-width:280px;flex:0 0 280px}
    }

    /* additional mobile-first improvements: keep CTAs usable and readable */
    @media (max-width:520px){
      .cta-row{flex-direction:column;align-items:stretch}
      .btn{width:100%;min-width:0}
      .card{padding:14px}
      .img-box.large{height:clamp(140px,32vw,200px)}
      /* make carousel cards fit the viewport comfortably on small devices */
      .case{flex:0 0 min(86%, 340px);min-width:0}
      .slides{gap:14px}
    }

    /* reveal + micro animations */
    .reveal{opacity:0;transform:translateY(22px) scale(.995);transition: all 800ms cubic-bezier(.16,1,.3,1)}
    .reveal.show{opacity:1;transform:none}
    .floaty{animation:floaty 6s ease-in-out infinite}
    @keyframes floaty{0%{transform:translateY(0)}50%{transform:translateY(-10px)}100%{transform:translateY(0)}}
  

  /* ==== Single-scroll enforcement: ensure only the outer page scrolls ==== */
  /* Allow the body to be the single vertical scroll context and prevent inner elements from adding scrollbars */
  html, body, #root, main, .page { height: auto; min-height: 100vh; overflow: visible; }

  /* Prevent sections, cards and contact blocks from creating their own vertical scrollbars.
     Note: carousel must explicitly clip overflow so slides don't visually escape their section. */
  .section, .card, .contact, .slides, .case { overflow: visible !important; max-height: none !important; }

  /* Ensure carousels specifically hide horizontal overflow so slides stay within bounds */
  .carousel { overflow: hidden !important; }

  /* Keep textareas scrollable but constrained so they won't create a second full-height scroll */
  textarea { overflow: auto; max-height: 40vh; }

  /* If any element still forces a scrollbar, this helper reduces its visual impact while keeping content accessible */
  .hide-extra-scrollbar::-webkit-scrollbar { display: none; }
  .hide-extra-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

  /* small safety: ensure carousel doesn't push beyond page width or height */
  .carousel, .slides { max-width: 100%; max-height: calc(100vh - 120px); }

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
    const {useState, useEffect, useRef} = React;

    /* Reveal-on-scroll hook */
    function useReveal() {
      useEffect(() => {
        const obs = new IntersectionObserver(entries => {
          for (const ent of entries) {
            if (ent.isIntersecting) {
              ent.target.classList.add('show');
              obs.unobserve(ent.target);
            }
          }
        }, {threshold: 0.12});
        document.querySelectorAll('.reveal').forEach(el => obs.observe(el));
        return () => obs.disconnect();
      }, []);
    }

    /* HERO — roomy */
    function HeroSchools(){
      useReveal();
      return (
        <section className="section reveal" aria-labelledby="hero-title">
          <div className="two-col">
            <div>
              <h1 id="hero-title">Partner with Vidyantraa — Scale Hands-on STEM & Exam Readiness</h1>
              <p className="muted">A full page for school decision-makers: integrated NEET/JEE support, STEM + academics alignment, and zero operational burden. We manage logistics, training, and reporting so schools focus on learning outcomes.</p>

              <div className="cta-row" role="toolbar">
                <button className="btn" onClick={()=>document.getElementById('contact-form')?.scrollIntoView({behavior:'smooth'})}>Book a Meeting</button>
                <button className="btn secondary" onClick={()=>alert('Request demo placeholder')}>Request a Demo</button>
              </div>

              <div style={{display:'flex',gap:16, marginTop:24, flexWrap:'wrap'}}>
                <div className="card" style={{minWidth:160, flex:'1 1 160px'}}>
                  <div style={{fontSize:13,color:'var(--muted)'}}>Partner schools</div>
                  <div style={{fontWeight:900, fontSize:22, marginTop:10}}>50+</div>
                  <div className="muted" style={{marginTop:10}}>Active collaborations across cities</div>
                </div>
                <div className="card" style={{minWidth:160, flex:'1 1 160px'}}>
                  <div style={{fontSize:13,color:'var(--muted)'}}>Average uplift</div>
                  <div style={{fontWeight:900, fontSize:22, marginTop:10}}>30%+</div>
                  <div className="muted" style={{marginTop:10}}>Measured increase in test performance</div>
                </div>
              </div>
            </div>

            <div>
              <div className="img-box large img-box--2" aria-hidden="true">School hero image placeholder</div>
            </div>
          </div>
        </section>
      );
    }

    /* Integrated flow — expanded */
    function IntegratedFlow(){
      useReveal();
      const steps = [
        {title:'Curriculum mapping & alignment', detail:'Map exam topics to school syllabus, plan co-teaching sessions and integrate assessments.'},
        {title:'In-class support & co-teaching', detail:'Experienced mentors co-teach with school teachers on key concepts and labs.'},
        {title:'After-school exam tracks', detail:'Dedicated NEET/JEE sessions with practice tests and strategy workshops.'},
        {title:'Tracking & teacher upskilling', detail:'Monthly progress reports and teacher development modules.'}
      ];
      return (
        <section className="section reveal" aria-labelledby="integrated-title">
          <h2 id="integrated-title">How Integrated NEET / JEE Works</h2>
          <p className="muted">We embed exam readiness into everyday teaching without disrupting classroom flow. Each step below is implemented with clear responsibilities and KPIs.</p>

          <div style={{marginTop:28, display:'grid', gridTemplateColumns:'repeat(auto-fit,minmax(260px,1fr))', gap:20}}>
            {steps.map((s,i)=>(
              <div className="card" key={i}>
                <div style={{fontSize:13,color:'var(--muted)'}}>Phase {i+1}</div>
                <div style={{fontWeight:900, fontSize:18, marginTop:8}}>{s.title}</div>
                <div className="muted" style={{marginTop:12, lineHeight:1.5}}>{s.detail}</div>
              </div>
            ))}
          </div>
        </section>
      );
    }

    /* Benefits — roomy grid */
    function Benefits(){
      useReveal();
      const items = [
        {t:'Improved student outcomes', d:'Measured test score uplift and stronger college readiness.'},
        {t:'Teacher enablement', d:'Ongoing teacher training, co-teaching and ready lesson plans.'},
        {t:'Revenue sharing', d:'Optional revenue models that benefit the school.'},
        {t:'Brand & placements', d:'Student showcases, competitions and placement support.'}
      ];
      return (
        <section className="section reveal" aria-labelledby="benefits-title">
          <h2 id="benefits-title">Benefits for Schools</h2>
          <p className="muted">Partnership designed to be low friction and high impact — tangible benefits for students, teachers, and the school ecosystem.</p>

          <div style={{marginTop:28}} className="feature-grid">
            {items.map((it,idx)=>(
              <div className="card" key={idx}>
                <div style={{fontSize:13,color:'var(--muted)'}}>Benefit</div>
                <div style={{fontWeight:900, fontSize:18, marginTop:8}}>{it.t}</div>
                <div className="muted" style={{marginTop:12, lineHeight:1.6}}>{it.d}</div>
              </div>
            ))}
          </div>
        </section>
      );
    }

    /* Zero operational burden (longer content) */
    function ZeroBurden(){
      useReveal();
      return (
        <section className="section reveal" aria-labelledby="zero-title">
          <h2 id="zero-title">Zero Operational Burden</h2>
          <p className="muted">We manage logistics, material kits, scheduling and reporting. Your staff spend minimal time coordinating — we provide a dedicated program manager and automated dashboards.</p>

          <div style={{marginTop:28}} className="two-col">
            <div>
              <div className="card" style={{marginBottom:18}}>
                <div style={{fontWeight:900,fontSize:18}}>Full kit delivery & inventory</div>
                <div className="muted" style={{marginTop:10,lineHeight:1.6}}>We handle procurement, kit packing and periodic replenishment so labs run without stock hassles.</div>
              </div>

              <div className="card">
                <div style={{fontWeight:900,fontSize:18}}>Program manager & reporting</div>
                <div className="muted" style={{marginTop:10,lineHeight:1.6}}>A single point of contact, monthly performance reports, and insights for teachers and administrators.</div>
              </div>
            </div>

            <div>
              <div className="img-box img-box--muted large" aria-hidden="true">Logistics illustration placeholder</div>
            </div>
          </div>
        </section>
      );
    }

    /* Integration modules — larger cards */
    function Integration(){
      useReveal();
      const modules = [
        {title:'Physics + Robotics', desc:'Hands-on labs that reinforce physics concepts and practical understanding.'},
        {title:'Chemistry + Experiments', desc:'Curriculum-aligned experiments that teach concepts through doing.'},
        {title:'Mathematics + Problem Solving', desc:'Applied problem-solving modules to strengthen reasoning.'},
      ];
      return (
        <section className="section reveal" aria-labelledby="integration-title">
          <h2 id="integration-title">STEM + Academics Integration</h2>
          <p className="muted">Project modules are mapped to school syllabi and assessment goals so students get both conceptual depth and practical skills.</p>

          <div style={{marginTop:28}} className="feature-grid">
            {modules.map((m,i)=>(
              <div className="card" key={i}>
                <div style={{fontSize:13,color:'var(--muted)'}}>Module</div>
                <div style={{fontWeight:900, fontSize:18, marginTop:8}}>{m.title}</div>
                <div className="muted" style={{marginTop:12,lineHeight:1.6}}>{m.desc}</div>
              </div>
            ))}
          </div>
        </section>
      );
    }

    /* Case Studies carousel — larger slides */
    function CaseStudies(){
      useReveal();
      const cases = [
        {title:'Greendale School', subtitle:'STEM uplift program — 40% more students in advanced tracks', color:'img-box--3'},
        {title:'Bluebell Academy', subtitle:'NEET integration pilot — 2x mock test improvements', color:'img-box--4'},
        {title:'Horizon Public', subtitle:'Robotics competition winners & portfolio showcase', color:'img-box--2'},
      ];

      const [index,setIndex] = useState(0);
      useEffect(()=> {
        const id = setInterval(()=> setIndex(i=> (i+1) % cases.length), 5000);
        return ()=>clearInterval(id);
      }, []);

      function prev(){ setIndex(i => (i - 1 + cases.length) % cases.length) }
      function next(){ setIndex(i => (i + 1) % cases.length) }

      const translate = -(index * (360 + 20));

      return (
        <section className="section reveal" aria-labelledby="cases-title">
          <h2 id="cases-title">Case Studies</h2>
          <p className="muted">Selected outcomes and quantified results from partner schools.</p>

          <div style={{marginTop:28}} className="carousel">
            <div className="slides" style={{transform:`translateX(${translate}px)`}}>
              {cases.map((c,idx)=>(
                <div className="case" key={idx}>
                  <div className={`img-box ${c.color} large`} aria-hidden="true">{c.title} photo</div>
                  <div style={{fontWeight:900, fontSize:18, marginTop:12}}>{c.title}</div>
                  <div className="muted" style={{fontSize:14, marginTop:10,lineHeight:1.6}}>{c.subtitle}</div>
                </div>
              ))}
            </div>

            <div className="carousel-controls">
              <div style={{display:'flex',gap:10}}>
                <button className="btn" onClick={prev}>Prev</button>
                <button className="btn" onClick={next}>Next</button>
              </div>
              <div style={{display:'flex',gap:10,alignItems:'center'}}>
                {cases.map((_,i)=>(
                  <div key={i} style={{width:12,height:12,borderRadius:8, background: i===index ? 'var(--accent)' : 'rgba(255,255,255,0.06)'}} />
                ))}
              </div>
            </div>
          </div>
        </section>
      );
    }

    /* Contact / Book a Meeting — roomy form */
    function Contact(){
      useReveal();
      const [form,setForm] = useState({name:'',email:'',role:'',school:'',message:''});
      const [status,setStatus] = useState(null);

      function update(k,v){ setForm(f=>({...f,[k]:v})) }

      function submit(e){
        e.preventDefault();
        setStatus('Sending...');
        // Replace with a backend call later
        setTimeout(()=> {
          setStatus('Meeting request sent! Our partnerships team will contact you.');
          setForm({name:'',email:'',role:'',school:'',message:''});
        },900);
      }

      return (
        <section className="section reveal" id="contact-form" aria-labelledby="contact-title">
          <h2 id="contact-title">Book a Meeting</h2>
          <p className="muted">Share your role, school and availability and we will schedule a call with our partnerships team.</p>

          <form className="contact" onSubmit={submit} style={{marginTop:28}}>
            <div>
              <label htmlFor="name">Full name</label>
              <input id="name" type="text" value={form.name} onChange={e=>update('name',e.target.value)} required />

              <label style={{marginTop:14}} htmlFor="email">Email</label>
              <input id="email" type="email" value={form.email} onChange={e=>update('email',e.target.value)} required />

              <label style={{marginTop:14}} htmlFor="role">I am a</label>
              <select id="role" value={form.role} onChange={e=>update('role',e.target.value)} required>
                <option value="" disabled hidden>Select role</option>
                <option value="School Admin">School Admin</option>
                <option value="Principal">Principal</option>
                <option value="Coordinator">Coordinator</option>
              </select>

              <label style={{marginTop:14}} htmlFor="school">School name</label>
              <input id="school" type="text" value={form.school} onChange={e=>update('school',e.target.value)} />
            </div>

            <div>
              <label htmlFor="message">Message / Notes</label>
              <textarea id="message" value={form.message} onChange={e=>update('message',e.target.value)} placeholder="Preferred days/times, current programs, number of students..." />
              <div style={{display:'flex',gap:14,marginTop:18,alignItems:'center'}}>
                <button type="submit" className="btn">Request Meeting</button>
                <div className="muted" aria-live="polite">{status}</div>
              </div>
            </div>
          </form>
        </section>
      );
    }

    /* Compose page */
    function SchoolsPage(){
      useReveal();
      return (
        <main className="page" role="main">
          <HeroSchools />
          <IntegratedFlow />
          <Benefits />
          <ZeroBurden />
          <Integration />
          <CaseStudies />
          <Contact />
        </main>
      );
    }

    ReactDOM.createRoot(document.getElementById('root')).render(<SchoolsPage />);
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
