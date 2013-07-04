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
      top: 580,
      bottom: 270
    }
  });

  /*
   $.stratus({
   align: 'bottom',
   download: false,
   links: 'http://soundcloud.com/sociopata',
   random: true,
   theme: 'http://stratus.sc/themes/dark.css'
   });
   */

  slider.carousel();
});