<?php $pageTitle = "About Us"; include("includes/header.php"); ?>

<!-- PAGE HERO -->
<section class="page-hero" style="background-image:url('assets/images/banner.jpeg');">
  <div class="container text-center">
    <span class="hero-eyebrow">Est. July 27, 2023</span>
    <h1>About Scholar's College</h1>
    <p>Building Character. Inspiring Excellence. Shaping the Future.</p>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">About</li>
      </ol>
    </nav>
  </div>
</section>


<!-- WHO WE ARE -->
<section class="py-5" style="padding:5rem 0;">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 reveal">
        <div class="section-label">Our Story</div>
        <h2 class="section-heading">Who We Are</h2>
        <div class="gold-divider left"></div>
        <p>Scholar's College Solid Foundation School System, located at 24th Street Sinkor Sea Side, Monrovia, Liberia, is a structured academic institution committed to excellence in education and moral discipline.</p>
        <p>Founded on <strong>July 27, 2023</strong> by <strong>Ebenezer P. Charlie</strong>, <strong>Patience N. Dolo</strong>, and <strong>Arthur F. Folbay</strong>, the institution provides holistic education from Early Childhood Education through Junior High School — preparing students academically, socially, and morally.</p>
        <p>Our motto, <em>"Solid Foundation, Solid Future,"</em> defines our lifelong commitment to shaping disciplined, competent future leaders who serve Liberia and the world.</p>
        <div class="d-flex gap-3 mt-4 flex-wrap">
          <a href="admission.php" class="btn-crimson"><i class="fas fa-pen-to-square"></i> Apply Today</a>
          <a href="contact.php" class="btn-outline-crimson"><i class="fas fa-phone"></i> Contact Us</a>
        </div>
      </div>
      <div class="col-lg-6 reveal reveal-delay-2">
        <img src="assets/images/banner1.jpeg" alt="School" class="img-fluid rounded shadow"
             onerror="this.src='https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800&q=80'">
      </div>
    </div>
  </div>
</section>


<!-- SCHOOL HIGHLIGHTS -->
<section class="py-5 bg-off-white" style="padding:4rem 0;">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4 reveal reveal-delay-1">
        <div class="feature-card text-center">
          <div class="feature-icon"><i class="fas fa-clock"></i></div>
          <h5>School Hours</h5>
          <p>Monday – Friday<br><strong>8:00 AM – 2:00 PM</strong></p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-2">
        <div class="feature-card text-center">
          <div class="feature-icon"><i class="fas fa-layer-group"></i></div>
          <h5>Academic Levels</h5>
          <p>ECE, Primary School &<br><strong>Junior High School</strong></p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-3">
        <div class="feature-card text-center">
          <div class="feature-icon"><i class="fas fa-map-marker-alt"></i></div>
          <h5>Location</h5>
          <p>24th Street Sinkor Sea Side,<br><strong>Monrovia, Liberia</strong></p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- VISION & MISSION -->
<section class="dark-section py-5" style="padding:5rem 0;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-label" style="color:var(--gold)">Our Guiding Principles</div>
      <h2 class="section-heading light">Vision & Mission</h2>
      <div class="gold-divider"></div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 reveal reveal-delay-1">
        <div class="vm-card">
          <h3><i class="fas fa-eye me-2" style="color:var(--crimson)"></i>Our Vision</h3>
          <p>To become a leading educational institution in Liberia known for academic excellence, discipline, innovation, and the development of responsible, competent leaders who serve their communities and nation with integrity.</p>
        </div>
      </div>
      <div class="col-md-6 reveal reveal-delay-2">
        <div class="vm-card">
          <h3><i class="fas fa-bullseye me-2" style="color:var(--crimson)"></i>Our Mission</h3>
          <p>To provide quality, holistic education from Early Childhood through Junior High School that equips students with academic knowledge, moral character, leadership skills, and the values needed for responsible citizenship in Liberia and beyond.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- CORE VALUES -->
