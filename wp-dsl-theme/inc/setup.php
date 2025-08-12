<?php
if (!defined('ABSPATH')) {
    exit;
}

function dsl_tailwind_theme_setup(): void
{
    // Let WordPress handle <title>
    add_theme_support('title-tag');

    // Featured images
    add_theme_support('post-thumbnails');

    // HTML5 markup
    add_theme_support('html5', [
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'
    ]);

    // Custom logo
    add_theme_support('custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-width'  => true,
        'flex-height' => true,
    ]);

    // Menus
    register_nav_menus([
        'primary'   => __('Primary Menu', 'dsl-tailwind'),
        'footer'    => __('Footer Menu', 'dsl-tailwind'),
    ]);
}
add_action('after_setup_theme', 'dsl_tailwind_theme_setup');

function dsl_tailwind_set_content_width(): void
{
    $GLOBALS['content_width'] = apply_filters('dsl_tailwind_content_width', 1140);
}
add_action('after_setup_theme', 'dsl_tailwind_set_content_width', 0);