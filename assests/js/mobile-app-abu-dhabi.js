/**
 * Abu Dhabi Mobile App landing — page-only JS
 * Only runs when .lw-abu-dhabi exists (this page).
 */
(function () {
  "use strict";

  var root = document.querySelector(".lw-abu-dhabi");
  if (!root) return;

  /* Reveal on scroll */
  var revealEls = root.querySelectorAll(".ad-reveal:not(.is-visible)");
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
      { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
    );
    revealEls.forEach(function (el) {
      io.observe(el);
    });
  } else {
    revealEls.forEach(function (el) {
      el.classList.add("is-visible");
    });
  }

  /* Accordions (services + FAQ) — scoped to this page */
  root.querySelectorAll(".ad-acc-item").forEach(function (item) {
    var btn = item.querySelector(".ad-acc-btn");
    if (!btn) return;
    btn.addEventListener("click", function () {
      var parent = item.parentElement;
      if (parent) {
        parent.querySelectorAll(":scope > .ad-acc-item.is-open").forEach(function (sib) {
          if (sib !== item) sib.classList.remove("is-open");
        });
      }
      item.classList.toggle("is-open");
    });
  });

  /* Quote buttons pre-select app type */
  var typeSelect = root.querySelector("#adFType");
  root.querySelectorAll(".ad-quote-link").forEach(function (link) {
    link.addEventListener("click", function () {
      var plan = link.getAttribute("data-plan");
      if (!plan || !typeSelect) return;
      for (var i = 0; i < typeSelect.options.length; i++) {
        if (typeSelect.options[i].text === plan) {
          typeSelect.selectedIndex = i;
          break;
        }
      }
      typeSelect.classList.add("ad-highlight");
      setTimeout(function () {
        typeSelect.classList.remove("ad-highlight");
      }, 2200);
    });
  });

  /* Toast */
  var toast = root.querySelector("#adToast");
  var toastTimer = null;
  function showToast(title, msg) {
    if (!toast) return;
    var t = toast.querySelector("[data-toast-title]");
    var m = toast.querySelector("[data-toast-msg]");
    if (t) t.textContent = title;
    if (m) m.textContent = msg;
    toast.classList.add("is-show");
    clearTimeout(toastTimer);
    toastTimer = setTimeout(function () {
      toast.classList.remove("is-show");
    }, 4200);
  }

  /* Quote form → send_abu_dhabi_quote.php (+ reCAPTCHA like contact-us) */
  var form = root.querySelector("#adQuoteForm");
  var errBox = root.querySelector("#adFormError");
  var captchaContainer = root.querySelector("#ad-captcha-container");
  var captchaError = root.querySelector("#ad-captcha-error");

  function showError(msg) {
    if (!errBox) return;
    errBox.textContent = msg;
    errBox.classList.add("is-show");
  }
  function hideError() {
    if (!errBox) return;
    errBox.classList.remove("is-show");
    errBox.textContent = "";
  }

  ["adFName", "adFEmail", "adFIdea"].forEach(function (id) {
    var el = root.querySelector("#" + id);
    if (el) el.addEventListener("input", hideError);
  });

  if (form) {
    form.addEventListener("submit", function (e) {
      var name = ((root.querySelector("#adFName") || {}).value || "").trim();
      var email = ((root.querySelector("#adFEmail") || {}).value || "").trim();
      var idea = ((root.querySelector("#adFIdea") || {}).value || "").trim();

      if (name.length < 2) {
        e.preventDefault();
        showError("Please enter your full name.");
        root.querySelector("#adFName").focus();
        return;
      }
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        e.preventDefault();
        showError("Please enter a valid email address.");
        root.querySelector("#adFEmail").focus();
        return;
      }
      if (idea.length < 10) {
        e.preventDefault();
        showError("Please tell us a little more about your idea (min. 10 characters).");
        root.querySelector("#adFIdea").focus();
        return;
      }
      hideError();

      if (captchaContainer && captchaContainer.style.display === "none") {
        e.preventDefault();
        captchaContainer.style.display = "block";
        setTimeout(function () {
          captchaContainer.scrollIntoView({ behavior: "smooth", block: "center" });
        }, 100);
        return;
      }

      var response = "";
      try {
        var allWidgets = document.querySelectorAll(".g-recaptcha");
        var formWidget = form.querySelector(".g-recaptcha");
        var widgetIndex = Array.prototype.indexOf.call(allWidgets, formWidget);
        if (widgetIndex !== -1) {
          response = grecaptcha.getResponse(widgetIndex);
        } else {
          response = grecaptcha.getResponse();
        }
      } catch (err) {
        response = "";
      }

      if (!response || response.length === 0) {
        e.preventDefault();
        if (captchaError) {
          captchaError.textContent = "Please verify that you are not a robot.";
        }
        return;
      }

      if (captchaError) captchaError.textContent = "";
    });
  }
})();
