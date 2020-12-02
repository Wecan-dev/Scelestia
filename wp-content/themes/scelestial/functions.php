<?php 
/****************** Styles *****************/
function rosary_styles(){
	wp_enqueue_style('icon', get_stylesheet_directory_uri() . '/assets/images/fav.png' );
	wp_enqueue_style('gstatic', "https://fonts.gstatic.com" );
	wp_enqueue_style('fonts.googleapis', "https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" );
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
			'title' => 'Home',
			'priority' => 1,
		)
	);
	require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer-banner.php';
	require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer-comoda.php';

	$wp_customize->add_panel('panel4',
		array(
			'title' => 'Descubre mas',
			'priority' => 4,
		)
	);
	require_once trailingslashit( get_template_directory() ) . 'inc/home/customizer-descubre-mas.php';

}
add_action('customize_register','theme_customize_register');

/***************** FNT General ************/

require_once trailingslashit( get_template_directory() ) . 'inc/fnc/fnc.php';

/***************** Local field group ************/

require_once trailingslashit( get_template_directory() ) . 'inc/fnc/local-field-group.php';

/*********** ITEMS Banner***********/
function custom_post_type_Items_banner() {

  $labels = array(
    'name'                  => _x( 'Items Banner', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Items Banner', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Items Banner', 'text_domain' ),
    'name_admin_bar'        => __( 'Items Banner', 'text_domain' ),
    'archives'              => __( 'Archives', 'text_domain' ),
    'attributes'            => __( 'Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Main Items Banner', 'text_domain' ),
    'all_items Banner'             => __( 'All Items Banner', 'text_domain' ),
    'add_new_item'          => __( 'Add New Items Banner', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Items Banner', 'text_domain' ),
    'edit_item'             => __( 'Edit Items Video', 'text_domain' ),
    'update_item'           => __( 'Update Items Banner', 'text_domain' ),
    'view_items Banner'            => __( 'See Items Banner', 'text_domain' ),
    'search_items Banner'          => __( 'Search Items Banner', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'It is not in the trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set Featured Image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove Featured Image', 'text_domain' ),
    'use_featured_image'    => __( 'Use Featured Image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert Into Item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items Banner_list'            => __( 'items Banner List', 'text_domain' ),
    'items Banner_list_navigation' => __( 'items Banner List Navigation', 'text_domain' ),
    'filter_items Banner_list'     => __( 'filter Items Banner List', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Items Banner', 'text_domain' ),
    'description'           => __( 'Items Banner image', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'custom-fields' ),
    'taxonomies'            => array( '' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-images-alt',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page', 
  );
  register_post_type( 'Items Banner', $args );

}
add_action( 'init', 'custom_post_type_Items_banner', 0 );
