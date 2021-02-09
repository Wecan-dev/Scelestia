<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
$urlsinparametros= explode('?', $_SERVER['REQUEST_URI'], 2);
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
  <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
    <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
  <?php endif; ?>

  <?php
  /**
   * Hook: woocommerce_archive_description.
   *
   * @hooked woocommerce_taxonomy_archive_description - 10
   * @hooked woocommerce_product_archive_description - 10
   */
  do_action( 'woocommerce_archive_description' );
  ?>
</header>
<?php
if ( woocommerce_product_loop() ) {

  /**
   * Hook: woocommerce_before_shop_loop.
   *
   * @hooked woocommerce_output_all_notices - 10
   * @hooked woocommerce_result_count - 20
   * @hooked woocommerce_catalog_ordering - 30
   */
  

  woocommerce_product_loop_start();?>
<a href="#navigation" class="nav-trigger">
  Menu <span></span>
</a>



<nav class="nav-container" id="navigation">
  <div class="filter">
    <a class="btn-filter--title" >Filtros <i class="fa fa-angle-down" aria-hidden="true"></i></a>
     <?php echo woocommerce_catalog_ordering();  ?> 
    <div id="collapseOne" >
         
      
      <h2 class="widget-title">CATEGORÍAS</h2>
          <?php
          global $wpdb;
          $product_categories = get_categories( array( 'taxonomy' => 'product_cat', 'orderby' => 'menu_order', 'order' => 'asc', 'parent' =>0  ));  
          ?>                                                        
          <?php foreach($product_categories as $category): ?>
            <?php $checked =NULL;  if ($category->slug == $_GET['cat']) { $checked = "checked='checked'"; } $categoria = $category->name; $category_id = $category->term_id; $category_link = get_category_link( $category_id ); ?>         
              <li>
                <?php if (get_queried_object()->slug == $category->slug){ ?>
                  <a class="cat_filter" href="<?php echo get_home_url().'/tienda/?'.$urlsinparametros[1]?>">
                      <?php echo  $categoria ?>
                      <span class="checked">
                         <i class="fa fa-times-circle" aria-hidden="true"></i>
                      </span>
                  </a>
                <?php } else { ?>
                  <a class="cat_filter" href="<?php echo get_home_url().'/product-category/'.$category->slug?>">
                      <?php echo  $categoria ?>
                  </a>                
                <?php } ?>  
              </li>
              <?php endforeach; ?> 
  <?php dynamic_sidebar( 'sidebar-2' ); ?>  
    <h2 class="widget-title">Colores</h2>
                <?php
                  global $wpdb;
                  $product_categories = get_categories( array( 'taxonomy' => pa_color, 'orderby' => 'menu_order', 'order' => 'asc' ));  
                  ?>                                                        
                  <?php foreach($product_categories as $category): ?>
                    <?php $checked = NULL; $categoria = $category->name; $category_id = $category->term_id; $category_link = get_category_link( $category_id ); ?> 
                    <?php 
                    if ($category->slug == $_GET['cat']) { $checked = "checked='checked'"; }
                    global $wpdb;
                    $count = 0;
                    $result1 = $wpdb->get_results ("SELECT * FROM ".$wpdb->prefix."termmeta where term_id = '$category_id' and meta_key = 'pa_color_swatches_id_phoen_color'");
                    foreach ( $result1 as $page1 )
                      {  $color = $page1->meta_value;}
                    ?> 
          <?php if (get_queried_object()->slug != NULL) { ?>            
              <?php if ( count_product_cat(get_queried_object()->slug,$category->slug) > 0 ) { ?>
                    <li>
                        <?php if ($_GET["filter_color"] != NULL && $_GET["filter_color"] == $category->slug){ ?> 
                          <span class="filter-color" style="background: <?php echo $color; ?>">&nbsp;</span>
                             <a class="hover_cat" href="<?php echo $urlsinparametros[0].'?&amp;query_type_color=or';?>">               
                                <?= $categoria ?> 
                                <span class="checked">
                                  <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </span>
                            </a>
                        <?php }else{ ?> 
                          <span class="filter-color" style="background: <?php echo $color; ?>">&nbsp;</span>
                             <a class="filter-a" href="<?php echo $urlsinparametros[0].'/?filter_color='.$category->slug;?>">
                              <?= $categoria ?>              
                             </a>
                        <?php }  ?>                     
                    </li>
              <?php } ?>      
        <?php }else { ?>
                    <li>
                        <?php if ($_GET["filter_color"] != NULL && $_GET["filter_color"] == $category->slug){ ?> 
                          <span class="filter-color" style="background: <?php echo $color; ?>">&nbsp;</span>
                             <a class="hover_cat" href="<?php echo $urlsinparametros[0].'?&amp;query_type_color=or';?>">               
                                <?= $categoria ?> 
                                <span class="checked">
                                  <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </span>
                            </a>
                        <?php }else{ ?> 
                          <span class="filter-color" style="background: <?php echo $color; ?>">&nbsp;</span>
                             <a class="filter-a" href="<?php echo $urlsinparametros[0].'/?filter_color='.$category->slug;?>">
                              <?= $categoria ?>              
                             </a>
                        <?php }  ?>                     
                    </li> 
        <?php } ?>                     
                  <?php endforeach; ?>    
    
          <div class="shop-sidebar__newsletter">
          

        <?php echo do_shortcode('[formidable id=2]');  ?>
      </div>  
    
    </div>
   </div>

 
</nav>

<section class="shop-content">
<div class="shop-flex">
  <div class="filter">
    <a class="btn-filter--title" >Filtros <i class="fa fa-angle-down" aria-hidden="true"></i></a>
     <?php echo woocommerce_catalog_ordering();  ?> 
    <div id="collapseOne" >
         
      
      <h2 class="widget-title">CATEGORÍAS</h2>
          <?php
          global $wpdb;
          $product_categories = get_categories( array( 'taxonomy' => 'product_cat', 'orderby' => 'menu_order', 'order' => 'asc', 'parent' =>0  ));  
          ?>                                                        
          <?php foreach($product_categories as $category): ?>
            <?php $checked =NULL;  if ($category->slug == $_GET['cat']) { $checked = "checked='checked'"; } $categoria = $category->name; $category_id = $category->term_id; $category_link = get_category_link( $category_id ); ?>         
              <li>
                <?php if (get_queried_object()->slug == $category->slug){ ?>
                  <a class="cat_filter" href="<?php echo get_home_url().'/tienda/?'.$urlsinparametros[1]?>">
                      <?php echo  $categoria ?>
                      <span class="checked">
                         <i class="fa fa-times-circle" aria-hidden="true"></i>
                      </span>
                  </a>
                <?php } else { ?>
                  <a class="cat_filter" href="<?php echo get_home_url().'/product-category/'.$category->slug?>">
                      <?php echo  $categoria ?>
                  </a>                
                <?php } ?>  
              </li>
              <?php endforeach; ?> 
  <?php dynamic_sidebar( 'sidebar-2' ); ?>  
    <h2 class="widget-title">Colores</h2>
                <?php
                  global $wpdb;
                  $product_categories = get_categories( array( 'taxonomy' => pa_color, 'orderby' => 'menu_order', 'order' => 'asc' ));  
                  ?>                                                        
                  <?php foreach($product_categories as $category): ?>
                    <?php $checked = NULL; $categoria = $category->name; $category_id = $category->term_id; $category_link = get_category_link( $category_id ); ?> 
                    <?php 
                    if ($category->slug == $_GET['cat']) { $checked = "checked='checked'"; }
                    global $wpdb;
                    $count = 0;
                    $result1 = $wpdb->get_results ("SELECT * FROM ".$wpdb->prefix."termmeta where term_id = '$category_id' and meta_key = 'pa_color_swatches_id_phoen_color'");
                    foreach ( $result1 as $page1 )
                      {  $color = $page1->meta_value;}
                    ?> 
          <?php if (get_queried_object()->slug != NULL) { ?>            
              <?php if ( count_product_cat(get_queried_object()->slug,$category->slug) > 0 ) { ?>
                    <li>
                        <?php if ($_GET["filter_color"] != NULL && $_GET["filter_color"] == $category->slug){ ?> 
                          <span class="filter-color" style="background: <?php echo $color; ?>">&nbsp;</span>
                             <a class="hover_cat" href="<?php echo $urlsinparametros[0].'?&amp;query_type_color=or';?>">               
                                <?= $categoria ?> 
                                <span class="checked">
                                  <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </span>
                            </a>
                        <?php }else{ ?> 
                          <span class="filter-color" style="background: <?php echo $color; ?>">&nbsp;</span>
                             <a class="filter-a" href="<?php echo $urlsinparametros[0].'/?filter_color='.$category->slug;?>">
                              <?= $categoria ?>              
                             </a>
                        <?php }  ?>                     
                    </li>
              <?php } ?>      
        <?php }else { ?>
                    <li>
                        <?php if ($_GET["filter_color"] != NULL && $_GET["filter_color"] == $category->slug){ ?> 
                          <span class="filter-color" style="background: <?php echo $color; ?>">&nbsp;</span>
                             <a class="hover_cat" href="<?php echo $urlsinparametros[0].'?&amp;query_type_color=or';?>">               
                                <?= $categoria ?> 
                                <span class="checked">
                                  <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </span>
                            </a>
                        <?php }else{ ?> 
                          <span class="filter-color" style="background: <?php echo $color; ?>">&nbsp;</span>
                             <a class="filter-a" href="<?php echo $urlsinparametros[0].'/?filter_color='.$category->slug;?>">
                              <?= $categoria ?>              
                             </a>
                        <?php }  ?>                     
                    </li> 
        <?php } ?>                     
                  <?php endforeach; ?>    
    
          <div class="shop-sidebar__newsletter">
          

        <?php echo do_shortcode('[formidable id=2]');  ?>
      </div>  
    
    </div>
   </div>
  
    
    <div class="cards-shop">
        <?php echo woocommerce_result_count();  ?>
   
      <div class="cards-shop-flex"> 

<?php
  if ( wc_get_loop_prop( 'total' ) ) {
    while ( have_posts() ) {
      the_post();

      /**
       * Hook: woocommerce_shop_loop.
       */
      do_action( 'woocommerce_shop_loop' );

      wc_get_template_part( 'content', 'product' );
    }
  }
?>
</div>
</div>
</div>
</section>
<?php
  woocommerce_product_loop_end();

  /**
   * Hook: woocommerce_after_shop_loop.
   *
   * @hooked woocommerce_pagination - 10
   */
  do_action( 'woocommerce_after_shop_loop' );
} else {
  /**
   * Hook: woocommerce_no_products_found.
   *
   * @hooked wc_no_products_found - 10
   */
  do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );


