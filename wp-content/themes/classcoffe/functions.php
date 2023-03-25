<?php

function temalink () {

    wp_enqueue_style('bootstrap-1', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('awesome-1', get_template_directory_uri().'/assets/css/font-awesome.css');
    wp_enqueue_style('templatemo-1', get_template_directory_uri().'/assets/css/templatemo-klassy-cafe.css');
    wp_enqueue_style('carousel-1', get_template_directory_uri().'/assets/css/owl-carousel.css');
    wp_enqueue_style('lightbox-1', get_template_directory_uri().'/assets/css/lightbox.css');
    wp_enqueue_style('fonts-1', get_template_directory_uri().'/https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');
    wp_enqueue_style('fonts-1', get_template_directory_uri().'/https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap');

    wp_enqueue_script( 'jquery-name', get_template_directory_uri() . '/assets/js/jquery-2.1.0.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'popper-name', get_template_directory_uri() . '/assets/js/popper.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-name', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'carousel-name', get_template_directory_uri() . '/assets/js/owl-carousel.js', array(), '1.0.0', true );
    wp_enqueue_script( 'accordions-name', get_template_directory_uri() . '/assets/js/accordions.js', array(), '1.0.0', true );
    wp_enqueue_script( 'datepicker-name', get_template_directory_uri() . '/assets/js/datepicker.js', array(), '1.0.0', true );
    wp_enqueue_script( 'scrollreveal-name', get_template_directory_uri() . '/assets/js/scrollreveal.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'waypoints-name', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'counterup-name', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'imgfix-name', get_template_directory_uri() . '/assets/js/imgfix.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'slick-name', get_template_directory_uri() . '/assets/js/slick.js', array(), '1.0.0', true );
    wp_enqueue_script( 'lightbox-name', get_template_directory_uri() . '/assets/js/lightbox.js', array(), '1.0.0', true );
    wp_enqueue_script( 'isotope-name', get_template_directory_uri() . '/assets/js/isotope.js', array(), '1.0.0', true );
    wp_enqueue_script( 'custom-name', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true );

}



add_action( 'wp_enqueue_scripts', 'temalink' );



/*acf*/
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/assets/acf/';
    return $path;
}


add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/assets/acf/';
    return $dir;
    
}

//add_filter('acf/settings/show_admin', '__return_false');

include_once( get_stylesheet_directory() . '/assets/acf/acf.php' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Site Ayarları',
		'menu_title'	=> 'Site Ayarları',
		'menu_slug' 	=> 'site-ayarlari',
		'capability'	=> 'manage_options',
		'redirect'		=> false
	));
	
	
	acf_add_options_page(array(
		'page_title' 	=> 'Ana Sayfa Ayarları',
		'menu_title'	=> 'Ana Sayfa Ayarları',
		'menu_slug' 	=> 'anasayfa-ayarlari',
		'parent_slug'	=> 'site-ayarlari',
		'capability'	=> 'manage_options',
		'redirect'		=> false
	));
	
	
}


















?>