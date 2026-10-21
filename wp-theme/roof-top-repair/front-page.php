<?php
/**
 * Template: Front Page (Home) - Exact clone of reference Home screenshot
 * No external host links - all assets via get_template_directory_uri()
 */
get_header();
$phone = get_theme_mod('roof_phone', '+1 (342) 231-8237');
$phone_tel = preg_replace('/[^0-9+]/', '', $phone);
?>
<section class="hero">
  <div class="hero-bg"><img src="<?php echo roof_img('hero-nyc-roofs.jpg'); ?>" alt="<?php esc_attr_e('NYC roofs', 'roof-top-repair'); ?>" loading="eager"></div>
  <div class="container hero-wrap">
    <div class="hero-content">
      <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'roof-top-repair'); ?></a> &nbsp;•&nbsp; <?php esc_html_e('Services', 'roof-top-repair'); ?></div>
      <h1><?php esc_html_e('Roof Repair In NYC', 'roof-top-repair'); ?></h1>
      <p><?php esc_html_e('Professional roofing services with licensed, insured experts. 10+ years experience delivering high quality materials across all NYC boroughs.', 'roof-top-repair'); ?></p>
      <div class="hero-actions">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-red"><?php esc_html_e('Get a Free Estimate', 'roof-top-repair'); ?> <i class="fa-solid fa-arrow-right"></i></a>
        <a href="tel:<?php echo esc_attr($phone_tel); ?>" class="btn btn-outline"><i class="fa-solid fa-phone"></i> <?php esc_html_e('Call', 'roof-top-repair'); ?> <?php echo esc_html($phone); ?></a>
      </div>
      <div class="hero-badges">
        <div class="badge"><i class="fa-solid fa-shield-halved"></i> <?php esc_html_e('Licenses Insured', 'roof-top-repair'); ?></div>
        <div class="badge"><i class="fa-solid fa-award"></i> <?php esc_html_e('10+ Years Experience', 'roof-top-repair'); ?></div>
        <div class="badge"><i class="fa-solid fa-star"></i> <?php esc_html_e('High Quality Materials', 'roof-top-repair'); ?></div>
      </div>
    </div>
  </div>
</section>

<section class="section trusted">
  <div class="container trusted-grid">
    <div>
      <span class="eyebrow"><i class="fa-solid fa-house"></i> <?php esc_html_e('Who We Are', 'roof-top-repair'); ?></span>
      <h2 style="margin-top:12px"><?php esc_html_e('The Ultimate Trusted Team for', 'roof-top-repair'); ?><br><?php esc_html_e('Elite Structure Protection', 'roof-top-repair'); ?></h2>
      <p class="muted" style="margin-top:12px"><?php esc_html_e('We provide reliable roofing solutions with transparent pricing, certified crews and warranty-backed workmanship trusted by NYC homeowners.', 'roof-top-repair'); ?></p>
      <div class="stats">
        <div class="stat"><b>100%</b><span><?php esc_html_e('Satisfaction', 'roof-top-repair'); ?></span></div>
        <div class="stat"><b>4.9</b><span><?php esc_html_e('Google Rating', 'roof-top-repair'); ?></span></div>
        <div class="stat"><b>500+</b><span><?php esc_html_e('Happy Clients', 'roof-top-repair'); ?></span></div>
      </div>
      <div class="checks">
        <div class="check"><i class="fa-solid fa-check"></i><span><?php esc_html_e('Licensed & insured crews in all boroughs', 'roof-top-repair'); ?></span></div>
        <div class="check"><i class="fa-solid fa-check"></i><span><?php esc_html_e('Premium shingles & waterproof materials', 'roof-top-repair'); ?></span></div>
        <div class="check"><i class="fa-solid fa-check"></i><span><?php esc_html_e('Free inspection & same-day estimates', 'roof-top-repair'); ?></span></div>
        <div class="check"><i class="fa-solid fa-check"></i><span><?php esc_html_e('Workmanship warranty on every project', 'roof-top-repair'); ?></span></div>
      </div>
    </div>
    <div class="trusted-img"><img src="<?php echo roof_img('worker-team.jpg'); ?>" alt=""></div>
  </div>
