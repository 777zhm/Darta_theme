<?php
/**
 * Block Name: Numbers
 *
 * This is the template that displays the numbers block.
 */

$image = get_field('image');
$heading = get_field('heading');
$subheading = get_field('subheading');
?>

<section>
	<div class="numbers_section" style="background-image: url('<?php echo $image['url']; ?>');">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="numbers_header text-center">
						<h2 class="section_heading"><?php echo $heading; ?></h2>
						<p><?php echo $subheading; ?></p>
					</div>
				</div>
			</div>
			<?php if( have_rows('goals') ): ?>
			<div class="row justify-content-center text-center">
				<?php while( have_rows('goals') ): the_row(); 
					// vars
					$icon = get_sub_field('icon');
					$amount = get_sub_field('amount');
					$goal = get_sub_field('goal');
				?>
					<div class="col-md-2 col-4">
						<div class="numbers_item_box">
							<div class="numbers_item_icon_box">
								<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" />
							</div>
							<div class="numbers_item_number">
								<?php echo $amount; ?>
							</div>
							<div class="numbers_item_text">
								<?php echo $goal; ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>	
			<?php endif; ?>			
		</div>
	</div>
</section>