<?php
/**
 * Template Name: Video Production
 *
 * @package Brandcave
 * @subpackage brandcave
 * @since Brandcave 1.0.1
 */

get_header();
?>
<div class='video-1'>
<div id="navbar-full">
    <div id="navbar">
        <?php include (TEMPLATEPATH . '/nav-main.php'); ?>
        <div class="container">
            <div class="col-md-6 col-sm-6 col-md-offset-6 col-sm-offset-6">
                <h2>We Deliver Video that Drives Results</h2>
                <p>The rise of video in the digital landscape has shown us one thing: we all love a good story. Stories communicate value, service, culture, passion and experience. At Brandcave, we deliver commercial-quality digital media solutions without the big agency price tag.</p>
                <p>The truth is that you don’t need more video; you need more strategy. Even the best videos can fail because of poor planning and unrealistic expectations. Are you driving traffic to your website? Raising awareness of a new product? Explaining your service or product offering? Before striking the lights, we’ll sit down with you to determine the video’s end-goal and metrics to track.</p>
            </div>
        </div>
        </div>
    </div><!--  end navbar -->
</div> <!-- end menu-dropdown -->
<div class="video-2">
    <div class="container">
        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            <h2>We're good. Here's the proof.</h2>
            <p>Does your video convert leads into customers? Video has a powerful ability to open the minds of your customers to new opportunities. It is arguably the best platform for telling your brand’s story. At Brandcave, we deliver commercial-quality video with an emphasis on originality and creativity.</p>
            <iframe src="//fast.wistia.net/embed/iframe/kqzyxx5op5" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="640" height="360"></iframe><script src="//fast.wistia.net/assets/external/E-v1.js" async></script>

        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="video-3">
    <div class="container">
        <div class="col-md-5">
            <h2>Here’s a bunch of questions we need answered on the frontend.</h2>
            <h4>Or, call us at 1 (800) 561-8790</h4>
            <p>Thanks for your interest. If you’re looking to tell your story through video, give us an idea of what you’re trying to accomplish. After completing the form, we’ll contact you within 24 business hours with some fresh ideas. </p>
        </div>
        <div class="col-md-offset-1 col-md-6">
            <?php echo do_shortcode( '[contact-form-7 id="36" title="Capabilities Form"]' ); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>