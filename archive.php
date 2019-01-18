<?php get_header(); ?>

<section>
  <div class="blog_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="text-center">
            <h2 class="section_heading"><?php the_archive_title(); ?></h2>
            <p class="section_subheading"><?php the_archive_description(); ?></p>
            <div class="title_dot"></div>
          </div>
        </div>
      </div>
      <div class="row blog_block">
        <?php
        $args = array( 'posts_per_page' => 4, );
        $query = new WP_Query( $args );
        
        if ( have_posts() ) : while (  have_posts() ) :  the_post(); setup_postdata( $post ) ?>
          <div class="col-lg-6 blog_item">
            <div class="blog_item_image" style="background-image:url( <?php echo get_the_post_thumbnail_url($post->ID); ?> )"></div>

            <div class="blog_item_text">
              <div class="blog_item_category"><?php the_category( ' ' ); ?></div>
              <h3 class="blog_item_heading"><?php the_title(); ?></h3>
              <div class="blog_item_text_box">
                <?php the_excerpt(); ?>
              </div>
              <a href="<?php the_permalink(); ?>">Read More &gt;&gt;</a>
            </div>
          </div>
        <?php endwhile; else: ?>
        <div class="col-12 text-center">
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        </div>
        <?php endif; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>