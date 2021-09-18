<?php



function add_stylesheet(){
	wp_enqueue_style(
		'main',
		get_template_directory_uri().'/assets/style.css',
		array(),
	);
}
add_action('qp_enqueue_scripts','add_stylesheet');
//wp_enqueue_scriptフックにadd_stylesheet関数を登録