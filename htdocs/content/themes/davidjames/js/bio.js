var $bioBtnEl = $('.js-bio-btn');
var $bioWrapperEl = $('.js-bio-wrapper');
var $bioEl = $('.js-bio');
var $bioElAll = $bioWrapperEl.children($bioEl);
var $bioElFirst = $bioElAll.first();
var $bioElSiblings = $bioWrapperEl.children('.js-bio:not(:first-child)');
var _showClass = 'bio-show';
var _hideClass = 'bio-hide';

init();

function init() {
  $bioElFirst.addClass(_showClass);
  $bioElSiblings.addClass(_hideClass);

  $bioBtnEl.click(toggleBio);
}

function toggleBio() {
  var _employee = $(this).data("employee");
  var _employeeEl = $("div[data-employee='" + _employee + "']");

  _employeeEl.siblings().addClass(_hideClass);
  _employeeEl.siblings().removeClass(_showClass);

  _employeeEl.addClass(_showClass);
  _employeeEl.removeClass(_hideClass);
}