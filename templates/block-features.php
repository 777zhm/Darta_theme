<section>
	<div class="features_section" id="anchor_target">
		<div class="container">
			<?php if( have_rows('features') ): ?>
			<div class="row justify-content-center text-center">
				<?php while( have_rows('features') ): the_row(); 
					$icon = get_sub_field('icon');
				?>
				<div class="col-md-3 col-sm-6 features_item">
				 <div class="feutures_item_icon_block">
					<div class="features_item_icon_box">
						<div class="features_item_icon">
							<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>">
						</div>
					</div>
						<h3 class="features_item_heading"><?php the_sub_field('heading'); ?></h3>
					</div>
					<p class="features_item_text"><?php the_sub_field('editor'); ?></p>
				</div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>