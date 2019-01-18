<?php $image = get_field('image'); ?>


<section>
	<div class="services_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7 text-right services_block">
					<h2 class="section_heading right_red_border services_heading"><?php the_field('heading'); ?></h2>
					<?php if( have_rows('services') ): ?>
						<?php while( have_rows('services') ): the_row(); 
							$icon = get_sub_field('icon'); ?>
						<div class="row service_item">
							<div class="col service_item_text">
								<h3 class="service_item_heading"><?php the_sub_field('subheading'); ?></h3>
								<?php the_sub_field('editor'); ?>
							</div>
							<div class="service_item_icon_box">
								<div class="circle_decorative">
									<img class="circle_decorative_icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
								</div>
							</div>
						
						</div>
						<?php endwhile; ?>	
					<?php endif; ?>					
				</div>
				<div class="col-md-5 services_block_image" style="background-image: url('<?php echo $image['url']; ?>');"></div>
			</div>
		</div>
	</div>
</section>



