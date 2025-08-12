(function () {
  function onReady(fn) {
    if (document.readyState !== 'loading') fn();
    else document.addEventListener('DOMContentLoaded', fn);
  }

  onReady(function () {
    var toggle = document.querySelector('[data-mobile-menu-toggle]');
    var menu = document.querySelector('[data-mobile-menu]');
    if (toggle && menu) {
      toggle.addEventListener('click', function () {
        menu.classList.toggle('hidden');
      });
    }

    // Placeholder for animations; can integrate IntersectionObserver or GSAP
  });
})();