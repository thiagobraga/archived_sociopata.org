/*!
 * main.js
 * @project   Sociopata
 * @developer Thiago Braga <thiago@sociopata.org>
 * @modified  29/01/2013
 * @url       www.sociopata.org
 */

(function($) {

  /*
   * Target _blank for all external links
   */
  var external = $('a[href^="//"]');
  external.attr('target', '_blank');

  /*
   * Navbar highlight
   */
  var menu = $('#menu a');
  for (var i = 0; i < menu.length; i++) {
    if (menu.eq(i).attr('href') == window.location.href)
      menu.eq(i).parent().addClass('active');
  }

  /*
   * Slider
   */
  var slider = $('#slider');
  slider.carousel({
    interval: 6000
  });

  /*
   * Tooltip
   */
  var tip = $('[title]');
  tip.tooltip();

  /*
   * Stratus
   */
  /*
  $.stratus({
    align: 'bottom',
    download: false,
    links: 'http://soundcloud.com/sociopata',
    random: true,
    theme: 'http://stratus.sc/themes/dark.css'
  });
  */

})(jQuery);