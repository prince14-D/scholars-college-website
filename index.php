<?php $pageTitle = "Home"; include("includes/header.php"); ?>

<!-- ═══════════════════════════ HERO ════════════════════════════════ -->
<section id="heroSection">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active hero-slide" style="background:url('assets/images/banner1.jpeg') center/cover no-repeat">
        <div class="hero-overlay"></div>
        <div class="hero-content">
          <div class="container">
            <span class="hero-eyebrow">Est. 2023 · Monrovia, Liberia</span>
            <h1 class="hero-title">Scholar's <span>College</span></h1>
            <p class="hero-subtitle">Solid Foundation, Solid Future — Nurturing minds from Early Childhood through Junior High.</p>
            <div class="hero-actions">
              <a href="admission.php" class="btn-crimson"><i class="fas fa-pen-to-square"></i> Apply for Admission</a>
              <a href="about.php" class="btn-outline-white"><i class="fas fa-arrow-right"></i> Learn More</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item hero-slide" style="background:url('assets/images/banner.jpeg') center/cover no-repeat">
        <div class="hero-overlay"></div>
        <div class="hero-content">
          <div class="container">
            <span class="hero-eyebrow">Academic Excellence</span>
            <h1 class="hero-title">Building <span>Future</span><br>Leaders</h1>
            <p class="hero-subtitle">Our curriculum challenges students to achieve their highest potential in academics, character, and leadership.</p>
            <div class="hero-actions">
              <a href="academics.php" class="btn-crimson"><i class="fas fa-book-open"></i> Explore Academics</a>
              <a href="gallary.php" class="btn-outline-white"><i class="fas fa-images"></i> View Gallery</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item hero-slide" style="background:url('assets/images/banner1.jpeg') center/cover no-repeat">
        <div class="hero-overlay"></div>
        <div class="hero-content">
          <div class="container">
            <span class="hero-eyebrow">Enroll Today</span>
            <h1 class="hero-title">Admissions<br><span>Now Open</span></h1>
            <p class="hero-subtitle">Join a school dedicated to discipline, moral values, and academic excellence for every student.</p>
            <div class="hero-actions">
              <a href="admission.php" class="btn-crimson"><i class="fas fa-user-plus"></i> Start Application</a>
              <a href="contact.php" class="btn-outline-white"><i class="fas fa-phone"></i> Contact Us</a>
            </div>
          </div>
        </div>
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <div class="hero-scroll">
    <i class="fas fa-chevron-down"></i>
    <span>Scroll</span>
  </div>
</section>


<!-- ════════════════════════ QUICK STATS ════════════════════════════ -->
<section class="stats-bar">
  <div class="container">
    <div class="row g-0">
      <div class="col-6 col-md-3 stat-item reveal">
        <span class="stat-number" data-count="300">0</span>
        <span class="stat-label">Students Enrolled</span>
      </div>
      <div class="col-6 col-md-3 stat-item reveal reveal-delay-1">
        <span class="stat-number" data-count="3">0</span>
        <span class="stat-label">Academic Programs</span>
      </div>
      <div class="col-6 col-md-3 stat-item reveal reveal-delay-2">
        <span class="stat-number" data-count="20">0</span>
        <span class="stat-label">Qualified Teachers</span>
      </div>
      <div class="col-6 col-md-3 stat-item reveal reveal-delay-3">
        <span class="stat-number" data-count="<?php echo date('Y') - 2023; ?>">0</span>
        <span class="stat-label">Years of Excellence</span>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════ ADMISSIONS CTA STRIP ══════════════════════ -->
<section class="cta-strip">
  <div class="container">
    <div class="row align-items-center gy-4">
      <div class="col-lg-8">
        <div class="section-label" style="color:var(--gold)">Admissions Open</div>
        <h2 class="section-heading light mb-2">Join Scholar's College Today</h2>
        <p class="mb-0" style="color:rgba(255,255,255,.75)">Enroll your child for the current academic year. We welcome students for ECE, Primary, and Junior High School programs.</p>
      </div>
      <div class="col-lg-4 text-lg-end d-flex flex-column gap-3 align-items-lg-end">
        <a href="admission.php" class="btn-crimson justify-content-center"><i class="fas fa-pen-to-square"></i> Apply for Admission</a>
        <a href="contact.php" class="btn-outline-white justify-content-center"><i class="fas fa-phone"></i> Schedule a Visit</a>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════ FEATURED SECTIONS ════════════════════════ -->
