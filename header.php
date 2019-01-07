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
    <div class="row justify-content-center text-center">
      <div class="col-12 text-center">
        <div class="logotype_box">
          <img src="<?php echo get_template_directory_uri().'/assets/img/logotype.png'?>" alt="logotype">
         
        </div>
        <div class="main_menu">
          <?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
        </div>
      </div>
    </div>	
  </header>
