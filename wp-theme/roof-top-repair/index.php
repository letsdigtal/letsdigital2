<?php
/**
 * Generic page template - fallback for reusable theme
 * For full Home layout use front-page.php, for Services use page-services.php (Template Name: Services)
 */
get_header(); ?>

<div class="container section" style="min-height:400px">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1 class="sec-title" style="margin-bottom:16px"><?php the_title(); ?></h1>
    <div class="entry-content muted" style="font-size:14px">
      <?php the_content(); ?>
    </div>
  <?php endwhile; else: ?>
    <h1 class="sec-title"><?php esc_html_e('Nothing Found', 'roof-top-repair'); ?></h1>
    <p class="muted"><?php esc_html_e('No content available.', 'roof-top-repair'); ?></p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
