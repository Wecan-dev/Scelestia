<?php 
/****************** Styles *****************/
function rosary_styles(){
	wp_enqueue_style('icon', get_stylesheet_directory_uri() . '/assets/images/fav.png' ); 
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.css' );
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style('icon-font', get_stylesheet_directory_uri() . '/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css' );
	wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/assets/vendor/animate/animate.css' );
	wp_enqueue_style('hamburgers', get_stylesheet_directory_uri() . '/assets/vendor/css-hamburgers/hamburgers.min.css' );
	wp_enqueue_style('daterangepicker', get_stylesheet_directory_uri() . '/assets/vendor/daterangepicker/daterangepicker.css' );
	wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/vendor/slick/slick.css' );
	wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/assets/vendor/slick/slick-theme.css' );
	wp_enqueue_style('lightbox2', get_stylesheet_directory_uri() . '/assets/vendor/lightbox2/css/lightbox.min.css' );
	wp_enqueue_style('util', get_stylesheet_directory_uri() . '/assets/css/util.css' );
	wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style('media', get_stylesheet_directory_uri() . '/assets/css/media.css' ); 

	wp_enqueue_script( 'jquerymin',get_bloginfo('stylesheet_directory') . '/assets/vendor/jquery/jquery-3.2.1.min.js', array( 'jquery' ) ); 
	wp_enqueue_script( 'animsition',get_bloginfo('stylesheet_directory') . '/assets/vendor/animsition/js/animsition.min.js', array( 'jquery' ) ); 
	wp_enqueue_script( 'popper',get_bloginfo('stylesheet_directory') . '/assets/vendor/bootstrap/js/popper.js', array( 'jquery' ) ); 
	wp_enqueue_script( 'bootstrapjs',get_bloginfo('stylesheet_directory') . '/assets/vendor/bootstrap/js/bootstrap.min.js', array( 'jquery' ) ); 
	wp_enqueue_script( 'select2',get_bloginfo('stylesheet_directory') . '/assets/vendor/select2/select2.min.js', array( 'jquery' ) );   
	wp_enqueue_script( 'slick',get_bloginfo('stylesheet_directory') . '/assets/vendor/slick/slick.min.js', array( 'jquery' ) ); 
	wp_enqueue_script( 'slick-custom',get_bloginfo('stylesheet_directory') . '/assets/js/slick-custom.js', array( 'jquery' ) ); 
	wp_enqueue_script( 'lightbox',get_bloginfo('stylesheet_directory') . '/assets/vendor/lightbox2/js/lightbox.min.js', array( 'jquery' ) ); 
	wp_enqueue_script( 'parallax',get_bloginfo('stylesheet_directory') . '/assets/vendor/parallax100/parallax100.js', array( 'jquery' ) );
	wp_enqueue_script( 'mainjs',get_bloginfo('stylesheet_directory') . '/assets/js/main.js', array( 'jquery' ) );  

}

add_action('wp_enqueue_scripts', 'rosary_styles');

/***************Functions theme ********************/

function theme_customize_register($wp_customize){

  $wp_customize->add_panel('panel1',
        array(
            'title' => 'Colecciones',
            'priority' => 1,
            )
        );
  require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer-descubre-mas.php';

}
add_action('customize_register','theme_customize_register');
