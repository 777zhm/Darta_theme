<?php

add_action('acf/init', 'darta_acf_init');
function darta_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'blog',
			'title'				=> __('Blog'),
			'description'		=> __('A custom blog block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'blog', 'quote' ),
		));
	}
}



?>