<?php
/**
 * Block Name: Slider
 *
 * This is the template that displays the slider block.
 */

$heading = get_field('heading');
$subheading = get_field('subheading');
$image1 = get_field('image1');
$image2 = get_field('image2');
$image3 = get_field('image3');

?>
<section>
	<div class="slider_section">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2 class="section_heading"><?php echo $heading; ?></h2>
					<p><?php echo $subheading; ?></p>
					<div class="title_dot"></div>
				</div>
			</div>

			<div class="row">
				<?php if( have_rows('slides') ): ?>
					<div class="col-md-6 col-12">
						<div class="slider_slide_block">
							<div class="owl-carousel owl-theme">
								<?php while( have_rows('slides') ): the_row(); 
								// vars
								$heading1 = get_sub_field('heading1');
								$icon = get_sub_field('icon');
								$editor = get_sub_field('editor');
								?>
								<div class="slider_item text-center">
									<div class="square_decorative_box">
										<div class="square_decorative">
											<div class="square_icon_box">
												<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
											</div>
										</div>
									</div>
									<h3 class="slider_item_heading"><?php echo $heading1; ?></h3>
									<div class="slider_item_text">
										<?php echo $editor; ?>
									</div>
									<button class="button first_button">Read more</button>
								</div>
								<?php endwhile; ?>
							</div>
						</div>
					</div>	
				<?php endif; ?>
				<div>
					<!-- Owl carousel indexes 0,2,3,4 - classes are slide_0, slide_2, slide_n -->

					<div class="slider_slide_bg slide_0 slide_2" src="<?php echo $image1['url']; ?>"></div>
					<div class="slider_slide_bg slide_3" src="<?php echo $image2['url']; ?>"></div>
					<div class="slider_slide_bg slide_4" src="<?php echo $image3['url']; ?>"></div>
				</div>
			</div>

		</div>
	</div>
</section>