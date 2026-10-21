<?php
/**
 * Template Name: Services
 * Description: Services page - 4 Reason to Choose, Location, FAQ, Estimate form. No external host links.
 */
get_header();
$phone = get_theme_mod('roof_phone', '+1 (342) 231-8237');
$phone_tel = preg_replace('/[^0-9+]/', '', $phone);
?>
<section class="hero">
  <div class="hero-bg"><img src="<?php echo roof_img('hero-nyc-roofs.jpg'); ?>" alt=""></div>
  <div class="container hero-wrap">
    <div class="hero-content">
      <div class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'roof-top-repair'); ?></a> &nbsp;•&nbsp; <?php esc_html_e('Services', 'roof-top-repair'); ?></div>
      <h1><?php esc_html_e('Roof Repair In NYC', 'roof-top-repair'); ?></h1>
      <p><?php esc_html_e('Complete roofing solutions from repair to installation, trusted across NYC boroughs with licensed crews and premium materials.', 'roof-top-repair'); ?></p>
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

<section class="section" style="background:#fff;text-align:center">
  <div class="container">
    <h2 class="sec-title"><?php esc_html_e('Our Services', 'roof-top-repair'); ?></h2>
    <p class="muted" style="max-width:640px;margin:8px auto 0"><?php esc_html_e('Choose the service that fits your needs - each delivered with warranty and expert craftsmanship.', 'roof-top-repair'); ?></p>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:22px;text-align:left">
      <div class="card"><div class="card-img"><img src="<?php echo roof_img('roof-repair.jpg'); ?>" alt=""><span class="card-num">1</span></div><div class="card-body"><h3><?php esc_html_e('Roof Repair', 'roof-top-repair'); ?></h3><p><?php esc_html_e('Fast leak and damage repair with same-day response and quality guarantee.', 'roof-top-repair'); ?></p><a class="card-link" href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Learn More', 'roof-top-repair'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a></div></div>
      <div class="card"><div class="card-img"><img src="<?php echo roof_img('roof-replacement.jpg'); ?>" alt=""><span class="card-num">2</span></div><div class="card-body"><h3><?php esc_html_e('Roof Replacement', 'roof-top-repair'); ?></h3><p><?php esc_html_e('Complete replacement using premium materials built to last decades.', 'roof-top-repair'); ?></p><a class="card-link" href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Learn More', 'roof-top-repair'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a></div></div>
      <div class="card"><div class="card-img"><img src="<?php echo roof_img('roof-installation.jpg'); ?>" alt=""><span class="card-num">3</span></div><div class="card-body"><h3><?php esc_html_e('Roof Installation', 'roof-top-repair'); ?></h3><p><?php esc_html_e('New roof installation for homes and businesses with expert project management.', 'roof-top-repair'); ?></p><a class="card-link" href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Learn More', 'roof-top-repair'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a></div></div>
    </div>
  </div>
</section>

<section class="why-overlay">
  <div class="why-bg"><img src="<?php echo roof_img('hero-nyc-roofs.jpg'); ?>" alt=""></div>
  <div class="container" style="text-align:center">
    <span class="eyebrow" style="background:#fff;color:#111"><?php esc_html_e('Why Us', 'roof-top-repair'); ?></span>
    <h2 class="sec-title" style="color:#fff;margin-top:10px"><?php esc_html_e('4 Reason To Choose Modern Roofing', 'roof-top-repair'); ?></h2>
    <div class="why-cards" style="text-align:left">
      <div class="why-card"><h4><?php esc_html_e('Step 1', 'roof-top-repair'); ?></h4><p><?php esc_html_e('Licensed & insured - compliant with NYC building codes and safety standards.', 'roof-top-repair'); ?></p></div>
      <div class="why-card"><h4><?php esc_html_e('Step 2', 'roof-top-repair'); ?></h4><p><?php esc_html_e('Premium materials - GAF Certified shingles built for durability.', 'roof-top-repair'); ?></p></div>
      <div class="why-card"><h4><?php esc_html_e('Step 3', 'roof-top-repair'); ?></h4><p><?php esc_html_e('Expert crew - certified roofers with 10+ years experience.', 'roof-top-repair'); ?></p></div>
      <div class="why-card"><h4><?php esc_html_e('Step 4', 'roof-top-repair'); ?></h4><p><?php esc_html_e('Warranty support - workmanship and manufacturer warranty included.', 'roof-top-repair'); ?></p></div>
    </div>
  </div>
