<section class="colecciones bck">
			<h6><?php echo get_theme_mod('colecciones_title');?></h6>
			<h3 style="margin-bottom: 60px;"><?php echo get_theme_mod('colecciones_subtitle');?><br>
			</h3>
				<?php $args = array( 'post_type' => 'product', 'posts_per_page' => 100 ); ?>
	      				<?php $loop = new WP_Query( $args ); ?>
			<div class="multiple-items">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
				<div class="block4 card-product">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>">
					<div class="text-product">
						<h5><?php the_title(); ?></h5>
						<p><?php echo $product->get_price_html(); ?></p>
						<div class="shop-btn">
							<a href="<?php the_permalink(); ?>">
								COMPRAR
							</a>
						</div>
					</div>
					<?php if ( YITH_WCWL()->is_product_in_wishlist($product->id, $default_wishlist) > 0){  ?>	
					<div class="icon-heart">					
					  <i class="fa fa-heart" aria-hidden="true"></i>
					</div>  
					<?php }else{ ?> 				  
					<div class="block2-overlay trans-0-4">
						<a href="?add_to_wishlist=<?php echo get_the_ID(); ?>" class="block2-btn-addwishlist hov-pointer trans-0-4">
							<i class="fa fa-heart" aria-hidden="true"></i>
							<i class="icon-wishlist icon_heart" aria-hidden="true"></i>
						</a>


						<div class="block2-btn-addcart trans-0-4">
							<!-- Button -->
							<button class="btn-oficial2">
								<a href="<?php the_permalink(); ?>">VER MÁS</a>
							</button>
						</div>
					</div>
				<?php } ?>
				</div>
					<?php endwhile ?>
				
			</div>
		</section>