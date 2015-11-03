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
div.
<?php get_footer(); ?>
