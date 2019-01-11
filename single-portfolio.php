<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section>
			<div class="history_section">
			<div class="container">
				<div class="row">
				<div class="col-md-5">
					<img class="img img-fluid monitor_mockap" src="<?php echo get_template_directory_uri().'/assets/img/monitor_mockap.png'?>" alt="post_imgage">
				</div>
				<div class="col-md-7">
					<h2 class="section_heading left_red_border">
					<?php the_title( '<a href="' . esc_url( get_permalink() ) . '">', '</a>' ); ?>
					</h2>
					<div>
					
					</div>
					<button class="button first_button">Browse our work</button>
				</div>
				</div>
			</div>
			</div>
		</section>
		<?php endwhile; else : ?>
		404
		<?php endif; ?>
		<p>Template: single-portfolio.php</p>
	</main>
</div>

<?php get_footer(); ?>