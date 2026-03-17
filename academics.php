<?php $pageTitle = "Academics"; include("includes/header.php"); ?>

<!-- PAGE HERO -->
<section class="page-hero" style="background-image:url('assets/images/banner.jpeg');">
  <div class="container text-center">
    <span class="hero-eyebrow">Curriculum & Programs</span>
    <h1>Academics at Scholar's College</h1>
    <p>Rigorous, inspiring education from Early Childhood through Junior High School.</p>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Academics</li>
      </ol>
    </nav>
  </div>
</section>


<!-- ACADEMIC OVERVIEW -->
<section class="py-5" style="padding:5rem 0;">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 reveal">
        <div class="section-label">Our Approach</div>
        <h2 class="section-heading">Academic Excellence at Every Level</h2>
        <div class="gold-divider left"></div>
        <p>At Scholar's College, our academic programs are designed to challenge and inspire students from the earliest years of education through Junior High School. We combine rigorous standards with supportive, personalized teaching to ensure every student achieves their full potential.</p>
        <p>Our curriculum emphasizes <strong>literacy, numeracy, science, social studies,</strong> and <strong>character education</strong> — equipping students with the knowledge and values they need to succeed in higher academic pursuits and in life.</p>
      </div>
      <div class="col-lg-6 reveal reveal-delay-2">
        <div class="row g-3">
          <div class="col-6">
            <div class="feature-card text-center">
              <div class="feature-icon"><i class="fas fa-book"></i></div>
              <h6>Core Subjects</h6>
              <p style="font-size:.82rem;">Math, Science, English, Social Studies</p>
            </div>
          </div>
          <div class="col-6">
            <div class="feature-card text-center">
              <div class="feature-icon"><i class="fas fa-palette"></i></div>
              <h6>Arts & Culture</h6>
              <p style="font-size:.82rem;">Music, Art & Cultural Activities</p>
            </div>
          </div>
          <div class="col-6">
            <div class="feature-card text-center">
              <div class="feature-icon"><i class="fas fa-running"></i></div>
              <h6>Physical Education</h6>
              <p style="font-size:.82rem;">Sports, Health & Wellness</p>
            </div>
          </div>
          <div class="col-6">
            <div class="feature-card text-center">
              <div class="feature-icon"><i class="fas fa-users"></i></div>
              <h6>Character Ed</h6>
              <p style="font-size:.82rem;">Values, Leadership & Integrity</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- PROGRAMS -->
