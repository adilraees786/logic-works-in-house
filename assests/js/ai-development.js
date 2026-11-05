/* AI Development page interactions */
/* Requires window.LW_BASE_URL set by the page before this script */
document.addEventListener('DOMContentLoaded', function () {
    // 1. Popup Modal Trigger (.js-open-popup)
    var popupModal = document.getElementById('popup');
    document.querySelectorAll('.js-open-popup').forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        if (popupModal) {
          e.preventDefault();
          popupModal.style.display = 'flex';
        }
      });
    });

    // 2. Interactive Process Tabs — content comes from #processTabData in PHP
    var tabItems = document.querySelectorAll('.process-section .tab-item');
    var processImage = document.getElementById('processImage');
    var contentArea = document.getElementById('contentArea');
    var processTabData = document.getElementById('processTabData');

    if (tabItems.length && processImage && contentArea && processTabData) {
      contentArea.style.transition = 'opacity 0.3s ease';

      function updateContent(tabType) {
        var panel = processTabData.querySelector('.process-tab-panel[data-tab="' + tabType + '"]');
        if (!panel) return;
        var image = panel.getAttribute('data-image') || '';
        processImage.classList.remove('show');
        contentArea.style.opacity = '0';

        setTimeout(function () {
          if (image) processImage.src = image;
          processImage.classList.add('show');
          contentArea.innerHTML = panel.innerHTML;
          contentArea.style.opacity = '1';
        }, 150);
      }

      var currentTabIndex = 0;
      var autoRotate = setInterval(function () {
        currentTabIndex = (currentTabIndex + 1) % tabItems.length;
        var nextTab = tabItems[currentTabIndex];
        tabItems.forEach(function (item) { item.classList.remove('active'); });
        nextTab.classList.add('active');
        updateContent(nextTab.getAttribute('data-tab'));
      }, 6000);

      tabItems.forEach(function (tab, idx) {
        tab.addEventListener('click', function () {
          clearInterval(autoRotate);
          currentTabIndex = idx;
          tabItems.forEach(function (item) { item.classList.remove('active'); });
          this.classList.add('active');
          updateContent(this.getAttribute('data-tab'));
        });
      });
    }

    // 3. Capabilities Swiper Initialization (Matches Existing Page Carousel Config)
    if (typeof Swiper !== 'undefined' && document.querySelector('.app-slider-main')) {
      new Swiper('.app-slider-main', {
        slidesPerView: 5,
        centeredSlides: true,
        spaceBetween: 30,
        grabCursor: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false
        },
        loop: true,
        navigation: {
          nextEl: '.app-slider .swiper-button-next',
          prevEl: '.app-slider .swiper-button-prev'
        },
        breakpoints: {
          320: { slidesPerView: 1, spaceBetween: 20 },
          600: { slidesPerView: 1, spaceBetween: 20 },
          768: { slidesPerView: 2, spaceBetween: 30 },
          1024: { slidesPerView: 3, spaceBetween: 30 },
          1440: { slidesPerView: 4, spaceBetween: 30 },
          1920: { slidesPerView: 5, spaceBetween: 30 }
        }
      });
    }

    // 4. Standalone FAQ Accordion Fallback (only attaches when rendered outside global footer.php)
    var faqBtns = document.querySelectorAll('#ai-faqs .accordions');
    var hasGlobalFooter = !!document.querySelector('footer.footer-wrapper');
    if (faqBtns.length && !hasGlobalFooter) {
      faqBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
          var isOpen = this.classList.contains('active');
          faqBtns.forEach(function (other) {
            other.classList.remove('active');
            if (other.nextElementSibling) other.nextElementSibling.style.display = 'none';
          });
          if (!isOpen) {
            this.classList.add('active');
            if (this.nextElementSibling) this.nextElementSibling.style.display = 'block';
          }
        });
      });
    }
  });
