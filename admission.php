<?php $pageTitle = "Admissions"; include("includes/header.php"); ?>

<!-- PAGE HERO -->
<section class="page-hero" style="background-image:url('assets/images/banner1.jpeg');">
  <div class="container text-center">
    <span class="hero-eyebrow">Enroll Your Child Today</span>
    <h1>Admissions</h1>
    <p>Applications are open for ECE, Primary, and Junior High School for the 2025–2026 academic year.</p>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Admissions</li>
      </ol>
    </nav>
  </div>
</section>


<!-- ADMISSION PROCESS -->
<section class="py-5" style="padding:5rem 0;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <div class="section-label">How to Apply</div>
      <h2 class="section-heading">Admission Process</h2>
      <div class="gold-divider"></div>
      <p class="section-subtext">Joining Scholar's College is simple. Follow these three steps to begin your child's academic journey with us.</p>
    </div>
    <div class="row g-4">
      <?php
      $steps = [
        ['Submit Application','Complete the admission form below with accurate student and parent/guardian information.','fas fa-file-pen'],
        ['Document Review','Our admissions team reviews all submitted documents and determines the appropriate grade placement.','fas fa-magnifying-glass'],
        ['Confirmation & Enrollment','You will receive a confirmation call with enrollment details, fee schedule, and orientation information.','fas fa-check-double'],
      ];
      foreach ($steps as $i => $s): $d = $i + 1; ?>
      <div class="col-md-4 reveal reveal-delay-<?php echo $d; ?>">
        <div class="step-card">
          <div class="step-number"><?php echo $d; ?></div>
          <div style="font-size:1.8rem;color:var(--crimson);margin-bottom:.7rem;"><i class="<?php echo $s[2]; ?>"></i></div>
          <h5 style="color:var(--navy)"><?php echo $s[0]; ?></h5>
          <p style="font-size:.88rem;color:var(--gray);margin:0"><?php echo $s[1]; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- REQUIREMENTS -->
<section class="py-5 bg-off-white" style="padding:4rem 0;">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6 reveal">
        <div class="section-label">What to Bring</div>
        <h2 class="section-heading">Admission Requirements</h2>
        <div class="gold-divider left"></div>
        <ul style="list-style:none;padding:0;">
          <?php foreach([
            'Student birth certificate (certified copy)',
            'Latest school report card or academic transcript',
            'Two recent passport-sized photographs',
            'Parent or guardian valid government ID',
            'Parent or guardian active contact information',
            'Immunization/health records (if available)',
          ] as $req): ?>
          <li class="d-flex align-items-start gap-3 mb-3">
            <i class="fas fa-circle-check mt-1" style="color:var(--crimson);flex-shrink:0"></i>
            <span><?php echo $req; ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="col-lg-6 reveal reveal-delay-2">
        <div class="row g-3">
          <div class="col-6">
            <div class="feature-card text-center">
              <div class="feature-icon"><i class="fas fa-child"></i></div>
              <h6>ECE Program</h6>
              <p style="font-size:.82rem;">Ages 3–5<br>Play-based learning</p>
            </div>
          </div>
          <div class="col-6">
            <div class="feature-card text-center">
              <div class="feature-icon"><i class="fas fa-pencil"></i></div>
              <h6>Primary School</h6>
              <p style="font-size:.82rem;">Grades 1–6<br>Core academics</p>
            </div>
          </div>
          <div class="col-6">
            <div class="feature-card text-center">
              <div class="feature-icon"><i class="fas fa-book-open"></i></div>
              <h6>Junior High</h6>
              <p style="font-size:.82rem;">Grades 7–9<br>Advanced programs</p>
            </div>
          </div>
          <div class="col-6">
            <div class="feature-card text-center">
              <div class="feature-icon"><i class="fas fa-clock"></i></div>
              <h6>School Hours</h6>
              <p style="font-size:.82rem;">Mon – Fri<br>8:00 AM – 2:00 PM</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- APPLICATION FORM -->
