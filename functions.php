<?php 
add_action('after_setup_theme', 'ps_child_theme_setup');
function ps_child_theme_setup() {
	
	// init styles
	function ps_child_styles() {
		wp_register_style('parent-style', get_template_directory_uri() . '/style.css');
		wp_enqueue_style('parent-style'); // Enqueue it!
		
		wp_register_style('child-style', get_stylesheet_directory_uri() . '/css/custom-styles.css', array('parent-style'), '1.0', 'all');
		wp_enqueue_style('child-style'); // Enqueue it!
		
	}
	 add_action('wp_enqueue_scripts', 'ps_child_styles');
	
}
?>