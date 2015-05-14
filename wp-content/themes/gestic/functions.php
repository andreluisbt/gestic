<?php
	require_once __DIR__ . '/security.php';
	require_once __DIR__ . '/controllers/controller-index.php';
	
	/*
	function gestic_name_scripts() {
		//wp_enqueue_style( 'style-name', get_stylesheet_uri() );
		wp_dequeue_script('jquery');
		wp_deregister_script('emoji');
		//wp_enqueue_script('jqueryx', get_template_directory_uri() . '/lib/jquery-2.1.3/jquery-2.1.3.min.js', array(), false, false );
	}
	add_action('wp_enqueue_scripts', 'gestic_name_scripts');
	
	
	function gestic_name_styles() {
		wp_dequeue_style('dashicons');
	}
	add_action('wp_enqueue_styles', 'gestic_name_styles');
	
	function gestic_styles() {
		wp_deregister_style('dashicons');
	}
	add_action('wp_print_styles', 'xxxxx');
	*/
	
	
	

function gestic_init(){
		
	wp_deregister_script('jquery');
	wp_deregister_script('dashicons');
	wp_deregister_style('admin-bar');
	
	wp_enqueue_script('jquery', get_template_directory_uri() . '/lib/jquery-2.1.3/jquery-2.1.3.min.js', array(), false, false );
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/lib/bootstrap-3.3.4/dist/js/bootstrap.min.js', array(), false, false );
	
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/lib/font-awesome-4.3.0/css/font-awesome.min.css', array(), false, false );
	
	wp_enqueue_script('jquery-mask', get_template_directory_uri() . '/lib/jquery-mask/dist/jquery.mask.min.js', array(), false, false );
	
	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), false, false );
	wp_enqueue_style('main-less', get_template_directory_uri() . '/style/less/main.less', array(), false, false );
	
	
	wp_enqueue_script('less', get_template_directory_uri() . '/lib/less-2.5.0/less.min.js', array(), false, false );
	
	
		
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_head', 'print_emoji_styles' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	//remove_action( 'admin_print_styles', 'print_emoji_styles' );
	
	
	//wp_dequeue_style('dashicons');
	
	
	//echo '<pre>';
	//var_dump(wp_scripts());die;
	
}
add_action('init', 'gestic_init');

	
	
/*	
	
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );
*/


	
	//wp_enqueue_scripts()
?>