?>
<style type="text/css">
  .cards-shop{
    display: flex;
    flex-direction: column;
    width: 70%;   }   
    .shop-flex {
      display: flex;
      justify-content: space-around;
    }

    .cards-shop-flex {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }

    section.shop-content {
      padding-top: 50px;
    }

    .show-results{
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 3%;
    }

    .categorys-filter {
      margin-top: 20%;
    }
    .categorys-filter p{
      font-weight: bold;
      position: relative;}
      .categorys-filter p:after{
        position: absolute;
        height: 2px;
        background: #a7977c;
        width: 50px;
        right: 0;
        left: 0;
        /* top: 0; */
        bottom: 0;
        content: '';
      }

      .cat-list li{
        margin-top: 15%;
        font-size: 18px;
        color: #000;
      }

      .price-range-slider {
        width: 100%;
        float: left;
        padding: 10px 20px;
      }
      .price-range-slider .range-value {
        margin: 0;
      }
      .price-range-slider .range-value input {
        width: 100%;
        background: none;
        color: #000;
        font-size: 16px;
        font-weight: initial;
        box-shadow: none;
        border: none;
        margin: 20px 0 20px 0;
      }
      .price-range-slider .range-bar {
        border: none;
        background: #000;
        height: 3px;
        width: 96%;
        margin-left: 8px;
      }
      .price-range-slider .range-bar .ui-slider-range {
        background: #06b9c0;
      }
      .price-range-slider .range-bar .ui-slider-handle {
        border: none;
        border-radius: 25px;
        background: #fff;
        border: 2px solid #06b9c0;
        height: 17px;
        width: 17px;
        top: -0.52em;
        cursor: pointer;
      }
      .price-range-slider .range-bar .ui-slider-handle + span {
        background: #06b9c0;
      }
      .color-radio{
        background: transparent;
        padding: 0 10px;
        width: 100px;
        border-radius: 50px;
        width: 20px;
        height: 20px;
        margin-right: 1%;
      }

      .color-radio2{
        background: blue;
        width: 100px;
        border-radius: 50px;
      }
      .color-check label {

        cursor: pointer;
        border: 1px solid;
        border-radius: 50px;
        height: 20px;
        width: 20px;

      }
      .color-check input:checked + label {
        background: red;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        margin-right: 1%;
        border: 2px solid;
      }

      li.color-check {
        display: flex;
        align-items: center;
      }

      .color-check input[type="checkbox"]{
        width: 20px;
        margin-right: 2%;
      }

      .color-check input:selected{
        background: green!important;
      }
  .filter{
    width: 280px;
  }
    </style>