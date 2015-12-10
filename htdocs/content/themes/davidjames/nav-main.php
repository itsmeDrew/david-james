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

        <?php
        $productOptions = array(
    			'post_type' => 'product',
          'id' => '43',
    			'posts_per_page' => 1
    			);
        $queryProduct = new WP_Query($productOptions); ?>
        <?php if ($queryProduct->have_posts()) : while ($queryProduct->have_posts()) : $queryProduct->the_post(); ?>
        <li class="navbar-nav__link--product"><div><a class="btn-pill" href="<?php echo the_permalink(); ?>">Purchase Steps | $15</a></div></li>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="page_item navbar-nav__cart">
          <i class="fa fa-shopping-cart"></i>
          <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
            <?php echo WC()->cart->get_cart_total(); ?>
            <?php echo sprintf (_n( '%d Item', '%d Items', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?>
          </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
