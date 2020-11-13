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
 				<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
 				</form>
 			</div>
 		</div>
 		<div class="information">
 			<h5>Nuestra Información</h5>

 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

 			<div class="block-237 ">
 				<ul>
 					<li>
 						<i class="fa fa-envelope" aria-hidden="true"></i>
 						<div>
 							<span style="color: #000; font-size: 16px; font-weight: 600;">Correo Electrónico</span> <br><span style="color: #000; font-size: 15px;">info@scelestial</span>
 							</div>
 						</li>
 							<li >
 								<i class="fa fa-phone" aria-hidden="true"></i>
 								<div>
 								<span style="color: #000; font-size: 16px; font-weight: 600;"> Teléfono</span> <br>
 								<span style="color: #000; font-size: 15px;"> +57 797 599 577</span>
 							</div>
 							</li>
 							<li>
 								<i class="fa fa-map-marker" aria-hidden="true"></i>
 								<div>
 								<span style="color: #000; font-size: 16px; font-weight: 600;"> Ubicación</span> <br><span style="color: #000; font-size: 15px;"> Calle 60 Nro 56 - 124, Medellín, Colombia</span></li></div>
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