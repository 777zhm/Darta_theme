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
				<span class="radio">
					<input name="portfolio_item_radio" id="portfolio_all" type="radio" value="all" checked/>
					<label class="radio-label" for="portfolio_all">All</label>               
				</span>

			<?php $types = get_terms( array('taxonomy' => 'portfolio_types', 'hide_empty' => false,) ); ?>
			<?php if( !empty($types) ){ ?>
				<?php foreach( $types as $type ){ ?>
				<span class="radio">
				  <input name="portfolio_item_radio" id="<?php echo ('portfolio_'.$type->term_id); ?>" type="radio" value="<?php echo ('.portfolio_'.$type->term_id); ?>"/>
				  <label class="radio-label" for="<?php echo ('portfolio_'.$type->term_id); ?>"><?php  echo $type->name; ?></label>
				</span>
				<?php } ?>
			<?php } ?>
			</div>
		  </div>
		</div>

		<?php $posts = get_posts( array('post_type'=> 'portfolio', 'numberposts' => -1, ) ) ;?>
		<?php if( !empty($posts ) ){ ?>
		<div class="row justify-content-center mixitup_container">

			<?php foreach( $posts as $post ){ 

			$terms = get_the_terms( $post->ID, 'portfolio_types' );
			if( $terms ){
				$term = array_shift( $terms );
			}

			?>
			<div class="col-lg-3 col-md-4 col-sm-6 col-12 portfolio_item mix portfolio_<?php echo $term->term_id; ?>" style="background-image:url( <?php echo get_the_post_thumbnail_url($post->ID); ?> )">
				<div class="portfolio_item_text">
					<h3 class="portfolio_item_heading"><?php  echo $post->post_title; ?></h3>
					<div class="portfolio_item_desc"><?php  echo $term->name; ?></div>
				</div>
			</div>
			<?php } ?>
		</div>
		<?php } ?>

		</div>
	</div>
</section>