</section>

<section class="section" style="background:#fff">
  <div class="container" style="text-align:center">
    <span class="eyebrow eyebrow-w"><?php esc_html_e('Our Services', 'roof-top-repair'); ?></span>
    <h2 class="sec-title" style="margin-top:10px"><?php esc_html_e('Roofing Repair Services', 'roof-top-repair'); ?><br><?php esc_html_e('Professional Roofing Repair in NYC', 'roof-top-repair'); ?></h2>
    <p class="muted" style="max-width:640px;margin:10px auto 0"><?php esc_html_e('Comprehensive repair, replacement and installation services tailored to your roof type and budget.', 'roof-top-repair'); ?></p>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:22px;text-align:left" class="home-services-grid">
      <div class="card">
        <div class="card-img"><img src="<?php echo roof_img('roof-repair.jpg'); ?>" alt=""></div>
        <div class="card-body"><h3><?php esc_html_e('Roof Repair', 'roof-top-repair'); ?></h3><p><?php esc_html_e('Leak fixes, shingle replacement and storm damage repair with fast response.', 'roof-top-repair'); ?></p><a class="card-link" href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Learn More', 'roof-top-repair'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a></div>
      </div>
      <div class="card">
        <div class="card-img"><img src="<?php echo roof_img('roof-replacement.jpg'); ?>" alt=""></div>
        <div class="card-body"><h3><?php esc_html_e('Roof Replacement', 'roof-top-repair'); ?></h3><p><?php esc_html_e('Full replacement with energy-efficient materials and warranty coverage.', 'roof-top-repair'); ?></p><a class="card-link" href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Learn More', 'roof-top-repair'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a></div>
      </div>
      <div class="card">
        <div class="card-img"><img src="<?php echo roof_img('roof-installation.jpg'); ?>" alt=""></div>
        <div class="card-body"><h3><?php esc_html_e('Roof Installation', 'roof-top-repair'); ?></h3><p><?php esc_html_e('New roof installation for residential and commercial properties.', 'roof-top-repair'); ?></p><a class="card-link" href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Learn More', 'roof-top-repair'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a></div>
      </div>
    </div>
  </div>
</section>

<section class="section premium" style="background:var(--gray)">
  <div class="container premium-grid">
    <div class="premium-img"><img src="<?php echo roof_img('our-core-roof-detail.jpg'); ?>" alt=""></div>
    <div>
      <span class="eyebrow"><?php esc_html_e('The Premium', 'roof-top-repair'); ?></span>
      <h2 class="sec-title" style="margin-top:10px"><?php esc_html_e('The Ultimate Trusted Team for Elite Structure Protection', 'roof-top-repair'); ?></h2>
      <p class="muted" style="margin-top:10px"><?php esc_html_e('Our certified team uses top-grade materials and follows strict safety standards on every job.', 'roof-top-repair'); ?></p>
      <ul class="premium-list">
        <li><i class="fa-solid fa-check"></i> <?php esc_html_e('Fully licensed & insured in NYC', 'roof-top-repair'); ?></li>
        <li><i class="fa-solid fa-check"></i> <?php esc_html_e('10+ years proven experience', 'roof-top-repair'); ?></li>
        <li><i class="fa-solid fa-check"></i> <?php esc_html_e('GAF Certified premium materials', 'roof-top-repair'); ?></li>
        <li><i class="fa-solid fa-check"></i> <?php esc_html_e('Free inspection & transparent quotes', 'roof-top-repair'); ?></li>
      </ul>
    </div>
  </div>
</section>

