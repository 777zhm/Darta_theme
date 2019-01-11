<?php
/**
 * Block Name: History
 *
 * This is the template that displays the history block.
 */

$image = get_field('image');
$heading = get_field('heading');
$editor = get_field('editor');
$buttontext = get_field('buttontext');

?>

<section>
	<div class="history_section" id="history">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<img class="img img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</div>
				<div class="col-md-7">
					<h2 class="section_heading left_red_border"><?php echo $heading; ?></h2>
					<div class="history_text"><?php echo $editor; ?></div>
					<button class="button first_button"><?php echo $buttontext; ?></button>
				</div>
			</div>
		</div>
	</div>
</section>