<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package David James
 * @subpackage david-james
 * @since David James 1.0.1
 */

get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array(1200, 350) ); ?>
<?php if ($thumbnail[0]) : ?>

<div class="blurred-container" style="background-image: url('<?php echo $thumbnail[0]; ?>')">
  <div id="navbar-full">
    <div id="navbar">
      <?php include (TEMPLATEPATH . '/nav-main.php'); ?>
      <div class="container">
        <div class="hero-container">
            <div class="motto">
              <h3><?php the_title(); ?></h3>
              <p>Posted on <?php the_time('D, M, Y'); ?></p>
            </div>
        </div>
      </div>
		</div>
	</div>
	<div class="blurred-container__overlay"></div>
</div><!--  end navbar -->
<?php endif; ?>
<div id="one" class="main">
	<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
		<article class="blog-posting__content">
			<?php the_content(); ?>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</article>
	</div>
	<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
		<div class="blog-posting__comments--wrapper">
			<?php
			    if ( comments_open() || get_comments_number() ) :
			      comments_template();
			    endif;
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
