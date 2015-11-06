<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package David James
 * @subpackage david-james
 * @since David James 1.0.1
 */

get_header(); ?>
<?php include (TEMPLATEPATH . '/nav-main.php'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array(1200, 350) ); ?>
<?php if ($thumbnail[0]) : ?>

<div class="jumbotron js-sticky-scroll" role="hero" style="background-image: url('<?php echo $thumbnail[0]; ?>')">
  <div class="container">
    <div class="hero__content">
      <h4 class="about-heading--secondary">written by <?php the_author(); ?> | <?php the_time('F j, Y'); ?></h4>
      <h2 class="about-heading--primary"><a href="<?php echo the_permalink();?>"><?php the_title(); ?></a></h2>
    </div>
  </div>
  <div class="jumbotron__overlay"></div>
</div>
<div class="block container">
  <div class="row">
    <div class="col-sm-12">
      <?php the_content(); ?>
    </div>
  </div>
</div>

<?php endif; ?>
<?php endwhile; endif; wp_reset_postdata(); ?>



<?php get_footer(); ?>
