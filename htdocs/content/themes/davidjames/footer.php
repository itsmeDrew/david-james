<?php
/**
 * The template for displaying the footer
 *
 * @package David James
 * @subpackage david-james
 * @since David James 1.0.1
 */
?>
<footer class="footer-main">
  <ul class="social-list">
     <li class="social-list__list-item"><a href="#">facebook</a></li>
     <li class="social-list__list-item"><a href="#">twitter</a></li>
     <li class="social-list__list-item"><a href="#">youtube</a></li>
     <li class="social-list__list-item"><a href="#">email</a></li>
  </ul>
  <a href="<?php echo get_permalink(10); ?>">
    <img class="footer-main__logo" src="<?php bloginfo('template_url'); ?>/img/david-james-signature-dark.png" alt="David James Logo" />
  </a>
  <div class="copyright">
    <p class="copyright__detail">Copyright 2015 David James</p>
    <p class="copyright__detail">Design by <a href="http://www.brandcave.co" target="_blank">Brandcave</a></p>
  </div>
</footer>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/stickynav.js"></script>
<?php wp_footer(); ?>

</body>
</html>