<section class="section core" style="text-align:center">
  <div class="container">
    <span class="eyebrow eyebrow-w"><?php esc_html_e('Why Choose Us', 'roof-top-repair'); ?></span>
    <h2 class="sec-title"><?php esc_html_e('Our Core Solution', 'roof-top-repair'); ?></h2>
    <p class="muted" style="max-width:640px;margin:8px auto 0"><?php esc_html_e('Three core pillars that make us the trusted roofing partner for NYC property owners.', 'roof-top-repair'); ?></p>
    <div class="core-cards">
      <div class="solution-card"><img src="<?php echo roof_img('roof-repair.jpg'); ?>" alt=""><div class="solution-overlay"><h3><?php esc_html_e('Expert Repair', 'roof-top-repair'); ?></h3></div></div>
      <div class="solution-card"><img src="<?php echo roof_img('roof-replacement.jpg'); ?>" alt=""><div class="solution-overlay"><h3><?php esc_html_e('Complete Replacement', 'roof-top-repair'); ?></h3></div></div>
      <div class="solution-card"><img src="<?php echo roof_img('roof-installation.jpg'); ?>" alt=""><div class="solution-overlay"><h3><?php esc_html_e('New Installation', 'roof-top-repair'); ?></h3></div></div>
    </div>
  </div>
</section>

<section class="section execution" style="text-align:center">
  <div class="container">
    <span class="eyebrow eyebrow-purple"><?php esc_html_e('Our Process', 'roof-top-repair'); ?></span>
    <h2 class="sec-title"><?php esc_html_e('Our Execution Methodology', 'roof-top-repair'); ?></h2>
    <p class="muted" style="max-width:640px;margin:8px auto 0"><?php esc_html_e('A proven 4-step process ensuring quality, safety and on-time delivery.', 'roof-top-repair'); ?></p>
    <div class="exec-grid" style="text-align:left;margin-top:18px">
      <div class="exec-card"><div class="step"><?php esc_html_e('Step 1', 'roof-top-repair'); ?></div><h4><?php esc_html_e('Inspection', 'roof-top-repair'); ?></h4><p><?php esc_html_e('Thorough roof assessment and damage report.', 'roof-top-repair'); ?></p></div>
      <div class="exec-card"><div class="step"><?php esc_html_e('Step 2', 'roof-top-repair'); ?></div><h4><?php esc_html_e('Planning', 'roof-top-repair'); ?></h4><p><?php esc_html_e('Detailed scope, materials and timeline.', 'roof-top-repair'); ?></p></div>
      <div class="exec-card"><div class="step"><?php esc_html_e('Step 3', 'roof-top-repair'); ?></div><h4><?php esc_html_e('Execution', 'roof-top-repair'); ?></h4><p><?php esc_html_e('Certified crew with safety compliance.', 'roof-top-repair'); ?></p></div>
      <div class="exec-card"><div class="step"><?php esc_html_e('Step 4', 'roof-top-repair'); ?></div><h4><?php esc_html_e('Handover', 'roof-top-repair'); ?></h4><p><?php esc_html_e('Final inspection, cleanup and warranty.', 'roof-top-repair'); ?></p></div>
    </div>
  </div>
</section>

