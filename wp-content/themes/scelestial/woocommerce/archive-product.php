<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
<div class="category-page" >
		<div class="row no-gutters">
			<div class="col">
				 <div class="tab-header">
        <div class="heading-title">
        <div class="headin-title-productos">
              
                <h3 style="color: black;
    padding: 30px;
    font-weight: bold;
    margin-top: 1%;" class="title-text"><?php echo get_queried_object()->name; ?></h3> 
            </div>        </div>         
    </div>
			</div>
		</div>
		<div >
			<div class="row no-gutters">
				<div class="col-md-12 ">

<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );?>

	<section class="colecciones ">
		<h6>ACERCA DE</h6>
		<h3 style="margin-bottom: 60px;"><?php echo get_queried_object()->name; ?><br>
		</h3>

		<div class="multiple-items">
			<?php 
			$category_name = get_queried_object()->slug; 
			$args = 
			array(
				'post_type' => 'product',      
				'post_status' => 'publish',
				'tax_query' => array(
                'relation'=>'AND', // 'AND' 'OR' ...
                array(
      	          'taxonomy'        => 'product_cat',
      	          'field'           => 'slug',
      	          'terms'           => array($category_name),
      	          'operator'        => 'IN',
                )),
            );	?>		
			<?php $loop = new WP_Query( $args ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;?>	
			<div class="block4 card-product">
				<img src="<?php the_post_thumbnail_url('full');?>">
				<div class="text-product">
					<h5><?php the_title() ?></h5>
					<p><?php echo $product->get_price_html(); ?></p>
					<div class="shop-btn">
						<a href="<?php the_permalink(); ?>">
							COMPRAR
						</a>
					</div>
				</div>
				<div class="block2-overlay trans-0-4">
					<a href="?add_to_wishlist=<?php echo get_the_ID(); ?>" class="block2-btn-addwishlist hov-pointer trans-0-4">
						<i class="fa fa-heart" aria-hidden="true"></i>
						<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
					</a>

					<div class="block2-btn-addcart trans-0-4">
						<!-- Button -->
						<button class="btn-oficial2">
							<a href="<?php the_permalink(); ?>">VER MÁS</a>
						</button>
					</div>
				</div>
			</div>
			
			<?php endwhile; ?>

		</div>
	</section>


<?php  get_template_part('partials/colecciones/descubre-mas');

get_footer( 'shop' );
