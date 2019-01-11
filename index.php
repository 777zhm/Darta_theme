<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      	<?php the_content(); ?>
      <?php endwhile; else : ?>
        404
      <?php endif; ?>
      <p>Template: index.php</p>
  </main>
</div>

<?php get_footer(); ?>