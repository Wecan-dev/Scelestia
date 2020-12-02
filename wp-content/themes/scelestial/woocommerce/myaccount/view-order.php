<?php
/**
 * View Order
 *
 * Shows the details of a particular order on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/view-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */
/***************** Meta  *****************/
function meta_value( $meta_key, $post_id ){
            global $wpdb;  
              $result_link = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."postmeta WHERE meta_key = '$meta_key' and post_id = '$post_id'"); 
              foreach($result_link as $r)
              {
                      $value = $r->meta_value;                      
              }
              
              return $value;

}


defined( 'ABSPATH' ) || exit;

$notes = $order->get_customer_order_notes();
?>
	<div class="blog-page" style="background-color: #fff!important; ">

		<div class="header "  style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/contacto.png);">
			<div class="mask-blog">
				<h3 style="font-weight: bold; color: #000; text-align: center; font-size:59px; font-family: 'Bodoni SvtyTwo ITC TT';">Detalles de <br> las ordenes</h3>
			</div>
		</div>

		<section class=" container orden">
			<div class="father-orden">
				<div class="orden-green">
					<p>Número de la orden: #<?php echo $order->get_order_number()?></p>

					<p>Fecha: <?php echo wc_format_datetime( $order->get_date_created() ); ?> </p>

					Estado de la orden: <?php echo wc_get_order_status_name( $order->get_status() ); ?>
				</div>
			</div>
			<div class="product-orden">
				<p>Producto</p>
            <?php
            global $wpdb;  $id_order = $order->get_order_number();
              $result_link = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."woocommerce_order_items WHERE order_item_type = 'line_item' and order_id = '$id_order'"); 
              foreach($result_link as $r)
              {

            ?>				
				<div class="product-info">
					<div class="orden_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/kid4.png">
					</div>
					<div class="text-order">
						<p><?php echo $r->order_item_name; echo $id_order; ?> <br>
							Cantidad: 1 <br>
							Talla: M<br>
							Color:Rosado <br>
						Pendiente Abril 20 del 2020 #34444486879879</p>
					</div>
				</div>
			<?php } ?>	
			</div>
			<div class="total-orden">
				<div class="sub">
					<p>Subtotal</p>
				</div>
				<div >
					<p style="font-weight: bold;">$180.000</p>
				</div>
			</div>
			<div class="total-orden">
				<div class="sub">
					<p>Envio Nacional</p>
				</div>
				<div >
					<p style="font-weight: bold;">$7.000</p>
				</div>
			</div>

			<div class="total-orden">
				<div class="sub">
					<p>TOTAL</p>
				</div>
				<div >
					<p style="font-weight: bold;">$192.000</p>
				</div>
			</div>

			<div class="detail-orden">
				<p>DETALLE DE LA ORDEN</p>
				<hr>
				<div class="total-orden">
					<div class="sub">
						<p>Correo Electrónico:</p>
					</div>
					<div >
						<p>margarita.pelaez@hotmail.com</p>
					</div>
				</div>
				<hr>
			</div>

			<!--<div class="factura">
				<div class="factura-direccion">
					<p>Dirección de Facturación</p>
					<div class="info_factura">
						<?php echo meta_value('_billing_address_index', $order->get_order_number()); ?>
						<div>
						<button class="a_factura">
							<a href="">Editar</a>
						</button>
					</div>
					</div>
				</div>
				<div class="factura-direccion">
					<p>Dirección de Envío</p>
					<div class="info_factura">
						<p>Calle 60 # 45-156 <br>
						Medellín - Colombia</p>
						<div>
						<button class="a_factura">
							<a href="">Editar</a>
						</button>
					</div>
					</div>
				</div>
				<div>
					<button class="a_factura">
							<a href="">+ Agregar otra <br> dirección</a>
						</button>
					
				</div>
			</div>-->

		</section>
	</div>

<p>
<?php
printf(
	/* translators: 1: order number 2: order date 3: order status */
	esc_html__( 'Order #%1$s was placed on %2$s and is currently %3$s.', 'woocommerce' ),
	'<mark class="order-number">' . $order->get_order_number() . '</mark>', // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	'<mark class="order-date">' . wc_format_datetime( $order->get_date_created() ) . '</mark>', // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	'<mark class="order-status">' . wc_get_order_status_name( $order->get_status() ) . '</mark>' // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
);
?>
</p>

<?php if ( $notes ) : ?>
	<h2><?php esc_html_e( 'Order updates', 'woocommerce' ); ?></h2>
	<ol class="woocommerce-OrderUpdates commentlist notes">
		<?php foreach ( $notes as $note ) : ?>
		<li class="woocommerce-OrderUpdate comment note">
			<div class="woocommerce-OrderUpdate-inner comment_container">
				<div class="woocommerce-OrderUpdate-text comment-text">
					<p class="woocommerce-OrderUpdate-meta meta"><?php echo date_i18n( esc_html__( 'l jS \o\f F Y, h:ia', 'woocommerce' ), strtotime( $note->comment_date ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<div class="woocommerce-OrderUpdate-description description">
						<?php echo wpautop( wptexturize( $note->comment_content ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</li>
		<?php endforeach; ?>
	</ol>
<?php endif; ?>

<?php do_action( 'woocommerce_view_order', $order_id ); ?>
