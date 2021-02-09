<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.2
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_lost_password_form' );
?>
<section class="registro-compradores">
	<div class="register_form container">
		<div class="title_register--compradores">
				<img class="icono-iniciar" src="http://159.89.229.55/Scelestia/wp-content/uploads/2021/01/icon@3x.png">

				<h4><span style="color: #000; font-weight: bold;">Recupera tu </span> <br> contraseña</h4>
		</div>	
		<form method="post" class="woocommerce-ResetPassword lost_reset_password">

<!--	<p><?php echo apply_filters( 'woocommerce_lost_password_message', esc_html__( 'Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'woocommerce' ) ); ?></p><?php // @codingStandardsIgnoreLine ?> -->

	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
		<label for="user_login"><?php esc_html_e( 'Username or email', 'woocommerce' ); ?></label>
		<input class="woocommerce-Input woocommerce-Input--text input-text"  placeholder="Correo electrónico" type="text" name="user_login" id="user_login" autocomplete="username" />
	</p>

	<div class="clear"></div>

	<?php do_action( 'woocommerce_lostpassword_form' ); ?>

	<p class="woocommerce-form-row form-row">
		<input type="hidden" name="wc_reset_password" value="true" />
		<button type="submit" class="woocommerce-Button button" value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>"><?php esc_html_e( 'Reset password', 'woocommerce' ); ?></button>
	</p>

	<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>

</form>
		<a href="?create=account"><p style="font-weight: 500; ">Crear una cuenta nueva <i style="color: #000" class="fa fa-angle-right" aria-hidden="true"></i></p></a>
	</div>

</section>

<?php
do_action( 'woocommerce_after_lost_password_form' );
