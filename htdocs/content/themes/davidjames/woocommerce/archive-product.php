<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * @package David James
 * @subpackage david-james
 * @since David James 1.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>
<?php include (TEMPLATEPATH . '/nav-main.php'); ?>
<?php if ( have_posts() ) : ?>

<div class="block product-listing--wrapper container-fluid">
	<header class="product-listing__header">
		<h2 class="product-listing__heading">The Artwork of David James</h2>
	</header>
	<div class="product-listing__facets row">
		<?php do_action( 'woocommerce_before_shop_loop' ); ?>
		<?php do_action( 'woocommerce_sidebar' ); ?>
	</div>
	<?php woocommerce_product_loop_start(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php wc_get_template_part( 'content', 'product' ); ?>
	<?php endwhile; // end of the loop. ?>

	<?php woocommerce_product_loop_end(); ?>

	<?php do_action( 'woocommerce_after_shop_loop' ); ?>

	<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
		<?php wc_get_template( 'loop/no-products-found.php' ); ?>
	<?php endif; ?>

	<?php do_action( 'woocommerce_after_main_content' ); ?>

</div>
<?php get_footer(); ?>
