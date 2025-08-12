<?php
if (!defined('ABSPATH')) {
    exit;
}

function dsl_tailwind_enqueue_assets(): void
{
    // Main stylesheet built by Tailwind
    $css_path = DSL_TAILWIND_THEME_DIR . '/assets/css/main.css';
    $css_uri  = DSL_TAILWIND_THEME_URI . '/assets/css/main.css';
    $css_ver  = file_exists($css_path) ? (string) filemtime($css_path) : DSL_TAILWIND_THEME_VERSION;

    wp_enqueue_style('dsl-tailwind', $css_uri, [], $css_ver);

    // Theme JS for interactions/animations
    $js_path = DSL_TAILWIND_THEME_DIR . '/assets/js/main.js';
    $js_uri  = DSL_TAILWIND_THEME_URI . '/assets/js/main.js';
    $js_ver  = file_exists($js_path) ? (string) filemtime($js_path) : DSL_TAILWIND_THEME_VERSION;

    wp_enqueue_script('dsl-theme', $js_uri, [], $js_ver, true);
}
add_action('wp_enqueue_scripts', 'dsl_tailwind_enqueue_assets');

// Dequeue default block library if not needed to avoid CSS conflicts (optional)
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
}, 100);