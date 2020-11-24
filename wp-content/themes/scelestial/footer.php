		<footer class="ftco-footer ftco-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-3 logo-footer">
						<div class="ftco-footer-widget">
							<div class="logo-footer" style="justify-content: flex-start;">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/scelestia.png">
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="ftco-footer-social list-unstyled ">
								<li class="ftco-animate"><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
								<li class="ftco-animate"><a href="#"></a><i class="fa fa-facebook" aria-hidden="true"></i></li>
								<li class="ftco-animate"><a href="#"></a><i class="fa fa-instagram" aria-hidden="true"></i></li>
							</div>
						</div>
					</div>

					<div class="col-md-3 logo-footer">
						<div class="ftco-footer-widget">
							<h2 class="ftco-heading-2">MENÚ</h2>
							<div class="block-237 ">
								<ul>
									<li ><a href="	">Inicio</a></li>
									<li ><a href="	">Lo más vendido</a></li>
									<li ><a href="	">Lo que más me gusta</a></li>
									<li ><a href="	">Colecciones</a></li>
									<li ><a href="<?php echo bloginfo('url').'/index.php/contacto';?>">Contacto</a></li>
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
									<li><a href="">Entregas y devoluciones</a></li>
								</ul>
							</div>
						</div>

					</div>

					<div class="col-md-3 logo-footer">
						<div class="ftco-footer-widget">
							<h2 class="ftco-heading-2">CONTACT</h2>
							<div class="block-237 ">
								<ul>
											<li class="icon-local2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-call.svg"><span class="text">+57 797 599 577</span></a></li>
									<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i><span class="text"> info@scelestial.com</span></a></li>
									<li class="icon-local"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/location.svg"><span class="text">Calle 60 Nro 56 - 124, Medellín, Colombia</span></li>
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