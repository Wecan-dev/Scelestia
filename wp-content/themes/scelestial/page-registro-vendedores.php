<?php if (is_user_logged_in() != NULL ){ header('Location: '.get_home_url().'/mi-cuenta'); } ?>
<?php get_header(); ?>
<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

<div class="u-columns col2-set" id="customer_login">

	<div class="u-column1 col-1">

<?php endif; ?>
<?php if ($_GET["create"] != 'account') { ?>
<section class="registro">
	<div class="register_form container">

			<div class="title_register3">
				
				<img class="icono-iniciar" src="http://159.89.229.55/Scelestia/wp-content/uploads/2021/01/icon@3x.png">

				<h4><span style="color: #000; font-weight: bold; font-family: 'Bodoni SvtyTwo ITC TT';">Iniciar sesión</span> <br> vendedores</h4>
			</div>	
		<!--<h2><?php esc_html_e( 'Login', 'woocommerce' ); ?></h2>-->
		<div class="container-form__login">
			
		<form class="woocommerce-form woocommerce-form-login login" method="post">

			<?php do_action( 'woocommerce_login_form_start' ); ?>

			<!--<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">-->
				<!--<label for="username"><?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>-->
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" placeholder="Correo electrónico" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			<!--</p>-->
			<!--<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">-->
				<!--<label for="password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>-->
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" placeholder="Contraseña" autocomplete="current-password" />
			<!--</p>-->

			<?php do_action( 'woocommerce_login_form' ); ?>

			
				<!--<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">-->
				<div class="flex-this">
                    <div class="radio">
					   <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="radio" id="rememberme" value="forever"/> Recordar Contraseña
					</div> 
		            <div class="olvido">
				        <a style="color:#000;" href="<?php echo esc_url( wp_lostpassword_url() ); ?>">¿Olvidó su contraseña?</a>
			        </div>					  
			    </div>
			    		
				<div class="btn-green">
				    <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>">Iniciar sesión</button>
			    </div>
				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
				
			
			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</form>
		</div>

		<a href="?create=account"><p style="font-weight: 500; ">Crear una cuenta nueva <i style="color: #000" class="fa fa-angle-right" aria-hidden="true"></i></p></a>
	</div>
</section>		
<?php } ?>		

<?php //if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

	</div>
<?php if ($_GET["create"] == 'account') { ?>
<section class="register2">
	<div class="register_form container">

			<div class="title_register">
		<img class="icono-iniciar" src="http://159.89.229.55/Scelestia/wp-content/uploads/2021/01/icon@3x.png">
				<h4><span style="color: #000; font-weight: bold; font-family: 'Bodoni SvtyTwo ITC TT';">Resgistro de</span> <br> vendedoras</h4>
			</div>
           <?php echo do_shortcode('[user_registration_form id="349"]'); ?>
		
			<a href="?create"><p style="font-weight: 500; ">De regreso a iniciar sesión <i style="color: #000" class="fa fa-angle-right" aria-hidden="true"></i></p></a>
	</div>
</section>	

<?php } ?>	

</div>
<?php// endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
<?php get_footer(); ?>