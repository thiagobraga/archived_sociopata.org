/*!
 * app.js
 * @project Sociopata
 * @developer Thiago Braga <thibraga06@gmail.com>
 * @url www.sociopata.org
 */


/**
 * @function _tooltip
 * @description Instantiates the Bootstrap Tooltip plugin.
 */
var _tooltip = (function () {
  var rel = $('[rel="tooltip"]');
  rel.tooltip({ animation: false, html: true });
})();


/**
 * @function external
 * @description Target _blank for all external links
 */
var external = (function () {
  var a = $('a[href^="//"]');
  a.attr('target', '_blank');
})();


/**
 * @function layout
 * @description Insert a class elevated
 */
var layout = (function () {
  var page = $('.page');
  for (var i = 0; i < page.length; i++)
    i % 2 || page.eq(i).addClass('elevated');
})();


/**
 * @function loadJs
 * @description Load JavaScript files asynchronously
 * @param {String} [url] URL of JavaScript file to load
 * @param {function} [callback] Execute a callback function when finished load
 */
var loadJs = (function (url, callback) {
  var s = document.createElement('script');
  s.src = url;
  s.type = "text/javascript";
  s.async = true;
  s.readyState ?
    s.onreadystatechange = function() {
      if (s.readyState === 'loaded' || s.readyState === 'complete') {
        s.onreadystatechange = null;
        callback ? callback() : null;
      }
    } :
    s.onload = function() {
      callback ? callback() : null;
    };
  document.body.appendChild(s);
})('http://www.google-analytics.com/ga.js');


/**
 * @function navbarHighlight
 * @description Highlight the active page in navbar
 * @param {jQuery} [menu] The jQuery object of navbar
 * @example navbarHighlight($('#menu a'))
 */
/*
var navbarHighlight = (function (menu) {
  for (var i = 0; i < menu.length; i++) {
    if (menu.eq(i).attr('href') === window.location.hash)
      menu.eq(i).parent().addClass('active');
  }
})(menu);
*/


/**
 * @function setGoogleAnalytics
 * @description Set the Google Analytics account
 * @param {String} [ua] The Google Analytics user account
 */
var setGoogleAnalytics = (function (ua) {
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', ua]);
  _gaq.push(['_trackPageview']);
})('UA-36613651-1');


/**
 * @function backgroundScroll
 * @description Set the Google Analytics account
 * @param {String} [$ua] The Google Analytics user account
 */
/*
var backgroundScroll = (function () {
  var body = document.body,
    logo = document.querySelectorAll('.logo');
  window.onscroll = function() {
    logo.style.margin = -(Math.max(logo.scrollTop, body.scrollTop) / 2) + "px 0px";
  };
})();
*/


/**
 * @function smoothScroll
 * @description Smooth scroll the page content
 */
var smoothScroll = (function () {
  var a = $('#menu a'),
    root = $('html, body');
  a.on('click', function(event) {
    var target = $(this.hash);
    event.preventDefault();
    root.stop().animate({ scrollTop: target.offset().top }, 500, 'swing');
  });
}());


/**
 * @function scrollToTop
 * @description Scroll to the top of page
 */
var scrollToTop = (function () {
  var home = $('.brand'),
    root = $('html, body');
  home.on('click', function(event) {
    event.preventDefault();
    root.stop().animate({ scrollTop: 0 }, 500, 'swing');
  });
})();


/**
 * @function login
 * @description Faz o login no site via Ajax
 */
var login = (function () {
  var entrar = $('#entrar, #entrar-header'),
    login = $('#login, #login-header'),
    password = $('#password, #password-header'),
    data = {
      login: login.val().replace(/[\.-]/g, ''),
      password: password.val()
    };

  login.prop('disabled', true);
  password.prop('disabled', true);
  entrar.prop('disabled', true);

  $.post(base_url('usuarios/ajax_login'), data, function(response) {
    noty({ text: response.message, type: response.type });
    if (response.success) {
      $.cookie('logged_in', data.login, { expires: 30 });
      setTimeout(function() {
        window.location.href = base_url('processos');
      }, 1500);
    } else {
      login.removeAttr('disabled').focus();
      password.removeAttr('disabled');
      entrar.removeAttr('disabled');
    }
  }, 'json');
});


/**
 * @function renderMap
 * @description Render the Google Maps API. The default is map_canvas.
 * @param {String} [id] ID of the element to put the map
 */
var renderMap = (function (id) {
  var title = 'Sociopata',
    lat = -22.47150000,
    lng = -48.9870000,
    markerLat = -22.47236750,
    markerLng = -48.9879270,
    options = {
      center: new google.maps.LatLng(lat, lng),
      disableDefaultUI: true,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      zoom: 15
    },
    marker = new google.maps.Marker({
      map: new google.maps.Map(document.getElementById(id || 'map_canvas'), options),
      position: new google.maps.LatLng(markerLat, markerLng),
      title: title
    });
});


/**
 * @function sendMail
 * @description Send mail via ajax
 * @param {jQuery} [form] The contact form
 */
var sendMail = (function (form) {
  var loading = form.find('.loading');
  loading.show();
  $.post(base_url('contato/ajax_send'), form.serialize(), function(response) {
    noty({ text: response.message, type: response.type });
    loading.hide();
  }, 'json');
});