<?php $pageTitle = "Gallery"; include("includes/header.php"); ?>

<!-- PAGE HERO -->
<section class="page-hero" style="background-image:url('assets/images/banner.jpeg');">
  <div class="container text-center">
    <span class="hero-eyebrow">Campus Life</span>
    <h1>Photo Gallery</h1>
    <p>A glimpse into the vibrant life, activities, and learning environment at Scholar's College.</p>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Gallery</li>
      </ol>
    </nav>
  </div>
</section>


<!-- GALLERY FILTER -->
<section class="py-4" style="background:var(--off-white);border-bottom:1px solid var(--border);">
  <div class="container text-center reveal">
    <div class="d-flex gap-2 justify-content-center flex-wrap" id="galleryFilter">
      <button class="btn-crimson gallery-filter-btn active" data-category="all">All Photos</button>
      <button class="btn-outline-crimson gallery-filter-btn" data-category="campus">Campus</button>
      <button class="btn-outline-crimson gallery-filter-btn" data-category="students">Students</button>
      <button class="btn-outline-crimson gallery-filter-btn" data-category="events">Events</button>
      <button class="btn-outline-crimson gallery-filter-btn" data-category="academics">Academics</button>
    </div>
  </div>
</section>


<!-- PHOTO GRID -->
<section class="py-5" style="padding:4rem 0 5rem;">
  <div class="container">
    <div class="row g-3" id="galleryGrid">

      <?php
      $photos = [
        ['assets/images/activity1.jpeg','school campus','campus','School Campus'],
        ['assets/images/activity2.jpeg','students learning','students','Students Learning'],
        ['assets/images/activity3.jpeg','school activities','events','School Activities'],
        ['assets/images/banner.jpeg','school building','campus','School Building'],
        ['assets/images/banner1.jpeg','academic classes','academics','Academic Classes'],
        ['assets/images/banner1.jpeg','school life','students','School Life'],
        ['assets/images/activity1.jpeg','graduation ceremony','events','Graduation Ceremony'],
        ['assets/images/activity2.jpeg','science class','academics','Science Class'],
        ['assets/images/activity3.jpeg','sports day','events','Sports Day'],
        ['assets/images/banner.jpeg','library reading','academics','Library Reading'],
        ['assets/images/banner1.jpeg','art class','students','Art Class'],
        ['assets/images/banner1.jpeg','school assembly','campus','School Assembly'],
      ];

      $fallbacks = [
        'https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=700&q=80',
        'https://images.unsplash.com/photo-1577896851231-70ef18881754?w=700&q=80',
        'https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=700&q=80',
        'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=700&q=80',
        'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=700&q=80',
        'https://images.unsplash.com/photo-1527482797697-8795b05a13fe?w=700&q=80',
      ];

      foreach ($photos as $i => $p):
        $fb = $fallbacks[$i % count($fallbacks)];
        $d = ($i % 4) + 1;
      ?>
      <div class="col-6 col-md-4 col-lg-3 gallery-item-wrap reveal reveal-delay-<?php echo $d; ?>" data-category="<?php echo $p[2]; ?>">
        <div class="gallery-item" style="height:220px;" data-zoom>
          <img src="<?php echo $p[0]; ?>" alt="<?php echo $p[1]; ?>"
               onerror="this.src='<?php echo $fb; ?>'"
               style="height:220px;width:100%;object-fit:cover;">
          <div class="gallery-overlay">
            <div class="text-center">
              <i class="fas fa-expand-alt d-block mb-1"></i>
              <small><?php echo $p[3]; ?></small>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>


<!-- GALLERY FILTER JS + LIGHTBOX -->
<script>
document.querySelectorAll('.gallery-filter-btn').forEach(btn => {
  btn.addEventListener('click', function() {
    document.querySelectorAll('.gallery-filter-btn').forEach(b => {
      b.className = 'btn-outline-crimson gallery-filter-btn';
    });
    this.className = 'btn-crimson gallery-filter-btn active';
    const cat = this.dataset.category;
    document.querySelectorAll('.gallery-item-wrap').forEach(item => {
      if (cat === 'all' || item.dataset.category === cat) {
        item.style.display = '';
      } else {
        item.style.display = 'none';
      }
    });
  });
});
</script>


<!-- CTA -->
<section class="cta-strip">
  <div class="container text-center reveal">
    <div class="section-label" style="color:var(--gold)">Be Part of Our Story</div>
    <h2 class="section-heading light mb-3">Enroll Your Child at Scholar's College</h2>
    <p style="color:rgba(255,255,255,.75);max-width:500px;margin:0 auto 2rem">Join our growing school community and give your child a solid foundation for a bright future.</p>
    <div class="d-flex gap-3 justify-content-center flex-wrap">
      <a href="admission.php" class="btn-navy"><i class="fas fa-pen-to-square"></i> Apply for Admission</a>
      <a href="contact.php" class="btn-outline-white"><i class="fas fa-phone"></i> Contact Us</a>
    </div>
  </div>
</section>


<?php include("includes/footer.php"); ?>