<section class="section service-areas" style="text-align:center">
  <div class="container">
    <span class="eyebrow eyebrow-w"><?php esc_html_e('Coverage', 'roof-top-repair'); ?></span>
    <h2 class="sec-title"><?php esc_html_e('Our Service Areas', 'roof-top-repair'); ?></h2>
    <p class="muted" style="max-width:700px;margin:8px auto 0"><?php esc_html_e('Serving all five boroughs with local expertise and fast response.', 'roof-top-repair'); ?></p>
    <div class="areas-grid" style="text-align:left">
      <div class="area-card"><img src="<?php echo roof_img('hero-nyc-roofs.jpg'); ?>" alt=""><div class="area-body"><h4>Bronx</h4><p><?php esc_html_e('Residential & commercial roofing in Bronx.', 'roof-top-repair'); ?></p><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Learn More', 'roof-top-repair'); ?> <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="area-card"><img src="<?php echo roof_img('roof-repair.jpg'); ?>" alt=""><div class="area-body"><h4>Brooklyn</h4><p><?php esc_html_e('Trusted roofing solutions in Brooklyn.', 'roof-top-repair'); ?></p><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Learn More', 'roof-top-repair'); ?> <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="area-card"><img src="<?php echo roof_img('roof-replacement.jpg'); ?>" alt=""><div class="area-body"><h4>Manhattan</h4><p><?php esc_html_e('Premium roofing services in Manhattan.', 'roof-top-repair'); ?></p><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Learn More', 'roof-top-repair'); ?> <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="area-card"><img src="<?php echo roof_img('roof-installation.jpg'); ?>" alt=""><div class="area-body"><h4>Queens</h4><p><?php esc_html_e('Reliable roofing across Queens.', 'roof-top-repair'); ?></p><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Learn More', 'roof-top-repair'); ?> <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="area-card"><img src="<?php echo roof_img('service-area-bg.jpg'); ?>" alt=""><div class="area-body"><h4>Staten Island</h4><p><?php esc_html_e('Quality roofing in Staten Island.', 'roof-top-repair'); ?></p><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Learn More', 'roof-top-repair'); ?> <i class="fa-solid fa-arrow-right"></i></a></div></div>
    </div>
  </div>
</section>

<section class="section features">
  <div class="container features-grid">
    <div class="features-img"><img src="<?php echo roof_img('service-area-bg.jpg'); ?>" alt=""></div>
    <div>
      <h2 class="sec-title"><?php esc_html_e('The Ultimate Trusted Team for Elite Structure Protection', 'roof-top-repair'); ?></h2>
      <p class="muted" style="margin-top:8px"><?php esc_html_e('Built on trust, quality and customer satisfaction - every project backed by warranty.', 'roof-top-repair'); ?></p>
      <div class="feat-cards" style="margin-top:16px">
        <div class="feat-card"><div class="feat-icon"><i class="fa-solid fa-house"></i></div><h4><?php esc_html_e('Quality Work', 'roof-top-repair'); ?></h4><p><?php esc_html_e('Premium materials with expert installation.', 'roof-top-repair'); ?></p></div>
        <div class="feat-card"><div class="feat-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div><h4><?php esc_html_e('Expert Crew', 'roof-top-repair'); ?></h4><p><?php esc_html_e('Certified and experienced roofers.', 'roof-top-repair'); ?></p></div>
        <div class="feat-card"><div class="feat-icon"><i class="fa-solid fa-shield-halved"></i></div><h4><?php esc_html_e('Warranty', 'roof-top-repair'); ?></h4><p><?php esc_html_e('Workmanship and material warranty.', 'roof-top-repair'); ?></p></div>
        <div class="feat-card"><div class="feat-icon"><i class="fa-solid fa-award"></i></div><h4><?php esc_html_e('Certified', 'roof-top-repair'); ?></h4><p><?php esc_html_e('GAF Certified and licensed contractor.', 'roof-top-repair'); ?></p></div>
      </div>
    </div>
  </div>
</section>

<section class="recent">
  <div class="container" style="text-align:center">
    <h2 class="sec-title"><?php esc_html_e('Our Recent', 'roof-top-repair'); ?> <span style="color:var(--red)"><?php esc_html_e('Projects', 'roof-top-repair'); ?></span></h2>
    <p class="muted" style="max-width:640px;margin:8px auto 0;color:#9CA3AF"><?php esc_html_e('See the transformation - quality craftsmanship in every before and after.', 'roof-top-repair'); ?></p>
    <div class="tabs">
      <button class="tab active"><?php esc_html_e('View All', 'roof-top-repair'); ?></button>
      <button class="tab"><?php esc_html_e('Tile Roof', 'roof-top-repair'); ?></button>
      <button class="tab"><?php esc_html_e('Tile Roof', 'roof-top-repair'); ?></button>
    </div>
    <div class="recent-grid">
      <div class="recent-card"><img src="<?php echo roof_img('roof-repair.jpg'); ?>" alt=""><span class="recent-label"><?php esc_html_e('Before', 'roof-top-repair'); ?></span></div>
      <div class="recent-card"><img src="<?php echo roof_img('roof-installation.jpg'); ?>" alt=""><span class="recent-label after"><?php esc_html_e('After', 'roof-top-repair'); ?></span></div>
      <div class="swap-btn"><i class="fa-solid fa-right-left"></i></div>
    </div>
  </div>
