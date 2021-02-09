<?php get_header(); 
 while ( have_posts() ) : the_post(); $id_page = get_the_ID();
 ?>

<!-- ****************** General *********************-->
<?php if(get_field('template_scelestia') == 'Página General'){ ?>  
  <section class="colecciones ">
    <h6><?php the_field('title-banner-general-page'); ?></h6>
    <h3 style="margin-bottom: 60px;"><?php the_field('subtitle-banner-general-page'); ?><br></h3>
    <div class="row" style="padding: 0 5rem 0 5rem; align-items: center;">
      <div class="privacity" >   
          <?php the_content(); ?>
      </div>
    </div>
  </section> 
<?php } ?> 

<!-- ****************** Políticas *********************-->
<?php if(get_field('template_scelestia') == 'Políticas'){ ?>  
  <section class="colecciones ">
    <h6><?php the_field('title-banner-politicas'); ?></h6>
    <h3 style="margin-bottom: 60px;"><?php the_field('subtitle-banner-politicas'); ?><br></h3>
    <div class="row" style="padding: 0 5rem 0 5rem; align-items: center;">
      <div class="privacity" >   
          <?php the_content(); ?>
      </div>
    </div>
  </section> 
<?php } ?> 

<!-- ****************** Lo nuevo *********************-->
<?php if(get_field('template_scelestia') == 'Lo nuevo'){ ?>  
  <section class="colecciones ">
    <h6><?php the_field('title-banner-nuevo'); ?></h6>
    <h3 style="margin-bottom: 60px;"><?php the_field('subtitle-banner-nuevo'); ?><br>
    </h3>

    <div class="multiple-items">
      <?php 
      $args = 
      array(
        'post_type' => 'product',
        'paged' => $paged,
        'posts_per_page' => 12,   
        'post_status' => 'publish',

      );  ?>    
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;?> 
      <div class="block4 card-product">
        <img src="<?php the_post_thumbnail_url('full');?>">
        <div class="text-product">
          <h5><?php the_title() ?></h5>
          <p><?php echo $product->get_price_html(); ?></p>
          <?php if ($product->sku != NULL) { ?>
            <p>Ref: <?php echo $product->sku;  ?></p>
          <?php } ?>          
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

  <section style=" padding-top: 50px;" class="descubre ">
    <div class="btn-oficial-des line-this">
      <h6 style="color: #353636; font-weight: bold;" >
        <a style="color:#353636; " href="<?php echo meta_value('urlbuttom-central-nuevo', $id_page); ?>"><?php echo meta_value('buttom-central-nuevo', $id_page); ?></a>
      </h6>
    </div>
  </section>

  <section class="asesora">
    <div class="asesora-img">
      <div class="div2">
        <div class="div" style="background: url(<?php echo meta_value_img('image-descubre-nuevo', $id_page); ?>)">
          <div class="text-img">
            <h6><?php echo meta_value('title-descubre-nuevo', $id_page); ?></h6>
            <h3 style="margin-bottom: 15px;"><?php echo meta_value('subtitle-descubre-nuevo', $id_page); ?><br>
            </h3>
            <p><?php echo meta_value('description-descubre-nuevo', $id_page); ?></p>
            <div style="background: #a0d1af; border: none; margin-top: -2%;" class="btn-oficial2">
              <a href="<?php echo meta_value('urlbuttom-descubre-nuevo', $id_page); ?>">
                <?php echo meta_value('buttom-descubre-nuevo', $id_page); ?>
              </a>
            </div>
          </div>  
        </div>
      </div>
    </div>

  </section>  
<?php } ?> 

