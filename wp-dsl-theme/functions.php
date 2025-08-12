<?php
// Theme bootstrap for Digital Software Labs Tailwind theme

if (!defined('ABSPATH')) {
    exit;
}

// Define theme constants
if (!defined('DSL_TAILWIND_THEME_VERSION')) {
    define('DSL_TAILWIND_THEME_VERSION', '1.0.0');
}
if (!defined('DSL_TAILWIND_THEME_DIR')) {
    define('DSL_TAILWIND_THEME_DIR', get_template_directory());
}
if (!defined('DSL_TAILWIND_THEME_URI')) {
    define('DSL_TAILWIND_THEME_URI', get_template_directory_uri());
}

// Include setup and assets
require_once DSL_TAILWIND_THEME_DIR . '/inc/setup.php';
require_once DSL_TAILWIND_THEME_DIR . '/inc/assets.php';

// Utility: Ensure wide-alignment and responsive embeds are supported
add_theme_support('align-wide');
add_theme_support('responsive-embeds');

// Register additional image sizes if needed
add_action('after_setup_theme', function () {
    add_image_size('hero_large', 1920, 1080, true);
    add_image_size('card_thumb', 800, 600, true);
});

// Register widget areas (if needed for footer/sidebar)
add_action('widgets_init', function () {
    register_sidebar([
        'name'          => __('Primary Sidebar', 'dsl-tailwind'),
        'id'            => 'sidebar-1',
        'description'   => __('Main sidebar area', 'dsl-tailwind'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);
});

// Include nav walker in case complex menus are required later
// Placeholder for potential custom walker inclusion