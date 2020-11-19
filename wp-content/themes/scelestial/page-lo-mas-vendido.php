<?php get_header(); ?>	
	<section class="colecciones ">
		<h6>ACERCA DE</h6>
		<h3 style="margin-bottom: 60px;">Lo más vendido<br>
		</h3>

		<div class="multiple-items">
			<?php 
			$args = 
			array(
				'post_type' => 'product',
				'paged' => $paged,
				'posts_per_page' => 12,     
				'meta_key' => 'total_sales',
				'orderby' => 'meta_value_num', 
				'meta_query' => array(
					array(
						'key' => 'total_sales',
						'value' => 0,
						'compare' => '>'
					)
				),
				'post_status' => 'publish',

			);	?>		
			<?php $loop = new WP_Query( $args ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;?>	
			<div class="block4 card-product">
				<img src="<?php the_post_thumbnail_url('full');?>">
				<div class="text-product">
					<h5><?php the_title() ?></h5>
					<p><?php echo $product->get_price_html(); ?></p>
					<div class="shop-btn">
						<a href="<?php the_permalink(); ?>">
							COMPRAR
						</a>
					</div>
				</div>
				<div class="block2-overlay trans-0-4">
					<a href="?add_to_wishlist=<?php echo get_the_ID(); ?>" class="block2-btn-addwishlist hov-pointer trans-0-4">
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
			
			<?php endwhile; ?>

		</div>
	</section>


<?php  get_template_part('partials/colecciones/descubre-mas'); ?>

<?php get_footer(); ?>s