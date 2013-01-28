/*!
 * main.js
 * @project   Sociopata
 * @developer Thiago Braga <thiago@sociopata.org>
 * @modified  21/01/2013
 * @url       www.sociopata.org
 */

(function($) {

  /* Navbar highlight */
  var menu = $('#menu a');
  for (var i = 0; i < menu.length; i++) {
    if (menu.eq(i).attr('href') == window.location.href)
      menu.eq(i).parent().addClass('active');
  }

  /* Slider */
  var slider = $('#slider');
  slider.carousel();

  /* Stratus */
  $.stratus({
    align: 'bottom',
    download: false,
    links: 'http://soundcloud.com/sociopata',
    random: true,
    theme: 'http://stratus.sc/themes/dark.css'
  });

})(jQuery);