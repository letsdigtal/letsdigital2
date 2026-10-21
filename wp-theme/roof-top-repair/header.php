<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
$phone = get_theme_mod('roof_phone', '+1 (342) 231-8237');
$email = get_theme_mod('roof_email', 'info@avenueroofing.com');
$phone_tel = preg_replace('/[^0-9+]/', '', $phone);
?>
<div class="topbar">
  <div class="container topbar-inner">
    <div class="topbar-left">
      <?php if ($email): ?>
      <a href="mailto:<?php echo esc_attr($email); ?>"><i class="fa-regular fa-envelope"></i> <?php echo esc_html($email); ?></a>
      <?php endif; ?>
      <a href="tel:<?php echo esc_attr($phone_tel); ?>"><i class="fa-solid fa-phone"></i> <?php echo esc_html($phone); ?></a>
    </div>
    <div class="topbar-mid">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'items_wrap' => '%3$s',
        'fallback_cb' => function() {
          echo '<a href="'.esc_url(home_url('/services/')).'">Services</a>';
          echo '<a href="'.esc_url(home_url('/services/')).'">Service Details Page</a>';
        },
        'depth' => 1,
      ]);
      ?>
    </div>
    <div class="topbar-right">
      <div class="topbar-social">
        <a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://x.com/" target="_blank" rel="noopener" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
      </div>
      <a class="btn-topquote" href="<?php echo esc_url(home_url('/contact/')); ?>">Get Quote <i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </div>
</div>

<header class="navbar">
  <div class="container nav-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
      <?php if (has_custom_logo()): the_custom_logo(); else: ?>
      <img src="<?php echo roof_img('logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
      <div class="brand-text"><b><?php echo esc_html(explode(' ', get_bloginfo('name'))[0] ?: 'AVENUE'); ?></b><span>ROOFING SOLUTION</span></div>
      <?php endif; ?>
    </a>
    <nav class="nav-links">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'items_wrap' => '%3$s',
        'fallback_cb' => function() {
          echo '<a href="'.esc_url(home_url('/services/')).'">Services</a>';
          echo '<a href="'.esc_url(home_url('/services/')).'">Service Details Page</a>';
        },
      ]);
      ?>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-red" href="<?php echo esc_url(home_url('/contact/')); ?>">Get Started <i class="fa-solid fa-arrow-right"></i></a>
      <button class="hamburger" aria-label="<?php esc_attr_e('Menu', 'roof-top-repair'); ?>"><i class="fa-solid fa-bars"></i></button>
    </div>
  </div>
  <div class="mobile-menu">
    <?php
    wp_nav_menu([
      'theme_location' => 'primary',
      'container' => false,
      'items_wrap' => '%3$s',
      'fallback_cb' => function() {
        echo '<a href="'.esc_url(home_url('/')).'">Home</a>';
        echo '<a href="'.esc_url(home_url('/services/')).'">Services</a>';
        echo '<a href="'.esc_url(home_url('/services/')).'">Service Details Page</a>';
      },
    ]);
    ?>
    <a href="tel:<?php echo esc_attr($phone_tel); ?>" class="btn btn-red" style="justify-content:center;margin-top:6px">Get Started <i class="fa-solid fa-arrow-right"></i></a>
  </div>
</header>
