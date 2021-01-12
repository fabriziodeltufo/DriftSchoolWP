// hamburger: header-menu-open

  (function($){

    $(".header-hamburger").click(function(e) {

      $(".header-menu").toggleClass('header-menu-open');
      e.preventDefault();

    });

  })(jQuery);
