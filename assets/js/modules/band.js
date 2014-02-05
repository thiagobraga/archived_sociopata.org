/*!
 * home.js
 * @project       Sociopata
 * @lastmodified  28/11/2012
 * @developed     Thiago Braga <thibraga06@gmail.com>
 */
$(function() {
  var slider = $('#slider'),
    $window = $(window);

  // side bar
  $('.sidenav').affix({
    offset: {
      top: 320,
      bottom: 270
    }
  });

  slider.carousel();
});