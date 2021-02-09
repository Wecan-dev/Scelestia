<section class="colecciones bck">
			<h6><?php echo get_theme_mod('colecciones_title');?></h6>
			<h3 style="margin-bottom: 60px;"><?php echo get_theme_mod('colecciones_subtitle');?><br>
			</h3>
				<?php $args = array( 'post_type' => 'product', 'posts_per_page' => 16 );
	
	?>
	      				<?php $loop = new WP_Query( $args ); ?>
			<div class="multiple-items">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
			<div class=" card-product">
					<img class="img-colecciones__home" src="<?php echo get_the_post_thumbnail_url(); ?>">
					<div class="text-product__colecciones">
						<h5><?php the_title(); ?></h5>
						<p><?php echo $product->get_price_html(); ?></p>
						<div class="shop-btn">
							<a href="<?php the_permalink(); ?>">
								COMPRAR
							</a>
						</div>
					</div>
					<div class="block2-overlay__colecciones trans-0-4">
						<div class ="icono-fondo">
							  <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>			
						</div>
                      			

						<div class="block2-btn-addcart__colecciones trans-0-4">
							<!-- Button -->
							<button class="btn-oficial2">
								<a href="<?php the_permalink(); ?>">VER MÁS</a>
							</button>
						</div>
					</div>
				</div>
    		
					<?php endwhile ?>
				
			</div>
		</section>