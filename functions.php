<?php 
add_action('after_setup_theme', 'ps_child_theme_setup');
function ps_child_theme_setup() {
	
	add_image_size('banner', 1280, 700, array('top', 'center')); // Large Thumbnail
	
	// init styles
	function ps_child_styles() {
		wp_register_style('parent-style', get_template_directory_uri() . '/style.css');
		wp_enqueue_style('parent-style'); // Enqueue it!
		
		wp_register_style('child-style', get_stylesheet_directory_uri() . '/css/custom-styles.css', array('parent-style'), '1.0', 'all');
		wp_enqueue_style('child-style'); // Enqueue it!
		
		wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,600italic,700,700italic|Source+Serif+Pro:400,600,700', 'style', '1.0', 'screen');
		
	}
	 add_action('wp_enqueue_scripts', 'ps_child_styles');
	
}
?>