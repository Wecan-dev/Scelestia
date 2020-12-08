<?php if (is_user_logged_in() == NULL ){ header('Location: '.get_home_url().'/inicio-sesion'); } ?>
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


	<div class="margin-top" style="/*margin-top: 100px; margin-bottom: 100px*/">
		<?php echo do_shortcode('[woocommerce_my_account]'); ?>
	</div>

<?php get_footer();