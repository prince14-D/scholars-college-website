<?php
// Detect current page for active link
$currentPage = basename($_SERVER['PHP_SELF']);
function navLink($label, $href, $current) {
    $active = ($current === $href) ? ' active' : '';
    echo "<li class=\"nav-item\"><a class=\"nav-link{$active}\" href=\"{$href}\">{$label}</a></li>";
}
?>

<!-- TOP UTILITY BAR -->
<div class="top-bar d-none d-lg-block">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="top-bar-left">
      <span><i class="fas fa-map-marker-alt me-1"></i>24th Street Sinkor, Monrovia, Liberia</span>
      <span class="top-bar-divider">|</span>
      <span><i class="fas fa-phone me-1"></i>+231 770 000 000</span>
      <span class="top-bar-divider">|</span>
      <span><i class="fas fa-envelope me-1"></i>info@scholarscollege.edu.lr</span>
    </div>
    <div class="top-bar-right">
      <a href="https://wa.me/231770000000" target="_blank"><i class="fab fa-whatsapp me-1"></i>WhatsApp</a>
      <span class="top-bar-divider">|</span>
      <a href="#"><i class="fab fa-facebook-f me-1"></i>Facebook</a>
      <span class="top-bar-divider">|</span>
      <a href="eportal/" class="text-warning"><i class="fas fa-graduation-cap me-1"></i>E-Portal Login</a>
    </div>
  </div>
</div>

<!-- MAIN NAVIGATION -->
<nav id="mainNav" class="navbar navbar-expand-lg">
  <div class="container">

    <!-- Logo & Brand -->
    <a class="navbar-brand navbar-brand-wrapper" href="index.php">
      <img src="assets/images/logo.png" alt="Scholar's College Logo" class="school-logo" onerror="this.style.display='none'">
      <div class="brand-text">
        <span class="brand-name">Scholar's College</span>
        <span class="brand-slogan">Solid Foundation, Solid Future</span>
      </div>
    </a>

    <!-- Mobile Toggle -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
      <i class="fas fa-bars text-white fs-5"></i>
    </button>

    <!-- Nav Links -->
    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <?php navLink('Home',       'index.php',    $currentPage); ?>
        <?php navLink('About',      'about.php',    $currentPage); ?>
        <?php navLink('Academics',  'academics.php',$currentPage); ?>
        <?php navLink('Admissions', 'admission.php',$currentPage); ?>
        <?php navLink('Gallery',    'gallary.php',  $currentPage); ?>
        <?php navLink('Blog',       'blog.php',     $currentPage); ?>
        <?php navLink('Contact',    'contact.php',  $currentPage); ?>
        <li class="nav-item">
          <a class="nav-link nav-apply-btn ms-2" href="admission.php">
            <i class="fas fa-pen-to-square"></i> Apply Now
          </a>
        </li>
      </ul>
    </div>

  </div>
</nav>
