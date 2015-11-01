<?php
/**
 * Template Name: Web Development
 *
 * @package Brandcave
 * @subpackage brandcave
 * @since Brandcave 1.0.1
 */

get_header();
?>
<div class='web-1'>
<div id="navbar-full">
    <div id="navbar">
        <?php include (TEMPLATEPATH . '/nav-main.php'); ?>
        <div class="container">
            <div class="col-md-6 col-sm-6 col-md-offset-6 col-sm-offset-6">
                <h2>1. We start with a plan</h2>
                <p>Every greate web design project begins with a lot of research. Specifically, it begins with research about your company. During the discovery phase, we’ll seek to uncover your needs and create the user journey map that every visitor should take before becoming a customer. We’ll establish the purpose, determine the goals, understand the target audience and describe your brand. We’ll keep you well informed along the way. You’ll be given a roadmap with milestones to watch for.</p>
                <p>This is the process of understanding the big picture. Whether you’re redesigning or starting from scratch, we’ll become as familiar with your brand as you are.</p>
            </div>
        </div>
        </div>
    </div><!--  end navbar -->
</div> <!-- end menu-dropdown -->
<div class="web-2">
    <div class="container">
        <div class="col-md-6 col-sm-6 col-md-offset-6 col-sm-offset-6">
            <h2>2. Then we build the skeleton</h2>
            <p>Because our UX designers are not mind readers, we create the site structure first. Before adding graphics, we’ll create a wireframe layout of every page of your website. A wireframe is a simple drawing of the chunks of information and functionality you want in your site. It’s a skeleton that says, “X goes here and Y goes there.” After all, we’ll need to figure out what features and capabilities you want before mocking it up.</p>
            <p>After we’ve developed the wireframes, our designers have a clear idea of the purpose of hte site, the content that will comprise the site and the architecture.</p>

        </div>
    </div>
</div>
<div class="web-3">
    <div class="container">
        <div class="col-md-6 col-sm-6 col-md-offset-6 col-sm-offset-6">
            <h2>3. And give it life</h2>
            <p>Designing and developing websites that are responsive to mobile and tablet devices is an important part of the work we do at Brandcave. We take pride in the things you can’t see, like the code on your website. Whether your site is built on Wordpress or Hubspot, we’ll always use the best practicies in our web development.</p>
            <p>Code isn’t the only thing we care about. As an inbound marketing agency, we want your website to become the greatest lead generation tool you own. We care a lot about search engine optimization and we’ll help your website cover over 200 factors in Google’s algorithm. After discovering the search terms your customers are using, we will develop a strategy that drives customers to your site.</p>

        </div>
    </div>
</div>
<div class="web-4">
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <h2>4. Finally, we show you off</h2>
            <p>Web design is not just about aesthetics. It’s about making something that’s fast, easy to use and useful for everyone in your sales funnel. Those are the trademarks of every website we build. We’re proud of our work. We stand behind it. Here are some recent samples:</p>
            <img src="../assets/img/web-MTS.png">
            <img src="../assets/img/web-lIft.png">
            <div class="clearfix"></div>
            <img src="../assets/img/web-mdi.png">
            <img src="../assets/img/web-LocallyGo.png">
        </div>
    </div>
</div>
<div class="capabilities-section">
    <div class="container">
        <div class="col-md-5">
            <h2>It’s time to talk about your website.</h2>
            <p>Every website represents thousands of decisions: what to include, what to exclude, which technologies to use and how to configure it. We’ll work with you to answer every single one of them. While web design can be a stressful process, we make every intention to hit all of your goals. We’ll begin by listening to you. Fill the form and a representative will contact you within 48 business hours.</p>
        </div>
        <div class="col-md-offset-1 col-md-6">
            <?php echo do_shortcode( '[contact-form-7 id="36" title="Capabilities Form"]' ); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>