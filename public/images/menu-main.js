$(document).ready(function() {
  // show hide menu
  $('[data-reveal-menu]').click(function( e ) {
    $('body').toggleClass('menu-main--is-visible');

    // change text on state
    var el = $(this);
    el.text() == el.data("text-open")
      ? el.text(el.data("text-close"))
      : el.text(el.data("text-open"));
  });

  // create 2nd level menu trigger
  $('.header-wrap .menu-small .menu-item-has-children').each(function(){
    $(this).append('<a  class="sub-menu-tigger" data-reveal-sub-menu></a>');
  });


  // show / hide 2nd menu
  $('[data-reveal-sub-menu]').click(function( e ) {
    $(this).parent().toggleClass('sub-menu-is-visible');
    $('body').toggleClass('sub-menu-is-active');
  });
  
   

});
