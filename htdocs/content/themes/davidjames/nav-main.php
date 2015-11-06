<nav class="js-sticky-nav navbar navbar-default">
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
      <ul class="nav navbar-left">
        <li>
          <a href="<?php echo get_permalink(10); ?>"><img class="navbar__logo" src="<?php bloginfo('template_url'); ?>/img/david-james-signature-light.png" alt="logo" /></a>
        </li>
      </ul>
      <ul class="nav navbar-nav">
        <?php
          $sitePages = array(
            'depth'        => 2,
            'exclude'      => '6,7,8,10',
            'post_status'  => 'publish',
            'sort_column'  => 'menu_order',
            'title_li'     => ''
          );
          $cartPages = array(
            'depth'        => 2,
            'include'      => '6',
            'post_status'  => 'publish',
            'sort_column'  => 'menu_order',
            'title_li'     => ''
          );
        ?>
        <?php wp_list_pages($sitePages); ?>
        <li><button class="btn-pill" href="#">Purchase Steps | $15</button></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php wp_list_pages($cartPages); ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
