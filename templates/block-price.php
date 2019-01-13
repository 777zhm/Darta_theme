<?php
/**
 * Block Name: Price
 *
 * This is the template that displays the price block.
 */

$heading = get_field('heading');
$subheading = get_field('subheading');

?>

<section>
	<div class="price_section" id="price">
		<div class="container">
			<div class="row">
				<div class="col-12">
						<div class="price_header text-center">
							<h2 class="section_heading"><?php echo $heading; ?></h2>
							<p><?php echo $subheading; ?></p>
							<div class="title_dot"></div>
						</div>
				</div>
			</div>
			<?php if( have_rows('pricepackages') ): ?>
			<div class="row justify-content-center">
				<?php while( have_rows('pricepackages') ): the_row(); 
					// vars
					$heading1 = get_sub_field('heading1');
					$price = get_sub_field('price');
					$editor = get_sub_field('editor');
					$buttontext = get_sub_field('buttontext');
				?>
				<div class="col-lg-4 col-md-6 price_item">
					<div class="price_item_header">
						<h3><?php echo $heading1; ?></h3>
						<div class="price_item_icon_box">
							<div class="circle_decorative">
								<div class="circle_price">&#36;<?php echo $price; ?><br>
								</div>
							</div>
						</div>
					</div>
					<div class="price_item_footer">
						<?php echo $editor; ?>
						<button class="button first_button"><?php echo $buttontext; ?></button>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>