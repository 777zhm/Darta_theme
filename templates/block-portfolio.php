<section>
	<div class="portfolio_section" id="portfolio">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="portfolio_header text-center">
						<h2 class="section_heading"><?php the_field('heading'); ?></h2>
						<div><?php the_field('subheading'); ?></div>
						<div class="title_dot"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-center">
					<div class="portfolio_menu controls">
					<?php $types = get_terms( array('taxonomy' => 'portfolio_types', 'hide_empty' => false,) ); ?>
					<?php if( !empty($types) ){ ?>
						<?php foreach( $types as $type ){ ?>

						<div class="radio">
							<input name="portfolio_item_radio" id="portfolio_<?php echo $type->term_id; ?>" type="radio" value="<?php echo $type->term_id; ?>" checked/><label class="radio-label" for="portfolio_<?php echo $type->term_id; ?>"><?php  echo $type->name; ?></label>
						</div>

						<?php } ?>
					<?php } ?>
					</div>
				</div>
			</div>

			<?php $posts = get_posts( array('post_type'=> 'portfolio', 'numberposts' => -1, ) ) ;?>
			<?php if( !empty($posts ) ){ ?>
			<div class="row justify-content-center mixitup_container">

				<?php foreach( $posts as $post ){ ?>


				<div class="col-lg-3 col-md-4 col-sm-6 col-12 portfolio_item mix portfolio_termid-here" style="background-image:url( <?php echo get_the_post_thumbnail_url($post->ID); ?> )">
					<div class="portfolio_item_text">
						<h3 class="portfolio_item_heading"><?php  echo $post->post_title; ?></h3>
						<div class="portfolio_item_desc"><?php  echo $post->post_content; ?></div>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } ?>

		</div>
	</div>
</section>