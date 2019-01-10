<?php

add_action('init', 'custom_post_type');
function custom_post_type(){

	register_post_type('portfolio', array(
		'labels'             => array(
			'name'               => 'portfolio', // Основное название типа записи
			'singular_name'      => 'portfolio item', // отдельное название записи типа Book
			'add_new'            => 'Add portfolio item',
			'add_new_item'       => 'Add new portfolio item',
			'edit_item'          => 'Edit portfolio item',
			'new_item'           => 'New portfolio item',
			'view_item'          => 'View portfolio item',
			'search_items'       => 'Search portfolio item',
			'not_found'          => 'Portfolio items not found',
			'not_found_in_trash' => 'Portfolio items not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Portfolio'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 57,
		'supports'           => array('title','editor','thumbnail'),
		'menu_icon'			 => 'dashicons-images-alt'
	) );

}

?>