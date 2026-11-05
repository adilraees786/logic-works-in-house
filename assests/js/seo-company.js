/**
 * Logic Works — SEO Company page interactions
 * Accordion + reveal animations (header/drawer handled by site shell)
 */
(function () {
  "use strict";

  var items = Array.prototype.slice.call(document.querySelectorAll(".lw-seo .acc-item"));
  function setPanel(item, open) {
    var panel = item.querySelector(".acc-panel");
    var btn = item.querySelector(".acc-btn");
    if (!panel || !btn) return;
    item.classList.toggle("open", open);
    btn.setAttribute("aria-expanded", open ? "true" : "false");
    panel.style.maxHeight = open ? panel.scrollHeight + "px" : "0px";
  }
  items.forEach(function (item) {
    setPanel(item, item.classList.contains("open"));
    var btn = item.querySelector(".acc-btn");
    if (!btn) return;
    btn.addEventListener("click", function () {
      var isOpen = item.classList.contains("open");
      items.forEach(function (other) {
        if (other !== item) setPanel(other, false);
      });
      setPanel(item, !isOpen);
    });
  });
  window.addEventListener("resize", function () {
    items.forEach(function (item) {
      if (item.classList.contains("open")) setPanel(item, true);
    });
  });

  var rv = document.querySelectorAll(".lw-seo .rv");
  if ("IntersectionObserver" in window) {
    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (en) {
          if (en.isIntersecting) {
            en.target.classList.add("in");
            io.unobserve(en.target);
          }
        });
      },
      { threshold: 0.1, rootMargin: "0px 0px -30px 0px" }
    );
    rv.forEach(function (el) {
      io.observe(el);
    });
    document
      .querySelectorAll(
        ".lw-seo .svc-grid, .lw-seo .diff-grid, .lw-seo .proc-grid, .lw-seo .res-grid, .lw-seo .price-grid, .lw-seo .ind-grid, .lw-seo .benefit-grid"
      )
      .forEach(function (grid) {
        Array.prototype.forEach.call(grid.children, function (child, i) {
          child.style.transitionDelay = i * 60 + "ms";
        });
      });
  } else {
    rv.forEach(function (el) {
      el.classList.add("in");
    });
  }
})();
