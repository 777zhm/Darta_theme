<?php get_header(); ?>


      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; else : ?>
        404
      <?php endif; ?>
      <p>Template: page.php</p>


<?php get_footer(); ?>