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
	<div class="finalizar-c" style=""  >
		<?php echo do_shortcode('[woocommerce_checkout]'); ?>
		<!-- <a class="button wc-backward" href="<?php echo bloginfo('url').'/index';?>">Ir al inicio</a> -->

	</div>
<?php get_footer();?>
