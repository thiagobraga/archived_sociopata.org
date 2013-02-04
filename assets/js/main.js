/*!
 * main.js
 * @project   Sociopata
 * @developer Thiago Braga <thiago@sociopata.org>
 * @modified  29/01/2013
 * @url       www.sociopata.org
 */

/**
 * @name          loag_GoogleAnalytics
 * @description   Load the Google Analytics API asynchronous
 * @version       1.0
 */
var load_GoogleAnalytics = function () {
  var s = document.createElement('script');
  s.src = ('https:' == document.location.protocol ? 'https://ssl' : '//www') + '.google-analytics.com/ga.js';
  s.type = 'text/javascript';
  s.async = true;
  document.body.appendChild(s);
},


/**
 * @name          _gaq
 * @description   Set the Google Analytics account
 * @version       1.0
 */
_gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36613651-1']);
_gaq.push(['_trackPageview']);


$(function() {

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
   * Google Analytics
   */
  load_GoogleAnalytics();

});