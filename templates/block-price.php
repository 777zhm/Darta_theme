<section>
	<div class="price_section" id="price">
		<div class="container">
			<div class="row">
				<div class="col-12">
						<div class="price_header text-center">
							<h2 class="section_heading"><?php the_field('heading'); ?></h2>
							<p><?php the_field('subheading'); ?></p>
							<div class="title_dot"></div>
						</div>
				</div>
			</div>
			<?php if( have_rows('pricepackages') ): ?>
			<div class="row justify-content-center">
				<?php while( have_rows('pricepackages') ): the_row(); ?>
				<div class="col-lg-4 col-md-6 price_item">
					<div class="price_item_header">
						<h3><?php the_sub_field('heading1'); ?></h3>
						<div class="price_item_icon_box">
							<div class="circle_decorative">
								<div class="circle_price">&#36;<?php the_sub_field('price'); ?><br>
								</div>
							</div>
						</div>
					</div>
					<div class="price_item_footer">
						<?php the_sub_field('editor'); ?>
						<button class="button first_button"><?php the_sub_field('buttontext'); ?></button>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>