<?php $pageTitle = "Blog & News"; include("includes/header.php"); ?>

<!-- PAGE HERO -->
<section class="page-hero" style="background-image:url('assets/images/banner1.jpeg');">
  <div class="container text-center">
    <span class="hero-eyebrow">Stories & Updates</span>
    <h1>Blog & News</h1>
    <p>Stay informed with the latest announcements, events, and stories from Scholar's College.</p>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Blog & News</li>
      </ol>
    </nav>
  </div>
</section>


<!-- FEATURED POST -->
<section class="py-5" style="padding:5rem 0;">
  <div class="container">
    <div class="section-label">Featured Story</div>
    <div class="row g-0 reveal" style="border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-md);background:var(--white);">
      <div class="col-lg-6">
        <img src="assets/images/banner1.jpeg" alt="Featured" style="width:100%;height:100%;min-height:340px;object-fit:cover;"
             onerror="this.src='https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=900&q=80'">
      </div>
      <div class="col-lg-6 p-4 p-lg-5 d-flex flex-column justify-content-center">
        <span class="blog-tag"><i class="fas fa-star me-1"></i>Featured</span>
        <h2 style="color:var(--navy);font-family:var(--font-serif);margin-bottom:.8rem;">Admissions Now Open for the 2026 Academic Year</h2>
        <p style="color:var(--gray)">Scholar's College is proud to announce that applications are now open for all three academic programs: ECE, Primary School, and Junior High School. We invite families across Monrovia to be part of our growing school community dedicated to excellence, discipline, and moral character.</p>
        <div class="blog-meta mb-3"><i class="fas fa-calendar me-1"></i>March 1, 2026 &nbsp;&nbsp;<i class="fas fa-user me-1"></i>Admin</div>
        <a href="admission.php" class="btn-crimson" style="width:fit-content"><i class="fas fa-arrow-right"></i> Apply Now</a>
      </div>
    </div>
  </div>
</section>


<!-- BLOG GRID -->
<section class="py-5 bg-off-white" style="padding:4rem 0 5rem;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-label">All Posts</div>
      <h2 class="section-heading">Latest News & Stories</h2>
      <div class="gold-divider"></div>
    </div>

    <div class="row g-4">
      <?php
      $posts = [
        ['assets/images/banner.jpeg','Announcement','Annual Academic Excellence Awards Ceremony','Scholar\'s College honors top-performing students from all grades for outstanding academic performance and positive character.','February 20, 2026','Principal\'s Office'],
        ['assets/images/banner1.jpeg','Events','Parent-Teacher Conference — April 2026','Join us for our quarterly Parent-Teacher Conference to review student academic progress and set goals for the final term.','February 10, 2026','Admin'],
        ['assets/images/banner1.jpeg','Community','Scholar\'s College Hosts Career Day for Junior High Students','Our Junior High students were inspired by professionals from law, medicine, education, and business at this year\'s Career Day event.','January 28, 2026','Staff Reporter'],
        ['assets/images/activity1.jpeg','Achievement','Our Students Excel in Inter-School Academic Competition','Scholar\'s College students bring home top prizes in the annual Monrovia Inter-School Academic Olympiad, showcasing the power of a solid foundation.','January 15, 2026','Principal\'s Office'],
        ['assets/images/activity2.jpeg','Academics','New STEM Resources Added to the Library','We are excited to announce the addition of new science, technology, engineering, and math resources to our school library.','January 5, 2026','Admin'],
        ['assets/images/banner1.jpeg','Community','Christmas Carol Day Brings Joy to Campus','Students, staff, and parents gathered for our annual Christmas Carol Day, celebrating the holiday season with songs, performances, and community spirit.','December 18, 2025','Staff Reporter'],
      ];
      foreach ($posts as $i => $p): $d = ($i % 3) + 1; ?>
      <div class="col-lg-4 col-md-6 reveal reveal-delay-<?php echo $d; ?>">
        <div class="blog-card">
          <div class="blog-card-img-wrap">
            <img src="<?php echo $p[0]; ?>" class="blog-card-img" alt="<?php echo $p[2]; ?>"
                 onerror="this.src='https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=600&q=80'">
          </div>
          <div class="blog-card-body">
            <span class="blog-tag"><?php echo $p[1]; ?></span>
            <h5><?php echo $p[2]; ?></h5>
            <p><?php echo $p[3]; ?></p>
            <div class="blog-meta">
              <i class="fas fa-calendar me-1"></i><?php echo $p[4]; ?>
              &nbsp;·&nbsp;
              <i class="fas fa-user me-1"></i><?php echo $p[5]; ?>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- NEWSLETTER CTA -->
<section class="cta-strip">
  <div class="container">
    <div class="row align-items-center gy-4 reveal">
      <div class="col-lg-7">
        <div class="section-label" style="color:var(--gold)">Stay Connected</div>
        <h2 class="section-heading light mb-2">Subscribe to School Updates</h2>
        <p style="color:rgba(255,255,255,.75);margin:0">Get the latest news, event announcements, and academic updates from Scholar's College directly to your phone or email.</p>
      </div>
      <div class="col-lg-5">
        <form class="d-flex gap-2" onsubmit="event.preventDefault();this.innerHTML='<div class=\'text-warning fw-bold\'><i class=\'fas fa-check me-2\'></i>You\'ve subscribed!</div>'">
          <input type="email" class="form-control" placeholder="Enter your email address" required style="border:1px solid rgba(255,255,255,.3);background:rgba(255,255,255,.1);color:var(--white);">
          <button type="submit" class="btn-crimson flex-shrink-0"><i class="fas fa-bell"></i> Subscribe</button>
        </form>
      </div>
    </div>
  </div>
</section>


<?php include("includes/footer.php"); ?>
