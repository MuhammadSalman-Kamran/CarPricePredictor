<?php if (!defined('ABSPATH')) exit; ?>
<?php get_header(); ?>
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <header class="mb-10">
        <h1 class="text-2xl font-semibold"><?php printf(esc_html__('Search Results for: %s', 'dsl-tailwind'), '<span class="font-normal">' . get_search_query() . '</span>'); ?></h1>
    </header>
    <?php if (have_posts()) : ?>
        <div class="space-y-12">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('prose max-w-none'); ?>>
                    <h2 class="!mt-0"><a href="<?php the_permalink(); ?>" class="hover:opacity-80 transition"><?php the_title(); ?></a></h2>
                    <div class="entry-content"><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; ?>
            <div><?php the_posts_pagination(); ?></div>
        </div>
    <?php else : ?>
        <p><?php esc_html_e('No results found.', 'dsl-tailwind'); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>