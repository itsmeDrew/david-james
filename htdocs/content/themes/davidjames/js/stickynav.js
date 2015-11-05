var $this = $(this);
var $stickyEl = $('.js-sticky-nav');
var $scrollEl = $('.page-template-home .js-sticky-scroll').outerHeight();
var $stickyClass = 'sticky';

$this.sticky = false;

if ($scrollEl) {
  stickyScroll($stickyEl, $scrollEl);
} else {
  $stickyEl.addClass($stickyClass);
  $this.sticky = true;
}

function stickyScroll(stickyEl, scrollEl) {

  $(window).scroll(function() {
    if ( $(window).scrollTop() > scrollEl && !$this.sticky ) {
      stickyEl.toggleClass($stickyClass);
      $this.sticky = true;
    } else if (scrollEl && $(window).scrollTop() < scrollEl && $this.sticky) {
      stickyEl.toggleClass($stickyClass);
      $this.sticky = false;
    }
  });

}
