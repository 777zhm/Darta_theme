<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post, page
 */
  
 get_header();  ?>

<section>
	<div class="history_section" id="history">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<img class="img img-fluid"/>


				</div>
				<div class="col-md-7">
					<h2 class="section_heading left_red_border"><?php the_title( '' ); ?></h2>
					<div class="history_text">

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<?php the_content(); ?>

						<?php endwhile; else : ?>

							<?php get_template_part( 'templates/content', 'none' ); ?>

						<?php endif; ?>

					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>