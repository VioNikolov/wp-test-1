<b><?php the_title(); ?></b>
<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>
<small>Posted on: <?php the_time('F j, Y'); ?> in <?php the_category(); ?></small>

<?php the_content(); ?>

<hr>