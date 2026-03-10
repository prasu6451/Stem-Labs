<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Vidyantraa — Schools & Partners</title>

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
    h3{margin:0 0 12px 0}
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
    .program-card{min-height:220px}
    .step{flex:1;min-width:220px;background:linear-gradient(180deg, rgba(255,255,255,0.01), transparent);padding:20px;border-radius:14px;border:1px solid rgba(255,255,255,0.03);text-align:center;min-height:180px}
    .step-num{background:rgba(255,255,255,0.03);padding:10px;border-radius:12px;display:inline-block;font-weight:800;margin-bottom:12px}

    /* Process/Schedule table style adapted for Implementation Timeline */
    .timeline{width:100%;border-collapse:collapse;margin-top:18px}
    .timeline td{padding:20px 12px;text-align:left;border-bottom:1px solid rgba(255,255,255,0.04);color:var(--muted);vertical-align:top}
    .timeline-title{font-weight:700;color:#fff;font-size:17px;display:block;margin-bottom:6px}

    /* Analytics card */
    .analytics{display:flex;gap:20px;align-items:center;flex-wrap:wrap}
    .stat{background:linear-gradient(180deg, rgba(255,255,255,0.01), transparent);padding:18px;border-radius:14px;border:1px solid rgba(255,255,255,0.03);min-width:160px;text-align:center}

    /* Infrastructure block */
    .infra{display:grid;grid-template-columns:1fr 340px;gap:28px;align-items:center}

    /* Contact form */
    .contact{display:grid;grid-template-columns:1fr 1fr;gap:20px}
    label{font-size:14px;color:var(--muted);display:block;margin-bottom:8px}
    input[type="text"], input[type="email"], input[type="number"], textarea, select{width:100%;padding:14px;border-radius:12px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit;font-size:15px}
    textarea{min-height:200px;resize:vertical}
    .muted{color:var(--muted);font-size:14px}

    select{ color: var(--muted); }
    select:focus{ color: var(--text-dark); outline: none; }
    select:valid{ color: var(--text-dark); }

    @media (max-width:1100px){
      .two-col{grid-template-columns:1fr}
      .page{padding:44px 24px}
      .img-box.large{height:260px}
      .infra{grid-template-columns:1fr}
    }
    @media (max-width:760px){
      .contact{grid-template-columns:1fr}
      .img-box{height:180px}
      h1{font-size:34px}
      h2{font-size:22px}
      .page{padding:28px 16px}
    }

    /* reveal + micro animations */
    .reveal{opacity:0;transform:translateY(22px) scale(.995);transition: all 800ms cubic-bezier(.16,1,.3,1)}
    .reveal.show{opacity:1;transform:none}
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

  loadHeader();
</script>

  <script type="text/babel">
    const { useState, useEffect } = React;

    /* reveal-on-scroll */
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

    /* HERO */
    function Hero(){
      useReveal();
      return (
        <section className="section reveal" aria-labelledby="hero-title">
          <div className="two-col">
            <div>
              <h1 id="hero-title">Empower Your School with Integrated Excellence</h1>
              <p className="muted">Transform your curriculum with Vidyantraa’s integrated programs, advanced labs, and teacher up-skilling. We bridge the gap between school syllabus and competitive success.</p>

              <div className="cta-row">
                <button className="btn" onClick={()=>document.getElementById('partner-form')?.scrollIntoView({behavior:'smooth'})}>Partner Inquiry</button>
                <button className="btn secondary" onClick={()=>alert('Brochure PDF placeholder')}>Download Brochure</button>
              </div>

              <div style={{display:'flex',gap:18,marginTop:26,flexWrap:'wrap'}}>
                <div className="card" style={{minWidth:200}}>
                  <div style={{fontSize:13,color:'var(--muted)'}}>Alignment</div>
                  <div style={{fontWeight:900,fontSize:22,marginTop:10}}>NEP 2020</div>
                  <div className="muted" style={{marginTop:10}}>Curriculum designed for modern pedagogy</div>
                </div>
                <div className="card" style={{minWidth:200}}>
                  <div style={{fontSize:13,color:'var(--muted)'}}>Integration</div>
                  <div style={{fontWeight:900,fontSize:22,marginTop:10}}>In-School</div>
                  <div className="muted" style={{marginTop:10}}>Seamlessly fits into your daily timetable</div>
                </div>
              </div>
            </div>

            <div>
              <div className="img-box large img-box--2" aria-hidden="true">Institutional Partnership Image</div>
            </div>
          </div>
        </section>
      );
    }

    /* Solutions / Programs for Schools */
    function Solutions(){
      useReveal();
      const solutions = [
        {name:'Integrated Curriculum', desc:'We deploy expert faculty to teach Math/Science within school hours, synchronizing Board syllabus with Foundation/JEE preparation.'},
        {name:'Lab Infrastructure', desc:'Turnkey setup of Robotics, AI, and advanced Science labs with maintained equipment and safety protocols.'},
        {name:'After-School Program', desc:'Optional on-campus coaching for competitive exams (JEE/NEET) to retain students and reduce travel stress.'},
      ];
      return (
        <section className="section reveal" aria-labelledby="solutions-title">
          <h2 id="solutions-title">Institutional Solutions</h2>
          <p className="muted">Flexible partnership models tailored to your school’s infrastructure and academic goals.</p>

          <div style={{marginTop:28}} className="feature-grid">
            {solutions.map((p,i)=>(
              <div className="card program-card" key={i}>
                <div style={{fontSize:13,color:'var(--muted)'}}>Model {i+1}</div>
                <div style={{fontWeight:900,fontSize:18,marginTop:8}}>{p.name}</div>
                <div className="muted" style={{marginTop:12,lineHeight:1.6}}>{p.desc}</div>

                <div style={{display:'flex',gap:12,marginTop:18}}>
                  <button className="btn secondary" style={{width:'100%'}} onClick={()=>alert('Details placeholder')}>View Details</button>
                </div>
              </div>
            ))}
          </div>
        </section>
      );
    }

    /* Implementation Process */
    function Implementation(){
      useReveal();
      const steps = [
        {phase:'Phase 1: Audit', detail:'We assess student levels and existing infrastructure to customize the academic plan.'},
        {phase:'Phase 2: Training', detail:'Faculty orientation and teacher training workshops to align teaching methodologies.'},
        {phase:'Phase 3: Rollout', detail:'Classes begin with Vidyantraa study material distribution and initial diagnostic tests.'},
        {phase:'Phase 4: Review', detail:'Quarterly academic audits with the Principal and HODs to track batch progress.'}
      ];
      return (
        <section className="section reveal" aria-labelledby="impl-title">
          <h2 id="impl-title">Implementation Timeline</h2>
          <p className="muted">A structured onboarding process ensuring zero disruption to your school's existing calendar.</p>

          <table className="timeline" style={{marginTop:24}}>
            <tbody>
              {steps.map((s,i)=>(
                <tr key={i}>
                  <td style={{width:'30%'}}>
                     <span className="timeline-title">{s.phase}</span>
                  </td>
                  <td>{s.detail}</td>
                </tr>
              ))}
            </tbody>
          </table>
        </section>
      );
    }

    /* Teacher Enablement */
    function TeacherTraining(){
      useReveal();
      const items = [
        {t:'Pedagogy Workshops', d:'Upskilling school teachers on modern problem-solving techniques and NEP compliance.'},
        {t:'Resource Library', d:'Access to our repository of question banks, lesson plans, and digital assets.'},
        {t:'Co-Teaching Model', d:'School teachers and Vidyantraa experts collaborate to ensure concept continuity.'},
      ];
      return (
        <section className="section reveal" aria-labelledby="training-title">
          <h2 id="training-title">Teacher Enablement</h2>
          <p className="muted">We don’t just teach students; we empower your faculty to become better educators.</p>

          <div style={{marginTop:28}} className="feature-grid">
            {items.map((it,i)=>(
              <div className="card" key={i}>
                <div style={{fontSize:13,color:'var(--muted)'}}>Support</div>
                <div style={{fontWeight:900,fontSize:18,marginTop:8}}>{it.t}</div>
                <div className="muted" style={{marginTop:12,lineHeight:1.6}}>{it.d}</div>
              </div>
            ))}
          </div>
        </section>
      );
    }

    /* Admin Analytics */
    function AdminAnalytics(){
      useReveal();
      return (
        <section className="section reveal" aria-labelledby="analytics-title">
          <h2 id="analytics-title">Management Dashboard</h2>
          <p className="muted">Principals and HODs get a high-level view of academic health, attendance, and national benchmarking.</p>

          <div style={{marginTop:28}} className="analytics">
            <div style={{flex:1}}>
              <div className="card">
                <div style={{fontWeight:900,fontSize:18}}>Batch Performance Overview</div>
                <div className="muted" style={{marginTop:12,lineHeight:1.6}}>Track average scores per section, identify weak topics across the grade, and view teacher effectiveness reports.</div>
                <div style={{marginTop:16}} className="img-box img-box--muted">Admin Dashboard Preview</div>
              </div>
            </div>

            <div style={{display:'grid',gap:14}}>
              <div className="stat">
                <div style={{fontSize:13,color:'var(--muted)'}}>Avg. Grade Uplift</div>
                <div style={{fontWeight:900,fontSize:20,marginTop:8}}>+22%</div>
              </div>
              <div className="stat">
                <div style={{fontSize:13,color:'var(--muted)'}}>Selection Ratio</div>
                <div style={{fontWeight:900,fontSize:20,marginTop:8}}>1:4</div>
              </div>
            </div>
          </div>
        </section>
      );
    }

    /* Labs & Infrastructure */
    function Infrastructure(){
      useReveal();
      return (
        <section className="section reveal" aria-labelledby="infra-title">
          <h2 id="infra-title">Labs & Infrastructure</h2>
          <p className="muted">State-of-the-art laboratory setups for Physics and Robotics, fully managed by Vidyantraa.</p>

          <div style={{marginTop:28}} className="infra">
            <div>
              <div className="card" style={{marginBottom:20}}>
                <div style={{fontWeight:900,fontSize:18}}>Turnkey Setup</div>
                <div className="muted" style={{marginTop:10,lineHeight:1.6}}>We handle procurement, installation, and maintenance of equipment. Your school provides the space; we provide the science.</div>
              </div>

              <div className="card">
                <div style={{fontWeight:900,fontSize:18}}>Safety & Supervision</div>
                <div className="muted" style={{marginTop:10,lineHeight:1.6}}>All lab sessions are supervised by trained instructors adhering to strict safety protocols.</div>
              </div>
            </div>

            <div>
              <div className="img-box img-box--4 large" aria-hidden="true">Lab Equipment Image</div>
            </div>
          </div>
        </section>
      );
    }

    /* Contact / Partner Form */
    function PartnerForm(){
      useReveal();
      const [form,setForm] = useState({school:'',name:'',role:'',students:'',message:''});
      const [status,setStatus] = useState(null);

      function update(k,v){ setForm(f=>({...f,[k]:v})) }

      function submit(e){
        e.preventDefault();
        setStatus('Submitting...');
        // Backend integration placeholder
        setTimeout(()=> {
          setStatus('Inquiry received. Our academic director will call you shortly.');
          setForm({school:'',name:'',role:'',students:'',message:''});
        },900);
      }

      return (
        <section className="section reveal" id="partner-form" aria-labelledby="contact-title">
          <h2 id="contact-title">Partner With Us</h2>
          <p className="muted">Schedule a meeting to discuss how we can elevate your school's academic standing.</p>

          <form className="contact" onSubmit={submit} style={{marginTop:28}}>
            <div>
              <label htmlFor="school">School / Institution Name</label>
              <input id="school" type="text" value={form.school} onChange={e=>update('school',e.target.value)} required />

              <label style={{marginTop:14}} htmlFor="name">Contact Person Name</label>
              <input id="name" type="text" value={form.name} onChange={e=>update('name',e.target.value)} required />

              <label style={{marginTop:14}} htmlFor="role">Designation</label>
              <select id="role" value={form.role} onChange={e=>update('role',e.target.value)} required>
                <option value="" disabled hidden>Select</option>
                <option value="Principal">Principal</option>
                <option value="Director">Director / Trustee</option>
                <option value="HOD">HOD / Coordinator</option>
                <option value="Other">Other</option>
              </select>
            </div>

            <div>
              <label htmlFor="students">Total Student Strength (Approx)</label>
              <input id="students" type="number" value={form.students} onChange={e=>update('students',e.target.value)} placeholder="e.g. 1500" />

              <label style={{marginTop:14}} htmlFor="message">Requirements / Message</label>
              <textarea id="message" value={form.message} onChange={e=>update('message',e.target.value)} placeholder="Tell us about your requirements (Integrated program, Labs, etc)..." />

              <div style={{display:'flex',gap:16,marginTop:18,alignItems:'center'}}>
                <button type="submit" className="btn">Send Inquiry</button>
                <div className="muted" aria-live="polite">{status}</div>
              </div>
            </div>
          </form>
        </section>
      );
    }

    /* Page composition */
    function SchoolsPage(){
      useReveal();
      return (
        <main className="page" role="main">
          <Hero />
          <Solutions />
          <Implementation />
          <TeacherTraining />
          <AdminAnalytics />
          <Infrastructure />
          <PartnerForm />
        </main>
      );
    }

    ReactDOM.createRoot(document.getElementById('root')).render(<SchoolsPage />);
  </script>

   <div id="site-footer"></div>
<script>
  async function loadFooter() {
    try {
      const res = await fetch('./header-footer/footer.html', { cache: 'no-cache' });
      if (!res.ok) throw new Error('footer fetch failed: ' + res.status);
      const html = await res.text();
      document.getElementById('site-footer').innerHTML = html;
    } catch (err) {
      console.warn('Could not load footer:', err);
    }
  }
  loadFooter();
</script>
<?php include __DIR__ . "/includes/footer.php"; ?>
</body>
</html>