<?php
/**
 * Template Name: Reach
 *
 * @package David James
 * @subpackage david-james
 * @since David James 1.0.1
 */

get_header();
?>
<?php include (TEMPLATEPATH . '/nav-main.php'); ?>

<div class="reach--wrapper" role="hero">
  <div class="container">
    <div class="reach-content row">
      <h4 class="reach-content__heading">contact the DAVID JAMES studio</h4>
      <h2 class="reach-content__heading">want to learn more?</h2>
      <?php echo do_shortcode( '[contact-form-7 id="4" title="Reach Form"]' ); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
