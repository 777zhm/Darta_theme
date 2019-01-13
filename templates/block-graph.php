<?php
/**
 * Block Name: Graph
 *
 * This is the template that displays the graph block.
 */

$heading = get_field('heading');
$subheading = get_field('subheading');

?>
<section>
	<div class="graph_section" id="graph">
		<div class="text-center">
			<h2 class="section_heading"><?php echo $heading; ?></h2>
			<p class="section_subheading"><?php echo $subheading; ?></p>
			<div class="title_dot"></div>
		</div>
		<div class="timeline_box">
			<div class="timeline">
				<svg
				 xmlns="http://www.w3.org/2000/svg"
				 xmlns:xlink="http://www.w3.org/1999/xlink"
				 height="100%" width="100%" viewBox="0 0 1928 652"
				preserveAspectRatio="none"
				 >
					<path fill-rule="evenodd"  stroke="rgb(231, 76, 60)" stroke-width="3px" stroke-linecap="butt" stroke-linejoin="miter" fill="none"
					 d="M1.500,512.500 C1.500,512.500 619.000,232.887 1095.500,343.500 C1572.000,454.112 1909.000,51.330 1923.500,1.500 "/>
					<path class="svg_figure" fill-rule="evenodd"  opacity="0.102" fill="rgb(231, 76, 60)"
					 d="M1922.000,3.000 C1907.500,52.830 1570.500,455.612 1094.000,345.000 C617.500,234.387 -0.000,514.000 -0.000,514.000 L-0.000,651.499 L1920.000,651.499 C1920.000,651.499 1936.500,-46.831 1922.000,3.000 Z"/>
				</svg>
				<?php if( have_rows('persons') ): ?>
				<div class="timeline_items">
					<?php while( have_rows('persons') ): the_row(); 
					// vars
					$name = get_sub_field('name');
					$ocupation = get_sub_field('ocupation');
					$icon = get_sub_field('icon');
					
					?>
					<div class="timeline_item">
						<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
						<div class="timeline_item_text">
							<h4><?php echo $name; ?></h4>
							<p><?php echo $ocupation; ?></p>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>