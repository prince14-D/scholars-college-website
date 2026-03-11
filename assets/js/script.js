/* ============================================================
   SCHOLAR'S COLLEGE — MAIN JAVASCRIPT
   ============================================================ */

document.addEventListener('DOMContentLoaded', function () {

  /* ── 1. NAV SCROLL EFFECT ── */
  const nav = document.getElementById('mainNav');
  if (nav) {
    window.addEventListener('scroll', () => {
      nav.classList.toggle('nav-scrolled', window.scrollY > 60);
    });
  }

  /* ── 2. BACK TO TOP BUTTON ── */
  const btn = document.getElementById('backToTop');
  if (btn) {
    window.addEventListener('scroll', () => {
      btn.classList.toggle('show', window.scrollY > 400);
    });
    btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  }

  /* ── 3. SCROLL REVEAL ANIMATION ── */
  const reveals = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

  reveals.forEach(el => observer.observe(el));

  /* ── 4. COUNTER ANIMATION ── */
  function animateCounter(el, target, duration = 2000) {
    let start = 0;
    const step = target / (duration / 16);
    const timer = setInterval(() => {
      start += step;
      if (start >= target) {
        el.textContent = Number.isInteger(target) ? target : target.toFixed(0);
        clearInterval(timer);
      } else {
        el.textContent = Math.floor(start);
      }
    }, 16);
  }

  const counters = document.querySelectorAll('[data-count]');
  if (counters.length) {
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          animateCounter(el, parseInt(el.dataset.count, 10));
          counterObserver.unobserve(el);
        }
      });
    }, { threshold: 0.5 });
    counters.forEach(c => counterObserver.observe(c));
  }

  /* ── 5. ACTIVE NAV LINK ── */
  const path = window.location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('#navbarMain .nav-link').forEach(link => {
    const href = link.getAttribute('href');
    if (href === path) link.classList.add('active');
  });

  /* ── 6. SMOOTH SCROLL FOR ANCHOR LINKS ── */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        const offset = 80;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

  /* ── 7. FORM SUBMISSION FEEDBACK ── */
  document.querySelectorAll('form[data-feedback]').forEach(form => {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      const btn = form.querySelector('[type="submit"]');
      const original = btn.innerHTML;
      btn.disabled = true;
      btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending…';
      setTimeout(() => {
        btn.innerHTML = '<i class="fas fa-check me-2"></i>Sent!';
        btn.classList.remove('btn-crimson');
        btn.classList.add('btn-success', 'text-white');
        setTimeout(() => {
          btn.disabled = false;
          btn.innerHTML = original;
          btn.classList.add('btn-crimson');
          btn.classList.remove('btn-success');
          form.reset();
        }, 3000);
      }, 1500);
    });
  });

  /* ── 8. GALLERY LIGHTBOX (simple) ── */
  const galleryItems = document.querySelectorAll('.gallery-item[data-zoom]');
  if (galleryItems.length) {
    // Create modal
    const modal = document.createElement('div');
    modal.id = 'galleryModal';
    modal.style.cssText = 'display:none;position:fixed;inset:0;background:rgba(0,0,0,.9);z-index:9999;align-items:center;justify-content:center;cursor:zoom-out;';
    modal.innerHTML = '<img id="galleryModalImg" style="max-width:90vw;max-height:90vh;border-radius:8px;box-shadow:0 20px 60px rgba(0,0,0,.5);">';
    document.body.appendChild(modal);

    galleryItems.forEach(item => {
      item.addEventListener('click', () => {
        const src = item.querySelector('img')?.src;
        if (src) {
          document.getElementById('galleryModalImg').src = src;
          modal.style.display = 'flex';
          document.body.style.overflow = 'hidden';
        }
      });
    });
    modal.addEventListener('click', () => {
      modal.style.display = 'none';
      document.body.style.overflow = '';
    });
    document.addEventListener('keydown', e => {
      if (e.key === 'Escape') { modal.style.display = 'none'; document.body.style.overflow = ''; }
    });
  }

});
