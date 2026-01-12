document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".review-wrapper");
  if (!slider) return;

  let isDown = false;
  let startX;
  let scrollLeft;

  slider.addEventListener("mousedown", (e) => {
    isDown = true;
    slider.classList.add("is-dragging");
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
  });

  slider.addEventListener("mouseleave", () => {
    isDown = false;
    slider.classList.remove("is-dragging");
  });

  slider.addEventListener("mouseup", () => {
    isDown = false;
    slider.classList.remove("is-dragging");
  });

  slider.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault(); // stops text selection while dragging
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 1; // drag speed
    slider.scrollLeft = scrollLeft - walk;
  });
});
