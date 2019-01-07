<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
	<title><?php wp_title(); ?></title>
  </head>
<body>

<header id="header">
<div>

	<div>
		<?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
	</div>

</div>
</header>

<section class="main_section">