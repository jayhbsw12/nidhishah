/* =========================================================
   Custom Smooth Scroll (Lenis-style)
   Stable | Vanilla JS | No dependency
   ========================================================= */

(function () {

  /* ---------------------------------
     Disable on touch devices
  ---------------------------------- */
  if ('ontouchstart' in window || navigator.maxTouchPoints > 0) {
    document.documentElement.style.scrollBehavior = 'auto';
    return;
  }

  /* ---------------------------------
     Variables
  ---------------------------------- */
  let currentScroll = 0;
  let targetScroll = 0;
  let ease = 0.08;       // smoothness
  let scrollSpeed = 1;   // wheel sensitivity
  let maxScroll = 0;
  let isTicking = false;

  /* ---------------------------------
     Helpers
  ---------------------------------- */
  function lerp(start, end, t) {
    return start * (1 - t) + end * t;
  }

  function clamp(value, min, max) {
    return Math.max(min, Math.min(value, max));
  }

  /* ---------------------------------
     Setup body
  ---------------------------------- */
  function setupBody() {
    document.documentElement.style.overflow = "hidden";
    document.body.style.position = "fixed";
    document.body.style.top = "0";
    document.body.style.left = "0";
    document.body.style.width = "100%";
    document.body.style.overflow = "hidden";
  }

  function setBodyHeight() {
    maxScroll = document.body.scrollHeight - window.innerHeight;
    maxScroll = Math.max(0, maxScroll);
    document.body.style.height = document.body.scrollHeight + "px";
  }

  /* ---------------------------------
     Wheel control (FIXED)
  ---------------------------------- */
  function onWheel(e) {
    e.preventDefault(); // 🔥 CRITICAL FIX

    targetScroll += e.deltaY * scrollSpeed;
    targetScroll = clamp(targetScroll, 0, maxScroll);

    if (!isTicking) {
      requestAnimationFrame(animate);
      isTicking = true;
    }
  }

  /* ---------------------------------
     Anchor links support
  ---------------------------------- */
  function handleAnchors() {
    document.querySelectorAll('a[href^="#"]').forEach(link => {
      link.addEventListener("click", e => {
        e.preventDefault();
        const target = document.querySelector(link.getAttribute("href"));
        if (!target) return;

        targetScroll = clamp(target.offsetTop, 0, maxScroll);
      });
    });
  }

  /* ---------------------------------
     Animation loop
  ---------------------------------- */
  function animate() {
    currentScroll = lerp(currentScroll, targetScroll, ease);

    if (Math.abs(currentScroll - targetScroll) < 0.1) {
      currentScroll = targetScroll;
      isTicking = false;
    }

    document.body.style.transform = `translateY(${-currentScroll}px)`;

    if (isTicking) {
      requestAnimationFrame(animate);
    }
  }

  /* ---------------------------------
     Init
  ---------------------------------- */
  function init() {
    setupBody();
    setBodyHeight();
    handleAnchors();

    // Recalculate after load (images, fonts, sliders)
    window.addEventListener("load", setBodyHeight);
  }

  /* ---------------------------------
     Events
  ---------------------------------- */
  window.addEventListener("wheel", onWheel, { passive: false });
  window.addEventListener("resize", setBodyHeight);

  init();

})();
