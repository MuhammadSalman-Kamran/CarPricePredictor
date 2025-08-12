<?php if (!defined('ABSPATH')) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Roboto+Slab:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php echo esc_url( DSL_TAILWIND_THEME_URI . '/assets/images/favicon-32.png' ); ?>" sizes="32x32" />
    <?php wp_head(); ?>
</head>
<body <?php body_class('min-h-screen bg-white text-gray-900'); ?>>
<?php wp_body_open(); ?>
<header class="w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
        <div class="flex items-center gap-4">
            <?php if (has_custom_logo()) { the_custom_logo(); } else { ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="font-semibold text-lg"><?php bloginfo('name'); ?></a>
            <?php } ?>
        </div>
        <nav class="hidden md:block">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'flex items-center gap-8',
                'fallback_cb'    => false,
            ]);
            ?>
        </nav>
        <button class="md:hidden inline-flex items-center justify-center p-2 rounded-md border border-gray-200" aria-label="Open Menu" data-mobile-menu-toggle>
            <span class="sr-only">Open Menu</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
        </button>
    </div>
    <div class="md:hidden hidden border-t border-gray-100" data-mobile-menu>
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'px-4 py-4 space-y-2',
            'fallback_cb'    => false,
        ]);
        ?>
    </div>
</header>
<main id="content" class="block">