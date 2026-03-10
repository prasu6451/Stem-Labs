<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Vidyantraa — STEM Labs</title>

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
      --radius:18px;
      --max:1200px;
    }
    *{box-sizing:border-box}
    html,body{height:100%;margin:0;background:linear-gradient(180deg,var(--bg),#031222 120%);color:#e6eef8;font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;}
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
    p{margin:0 0 18px 0;color:var(--muted);line-height:1.6}
    .grid{display:grid;gap:28px}

    /* Layout helpers */
    .two-col{display:grid;grid-template-columns:1fr 480px;gap:36px;align-items:start}
    .feature-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:22px}

    /* Buttons */
    .btn{background:linear-gradient(90deg,var(--accent),var(--accent-2)); color:#022; padding:14px 18px;border-radius:14px;border:none;font-weight:800;cursor:pointer;box-shadow:0 14px 40px rgba(34,197,94,0.12);transition:transform .14s ease}
    .btn.secondary{background:transparent;border:1px solid rgba(255,255,255,0.06);color:var(--accent-2);font-weight:700}
    .btn:active{transform:translateY(2px)}
    .cta-row{display:flex;gap:16px;margin-top:22px;flex-wrap:wrap}

    /* Placeholders */
    .img-box{height:220px;border-radius:12px;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:800;letter-spacing:0.2px}
    .img-box.large{height:320px}
    .img-box--1{background:linear-gradient(135deg,#0b6b8a,#3bb7c7)}
    .img-box--2{background:linear-gradient(135deg,#7c4dff,#4fb0ff)}
    .img-box--3{background:linear-gradient(135deg,#ff7ab6,#ffb96b)}
    .img-box--4{background:linear-gradient(135deg,#66e0a9,#4dd0e1)}
    .img-box--muted{background:linear-gradient(135deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01)); color: var(--muted-2); font-weight:800}

    /* Cards */
    .card{background:linear-gradient(180deg, rgba(255,255,255,0.01), transparent);padding:26px;border-radius:14px;border:1px solid rgba(255,255,255,0.03);min-height:180px}
    .feature-card{min-height:220px}
    .step{flex:1;min-width:220px;background:linear-gradient(180deg, rgba(255,255,255,0.01), transparent);padding:20px;border-radius:14px;border:1px solid rgba(255,255,255,0.03);text-align:center;min-height:180px}
    .step-num{background:rgba(255,255,255,0.03);padding:10px;border-radius:12px;display:inline-block;font-weight:800;margin-bottom:12px}

    /* Gallery / carousel */
    .gallery{display:flex;gap:18px;flex-wrap:wrap;align-items:center}
    .equip{width:calc(33% - 12px);min-width:220px;background:linear-gradient(180deg,#06203a, #042235);padding:14px;border-radius:12px;box-shadow:0 10px 40px rgba(2,6,23,0.6)}
    .equip .img-box{height:160px;border-radius:8px}
    .carousel{position:relative;overflow:hidden;border-radius:14px;padding:20px;background:linear-gradient(90deg, rgba(125,211,252,0.03), rgba(110,231,183,0.02));}
    .slides{display:flex;gap:20px;transition:transform .6s cubic-bezier(.22,.9,.32,1)}
    .case{min-width:320px;flex:0 0 320px;background:linear-gradient(180deg,#06203a, #042235);padding:18px;border-radius:14px;box-shadow:0 10px 40px rgba(2,6,23,0.6)}

    /* Outcome stats */
    .outcomes{display:flex;gap:20px;flex-wrap:wrap}
    .stat{background:linear-gradient(180deg, rgba(255,255,255,0.01), transparent);padding:18px;border-radius:14px;border:1px solid rgba(255,255,255,0.03);min-width:180px;text-align:center}

    /* Contact form */
    .contact{display:grid;grid-template-columns:1fr 1fr;gap:20px}
    label{font-size:14px;color:var(--muted);display:block;margin-bottom:8px}
    input[type="text"], input[type="email"], textarea, select{width:100%;padding:14px;border-radius:12px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit;font-size:15px}
    textarea{min-height:200px;resize:vertical}
    .muted{color:var(--muted);font-size:14px}

    /* select placeholder -> dark text on selection */
    select{ color: var(--muted); }
    select:focus{ color: var(--text-dark); outline: none; }
    select:valid{ color: var(--text-dark); }

    @media (max-width:1100px){
      .two-col{grid-template-columns:1fr}
      .page{padding:44px 24px}
      .img-box.large{height:260px}
      .equip{width:100%}
    }
    
    /* Mobile Responsive Styles */
    @media (max-width:760px){
      .contact{grid-template-columns:1fr}
      .img-box{height:180px}
      h1{font-size:32px; word-wrap: break-word;}
      h2{font-size:24px}
      
      .page{
        padding:24px 16px; 
        width: 100%;
      }
      
      .section{
        padding: 24px 20px;
        margin-bottom: 32px;
      }

      .cta-row {
        flex-direction: column;
      }
      .btn {
        width: 100%;
      }

      /* Stack the gallery items */
      .gallery {
        flex-direction: column;
      }
      .equip {
        width: 100%;
        min-width: 0;
      }

      /* Make stats full width on small mobile */
      .stat {
        flex: 1 1 100%;
      }

      /* Prevent input zoom on iPhone */
      input[type="text"], input[type="email"], textarea, select{
        font-size: 16px; 
      }
      
      /* Targeting the 'Includes' section container to fix the inline grid 
         without changing the React script. 
         This selects the div immediately following the p tag inside that specific section.
      */
      section[aria-labelledby="includes-title"] > div {
        grid-template-columns: 1fr !important;
      }
    }

    /* reveal + micro animations */
    .reveal{opacity:0;transform:translateY(22px) scale(.995);transition: all 800ms cubic-bezier(.16,1,.3,1)}
    .reveal.show{opacity:1;transform:none}
    .floaty{animation:floaty 6s ease-in-out infinite}
    @keyframes floaty{0%{transform:translateY(0)}50%{transform:translateY(-10px)}100%{transform:translateY(0)}}
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
    const {useState, useEffect} = React;

    /* reveal hook */
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

    /* HERO */
    function Hero(){
      useReveal();
      return (
        <section className="section reveal" aria-labelledby="hero-title">
          <div className="two-col">
            <div>
              <h1 id="hero-title">STEM Labs — Types, Training, Equipment & Outcomes</h1>
              <p className="muted">Deep-dive page for the STEM vertical: lab types, what each lab includes, teacher training, optional faculty deployment, student innovation programs, equipment gallery and measured outcomes for partner schools.</p>

              <div className="cta-row">
                <button className="btn" onClick={()=>document.getElementById('contact-form')?.scrollIntoView({behavior:'smooth'})}>Inquire about Labs</button>
                <button className="btn secondary" onClick={()=>alert('Download STEM brochure placeholder')}>Download Lab Specs</button>
              </div>

              <div style={{display:'flex',gap:18,marginTop:26,flexWrap:'wrap'}}>
                <div className="card" style={{minWidth:200}}>
                  <div style={{fontSize:13,color:'var(--muted)'}}>Lab modules</div>
                  <div style={{fontWeight:900,fontSize:22,marginTop:10}}>Robotics • Electronics • Chemistry</div>
                  <div className="muted" style={{marginTop:10}}>Fully curriculum-mapped modules</div>
                </div>
                <div className="card" style={{minWidth:200}}>
                  <div style={{fontSize:13,color:'var(--muted)'}}>Teacher training</div>
                  <div style={{fontWeight:900,fontSize:22,marginTop:10}}>Onboarding + Upskilling</div>
                  <div className="muted" style={{marginTop:10}}>Hands-on trainer-led sessions</div>
                </div>
              </div>
            </div>

            <div>
              <div className="img-box large img-box--2" aria-hidden="true">STEM labs hero image</div>
            </div>
          </div>
        </section>
      );
    }

    /* Types of Labs */
    function Types(){
      useReveal();
      const types = [
        {title:'Robotics Lab', desc:'Kits, controllers, sensors and project tracks from basic to advanced.'},
        {title:'Electronics Lab', desc:'Breadboarding, microcontrollers, power systems and circuit design.'},
        {title:'Chemistry Studio', desc:'Safe, curriculum-aligned experiments with proper safety kits.'},
        {title:'Coding & AI Corner', desc:'Project-based coding, data science intro and AI modules.'},
      ];
      return (
        <section className="section reveal" aria-labelledby="types-title">
          <h2 id="types-title">Types of Labs</h2>
          <p className="muted">Multiple lab verticals designed for progressive learning and project portfolios.</p>

          <div style={{marginTop:28}} className="feature-grid">
            {types.map((t,i)=>(
              <div className="card" key={i}>
                <div style={{fontSize:13,color:'var(--muted)'}}>Lab</div>
                <div style={{fontWeight:900,fontSize:18,marginTop:8}}>{t.title}</div>
                <div className="muted" style={{marginTop:12,lineHeight:1.6}}>{t.desc}</div>
                <div style={{marginTop:16}}>
                  <button className="btn" onClick={()=>alert('View modules placeholder')}>View Modules</button>
                </div>
              </div>
            ))}
          </div>
        </section>
      );
    }

    /* What's included in each lab */
    function Includes(){
      useReveal();
      const items = [
        'Complete equipment kits with spare parts',
        'Lab manuals & curriculum-aligned lesson plans',
        'Student project guides & assessment rubrics',
        'Safety kits, storage & maintenance guides',
        'Digital resources & example projects'
      ];
      return (
        <section className="section reveal" aria-labelledby="includes-title">
          <h2 id="includes-title">What’s Included in Each Lab</h2>
          <p className="muted">Each lab package provides hardware, curriculum and teacher enablement so schools can run labs smoothly.</p>

          <div style={{marginTop:24, display:'grid', gridTemplateColumns:'1fr 1fr', gap:18}}>
            <div className="card">
              <ul style={{lineHeight:1.8, color:'var(--muted)'}}>
                {items.slice(0,3).map((it,idx)=>(<li key={idx}>{it}</li>))}
              </ul>
              <div style={{marginTop:16}}>
                <button className="btn secondary" onClick={()=>alert('See full kit list placeholder')}>See full kit list</button>
              </div>
            </div>

            <div className="card">
              <div style={{fontWeight:900,fontSize:18}}>Maintenance & Replacement</div>
              <div className="muted" style={{marginTop:12,lineHeight:1.6}}>Periodic maintenance schedules, consumables replacement plans, and optional managed servicing by our logistics team.</div>
              <div style={{marginTop:16}}>
                <button className="btn" onClick={()=>alert('Maintenance plan placeholder')}>View maintenance plan</button>
              </div>
            </div>
          </div>
        </section>
      );
    }

    /* Teacher training */
    function Training(){
      useReveal();
      const steps = [
        {title:'Onboarding Workshop', detail:'Two-day hands-on workshop for teachers to run labs and assessments.'},
        {title:'Co-teaching Sessions', detail:'Mentors co-teach first 3 sessions to build teacher confidence.'},
        {title:'Monthly Upskilling', detail:'Quarterly advanced workshops and teacher community meetups.'}
      ];
      return (
        <section className="section reveal" aria-labelledby="training-title">
          <h2 id="training-title">Teacher Training</h2>
          <p className="muted">Practical, hands-on teacher training ensures long-term program sustainability and better outcomes.</p>

          <div style={{marginTop:28, display:'grid', gridTemplateColumns:'repeat(auto-fit,minmax(260px,1fr))', gap:20}}>
            {steps.map((s,i)=>(
              <div className="step" key={i}>
                <div className="step-num">Phase {i+1}</div>
                <div style={{fontWeight:900, fontSize:16, marginTop:10}}>{s.title}</div>
                <div className="muted" style={{marginTop:12,lineHeight:1.6}}>{s.detail}</div>
              </div>
            ))}
          </div>
        </section>
      );
    }

    /* Faculty deployment - optional */
    function Faculty(){
      useReveal();
      return (
        <section className="section reveal" aria-labelledby="faculty-title">
          <h2 id="faculty-title">Faculty Deployment (Optional)</h2>
          <p className="muted">If schools prefer, we can deploy trained instructors to run labs on-campus — fully background-checked and program-certified.</p>

          <div style={{marginTop:24}} className="two-col">
            <div>
              <div className="card" style={{marginBottom:18}}>
                <div style={{fontWeight:900,fontSize:18}}>On-site instructors</div>
                <div className="muted" style={{marginTop:12,lineHeight:1.6}}>Deployment options range from a few hours per week to full-time instructors depending on school needs.</div>
              </div>

              <div className="card">
                <div style={{fontWeight:900,fontSize:18}}>Flexible contracts</div>
                <div className="muted" style={{marginTop:12,lineHeight:1.6}}>Short-term pilots, seasonal staffing or long-term partnerships — choose what fits the school calendar.</div>
              </div>
            </div>

            <div>
              <div className="img-box img-box--muted large" aria-hidden="true">Faculty deployment image</div>
            </div>
          </div>
        </section>
      );
    }

    /* Student innovation programs */
    function Innovation(){
      useReveal();
      const programs = [
        {title:'Maker Challenges', desc:'Monthly challenges to prototype and present solutions.'},
        {title:'Innovation Incubator', desc:'Select teams receive mentorship and mini-grants.'},
        {title:'Inter-school Fairs', desc:'Annual showcase & competitions with judging panels.'},
      ];
      return (
        <section className="section reveal" aria-labelledby="innovation-title">
          <h2 id="innovation-title">Student Innovation Programs</h2>
          <p className="muted">Programs that motivate students to build, compete and publish projects — fostering creativity and portfolios for college applications.</p>

          <div style={{marginTop:28}} className="feature-grid">
            {programs.map((p,i)=>(
              <div className="card" key={i}>
                <div style={{fontSize:13,color:'var(--muted)'}}>Program</div>
                <div style={{fontWeight:900,fontSize:18,marginTop:8}}>{p.title}</div>
                <div className="muted" style={{marginTop:12,lineHeight:1.6}}>{p.desc}</div>
                <div style={{marginTop:16}}><button className="btn secondary" onClick={()=>alert('Apply placeholder')}>Apply / Learn more</button></div>
              </div>
            ))}
          </div>
        </section>
      );
    }

    /* Equipment Gallery */
    function Gallery(){
      useReveal();
      const items = [
        {title:'3D Printers & CNC', color:'img-box--3'},
        {title:'Arduino & Sensors', color:'img-box--2'},
        {title:'Oscilloscopes & Benches', color:'img-box--4'},
        {title:'Chemical Apparatus Kits', color:'img-box--muted'},
        {title:'Robotics Actuators', color:'img-box--1'},
      ];

      return (
        <section className="section reveal" aria-labelledby="gallery-title">
          <h2 id="gallery-title">Equipment Gallery</h2>
          <p className="muted">High-quality equipment curated for safety and student learning. Click items to view specs.</p>

          <div style={{marginTop:28}} className="gallery">
            {items.map((it,idx)=>(
              <div className="equip" key={idx} role="article" aria-label={it.title}>
                <div className={`img-box ${it.color}`} aria-hidden="true">{it.title} photo</div>
                <div style={{fontWeight:900, marginTop:12}}>{it.title}</div>
                <div className="muted" style={{marginTop:8,fontSize:13}}>Tap to view spec</div>
              </div>
            ))}
          </div>
        </section>
      );
    }

    /* Outcomes for school */
    function Outcomes(){
      useReveal();
      const stats = [
        {label:'Students in Advanced Tracks', value:'40% ↑'},
        {label:'Project Completion Rate', value:'92%'},
        {label:'Teacher Adoption Rate', value:'98%'},
        {label:'Reduction in Operational Load', value:'80%'},
      ];
      return (
        <section className="section reveal" aria-labelledby="outcomes-title">
          <h2 id="outcomes-title">Outcomes for Schools</h2>
          <p className="muted">Measured impact from pilots and rollouts — learning outcomes, teacher readiness and manageable operations.</p>

          <div style={{marginTop:28}} className="outcomes">
            {stats.map((s,i)=>(
              <div className="stat" key={i}>
                <div style={{fontSize:13,color:'var(--muted)'}}>{s.label}</div>
                <div style={{fontWeight:900,fontSize:22,marginTop:8}}>{s.value}</div>
              </div>
            ))}
          </div>
        </section>
      );
    }

    /* Contact / Inquire about lab */
    function Contact(){
      useReveal();
      const [form,setForm] = useState({name:'',email:'',school:'',lab:'',message:''});
      const [status,setStatus] = useState(null);

      function update(k,v){ setForm(f=>({...f,[k]:v})) }

      function submit(e){
        e.preventDefault();
        setStatus('Sending...');
        // Replace with backend fetch('/backend/inquire_lab.php', ...) when ready
        setTimeout(()=> {
          setStatus('Inquiry sent! Our STEM team will contact you.');
          setForm({name:'',email:'',school:'',lab:'',message:''});
        },900);
      }

      return (
        <section className="section reveal" id="contact-form" aria-labelledby="contact-title">
          <h2 id="contact-title">Inquire / Book a Lab Pilot</h2>
          <p className="muted">Tell us which lab you’re interested in and we’ll share specs, pricing and pilot options.</p>

          <form className="contact" onSubmit={submit} style={{marginTop:28}}>
            <div>
              <label htmlFor="name">Full name</label>
              <input id="name" type="text" value={form.name} onChange={e=>update('name',e.target.value)} required />

              <label style={{marginTop:14}} htmlFor="email">Email</label>
              <input id="email" type="email" value={form.email} onChange={e=>update('email',e.target.value)} required />

              <label style={{marginTop:14}} htmlFor="school">School / Organization</label>
              <input id="school" type="text" value={form.school} onChange={e=>update('school',e.target.value)} />
            </div>

            <div>
              <label htmlFor="lab">Lab Interested In</label>
              <select id="lab" value={form.lab} onChange={e=>update('lab',e.target.value)} required>
                <option value="" disabled hidden>Select lab</option>
                <option value="Robotics">Robotics Lab</option>
                <option value="Electronics">Electronics Lab</option>
                <option value="Chemistry">Chemistry Studio</option>
                <option value="Coding">Coding & AI Corner</option>
              </select>

              <label style={{marginTop:14}} htmlFor="message">Message / Requirements</label>
              <textarea id="message" value={form.message} onChange={e=>update('message',e.target.value)} placeholder="Tell us preferred timeline, batch size, or any custom request..." />

              <div style={{display:'flex',gap:16,marginTop:18,alignItems:'center'}}>
                <button type="submit" className="btn">Send Inquiry</button>
                <div className="muted" aria-live="polite">{status}</div>
              </div>
            </div>
          </form>
        </section>
      );
    }

    /* Compose page */
    function StemsPage(){
      useReveal();
      return (
        <main className="page" role="main">
          <Hero />
          <Types />
          <Includes />
          <Training />
          <Faculty />
          <Innovation />
          <Gallery />
          <Outcomes />
          <Contact />
        </main>
      );
    }

    ReactDOM.createRoot(document.getElementById('root')).render(<StemsPage />);
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