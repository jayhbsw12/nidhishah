document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.querySelector(".wdt-advanced-checkbox-toggle");
  const blocks = document.querySelectorAll(".guide-max-card-holder");
  const texts = document.querySelectorAll(".switch-texts");

  /* --- DEFAULT STATE --- */
  toggle.checked = false;              // switch OFF by default
  blocks[0].classList.add("active");   // What We Do
  blocks[1].classList.remove("active");

  texts[0].classList.add("active");    // "What We Are"
  texts[1].classList.remove("active");

  /* --- TOGGLE LOGIC --- */
  toggle.addEventListener("change", function () {
    if (this.checked) {
      // SHOW: What We Are Not
      blocks[0].classList.remove("active");
      blocks[1].classList.add("active");

      texts[0].classList.remove("active");
      texts[1].classList.add("active");
    } else {
      // SHOW: What We Do
      blocks[1].classList.remove("active");
      blocks[0].classList.add("active");

      texts[1].classList.remove("active");
      texts[0].classList.add("active");
    }
  });
});

