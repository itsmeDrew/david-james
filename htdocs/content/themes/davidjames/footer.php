<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<div class="parallax-pro">
	<div class="container">
		<div class="footer-text row">
			<div class="col-md-4 col-sm-4 col-xs-4">
				<h4>Office</h4>
				<p>2111 North Austin Ave<br />
					#7201 <br />
					Georgetown, TX 78626<br />
					1 (800) 561-8790<br />
					hello@brandcave.co
				</p>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3">
				<h4>CAPABILITIES</h4>
				<p>
					<?php $query = new WP_Query(array( 'post_parent' => 7, 'post_type' => 'page')); ?>
					<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
					<a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
					<br />
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</p>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2">
				<h4>ABOUT</h4>
				<p>
					<?php $query = new WP_Query(array( 'post_parent' => 0, 'post_type' => 'page', 'post__not_in' => array(4, 7) )); ?>
					<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
					<a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
					<br />
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</p>
			</div>
		</div>
		<div class="space-60"></div>
		<div class="row">
			<div class="col-md-12">
				<div class="credits">
					<a href="http://brandcave.co"><img class="footer-logo unveil" src="<?php bloginfo(template_url); ?>/img/logo-blk.png"></a>
					A small but perfectly formed inbound marketing agency.
					<div class="elevator">
						<img class="unveil" src="<?php bloginfo(template_url); ?>/img/Up.png">
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

</body>

<script src="<?php bloginfo(template_url); ?>/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?php bloginfo(template_url); ?>/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php bloginfo(template_url); ?>/js/gsdk-bootstrapswitch.js"></script>
<script charset="ISO-8859-1" src="http://fast.wistia.com/assets/external/popover-v1.js"></script>
<script src="<?php bloginfo(template_url); ?>/js/unveil.js" type="text/javascript"></script>
<script src="<?php bloginfo(template_url); ?>/js/custom.js"></script>
<script src="<?php bloginfo(template_url); ?>/js/nav.js"></script>
<script src="<?php bloginfo(template_url); ?>/js/bio.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$("img").unveil();
	});
// Simple elevator usage.
var elementButton = document.querySelector('.elevator');
var elevator = new Elevator({
	element: elementButton,
	mainAudio: 'http://8ac.977.myftpupload.com/wp-content/themes/brandcave/music/elevator.mp3',
	endAudio:  'http://8ac.977.myftpupload.com/wp-content/themes/brandcave/music/ding.mp3'
});
</script>

<?php wp_footer(); ?>

</body>
</html>