<section class="py-6 bg-off-white" style="padding:5rem 0;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-label">Why Scholar's College</div>
      <h2 class="section-heading">A Solid Foundation for Every Student</h2>
      <div class="gold-divider"></div>
      <p class="section-subtext">We combine rigorous academics with character development to prepare students for life-long success.</p>
    </div>

    <div class="row g-4">
      <div class="col-lg-4 col-md-6 reveal reveal-delay-1">
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-graduation-cap"></i></div>
          <h5>Academic Excellence</h5>
          <p>Strong academic foundations from ECE through Junior High, with dedicated resources and proven teaching methods.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 reveal reveal-delay-2">
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-scale-balanced"></i></div>
          <h5>Discipline & Values</h5>
          <p>We instill integrity, respect, and moral character that students carry throughout their lives and careers.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 reveal reveal-delay-3">
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-user-tie"></i></div>
          <h5>Qualified Educators</h5>
          <p>Passionate and experienced teachers who provide personalized attention and mentorship to every learner.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 reveal reveal-delay-1">
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-crown"></i></div>
          <h5>Leadership Development</h5>
          <p>Classroom learning and extracurricular activities that build confident, decisive leaders of tomorrow.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 reveal reveal-delay-2">
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-shield-halved"></i></div>
          <h5>Safe Environment</h5>
          <p>A structured, secure, and nurturing campus where every child can grow, explore, and thrive safely.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 reveal reveal-delay-3">
        <div class="feature-card">
          <div class="feature-icon"><i class="fas fa-handshake"></i></div>
          <h5>Parent Partnership</h5>
          <p>Open communication and regular progress updates keep families actively involved in student success.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════ PRINCIPAL MESSAGE ═══════════════════════ -->
<section class="py-5" style="padding:5rem 0;">
  <div class="container">
    <div class="row g-0 reveal">
      <div class="col-lg-5">
        <img src="assets/images/principal.jpeg"
             class="principal-img"
             alt="Mr. Ebenezer P. Charlie — Principal"
             onerror="this.src='assets/images/logo.png'">
      </div>
      <div class="col-lg-7 p-4 p-lg-5 d-flex flex-column justify-content-center" style="background:var(--off-white);">
        <div class="section-label">Leadership Message</div>
        <h2 class="section-heading mb-3">A Message from the Principal</h2>
        <blockquote class="principal-quote">
          "At Scholar's College, we believe education is not just about learning facts — it's about nurturing curious minds, fostering creativity, and developing the leaders of tomorrow."
        </blockquote>
        <p style="color:var(--gray);font-size:.95rem;">Our mission is to provide quality education that prepares students for academic success and responsible citizenship, guided by strong moral values and unwavering discipline.</p>
        <div class="mt-3 d-flex align-items-center gap-3">
          <div>
            <strong style="color:var(--navy);display:block">Mr. Ebenezer P. Charlie</strong>
            <small style="color:var(--crimson)">Principal, Scholar's College</small>
          </div>
          <a href="about.php" class="btn-navy ms-auto"><i class="fas fa-arrow-right"></i> Full Message</a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════ ACADEMICS PROGRAMS ══════════════════════ -->
<section class="py-5 bg-off-white" style="padding:5rem 0 4rem;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-label">Our Programs</div>
      <h2 class="section-heading">Academic Divisions</h2>
      <div class="gold-divider"></div>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 reveal reveal-delay-1">
        <div class="program-card">
          <div class="program-card-header">
            <span class="program-number">01</span>
            <div class="program-icon-lg">🎒</div>
          </div>
          <div class="program-card-body">
            <span class="program-tag">Ages 3–5</span>
            <h4>Early Childhood Education</h4>
            <p>Play-based learning that builds social, emotional, and cognitive foundations for lifelong education.</p>
            <a href="academics.php#ece" class="btn-outline-crimson mt-2"><i class="fas fa-arrow-right"></i> Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 reveal reveal-delay-2">
        <div class="program-card">
          <div class="program-card-header">
            <span class="program-number">02</span>
            <div class="program-icon-lg">📚</div>
          </div>
          <div class="program-card-body">
            <span class="program-tag">Grades 1–6</span>
            <h4>Primary School</h4>
            <p>Core literacy, numeracy, science, and social studies that prepare students for higher academic levels.</p>
            <a href="academics.php#primary" class="btn-outline-crimson mt-2"><i class="fas fa-arrow-right"></i> Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 reveal reveal-delay-3">
        <div class="program-card">
          <div class="program-card-header">
            <span class="program-number">03</span>
            <div class="program-icon-lg">🏫</div>
          </div>
          <div class="program-card-body">
            <span class="program-tag">Grades 7–9</span>
            <h4>Junior High School</h4>
            <p>Advanced coursework in STEM, humanities, and leadership that bridges primary and senior high education.</p>
            <a href="academics.php#juniorhigh" class="btn-outline-crimson mt-2"><i class="fas fa-arrow-right"></i> Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-5">
      <a href="academics.php" class="btn-navy"><i class="fas fa-book-open"></i> View Full Academics</a>
    </div>
  </div>
