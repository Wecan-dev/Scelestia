<?php
/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_edit_account_form' ); 

?>

<section class="register">
	<div class="register_form container">
		<div class="title_register">
			<img class="icono-iniciar" src="http://159.89.229.55/Scelestia/wp-content/uploads/2021/01/icon@3x.png">

			<h4><span style="color: #000; font-weight: bold;">Mi Cuenta</span> <br>Mi Información</h4>
		</div>
<form class="woocommerce-EditAccountForm edit-account" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?> >

	<?php do_action( 'woocommerce_edit_account_form_start' ); ?>
    <div id="name_data">	

	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
		<label for="account_first_name"><?php esc_html_e( 'First name', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" placeholder="Nombre" autocomplete="given-name" value="<?php echo esc_attr( $user->first_name ); ?>" />
	</p>
	<p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last" id="account_last_name">

		<input type="text" placeholder="Apellidos" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" autocomplete="family-name" value="<?php echo esc_attr( $user->last_name ); ?>" />
	</p>
	<div class="clear"></div>
	<div class="clear"></div>

	
		
		<input type="hidden" placeholder="Identificación" class="woocommerce-Input woocommerce-Input--text input-text" name="account_display_name" id="account_display_name" value="<?php echo esc_attr( $user->display_name ); ?>" /> 
		
    </div>



	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">

		<input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" autocomplete="email" placeholder="Correo electrónico" value="<?php echo esc_attr( $user->user_email ); ?>" />
	</p>

	<div class="clear"></div>		

	<fieldset>
		<legend><?php esc_html_e( 'Password change', 'woocommerce' ); ?></legend>

		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_current"><?php esc_html_e( 'Current password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
			<input placeholder="Contraseña Actual" type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_current" id="password_current" autocomplete="off" />
		</p>		


		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			
			<input type="password" placeholder="Contraseña" class="woocommerce-Input woocommerce-Input--password input-text" name="password_1" id="password_1" autocomplete="off" />
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			
			<input type="password" placeholder="Confirmar Contraseña"class="woocommerce-Input woocommerce-Input--password input-text" name="password_2"  id="password_2" autocomplete="off" />
		</p>
	</fieldset>
	<div class="clear"></div>

	<?php do_action( 'woocommerce_edit_account_form' ); ?>

	<p>
		<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
		<button type="submit" class="woocommerce-Button button" name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'woocommerce' ); ?>"><?php esc_html_e( 'Save changes', 'woocommerce' ); ?></button>
		<input type="hidden" name="action" value="save_account_details" />
	</p>

	<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
</form>

<?php do_action( 'woocommerce_after_edit_account_form' ); ?>

</div>
</section>


<script>
	$('#Nro-identificacion').appendTo('#name_data');
	$('#billing_countrys').appendTo('#name_data');
	$('#billing_postcode').appendTo('#name_data');
	$('#billing_city').appendTo('#name_data');
	$('#user_registration_input_box_1608232531747').appendTo('#name_data');

    var ur = "<?= esc_attr( $user->billing_country ); ?>"; 
    $(document).ready(function(){
      $("#billing_country").val(ur);
    });    
</script>