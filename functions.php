<?php 
show_admin_bar( false );

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
	
	wp_enqueue_style( 'style-name1', get_template_directory_uri().'/font/GothamPro/stylesheet.css' );
//	wp_enqueue_style( 'slick_css', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'style-name2', get_template_directory_uri().'/slick/slick.css' );
	wp_enqueue_style( 'style-name3', get_template_directory_uri().'/slick/slick-theme.css' );
		wp_enqueue_style( 'style-name4', get_template_directory_uri().'/css/css/demo.css' );
		wp_enqueue_style( 'style-name5', get_template_directory_uri().'/css/css/noJS.css' );
		wp_enqueue_style( 'style-name6', get_template_directory_uri().'/css/css/style.css' );
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
//	wp_enqueue_script('jquery_js', get_template_directory_uri().'/js/jquery-3.3.1.min.js');
		wp_enqueue_script('jquery_js', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');
	wp_enqueue_script('jquery_js11', get_template_directory_uri().'/slick/slick.min.js');
//	wp_enqueue_script('slick_js', get_template_directory_uri().'/js/slick.js');
//	wp_enqueue_script('slick_js1', get_template_directory_uri().'/js/imagesloaded.pkgd.min.js');
//	wp_enqueue_script('masonry2', get_template_directory_uri().'/js/masonry.pkgd.min.js');	
	//wp_enqueue_script('masonry3', get_template_directory_uri().'/js/salvattore.min.js');	
	wp_enqueue_script('jquery-imagefill', get_template_directory_uri().'/js/jquery-imagefill.js');	
		
		wp_enqueue_script('script3', get_template_directory_uri().'/js/js/jquery.masonry.min.js', '', '', true);	
wp_enqueue_script('script2', get_template_directory_uri().'/js/js/jquery.history.js', '', '', true);	
	wp_enqueue_script('script10', get_template_directory_uri().'/js/js/js-url.min.js', '', '', true);
	wp_enqueue_script('script4', get_template_directory_uri().'/js/js/jquerypp.custom.js', '', '', true);
		wp_enqueue_script('script5', get_template_directory_uri().'/js/js/modernizr.custom.70736.js');
		
//	wp_enqueue_script('script6', get_template_directory_uri().'/js/js/modernizr.custom.70736.js', '', '', true);
wp_enqueue_script('script1', get_template_directory_uri().'/js/js/gamma.js', '', '', true);	
	//wp_register_script('scripts', get_template_directory_uri().'/js/script.js', false, false, true);
	//wp_enqueue_script('scripts');
	wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', '', '', true);	

}

add_action('get_header', 'my_filter_head'); 
function my_filter_head() {
	remove_action('wp_head', '_admin_bar_bump_cb');  
} 

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu2' );
}
add_action( 'wp_head', 'action_function_name_11' );
function action_function_name_11(){
	echo '<meta name="viewport" content="width=device-width">';
	echo '<link rel="shortcut icon" href="';
	echo get_stylesheet_directory_uri();
	echo '/img/photo.ico" />';
}

add_theme_support( 'post-thumbnails' );

?>