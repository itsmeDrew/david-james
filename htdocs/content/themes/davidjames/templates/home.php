<?php
/**
 * Template Name: Home
 * This is the default basic template
 *
 * @package David James
 * @subpackage david-james
 * @since David James 1.0.1
 */

get_header();
?>
<div class="jumbotron js-sticky-scroll" role="hero">
  <div class="container">
    <div class="hero__logo">
      <img src="<?php bloginfo(template_url);?>/img/david-james-signature-light.png" alt="David James Logo" />
    </div>
    <div class="hero__content">
      <p>“I think this, these diaries of sorts, a memoir of the steps you have taken, is the healthiest approach to deal with these difficult problems.”</p>
      <a class="jumbotron__link link--underline" href="#" role="cta">Watch Trailer</a>
    </div>
  </div>
  <?php include (TEMPLATEPATH . '/nav-main.php'); ?>
</div>
<div class="block new-book--wrapper container">
  <div class="row">
    <div class="about--wrapper col-xs-12 col-sm-4">
      <h4 class="about-heading--secondary">new book from david james:</h4>
      <h2 class="about-heading--primary">Steps</h2>
    </div>
    <div class="about-content col-xs-12 col-sm-8">
      <p class="about-content__paragraph">
        On sale now, Steps is a story of growth, reinvention, death and love, reminding us that there is always hope and everyday is a new opportunity to become better. It is the memoir of Issac, a country boy, who, after becoming unsatisfied with life in West Texas, travels the world in search of love and meaning. At every turn, however, he is met with insurmountable obstacles. Drawing on his relentless, dogged refusal to give up, he steadfastly confronts his demons. But, will it be enough to overcome the impossible odds against him?
      </p>
      <div class="about__stats--wrapper">
        <div class="row">
          <div class="about__stat col-xs-3">
            <span class="about__stat-number">407</span>
            <span class="about__stat-label">pages</span>
          </div>
          <div class="about__stat col-xs-3">
            <span class="about__stat-number">54</span>
            <span class="about__stat-label">paintings</span>
          </div>
          <div class="about__stat col-xs-3">
            <span class="about__stat-number">6</span>
            <span class="about__stat-label">prose</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="block home-art--wrapper container-fluid">
  <div class="row">
    <div class="home-art__artwork--wrapper col-md-6 col--full-width">
      <div class="home-art__artwork-row">
        <div class="home-art__artwork-content">
          <a class="home-art__link" href="#">view the david james art gallery</a>
        </div>
        <img class="home-art__artwork-image" src="<?php bloginfo('template_url'); ?>/img/art-01.jpg" alt="artwork 01" />
      </div>
    </div>
    <div class="home-art__artwork--wrapper col-md-6 col--full-width">
      <div class="home-art__artwork--row">
        <img class="home-art__artwork-image" src="<?php bloginfo('template_url'); ?>/img/art-02.jpg" alt="artwork 02" />
      </div>
      <div class="home-art__artwork--row">
        <img class="home-art__artwork-image" src="<?php bloginfo('template_url'); ?>/img/art-03.jpg" alt="artwork 03" />
      </div>
    </div>
  </div>
</div>
<div class="block home-blog--wrapper container">
  <div class="row">
    <div class="home-blog__posting home-blog__rule col-md-6">
      <div class="home-blog__heading">
        <h2>This is the Title of the Latest Blog Post</h2>
        <h5 class="date">12-10-15</h5>
      </div>
      <div class="home-blog__content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      </div>
      <a class="link--read-more" href="#">read more</a>
    </div>
    <div class="home-blog__posting col-md-6">
      <div class="home-blog__heading">
        <h2>This is the Title of the Latest Blog Post</h2>
        <span class="date">12-10-15</span>
      </div>
      <div class="home-blog__content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      </div>
      <a class="link--read-more" href="#">read more</a>
    </div>
  </div>
</div>
<div class="block cta--wrapper">
  <div class="container">
    <div class="cta__content col-md-8 col-md-offset-2">
      <div class="cta__header">
        <h2 class="cta__heading">The Debut Book from Author David James</h2>
        <h1 class="cta__heading--large">steps</h1>
      </div>
      <a class="link--underline" href="#">purchase</a>
    </div>
  </div>
</div>
<?php get_footer(); ?>
