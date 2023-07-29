// JavaScript/jQuery code
jQuery(document).ready(function ($) {
  // hamburger menu
  (() => {
    const hamburger = document.getElementById("hamburger");
    const menu = document.getElementById("overlay");
    let closed = true;

    const change = () => {
      if (closed) {
        hamburger.classList.add("open");
        menu.classList.add("menu");
      } else {
        hamburger.classList.remove("open");
        menu.classList.remove("menu");
      }
      closed = !closed;
    };

    hamburger.addEventListener("click", change);
  })();

  // search
  const $searchWrapper = $('.search-wrapper');
  const $searchContainer = $('.search-container');
  const $searchOverlay = $('.search-overlay');
  const $searchIcon = $('.search i.fa-search'); // Correct selector for the search icon.

  // Function to show search container and overlay with animation
  function showSearchContainer() {
    $searchContainer.addClass('show-search-container');
    $searchOverlay.fadeIn(400).delay(100);
  }

  // Function to hide search container and overlay with animation
  function hideSearchContainer() {
    $searchContainer.removeClass('show-search-container');
    $searchOverlay.fadeOut(1);
  }

  // Toggle search container and overlay when search icon is clicked
  $searchIcon.on('click', function () {
    if ($searchContainer.hasClass('show-search-container')) {
      hideSearchContainer();
    } else {
      showSearchContainer();
    }
  });

  // Close search container and overlay when close button is clicked
  $('.close-search').on('click', function () {
    hideSearchContainer();
  });

  $(".menu-item-has-children").click(function(event) {
    event.preventDefault();
    $(this).toggleClass("active");
  });
  
});