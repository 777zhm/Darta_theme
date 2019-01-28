<?php get_header('post'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section>
			<div class="history_section single_post_section" id="history">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<img class="img img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
						</div>
						<div class="col-md-7">
							<h2 class="section_heading left_red_border"><?php the_title(); ?></h2>
							<div class="history_text"><?php the_content(); ?></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php endwhile; ?>
		<?php endif; ?>
<?php get_footer(); ?>