<!-- ****************** Lo más vendido *********************-->
<?php if(get_field('template_scelestia') == 'Lo más vendido'){ ?>  
  <section class="colecciones ">
    <h6><?php the_field('title-banner-vendido'); ?></h6>
    <h3 style="margin-bottom: 60px;"><?php the_field('subtitle-banner-vendido'); ?><br>
    </h3>

    <div class="multiple-items">
      <?php 
      $args = 
      array(
        'post_type' => 'product',
        'paged' => $paged,
        'posts_per_page' => 12,   
        'post_status' => 'publish',

      );  ?>    
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;?> 
      <div class="block4 card-product">
        <img src="<?php the_post_thumbnail_url('full');?>">
        <div class="text-product">
          <h5><?php the_title() ?></h5>
          <p><?php echo $product->get_price_html(); ?></p>
          <?php if ($product->sku != NULL) { ?>
            <p>Ref: <?php echo $product->sku;  ?></p>
          <?php } ?>          
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

  <section style=" padding-top: 50px;" class="descubre ">
    <div class="btn-oficial-des line-this">
      <h6 style="color: #353636; font-weight: bold;" >
        <a style="color:#353636; " href="<?php echo meta_value('urlbuttom-central-vendido', $id_page); ?>"><?php echo meta_value('buttom-central-vendido', $id_page); ?></a>
      </h6>
    </div>
  </section>

  <section class="asesora">
    <div class="asesora-img">
      <div class="div2">
        <div class="div" style="background: url(<?php echo meta_value_img('image-descubre-vendido', $id_page); ?>)">
          <div class="text-img">
            <h6><?php echo meta_value('title-descubre-vendido', $id_page); ?></h6>
            <h3 style="margin-bottom: 15px;"><?php echo meta_value('subtitle-descubre-vendido', $id_page); ?><br>
            </h3>
            <p><?php echo meta_value('description-descubre-vendido', $id_page); ?></p>
            <div style="background: #a0d1af; border: none; margin-top: -2%;" class="btn-oficial2">
              <a href="<?php echo meta_value('urlbuttom-descubre-vendido', $id_page); ?>">
                <?php echo meta_value('buttom-descubre-vendido', $id_page); ?>
              </a>
            </div>
          </div>  
        </div>
      </div>
    </div>

  </section>  
<?php } ?> 

<!-- ****************** Contacto *********************-->
<?php if(get_field('template_scelestia') == 'Contacto'){ ?>  
 <div class="blog-page" style="background-color: #fff!important; ">

  <div class="header "  style="background-image: url(<?php echo meta_value_img('image-banner-contacto', $id_page); ?>);">
    <div class="mask-blog">
      <h3 style="font-weight: bold; color: #000; text-align: center; font-size:70px; font-family: 'Bodoni SvtyTwo ITC TT';"><?php echo meta_value('title-banner-contacto', $id_page); ?></h3>
    </div>
  </div>
  <div id="contacto" class="container info-centro ">
    <div class="form">
      <h5>Dejanos un mensaje</h5>
      <div>
        <div class="form2 ">
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>
        </div>
      </div>
    </div>
    <div class="information">
      <h5>Nuestra información</h5>

      <p><?php echo get_theme_mod('description_contact'); ?></p>

      <div class="block-237 ">
        <ul>
            <li class="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/envelope.svg">
            <div style="margin-left:10px;">
              <span style="color: #000; font-size: 16px; font-weight: 600;">Correo electrónico</span> <br><span style="color: #000; font-size: 15px;"><a href="mailto:ventas@scelestia.com"><?php echo get_theme_mod('email'); ?></a></span>
              </div>
            </li>
              <li class="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-call (1).svg">
                <div style="margin-left:10px;">
                <span style="color: #000; font-size: 16px; font-weight: 600;">Teléfono</span> <br>
                <span style="color: #000; font-size: 15px;"><a href="tel:+57 335 35 00"><?php echo get_theme_mod('phone'); ?></a></span>
              </div>
              </li>
			    <li class="">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-call (1).svg">
                <div style="margin-left:10px;">
                <span style="color: #000; font-size: 16px; font-weight: 600;">Movil</span> <br>
                <span style="color: #000; font-size: 15px;"><a href="tel:314 887 9752"><?php echo get_theme_mod('Numero_whatssapp'); ?></a></span>
              </div>
              </li>
              <li>
                <img style="width:24px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/loca.svg">
                <div style="margin-left:7px;">
                <span style="color: #000; font-size: 16px; font-weight: 600;"> Ubicación</span> <br><span style="color: #000; font-size: 15px;"><a href="https://www.google.com/maps/place/Scelestia+-+Donna+Lingerie+Ltda/@6.165036,-75.602208,16z/data=!4m5!3m4!1s0x0:0x5fd93702c3c15e09!8m2!3d6.1650356!4d-75.6022085?hl=es" target="_blank"><?php echo get_theme_mod('address'); ?></a></span></li></div>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="map">
    <?php echo meta_value('map-contacto', $id_page); ?>
  </div>
<?php } ?> 

