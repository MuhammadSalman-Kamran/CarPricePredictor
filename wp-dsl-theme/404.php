<?php if (!defined('ABSPATH')) exit; ?>
<?php get_header(); ?>
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-24 text-center">
    <h1 class="text-5xl font-bold">404</h1>
    <p class="mt-6 text-gray-600"><?php esc_html_e('Page not found.', 'dsl-tailwind'); ?></p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="mt-8 inline-flex items-center px-6 py-3 rounded-md bg-gray-900 text-white hover:bg-black transition"><?php esc_html_e('Go home', 'dsl-tailwind'); ?></a>
</div>
<?php get_footer(); ?>