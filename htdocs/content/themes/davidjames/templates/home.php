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
<div class="jumbotron" role="hero">
  <div class="container">
    <div class="hero__logo">
      <img src="<?php bloginfo(template_url);?>/img/david-jones-signature.png" alt="david-jones-signature" />
    </div>
    <div class="hero__content">
      <p>“I think this, these diaries of sorts, a memoir of the steps you have taken, is the healthiest approach to deal with these difficult problems.”</p>
      <a class="jumbotron__link" href="#" role="cta">Watch Trailer</a>
    </div>
  </div>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#">About</a></li>
          <li><a href="#">Journal</a></li>
          <li><a href="#">Art</a></li>
          <li><a href="#">Reach</a></li>
          <li><button class="btn-pill" href="#">Purchase Steps | $15</button></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">$0.00 0 Items</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div>
<div class="block new-book--wrapper container">
  <div class="row">
    <div class="block-heading--wrapper col-xs-12 col-sm-4">
      <h4 class="block-heading--secondary">new book from david james:</h4>
      <h2 class="block-heading--primary">Steps</h2>
    </div>
    <div class="block-content col-xs-12 col-sm-8">
      <p class="block-content__paragraph">
        On sale now, Steps is a story of growth, reinvention, death and love, reminding us that there is always hope and everyday is a new opportunity to become better. It is the memoir of Issac, a country boy, who, after becoming unsatisfied with life in West Texas, travels the world in search of love and meaning. At every turn, however, he is met with insurmountable obstacles. Drawing on his relentless, dogged refusal to give up, he steadfastly confronts his demons. But, will it be enough to overcome the impossible odds against him?
      </p>
      <div class="new-book__stats--wrapper">
        <div class="row">
          <div class="new-book__stat col-xs-3">
            <h2>407</h2>
            <h5>pages</h5>
          </div>
          <div class="new-book__stat col-xs-3">
            <h2>54</h2>
            <h5>paintings</h5>
          </div>
          <div class="new-book__stat col-xs-3">
            <h2>6</h2>
            <h5>prose</h5>
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
<?php get_footer(); ?>
