<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
	<header id="header" class="single_post_header container-fluid" style="background-image:url('<?php the_field('header_image', 'theme_settings'); ?>')">
		<div class="row justify-content-center">
			<div class="col-md-3 col-4">
				<div class="logotype_box">
					<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					?> 
					<img class="img img-fluid" src="<?php echo $image[0]; ?>" alt="logotype">
				</div>
			</div>
			<div class="col-md-9 col-8">
				<div class="main_menu">
					<?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
				</div>
				<div class="main_menu_toggler">
					<img class="img" src="<?php assets_url('img/main_menu_toggler.svg') ?>" alt="main_menu_toggler">
				</div>
			</div>
		</div>	
	</header>
	<div id="content" class="site-content">