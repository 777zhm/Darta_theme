<?php

add_action('acf/init', 'my_acf_init');

function my_acf_init() {
    
    // check function exists
    if( function_exists('acf_register_block') ) {
        // register blocks
        acf_register_block(array(
            'name'              => 'blog',
            'title'             => __('Blog darta'),
            'description'       => __('A custom blog block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'welcome-write-blog',
            'keywords'          => array( 'blog' ),
        ));

        acf_register_block(array(
            'name'              => 'calltoaction',
            'title'             => __('Calltoaction darta'),
            'description'       => __('A custom calltoaction block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'editor-contract',
            'keywords'          => array( 'calltoaction' ),
        ));

        acf_register_block(array(
            'name'              => 'features',
            'title'             => __('Features darta'),
            'description'       => __('A custom features block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-page',
            'keywords'          => array( 'feature' ),
        ));

        acf_register_block(array(
            'name'              => 'form',
            'title'             => __('Form darta'),
            'description'       => __('A custom form block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'forms',
            'keywords'          => array( 'form' ),
        ));

        acf_register_block(array(
            'name'              => 'graph',
            'title'             => __('Graph darta'),
            'description'       => __('A custom graph block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-users',
            'keywords'          => array( 'graph' ),
        ));

        acf_register_block(array(
            'name'              => 'history',
            'title'             => __('History darta'),
            'description'       => __('A custom history block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'media-document',
            'keywords'          => array( 'history' ),
        ));

        acf_register_block(array(
            'name'              => 'mainscreen',
            'title'             => __('Mainscreen darta'),
            'description'       => __('A custom mainscreen block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-home',
            'keywords'          => array( 'mainscreen' ),
        ));

        acf_register_block(array(
            'name'              => 'numbers',
            'title'             => __('Numbers darta'),
            'description'       => __('A custom numbers block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-status',
            'keywords'          => array( 'numbers' ),
        ));

        acf_register_block(array(
            'name'              => 'portfolio',
            'title'             => __('Portfolio darta'),
            'description'       => __('A custom portfolio block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'images-alt',
            'keywords'          => array( 'portfolio' ),
        ));

        acf_register_block(array(
            'name'              => 'price',
            'title'             => __('Price darta'),
            'description'       => __('A custom price block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-page',
            'keywords'          => array( 'price' ),
        ));

        acf_register_block(array(
            'name'              => 'services',
            'title'             => __('Services darta'),
            'description'       => __('A custom services block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'editor-help',
            'keywords'          => array( 'service' ),
        ));        

        acf_register_block(array(
            'name'              => 'slider',
            'title'             => __('Slider darta'),
            'description'       => __('A custom slider block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'slides',
            'keywords'          => array( 'slider' ),
        ));

        acf_register_block(array(
            'name'              => 'technologies',
            'title'             => __('Technologies darta'),
            'description'       => __('A custom technologies block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-site',
            'keywords'          => array( 'technology', 'logo' ),
        ));
    }
}

function custom_block_render_callback( $block ) {
    // Remove "acf/" from name so we can use a path-friendly slug
    $slug = str_replace( 'acf/', '', $block['name'] );
    
    // include a template part from within the "template-parts/block" folder
    if( file_exists( STYLESHEETPATH . "/templates/block-{$slug}.php" ) ) {
        include( STYLESHEETPATH . "/templates/block-{$slug}.php" );
    }
}