<section class="py-5" style="padding:5rem 0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="admission-form-card reveal">
          <div class="text-center mb-4">
            <div class="section-label">Online Application</div>
            <h2 class="section-heading">Admission Application Form</h2>
            <div class="gold-divider"></div>
            <p style="color:var(--gray)">Please fill in all required fields accurately. Our admissions team will contact you within 48 hours.</p>
          </div>

          <form data-feedback>
            <div class="row g-3">

              <!-- Student Info -->
              <div class="col-12">
                <div style="background:var(--off-white);border-radius:var(--radius);padding:1rem 1.2rem;margin-bottom:.5rem;">
                  <h6 style="color:var(--navy);margin:0;font-size:.88rem;text-transform:uppercase;letter-spacing:.08em;">
                    <i class="fas fa-user me-2" style="color:var(--crimson)"></i>Student Information
                  </h6>
                </div>
              </div>

              <div class="col-md-6">
                <label class="form-label">Student Full Name *</label>
                <input type="text" class="form-control" placeholder="Enter full legal name" required>
              </div>
              <div class="col-md-3">
                <label class="form-label">Date of Birth *</label>
                <input type="date" class="form-control" required>
              </div>
              <div class="col-md-3">
                <label class="form-label">Gender *</label>
                <select class="form-select" required>
                  <option value="">Select</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label">Applying For *</label>
                <select class="form-select" required>
                  <option value="">Select Program</option>
                  <option>ECE (Ages 3–5)</option>
                  <option>Primary School (Grades 1–6)</option>
                  <option>Junior High School (Grades 7–9)</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label">Previous School</label>
                <input type="text" class="form-control" placeholder="If applicable">
              </div>
              <div class="col-md-4">
                <label class="form-label">Last Grade Completed</label>
                <input type="text" class="form-control" placeholder="e.g., Grade 3">
              </div>

              <!-- Parent Info -->
              <div class="col-12 mt-2">
                <div style="background:var(--off-white);border-radius:var(--radius);padding:1rem 1.2rem;margin-bottom:.5rem;">
                  <h6 style="color:var(--navy);margin:0;font-size:.88rem;text-transform:uppercase;letter-spacing:.08em;">
                    <i class="fas fa-users me-2" style="color:var(--crimson)"></i>Parent / Guardian Information
                  </h6>
                </div>
              </div>

              <div class="col-md-6">
                <label class="form-label">Parent / Guardian Name *</label>
                <input type="text" class="form-control" placeholder="Full name" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Relationship to Student *</label>
                <select class="form-select" required>
                  <option value="">Select</option>
                  <option>Father</option>
                  <option>Mother</option>
                  <option>Guardian</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label">Phone Number *</label>
                <input type="tel" class="form-control" placeholder="+231 770 000 000" required>
              </div>
              <div class="col-md-4">
                <label class="form-label">WhatsApp Number</label>
                <input type="tel" class="form-control" placeholder="+231 770 000 000">
              </div>
              <div class="col-md-4">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="parent@email.com">
              </div>
              <div class="col-12">
                <label class="form-label">Residential Address *</label>
                <input type="text" class="form-control" placeholder="Full home address, Monrovia, Liberia" required>
              </div>

              <!-- Additional Info -->
              <div class="col-12 mt-2">
                <div style="background:var(--off-white);border-radius:var(--radius);padding:1rem 1.2rem;margin-bottom:.5rem;">
                  <h6 style="color:var(--navy);margin:0;font-size:.88rem;text-transform:uppercase;letter-spacing:.08em;">
                    <i class="fas fa-clipboard me-2" style="color:var(--crimson)"></i>Additional Information
                  </h6>
                </div>
              </div>
              <div class="col-12">
                <label class="form-label">Medical or Special Learning Needs</label>
                <textarea class="form-control" rows="3" placeholder="Please share any medical conditions, allergies, or learning support needs we should be aware of"></textarea>
              </div>
              <div class="col-12">
                <label class="form-label">How Did You Hear About Scholar's College?</label>
                <select class="form-select">
                  <option value="">Select</option>
                  <option>Friend or Family Referral</option>
                  <option>Social Media (Facebook, WhatsApp)</option>
                  <option>Signboard / Advertisement</option>
                  <option>Church or Community</option>
                  <option>Other</option>
                </select>
              </div>

              <!-- Submit -->
              <div class="col-12 mt-3">
                <div class="d-flex gap-3 flex-wrap">
                  <button type="submit" class="btn-crimson"><i class="fas fa-paper-plane"></i> Submit Application</button>
                  <button type="reset" class="btn-outline-crimson"><i class="fas fa-rotate-left"></i> Clear Form</button>
                </div>
                <p class="mt-3" style="font-size:.82rem;color:var(--gray)"><i class="fas fa-lock me-1" style="color:var(--crimson)"></i>Your information is confidential and will only be used for admission processing.</p>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- CONTACT INFO BANNER -->
<section style="background:var(--navy);padding:3rem 0;">
  <div class="container">
    <div class="row justify-content-center text-center text-white gy-3 reveal">
      <div class="col-md-3">
        <i class="fas fa-phone fa-2x mb-2" style="color:var(--gold)"></i>
        <p class="mb-0"><strong>Call Us</strong></p>
        <small>+231 770 000 000</small>
      </div>
      <div class="col-md-3">
        <i class="fab fa-whatsapp fa-2x mb-2" style="color:var(--gold)"></i>
        <p class="mb-0"><strong>WhatsApp</strong></p>
        <small>+231 770 000 000</small>
      </div>
      <div class="col-md-3">
        <i class="fas fa-envelope fa-2x mb-2" style="color:var(--gold)"></i>
        <p class="mb-0"><strong>Email Us</strong></p>
        <small>info@scholarscollege.edu.lr</small>
      </div>
      <div class="col-md-3">
        <i class="fas fa-map-marker-alt fa-2x mb-2" style="color:var(--gold)"></i>
        <p class="mb-0"><strong>Visit Us</strong></p>
        <small>24th St Sinkor, Monrovia</small>
      </div>
    </div>
  </div>
</section>


<?php include("includes/footer.php"); ?>
