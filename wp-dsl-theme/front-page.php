<?php if (!defined('ABSPATH')) exit; ?>
<?php get_header(); ?>
<?php
// The homepage will mirror digitalsoftwarelabs.com with Tailwind classes.
// Sections will be populated as we port markup/assets.
?>
<div class="w-full">
    <?php while (have_posts()) : the_post(); ?>
        <div class="hidden">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>

    <section id="hero" class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight">Digital Software Labs</h1>
                    <p class="mt-6 text-lg text-gray-600">Placeholder hero content. This will be replaced with cloned copy and animations.</p>
                    <div class="mt-8 flex gap-4">
                        <a href="#" class="inline-flex items-center px-6 py-3 rounded-md bg-gray-900 text-white hover:bg-black transition">Get Started</a>
                        <a href="#" class="inline-flex items-center px-6 py-3 rounded-md border border-gray-300 hover:bg-gray-50 transition">Learn More</a>
                    </div>
                </div>
                <div class="relative h-64 md:h-96 bg-gray-100 rounded-xl"></div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>