<?php
/**
 * Block Name: Portfolio
 *
 * This is the template that displays the portfolio block.
 */

?>
<section>
	<div class="portfolio_section" id="portfolio">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="portfolio_header text-center">
						<h2 class="section_heading"><?php the_field('heading'); ?></h2>
						<?php the_field('subheading'); ?>
						<div class="title_dot"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-center">
					<div class="portfolio_menu controls">


					<?php $types = get_terms( array('taxonomy' => 'portfolio_type') );
					if( !empty($types) ){?>

						<div class="radio">
							<input name="portfolio_item_radio" id="portfolio_<?php echo $type->term_id; ?>" type="radio" value="<?php echo $type->term_id; ?>" checked/><label class="radio-label" for="portfolio_<?php echo $type->term_id; ?>"><?php  echo $type->name; ?></label>
						</div>
						<?php 


						foreach( $types as $type ){
						?>
							<div class="radio">
								<input name="portfolio_item_radio" id="portfolio_<?php echo $type->term_id; ?>" type="radio" value="<?php echo $type->term_id; ?>" checked/><label class="radio-label" for="portfolio_<?php echo $type->term_id; ?>"><?php  echo $type->name; ?></label>
							</div>

						<?php }
					} ?>
						<div class="radio">
							<input name="portfolio_item_radio" id="portfolio_" type="radio" value=".portfolio_wordpress"/><label class="radio-label" for="portfolio_wordpress">Wordpress</label>
						</div>
						<div class="radio"><input name="portfolio_item_radio" id="portfolio_plugins" type="radio" value=".portfolio_plugins"/>
							<label class="radio-label" for="portfolio_plugins">Plugins</label>
						</div>
						<div class="radio">
							<input name="portfolio_item_radio" id="portfolio_vuejs" type="radio" value=".portfolio_vuejs"/><label class="radio-label" for="portfolio_vuejs">Vue.js</label>
						</div>
						<div class="radio">
							<input name="portfolio_item_radio" id="portfolio_webdesign" type="radio" value=".portfolio_webdesign"/><label class="radio-label" for="portfolio_webdesign">1Web Design</label>
						</div>
					</div>
				</div>
			</div>


			<?php $posts = get_posts( array('post_type'=> 'portfolio', 'numberposts' => -1, ) ) ;?>


			<?php if( !empty($posts ) ){ ?>

			<div class="row justify-content-center mixitup_container">

			<?php } ?>
				<div class="col-lg-3 col-md-4 col-sm-6 col-12 portfolio_item mix portfolio_wordpress" style='background-image: url("wp-content/themes/darta/assets/img/works_item_1.png")'>
					<div class="portfolio_item_text">
						<h3 class="portfolio_item_heading">Wordpress 1</h3>
						<div class="portfolio_item_desc">Wordpress</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 portfolio_item mix portfolio_plugins" style='background-image: url("wp-content/themes/darta/assets/img/works_item_2.png")'>
					<div class="portfolio_item_text">
						<h3 class="portfolio_item_heading">Plugin 1</h3>
						<div class="portfolio_item_desc">Plugins</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 portfolio_item mix portfolio_vuejs" style='background-image: url("wp-content/themes/darta/assets/img/works_item_3.png")'>
					<div class="portfolio_item_text">
						<h3 class="portfolio_item_heading">Vue 1</h3>
						<div class="portfolio_item_desc">Vue.js</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 portfolio_item mix portfolio_webdesign" style='background-image: url("wp-content/themes/darta/assets/img/works_item_4.png")'>
					<div class="portfolio_item_text">
						<h3 class="portfolio_item_heading">Web Design 1</h3>
						<div class="portfolio_item_desc">Web design</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>