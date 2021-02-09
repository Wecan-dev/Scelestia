<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
		<section class="details" style="padding-top: 100px; padding-bottom: 100px;">
		<div class="container">
		  <!--       Detail Product-->
		  <div class="row no-gutters">
			<!--               picture product-->
			<div class=" col-md-6">

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>
</div>
<div class=" col-md-6">
	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>
</div>


			  
	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>
</div>
</section>
</div>
</div>
<table class="woocommerce-product-attributes shop_attributes">
	<?php foreach ( $product_attributes as $product_attribute_key => $product_attribute ) : ?>
		<tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--<?php echo esc_attr( $product_attribute_key ); ?>">
			<th class="woocommerce-product-attributes-item__label"><?php echo wp_kses_post( $product_attribute['label'] ); ?></th>
			<td class="woocommerce-product-attributes-item__value"><?php echo wp_kses_post( $product_attribute['value'] ); ?></td>
		</tr>
	<?php endforeach; ?>
</table>
<section class="colecciones">
		<!--	<h6>ACERCA DE</h6> -->
			<h3 style="margin-bottom: 60px;">Productos Relacionados<br>
			</h3>
				<?php $args = array( 'post_type' => 'product', 'posts_per_page' => 6 ); ?>
	      				<?php $loop = new WP_Query( $args ); ?>
			<div class="multiple-items2">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
				<div class="block4 card-product">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>">
					<div class="text-product">
						<h5><?php the_title(); ?></h5>
						<p><?php echo $product->get_price_html(); ?></p>
						<div class="shop-btn">
							<a href="<?php the_permalink(); ?>">
								COMPRAR
							</a>
						</div>
					</div>
					<div class="block2-overlay trans-0-4">
						<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
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
					<?php endwhile ?>
				
			</div>
		</section>

<?php do_action( 'woocommerce_after_single_product' ); ?>
<script type="text/javascript">
$('.yith-wcwl-add-to-wishlist').appendTo('.enter_list');
</script>
