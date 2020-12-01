<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<section class="colecciones">
      <h6>ACERCA DE</h6>
      <h3 style="margin-bottom:5%;">Lista de deseos      </h3>
	<div class="container wish">
		 <?php echo do_shortcode('[yith_wcwl_wishlist]'); ?> 
	</div>
</section>

<?php get_footer();?>