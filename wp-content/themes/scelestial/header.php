<!DOCTYPE html>
<?php wp_head(); ?>
<html lang="en">
<head>
	<title>Scelestia</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/fav.png"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/slick/slick-theme.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/lightbox2/css/lightbox.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css">
	<!--===============================================================================================-->
</head>

<div class="elipse">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fav.png" alt="">
</div>


<style>
	.elipse{
		background:#fff;
		position: fixed;
		z-index: 9999999;
		height: 100%;
		width: 100%;
		overflow: hidden;
		display: flex;
		justify-content: center;
		align-items: center;
	}

</style>


<body >
	<div class="btn-whatsapp">
		<a class="face" target="_blank" href="https://www.facebook.com/Fiorellabelleza"> <i  class="fa fa-facebook"></i></a>
		<a class="insta" target="_blank" href="https://www.instagram.com/fiorella.vidaybelleza/">  <i class="fa fa-instagram"></i></a>
	</div>
	<!-- header fixed -->
	<div class="wrap_header fixed-header2 trans-0-4">
		<!-- Logo -->
		<a href="<?php echo bloginfo('url')?>" class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="IMG-LOGO">
		</a>

		<!-- Menu -->
		<div class="wrap_menu">
			<nav class="menu">
				<ul class="main_menu">
					<li>
						<a href="<?php echo get_home_url() ?>">Inicio</a>
						
					</li>

					<li>
						<a href="<?php echo get_home_url() ?>/lo-mas-vendido">Lo más vendido</a>
					</li>

					<!--<li class="nav-item dropdown  ">
						<a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" >
							Pijamas
						</a>

						<div class="sub_menu dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<div class="drop">
								<ul id="tabs"  class="nav nav-tabs " role="tablist">
									<li class="nav-item">
										<a id="tab-C" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Adultos</a>
									</li>
									<li class="nav-item">
										<a id="tab-D" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Infatil</a>
									</li>
								</ul>


								<div id="content" class="tab-content" role="tablist">
									<div id="pane-C" class=" tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
										<div class="card-header" role="tab" id="heading-A">
											<h5 class="mb-0">
												<a data-toggle="collapse" href="#collapse-A" data-parent="#content" aria-expanded="true" aria-controls="collapse-A">
													Pantalones
												</a>
											</h5>
										</div>

									</div>

									<div id="pane-D" class=" tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
										<div class="card-header" role="tab" id="heading-B">
											<h5 class="mb-0">
												<a class="collapsed" data-toggle="collapse" href="#collapse-B" data-parent="#content" aria-expanded="false" aria-controls="collapse-B">
													Camisas
												</a>
											</h5>
										</div>

									</div>
								</div>
							</div>
						</div>
					</li>-->
                    <?php $product_categories = get_categories( array( 'taxonomy' => 'product_cat', 'orderby' => 'menu_order', 'order' => 'asc' ));  ?>
                    <?php foreach($product_categories as $category):  global $wpdb;?>
                    <?php $result = $wpdb->get_results ("SELECT * FROM ".$wpdb->prefix."term_taxonomy where taxonomy = 'product_cat'");?> 					
							<li>
								<a href="<?php echo get_category_link( $category->term_id ); ?>"> <?=$category->name ?></a>
							</li>
                    <?php endforeach; ?>


					<li>
						<a href="<?php echo get_home_url() ?>/contacto">Contacto</a>
					</li>

					<li>
						<i class="fa fa-search" aria-hidden="true"></i> 
						<?php dynamic_sidebar( 'sidebar-1' ); ?>

					</li>
				</ul>
			</nav>
		</div>

		<!-- Header Icon -->
		<div class="header-icons">

			<span class="linedivide1"></span>

			<div class="header-wrapicon2">
				<span class="topbar-email">

					

					 <?php if( is_cart() && WC()->cart->cart_contents_count == 0){ $url_carro = get_permalink(wc_get_page_id('shop')); }else{ $url_carro = get_permalink(wc_get_page_id('cart')); } ?>
              <a href="<?php echo $url_carro; ?>" class="nav-link"  style="padding:0;"><span class="fa fa-shopping-bag"></span><p class="mini-cart"><?php echo WC()->cart->get_cart_contents_count(); ?></p></a>
				</span>
				

			</div>
		</div>
	</div>

	<!-- Header -->
	<header class="header2">
		<!-- Header desktop -->
		<div class="container-menu-header-v2 p-t-26">
			<div class="topbar2">

				<!-- Logo2 -->
				<a href="<?php echo bloginfo('url')?>" class="logo2">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="IMG-LOGO">
				</a>

				<div class="topbar-child2">
					<span class="topbar-email">
						<?php if (is_user_logged_in() == NULL){ ?>
						   <a href="<?php echo get_home_url() ?>/inicio-sesion"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
						<?php }else{ ?>  
							<a href="<?php echo get_home_url() ?>/mi-cuenta"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
						<?php } ?> 						
						

						<a href="<?php echo get_home_url() ?>/Wishlist" class="nav-link" style="padding:0;"><i class="fa fa-heart-o" aria-hidden="true"></i><?php $wishlist_count = YITH_WCWL()->count_products(); echo esc_html( $wishlist_count ); ?></a>
							 <?php if( is_cart() && WC()->cart->cart_contents_count == 0){ $url_carro = get_permalink(wc_get_page_id('shop')); }else{ $url_carro = get_permalink(wc_get_page_id('cart')); } ?>
              <a href="<?php echo $url_carro; ?>" class="nav-link" style="padding:0;"><span class="fa fa-shopping-bag"></span><p class="mini-cart"><?php echo WC()->cart->get_cart_contents_count(); ?></p></a>
					</span>

				</div>
			</div>

			<div class="wrap_header">
				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="<?php echo bloginfo('url')?>">Inicio</a>

							</li>

							<li>
								<a href="<?php echo get_home_url() ?>/lo-mas-vendido">Lo más vendido</a>
							</li>

							<li class="nav-item dropdown  ">
								<a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" >
									Pijamas
								</a>

								<div class="sub_menu dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<div class="drop">
										<ul id="tabs"  class="nav nav-tabs " role="tablist">
											<li class="nav-item">
												<a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Adultos</a>
											</li>
											<li class="nav-item">
												<a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Infatil</a>
											</li>
										</ul>


										<div id="content" class="tab-content" role="tablist">
											<div id="pane-A" class=" tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
												<div class="card-header" role="tab" id="heading-A">
													<h5 class="mb-0">
														<a data-toggle="collapse" href="#collapse-A" data-parent="#content" aria-expanded="true" aria-controls="collapse-A">
															Pantalones
														</a>
													</h5>
												</div>

											</div>

											<div id="pane-B" class=" tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
												<div class="card-header" role="tab" id="heading-B">
													<h5 class="mb-0">
														<a class="collapsed" data-toggle="collapse" href="#collapse-B" data-parent="#content" aria-expanded="false" aria-controls="collapse-B">
															Camisas
														</a>
													</h5>
												</div>

											</div>
										</div>
									</div>
								</div>
							</li>

							<li>
								<a href="#">Ropa interior</a>
							</li>

							<li>
								<a href="#">Ropa Deportiva</a>
							</li>
							<li>
								<a href="#">Accesorios</a>
							</li>


							<li>
								<a href="<?php echo get_home_url() ?>/contacto';?>">Contacto</a>
							</li>

							<li>
								<i class="fa fa-search" aria-hidden="true"></i> 
								<?php dynamic_sidebar( 'sidebar-1' ); ?>

							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">

				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="<?php echo bloginfo('url')?>" class="logo-mobile">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<!-- <a href="#" class="header-wrapicon1 dis-block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a> -->

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<span class="topbar-email">
						<?php if (is_user_logged_in() == NULL){ ?>
						   <a href="<?php echo get_home_url() ?>/inicio-sesion"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
						<?php }else{ ?>  
							<a href="<?php echo get_home_url() ?>/mi-cuenta"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
						<?php } ?> 							
							
						<a href="<?php echo get_home_url() ?>/Wishlist" class="nav-link" style="padding:0;"><i class="fa fa-heart-o" aria-hidden="true"></i><?php $wishlist_count = YITH_WCWL()->count_products(); echo esc_html( $wishlist_count ); ?></a>
								 <?php if( is_cart() && WC()->cart->cart_contents_count == 0){ $url_carro = get_permalink(wc_get_page_id('shop')); }else{ $url_carro = get_permalink(wc_get_page_id('cart')); } ?>
              <a href="<?php echo $url_carro; ?>" class="nav-link"  style="padding:0;"><span class="fa fa-shopping-bag"></span><p class="mini-cart"><?php echo WC()->cart->get_cart_contents_count(); ?></p></a>
						</span>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<li>
							<i class="fa fa-search" aria-hidden="true"></i>
	
 									<?php dynamic_sidebar( 'sidebar-1' ); ?>
						</li>
					</li>


					<li class="item-menu-mobile">
						<a href="<?php echo bloginfo('url')?>">Inicio</a>
						
						
					</li>

					<li class="item-menu-mobile">
						<a href="lo-mas-vendido.html">Lo más vendido</a>
					</li>

					<li class="item-menu-mobile">
						<a href="">Pijama</a>
					</li>
					<li class="item-menu-mobile">
						<a href="">Ropa Interior</a>
					</li>

					<li class="item-menu-mobile">
						<a href="">Ropa Deportiva</a>
					</li>
					<li class="item-menu-mobile">
						<a href="">Accesorios</a>
					</li>
					<li class="item-menu-mobile">
						<a href="<?php echo bloginfo('url').'/index.php/contacto';?>">Contacto</a>
					</li>

				</ul>
			</nav>
		</div>
	</header>

	