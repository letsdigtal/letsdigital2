<?php
/**
 * Roof Top Repair Theme - functions.php
 * Reusable WordPress theme - no hardcoded external host dependencies
 */

if (!defined('ABSPATH')) exit;

// Theme setup
function roof_top_repair_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 260,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');

    register_nav_menus([
        'primary' => __('Primary Menu', 'roof-top-repair'),
        'footer'  => __('Footer Menu', 'roof-top-repair'),
    ]);

    // Elementor compatibility: declare support
    add_theme_support('elementor');
}
add_action('after_setup_theme', 'roof_top_repair_setup');

// Enqueue assets - local only, no external host links
function roof_top_repair_assets() {
    $ver = '1.0.0';
    // Theme stylesheet (imports local theme.css which contains all clone styles)
    wp_enqueue_style('roof-top-repair-theme', get_template_directory_uri() . '/assets/css/theme.css', [], $ver);
    // Font Awesome locally bundled via CDN fallback - kept as external for icons but can be replaced with local copy if offline
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', [], '6.5.0');
    // Google Fonts are enqueued via CSS @import; no hardcoded hostinger URLs

    wp_enqueue_script('roof-top-repair-js', get_template_directory_uri() . '/assets/js/theme.js', [], $ver, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'roof_top_repair_assets');

// Widgets
function roof_top_repair_widgets() {
    register_sidebar([
        'name'          => __('Footer Column 1', 'roof-top-repair'),
        'id'            => 'footer-1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ]);
    register_sidebar([
        'name'          => __('Footer Column 2', 'roof-top-repair'),
        'id'            => 'footer-2',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ]);
}
add_action('widgets_init', 'roof_top_repair_widgets');

// Remove unnecessary WordPress head links that leak external host references (feeds, oembed, etc. from mirrored HTML)
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'rest_output_link_wp_head');

// Security: disable file edit
define('DISALLOW_FILE_EDIT', true);

// Customizer: Branding & Contact settings for reusable use
function roof_top_repair_customize($wp_customize) {
    $wp_customize->add_section('roof_top_repair_branding', [
        'title'    => __('Branding & Contact', 'roof-top-repair'),
        'priority' => 30,
    ]);
    $wp_customize->add_setting('roof_phone', ['default' => '+1 (342) 231-8237', 'sanitize_callback' => 'sanitize_text_field']);
    $wp_customize->add_control('roof_phone', ['label' => __('Phone', 'roof-top-repair'), 'section' => 'roof_top_repair_branding', 'type' => 'text']);
    $wp_customize->add_setting('roof_email', ['default' => 'info@avenueroofing.com', 'sanitize_callback' => 'sanitize_email']);
    $wp_customize->add_control('roof_email', ['label' => __('Email', 'roof-top-repair'), 'section' => 'roof_top_repair_branding', 'type' => 'email']);
    $wp_customize->add_setting('roof_address', ['default' => 'NYC, USA', 'sanitize_callback' => 'sanitize_text_field']);
    $wp_customize->add_control('roof_address', ['label' => __('Address', 'roof-top-repair'), 'section' => 'roof_top_repair_branding', 'type' => 'text']);
}
add_action('customize_register', 'roof_top_repair_customize');

// Helper to get theme image
function roof_img($name) {
    return esc_url(get_template_directory_uri() . '/assets/images/' . ltrim($name, '/'));
}
