/**
 * MARUTI TMX - CORE INTERACTIVE ENGINE
 * Powered by jQuery & GSAP (GreenSock Animation Platform)
 */

$(document).ready(function () {
  // 1. Header Sticky & Blur state on Scroll
  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 40) {
      $('#siteHeader').addClass('scrolled');
    } else {
      $('#siteHeader').removeClass('scrolled');
    }
  });

  // 2. Mega Menu Hover / Click Handler with GSAP Animations
  let currentMegaTab = null;

  // Desktop Hover / Click for Mega Menu trigger
  $('.mega-trigger').on('mouseenter click', function (e) {
    const targetMenuId = $(this).data('mega-target');
    const $targetMenu = $('#' + targetMenuId);

    if ($targetMenu.length === 0) return;

    // Highlight active link
    $('.nav-link-item').removeClass('active');
    $(this).addClass('active');

    // Hide all mega menu overlays instantly if switching, or slide in smooth using GSAP
    if (currentMegaTab !== targetMenuId) {
      $('.mega-menu-overlay').not($targetMenu).removeClass('active').css({ display: 'none', opacity: 0 });

      $targetMenu.addClass('active').css({ display: 'block' });

      gsap.fromTo(
        $targetMenu,
        { opacity: 0, y: -12 },
        { opacity: 1, y: 0, duration: 0.35, ease: 'power2.out' }
      );

      // Animate inner elements
      gsap.fromTo(
        $targetMenu.find('.mega-menu-heading, .mega-sub-link, .mega-preview-card'),
        { opacity: 0, y: 10 },
        { opacity: 1, y: 0, duration: 0.3, stagger: 0.04, ease: 'power1.out' }
      );

      currentMegaTab = targetMenuId;
    }
  });

  // Close Mega Menu on Mouse Leave from header container
  $('#megaMenuContainer, #siteHeader').on('mouseleave', function (e) {
    closeMegaMenu();
  });

  function closeMegaMenu() {
    if (currentMegaTab) {
      const $activeMenu = $('#' + currentMegaTab);
      gsap.to($activeMenu, {
        opacity: 0,
        y: -10,
        duration: 0.25,
        ease: 'power2.in',
        onComplete: function () {
          $activeMenu.removeClass('active').css({ display: 'none' });
          $('.nav-link-item').removeClass('active');
          currentMegaTab = null;
        }
      });
    }
  }

  // 3. Tab content switching inside Mega Menu (e.g. Jindal Steel interactive categories)
  $('.mega-cat-item').on('mouseenter click', function () {
    const tabId = $(this).data('tab');

    $('.mega-cat-item').removeClass('bg-slate-100 font-bold text-orange-600').addClass('text-slate-700');
    $(this).addClass('bg-slate-100 font-bold text-orange-600');

    $('.mega-tab-content').addClass('hidden');
    $('#' + tabId).removeClass('hidden');

    gsap.fromTo('#' + tabId + ' .mega-sub-link', 
      { opacity: 0, x: 10 },
      { opacity: 1, x: 0, duration: 0.25, stagger: 0.03, ease: 'power2.out' }
    );
  });

  // 4. Mobile Menu Drawer Toggle
  $('#mobileMenuBtn').on('click', function () {
    $('#mobileMenuDrawer').toggleClass('translate-x-full');
    $('body').toggleClass('overflow-hidden');
  });

  $('#closeMobileMenuBtn').on('click', function () {
    $('#mobileMenuDrawer').addClass('translate-x-full');
    $('body').removeClass('overflow-hidden');
  });

  // Mobile Mega Dropdown Accodion Toggle
  $('.mobile-dropdown-toggle').on('click', function () {
    const target = $(this).data('target');
    $('#' + target).slideToggle(300);
    $(this).find('.chevron-icon').toggleClass('rotate-180');
  });

  // 5. Hero Stats Counter Animation using GSAP
  if ($('.counter-num').length > 0) {
    let animated = false;
    $(window).on('scroll load', function () {
      if (!animated && isElementInView($('.stats-bar'))) {
        animated = true;
        $('.counter-num').each(function () {
          const $this = $(this);
          const targetVal = parseFloat($this.data('count'));
          const decimals = $this.data('decimals') || 0;
          const suffix = $this.data('suffix') || '';

          gsap.to({ val: 0 }, {
            val: targetVal,
            duration: 2.2,
            ease: 'power2.out',
            onUpdate: function () {
              $this.text(this.targets()[0].val.toFixed(decimals) + suffix);
            }
          });
        });
      }
    });
  }

  function isElementInView(elem) {
    if (!elem.length) return false;
    const docViewTop = $(window).scrollTop();
    const docViewBottom = docViewTop + $(window).height();
    const elemTop = elem.offset().top;
    return elemTop <= docViewBottom;
  }

  // 6. Search Bar Overlay Toggle
  $('#searchToggleBtn, #closeSearchBtn').on('click', function () {
    $('#searchOverlay').toggleClass('hidden flex');
    if (!$('#searchOverlay').hasClass('hidden')) {
      $('#searchInput').focus();
    }
  });
});
