/**
 * Logic Works — Content Marketing page
 * Native <details> FAQs; light progressive enhancements only.
 */
(function () {
  "use strict";
  // Ensure only one FAQ details open at a time (accordion feel)
  var root = document.querySelector("main.lw-cm");
  if (!root) return;
  var faqs = root.querySelectorAll(".faq-section details, details.faq-item, .faq details");
  if (!faqs.length) {
    faqs = root.querySelectorAll("details");
  }
  faqs.forEach(function (item) {
    item.addEventListener("toggle", function () {
      if (!item.open) return;
      faqs.forEach(function (other) {
        if (other !== item) other.open = false;
      });
    });
  });
})();