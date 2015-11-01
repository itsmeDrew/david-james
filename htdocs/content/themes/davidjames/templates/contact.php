<?php
/**
 * Template Name: Contact
 *
 * @package Brandcave
 * @subpackage brandcave
 * @since Brandcave 1.0.1
 */

get_header();
?>
<div class='blurred-container blurred-container--large'>
  <div id="navbar-full">
    <div id="navbar">
      <?php include (TEMPLATEPATH . '/nav-main.php'); ?>
    </div>
  </div><!--  end navbar -->
</div> <!-- end menu-dropdown -->
<div class="contact-form--wrapper">
    <h1 class="contact-form__heading">let's make something awesome</h1>
    <h4 class="contact-form__heading--sub">Or, feel free to call us at 1-800-561-8790</h4>
    <?php echo do_shortcode( '[contact-form-7 id="34" title="Contact Page Form"]' ); ?>
</div>
<div class="background--full"></div>

<?php get_footer(); ?>