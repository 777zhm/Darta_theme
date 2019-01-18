<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
	<div class="entry-header">
		<?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
	</div>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
</article>