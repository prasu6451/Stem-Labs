<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Vidyantraa — About</title>

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
    .bio{display:flex;gap:18px;align-items:center}
    .avatar{width:120px;height:120px;border-radius:12px;flex-shrink:0;display:flex;align-items:center;justify-content:center;font-weight:800;color:#fff}
    .timeline{display:flex;flex-direction:column;gap:14px}

    /* Stat row */
    .stats{display:flex;gap:20px;flex-wrap:wrap}
    .stat{background:linear-gradient(180deg, rgba(255,255,255,0.01), transparent);padding:18px;border-radius:14px;border:1px solid rgba(255,255,255,0.03);min-width:160px;text-align:center}

    /* Vision / mission */
    .vision-grid{display:grid;grid-template-columns:1fr 1fr;gap:24px;align-items:start}

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
      .vision-grid{grid-template-columns:1fr}
    }
    
    /* Responsive Mobile Styles */
    @media (max-width:760px){
      .contact{grid-template-columns:1fr}
      .img-box{height:180px}
      h1{font-size:32px; word-wrap: break-word;}
      h2{font-size:24px}
      
      .page{
        padding:24px 16px; 
        margin: 0 auto; 
        width: 100%;
      }
      
      .section{
        padding: 24px 20px;
        margin-bottom: 32px;
      }
      
      .cta-row {
        flex-direction: column;
        width: 100%;
      }
      
      .btn {
        width: 100%;
        text-align: center;
      }

      /* Fix inputs on mobile to prevent zoom and ensure width */
      input[type="text"], input[type="email"], textarea, select{
        font-size: 16px; 
      }
      
      /* Adjust stats to take full width if needed or flow nicely */
      .stat {
        flex: 1 1 100%;
      }
      
      .card {
        padding: 20px;
      }
      
      .timeline .card {
        flex-direction: column;
        align-items: flex-start !important;
        gap: 8px !important;
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
    const { useState, useEffect } = React;

    /* reveal-on-scroll hook */
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

    /* HERO / overview */
    function Hero(){
      useReveal();
      return (
        <section className="section reveal" aria-labelledby="hero-title">
          <div className="two-col">
            <div>
              <h1 id="hero-title">About Vidyantraa — Experience, Team & Vision</h1>
              <p className="muted">We combine decades of teaching experience, partnerships with schools, an expert mentor network and an AI-assisted delivery system to help students learn better and schools scale hands-on programs.</p>

              <div className="cta-row">
                <button className="btn" onClick={()=>document.getElementById('contact-form')?.scrollIntoView({behavior:'smooth'})}>Contact Partnerships</button>
                <button className="btn secondary" onClick={()=>alert('Download company profile placeholder')}>Download Profile</button>
              </div>

              <div style={{display:'flex',gap:18,marginTop:26,flexWrap:'wrap'}}>
                <div className="stat">
                  <div style={{fontSize:13,color:'var(--muted)'}}>Years of experience</div>
                  <div style={{fontWeight:900,fontSize:22,marginTop:8}}>20+</div>
                </div>
                <div className="stat">
                  <div style={{fontSize:13,color:'var(--muted)'}}>Partner schools</div>
                  <div style={{fontWeight:900,fontSize:22,marginTop:8}}>25+</div>
                </div>
                <div className="stat">
                  <div style={{fontSize:13,color:'var(--muted)'}}>Mentors & team</div>
                  <div style={{fontWeight:900,fontSize:22,marginTop:8}}>Core + network</div>
                </div>
              </div>
            </div>

            <div>
              <div className="img-box large img-box--1" aria-hidden="true">Team / Office photo placeholder</div>
            </div>
          </div>
        </section>
      );
    }

    /* Core team & mentors */
    function Team(){
      useReveal();
      const members = [
        {name:'Suraj Parsi', title:'Founder & Head — Strategy', bio:'11+ years in operations & education entrepreneurship.'},
        {name:'Dr. A. Sharma', title:'Lead Mentor — Biology', bio:'NEET specialist & curriculum lead.'},
        {name:'Ms. R. Kapoor', title:'Head — STEM Labs', bio:'Robotics and lab programs lead, ex-academia.'}
      ];
      return (
        <section className="section reveal" aria-labelledby="team-title">
          <h2 id="team-title">Core Team & Mentors</h2>
          <p className="muted">Experienced educators and practitioners who design curriculum, train teachers and mentor students.</p>

          <div style={{marginTop:28, display:'grid', gridTemplateColumns:'repeat(auto-fit,minmax(280px,1fr))', gap:22}}>
            {members.map((m,i)=>(
              <div className="card" key={i}>
                <div
                className="bio"
                style={{
                    display: 'flex',
                    flexDirection: 'column',
                    gap: 16,
                    alignItems: 'center',
                    textAlign: 'center'
                }}
                >
                <div
                    className={`avatar img-box img-box--${(i % 4) + 1}`}
                    style={{ width: 120, height: 120 }}
                    aria-hidden="true"
                >
                    {m.name.split(' ')[0]}
                </div>

                <div>
                    <div style={{ fontWeight: 900, fontSize: 18 }}>{m.name}</div>
                    <div className="muted" style={{ marginTop: 8 }}>{m.title}</div>
                    <div className="muted" style={{ marginTop: 12, lineHeight: 1.6 }}>
                    {m.bio}
                    </div>
                </div>
                </div>
              </div>
            ))}
          </div>
        </section>
      );
    }

    /* AI-driven delivery system */
    function AI(){
      useReveal();
      return (
        <section className="section reveal" aria-labelledby="ai-title">
          <h2 id="ai-title">AI-driven Delivery System</h2>
          <p className="muted">Adaptive practice, performance analytics, and personalized study paths — our platform uses lightweight ML to surface topic gaps and suggest next steps for students and teachers.</p>

          <div style={{marginTop:28}} className="two-col">
            <div>
              <div className="card">
                <div style={{fontWeight:900,fontSize:18}}>Personalized Learning</div>
                <div className="muted" style={{marginTop:12,lineHeight:1.6}}>Question-level analytics and suggested micro-practice tailored per student.</div>
                <div style={{marginTop:18}}>
                  <button className="btn" onClick={()=>alert('See demo placeholder')}>See demo workflow</button>
                </div>
              </div>
            </div>

            <div>
              <div className="img-box img-box--muted large" aria-hidden="true">AI system dashboard placeholder</div>
            </div>
          </div>
        </section>
      );
    }

    /* Vision & mission */
    function Vision(){
      useReveal();
      return (
        <section className="section reveal" aria-labelledby="vision-title">
          <h2 id="vision-title">Vision & Mission</h2>
          <p className="muted">Our vision is to make high-quality, hands-on STEM and exam-ready learning accessible to every student; our mission is to combine excellent teaching, practical projects and data-driven insights to improve learning outcomes.</p>

          <div style={{marginTop:28}} className="vision-grid">
            <div className="card">
              <div style={{fontWeight:900,fontSize:18}}>Vision</div>
              <div className="muted" style={{marginTop:12,lineHeight:1.6}}>Create opportunities for students to learn by doing, pursue STEM careers, and approach exams with confidence.</div>
            </div>
            <div className="card">
              <div style={{fontWeight:900,fontSize:18}}>Mission</div>
              <div className="muted" style={{marginTop:12,lineHeight:1.6}}>Partner with schools and communities to deliver scalable, measurable programs combining mentorship, labs, and adaptive analytics.</div>
            </div>
          </div>
        </section>
      );
    }

    /* Timeline / milestones (20+ years) */
    function Timeline(){
      useReveal();
      const events = [
        {year:'2003', text:'Pilot coaching sessions & community programs'},
        {year:'2010', text:'Scale to multiple centers & start STEM initiatives'},
        {year:'2017', text:'Partnerships with schools — integrated programs'},
        {year:'2024', text:'Launch of AI-assisted delivery modules & nationwide pilots'}
      ];
      return (
        <section className="section reveal" aria-labelledby="timeline-title">
          <h2 id="timeline-title">Milestones</h2>
          <p className="muted">Key moments that shaped our journey and the programs we run today.</p>

          <div style={{marginTop:28}} className="timeline">
            {events.map((e,i)=>(
              <div key={i} className="card" style={{display:'flex',gap:18,alignItems:'center'}}>
                <div style={{minWidth:84,fontWeight:900,fontSize:20}}>{e.year}</div>
                <div className="muted" style={{lineHeight:1.6}}>{e.text}</div>
              </div>
            ))}
          </div>
        </section>
      );
    }

    /* Contact / Partnerships */
    function Contact(){
      useReveal();
      const [form,setForm] = useState({name:'',email:'',role:'',message:''});
      const [status,setStatus] = useState(null);

      function update(k,v){ setForm(f=>({...f,[k]:v})) }

      function submit(e){
        e.preventDefault();
        setStatus('Sending...');
        // Replace with backend call when available
        setTimeout(()=> {
          setStatus('Message sent! Our team will reach out.');
          setForm({name:'',email:'',role:'',message:''});
        },900);
      }

      return (
        <section className="section reveal" id="contact-form" aria-labelledby="contact-title">
          <h2 id="contact-title">Contact / Partnerships</h2>
          <p className="muted">If you represent a school, parent group or partner organization, tell us your interest and we’ll reply with next steps.</p>

          <form className="contact" onSubmit={submit} style={{marginTop:28}}>
            <div>
              <label htmlFor="name">Full name</label>
              <input id="name" type="text" value={form.name} onChange={e=>update('name',e.target.value)} required />

              <label style={{marginTop:14}} htmlFor="email">Email</label>
              <input id="email" type="email" value={form.email} onChange={e=>update('email',e.target.value)} required />

              <label style={{marginTop:14}} htmlFor="role">I am a</label>
              <select id="role" value={form.role} onChange={e=>update('role',e.target.value)} required>
                <option value="" disabled hidden>Select</option>
                <option value="School Admin">School Admin</option>
                <option value="Partner">Partner</option>
                <option value="Parent">Parent</option>
              </select>
            </div>

            <div>
              <label htmlFor="message">Message / Notes</label>
              <textarea id="message" value={form.message} onChange={e=>update('message',e.target.value)} placeholder="Tell us about your school or interest..." />
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
    function AboutPage(){
      useReveal();
      return (
        <main className="page" role="main">
          <Hero />
          <Team />
          <AI />
          <Vision />
          <Timeline />
          <Contact />
        </main>
      );
    }

    ReactDOM.createRoot(document.getElementById('root')).render(<AboutPage />);
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