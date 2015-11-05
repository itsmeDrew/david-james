<?php
/**
 * Template Name: Journal
 * This is the default basic template
 *
 * @package David James
 * @subpackage david-james
 * @since David James 1.0.1
 */

get_header();
?>
<?php include (TEMPLATEPATH . '/nav-main.php'); ?>

<div class="block blog-list--wrapper container">
  <?php $queryBlog = new WP_Query(array( 'posts_per_page' => 5)); ?>
  <?php if ($queryBlog->have_posts()) : while ($queryBlog->have_posts()) : $queryBlog->the_post(); ?>
  <div class="blog-list__listing row">
    <div class="blog-list__image--wrapper col-md-4">
      <?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array(1200, 350) ); ?>
      <?php if ($thumbnail[0]) : ?>
      <img class="blog-list__image" src="<?php echo $thumbnail[0]; ?>" alt="<?php echo the_title(); ?>" />
      <?php endif; ?>
    </div>
    <div class="col-md-8">
      <div class="blog-list__header">
        <h4 class="about-heading--secondary">written by <?php the_author(); ?> | <?php the_date(); ?></h4>
        <h2 class="about-heading--primary"><?php the_title(); ?></h2>
      </div>
      <p class="blog-list__excerpt">
        <?php the_excerpt(); ?>
      </p>
    </div>
  </div>
  <?php endwhile; endif; wp_reset_postdata(); ?>
</div>
<?php get_footer(); ?>
