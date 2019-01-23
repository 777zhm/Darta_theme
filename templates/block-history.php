<?php $image = get_field('image'); ?>
<section>
	<div class="history_section" id="history">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<?php if($image): ?>
					<img class="img img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<div class="col-md-7">
					<h2 class="section_heading left_red_border"><?php the_field('heading'); ?></h2>
					<div class="history_text"><?php the_field('editor'); ?></div>
					<button class="button first_button"><?php the_field('buttontext'); ?></button>
				</div>
			</div>
		</div>
	</div>
</section>