</section>

<section class="section faq-section">
  <div class="container faq-grid">
    <div class="faq-img-wrap">
      <div class="faq-circle"><img src="<?php echo roof_img('worker-team.jpg'); ?>" alt=""></div>
      <div class="call-badge"><i class="fa-solid fa-phone"></i> <?php esc_html_e('Call Us Now', 'roof-top-repair'); ?> &nbsp;<span style="font-weight:600"><?php echo esc_html($phone); ?></span></div>
    </div>
    <div>
      <span class="eyebrow eyebrow-w"><i class="fa-regular fa-circle-question"></i> <?php esc_html_e('FAQs', 'roof-top-repair'); ?></span>
      <h2 class="sec-title" style="margin-top:10px"><?php esc_html_e('Your Roofing Concerns', 'roof-top-repair'); ?> <span style="color:var(--red)"><?php esc_html_e('Answered', 'roof-top-repair'); ?></span></h2>
      <div class="faq-list" style="margin-top:14px">
        <div class="faq-item open"><div class="faq-q"><?php esc_html_e('Do you provide emergency roof repair services?', 'roof-top-repair'); ?> <i class="fa-solid fa-chevron-down"></i></div><div class="faq-a"><?php esc_html_e('Yes, we offer 24/7 emergency response for leaks and storm damage across all NYC boroughs.', 'roof-top-repair'); ?></div></div>
        <div class="faq-item"><div class="faq-q"><?php esc_html_e('Do you offer roof maintenance services?', 'roof-top-repair'); ?> <i class="fa-solid fa-chevron-down"></i></div><div class="faq-a"><?php esc_html_e('We provide annual maintenance including inspection, cleaning and preventive repairs.', 'roof-top-repair'); ?></div></div>
        <div class="faq-item"><div class="faq-q"><?php esc_html_e('How much does a roofing service cost?', 'roof-top-repair'); ?> <i class="fa-solid fa-chevron-down"></i></div><div class="faq-a"><?php esc_html_e('Cost depends on roof size and materials. Request a free estimate for transparent pricing.', 'roof-top-repair'); ?></div></div>
      </div>
    </div>
  </div>
</section>

<section class="section testimonials">
  <div class="container">
    <span class="eyebrow eyebrow-w"><?php esc_html_e('Testimonials', 'roof-top-repair'); ?></span>
    <h2 class="sec-title"><?php esc_html_e('Testimonial', 'roof-top-repair'); ?></h2>
    <div class="testi-grid">
      <?php for ($i=0; $i<3; $i++): ?>
      <div class="testi-card">
        <div class="stars">★★★★★</div>
        <p><?php esc_html_e('Professional service from start to finish. Highly recommend for any roofing needs in NYC.', 'roof-top-repair'); ?></p>
        <div class="testi-author"><img src="<?php echo roof_img('worker-team.jpg'); ?>" alt=""><div><b>Justin Deviz</b><br><span><?php esc_html_e('Homeowner', 'roof-top-repair'); ?></span></div></div>
      </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<section class="cta-banner">
  <div class="cta-bg"><img src="<?php echo roof_img('hero-nyc-roofs.jpg'); ?>" alt=""></div>
  <div class="container">
    <h2><?php esc_html_e('Call to Action with Title and Button', 'roof-top-repair'); ?></h2>
    <p><?php esc_html_e('Ready to protect your home? Get a free estimate today and let our experts handle your roofing needs.', 'roof-top-repair'); ?></p>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-red"><?php esc_html_e('Get a Free Service', 'roof-top-repair'); ?> <i class="fa-solid fa-arrow-right"></i></a>
  </div>
</section>

<?php get_footer(); ?>
