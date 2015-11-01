<?php
/**
 * Template Name: About
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
              <div class="motto hero-container__two-col--left">
                <h3>The fancy term is</h3>
                <h1>integrated</h1>
                <h1>digital</h1>
                <h1>marketing</h1>
                <h3>but it's just fun and</h3>
                <h3>games to us</h3>
              </div>
              <div class="about-desc hero-container__two-col--right">
                <p class="hero-container__desc">
                  We help businesses share their story digitally by integrating web design, video production, content and social media into meaningful customer experiences. We get marketing because we get people, and our work is corroborated by measurable objectives and KPIs. From the neighborhood bookstore to the Inc. 500 recipient, we are helping companies disrupt everything from our small hometown of Georgetown, Tx.
                </p>
                <p class="hero-container__desc">
                  Our team obssesses over the big picture and being particular on the particulars.
                </p>
                <h4><a href="<?php echo get_page_link( get_page_by_title( 'Meet Us' )->ID ); ?>">meet our team</a></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--  end navbar -->
</div> <!-- end menu-dropdown -->
<div class="row about-row">
    <div class="js-bio-wrapper">
        <div class="js-bio bio--wrapper" data-employee="1">
            <div class="col-md-6 about__block about__block--large about__block--employee employee--one">
                <div class="about__block-inner"></div>
            </div>
            <div class="col-md-6 about__block about__block--large block--white">
                <div class="about__block-inner">
                    <h2>cody miles <span class="about-title">| creative director</span></h2>
                    <p>A strong conceptual thinker and hands-on leader, Cody Miles is an Austin-based creative director and co-founder of Brandcave. Responsible for overall vision and strategy, Cody serves as liaison between design and production.</p>
                    <p>A small agency with strong roots in inbound marketing and web design, Cody co-launched Brandcave in September 2015 as a complete resource for web, social video and print. In it’s short life, Brandcave has grown to over 20 national clients.</p>
                    <p>Prior to Brandcave, Cody worked as User Experience Manager at one of Dallas’ fastest growing PR firms and Inbound Marketing Director over a national bank.</p>
                    <p>Cody studied public relations at Sam Houston State University.</p>
                </div>
            </div>
        </div>
        <div class="js-bio bio--wrapper" data-employee="2">
            <div class="col-md-6 about__block about__block--large about__block--employee employee--two">
                <div class="about__block-inner"></div>
            </div>
            <div class="col-md-6 about__block about__block--large block--white">
                <div class="about__block-inner">
                    <h2>brett favre <span class="about-title">| creative director</span></h2>
                    <p>A strong conceptual thinker and hands-on leader, Cody Miles is an Austin-based creative director and co-founder of Brandcave. Responsible for overall vision and strategy, Cody serves as liaison between design and production.</p>
                    <p>A small agency with strong roots in inbound marketing and web design, Cody co-launched Brandcave in September 2015 as a complete resource for web, social video and print. In it’s short life, Brandcave has grown to over 20 national clients.</p>
                    <p>Prior to Brandcave, Cody worked as User Experience Manager at one of Dallas’ fastest growing PR firms and Inbound Marketing Director over a national bank.</p>
                    <p>Cody studied public relations at Sam Houston State University.</p>
                </div>
            </div>
        </div>
        <div class="js-bio bio--wrapper" data-employee="3">
            <div class="col-md-6 about__block about__block--large about__block--employee employee--three">
                <div class="about__block-inner"></div>
            </div>
            <div class="col-md-6 about__block about__block--large block--white">
                <div class="about__block-inner">
                    <h2>aaron rodgers <span class="about-title">| creative director</span></h2>
                    <p>A strong conceptual thinker and hands-on leader, Cody Miles is an Austin-based creative director and co-founder of Brandcave. Responsible for overall vision and strategy, Cody serves as liaison between design and production.</p>
                    <p>A small agency with strong roots in inbound marketing and web design, Cody co-launched Brandcave in September 2015 as a complete resource for web, social video and print. In it’s short life, Brandcave has grown to over 20 national clients.</p>
                    <p>Prior to Brandcave, Cody worked as User Experience Manager at one of Dallas’ fastest growing PR firms and Inbound Marketing Director over a national bank.</p>
                    <p>Cody studied public relations at Sam Houston State University.</p>
                </div>
            </div>
        </div>
        <div class="js-bio bio--wrapper" data-employee="4">
            <div class="col-md-6 about__block about__block--large about__block--employee employee--four">
                <div class="about__block-inner"></div>
            </div>
            <div class="col-md-6 about__block about__block--large block--white">
                <div class="about__block-inner">
                    <h2>clay matthews <span class="about-title">| creative director</span></h2>
                    <p>A strong conceptual thinker and hands-on leader, Cody Miles is an Austin-based creative director and co-founder of Brandcave. Responsible for overall vision and strategy, Cody serves as liaison between design and production.</p>
                    <p>A small agency with strong roots in inbound marketing and web design, Cody co-launched Brandcave in September 2015 as a complete resource for web, social video and print. In it’s short life, Brandcave has grown to over 20 national clients.</p>
                    <p>Prior to Brandcave, Cody worked as User Experience Manager at one of Dallas’ fastest growing PR firms and Inbound Marketing Director over a national bank.</p>
                    <p>Cody studied public relations at Sam Houston State University.</p>
                </div>
            </div>
        </div>
    </div>
    <ul class="about__btn--list">
        <li class="js-bio-btn about__btn--item" data-employee="1">
            <img class="about__btn--img" src="<?php bloginfo(template_url); ?>/img/about-btn-1.png" alt="about-btn-1">
        </li>
        <li class="js-bio-btn about__btn--item" data-employee="2">
            <img class="about__btn--img" src="<?php bloginfo(template_url); ?>/img/about-btn-2.png" alt="about-btn-2">
        </li>
        <li class="js-bio-btn about__btn--item" data-employee="3">
            <img class="about__btn--img" src="<?php bloginfo(template_url); ?>/img/about-btn-3.png" alt="about-btn-3">
        </li>
        <li class="js-bio-btn about__btn--item" data-employee="4">
            <img class="about__btn--img" src="<?php bloginfo(template_url); ?>/img/about-btn-4.png" alt="about-btn-4">
        </li>
    </ul>
</div>
<div class="row about-row">
    <div class="col-md-6 about__block about__block--small block--blue">
        <div class="about__block-inner">
            <h2>we're built on data</h2>
        </div>
    </div>
    <div class="col-md-6 about__block about__block--small block--white">
        <div class="about__block-inner">
            <p>Data and creativity live harmoniously in the cave. In a word, we love analytics. We use market research and customer data to maximize ROI so our clients get the most powerful and lead generating solutions for their money.</p>
        </div>
    </div>
    <div class="col-md-6 about__block about__block--small block--white">
        <div class="about__block-inner">
            <p>Every good storyteller has a deep-rooted interest in the protagonist. We do too. So, we invest in our client relationships in order to share deeper, more impactful messages. History, passions and vision. All included.</p>
        </div>
    </div>
    <div class="col-md-6 about__block about__block--small block--blue">
        <div class="about__block-inner">
            <h2>We’re  Our Client’s Storytellers</h2>
        </div>
    </div>
    <div class="col-md-6 about__block about__block--small block--blue">
        <div class="about__block-inner">
            <h2>We’re lean & agile evangelists</h2>
        </div>
    </div>
    <div class="col-md-6 about__block about__block--small block--white">
        <div class="about__block-inner">
            <p>We haven’t been in the business for 30 years and that’s a good thing. At Brandcave, we stay agile by adapting to changing marketing conditions, reacting to new data, and constantly improving. There’s no starch in our pants.</p>
        </div>
    </div>
</div>
<div class="row about__cta--wrapper">
    <div class="col-sm-12 col-md-6">
       <h3>lets create</h3>
       <h1>something</h1>
       <h1>great.</h1>
    </div>
    <div class="col-sm-12 col-md-5 col-md-push-1">
        <p>At Brandcave, we don’t sell our time. We sell intellectual capital and business results. We’re able to offer integrated digital marketing services to meet our client’s specific needs. Rather than focusing on overhead, hours and markup, we’re able to focus on value and effectiveness. At the end of the day, our relationships are profitable because our work is strategic and we deliver every project like it was our last.</p>
        <h4><a href="<?php echo get_page_link( get_page_by_title( 'Meet Us' )->ID ); ?>">get started</a></h4>
    </div>
</div>
</div>

<?php get_footer(); ?>