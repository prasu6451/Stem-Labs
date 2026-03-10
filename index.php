<?php

?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Vidyantraa — Home (spacious)</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

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
    html,body{height:100%;margin:0;background:linear-gradient(180deg,var(--bg),#031222 120%);color:#e6eef8;font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial; overflow-x: hidden; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; min-height:100vh; overscroll-behavior-y: contain; background-attachment: fixed;}
    
    /* Responsive Page Wrapper */
    .page{max-width:var(--max);margin:48px auto;padding:60px 40px;}
    
    .section{
      background:linear-gradient(180deg, rgba(255,255,255,0.02), transparent);
      border-radius:18px;
      padding:48px;
      margin-bottom:48px;
      box-shadow: 0 14px 60px rgba(2,6,23,0.55);
    }
    h1{font-size:44px;margin:0 0 18px 0;line-height:1.06}
    h2{font-size:28px;margin:0 0 14px 0;line-height:1.08}
    h3{margin:0 0 12px 0}
    p{margin:0 0 18px 0;color:var(--muted);line-height:1.6}
    .grid{display:grid;gap:28px}

    /* HERO */
    .hero{display:grid;grid-template-columns:1fr 520px;align-items:center;gap:36px;padding:36px;border-radius:16px;background:linear-gradient(135deg, rgba(125,211,252,0.05), rgba(110,231,183,0.03));}
    .hero-left h1{font-size:40px;color:white;font-weight:800}
    .hero-sub{font-size:16px;color:var(--muted);margin-top:12px}
    .cta-row{display:flex;gap:16px;margin-top:22px;flex-wrap:wrap}
    .btn{background:linear-gradient(90deg,var(--accent),var(--accent-2)); color:#022; padding:14px 18px;border-radius:14px;border:none;font-weight:800;cursor:pointer;box-shadow:0 14px 40px rgba(34,197,94,0.12);transition:transform .14s ease}
    .btn.secondary{background:transparent;border:1px solid rgba(255,255,255,0.06);color:var(--accent-2);font-weight:700}
    .btn:active{transform:translateY(2px)}
    .hero-right{display:flex;flex-direction:column;gap:18px;align-items:center; width: 100%;}

    /* Placeholder boxes (larger) */
    .img-box{height:220px;border-radius:12px;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:800;letter-spacing:0.2px}
    .img-box.large{height:320px}
    .img-box--1{background:linear-gradient(135deg,#0b6b8a,#3bb7c7)}
    .img-box--2{background:linear-gradient(135deg,#7c4dff,#4fb0ff)}
    .img-box--3{background:linear-gradient(135deg,#ff7ab6,#ffb96b)}
    .img-box--4{background:linear-gradient(135deg,#66e0a9,#4dd0e1)}
    .img-box--muted{background:linear-gradient(135deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01)); color: var(--muted-2); font-weight:800}

    .feature-card{width:100%;background:var(--card);padding:26px;border-radius:14px;text-align:center;min-height:220px;display:flex;flex-direction:column;justify-content:center}

    /* Two Pillars */
    .pillars{display:grid;grid-template-columns:repeat(2,1fr);gap:28px}
    .pillar{padding:26px;border-radius:14px;background:linear-gradient(180deg, rgba(255,255,255,0.01), transparent); border:1px solid rgba(255,255,255,0.03);min-height:200px}
    .pillar h3{font-size:20px;margin-bottom:12px}

    /* Why icons */
    .icons{display:flex;gap:22px;flex-wrap:wrap}
    .icon-card{background:var(--glass);flex:1 1 220px;padding:20px;border-radius:14px;display:flex;align-items:center;gap:18px;min-height:120px}
    .icon-badge{width:72px;height:72px;border-radius:14px;background:linear-gradient(135deg,var(--accent),var(--accent-2));display:flex;align-items:center;justify-content:center;font-weight:900;color:#042;font-size:20px; flex-shrink: 0;}

    /* Programs */
    .programs{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:22px}
    .program{background:linear-gradient(180deg, rgba(255,255,255,0.02), transparent);padding:22px;border-radius:14px;border:1px solid rgba(255,255,255,0.03);min-height:200px}
    .program h4{margin:8px 0 0 0}

    /* How we work */
    .steps{display:flex;gap:18px;flex-wrap:wrap}
    .step{flex:1;min-width:220px;background:linear-gradient(180deg, rgba(255,255,255,0.01), transparent);padding:20px;border-radius:14px;border:1px solid rgba(255,255,255,0.03);text-align:center;min-height:180px}
    .step-num{background:rgba(255,255,255,0.03);padding:10px;border-radius:12px;display:inline-block;font-weight:800;margin-bottom:12px}

    /* Carousel */
    .carousel{position:relative;overflow:hidden;border-radius:14px;padding:20px;background:linear-gradient(90deg, rgba(125,211,252,0.03), rgba(110,231,183,0.02));}
    .slides{display:flex;gap:20px;transition:transform .6s cubic-bezier(.22,.9,.32,1);will-change:transform;max-width:100%;}
    /* Note: min-width 360px is required for the JS calculation logic */
    .lab{min-width:360px;flex:0 0 360px;background:linear-gradient(180deg,#06203a, #042235);padding:18px;border-radius:14px;box-shadow:0 10px 40px rgba(2,6,23,0.6)}
    .lab .img-box{height:220px;border-radius:10px}
    .carousel-controls{position:absolute;left:16px;right:16px;bottom:14px;display:flex;justify-content:space-between;align-items:center}

    /* Testimonials */
    .testimonials{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:22px}
    .testi{background:linear-gradient(180deg, rgba(255,255,255,0.01), transparent);padding:22px;border-radius:14px;border:1px solid rgba(255,255,255,0.03);min-height:180px}

    /* Contact: roomy */
    .contact{display:grid;grid-template-columns:1fr 1fr;gap:20px}
    label{font-size:14px;color:var(--muted);display:block;margin-bottom:8px}
    input[type="text"], input[type="email"], textarea, select{width:100%;padding:14px;border-radius:12px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit;font-size:15px}
    textarea{min-height:200px;resize:vertical}
    .muted{color:var(--muted);font-size:14px}

    /* select placeholder -> dark text on selection */
    select{ color: var(--muted); }
    select:focus{ color: var(--text-dark); outline: none; }
    select:valid{ color: var(--text-dark); }

    /* reveal + micro animations */
    .reveal{opacity:0;transform:translateY(22px) scale(.995);transition: all 800ms cubic-bezier(.16,1,.3,1)}
    .reveal.show{opacity:1;transform:none}
    .floaty{animation:floaty 6s ease-in-out infinite}
    @keyframes floaty{0%{transform:translateY(0)}50%{transform:translateY(-10px)}100%{transform:translateY(0)}}

    /* --- RESPONSIVE MEDIA QUERIES --- */
    
    /* Tablet Portrait & Large Phones */
    @media (max-width:1100px){
      .page{padding:44px 24px; margin: 20px auto;}
      .section{padding: 32px;}
      .hero{grid-template-columns:1fr; text-align: left;}
      .hero-right{width: 100%;}
      .img-box.large{height:260px}
      
      /* Force pillars to stack on smaller tablets */
      .pillars { grid-template-columns: 1fr; } 
    }

    /* Mobile Landscape & Standard Phones */
    @media (max-width:768px){
      .page { padding: 24px 16px; margin: 10px auto; }
      .section { padding: 24px; margin-bottom: 24px; }
      
      h1 { font-size: 32px; }
      h2 { font-size: 24px; }
      
      .hero { padding: 24px; gap: 28px; }
      .hero-left h1 { font-size: 32px; }
      
      .contact { grid-template-columns: 1fr; }
      
      /* Adjust icon cards layout */
      .icons { gap: 16px; }
      .icon-card { flex-direction: row; align-items: flex-start; }
      
      /* Allow stats cards in hero to fill width */
      .card { width: 100%; }
      
      /* Carousel adjustments */
      .carousel { padding: 16px; }
      /* Note: We keep lab min-width near 360px (or slightly lower) to preserve logic, 
         but allow flex-shrink so it doesn't break small layouts completely */
      .lab { min-width: 300px; flex: 0 0 300px; }
    }

    /* Small Mobile Phones */
    @media (max-width:480px){
       h1 { font-size: 28px; }
       .hero-sub { font-size: 15px; }
       
       .cta-row { flex-direction: column; width: 100%; }
       .btn { width: 100%; text-align: center; }
       
       .icon-card { flex-direction: column; align-items: center; text-align: center; }
       
       .feature-card { padding: 20px; }
       .img-box { height: 180px; }
       
       /* On very small screens, let carousel overflow safely or shrink cards */
       .lab { min-width: 280px; flex: 0 0 280px; padding: 14px; }
       .lab .img-box { height: 160px; }
    }

    /* ==== Single-scroll enforcement: ensure only the outer page scrolls ==== */
    /* Allow the body to be the single vertical scroll context and prevent inner elements from adding scrollbars */
    html, body, #root, main, .page { height: auto; min-height: 100vh; overflow: visible; }

    /* Prevent sections, cards, carousel and contact blocks from creating their own vertical scrollbars */
    .section, .feature-card, .card, .contact, .testi { overflow: visible !important; max-height: none !important; }

    /* Restore proper clipping for interactive, transformed components (carousel) so slides don't overflow their container */
    .carousel {
      position: relative;
      overflow: hidden !important; /* clip slides to section */
      padding-right: 24px; /* breathing space so last card isn't cut */
    }

    .slides {
      display: flex;
      gap: 18px;
      overflow: visible; /* allow full card width inside clipped carousel */
      will-change: transform;
    }

    .lab {
      flex: 0 0 auto; /* prevent shrink */
      box-sizing: border-box;
    }
    .lab { box-sizing: border-box; overflow: hidden; }
    .slides { will-change: transform; }


    /* Keep textareas scrollable but constrained so they won't create a second full-height scroll */
    textarea { overflow: auto; max-height: 40vh; }

    /* If any element still forces a scrollbar, this helper reduces its visual impact while keeping content accessible */
    .hide-extra-scrollbar::-webkit-scrollbar { display: none; }
    .hide-extra-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

    /* small safety: ensure carousel doesn't push beyond page width or height */
    .carousel, .slides { max-width: 100%; max-height: calc(100vh - 120px); }

    /* contain overscroll inside interactive areas */
    .contact, .slides, textarea { overscroll-behavior: contain; -webkit-overflow-scrolling: touch; }

  </style>

  <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
  <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>
<body>
  <?php include __DIR__ . "/includes/header.php"; ?>
  <div id="site-header"></div>
  

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
    function Hero(){
      useReveal();
      return (
        <section className="section hero reveal" aria-labelledby="hero-title">
          <div className="hero-left">
            <h1 id="hero-title">Vidyantraa — Ignite Curiosity, Build Futures</h1>
            <p className="hero-sub">Project-led STEM labs, exam-focused NEET / JEE tracks, and live mentorship for ages 12–19. Hands-on learning that builds confidence and results.</p>

            <div className="cta-row" role="toolbar">
              <button className="btn" onClick={()=>document.getElementById('contact-form')?.scrollIntoView({behavior:'smooth'})}>Enroll Now</button>
              <button className="btn secondary" onClick={()=>alert('Download brochure placeholder')}>Download Brochure</button>
            </div>

            <div style={{marginTop:24, display:'flex', gap:16, flexWrap:'wrap'}}>
              <div className="card" style={{minWidth:160, flex:'1 1 160px'}}>
                <div style={{fontSize:13,color:'var(--muted)'}}>Students onboarded</div>
                <div style={{fontWeight:900, fontSize:22, marginTop:10}}>1200+</div>
                <div className="muted" style={{marginTop:10}}>Across all programs</div>
              </div>
              <div className="card" style={{minWidth:160, flex:'1 1 160px'}}>
                <div style={{fontSize:13,color:'var(--muted)'}}>Avg uplift</div>
                <div style={{fontWeight:900, fontSize:22, marginTop:10}}>85%</div>
                <div className="muted" style={{marginTop:10}}>Average test score uplift</div>
              </div>
            </div>
          </div>

          <div className="hero-right">
            <div className="feature-card" aria-hidden="true">
              {/* Replace this box with an <img> when ready */}
              <div className="img-box large img-box--1" aria-hidden="true">Hero image placeholder</div>
              <div style={{fontWeight:900,marginTop:16,fontSize:18}}>Project-led STEM labs</div>
              <div className="muted" style={{marginTop:10}}>Build real devices and portfolios through guided projects.</div>
            </div>

            <div style={{display:'flex',gap:16, marginTop:18, width:'100%'}}>
              <div className="feature-card" style={{flex:1}}>
                <div style={{fontSize:13,color:'var(--muted)'}}>Upcoming</div>
                <div style={{fontWeight:900}}>Crash NEET • 6 weeks</div>
                <div className="muted" style={{marginTop:10}}>Limited seats — practical & test-focused.</div>
              </div>
              <div className="feature-card" style={{flex:1}}>
                <div style={{fontSize:13,color:'var(--muted)'}}>Free Demo</div>
                <div style={{fontWeight:900}}>STEM Week • 3 days</div>
                <div className="muted" style={{marginTop:10}}>Hands-on sessions & live projects.</div>
              </div>
            </div>
          </div>
        </section>
      );
    }

    /* Two Pillars (NEET/JEE + STEM Labs) — roomy */
    function Pillars(){
      useReveal();
      return (
        <section className="section reveal" aria-labelledby="pillars-title">
          <h2 id="pillars-title">Two Pillars</h2>
          <p className="muted">Exam excellence and practical STEM skills — balanced to prepare students for academic success and real-world problem solving.</p>

          <div className="pillars" style={{marginTop:28}}>
            <div className="pillar" role="article" aria-label="NEET and JEE">
              <h3>NEET / JEE Track</h3>
              <p className="muted">Weekly mocks, problem clinics, and personalized mentor feedback to push students toward top scores.</p>
              <ul style={{marginTop:14,color:'var(--muted)',lineHeight:1.6}}>
                <li>Adaptive test practice & analytics</li>
                <li>Concept clinics and doubt-clearing sessions</li>
                <li>Performance dashboards for students & parents</li>
              </ul>
            </div>

            <div className="pillar" role="article" aria-label="STEM Labs">
              <h3>STEM Labs</h3>
              <p className="muted">Hands-on labs in robotics, electronics, coding and chemistry with project showcases and competitions.</p>
              <ul style={{marginTop:14,color:'var(--muted)',lineHeight:1.6}}>
                <li>Project portfolios for college applications</li>
                <li>Team showcases & inter-school competitions</li>
                <li>Industry-relevant mini-projects</li>
              </ul>
            </div>
          </div>
        </section>
      );
    }

    /* Why Vidyantraa? icons — bigger badges */
    function Why(){
      useReveal();
      const items = [
        {t:'Experienced mentors', d:'Teachers with proven results and mentorship experience.'},
        {t:'Small batches', d:'High attention, collaborative projects and feedback.'},
        {t:'Practical projects', d:'Build a portfolio of hands-on work.'},
        {t:'Flexible timings', d:'Evening and weekend options.'},
      ];
      return (
        <section className="section reveal" aria-labelledby="why-title">
          <h2 id="why-title">Why Vidyantraa?</h2>
          <p className="muted">Designed to motivate students and deliver measurable improvement.</p>

          <div className="icons" style={{marginTop:28}}>
            {items.map((it,i)=>(
              <div
                className="icon-card"
                key={i}
                style={{ display: "flex", flexDirection: "column", gap: 12 }}
                >
                <div className="icon-badge" aria-hidden="true">
                    {['V','★','⚙️','⏰'][i]}
                </div>

                <div>
                    <div style={{ fontWeight: 900, fontSize: 16 }}>{it.t}</div>
                    <div className="muted" style={{ marginTop: 10, lineHeight: 1.5 }}>
                    {it.d}
                    </div>
                </div>
                </div>

            ))}
          </div>
        </section>
      );
    }

    /* Programs overview */
    function Programs(){
      useReveal();
      const programs = [
        {name:'NEET Foundation', desc:'Build strong fundamentals & test strategy.'},
        {name:'JEE Advanced', desc:'Advanced problem-solving & conceptual depth.'},
        {name:'STEM Club', desc:'Weekly maker projects and portfolios.'},
        {name:'Robotics Bootcamp', desc:'Practical robotics from sensors to autonomy.'},
      ];
      return (
        <section className="section reveal" aria-labelledby="prog-title">
          <h2 id="prog-title">Programs Overview</h2>
          <p className="muted">Paths designed for exam readiness or exploration — choose based on goals and interests.</p>

          <div className="programs" style={{marginTop:28}}>
            {programs.map((p,idx)=>(
              <div className="program" key={idx}>
                <div style={{fontSize:13,color:'var(--muted)'}}>Program</div>
                <h4 style={{fontWeight:900,fontSize:18}}>{p.name}</h4>
                <div className="muted" style={{marginTop:12,lineHeight:1.6}}>{p.desc}</div>
                <div style={{display:'flex',gap:12,marginTop:18}}>
                  <button className="btn" onClick={()=>alert('Join placeholder')}>Join</button>
                  <button className="btn secondary" onClick={()=>alert('Syllabus placeholder')}>Syllabus</button>
                </div>
              </div>
            ))}
          </div>
        </section>
      );
    }

    /* How We Work With Schools — 4 step */
    function HowItWorks(){
      useReveal();
      const steps = [
        'School onboarding & demo',
        'Pilot batch & teacher training',
        'Full rollout & monthly reporting',
        'Co-created STEM curriculum',
      ];
      return (
        <section className="section reveal" aria-labelledby="how-title">
          <h2 id="how-title">How We Work With Schools</h2>
          <p className="muted">A clear 4-step approach that scales across classrooms and produces consistent outcomes.</p>

          <div className="steps" style={{marginTop:28}}>
            {steps.map((s,i)=>(
              <div className="step" key={i}>
                <div className="step-num">Step {i+1}</div>
                <div style={{fontWeight:900, fontSize:16, marginTop:12}}>{s}</div>
                <div className="muted" style={{marginTop:12,lineHeight:1.6}}>Short description or KPI placeholder for this step.</div>
              </div>
            ))}
          </div>
        </section>
      );
    }

    /* STEM Labs carousel — bigger slides & placeholders */
    function LabsCarousel(){
      useReveal();
      const labs = [
        {title:'Robotics Lab', colorClass:'img-box--2'},
        {title:'Electronics Lab', colorClass:'img-box--3'},
        {title:'Chemistry Studio', colorClass:'img-box--4'},
        {title:'Coding Corner', colorClass:'img-box--muted'},
      ];

      const [index,setIndex] = useState(0);

      useEffect(()=>{
        const id = setInterval(()=> setIndex(i=> (i+1) % labs.length), 5000);
        return ()=>clearInterval(id);
      },[]);

      function prev(){ setIndex(i => (i - 1 + labs.length) % labs.length) }
      function next(){ setIndex(i => (i + 1) % labs.length) }

      const translate = -(index * (360 + 20)); // slide width + gap

      return (
        <section className="section reveal" aria-labelledby="labs-title">
          <h2 id="labs-title">STEM Labs Showcase</h2>
          <p className="muted">Highlights and projects built by our students in recent batches.</p>

          <div className="carousel" style={{marginTop:28}}>
            <div className="slides" style={{transform:`translateX(${translate}px)`}}>
              {labs.map((l,idx)=>(
                <div className="lab" key={idx} role="article" aria-label={l.title}>
                  <div className={`img-box ${l.colorClass} large`} aria-hidden="true">{l.title} image</div>
                  <div style={{fontWeight:900, fontSize:18, marginTop:14}}>{l.title}</div>
                  <div className="muted" style={{fontSize:14, marginTop:12,lineHeight:1.6}}>Student-built projects, competitions & showcases.</div>
                </div>
              ))}
            </div>

            <div className="carousel-controls">
              <div style={{display:'flex',gap:12}}>
                <button className="btn" onClick={prev} aria-label="Previous lab">Prev</button>
                <button className="btn" onClick={next} aria-label="Next lab">Next</button>
              </div>
              <div style={{display:'flex',gap:12,alignItems:'center'}}>
                {labs.map((_,i)=>(
                  <div key={i} style={{width:12,height:12,borderRadius:8, background: i===index ? 'var(--accent)' : 'rgba(255,255,255,0.06)'}} />
                ))}
              </div>
            </div>
          </div>
        </section>
      );
    }

    /* Testimonials & Partner Schools */
    function Testimonials(){
      useReveal();
      const items = [
        {quote:'"Our students’ curiosity skyrocketed — projects are next-level."', who:'Principal, Greendale School'},
        {quote:'"I cleared my NEET pretest thanks to Vidyantraa."', who:'Riya, 12th Grade'},
        {quote:'"Teachers loved the ready-made lab kits."', who:'Coordinator, Bluebell Academy'},
      ];
      return (
        <section className="section reveal" aria-labelledby="testi-title">
          <h2 id="testi-title">Testimonials & Partner Schools</h2>
          <p className="muted">Real feedback from students and schools who partnered with us.</p>

          <div className="testimonials" style={{marginTop:28}}>
            {items.map((t,i)=>(
              <div className="testi" key={i}>
                <div style={{fontStyle:'italic', fontSize:15}}>{t.quote}</div>
                <div style={{marginTop:14,fontWeight:900}}>- {t.who}</div>
              </div>
            ))}

            <div className="testi" aria-hidden>
              <div style={{fontWeight:900, fontSize:18}}>Partner schools</div>
              <div className="muted" style={{marginTop:12}}>Greendale • Bluebell • Horizon • Oakridge</div>
            </div>
          </div>
        </section>
      );
    }

    /* Contact Form (roomy) */
    function Contact(){
      useReveal();
      const [form,setForm] = useState({name:'',email:'',role:'',message:''});
      const [status,setStatus] = useState(null);

      function update(k,v){ setForm(f=>({...f,[k]:v})) }

      function submit(e){
        e.preventDefault();
        setStatus('Sending...');
        // Replace with backend call when ready (fetch to /backend/contact.php)
        setTimeout(()=> {
          setStatus('Message sent! We will contact you soon.');
          setForm({name:'',email:'',role:'',message:''});
        },900);
      }

      return (
        <section className="section reveal" id="contact-form" aria-labelledby="contact-title">
          <h2 id="contact-title">Contact & Enroll</h2>
          <p className="muted">Share details and our team will reach out to help you choose the right program.</p>

          <form className="contact" onSubmit={submit} style={{marginTop:28}}>
            <div>
              <label htmlFor="name">Full name</label>
              <input id="name" type="text" value={form.name} onChange={e=>update('name',e.target.value)} required />

              <label style={{marginTop:14}} htmlFor="email">Email</label>
              <input id="email" type="email" value={form.email} onChange={e=>update('email',e.target.value)} required />

              <label style={{marginTop:14}} htmlFor="role">I am a</label>
              <select id="role" value={form.role} onChange={e=>update('role',e.target.value)} required>
                <option value="" disabled hidden>Select role</option>
                <option value="Student">Student</option>
                <option value="Parent">Parent</option>
                <option value="School Admin">School Admin</option>
              </select>
            </div>

            <div>
              <label htmlFor="message">Message / Query</label>
              <textarea id="message" value={form.message} onChange={e=>update('message',e.target.value)} placeholder="Tell us the student's grade, interests, or program you're interested in" />
              <div style={{display:'flex',gap:16,marginTop:18,alignItems:'center'}}>
                <button type="submit" className="btn">Send</button>
                <div className="muted" aria-live="polite">{status}</div>
              </div>
            </div>
          </form>
        </section>
      );
    }

    /* Compose page */
    function HomePage(){
      useReveal();
      return (
        <main className="page" role="main">
          <Hero />
          <Pillars />
          <Why />
          <Programs />
          <HowItWorks />
          <LabsCarousel />
          <Testimonials />
          <Contact />
        </main>
      );
    }

    ReactDOM.createRoot(document.getElementById('root')).render(<HomePage />);
  </script>

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
