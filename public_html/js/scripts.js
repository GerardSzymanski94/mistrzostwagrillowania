/**
 * Countable is a script to allow for live paragraph-, word- and character-
 * counting on an HTML element. Usage is recommended on `input` and `textarea`
 * elements.
 *
 * @author   Sacha Schmid (http://github.com/RadLikeWhoa)
 * @version  1.1.1
 * @license  MIT
 */

;(function () {
    'use strict';

    /**
     * String.trim() polyfill for non-supporting browsers.
     *
     * @return  {String}  The original string with leading and trailing
     *                    whitespace removed.
     */

    if (typeof String.prototype.trim !== 'function') {
        String.prototype.trim = function () {
            return this.replace(/^\s+|\s+$/g, '');
        };
    }

    /**
     * Create a new Countable instance on an HTML element.
     *
     * @constructor
     *
     * @param    {HTMLElement}  element     The element to be used for the
     *                                      counting.
     * @param    {Function}     [callback]  The callback to receive and process
     *                                      the result. The callback should
     *                                      accept only one parameter. (default:
     *                                      logs to console)
     * @param    {Boolean}      [hard]      Sets whether to use hard returns (2
     *                                      line breaks) or not. (default: false)
     *
     * @example  new Countable(elem, function (counter) {
     *             alert(counter.paragraphs, counter.words, counter.characters);
     *           });
     *
     * @return   {Countable}    An instance of the Countable class.
     */

    var _ = window.Countable = function (element, callback, hard) {

        /**
         * Expect a valid HTMLElement. If no element or an invalid value is given,
         * Countable returns nothing.
         */

        if (!element || element.nodeType !== 1) return;

        this.element = element;
        this.callback = typeof callback === 'function' ? callback : function (counter) {
            if (typeof console !== 'undefined') console.log(counter);
        };
        this.hard = hard;

        this.init();

        return this;
    };

    _.prototype = {

        /**
         * Trim leading and trailing whitespace and count paragraphs, words and
         * characters.
         *
         * @return  {Object}  The object containing the number of paragraphs, words
         *                    and characters, all accessible by their names.
         */

        count: function () {
            var orig = (this.element.value || this.element.innerText || this.element.textContent || ''),
                str = orig.trim();

            return {
                paragraphs: str ? (str.match(this.hard ? /\n{2,}/g : /\n+/g) || []).length + 1 : 0,
                words: str ? (str.replace(/\s['";:,.?Âż\-!ÂĄ]/g, '').match(/\s+/g) || []).length + 1 : 0,
                characters: str ? str.replace(/\s/g, '').length : 0,
                all: orig.replace(/[\n\r]/g, '').length
            };
        },

        /**
         * Initiate the Countable object by calling the `count()` function and
         * adding the `input` event listener to the given element.
         */

        init: function () {
            var self = this;

            self.callback(self.count());

            if (typeof self.element.addEventListener !== 'undefined') {
                self.element.addEventListener('input', function () {
                    self.callback(self.count());
                });
            } else if (typeof self.element.attachEvent !== 'undefined') {
                self.element.attachEvent('onkeydown', function () {
                    self.callback(self.count());
                });
            }
        }

    };
}());

// Custom scripts

(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 54)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 54
  });

    $('.main-carousel').flickity({
        cellAlign: 'center',
        contain: true,
        wrapAround: true,
        adaptiveHeight: true,
        pageDots: false,
        wrapAround: true
    });

  $(".elements").hide();
  $("#start").show();

  $('.nav-link').on('click', function(){
      if($(this).hasClass('prices')){
        $('.video-wrap ').css('background', '#d92026');
      }
      else{
        $('.video-wrap ').css('background', '#d92026 url("images/general/bg.jpg")');
      }

  })

  var maxLength = 300;
$('#entry-text-area').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength-length;
  $('#chars').text(length);
});


    $('.navbar-toggler').on("click", function(){
      if(! $('.navbar-collapse').hasClass('show')) {
          $('.navbar-toggler img').attr('src', 'images/general/active-menu.png');
      }

      else{
          $('.navbar-toggler img').attr('src', 'images/general/home.png');
      }
  });

  $( "nav a:not(.regu)" ).click(function() {
      $('.navbar-toggler img').attr('src', 'images/general/home.png');

    var id = $( this ).attr("data-show");

    if(!$( this ).hasClass("on")){
      $(".elements").fadeOut(100);
      $( id ).delay( 100 ).fadeIn(400);
      $( ".nav-item a" ).removeClass("on");
      $( this ).addClass("on");
    }
  });

    $( ".anch-btn" ).click(function() {
        var id = $( this ).attr("data-show");
        var zm = 'a[data-show="' + id + '"]';

        if(!$( zm ).hasClass("on")){
            $( zm ).click();
        }
    });

    $( document ).ready(function() {
        msieversion();
    });

    function msieversion() {

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))  // If Internet Explorer, return version number
        {
            $('.awards-row').css('margin-right', '-11vw');
        }
        else  // If another browser, return 0
        return false;
    }

    var $carousel = $('.main-carousel');
    $carousel.on( 'change.flickity', function( event, index ) {

    if ($('.heinz-less-sugar').hasClass('is-selected')) {
        $('.heinz-less-sugar img').attr('src','images/products/product-1-main.png');
    }
    else{
        $('.heinz-less-sugar img').attr('src', 'images/products/product-1.png');
    }
    });

})(jQuery); // End of use strict