</section>


<!-- ═══════════════════════ NEWS & UPDATES ══════════════════════════ -->
<section class="py-5" style="padding:5rem 0;">
  <div class="container">
    <div class="d-flex justify-content-between align-items-end mb-5 flex-wrap gap-3 reveal">
      <div>
        <div class="section-label">Latest Updates</div>
        <h2 class="section-heading mb-0">News & Announcements</h2>
      </div>
      <a href="blog.php" class="btn-outline-crimson"><i class="fas fa-newspaper"></i> All News</a>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 reveal reveal-delay-1">
        <div class="news-card">
          <div class="news-card-img-wrap">
            <img src="assets/images/campus1.jpeg" class="news-card-img" alt="Admissions" onerror="this.src='https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=600&q=80'">
          </div>
          <div class="news-card-body">
            <span class="news-tag"><i class="fas fa-bullhorn me-1"></i>Announcement</span>
            <h5>Admissions Open for 2026 Academic Year</h5>
            <p>Applications are now being accepted for ECE, Primary, and Junior High School. Limited spaces available.</p>
            <div class="news-meta"><i class="fas fa-calendar-alt me-1"></i>March 1, 2026 &nbsp;·&nbsp; <i class="fas fa-tag me-1"></i>Admissions</div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 reveal reveal-delay-2">
        <div class="news-card">
          <div class="news-card-img-wrap">
            <img src="assets/images/campus2.jpeg" class="news-card-img" alt="Event" onerror="this.src='https://images.unsplash.com/photo-1577896851231-70ef18881754?w=600&q=80'">
          </div>
          <div class="news-card-body">
            <span class="news-tag"><i class="fas fa-trophy me-1"></i>Achievement</span>
            <h5>Annual Academic Excellence Awards Ceremony</h5>
            <p>Scholar's College honors top-performing students across all grade levels for outstanding academic performance.</p>
            <div class="news-meta"><i class="fas fa-calendar-alt me-1"></i>February 20, 2026 &nbsp;·&nbsp; <i class="fas fa-tag me-1"></i>Events</div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 reveal reveal-delay-3">
        <div class="news-card">
          <div class="news-card-img-wrap">
            <img src="assets/images/campus3.jpeg" class="news-card-img" alt="Community" onerror="this.src='https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=600&q=80'">
          </div>
          <div class="news-card-body">
            <span class="news-tag"><i class="fas fa-users me-1"></i>Community</span>
            <h5>Parent-Teacher Conference Scheduled for April</h5>
            <p>Join us for our quarterly Parent-Teacher Conference to review student progress and set academic goals.</p>
            <div class="news-meta"><i class="fas fa-calendar-alt me-1"></i>February 10, 2026 &nbsp;·&nbsp; <i class="fas fa-tag me-1"></i>Community</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════ VISION & MISSION ════════════════════════ -->
<section class="dark-section py-5" style="padding:5rem 0;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-label" style="color:var(--gold)">Our Purpose</div>
      <h2 class="section-heading light">Vision & Mission</h2>
      <div class="gold-divider"></div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 reveal reveal-delay-1">
        <div class="vm-card">
          <h3><i class="fas fa-eye me-2" style="color:var(--crimson)"></i>Our Vision</h3>
          <p>To become a leading educational institution in Liberia known for academic excellence, discipline, innovation, and the development of responsible, competent leaders who serve their communities and nation.</p>
        </div>
      </div>
      <div class="col-md-6 reveal reveal-delay-2">
        <div class="vm-card">
          <h3><i class="fas fa-bullseye me-2" style="color:var(--crimson)"></i>Our Mission</h3>
          <p>To provide quality, holistic education from Early Childhood through Junior High School that equips students with academic knowledge, moral character, leadership skills, and the values needed for responsible citizenship.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════ CORE VALUES ═════════════════════════════ -->
<section class="py-5 bg-off-white" style="padding:5rem 0;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-label">What We Stand For</div>
      <h2 class="section-heading">Our Core Values</h2>
      <div class="gold-divider"></div>
    </div>
    <div class="row g-3 justify-content-center">
      <div class="col-6 col-md-4 col-lg-2 reveal reveal-delay-1">
        <div class="value-card">
          <div class="value-icon">⭐</div>
          <h5>Excellence</h5>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-2 reveal reveal-delay-2">
        <div class="value-card">
          <div class="value-icon">🤝</div>
          <h5>Integrity</h5>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-2 reveal reveal-delay-3">
        <div class="value-card">
          <div class="value-icon">⚖️</div>
          <h5>Discipline</h5>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-2 reveal reveal-delay-1">
        <div class="value-card">
          <div class="value-icon">👑</div>
          <h5>Leadership</h5>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-2 reveal reveal-delay-2">
        <div class="value-card">
          <div class="value-icon">💪</div>
          <h5>Hard Work</h5>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════ TESTIMONIALS ════════════════════════════ -->
