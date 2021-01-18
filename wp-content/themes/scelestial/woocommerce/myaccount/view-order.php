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
						<img src="<?php echo meta_value_img( '_thumbnail_id', woocommerce_order_itemmeta($r->order_item_id, '_product_id')) ?>">
					</div>
					<div class="text-order">
						<p><?php echo get_post(woocommerce_order_itemmeta($r->order_item_id, '_product_id'))->post_title; ?> <br>
							Cantidad: <?php echo woocommerce_order_itemmeta($r->order_item_id,'_qty'); ?> <br>
							<?php if ( woocommerce_order_itemmeta($r->order_item_id,'pa_tallas')): ?>
							Talla: <?php echo woocommerce_order_itemmeta($r->order_item_id,'pa_tallas'); ?><br>
						    <?php endif; ?>
						    <?php if ( woocommerce_order_itemmeta($r->order_item_id,'pa_color')): ?>
							Color: <?php echo woocommerce_order_itemmeta($r->order_item_id,'pa_color'); ?> <br>
							<?php endif; ?>
					</div>
				</div>
			<?php } ?>	
			</div>
			<div class="total-orden">
				<div class="sub">
					<p>Subtotal</p>
				</div>
				<div >
					<p style="font-weight: bold;"><?php echo  $order->get_subtotal_to_display(); ?></p>
				</div>
			</div>
			<!--<div class="total-orden">
				<div class="sub">
					<p>Envio Nacional</p>
				</div>
				<div >
					<p style="font-weight: bold;">$7.000</p>
				</div>
			</div>-->

			<div class="total-orden">
				<div class="sub">
					<p>TOTAL</p>
				</div>
				<div >
					<p style="font-weight: bold;"><?php echo  $order->get_formatted_order_total( ); ?></p>
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
						<p><?php echo $order->get_billing_email(); ?></p>
					</div>
				</div>
				<hr>
			</div>

	        <div class="factura">
				<div class="factura-direccion">
					<p>Dirección de Facturación</p>
					<div class="info_factura">
						<p><?php echo $order->get_formatted_billing_address(); ?> </p>
						<div>
						<button class="a_factura">
							
							<?php if ($order->get_formatted_billing_address() != NULL){?> 
							   <a href="<?php echo get_home_url() ?>/mi-cuenta/edit-address/facturacion/" class="edit"><?php echo $address ? esc_html__( 'Edit', 'woocommerce' ) : esc_html__( 'Editar', 'woocommerce' ); ?></a>
						    <?php }else{ ?>
							   <a href="<?php echo get_home_url() ?>/mi-cuenta/edit-address/envio/" class="edit"><?php echo $address ? esc_html__( 'Edit', 'woocommerce' ) : esc_html__( 'Add', 'woocommerce' ); ?></a>
						    <?php } ?>
						</button>
					</div>
					</div>
				</div>
								<div class="factura-direccion">
					<p>Dirección de Envío</p>
					<div class="info_factura">
						<p><?php echo $order->get_shipping_first_name(); ?> </p>
						<div>
						<button class="a_factura">
							
							<?php if ($order->get_formatted_shipping_address() != NULL){?> 
							   <a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address', $name ) ); ?>" class="edit"><?php echo $address ? esc_html__( 'Edit', 'woocommerce' ) : esc_html__( 'Editar', 'woocommerce' ); ?></a>
						    <?php }else{ ?>
							   <a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address', $name ) ); ?>" class="edit"><?php echo $address ? esc_html__( 'Edit', 'woocommerce' ) : esc_html__( 'Add', 'woocommerce' ); ?></a>
						    <?php } ?>
						</button>						
					</div>
					</div>
				</div>

			</div>


		</section>
	</div>

<p>

</p>



<?php// do_action( 'woocommerce_view_order', $order_id ); ?>
