// adding classes to wp generated navbar-nav

var $navEl = $('.navbar-nav');
var $dropdownEl = $navEl.find('.page_item_has_children');
var $dropdownLink = $dropdownEl.children('a');

if ($dropdownEl) menuInit();

function menuInit() {
  var $caratEl = $('<b class="caret"></b>');

  $dropdownEl.addClass('dropdown');
  $dropdownEl.children('ul').addClass('dropdown-menu');

  $dropdownLink.append($caratEl);
  $dropdownLink.addClass('dropdown-toggle');
  $dropdownLink.attr('data-toggle', 'dropdown');
  $dropdownLink.click(function(evt) {
    evt.preventDefault();
  });
}
