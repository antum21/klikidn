<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name') }}</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow:wght@400;500;600;700;900&family=Barlow+Condensed:wght@700;900&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>

<!-- NAV -->
<nav>
  <div class="nav-logo">
    <div class="nav-logo-icon">T</div>
    TORQUE
  </div>
  <div class="nav-links">
    <a href="#">About</a>
    <a href="#">Service</a>
    <a href="#">Project</a>
    <a href="#">Blog</a>
    <a href="#">Testimonials</a>
  </div>
  <button class="nav-cta">Start A Project</button>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-left">
    <div class="hero-badge-pill">Beast Design</div>
    <h1 class="hero-title">
      CHEERFUL<br>
      WITH CR<span class="accent">EA</span>TIVE
    </h1>
    <p class="hero-desc">Welcome to Cheerful, where color meets creativity to produce vibrant and lively designs. Join us on a colorful journey and discover the magic of unforgettable design.</p>
    <button class="hero-btn">Get Started <span class="arr">+</span></button>
    <div class="hero-stats-row">
      <div class="stat-pill"><strong>600+</strong><span>Projects</span></div>
      <div class="stat-pill"><strong>10yr</strong><span>Experience</span></div>
      <div class="stat-pill"><strong>50+</strong><span>Industries</span></div>
    </div>
  </div>
  <div class="hero-right">
    <div class="hero-figure">🧑‍🎨</div>
  </div>
</section>

<!-- MARQUEE -->
<div class="marquee-wrap">
  <div class="marquee-track">
    <div class="marquee-item"><span>Workflow</span><div class="m-dot"></div></div>
    <div class="marquee-item"><span>Mobile App</span><div class="m-dot"></div></div>
    <div class="marquee-item"><span>Animation</span><div class="m-dot"></div></div>
    <div class="marquee-item"><span>Branding</span><div class="m-dot"></div></div>
    <div class="marquee-item"><span>UI/UX Design</span><div class="m-dot"></div></div>
    <div class="marquee-item"><span>Web Design</span><div class="m-dot"></div></div>
    <div class="marquee-item"><span>3D Illustration</span><div class="m-dot"></div></div>
    <div class="marquee-item"><span>Workflow</span><div class="m-dot"></div></div>
    <div class="marquee-item"><span>Mobile App</span><div class="m-dot"></div></div>
    <div class="marquee-item"><span>Animation</span><div class="m-dot"></div></div>
    <div class="marquee-item"><span>Branding</span><div class="m-dot"></div></div>
    <div class="marquee-item"><span>UI/UX Design</span><div class="m-dot"></div></div>
    <div class="marquee-item"><span>Web Design</span><div class="m-dot"></div></div>
    <div class="marquee-item"><span>3D Illustration</span><div class="m-dot"></div></div>
  </div>
</div>

<!-- SERVICES -->
<section class="services-section">
  <div class="services-header">
    <div>
      <div class="section-label">What We Offer</div>
      <h2 class="section-title-big">CREATIVE <em>SOLUTIONS</em><br>JUST FOR YOU</h2>
    </div>
    <a href="#" class="view-all-btn">View All →</a>
  </div>
  <div class="services-grid">
    <div class="service-card">
      <div class="service-top">
        <div class="service-cat">Design</div>
        <h3>Best<br>UI / UX Design</h3>
        <p>Elevate with our expert UI/UX design services that convert and delight every user.</p>
      </div>
      <div class="service-thumb st-blue">📱<div class="service-thumb-label">Views</div></div>
    </div>
    <div class="service-card">
      <div class="service-top">
        <div class="service-cat">Visual</div>
        <h3>3D<br>Illustration</h3>
        <p>Visuals with our design and animation services that stand out from the crowd.</p>
      </div>
      <div class="service-thumb st-dark">🎲<div class="service-thumb-label">Views</div></div>
    </div>
    <div class="service-card featured">
      <div class="service-top">
        <div class="service-cat">Brand</div>
        <h3>Logo &<br>Branding</h3>
        <p>Life with our tailored branding solutions that bring your vision to reality.</p>
      </div>
      <div class="service-thumb st-green">✦<div class="service-thumb-label">Views</div></div>
    </div>
  </div>
</section>

<!-- PARTNERS -->
<div class="partners">
  <div class="partners-label">In Collaboration With</div>
  <div class="partners-grid">
    <div class="partner-logo">◎ Globalchart</div>
    <div class="partner-logo">ƒ Fancywear</div>
    <div class="partner-logo">⊞ BestBank</div>
    <div class="partner-logo">∷ dataBites.</div>
    <div class="partner-logo">✕ ExDone</div>
    <div class="partner-logo">◈ SlabSpace</div>
  </div>
</div>

<!-- STATEMENT -->
<section class="statement">
  <p class="statement-text">
    OUR EXPERT TEAM TRANSFORMS YOUR CONCEPTS TO
    <span class="tag-pill">✦ 10K PROJECT</span>
    <span class="highlight">STUNNING</span>
    3D VISUALS 🌊 THAT ENGAGE.
    WHETHER YOU NEED WORK DONE RIGHT,
    <span class="highlight">WE DELIVER</span> EVERY TIME.
  </p>
</section>

