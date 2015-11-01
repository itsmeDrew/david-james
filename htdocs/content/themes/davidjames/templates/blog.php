<?php
/**
 * Template Name: Blog
 *
 * @package Brandcave
 * @subpackage brandcave
 * @since Brandcave 1.0.1
 */

get_header();
?>
<div class='blurred-container'>
  <div id="navbar-full">
    <div id="navbar">
      <?php include (TEMPLATEPATH . '/nav-main.php'); ?>
          <div class="container">
            <div class="hero-container">
                <div class="motto">
                  <h3>articles that don't suck</h3>
                  <h1>The BrandCave Blog</h1>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--  end navbar -->
</div> <!-- end menu-dropdown -->
<div id="one" class="main">
    <div class="blog-postings">
        <?php $query = new WP_Query(array( 'posts_per_page' => 10)); ?>
        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
        <div class="col-sm-6 col-lg-4">
            <?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array(1200, 350) ); ?>
            <?php if ($thumbnail[0]) : ?>
              <div class="blog-posting__featured-image" style="background-image: url('<?php echo $thumbnail[0]; ?>')">
                <a href="<?php echo the_permalink(); ?>" class="blog-posting__title">
                    <?php the_title(); ?>
                </a>
                <a href="<?php echo get_permalink(); ?>" class="blog-posting__overlay"></a>
              </div>
            <?php endif; ?>
            <div class="post-text">
                <h5><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php the_excerpt(); ?></p>
            </div>
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
</div>

<?php get_footer(); ?>