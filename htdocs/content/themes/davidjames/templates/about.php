<?php
/**
 * Template Name: About
 * This is the default basic template
 *
 * @package David James
 * @subpackage david-james
 * @since David James 1.0.1
 */

get_header();
?>
<?php include (TEMPLATEPATH . '/nav-main.php'); ?>
<div class="jumbotron" role="hero"></div>
<div class="block about--wrapper container">
  <div class="row">
    <div class="about--wrapper col-xs-12 col-sm-4">
      <h4 class="about-heading--secondary">biography</h4>
      <h2 class="about-heading--primary">about david james</h2>
    </div>
    <div class="about-content col-xs-12 col-sm-8">
      <p class="about-content__paragraph">
        David James is the author of Steps, his debut novel.
      </p>
      <p class="about-content__paragraph">
        Born to a country family in the spring of 1950, James spent most of his foundational years as a ranchhand in west Texas. While growing up as a cowboy, he developed a unique passion for art and literature. A lifelong painter, James has worked professionally as an artist for over forty years.
      </p>
      <p class="about-content__paragraph">
        Unsatisfied with life in the country, James left west Texas to travel and live throughout the world — mostly out of a backpack. Having considered himself fortunate for his experiences, he now sees himself as a communicator and teacher rather than an artist or writer. Although he is certainly also those things.
      </p>
      <p class="about-content__paragraph">
        With no formal education, James’ artistic training stems from a deep appreciation of the works of Van Gogh, Gauguin and Cezanne, as well as the literature of D.H. Lawrence, Gertrude Stein and John Steinbeck, among others.
      </p>
      <p class="about-content__paragraph">
        James’ debut novel, Steps, tells a story of redemption and new beginnings — something he has been forced to experience more than once.
      </p>
      <p class="about-content__paragraph">
        Today, James lives in Austin, Texas with his wife and son.
      </p>
      <p class="about-content__paragraph">
        Today, James lives in Austin, Texas with his wife and son.
      </p>
      <p class="about-content__paragraph">
        If you’re interested in reading some of his work online, you can download selected excerpts from Steps here, and you can watch the book trailer of “The Killings,” an excerpt from Steps, here.
      </p>
    </div>
  </div>
</div>
<div class="block two-col-feature container">
  <div class="row">
    <div class="two-col-feature__col two-col-feature__rule col-md-6">
      <div class="two-col-feature__heading">
        <h2>This is the Title of the Latest Blog Post</h2>
        <h5 class="date">12-10-15</h5>
      </div>
      <div class="two-col-feature__content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      </div>
      <a class="link--read-more" href="#">read more</a>
    </div>
    <div class="two-col-feature__col col-md-6">
      <div class="two-col-feature__heading">
        <h2>This is the Title of the Latest Blog Post</h2>
        <span class="date">12-10-15</span>
      </div>
      <div class="two-col-feature__content">
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