<section id="ece" class="py-5 bg-off-white" style="padding:5rem 0;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-label">Programs Offered</div>
      <h2 class="section-heading">Our Three Academic Divisions</h2>
      <div class="gold-divider"></div>
    </div>

    <!-- ECE -->
    <div id="ece" class="row align-items-center g-5 mb-5 pb-5" style="border-bottom:1px solid var(--border)">
      <div class="col-lg-6 reveal">
        <span class="program-tag">Ages 3–5</span>
        <h2 class="section-heading mt-2">Early Childhood Education (ECE)</h2>
        <p>Our ECE program provides a nurturing, play-based environment where young learners develop foundational social, emotional, cognitive, and physical skills essential for all future learning.</p>
        <ul style="list-style:none;padding:0;">
          <?php foreach(['Language & Communication','Numbers & Pre-Math','Creative Arts & Play','Social Skills & Character','Physical Development'] as $item): ?>
          <li class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle text-crimson" style="color:var(--crimson)"></i><span><?php echo $item; ?></span></li>
          <?php endforeach; ?>
        </ul>
        <a href="admission.php" class="btn-crimson mt-3"><i class="fas fa-pen-to-square"></i> Apply for ECE</a>
      </div>
      <div class="col-lg-6 reveal reveal-delay-2">
        <img src="assets/images/campus1.jpeg" class="img-fluid rounded shadow" alt="ECE" onerror="this.src='https://images.unsplash.com/photo-1527482797697-8795b05a13fe?w=800&q=80'">
      </div>
    </div>

    <!-- Primary -->
    <div id="primary" class="row align-items-center g-5 mb-5 pb-5 flex-lg-row-reverse" style="border-bottom:1px solid var(--border);">
      <div class="col-lg-6 reveal">
        <span class="program-tag">Grades 1–6</span>
        <h2 class="section-heading mt-2">Primary School</h2>
        <p>Our Primary program delivers a strong, structured academic foundation across all core subjects. Students develop critical thinking, reading fluency, mathematical reasoning, and a genuine love of learning.</p>
        <ul style="list-style:none;padding:0;">
          <?php foreach(['English Language & Literature','Mathematics','Science & Technology','Social Studies & History','Religious & Moral Education','Physical Education & Health'] as $item): ?>
          <li class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:var(--crimson)"></i><span><?php echo $item; ?></span></li>
          <?php endforeach; ?>
        </ul>
        <a href="admission.php" class="btn-crimson mt-3"><i class="fas fa-pen-to-square"></i> Apply for Primary</a>
      </div>
      <div class="col-lg-6 reveal reveal-delay-2">
        <img src="assets/images/campus2.jpeg" class="img-fluid rounded shadow" alt="Primary School" onerror="this.src='https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800&q=80'">
      </div>
    </div>

    <!-- Junior High -->
    <div id="juniorhigh" class="row align-items-center g-5">
      <div class="col-lg-6 reveal">
        <span class="program-tag">Grades 7–9</span>
        <h2 class="section-heading mt-2">Junior High School</h2>
        <p>Our Junior High program prepares students for Senior High and beyond through advanced coursework, leadership development, and critical thinking across all disciplines.</p>
        <ul style="list-style:none;padding:0;">
          <?php foreach(['Advanced English & Literature','Algebra & Pre-Calculus','Biology, Chemistry & Physics','West African History & Geography','Civics & Government','Information Technology Fundamentals','Leadership & Extracurricular Activities'] as $item): ?>
          <li class="d-flex align-items-center gap-2 mb-2"><i class="fas fa-check-circle" style="color:var(--crimson)"></i><span><?php echo $item; ?></span></li>
          <?php endforeach; ?>
        </ul>
        <a href="admission.php" class="btn-crimson mt-3"><i class="fas fa-pen-to-square"></i> Apply for Junior High</a>
      </div>
      <div class="col-lg-6 reveal reveal-delay-2">
        <img src="assets/images/campus3.jpeg" class="img-fluid rounded shadow" alt="Junior High" onerror="this.src='https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=800&q=80'">
      </div>
    </div>

  </div>
</section>


<!-- ACADEMIC CALENDAR -->
<section class="py-5" style="padding:5rem 0;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-label">Planning Ahead</div>
      <h2 class="section-heading">2025–2026 Academic Calendar</h2>
      <div class="gold-divider"></div>
    </div>
    <div class="row g-4">
      <?php
      $terms = [
        ['1st Term','September – December 2025','Academic introduction, mid-term assessments, end-of-term exams.','fas fa-seedling'],
        ['2nd Term','January – March 2026','Core curriculum, Parent-Teacher Conference, inter-school activities.','fas fa-sun'],
        ['3rd Term','April – July 2026','Final exams, graduation ceremonies, academic year wrap-up.','fas fa-graduation-cap'],
      ];
      foreach ($terms as $i => $t): $d = $i + 1; ?>
      <div class="col-md-4 reveal reveal-delay-<?php echo $d; ?>">
        <div class="step-card">
          <div class="step-number"><?php echo $d; ?></div>
          <h5 style="color:var(--navy);margin-bottom:.3rem;"><?php echo $t[0]; ?></h5>
          <small style="color:var(--crimson);font-weight:600;display:block;margin-bottom:.7rem;"><i class="fas fa-calendar me-1"></i><?php echo $t[1]; ?></small>
          <p style="font-size:.88rem;color:var(--gray);margin:0;"><?php echo $t[2]; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- CTA -->
<section class="cta-strip">
  <div class="container">
    <div class="row align-items-center gy-4 reveal">
      <div class="col-lg-8">
        <div class="section-label" style="color:var(--gold)">Ready to Enroll?</div>
        <h2 class="section-heading light mb-2">Start Your Academic Journey</h2>
        <p style="color:rgba(255,255,255,.75);margin:0">Apply for admission today and be part of a school dedicated to excellence, discipline, and leadership.</p>
      </div>
      <div class="col-lg-4 text-lg-end">
        <a href="admission.php" class="btn-crimson"><i class="fas fa-pen-to-square"></i> Apply for Admission</a>
      </div>
    </div>
  </div>
</section>


<?php include("includes/footer.php"); ?>
