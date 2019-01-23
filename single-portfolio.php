<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'templates/content', 'portfolio' ); ?>
			<?php endwhile; else : ?>
				<h2><?php _e( '404', 'darta' ); ?></h2>
				<p><?php esc_html_e( 'Sorry! No content found. as post type', 'darta' ); ?></p>
			<?php endif; ?>
		</main>
	</div>
<?php get_footer(); ?>