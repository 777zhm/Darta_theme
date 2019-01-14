<?php

add_action('init', 'custom_post_type');
function custom_post_type(){

	register_post_type('portfolio', array(
		'labels'             => array(
			'name'               => 'Portfolio', // Основное название типа записи
			'singular_name'      => 'project', // отдельное название записи типа Book
			'add_new'            => 'Add project',
			'add_new_item'       => 'Add new project',
			'edit_item'          => 'Edit project',
			'new_item'           => 'New project',
			'view_item'          => 'View project',
			'search_items'       => 'Search project',
			'not_found'          => 'Projects not found',
			'not_found_in_trash' => 'Projects not found in trash',
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
		'menu_icon'			 => 'dashicons-admin-links'
	) );

}

?>