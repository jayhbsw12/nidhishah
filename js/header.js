document.addEventListener('DOMContentLoaded', function () {
  const header = document.querySelector('.header-section');
  if (!header) return;

  let ticking = false;

  function onScroll() {
    if (window.scrollY > 0) {
      header.classList.add('sticky');
    } else {
      header.classList.remove('sticky');
    }
  }

  window.addEventListener('scroll', function () {
    if (!ticking) {
      window.requestAnimationFrame(function () {
        onScroll();
        ticking = false;
      });
      ticking = true;
    }
  }, { passive: true });

  // Run once on load in case user opens page already scrolled
  onScroll();
});
