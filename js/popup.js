document.addEventListener('DOMContentLoaded', function () {
  const popup = document.querySelector('.popup-section');
  if (!popup) return;

  let shown = false;
  let timeoutId = null;

  function showPopup() {
    if (shown) return;
    popup.classList.add('active');
    document.body.classList.add('popup-open');
    shown = true;
  }

  function hidePopup() {
    popup.classList.remove('active');
    if (timeoutId) {
      clearTimeout(timeoutId);
      timeoutId = null;
    }
    document.body.classList.remove('popup-open');
    shown = true;
  }

  timeoutId = setTimeout(showPopup, 5000);

  const closeBtn = popup.querySelector('.close-icon-holder');
  if (closeBtn) {
    closeBtn.addEventListener('click', function (e) {
      e.preventDefault();
      hidePopup();
    });
  }

  // Also allow clicking outside the popup-wrapper to close
  popup.addEventListener('click', function (e) {
    if (e.target === popup) hidePopup();
  });
});