<!-- PORTFOLIO -->
<section class="portfolio-section">
  <div style="display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:32px;flex-wrap:wrap;gap:20px;">
    <div>
      <div class="section-label">Selected Works</div>
      <h2 class="section-title-big">OUR BEST <em>WORK</em> ✦</h2>
    </div>
    <a href="#" class="view-all-btn">View All →</a>
  </div>
  <div class="portfolio-tabs">
    <button class="tab active">All</button>
    <button class="tab">UI/UX Design</button>
    <button class="tab">Logo & Branding</button>
    <button class="tab">3D Illustrator</button>
    <button class="tab">Web Development</button>
  </div>
  <div class="portfolio-grid">
    <div class="portfolio-item tall p-bg1">
      <div class="p-thumb" style="font-size:64px;min-height:380px">🖥️</div>
      <div class="p-overlay"><div class="p-overlay-text"><span>UI/UX Design</span><h4>Dashboard App</h4></div></div>
    </div>
    <div class="portfolio-item p-bg2">
      <div class="p-thumb">🏡</div>
      <div class="p-overlay"><div class="p-overlay-text"><span>Web Design</span><h4>Real Estate</h4></div></div>
    </div>
    <div class="portfolio-item p-bg3">
      <div class="p-thumb">📦</div>
      <div class="p-overlay"><div class="p-overlay-text"><span>Branding</span><h4>Product Pack</h4></div></div>
    </div>
    <div class="portfolio-item p-bg4">
      <div class="p-thumb">🛍️</div>
      <div class="p-overlay"><div class="p-overlay-text"><span>E-Commerce</span><h4>Shop UI</h4></div></div>
    </div>
    <div class="portfolio-item p-bg5">
      <div class="p-thumb">🎨</div>
      <div class="p-overlay"><div class="p-overlay-text"><span>3D Visual</span><h4>Brand Identity</h4></div></div>
    </div>
    <div class="portfolio-item p-bg6">
      <div class="p-thumb">🏠</div>
      <div class="p-overlay"><div class="p-overlay-text"><span>Interior</span><h4>Creative Interiors</h4></div></div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testi-section">
  <div class="testi-header">
    <div>
      <div class="section-label">Client Reviews</div>
      <h2 class="section-title-big">WHAT<br>THEY'RE <em>SAYING</em></h2>
    </div>
    <a href="#" class="view-all-btn">View All →</a>
  </div>
  <div class="testi-grid">
    <div class="testi-card">
      <div class="testi-stars">★★★★★</div>
      <blockquote>"The team transformed our brand completely. Their attention to detail, creative direction, and execution was nothing short of extraordinary. Best investment we've made."</blockquote>
      <div class="testi-author">
        <div class="testi-avatar av-blue">J</div>
        <div><strong>Jenny Arthur</strong><span>CEO, TechStart Inc</span></div>
      </div>
    </div>
    <div class="testi-card">
      <div class="testi-stars">★★★★★</div>
      <blockquote>"Working with Torque was a game-changer. They delivered stunning 3D visuals that made our product launch unforgettable. Professional, fast, and incredibly talented."</blockquote>
      <div class="testi-author">
        <div class="testi-avatar av-black">M</div>
        <div><strong>Marcus Chen</strong><span>Founder, Insightancer</span></div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <h2>HAVE AN AWESOME<br>PROJECT IDEA? <em>LET'S DISCUSS</em></h2>
  <p>Drop your email and we'll get back to you within 24 hours.</p>
  <div class="cta-form">
    <input type="email" placeholder="Your Email Address">
    <button>Send It →</button>
  </div>
  <div class="cta-checks">
    <span>6/10 Design Ratings</span>
    <span>24H Avg. Response</span>
    <span>Certified Product Designer</span>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-brand"><em>TORQUE</em> STUDIO</div>
  <p>© 2025 Torque. All rights reserved.</p>
  <div class="social-links">
    <a href="#" class="social-btn">𝕏</a>
    <a href="#" class="social-btn">in</a>
    <a href="#" class="social-btn">Be</a>
    <a href="#" class="social-btn">Dr</a>
  </div>
</footer>

<script>
  // Custom cursor
//   const cursor = document.getElementById('cursor');
//   const ring = document.getElementById('cursorRing');
//   let mx=0,my=0,rx=0,ry=0;
//   document.addEventListener('mousemove', e => {
//     mx=e.clientX; my=e.clientY;
//     cursor.style.left=mx+'px'; cursor.style.top=my+'px';
//   });
//   function animRing(){
//     rx+=(mx-rx)*.12; ry+=(my-ry)*.12;
//     ring.style.left=rx+'px'; ring.style.top=ry+'px';
//     requestAnimationFrame(animRing);
//   }
//   animRing();

  // Tab switching
  document.querySelectorAll('.tab').forEach(tab=>{
    tab.addEventListener('click',()=>{
      document.querySelectorAll('.tab').forEach(t=>t.classList.remove('active'));
      tab.classList.add('active');
    });
  });

  // Scroll reveal
  const obs = new IntersectionObserver(entries=>{
    entries.forEach(e=>{
      if(e.isIntersecting){
        e.target.style.animation='fadeUp .6s ease both';
        obs.unobserve(e.target);
      }
    });
  },{threshold:.1});
  document.querySelectorAll('.service-card,.portfolio-item,.testi-card').forEach(el=>{
    el.style.opacity='0'; obs.observe(el);
  });
</script>
</body>
</html>