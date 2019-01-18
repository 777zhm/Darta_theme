<?php $image = get_field('image'); ?>
<section>
	<div class="calltoaction_section" style="background-image: url('<?php echo $image['url']; ?>');">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
					<h3 class="calltoaction_heading"><?php the_field('heading'); ?></h3>
					<div class="calltoaction_subheading"><?php the_field('subheading'); ?></div>
					<button class="button first_button"><?php the_field('buttontext'); ?></button>
				</div>
			</div>
		</div>
	</div>
</section>