</section>

<section class="section" style="background:var(--gray2)">
  <div class="container trusted-grid">
    <div>
      <span class="eyebrow"><i class="fa-solid fa-house"></i> <?php esc_html_e('Who We Are', 'roof-top-repair'); ?></span>
      <h2 class="sec-title" style="margin-top:10px"><?php esc_html_e('The Ultimate Trusted Team for Elite Structure Protection', 'roof-top-repair'); ?></h2>
      <p class="muted" style="margin-top:10px"><?php esc_html_e('We combine modern roofing technology with traditional craftsmanship to deliver roofs that last.', 'roof-top-repair'); ?></p>
      <div class="stats">
        <div class="stat"><b>100%</b><span><?php esc_html_e('Satisfaction', 'roof-top-repair'); ?></span></div>
        <div class="stat"><b>4.9</b><span><?php esc_html_e('Google Rating', 'roof-top-repair'); ?></span></div>
        <div class="stat"><b>500+</b><span><?php esc_html_e('Happy Clients', 'roof-top-repair'); ?></span></div>
      </div>
    </div>
    <div class="trusted-img"><img src="<?php echo roof_img('our-core-roof-detail.jpg'); ?>" alt=""></div>
  </div>
</section>

<section class="location">
  <div class="location-grid">
    <div class="location-left">
      <span class="eyebrow" style="background:var(--red);color:#fff"><?php esc_html_e('Areas', 'roof-top-repair'); ?></span>
      <h2 style="margin-top:10px"><?php esc_html_e('Our', 'roof-top-repair'); ?> <span style="color:var(--red)"><?php esc_html_e('Location', 'roof-top-repair'); ?></span></h2>
      <div class="location-list">
        <div class="loc-item">Bronx <i class="fa-solid fa-chevron-down"></i></div>
        <div class="loc-item">Brooklyn <i class="fa-solid fa-chevron-down"></i></div>
        <div class="loc-item">Manhattan <i class="fa-solid fa-chevron-down"></i></div>
        <div class="loc-item">Queens <i class="fa-solid fa-chevron-down"></i></div>
        <div class="loc-item">Staten Island <i class="fa-solid fa-chevron-down"></i></div>
      </div>
    </div>
    <div class="location-right"><img src="<?php echo roof_img('nyc-map-boroughs.jpg'); ?>" alt=""></div>
  </div>
</section>

<section class="section testimonials" style="background:var(--gray2)">
  <div class="container">
    <span class="eyebrow eyebrow-w"><?php esc_html_e('Reviews', 'roof-top-repair'); ?></span>
    <h2 class="sec-title"><?php esc_html_e('Testimonial', 'roof-top-repair'); ?></h2>
    <div class="testi-grid" style="margin-top:14px">
      <?php for ($i=0; $i<3; $i++): ?>
      <div class="testi-card"><div class="stars">★★★★★</div><p><?php esc_html_e('Excellent craftsmanship and on-time delivery. Our new roof looks amazing and we feel secure.', 'roof-top-repair'); ?></p><div class="testi-author"><img src="<?php echo roof_img('worker-team.jpg'); ?>" alt=""><div><b>Justin Deviz</b><br><span><?php esc_html_e('Homeowner', 'roof-top-repair'); ?></span></div></div></div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<section class="section search-faq">
  <div class="container" style="text-align:center">
    <span class="eyebrow eyebrow-w"><?php esc_html_e('FAQ', 'roof-top-repair'); ?></span>
    <h2 class="sec-title"><?php esc_html_e('What are you looking for?', 'roof-top-repair'); ?></h2>
    <div class="faq-big">
      <div class="faq-item open"><div class="faq-q"><?php esc_html_e('How to Change my Photo from Admin Dashboard?', 'roof-top-repair'); ?> <i class="fa-solid fa-chevron-down"></i></div><div class="faq-a"><?php esc_html_e('Go to Appearance > Customize > Site Identity to update your logo and site icon easily.', 'roof-top-repair'); ?></div></div>
      <div class="faq-item"><div class="faq-q"><?php esc_html_e('How to Change my Password easily?', 'roof-top-repair'); ?> <i class="fa-solid fa-chevron-down"></i></div><div class="faq-a"><?php esc_html_e('Visit Users > Profile in WordPress admin to update your password securely.', 'roof-top-repair'); ?></div></div>
      <div class="faq-item"><div class="faq-q"><?php esc_html_e('How to Change my Subscription Plan using PayPal?', 'roof-top-repair'); ?> <i class="fa-solid fa-chevron-down"></i></div><div class="faq-a"><?php esc_html_e('Manage subscriptions via WooCommerce > Subscriptions or your payment gateway settings.', 'roof-top-repair'); ?></div></div>
    </div>
  </div>
