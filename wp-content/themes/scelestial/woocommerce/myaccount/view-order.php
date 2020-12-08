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
					<p>Número de la orden: #3456</p>

					<p>Fecha: Abril 20, 2020 8:10pm </p>

					Estado de la orden: En proceso
				</div>
			</div>
			<div class="product-orden">
				<p>Producto</p>
				<div class="product-info">

					<div class="orden_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/kid4.png">
					</div>
					<div class="text-order">
						<p>Pijama de Seda <br>
							Cantidad: 1 <br>
							Talla: M<br>
							Color:Rosado <br>
						Pendiente Abril 20 del 2020 #34444486879879</p>
					</div>
				</div>
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

			<div class="factura">
				<div class="factura-direccion">
					<p>Dirección de Facturación</p>
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
			</div>

		</section>
	</div>
