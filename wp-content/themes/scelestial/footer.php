		<footer class="ftco-footer ftco-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-3 logo-footer">
						<div class="ftco-footer-widget">
							<div class="logo-footer" style="justify-content: flex-start;">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/scelestia.png">
							</div>
							<p><?php echo get_theme_mod('description_contact'); ?></p>
							<div class="ftco-footer-social list-unstyled ">

								<?php if (get_theme_mod('pinterest')!=NULL) {?>  
									<li class="ftco-animate"><a target="_blank" href="<?php echo get_theme_mod('pinterest'); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>          
								<?php } ?>
								<?php if (get_theme_mod('vimeo')!=NULL) {?> 
									<li class="ftco-animate"><a target="_blank" href="<?php echo get_theme_mod('vimeo'); ?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
								<?php } ?>                
								<?php if (get_theme_mod('youtube')!=NULL) {?>
									<li class="ftco-animate"><a target="_blank" href="<?php echo get_theme_mod('youtube'); ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
								<?php } ?>
								<?php if (get_theme_mod('facebook')!=NULL) {?>
									<li class="ftco-animate"><a target="_blank" href="<?php echo get_theme_mod('facebook'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<?php } ?>
								<?php if (get_theme_mod('instagram')!=NULL) {?>
									<li class="ftco-animate"><a target="_blank" href="<?php echo get_theme_mod('instagram'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<?php } ?>
								<?php if (get_theme_mod('twitter')!=NULL) {?>
									<li class="ftco-animate"><a target="_blank" href="<?php echo get_theme_mod('twitter'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<?php } ?>   
								<?php if (get_theme_mod('linkedin')!=NULL) {?>
									<li class="ftco-animate"><a target="_blank" href="<?php echo get_theme_mod('linkedin'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<?php } ?>

							</div>
						</div>
					</div>

					<div class="col-md-3 logo-footer">
						<div class="ftco-footer-widget">
							<h2 class="ftco-heading-2">MENÚ</h2>
							<div class="block-237 ">
								<ul>
									<li ><a href="<?php echo get_home_url() ?>">Inicio</a></li>
									<li ><a href="<?php echo get_home_url() ?>/lo-nuevo">Lo Nuevo</a></li>

									<?php $product_categories = get_categories( array( 'taxonomy' => 'product_cat', 'orderby' => 'menu_order', 'order' => 'asc' ));  ?>
									<?php foreach($product_categories as $category):  global $wpdb;?>
										<?php $result = $wpdb->get_results ("SELECT * FROM ".$wpdb->prefix."term_taxonomy where taxonomy = 'product_cat'");?> 					
										<li>
											<a href="<?php echo get_category_link( $category->term_id ); ?>"> <?=$category->name ?></a>
										</li>
									<?php endforeach; ?>									
								</ul>
							</div>
						</div>
					</div>


					<div class="col-md-3 logo-footer">
						<div class="ftco-footer-widget">
							<div class="block-237 ">
								<ul>
									<li ><a href="<?php echo bloginfo('url').'/index.php/terminos-y-condiciones';?>">Términos y condiciones</a></li>
									<li><a href="<?php echo bloginfo('url').'/index.php/privacy-policy';?>">Políticas y privacidad</a></li>
									<li><a href="<?php echo bloginfo('url').'/index.php/entregas-y-devoluciones';?>">Entregas y devoluciones</a></li>
										<li ><a href="<?php echo bloginfo('url').'/index.php/contacto';?>">Contacto</a></li>
								</ul>
							</div>
						</div>

					</div>

					<div class="col-md-3 logo-footer">
						<div class="ftco-footer-widget">
							<h2 class="ftco-heading-2">CONTACTO</h2>
							<div class="block-237 ">
								<ul>
									<li class="icon-local2"> <a href="tel:<?php echo get_theme_mod('phone'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-call.svg"><span class="text"><?php echo get_theme_mod('phone'); ?></span></a></li>
									<li><a href="mailto:<?php echo get_theme_mod('email'); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i><span class="text"> <?php echo get_theme_mod('email'); ?></span></a></li>
									<li class="icon-local"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/location.svg"><span class="text"><a href="https://www.google.com/maps/place/Scelestia+-+Donna+Lingerie+Ltda/@6.165036,-75.602208,16z/data=!4m5!3m4!1s0x0:0x5fd93702c3c15e09!8m2!3d6.1650356!4d-75.6022085?hl=es" target:"_blank"><?php echo get_theme_mod('address'); ?></a></span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class=" copy text-center">
				<p style="margin-bottom: 0;
				background: #92bd9f;
				padding-top: 25px;
				padding-bottom: 25px;
				color: #fff!important;
				font-weight: bold;">Copyright © 2020 <a style="color:#fff" href="https://www.branch.com.ar/" target="_blank">Branch</a>
			</p>
		</div>
	</footer>


	<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/select2/select2.min.js"></script>

	<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick-custom.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/lightbox2/js/lightbox.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
  $('.parallax100').parallax100();

		$('.nav-tabs .nav-link').on("click.bs.dropdown", function (e) { 
			$(this).tab('show'); 
			e.stopPropagation(); 
		});
	</script>


	<!--===============================================================================================-->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
 <?php wp_footer(); ?>
</body>
</html>