<?php $pageTitle = "Contact Us"; include("includes/header.php"); ?>

<!-- PAGE HERO -->
<section class="page-hero" style="background-image:url('assets/images/banner2.jpeg');">
  <div class="container text-center">
    <span class="hero-eyebrow">We're Here to Help</span>
    <h1>Contact Us</h1>
    <p>Reach out to Scholar's College for admissions, school visits, or any information you need.</p>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>
    </nav>
  </div>
</section>


<!-- CONTACT SECTION -->
<section class="py-5" style="padding:5rem 0;">
  <div class="container">
    <div class="row g-4">

      <!-- Contact Info Card -->
      <div class="col-lg-5 reveal">
        <div class="contact-info-card">
          <div class="section-label" style="color:var(--gold)">Get in Touch</div>
          <h3>Contact Information</h3>

          <div class="contact-info-item">
            <div class="contact-info-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div class="contact-info-text">
              <strong>School Address</strong>
              <p>24th Street Sinkor Sea Side<br>Monrovia, Liberia</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon"><i class="fas fa-phone"></i></div>
            <div class="contact-info-text">
              <strong>Phone / WhatsApp</strong>
              <p><a href="tel:+231770000000" style="color:rgba(255,255,255,.7)">+231 770 000 000</a></p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon"><i class="fas fa-envelope"></i></div>
            <div class="contact-info-text">
              <strong>Email Address</strong>
              <p><a href="mailto:info@scholarscollege.edu.lr" style="color:rgba(255,255,255,.7)">info@scholarscollege.edu.lr</a></p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon"><i class="fas fa-clock"></i></div>
            <div class="contact-info-text">
              <strong>Office Hours</strong>
              <p>Monday – Friday: 8:00 AM – 2:00 PM<br>Saturday: 9:00 AM – 12:00 PM</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon"><i class="fas fa-graduation-cap"></i></div>
            <div class="contact-info-text">
              <strong>Academic Programs</strong>
              <p>ECE · Primary School · Junior High</p>
            </div>
          </div>

          <!-- Social Links -->
          <div class="mt-4">
            <p style="font-size:.82rem;color:rgba(255,255,255,.5);margin-bottom:.8rem;">FOLLOW US ON SOCIAL MEDIA</p>
            <div class="footer-social">
              <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social-btn"><i class="fab fa-x-twitter"></i></a>
              <a href="https://wa.me/231770000000" class="social-btn"><i class="fab fa-whatsapp"></i></a>
              <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-7 reveal reveal-delay-2">
        <div class="contact-form-card">
          <div class="section-label">Send a Message</div>
          <h3 style="color:var(--navy);margin-bottom:1.5rem;">How Can We Help You?</h3>

          <form data-feedback>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Full Name *</label>
                <input type="text" class="form-control" placeholder="Your full name" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Phone / WhatsApp *</label>
                <input type="tel" class="form-control" placeholder="+231 770 000 000" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="your@email.com">
              </div>
              <div class="col-md-6">
                <label class="form-label">Subject *</label>
                <select class="form-select" required>
                  <option value="">Select Subject</option>
                  <option>Admissions Inquiry</option>
                  <option>Academic Information</option>
                  <option>Schedule a School Visit</option>
                  <option>Fee & Payment Inquiry</option>
                  <option>General Question</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label">Message *</label>
                <textarea class="form-control" rows="5" placeholder="Write your message here…" required></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn-crimson"><i class="fas fa-paper-plane"></i> Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- FAQ -->
<section class="py-5 bg-off-white" style="padding:5rem 0;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-label">Quick Answers</div>
      <h2 class="section-heading">Frequently Asked Questions</h2>
      <div class="gold-divider"></div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8 reveal">
        <div class="accordion" id="faqAccordion">
          <?php
          $faqs = [
            ['When are admissions open?','Admissions are open year-round, with the main enrollment period running from January to September each year. We recommend applying early as spaces are limited.'],
            ['What documents do I need for admission?','You will need a birth certificate, latest school report card, two passport-sized photos, and parent/guardian contact information.'],
            ['What are the school hours?','School operates Monday through Friday from 8:00 AM to 2:00 PM.'],
            ['How can I schedule a school visit?','You can call us, send a WhatsApp message, or fill out the contact form above. We welcome walk-in visits during school hours.'],
            ['Does Scholar\'s College have an E-Portal?','Yes! Parents and students can access academic information, grades, and announcements through our E-Portal at eportal/.'],
            ['What programs does the school offer?','We offer three programs: Early Childhood Education (ECE) for ages 3–5, Primary School (Grades 1–6), and Junior High School (Grades 7–9).'],
          ];
          foreach ($faqs as $i => $faq): ?>
          <div class="accordion-item border mb-2 rounded" style="border-radius:var(--radius) !important;overflow:hidden;">
            <h2 class="accordion-header">
              <button class="accordion-button <?php echo $i > 0 ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?php echo $i; ?>">
                <i class="fas fa-circle-question me-2" style="color:var(--crimson)"></i><?php echo $faq[0]; ?>
              </button>
            </h2>
            <div id="faq<?php echo $i; ?>" class="accordion-collapse collapse <?php echo $i === 0 ? 'show' : ''; ?>" data-bs-parent="#faqAccordion">
              <div class="accordion-body" style="color:var(--gray);"><?php echo $faq[1]; ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- MAP -->
<section class="py-5" style="padding:5rem 0;">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <div class="section-label">Find Us</div>
      <h2 class="section-heading">Our Location</h2>
      <div class="gold-divider"></div>
      <p style="color:var(--gray)">24th Street Sinkor Sea Side, Monrovia, Liberia</p>
    </div>
    <div class="map-container reveal">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.6!2d-10.785!3d6.295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTcnNDIuMCJOIDEwwrA0NycwNi4wIlc!5e0!3m2!1sen!2slr!4v1234567890"
        allowfullscreen loading="lazy">
      </iframe>
    </div>
  </div>
</section>


<?php include("includes/footer.php"); ?>