<!-- ****************** Nosotros *********************-->
<?php if(get_field('template_scelestia') == 'Nosotros'){ ?>  
 <section class="about2">
  <div class="text1-img about">
    <div class="green">
      <img src="<?php echo meta_value_img('image1-item1-nosotros', $id_page); ?>">
    </div>
    <div class="img-about3">
      <img src="<?php echo meta_value_img('image2-item1-nosotros', $id_page); ?>">
    </div>

    <div class="text1 about_info1">
      <h6><?php echo meta_value('title-item1-nosotros', $id_page); ?></h6>
      <h3><?php echo meta_value('subtitle-item1-nosotros', $id_page); ?></h3>
      <P><?php echo meta_value('description-item1-nosotros', $id_page); ?></P>
    </div>
  </div>
  <div class="text1-img bck">

    <div class="text1 about_info1">
      <h6><?php echo meta_value('title-item2-nosotros', $id_page); ?></h6>
      <h3><?php echo meta_value('subtitle-item2-nosotros', $id_page); ?></h3>
      <P><?php echo meta_value('description-item2-nosotros', $id_page); ?></P>
    </div>
    <div class="img-about2">
      <div class="rose1">
        <img src="<?php echo meta_value_img('image1-item2-nosotros', $id_page); ?>">
      </div>
      <div class="img-about4">
        <img src="<?php echo meta_value_img('image2-item2-nosotros', $id_page); ?>">
      </div>
    </div>

  </div>

  <div class="text1-img">
    <div class="green2">
      <img src="<?php echo meta_value_img('image1-item3-nosotros', $id_page); ?>">
    </div>
    <div class="img-about5">
      <img src="<?php echo meta_value_img('image2-item3-nosotros', $id_page); ?>">
    </div>

    <div class="text1 about_info1">
      <h6><?php echo meta_value('title-item3-nosotros', $id_page); ?></h6>
      <h3><?php echo meta_value('subtitle-item3-nosotros', $id_page); ?></h3>
      <P><?php echo meta_value('description-item3-nosotros', $id_page); ?></P>
    </div>
  </div>
 </section>

 <section class="reasons  bck">
  <h6><?php echo meta_value('title-razones-nosotros', $id_page); ?></h6>
  <div class="father-flex">
    <div style="border-right:2px solid #d5c4a8;" class=" father-icon">
      <div class="img-icon">
        <img src="<?php echo meta_value_img('image-razones1-nosotros', $id_page); ?>">   
      </div>

      <div class="img-text">
        <p><?php echo meta_value('title-razones1-nosotros', $id_page); ?></p>
      </div>
    </div>
    <div style="border-right:2px solid #d5c4a8;" class=" father-icon">
      <div class="img-icon">
        <img src="<?php echo meta_value_img('image-razones2-nosotros', $id_page); ?>">   
      </div>

      <div class="img-text">
        <p><?php echo meta_value('title-razones2-nosotros', $id_page); ?></p>
      </div>
    </div>
    <div  class=" father-icon">
      <div class="img-icon">
        <img src="<?php echo meta_value_img('image-razones3-nosotros', $id_page); ?>">   
      </div>

      <div class="img-text">
        <p><?php echo meta_value('title-razones3-nosotros', $id_page); ?></p>
      </div>
    </div>
  </div>
 </section>

 <section class="team">
  <h6><?php echo meta_value('title-team-nosotros', $id_page); ?></h6>
  <h3><?php echo meta_value('subtitle-team-nosotros', $id_page); ?></h3>
  <div class="container multiple-team">
  <?php 
  $args = 
  array(
    'post_type' => 'itemsteam',  
    'post_status' => 'publish',

  );  ?>    
  <?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;?> 
    <div class=" card-team">
      <img src="<?php echo the_field('image_team') ?>">
      <div class="text-team">
        <h5><?php echo the_field('name_team') ?></h5>
        <p><?php echo the_field('cargo_team') ?></p>
      </div>      
    </div>
  <?php endwhile; ?>

  </div>
 </section>
<?php } ?> 

<?php  endwhile; ?> 
<?php get_footer(); ?>