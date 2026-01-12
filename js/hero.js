
document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(
    ".hero-slide-1, .hero-slide-2, .hero-slide-3"
  );
  const dots = document.querySelectorAll(".slider-dot");

  let currentIndex = 0;
  let startX = 0;
  let endX = 0;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.toggle("active", i === index);
      dots[i].classList.toggle("active", i === index);
    });
    currentIndex = index;
  }

  /* Initial slide */
  showSlide(0);

  /* Dot click */
  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      showSlide(index);
    });
  });

  /* Touch swipe support */
  const hero = document.querySelector(".hero-section");

  hero.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
  });

  hero.addEventListener("touchend", (e) => {
    endX = e.changedTouches[0].clientX;
    handleSwipe();
  });

  function handleSwipe() {
    const threshold = 50;

    if (startX - endX > threshold) {
      // swipe left
      showSlide((currentIndex + 1) % slides.length);
    } else if (endX - startX > threshold) {
      // swipe right
      showSlide(
        (currentIndex - 1 + slides.length) % slides.length
      );
    }
  }
});

