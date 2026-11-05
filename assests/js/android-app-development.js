/**
 * Logic Works — Android App Development Dubai
 * Reveal animations, FAQ accordion, lead form (site popup endpoint + reCAPTCHA)
 */
(function () {
  "use strict";

  var reveals = document.querySelectorAll("main.lw-android .js-anim, main.lw-android .reveal");
  if ("IntersectionObserver" in window) {
    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (en) {
          if (en.isIntersecting) {
            en.target.classList.add("in", "is-in");
            io.unobserve(en.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: "0px 0px -24px 0px" }
    );
    reveals.forEach(function (el) {
      io.observe(el);
    });
  } else {
    reveals.forEach(function (el) {
      el.classList.add("in", "is-in");
    });
  }

  var faqs = document.querySelectorAll("main.lw-android .faq details.q");
  faqs.forEach(function (d) {
    d.addEventListener("toggle", function () {
      if (!d.open) return;
      faqs.forEach(function (other) {
        if (other !== d) other.open = false;
      });
    });
  });

  var form = document.getElementById("projectForm");
  if (!form) return;

  form.addEventListener("submit", function (e) {
    var required = form.querySelectorAll("[required]");
    var ok = true;
    required.forEach(function (field) {
      if (!String(field.value || "").trim()) ok = false;
    });
    if (!ok) {
      e.preventDefault();
      alert("Please fill in the required fields.");
      return false;
    }

    var captchaContainer = document.getElementById("lw-android-captcha-container");
    var errorDiv = document.getElementById("lw-android-captcha-error");

    if (captchaContainer && captchaContainer.style.display === "none") {
      e.preventDefault();
      captchaContainer.style.display = "block";
      if (errorDiv) errorDiv.innerHTML = "";
      captchaContainer.scrollIntoView({ behavior: "smooth", block: "center" });
      return false;
    }

    var response = "";
    try {
      var allWidgets = document.querySelectorAll(".g-recaptcha");
      var formWidget = form.querySelector(".g-recaptcha");
      var widgetIndex = Array.prototype.indexOf.call(allWidgets, formWidget);
      if (widgetIndex !== -1 && typeof grecaptcha !== "undefined") {
        response = grecaptcha.getResponse(widgetIndex);
      } else if (typeof grecaptcha !== "undefined") {
        response = grecaptcha.getResponse();
      }
    } catch (err) {
      response = "";
    }

    if (!response || response.length === 0) {
      e.preventDefault();
      if (errorDiv) errorDiv.innerHTML = "Please verify that you are not a robot.";
      return false;
    }
    if (errorDiv) errorDiv.innerHTML = "";

    var stage = form.querySelector('[name="stage"]');
    var message = form.querySelector('[name="message"]');
    if (stage && message && !message.dataset.merged) {
      message.value =
        "Project stage: " + stage.value + "\n\n" + String(message.value || "").trim();
      message.dataset.merged = "1";
    }
  });
})();
