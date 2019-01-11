<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
			<h2><?php esc_html_e( '404 - Page Not Found', 'darta' ); ?></h2>
			<div class="entry-content">
				<p><?php esc_html_e( 'Sorry! No content found.', 'darta' ); ?></p>
			</div>
		</article>
	  <p>Template: 404.php</p>
	</main>
</div>

<?php get_footer(); ?>