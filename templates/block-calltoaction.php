<?php
/**
 * Block Name: Call to action
 *
 * This is the template that displays the Call to action block.
 */

$image = get_field('image');
$heading = get_field('heading');
$subheading = get_field('subheading');
$buttontext = get_field('buttontext');

?>
<section>
	<div class="calltoaction_section" style="background-image: url('<?php echo $image['url']; ?>');">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
					<h3 class="calltoaction_heading"><?php echo $heading; ?></h3>
					<div class="calltoaction_subheading"><?php echo $subheading; ?></div>
					<button class="button first_button"><?php echo $buttontext; ?></button>
				</div>
			</div>
		</div>
	</div>
</section>