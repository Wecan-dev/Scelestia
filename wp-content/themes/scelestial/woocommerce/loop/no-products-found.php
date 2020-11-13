<?php
/**
 * Displayed when no products are found matching the current query
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/no-products-found.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.0.0
 */

defined( 'ABSPATH' ) || exit;

?>
<section class="not-found">
	<div class="text-error">

		<h3>LO SENTIMOS</h3>
		<p>No podemos encontrar la página que está buscando</p>
		<h2>404</h2>
		<h4>Te llevaremos de vuelta</h4>

		<div class="btn-black">
			<a href="<?php echo bloginfo('url')?>">Te llevamos al inicio</a>
		</div>
	</div>
</section>
