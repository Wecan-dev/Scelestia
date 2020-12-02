	<section class="banner">
		<div class="slider-for">
			<?php $a = 1;       
			$args = array (
				'post_type' => 'itemsbanner',
				'post_status' => 'publish',
			);?>
			<?php $loop = new WP_Query( $args ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;?> 			
			<div class="principal-img">
				<img src="<?php the_field('image-items-banner') ?>">
				<div class="text-banner">
					<h3>0<?php echo $a ?>/<span style="font-size: 20px;">0<?php echo cont_items_banner($post_id);  ?></span></h3>
					<h1><?php the_field('title-items-banner') ?></h1>
					<p><?php the_field('subtitle-items-banner') ?></p>
				</div>
			</div>
			<?php $a = $a + 1; endwhile; ?> 
		</div>

		<div class="slider-nav">
			<?php $b = 1;         
			$args = array (
				'post_type' => 'itemsbanner',
				'post_status' => 'publish',
			);?>
			<?php $loop = new WP_Query( $args ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;?> 			
			<div class="item-prev">
				<div class="nav-img">
					<img src="<?php the_field('image-items-prev-banner') ?>">
				</div>
				<div class="text-prev">
					<h4>0<?php echo $b ?></h4>
					<h3><?php the_field('title-items-prev-banner') ?></h3>
				</div>
			</div>
			<?php $b = $b + 1; endwhile; ?> 
		</div>
	</section>
