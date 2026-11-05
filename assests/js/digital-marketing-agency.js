/**
 * Digital Marketing Agency landing — page-only JS
 * Runs only when .lw-dma exists.
 */
(function () {
  "use strict";

  var root = document.querySelector(".lw-dma");
  if (!root) return;

  var revealEls = root.querySelectorAll(".dma-reveal:not(.is-visible)");
  if ("IntersectionObserver" in window) {
    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (e) {
          if (e.isIntersecting) {
            e.target.classList.add("is-visible");
            io.unobserve(e.target);
          }
        });
      },
      { threshold: 0.1, rootMargin: "0px 0px -36px 0px" }
    );
    revealEls.forEach(function (el) {
      io.observe(el);
    });
  } else {
    revealEls.forEach(function (el) {
      el.classList.add("is-visible");
    });
  }

  /* Ensure first hero section is visible immediately */
  var first = root.querySelector("section.dma-reveal");
  if (first) first.classList.add("is-visible");

  /* FAQ: only one details open at a time */
  var faqItems = root.querySelectorAll(".faq details");
  faqItems.forEach(function (item) {
    item.addEventListener("toggle", function () {
      if (!item.open) return;
      faqItems.forEach(function (other) {
        if (other !== item) other.open = false;
      });
    });
  });
})();