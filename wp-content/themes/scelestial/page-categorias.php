<?php get_header(); ?>
	<section class="category">
		<h6>ACERCA DE</h6>
		<h3>Categorías</h3>

		<div class="cate-flex container">
        <?php $product_categories = get_categories( array( 'taxonomy' => 'product_cat', 'orderby' => 'menu_order', 'order' => 'asc' ));  ?>
        <?php foreach($product_categories as $category):  global $wpdb;?>
        <?php $result = $wpdb->get_results ("SELECT * FROM ".$wpdb->prefix."term_taxonomy where taxonomy = 'product_cat'");?>				
			<div class="card-cate">			
					<div class="img-cate">
						<img src="<?php echo wp_get_attachment_url( get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true ) );?>">
						<div class="text-cate">
							<h4><?=$category->name ?></h4>
							<div class="btn-green4">
								<a href="<?php echo get_category_link( $category->term_id ); ?>">Ver ahora</a>
							</div>
						</div>
					</div>
			</div>
            <?php endforeach; ?> 
				
			</div>
		</section>
<?php get_footer(); ?>