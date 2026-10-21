<?php
$phone = get_theme_mod('roof_phone', '+1 (342) 231-8237');
$email = get_theme_mod('roof_email', 'info@avenueroofing.com');
$phone_tel = preg_replace('/[^0-9+]/', '', $phone);
?>
<footer class="footer">
  <div class="container footer-grid">
    <div>
      <div class="brand" style="margin-bottom:12px">
        <?php if (has_custom_logo()): the_custom_logo(); else: ?>
        <img src="<?php echo roof_img('logo.png'); ?>" alt="<?php bloginfo('name'); ?>" style="height:34px">
        <div class="brand-text"><b style="color:#fff"><?php echo esc_html(explode(' ', get_bloginfo('name'))[0] ?: 'AVENUE'); ?></b><span>ROOFING SOLUTION</span></div>
        <?php endif; ?>
      </div>
      <p><?php echo esc_html(get_bloginfo('description') ?: 'Professional roofing services in NYC - licensed, insured, and trusted by 500+ clients.'); ?></p>
      <div class="socials">
        <a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.youtube.com/" target="_blank" rel="noopener" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
        <a href="https://x.com/" target="_blank" rel="noopener" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
      </div>
    </div>
    <div>
      <h4><?php esc_html_e('Quick Links', 'roof-top-repair'); ?></h4>
      <div class="foot-links">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'roof-top-repair'); ?></a>
        <a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Services', 'roof-top-repair'); ?></a>
        <a href="<?php echo esc_url(home_url('/about/')); ?>"><?php esc_html_e('About Us', 'roof-top-repair'); ?></a>
        <a href="<?php echo esc_url(home_url('/blog/')); ?>"><?php esc_html_e('Blogs', 'roof-top-repair'); ?></a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Contact Us', 'roof-top-repair'); ?></a>
      </div>
    </div>
    <div>
      <h4><?php esc_html_e('Our Services', 'roof-top-repair'); ?></h4>
      <div class="foot-links">
        <a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Roof Installation', 'roof-top-repair'); ?></a>
        <a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Roof Replacement', 'roof-top-repair'); ?></a>
        <a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Roof Maintenance', 'roof-top-repair'); ?></a>
        <a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Skylight Installation', 'roof-top-repair'); ?></a>
        <a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Gutter Installation', 'roof-top-repair'); ?></a>
      </div>
    </div>
    <div class="newsletter">
      <h4><?php esc_html_e('Newsletter', 'roof-top-repair'); ?></h4>
      <p><?php esc_html_e('Subscribe for roofing tips and offers.', 'roof-top-repair'); ?></p>
      <form style="display:flex;gap:8px;margin-top:10px" method="post" action="<?php echo esc_url(home_url('/')); ?>" onsubmit="event.preventDefault();alert('Subscribed!')">
        <input type="email" name="subscriber_email" placeholder="<?php esc_attr_e('Enter your email', 'roof-top-repair'); ?>" required aria-label="email">
        <button class="btn btn-red" style="padding:10px 16px;flex:0 0 auto" type="submit"><?php esc_html_e('Subscribe', 'roof-top-repair'); ?></button>
      </form>
      <p style="margin-top:8px;font-size:11px;color:#94A3B8">
        <i class="fa-solid fa-envelope"></i> <?php echo esc_html($email); ?> &nbsp; <i class="fa-solid fa-phone"></i> <?php echo esc_html($phone); ?>
      </p>
    </div>
  </div>
  <div class="container footer-bottom">
    <div>Copyright © <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</div>
    <div style="display:flex;gap:14px">
      <a href="<?php echo esc_url(home_url('/terms-conditions/')); ?>"><?php esc_html_e('Terms & Conditions', 'roof-top-repair'); ?></a>
      <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>"><?php esc_html_e('Privacy Policy', 'roof-top-repair'); ?></a>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
