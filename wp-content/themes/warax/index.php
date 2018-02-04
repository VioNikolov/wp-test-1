<?php get_header(); ?>

    <?php if ( have_posts() ): ?>

        <?php while (have_posts()) : the_post();  ?>

            <b><?php the_title(); ?></b>
            <small>Posted on: <?php the_time('F j, Y'); ?> in <?php the_category(); ?></small>
            <?php the_content(); ?>
            <hr>


        <?php endwhile; ?>


    <?php endif; ?>

<?php get_footer(); ?>