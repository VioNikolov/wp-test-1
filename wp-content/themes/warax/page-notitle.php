<?php

/*
 template name: Page No Title
 */

get_header(); ?>

<?php if ( have_posts() ): ?>

    <?php while (have_posts()) : the_post();  ?>

        <h1>This is my static title</h1>

        <small>Posted on: <?php the_time('F j, Y'); ?> in <?php the_category(); ?></small>
        <?php the_content(); ?>
        <hr>


    <?php endwhile; ?>


<?php endif; ?>

<?php get_footer(); ?>