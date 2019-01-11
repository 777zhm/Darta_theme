<?php
/**
 * Block Name: Mainscreen
 *
 * This is the template that displays the mainscreen block.
 */

$image = get_field('image');
$heading = get_field('heading');
$subheading = get_field('subheading');
$editor = get_field('editor');
$buttontext1 = get_field('buttontext1');
$buttontext2 = get_field('buttontext2');

?>

<section>
	<div class="mainscreen_section" style="background-image: url('<?php echo $image['url']; ?>');">
		<div class="container-fluid">
			<div class="row justify-content-center text-center">
				<div class="col-md-12">
					<p class="mainscreen_subheading"><?php echo $subheading; ?></p>
					<h1 class="mainscreen_heading"><?php echo $heading; ?></h1>
					<div class="title_dot"></div>
				</div>
			</div>
			<div class="row justify-content-center text-center">
				<div class="col-md-6">
					<div class="mainscreen_text"><?php echo $editor; ?></div>
				</div>
			</div>
			<div class="row justify-content-center text-center mainscreen_button_block">
				<div class="col-sm-6 button_righted ">
					<button class="button first_button"><?php echo $buttontext1; ?></button>
				</div>
				<div class="col-sm-6 button_lefted">
					<button class="button second_button"><?php echo $buttontext2; ?></button>
				</div>
			</div>
		</div>
		<div class="triangle_block">
			<div class="text-center triangle_box">
				<div class="two_triangles">
					<div class="circle_decorative" id="circle_decorative_anchor">
						<img class="circle_decorative_icon" src="<?php echo get_template_directory_uri().'/assets/img/mainscreen_icon_1.png'?>" alt="mainscreen_icon_1">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>