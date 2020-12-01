 <?php get_header(); ?>
 
 <div class="blog-page" style="background-color: #fff!important; ">

 	<div class="header "  style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/contacto.png);">
 		<div class="mask-blog">
 			<h3 style="font-weight: bold; color: #000; text-align: center; font-size:70px; font-family: 'Bodoni SvtyTwo ITC TT';">Contacto</h3>
 		</div>
 	</div>
 	<div id="contacto" class="container info-centro ">
 		<div class="form">
 			<h5>Dejanos un mensaje</h5>
 			<div>
 				<form class="form2 ">
 				<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>
 				</form>
 			</div>
 		</div>
 		<div class="information">
 			<h5>Nuestra información</h5>

 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

 			<div class="block-237 ">
 				<ul>
 						<li class="">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/envelope.svg">
 						<div style="margin-left:10px;">
 							<span style="color: #000; font-size: 16px; font-weight: 600;">Correo electrónico</span> <br><span style="color: #000; font-size: 15px;">ventas@scelestia.com</span>
 							</div>
 						</li>
 							<li class="">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-call (1).svg">
 								<div style="margin-left:10px;">
 								<span style="color: #000; font-size: 16px; font-weight: 600;"> Teléfono</span> <br>
 								<span style="color: #000; font-size: 15px;">+57 335 35 00</span>
 							</div>
 							</li>
 							<li>
 								<img style="width:24px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/loca.svg">
 								<div style="margin-left:7px;">
 								<span style="color: #000; font-size: 16px; font-weight: 600;"> Ubicación</span> <br><span style="color: #000; font-size: 15px;"> Carrera 49A # 48 Sur - 60 Bodega 121</span></li></div>
 						</ul>
 					</div>
 				</div>
 			</div>

 		</div>
 	</div>

 	<div class="map">
 		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/map.png">
 	</div>



 	<?php get_footer(); ?>