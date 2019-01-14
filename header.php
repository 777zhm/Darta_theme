<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
		<title><?php wp_title(); ?></title>
	</head>
<body <?php body_class(); ?>>
	<header id="header">
		<div class="row justify-content-center">
			<div class="col-md-3 col-4">
				<div class="logotype_box">
					<img class="img img-fluid" src="<?php echo get_template_directory_uri().'/assets/img/logotype.png'?>" alt="logotype">
				</div>
			</div>
			<div class="col-md-9 col-8">
				<div class="main_menu">
					<?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
				</div>
				<div class="main_menu_toggler">
					<img class="img" src="<?php echo get_template_directory_uri().'/assets/img/main_menu_toggler.svg'?>" alt="main_menu_toggler">
				</div>
			</div>
		</div>	
	</header>
	<div id="content" class="site-content">