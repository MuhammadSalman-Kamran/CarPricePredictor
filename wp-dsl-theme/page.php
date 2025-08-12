<?php if (!defined('ABSPATH')) exit; ?>
<?php get_header(); ?>
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('prose max-w-none'); ?>>
            <h1 class="!mt-0"><?php the_title(); ?></h1>
            <div class="entry-content"><?php the_content(); ?></div>
        </article>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>