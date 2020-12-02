<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


?>


		

   <section class="colecciones">
      <h6>ACERCA DE</h6>
      <h3>Mi perfil<br>
      </h3>
      <h5> <center>compradores</center></h5>

      <div class="container sec-option">
      	<a href="<?php echo bloginfo('url')?>/mi-cuenta/edit-account">
      	  <div class="profile">
      		 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tarjeta.svg">
      		 <p>Mi información</p>
      	  </div>
        </a>
        <a href="<?php echo bloginfo('url')?>/mi-cuenta/orders">
      	  <div class="profile">
      		 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tarjeta.svg">
      		 <p>Historial de Ordenes</p>
      	  </div>
      	</a>
      	<a href="<?php echo wc_logout_url(); ?>">  
      	   <div class="profile">
      		  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tarjeta.svg">
      		  <p>Cerrar Sesión</p>
      	   </div>
      	</a>   
      </div>
</section>
	</div>

<?php	

