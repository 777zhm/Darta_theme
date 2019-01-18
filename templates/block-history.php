<section>
	<div class="history_section" id="history">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<img class="img img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
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