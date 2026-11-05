/**
 * Logic Works — Shopify Development Services Dubai
 * FAQ accordion + lead form (same endpoint/captcha as site popup)
 */
(function () {
  "use strict";

  document.querySelectorAll("main.lw-shopify .lw-faq-trigger").forEach(function (trigger) {
    trigger.addEventListener("click", function () {
      var item = trigger.closest(".lw-faq-item");
      if (!item) return;
      var willOpen = !item.classList.contains("is-open");
      document.querySelectorAll("main.lw-shopify .lw-faq-item").forEach(function (other) {
        other.classList.remove("is-open");
        var btn = other.querySelector(".lw-faq-trigger");
        if (btn) btn.setAttribute("aria-expanded", "false");
      });
      if (willOpen) {
        item.classList.add("is-open");
        trigger.setAttribute("aria-expanded", "true");
      }
    });
  });

  var form = document.getElementById("lwLeadFormInline");
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

    var captchaContainer = document.getElementById("lw-shopify-captcha-container");
    var errorDiv = document.getElementById("lw-shopify-captcha-error");

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

    // Backend expects name/email/phone/message — fold project type into message
    var projectType = form.querySelector('[name="project_type"]');
    var message = form.querySelector('[name="message"]');
    if (projectType && message && !message.dataset.projectMerged) {
      message.value =
        "Project Type: " + projectType.value + "\n\n" + String(message.value || "").trim();
      message.dataset.projectMerged = "1";
    }
  });
})();
