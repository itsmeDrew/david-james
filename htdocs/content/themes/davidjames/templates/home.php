<?php
/**
 * Template Name: Home
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
                  <h3>We Love To</h3>
                  <h1>Create Digital Experiences</h1>
                  <p>Our clients love us because we integrate video, design, web development and content creation into comprehensive marketing strategies.</p>
                  <h4><a href="//fast.wistia.net/embed/iframe/g8uzytxr8v?popover=true" class="wistia-popover[height=506,playerColor=299abe,width=900]">watch video</a></h4>
                </div>
                <div class="down-button">
                  <a href="#one"><img class="unveil" src="<?php bloginfo(template_url); ?>/img/Down-Arrow.png"></a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--  end navbar -->
</div> <!-- end menu-dropdown -->
<div class="submain">
    <div class="container">
        <h4>TRUSTED BY SOME EXCELLENT BRANDS</h4>
        <img alt="Agru America" class="unveil" src="<?php bloginfo(template_url); ?>/img/Agru-America.png">
        <img alt="Becoming One" class="unveil" style="width:150px" src="<?php bloginfo(template_url); ?>/img/Becoming-One.png">
        <span class="submainblock"><img class="unveil" alt="Benchmark Mortgage" src="<?php bloginfo(template_url); ?>/img/Benchmark.png">
        <img alt="Zedbue" class="unveil" src="<?php bloginfo(template_url); ?>/img/Zedvue.png"></span>
    </div>
</div>
<div id="one" class="main">
    <section class="home-process">
    <div class="process-row">
        <div class="process-block block-1">
            <div class="process-block-inner">
                <span class="process-badge"></span>
                <a href="capabilities/video-production.html"><h2>Tell Your Story</h2></a>
                <p>Video is powerful and the research proves it. Our team specializes in commercial-quality video production. Interested in a video project with us?
                  <a href="capabilities/video-production.html">Get a video &rarr;</a>
                </p>
                <figure class="process-image"></figure>
            </div>
        </div>

        <div class="process-block block-2">
            <div class="process-block-inner">
                <span class="process-badge"></span>
                <a href="/capabilities/web-development.html"><h2>Build a Digital Experience</h2></a>
                <p>From Hubspot to Wordpress, we are experts of web design. Our team of designers and developers can custom build a website tailored to your individual goals. <a href="capabilities/web-development.html">Discover more &rarr;</a></p>
                <figure class="process-image"></figure>
            </div>
        </div>
    </div>
    <div class="process-row">
        <div class="process-block block-3">
            <div class="process-block-inner">
                <span class="process-badge"></span>
                <a href="capabilities/inbound-marketing.html"><h2>Generate Leads Online</h2></a>
                <p>We specialize in growing and converting organic online traffic. Through content creation, search engine optimization and social media, we help companies  leverage time, creativity and energy.<a href="capabilities/inbound-marketing.html"> Get more leads &rarr;</a></p>
                <figure class="process-image"></figure>
            </div>
        </div>

        <div class="process-block block-4">
            <div class="process-block-inner">
                <span class="process-badge"></span>
                <a href="contact"><h2>Get A Complete Strategy</h2></a>
                <p>We partner with anyone from startups to enterprise companies to create comprehensive digital strategies tailored to their needs and KPIs. Learn more and <a href="contact">Contact us today. &rarr;</a></p>
                <figure class="process-image"></figure>
            </div>
        </div>
    </div>
</section>
<!-- end container -->
</div>
<div class="blog-section">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h4>Latest Blog Posts</h4>
            <h2>Our latest rants may actually be worth reading.</h2>
        </div>
        <?php $query = new WP_Query(array( 'posts_per_page' => 3)); ?>
        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
        <div class="col-md-4 col-sm-4">
            <div class="calendar">
                <h5><?php the_time('d'); ?></h5>
                <h6 class="js-abbreviate"><?php the_time('F'); ?></h6>
            </div>
            <div class="post-text">
                <h5><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php the_excerpt(); ?></p>
            </div>
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
</div>
<div class="cta-section">
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h4>New eBook</h4>
            <h2>Before you decide to redesign your website, read this.</h2>
            <p>Redesigning your website may be one of the biggest challenges you face when it comes to marketing your business. However, when you ask the right questions from the start, you can save time, frustration and money. In this eBook, we discuss 10 essential principles your future website should follow.</p>
             <?php echo do_shortcode( '[contact-form-7 id="41" title="eBook Form"]' ); ?>
        </div>
    </div>
</div>
<div class="contact-section">
    <div class="container">
        <div class="col-md-5">
            <h4>Contact</h4>
            <h2>We’re from Texas, but we’ll fly to you.</h2>
            <p>Building trust starts with transparency and a genuine investment in your situation. While many digital marketing companies operate faceless behind email, we like to meet with our clients face-to-face. Let’s start a conversation about your business goals and determine how Brandcave can partner with you in reaching them. A representative will contact you within 48 business hours of submitting the contact form.</p>
            <h5>Hate Forms?</h5>
            <p>We understand! Feel free to contact us toll-free at 1-800-279-1455 or emailing <a href="mailto:hello@brandcave.co">hello@brandcave.co</a>. We can’t guarantee that we’ll answer after 6pm (our wives hate when we do that) but we’ll return your message as soon as possible.</p>
        </div>
        <div class="col-md-offset-1 col-md-6">
            <?php echo do_shortcode( '[contact-form-7 id="24" title="Home Contact Form"]' ); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>