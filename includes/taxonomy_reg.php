<?php

add_action('init', 'create_taxonomy');
function create_taxonomy(){
	// список параметров: http://wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('portfolio_types', array('portfolio'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Portfolio types',
			'singular_name'     => 'Portfolio types',
			'search_items'      => 'Search Portfolio types',
			'all_items'         => 'All Portfolio types',
			'view_item '        => 'View Portfolio type',
			'parent_item'       => 'Parent Portfolio type',
			'parent_item_colon' => 'Parent Portfolio type:',
			'edit_item'         => 'Edit Portfolio type',
			'update_item'       => 'Update Portfolio type',
			'add_new_item'      => 'Add New Portfolio type',
			'new_item_name'     => 'New Portfolio type Name',
			'menu_name'         => 'Portfolio types',
		),
		'description'           => '', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		'hierarchical'          => false,
		'update_count_callback' => '',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );
}