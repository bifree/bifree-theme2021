<?php

//サムネイル表示
add_theme_support('post-thumbnails');

function add_stylesheet(){
	wp_enqueue_style(
		'main',
		get_template_directory_uri().'/assets/style.css',
		array(),
	);
}
add_action('qp_enqueue_scripts','add_stylesheet');
//wp_enqueue_scriptフックにadd_stylesheet関数を登録

// カスタムメニュー設定
register_nav_menu( 'header-nav', ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav', ' フッターナビゲーション ' );