<section class="py-5" style="padding:5rem 0;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-label">Voices of Trust</div>
      <h2 class="section-heading">What Parents Say</h2>
      <div class="gold-divider"></div>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6 reveal reveal-delay-1">
        <div class="testimonial-card">
          <div class="stars">★★★★★</div>
          <p>"Scholar's College has transformed my child's attitude towards learning. The discipline and strong academic foundation here are exceptional."</p>
          <h6>Sarah K. Johnson</h6>
          <small>Parent of a Grade 5 Student</small>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 reveal reveal-delay-2">
        <div class="testimonial-card">
          <div class="stars">★★★★★</div>
          <p>"The teachers are absolutely dedicated. My son has grown not just academically but in confidence and character since joining this school."</p>
          <h6>Emmanuel T. Weah</h6>
          <small>Parent of a Junior High Student</small>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 reveal reveal-delay-3">
        <div class="testimonial-card">
          <div class="stars">★★★★★</div>
          <p>"I am so glad we chose Scholar's College. The open communication with parents and the safe environment gives us complete peace of mind."</p>
          <h6>Martha D. Freeman</h6>
          <small>Parent of an ECE Student</small>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════ PHOTO GALLERY PREVIEW ═══════════════════ -->
<section class="py-5 bg-off-white" style="padding:5rem 0;">
  <div class="container">
    <div class="d-flex justify-content-between align-items-end mb-5 flex-wrap gap-3 reveal">
      <div>
        <div class="section-label">Campus Life</div>
        <h2 class="section-heading mb-0">Life at Scholar's College</h2>
      </div>
      <a href="gallary.php" class="btn-outline-crimson"><i class="fas fa-images"></i> View Full Gallery</a>
    </div>
    <div class="row g-2 reveal">
      <div class="col-md-6">
        <div class="gallery-item" style="height:360px;" data-zoom>
          <img src="assets/images/campus1.jpeg" alt="Campus" style="height:100%;width:100%;object-fit:cover;border-radius:8px;" onerror="this.src='https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=800&q=80'">
          <div class="gallery-overlay"><i class="fas fa-expand"></i></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-2 h-100">
          <div class="col-6">
            <div class="gallery-item" style="height:175px;" data-zoom>
              <img src="assets/images/campus2.jpeg" alt="Students" style="height:100%;width:100%;object-fit:cover;border-radius:8px;" onerror="this.src='https://images.unsplash.com/photo-1577896851231-70ef18881754?w=600&q=80'">
              <div class="gallery-overlay"><i class="fas fa-expand"></i></div>
            </div>
          </div>
          <div class="col-6">
            <div class="gallery-item" style="height:175px;" data-zoom>
              <img src="assets/images/campus3.jpeg" alt="Activities" style="height:100%;width:100%;object-fit:cover;border-radius:8px;" onerror="this.src='https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=600&q=80'">
              <div class="gallery-overlay"><i class="fas fa-expand"></i></div>
            </div>
          </div>
          <div class="col-12">
            <div class="gallery-item" style="height:175px;" data-zoom>
              <img src="assets/images/banner1.jpeg" alt="School" style="height:100%;width:100%;object-fit:cover;border-radius:8px;" onerror="this.src='https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=800&q=80'">
              <div class="gallery-overlay"><i class="fas fa-expand"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════ FINAL CTA ════════════════════════════════ -->
<section style="background:linear-gradient(135deg,var(--crimson) 0%,var(--crimson-dk) 100%);padding:5rem 0;">
  <div class="container text-center">
    <div class="reveal">
      <div class="section-label" style="color:rgba(255,255,255,.7)">Ready to Begin?</div>
      <h2 style="font-family:var(--font-serif);font-size:clamp(1.8rem,4vw,3rem);color:var(--white);margin-bottom:1rem;">Start Your Journey at Scholar's College</h2>
      <p style="color:rgba(255,255,255,.8);max-width:520px;margin:0 auto 2rem;">Applications are open. Give your child the solid foundation they deserve for a bright and successful future.</p>
      <div class="d-flex gap-3 justify-content-center flex-wrap">
        <a href="admission.php" class="btn-navy"><i class="fas fa-pen-to-square"></i> Apply Now</a>
        <a href="contact.php" class="btn-outline-white"><i class="fas fa-phone"></i> Contact Us</a>
      </div>
    </div>
  </div>
</section>


<?php include("includes/footer.php"); ?>
