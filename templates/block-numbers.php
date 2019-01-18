<?php $image = get_field('image'); ?>

<section>
	<div class="numbers_section" style="background-image: url('<?php echo $image['url']; ?>');">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="numbers_header text-center">
						<h2 class="section_heading"><?php the_field('heading'); ?></h2>
						<p><?php the_field('subheading');?></p>
					</div>
				</div>
			</div>
			<?php if( have_rows('goals') ): ?>
			<div class="row justify-content-center text-center">
				<?php while( have_rows('goals') ): the_row(); 
					$icon = get_sub_field('icon');
				?>
					<div class="col-md-2 col-4">
						<div class="numbers_item_box">
							<div class="numbers_item_icon_box">
								<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" />
							</div>
							<div class="numbers_item_number">
								<?php the_sub_field('amount'); ?>
							</div>
							<div class="numbers_item_text">
								<?php echo the_sub_field('goal'); ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>	
			<?php endif; ?>			
		</div>
	</div>
</section>