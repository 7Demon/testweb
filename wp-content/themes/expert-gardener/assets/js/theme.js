// Menu Functions
function expert_gardener_openNav() {
  jQuery(".sidenav").addClass('show');
}

function expert_gardener_closeNav() {
  jQuery(".sidenav").removeClass('show');
}

// Focus handling for the menu
(function( window, document ) {
  function expert_gardener_keepFocusInMenu() {
    document.addEventListener('keydown', function(e) {
      const expert_gardener_nav = document.querySelector('.sidenav');

      if (!expert_gardener_nav || !expert_gardener_nav.classList.contains('show')) {
        return;
      }
      const elements = [...expert_gardener_nav.querySelectorAll('input, a, button')],
            expert_gardener_lastEl = elements[elements.length - 1],
            expert_gardener_firstEl = elements[0],
            expert_gardener_activeEl = document.activeElement,
            tabKey = e.keyCode === 9,
            shiftKey = e.shiftKey;

      if (!shiftKey && tabKey && expert_gardener_lastEl === expert_gardener_activeEl) {
        e.preventDefault();
        expert_gardener_firstEl.focus();
      }

      if (shiftKey && tabKey && expert_gardener_firstEl === expert_gardener_activeEl) {
        e.preventDefault();
        expert_gardener_lastEl.focus();
      }
    });
  }
  expert_gardener_keepFocusInMenu();
})(window, document);

jQuery(function($) {
  "use strict";

  // Search focus handler
  ExpertGardenerSearchFocusHandler();

  // Scroll to top button
  let scrollTopButton = $('#scrolltop');
  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
      scrollTopButton.addClass('scroll');
    } else {
      scrollTopButton.removeClass('scroll');
    }
  });
  scrollTopButton.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
  });

  // Loading screen (preloader)
  window.addEventListener('load', function() {
    $(".loading").delay(2000).fadeOut("slow");
  });

  // Menu events binding (Make sure your buttons have the correct IDs or classes)
  $(".open-nav-button").click(function(e) {
    e.preventDefault();
    expert_gardener_openNav();
  });

  $(".close-nav-button").click(function(e) {
    e.preventDefault();
    expert_gardener_closeNav();
  });

  // Search focus handler function
  function ExpertGardenerSearchFocusHandler() {
    const searchFirstTab = $('.inner_searchbox input[type="search"]');
    const searchLastTab = $('button.search-close');

    $(".open-search").click(function(e) {
      e.preventDefault();
      e.stopPropagation();
      $('body').addClass("search-focus");
      searchFirstTab.focus();
    });

    $("button.search-close").click(function(e) {
      e.preventDefault();
      e.stopPropagation();
      $('body').removeClass("search-focus");
      $(".open-search").focus();
    });

    // Redirect last tab to first input
    searchLastTab.on('keydown', function(e) {
      if ($('body').hasClass('search-focus') && e.which === 9 && !e.shiftKey) {
        e.preventDefault();
        searchFirstTab.focus();
      }
    });

    // Redirect first shift+tab to last input
    searchFirstTab.on('keydown', function(e) {
      if ($('body').hasClass('search-focus') && e.which === 9 && e.shiftKey) {
        e.preventDefault();
        searchLastTab.focus();
      }
    });

    // Allow escape key to close menu
    $('.inner_searchbox').on('keyup', function(e) {
      if ($('body').hasClass('search-focus') && e.keyCode === 27) {
        $('body').removeClass('search-focus');
        searchLastTab.focus();
      }
    });
  }
});

// Owl Carousel initialization
jQuery(document).ready(function($) {
  $('#slider .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    items: 1,
    navText: ['<span class="vertical-nav pre">PREV</span>', '<span class="vertical-nav next">NEXT</span>']
  });
});

//sticy header js

jQuery(window).scroll(function () {
  var sticky = jQuery('.sticky-header'),
  scroll = jQuery(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixed-header');
  else sticky.removeClass('fixed-header');
});