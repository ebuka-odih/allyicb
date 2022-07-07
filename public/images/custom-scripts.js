//Smooth Scrolling
$(function() {
  $('a.scroll-to[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

      if ( !this.classList.contains('accordion-title') ) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    }
  });

  function hasClass( target, className ) {
    return new RegExp('(\\s|^)' + className + '(\\s|$)').test(target.className);
  }
});

//Smooth Scrolling
$(function() {
  $('.scroll-to > a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

      if ( !this.classList.contains('accordion-title') ) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    }
  });

  function hasClass( target, className ) {
    return new RegExp('(\\s|^)' + className + '(\\s|$)').test(target.className);
  }
});


$(function() {
  //Keyboard navigation for sub menu
  $('.menu-item-has-children > a').append('<span tabindex="0" class="menu-has-children-indicator"></span>');
  $('.menu-has-children-indicator').keypress(function(e) {
    //find the surrounding div
    var location = $(this).parent().parent();
    if(e.which == 13) {
      $('.sub-menu',location).toggleClass("show-sub-menu");
    }
  });
});

