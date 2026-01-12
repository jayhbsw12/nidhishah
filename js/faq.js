
  document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".tab");
    const faqSections = document.querySelectorAll(".faqs-holder");

    // Initial state
    tabs[0].classList.add("active");
    faqSections[0].classList.add("active");

    tabs.forEach((tab, index) => {
      tab.addEventListener("click", () => {
        // Remove active from all tabs
        tabs.forEach(t => t.classList.remove("active"));

        // Hide all FAQ sections
        faqSections.forEach(section => section.classList.remove("active"));

        // Activate clicked tab and corresponding FAQ section
        tab.classList.add("active");
        faqSections[index].classList.add("active");
      });
    });
  });

