<?php

add_action('acf/init', 'my_acf_init');

function my_acf_init() {
    
    // check function exists
    if( function_exists('acf_register_block') ) {
        // register a testimonial block
        acf_register_block(array(
            'name'              => 'mainscreen_block',
            'title'             => __('Mainscreen darta'),
            'description'       => __('A custom testimonial block.'),
         //   'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        acf_register_block(array(
            'name'              => 'features_block',
            'title'             => __('Features darta'),
            'description'       => __('A custom testimonial block.'),
         //   'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        acf_register_block(array(
            'name'              => 'history_block',
            'title'             => __('History darta'),
            'description'       => __('A custom testimonial block.'),
         //   'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        acf_register_block(array(
            'name'              => 'services_block',
            'title'             => __('Services darta'),
            'description'       => __('A custom testimonial block.'),
         //   'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        acf_register_block(array(
            'name'              => 'portfolio_block',
            'title'             => __('Portfolio darta'),
            'description'       => __('A custom testimonial block.'),
         //   'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        acf_register_block(array(
            'name'              => 'slider_block',
            'title'             => __('Slider darta'),
            'description'       => __('A custom testimonial block.'),
         //   'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        acf_register_block(array(
            'name'              => 'numbers_block',
            'title'             => __('Numbers darta'),
            'description'       => __('A custom testimonial block.'),
         //   'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        acf_register_block(array(
            'name'              => 'price_block',
            'title'             => __('Price darta'),
            'description'       => __('A custom testimonial block.'),
         //   'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        acf_register_block(array(
            'name'              => 'team_block',
            'title'             => __('Team darta'),
            'description'       => __('A custom testimonial block.'),
         //   'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        acf_register_block(array(
            'name'              => 'partners_block',
            'title'             => __('Partners darta'),
            'description'       => __('A custom testimonial block.'),
         //   'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        acf_register_block(array(
            'name'              => 'blog_block',
            'title'             => __('Blog darta'),
            'description'       => __('A custom testimonial block.'),
         //   'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        acf_register_block(array(
            'name'              => 'form_block',
            'title'             => __('Form darta'),
            'description'       => __('A custom testimonial block.'),
         //   'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        acf_register_block(array(
            'name'              => 'calltoaction_block',
            'title'             => __('Calltoaction darta'),
            'description'       => __('A custom testimonial block.'),
           'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

    }
}


function custom_block_render_callback( $block ) {
    // Remove "acf/" from name so we can use a path-friendly slug
    $slug = str_replace( 'acf/', '', $block['name'] );
    
    // include a template part from within the "template-parts/block" folder
    if( file_exists( STYLESHEETPATH . "/blocks/templates/{$slug}.php" ) ) {
        include( STYLESHEETPATH . "/blocks/templates/{$slug}.php" );
    }
}

