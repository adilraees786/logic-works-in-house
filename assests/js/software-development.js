/**
 * Logic Works — Software Development Company in Dubai, UAE
 * Interactive UI/UX Script (Mobile-First, Zero Dependencies)
 */
(function () {
  "use strict";

  /* 2. Architecture Before / After Toggle */
  var archTabs = document.querySelectorAll("[data-arch-tab]");
  var archPanes = document.querySelectorAll("[data-arch-pane]");
  archTabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      var target = tab.getAttribute("data-arch-tab");
      archTabs.forEach(function (t) {
        t.classList.toggle("is-active", t === tab);
      });
      archPanes.forEach(function (p) {
        p.classList.toggle("is-active", p.getAttribute("data-arch-pane") === target);
      });
    });
  });

  /* 3. Services Category Filter */
  var filterBtns = document.querySelectorAll("[data-service-filter]");
  var serviceCards = document.querySelectorAll("[data-service-cat]");
  filterBtns.forEach(function (btn) {
    btn.addEventListener("click", function () {
      var cat = btn.getAttribute("data-service-filter");
      filterBtns.forEach(function (b) {
        b.classList.toggle("is-active", b === btn);
      });
      serviceCards.forEach(function (card) {
        var cats = (card.getAttribute("data-service-cat") || "").split(" ");
        if (cat === "all" || cats.indexOf(cat) !== -1) {
          card.style.display = "flex";
        } else {
          card.style.display = "none";
        }
      });
    });
  });

  /* 4. Live Bilingual English (LTR) / Arabic (RTL) Interface Switcher */
  var rtlBtns = document.querySelectorAll("[data-lang-mode]");
  var rtlMock = document.getElementById("lwRtlMock");
  if (rtlBtns.length && rtlMock) {
    var langData = {
      en: {
        dir: "ltr",
        badge: "LIVE DUBAI OPERATIONS DASHBOARD • ENGLISH (LTR)",
        title: "Al Barsha Central Distribution — ERP & Billing Overview",
        sub: "Multi-branch UAE operations synced across warehouse, CRM, and FTA-aligned VAT ledger.",
        s1Lbl: "Monthly Invoiced (AED)",
        s1Val: "AED 1,482,500",
        s2Lbl: "Active Dispatch Orders",
        s2Val: "318 Active • 98.4% On-Time",
        s3Lbl: "UAE VAT Output (5%)",
        s3Val: "AED 74,125 Reconciled",
        s4Lbl: "Payment Gateways",
        s4Val: "Telr • PayTabs • Network Intl"
      },
      ar: {
        dir: "rtl",
        badge: "لوحة العمليات التشغيلية في دبي • الواجهة العربية (RTL)",
        title: "البرشاء للتوزيع المركزي — نظرة عامة على نظام ERP والفوترة",
        sub: "عمليات الفروع في الإمارات متزامنة لحظياً بين المستودعات، إدارة العملاء، وسجل ضريبة القيمة المضافة.",
        s1Lbl: "إجمالي الفواتير الشهرية (درهم)",
        s1Val: "1,482,500 د.إ",
        s2Lbl: "طلبات التوصيل النشطة",
        s2Val: "318 طلب نشط • 98.4% في الموعد",
        s3Lbl: "ضريبة القيمة المضافة (5%)",
        s3Val: "74,125 د.إ تمت المطابقة",
        s4Lbl: "بوابات الدفع المحلية",
        s4Val: "تلر • باي تابس • نتورك إنترناشيونال"
      }
    };

    rtlBtns.forEach(function (btn) {
      btn.addEventListener("click", function () {
        var mode = btn.getAttribute("data-lang-mode");
        var d = langData[mode] || langData.en;
        rtlBtns.forEach(function (b) {
          b.classList.toggle("is-active", b === btn);
        });
        rtlMock.setAttribute("dir", d.dir);
        rtlMock.style.textAlign = d.dir === "rtl" ? "right" : "left";
        var setTxt = function (id, val) {
          var el = document.getElementById(id);
          if (el) el.textContent = val;
        };
        setTxt("lwRtlBadge", d.badge);
        setTxt("lwRtlTitle", d.title);
        setTxt("lwRtlSub", d.sub);
        setTxt("lwRtlS1Lbl", d.s1Lbl);
        setTxt("lwRtlS1Val", d.s1Val);
        setTxt("lwRtlS2Lbl", d.s2Lbl);
        setTxt("lwRtlS2Val", d.s2Val);
        setTxt("lwRtlS3Lbl", d.s3Lbl);
        setTxt("lwRtlS3Val", d.s3Val);
        setTxt("lwRtlS4Lbl", d.s4Lbl);
        setTxt("lwRtlS4Val", d.s4Val);
      });
    });
  }

  /* 5. Industry Solutions Interactive Tabs */
  var indTabs = document.querySelectorAll("[data-ind-tab]");
  var indPanels = document.querySelectorAll("[data-ind-panel]");
  indTabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      var target = tab.getAttribute("data-ind-tab");
      indTabs.forEach(function (t) {
        t.classList.toggle("is-active", t === tab);
        t.setAttribute("aria-selected", t === tab ? "true" : "false");
      });
      indPanels.forEach(function (panel) {
        panel.classList.toggle("is-active", panel.getAttribute("data-ind-panel") === target);
      });
    });
  });

  /* 6. Interactive Software Cost & Timeline Calculator */
  var calcSystem = document.getElementById("lwCalcSystem");
  var calcScale = document.getElementById("lwCalcScale");
  var calcInteg = document.getElementById("lwCalcInteg");
  var calcLocal = document.getElementById("lwCalcLocal");
  var calcAmount = document.getElementById("lwCalcAmount");
  var calcTimeline = document.getElementById("lwCalcTimeline");
  var calcSummary = document.getElementById("lwCalcSummary");
  var calcApplyBtn = document.getElementById("lwCalcApplyBtn");

  function updateCalculator() {
    if (!calcSystem || !calcScale || !calcInteg || !calcLocal) return;
    var sysOpt = calcSystem.options[calcSystem.selectedIndex];
    var scaleOpt = calcScale.options[calcScale.selectedIndex];
    var integOpt = calcInteg.options[calcInteg.selectedIndex];
    var localOpt = calcLocal.options[calcLocal.selectedIndex];

    var baseMin = parseInt(sysOpt.getAttribute("data-min") || "55000", 10);
    var baseMax = parseInt(sysOpt.getAttribute("data-max") || "95000", 10);
    var baseWeeks = parseInt(sysOpt.getAttribute("data-weeks") || "8", 10);

    var scaleMult = parseFloat(scaleOpt.getAttribute("data-mult") || "1");
    var integAdd = parseInt(integOpt.getAttribute("data-add") || "0", 10);
    var localAdd = parseInt(localOpt.getAttribute("data-add") || "0", 10);
    var extraWeeks =
      parseInt(scaleOpt.getAttribute("data-weeks") || "0", 10) +
      parseInt(integOpt.getAttribute("data-weeks") || "0", 10) +
      parseInt(localOpt.getAttribute("data-weeks") || "0", 10);

    var finalMin = Math.round((baseMin * scaleMult + integAdd + localAdd) / 1000) * 1000;
    var finalMax = Math.round((baseMax * scaleMult + integAdd * 1.4 + localAdd * 1.3) / 1000) * 1000;
    var minWeeks = baseWeeks + extraWeeks;
    var maxWeeks = minWeeks + 4;

    if (calcAmount) {
      calcAmount.textContent =
        "AED " + finalMin.toLocaleString("en-US") + " – " + finalMax.toLocaleString("en-US");
    }
    if (calcTimeline) {
      calcTimeline.textContent = "Estimated Delivery: " + minWeeks + " – " + maxWeeks + " Weeks";
    }
    if (calcSummary) {
      calcSummary.textContent =
        sysOpt.text + " • " + scaleOpt.text + " • " + integOpt.text + " • " + localOpt.text;
    }
  }

  [calcSystem, calcScale, calcInteg, calcLocal].forEach(function (el) {
    if (el) el.addEventListener("change", updateCalculator);
  });
  updateCalculator();

  /* Pre-fill Quote Form from Calculator or Service Cards */
  var typeSelect = document.getElementById("adFType");
  var ideaField = document.getElementById("adFIdea");
  var quoteSection = document.getElementById("ad-quote");

  if (calcApplyBtn) {
    calcApplyBtn.addEventListener("click", function () {
      if (typeSelect && calcSystem) {
        var sysVal = calcSystem.value;
        for (var i = 0; i < typeSelect.options.length; i++) {
          if (typeSelect.options[i].value === sysVal) {
            typeSelect.selectedIndex = i;
            break;
          }
        }
      }
      if (ideaField && calcSummary && calcAmount) {
        ideaField.value =
          "Project Estimate Brief: " +
          calcSummary.textContent +
          " (" +
          calcAmount.textContent +
          "). Please share a detailed milestone proposal.";
      }
      if (quoteSection) {
        quoteSection.scrollIntoView({ behavior: "smooth", block: "center" });
      }
      showToast("Estimate added to your brief!", "Complete your contact details above to receive a formal roadmap.");
    });
  }

  document.querySelectorAll(".ad-quote-link").forEach(function (link) {
    link.addEventListener("click", function () {
      var plan = link.getAttribute("data-plan");
      if (plan && typeSelect) {
        for (var i = 0; i < typeSelect.options.length; i++) {
          if (typeSelect.options[i].value === plan || typeSelect.options[i].text === plan) {
            typeSelect.selectedIndex = i;
            break;
          }
        }
      }
    });
  });

  /* 7. Accordions (FAQ) */
  document.querySelectorAll(".ad-acc-item").forEach(function (item) {
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

  /* 8. Toast & Consultation Form Submission */
  var toast = document.getElementById("adToast");
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
    }, 4500);
  }

  var form = document.getElementById("adQuoteForm");
  var errBox = document.getElementById("adFormError");

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
    var el = document.getElementById(id);
    if (el) el.addEventListener("input", hideError);
  });

  if (form) {
    form.addEventListener("submit", function (e) {
      var name = ((document.getElementById("adFName") || {}).value || "").trim();
      var email = ((document.getElementById("adFEmail") || {}).value || "").trim();
      var phone = ((document.getElementById("adFPhone") || {}).value || "").trim();
      var sysType = ((document.getElementById("adFType") || {}).value || "Custom Business Software").trim();
      var idea = ((document.getElementById("adFIdea") || {}).value || "").trim();
      var captchaContainer = document.getElementById("ad-sw-captcha-container");
      var captchaError = document.getElementById("ad-sw-captcha-error");

      if (name.length < 2) {
        e.preventDefault();
        showError("Please enter your full name.");
        document.getElementById("adFName").focus();
        return;
      }
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        e.preventDefault();
        showError("Please enter a valid business email address.");
        document.getElementById("adFEmail").focus();
        return;
      }
      if (phone.length < 7) {
        e.preventDefault();
        showError("Please enter your phone / WhatsApp number.");
        document.getElementById("adFPhone").focus();
        return;
      }
      if (idea.length < 10) {
        e.preventDefault();
        showError("Please share a few details about your software requirements (min. 10 characters).");
        document.getElementById("adFIdea").focus();
        return;
      }
      hideError();

      // Same flow as site popup / Shopify / Android forms
      if (captchaContainer && captchaContainer.style.display === "none") {
        e.preventDefault();
        captchaContainer.style.display = "block";
        if (captchaError) captchaError.innerHTML = "";
        captchaContainer.scrollIntoView({ behavior: "smooth", block: "center" });
        return;
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
        if (captchaError) captchaError.innerHTML = "Please verify that you are not a robot.";
        else showError("Please verify that you are not a robot.");
        return;
      }
      if (captchaError) captchaError.innerHTML = "";

      // Backend expects name/email/phone/message — fold software type into message
      var messageEl = document.getElementById("adFIdea");
      if (messageEl && !messageEl.dataset.merged) {
        messageEl.value = "Software system needed: " + sysType + "\n\n" + idea;
        messageEl.dataset.merged = "1";
      }
    });
  }
})();
