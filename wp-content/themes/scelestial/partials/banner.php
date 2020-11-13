	<section class="banner">
		<div class="slider-for">
			<div class="principal-img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.png">
				<div class="text-banner">
					<h3>01/03</h3>
					<h1>Pijamas <br> Colección Primaveral</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et.</p>
				</div>
			</div>
			<div class="principal-img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/dot.png">
				<div class="text-banner">
					<h3>02/03</h3>
					<h1>Ropa <br> Colección Primaveral</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et.</p>
				</div>
			</div>
			<div class="principal-img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card1.png">
				<div class="text-banner">
					<h3>03/03</h3>
					<h1>Accesorios <br> Colección Primaveral</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et.</p>
				</div>
			</div>
		</div>

		<div class="slider-nav">
			<div class="item-prev">
				<div class="nav-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/dot.png">
				</div>
				<div class="text-prev">
					<h4>02</h4>
					<h3>Pijama Floral</h3>
				</div>
			</div>
			<div class="item-prev">
				<div class="nav-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card1.png">
				</div>
				<div class="text-prev">
					<h4>02</h4>
					<h3>Pijama Floral</h3>
				</div>
			</div>
			<div class="item-prev">
				<div class="nav-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.png">
				</div>
				<div class="text-prev">
					<h4>02</h4>
					<h3>Pijama Floral</h3>
				</div>
			</div>
		</div>
	</section>


<!-- <section class="banner">
		<div class="slider-for">
	<?php $args = array( 'post_type' => 'banner','order' => 'ASC'); ?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="principal-img">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>">
				<div class="text-banner">
					<h3>01/03</h3>
					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>
				</div>
			</div>
		<?php endwhile; ?>
		</div>

		<div class="slider-nav">
			<div class="item-prev">
				<div class="nav-img">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>">
				</div>
				<div class="text-prev">
					<h4>02</h4>
					<h3><?php the_title(); ?></h3>
				</div>
			</div>

		</div>
</section> -->