</section>

<section class="request" id="estimate">
  <div class="container request-grid">
    <div class="request-left">
      <span class="eyebrow" style="background:#fff;color:var(--red)"><i class="fa-solid fa-bolt"></i> <?php esc_html_e('Free Inspection Fast Response', 'roof-top-repair'); ?></span>
      <h2><?php esc_html_e('Roof Repair In NYC', 'roof-top-repair'); ?></h2>
      <p><?php esc_html_e('Contact our team for a free inspection and detailed estimate. Fast response within 24 hours.', 'roof-top-repair'); ?></p>
      <div class="req-actions">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn" style="background:#fff;color:#111"><?php esc_html_e('Get a Free Estimate', 'roof-top-repair'); ?> <i class="fa-solid fa-arrow-right"></i></a>
        <a href="tel:<?php echo esc_attr($phone_tel); ?>" class="btn" style="background:#0A0A0B;color:#fff;border:1px solid rgba(255,255,255,.2)"><?php esc_html_e('Call', 'roof-top-repair'); ?> <?php echo esc_html($phone); ?></a>
      </div>
      <div class="badges-4">
        <div class="gaf-badge"><i class="fa-solid fa-certificate"></i> <?php esc_html_e('GAF Certified', 'roof-top-repair'); ?></div>
        <div class="gaf-badge"><i class="fa-solid fa-certificate"></i> <?php esc_html_e('GAF Certified', 'roof-top-repair'); ?></div>
        <div class="gaf-badge"><i class="fa-solid fa-certificate"></i> <?php esc_html_e('GAF Certified', 'roof-top-repair'); ?></div>
        <div class="gaf-badge"><i class="fa-solid fa-certificate"></i> <?php esc_html_e('GAF Certified', 'roof-top-repair'); ?></div>
      </div>
    </div>
    <div style="padding:14px">
      <div class="request-form-card">
        <h3><?php esc_html_e('Request a Free Estimate', 'roof-top-repair'); ?></h3>
        <form class="form-grid" method="post" action="">
          <?php wp_nonce_field('roof_estimate', 'roof_estimate_nonce'); ?>
          <input type="text" name="roof_name" placeholder="<?php esc_attr_e('Name', 'roof-top-repair'); ?>" required>
          <input type="email" name="roof_email" placeholder="<?php esc_attr_e('Email', 'roof-top-repair'); ?>" required>
          <input type="tel" name="roof_phone" placeholder="<?php esc_attr_e('Phone Number', 'roof-top-repair'); ?>" required>
          <input type="text" name="roof_subject" placeholder="<?php esc_attr_e('Subject', 'roof-top-repair'); ?>">
          <textarea rows="4" name="roof_message" placeholder="<?php esc_attr_e('Message', 'roof-top-repair'); ?>"></textarea>
          <button type="submit" class="btn btn-red btn-block"><?php esc_html_e('Get My Free Estimate', 'roof-top-repair'); ?> <i class="fa-solid fa-arrow-right"></i></button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['roof_estimate_nonce']) && wp_verify_nonce($_POST['roof_estimate_nonce'], 'roof_estimate')) {
            echo '<p style="margin-top:12px;color:green;font-size:13px;text-align:center">'.esc_html__('Thank you! We will contact you shortly.', 'roof-top-repair').'</p>';
            if (!empty($_POST['roof_email'])) {
                $to = get_option('admin_email');
                $subject = sanitize_text_field($_POST['roof_subject'] ?: 'New Roofing Estimate Request');
                $body = "Name: ".sanitize_text_field($_POST['roof_name'])."\nEmail: ".sanitize_email($_POST['roof_email'])."\nPhone: ".sanitize_text_field($_POST['roof_phone'])."\nMessage: ".sanitize_textarea_field($_POST['roof_message']);
                wp_mail($to, $subject, $body, ['From: '.get_bloginfo('name').' <'.get_option('admin_email').'>']);
            }
        }
        ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
