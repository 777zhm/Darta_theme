<?php
/**
 * Block Name: Slider
 *
 * This is the template that displays the slider block.
 */
?>
<section>
	<div class="slider_section">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2 class="section_heading"><?php the_field('heading'); ?></h2>
					<p><?php the_field('subheading'); ?></p>
					<div class="title_dot"></div>
				</div>
			</div>
			<div class="row">
				<?php if( have_rows('slides') ): ?>
			
					<div class="col-md-6 col-12">
						<div class="slider_slide_block">
							<div class="owl-carousel owl-theme">
								<?php
								while( have_rows('slides') ): the_row(); 
								// vars		
								$icon = get_sub_field('icon');
								?>
								<div class="slider_item text-center">
									<div class="square_decorative_box">
										<div class="square_decorative">
											<div class="square_icon_box">
												<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
											</div>
										</div>
									</div>
									<h3 class="slider_item_heading"><?php the_sub_field('heading1'); ?></h3>
									<div class="slider_item_text">
										<?php the_sub_field('editor'); ?>
									</div>
									<button class="button first_button">Read more</button>
								</div>
								<?php endwhile; ?>
							</div>
						</div>
					</div>	
				<?php endif; ?>
				<div>
				<?php if( have_rows('slides') ):
					$slide_number = 0;
					while( have_rows('slides') ): the_row(); 
					$image = get_sub_field('image');
					?>
					<div class="slider_slide_bg <?php echo 'slide_'.$slide_number ; ?>" style="background-image: url('<?php echo $image['url']; ?>');"></div>
					<?php
					$slide_number++; 
					endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>