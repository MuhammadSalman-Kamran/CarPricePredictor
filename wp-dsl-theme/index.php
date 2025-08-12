<?php if (!defined('ABSPATH')) exit; ?>
<?php get_header(); ?>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <?php if (have_posts()) : ?>
        <div class="space-y-12">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('prose max-w-none'); ?>>
                    <h2 class="!mt-0"><a href="<?php the_permalink(); ?>" class="hover:opacity-80 transition"><?php the_title(); ?></a></h2>
                    <div class="text-gray-500 text-sm mb-4"><?php echo get_the_date(); ?></div>
                    <div class="entry-content"><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; ?>
            <div><?php the_posts_pagination(); ?></div>
        </div>
    <?php else : ?>
        <p><?php esc_html_e('No posts found.', 'dsl-tailwind'); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>