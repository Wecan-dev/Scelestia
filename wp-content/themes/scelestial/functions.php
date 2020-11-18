<?php 
add_theme_support('woocommerce');
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1568, 9999 );
the_post_thumbnail( array(100,100) ); 


function my_theme_setup() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );


//Compatibilidad con galerías a partir de WooCommerce 3.0>
add_action( 'after_setup_theme', 'yourtheme_setup' );
function yourtheme_setup() {
add_theme_support( 'wc-product-gallery-slider' );
}
/**
 * Declare WooCommerce Support
 */
function oblique_woocommerce_support() {
	add_theme_support( 'woocommerce' );
	// add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'oblique_woocommerce_support' );
//Soporte para lenguajes de marcado, en estos momentos HTML5
$markup = array( 'search-form', 'comment-form', 'comment-list', );
add_theme_support( 'html5', $markup );

if( !is_admin()){
   wp_deregister_script('jquery');
   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false, '');
   wp_enqueue_script('jquery');
}

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 8;' ), 10 );

add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
function jk_related_products_args( $args ) {
$args['posts_per_page'] = 3;  // se muestran 4 productos
$args['columns'] = 3; // se muestran en columnas de dos en dos
return $args;
}
add_theme_support('category-thumbnails');

add_filter( 'woocommerce_add_to_cart_fragments', 'actualizar_minicarro_ajax', 10, 1 );
function actualizar_minicarro_ajax( $fragments ) {

    $fragments['p.mini-cart'] = '<p class="mini-cart">' . WC()->cart->get_cart_contents_count() . '</p>';

    return $fragments;

}

// Register Custom Post Type
function Banner() {

	$labels = array(
		'name'                  => _x( 'Banner', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Banner', 'apk' ),
		'name_admin_bar'        => __( 'Post Type', 'apk' ),
		'archives'              => __( 'Item Archives', 'apk' ),
		'attributes'            => __( 'Item Attributes', 'apk' ),
		'parent_item_colon'     => __( 'Parent Item:', 'apk' ),
		'all_items'             => __( 'All Items', 'apk' ),
		'add_new_item'          => __( 'Add New Item', 'apk' ),
		'add_new'               => __( 'Add New', 'apk' ),
		'new_item'              => __( 'New Item', 'apk' ),
		'edit_item'             => __( 'Edit Item', 'apk' ),
		'update_item'           => __( 'Update Item', 'apk' ),
		'view_item'             => __( 'View Item', 'apk' ),
		'view_items'            => __( 'View Items', 'apk' ),
		'search_items'          => __( 'Search Item', 'apk' ),
		'not_found'             => __( 'Not found', 'apk' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'apk' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'apk' ),
		'items_list'            => __( 'Items list', 'apk' ),
		'items_list_navigation' => __( 'Items list navigation', 'apk' ),
		'filter_items_list'     => __( 'Filter items list', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'Banner', 'apk' ),
		'description'           => __( 'Post Type Description', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banner', $args );

}
add_action( 'init', 'Banner', 0 );

/*widget*/ 


function sbuscador() {
	register_sidebar(
		array(
			'name'          => __( 'sbuscador' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Widget buscador'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	
}
add_action( 'widgets_init', 'sbuscador' );


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