<section class="colecciones bck">
			<h6>ACERCA DE</h6>
			<h3 style="margin-bottom: 60px;">Colecciones<br>
			</h3>
				<?php $args = array( 'post_type' => 'product', 'posts_per_page' => 6 ); ?>
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
					<div class="block2-overlay trans-0-4">
						<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
							<i class="fa fa-heart" aria-hidden="true"></i>
							<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
						</a>

						<div class="block2-btn-addcart trans-0-4">
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