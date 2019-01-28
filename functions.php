<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );


add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'main_menu' => 'Main menu',
		'lang_menu' => 'Language menu'
	) );
});

function assets_url( $pass ){
    echo get_template_directory_uri().'/assets/'.$pass;
}

remove_filter( 'the_content', 'wpautop' );

remove_filter( 'the_excerpt', 'wpautop' );

/*
 * Enqueue theme scripts and styles.
 */
function darta_scripts() {
    // Styles
    wp_enqueue_style( 'bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css', array(), '4.2.1' );
    wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri().'/assets/css/owl.carousel.min.css' );
    wp_enqueue_style( 'owl-carousel-theme-style', get_template_directory_uri().'/assets/css/owl.theme.default.min.css' );
    wp_enqueue_style( 'fontawesome-style', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1' );
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );

    // Scripts
	wp_dequeue_script('jquery');
	wp_deregister_script('jquery');

    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true );
    wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', array(), '1.14.6', true );
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array(), '4.2.1', true );

    wp_enqueue_script('mixitup-js', get_template_directory_uri()."/assets/js/mixitup.min.js", array('jquery'), '', true );
    wp_enqueue_script('mixitup-config-js', get_template_directory_uri()."/assets/js/mixitup_config.js", array('jquery'), '', true );

    wp_enqueue_script('owl-carousel-js', get_template_directory_uri()."/assets/js/owl.carousel.min.js", array('jquery'), '', true );
    wp_enqueue_script('owl-carousel-config-js', get_template_directory_uri()."/assets/js/owl.carousel_config.js", array('jquery'), '', true );

    wp_enqueue_script('main_js', get_template_directory_uri()."/assets/js/script.js", array('jquery'), '', true );

}
add_action( 'wp_enqueue_scripts', 'darta_scripts' );


/**
 * Add integrity/crossorigin for CDN theme styles.
 */
function darta_style_loader_tag( $html, $handle ) {
    $scripts_to_load = array(
        array(
            ( 'name' )      => 'bootstrap-style',
            ( 'integrity' ) => 'sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS',
        ),
        array(
            ( 'name' )      => 'fontawesome-style',
            ( 'integrity' ) => 'sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP',
        )
    );
    $key = array_search( $handle, array_column( $scripts_to_load, 'name' ) );
    if ( $key !== false ) {
        $html = str_replace( '/>', ' integrity=\'' . $scripts_to_load[$key]['integrity'] . '\' crossorigin=\'anonymous\' />', $html );
    }
    return $html;
}
add_filter( 'style_loader_tag', 'darta_style_loader_tag', 10, 2 );

/**
 * Add integrity/crossorigin for CDN theme scripts.
 */
function darta_script_loader_tag( $tag, $handle ) {
    $scripts_to_load = array(
        array(
            ( 'name' )      => 'jquery',
            ( 'integrity' ) => 'sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=',
        ),
        array(
            ( 'name' )      => 'popper-js',
            ( 'integrity' ) => 'sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut',
        ),
        array(
            ( 'name' )      => 'bootstrap-js',
            ( 'integrity' ) => 'sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k',
        )
    );
    $key = array_search( $handle, array_column( $scripts_to_load, 'name' ) );
    if ( $key !== false ) {
        $tag = str_replace( '></script>', ' integrity=\'' . $scripts_to_load[$key]['integrity'] . '\' crossorigin=\'anonymous\'></script>', $tag );
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'darta_script_loader_tag', 10, 2 );

if( function_exists('acf_add_options_page') ){
    $parent = acf_add_options_page(array(
        'page_title'    => 'Theme settings',
        'menu_title'    => 'Theme settings',
        'redirect'      => false,
        'menu_slug'     => 'theme-settings',
        'post_id' => 'theme_settings',
        'capability' => 'edit_posts',
        'position' => 30,
    ));
}

include_once 'includes/acf_reg_blocks.php';
include_once 'includes/post_types.php';
include_once 'includes/taxonomy_reg.php';
include_once 'includes/send.php';

?>
