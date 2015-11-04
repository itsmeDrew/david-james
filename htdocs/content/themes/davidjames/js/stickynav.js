var $this = $(this);
var $stickyEl = $('.js-sticky-nav');
var $scrollEl = $('.js-sticky-scroll').outerHeight();
var $stickyClass = 'sticky';

$this.sticky = false;

$(window).scroll(function() {

  if ( $(window).scrollTop() > $scrollEl && !$this.sticky ) {
    $stickyEl.addClass($stickyClass);
    $this.sticky = true;
  } else if ($(window).scrollTop() < $scrollEl && $this.sticky) {
    $stickyEl.removeClass($stickyClass);
    $this.sticky = false;
  }

});