<section class="py-5 bg-off-white" style="padding:5rem 0;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-label">What We Believe</div>
      <h2 class="section-heading">Core Values</h2>
      <div class="gold-divider"></div>
    </div>
    <div class="row g-4">
      <?php
      $values = [
        ['⭐','Excellence','We pursue the highest standards in everything we do — academics, character, and service.'],
        ['🤝','Integrity','We act with honesty, transparency, and strong moral principles in all situations.'],
        ['⚖️','Discipline','We maintain order, respect, and self-control as foundations of lifelong success.'],
        ['👑','Leadership','We develop confident, decisive leaders ready to serve and inspire others.'],
        ['💪','Hard Work','We believe persistent effort and dedication are the keys to achieving any goal.'],
        ['🌍','Responsibility','We raise citizens who are accountable to their families, school, and nation.'],
      ];
      foreach ($values as $i => $v): $d = ($i % 3) + 1; ?>
      <div class="col-md-6 col-lg-4 reveal reveal-delay-<?php echo $d; ?>">
        <div class="feature-card text-center">
          <div style="font-size:2.2rem;margin-bottom:.8rem;"><?php echo $v[0]; ?></div>
          <h5><?php echo $v[1]; ?></h5>
          <p><?php echo $v[2]; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- LEADERSHIP -->
<section class="py-5" style="padding:5rem 0;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-label">Our Leaders</div>
      <h2 class="section-heading">School Leadership</h2>
      <div class="gold-divider"></div>
    </div>
    <div class="row justify-content-center g-4">
      <?php
      $leaders = [
        ['assets/images/principal.jpeg','Mr. Ebenezer P. Charlie','Principal & Co-Founder','Leading Scholar\'s College with a passion for academic excellence and community development.'],
        ['assets/images/principal.jpeg','Ms. Patience N. Dolo','Co-Founder & Director','Committed to building a school that nurtures moral character and academic achievement.'],
        ['assets/images/principal.jpeg','Mr. Arthur F. Folbay','Co-Founder & Administrator','Focused on ensuring safe, structured, and productive learning environments for all students.'],
      ];
      foreach ($leaders as $i => $l): $d = $i + 1; ?>
      <div class="col-lg-4 col-md-6 reveal reveal-delay-<?php echo $d; ?>">
        <div class="text-center">
          <div style="width:150px;height:150px;border-radius:50%;overflow:hidden;margin:0 auto 1.2rem;border:4px solid var(--gold);box-shadow:0 8px 25px rgba(0,0,0,.15);">
            <img src="<?php echo $l[0]; ?>" alt="<?php echo $l[1]; ?>"
                 style="width:100%;height:100%;object-fit:cover;"
                 onerror="this.src='https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&q=80'">
          </div>
          <h5 style="color:var(--navy);margin-bottom:.2rem;"><?php echo $l[1]; ?></h5>
          <small style="color:var(--crimson);font-weight:600;display:block;margin-bottom:.6rem;"><?php echo $l[2]; ?></small>
          <p style="font-size:.88rem;color:var(--gray);"><?php echo $l[3]; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- PRINCIPAL FULL MESSAGE -->
<section class="py-5" style="background:var(--off-white);padding:5rem 0;">
  <div class="container">
    <div class="row g-0 reveal" style="border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-md);">
      <div class="col-lg-4">
        <img src="assets/images/principal.jpeg" alt="Principal"
             style="width:100%;height:100%;min-height:380px;object-fit:cover;"
             onerror="this.src='https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600&q=80'">
      </div>
      <div class="col-lg-8 p-4 p-lg-5" style="background:var(--white);">
        <div class="section-label">Leadership Message</div>
        <h2 class="section-heading mb-3">Principal's Full Message</h2>
        <blockquote class="principal-quote">"At Scholar's College, education is not just about learning facts — it is about nurturing curious minds, fostering creativity, and developing the leaders of tomorrow."</blockquote>
        <p>Dear Parents and Students,</p>
        <p>Welcome to Scholar's College Solid Foundation School System. Our institution is dedicated to providing a well-rounded educational experience that prepares every student for success in an increasingly complex world.</p>
        <p>We offer a strong academic foundation from ECE to Junior High, taught by passionate educators who provide personalized attention. We embrace values-based education — ensuring students are equipped with integrity, discipline, and respect.</p>
        <p>We invite you to explore our programs, visit our campus, and discover why Scholar's College is the right choice for your child's future.</p>
        <div class="mt-4 d-flex align-items-center gap-3">
          <div>
            <strong style="color:var(--navy)">Mr. Ebenezer P. Charlie</strong>
            <br><small style="color:var(--crimson)">Principal, Scholar's College</small>
          </div>
          <a href="admission.php" class="btn-crimson ms-auto"><i class="fas fa-pen-to-square"></i> Apply Now</a>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include("includes/footer.php"); ?>
