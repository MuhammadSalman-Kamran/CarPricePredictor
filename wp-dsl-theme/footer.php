<?php if (!defined('ABSPATH')) exit; ?>
</main>
<footer class="border-t border-gray-100 mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div class="text-sm text-gray-500">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</div>
            <div class="md:justify-self-end">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'flex flex-wrap gap-x-6 text-sm',
                    'fallback_cb'    => false,
                ]);
                ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>