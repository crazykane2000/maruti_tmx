(() => {
  const menuContent = {
    company: { kicker: 'OUR STORY', title: 'Steel that builds a stronger India.', description: 'Discover the people, principles and progress behind every Maruti TMX bar.', links: ['Overview', 'Our journey', 'Leadership', 'Manufacturing excellence', 'Quality & certifications'], feature: 'Built on trust.<br>Proven by strength.', label: 'DISCOVER MARUTI TMX' },
    products: { kicker: 'OUR PRODUCTS', title: 'Engineered for every ambition.', description: 'A complete range of high-performance TMX bars for homes, infrastructure and landmark projects.', links: ['Maruti TMX 550D', 'Corrosion resistant steel', 'Earthquake resistant steel', 'Technical specifications', 'Product enquiry'], feature: 'Performance<br>in every bar.', label: 'EXPLORE OUR RANGE' },
    strength: { kicker: 'WHY MARUTI', title: 'Strength you can measure.', description: 'Precision manufacturing, uncompromising testing and consistent performance from plant to project.', links: ['German technology', 'The strength advantage', 'Quality control', 'Research & innovation', 'Download brochure'], feature: 'Precision made.<br>Site proven.', label: 'THE MARUTI ADVANTAGE' },
    responsibility: { kicker: 'SUSTAINABILITY', title: 'Stronger steel. Lighter footprint.', description: 'Responsible steelmaking that protects resources, supports communities and builds lasting value.', links: ['Our approach', 'Environment', 'People & safety', 'Community', 'ESG disclosures'], feature: 'Building today.<br>Protecting tomorrow.', label: 'OUR COMMITMENT' }
  };
  const header = document.querySelector('#siteHeader');
  const panel = document.querySelector('#megaPanel');
  const triggers = [...document.querySelectorAll('.mega-trigger')];
  const title = document.querySelector('#megaTitle');
  const kicker = document.querySelector('#megaKicker');
  const description = document.querySelector('#megaDescription');
  const links = document.querySelector('#megaLinks');
  const feature = document.querySelector('#megaFeature strong');
  const featureLabel = document.querySelector('#megaFeature .feature-label');
  let closeTimer;

  function openMega(key, trigger) {
    const data = menuContent[key];
    if (!data) return;
    clearTimeout(closeTimer);
    triggers.forEach(item => item.classList.toggle('active', item === trigger));
    kicker.textContent = data.kicker;
    title.textContent = data.title;
    description.textContent = data.description;
    links.innerHTML = data.links.map(item => `<a href="#${item.toLowerCase().replace(/[^a-z0-9]+/g, '-')}">${item}</a>`).join('');
    feature.innerHTML = data.feature;
    featureLabel.textContent = data.label;
    panel.classList.add('open');
    header.classList.add('menu-open');
    panel.setAttribute('aria-hidden', 'false');
    if (window.gsap) gsap.fromTo('.mega-inner > *', { y: 12, opacity: 0 }, { y: 0, opacity: 1, duration: .38, stagger: .05, ease: 'power2.out' });
  }
  function closeMega() {
    panel.classList.remove('open');
    header.classList.remove('menu-open');
    panel.setAttribute('aria-hidden', 'true');
    triggers.forEach(item => item.classList.remove('active'));
  }
  triggers.forEach(trigger => {
    trigger.addEventListener('mouseenter', () => openMega(trigger.dataset.mega, trigger));
    trigger.addEventListener('focus', () => openMega(trigger.dataset.mega, trigger));
    trigger.addEventListener('click', () => panel.classList.contains('open') && trigger.classList.contains('active') ? closeMega() : openMega(trigger.dataset.mega, trigger));
  });
  header.addEventListener('mouseleave', () => { closeTimer = setTimeout(closeMega, 160); });
  header.addEventListener('mouseenter', () => clearTimeout(closeTimer));
  document.addEventListener('keydown', event => { if (event.key === 'Escape') { closeMega(); closeSearch(); } });
  window.addEventListener('scroll', () => header.classList.toggle('scrolled', window.scrollY > 24), { passive: true });

  const menuToggle = document.querySelector('#menuToggle');
  const mobileNav = document.querySelector('#mobileNav');
  menuToggle.addEventListener('click', () => {
    const open = mobileNav.classList.toggle('open');
    menuToggle.classList.toggle('open', open);
    header.classList.toggle('mobile-open', open);
    menuToggle.setAttribute('aria-expanded', String(open));
    document.body.style.overflow = open ? 'hidden' : '';
  });
  mobileNav.querySelectorAll('a').forEach(link => link.addEventListener('click', () => { mobileNav.classList.remove('open'); menuToggle.classList.remove('open'); header.classList.remove('mobile-open'); document.body.style.overflow = ''; }));

  const search = document.querySelector('#searchDrawer');
  const searchInput = document.querySelector('#siteSearch');
  function closeSearch() { search.classList.remove('open'); search.setAttribute('aria-hidden', 'true'); }
  document.querySelector('.search-button').addEventListener('click', () => { search.classList.add('open'); search.setAttribute('aria-hidden', 'false'); setTimeout(() => searchInput.focus(), 250); });
  document.querySelector('.search-close').addEventListener('click', closeSearch);
  document.querySelector('.search-form').addEventListener('submit', event => event.preventDefault());

  const heroVideo = document.querySelector('.hero-video');
  if (heroVideo) heroVideo.play().catch(() => {});

  if (window.gsap && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const intro = gsap.timeline({ defaults: { ease: 'power3.out' } });
    intro
      .from('.hero-eyebrow', { opacity: 0, x: -28, duration: .7 }, .18)
      .from('.hero-title-line > span', { yPercent: 115, rotate: 1.5, duration: 1.05, stagger: .13 }, .27)
      .from('.hero-copy', { opacity: 0, y: 24, duration: .8 }, .72)
      .from('.hero-actions .button', { y: 22, scale: .97, duration: .65, stagger: .1, clearProps: 'transform' }, .88)
      .from('.hero-bottom', { opacity: 0, y: 12, duration: .7 }, 1.08)
      .fromTo('.hero-progress i', { scaleX: 0, transformOrigin: 'left center' }, { scaleX: 1, duration: 1.15, ease: 'power2.inOut' }, 1.13);
  }
  if (window.gsap && window.ScrollTrigger) {
    gsap.registerPlugin(ScrollTrigger);
    const horizontalSection = document.querySelector('.horizontal-story');
    const horizontalTrack = document.querySelector('.horizontal-track');
    const horizontalProgress = document.querySelector('.horizontal-progress i');

    if (horizontalSection && horizontalTrack) {
      const horizontalMedia = gsap.matchMedia();
      horizontalMedia.add('(min-width: 901px)', () => {
        const getDistance = () => Math.max(0, horizontalTrack.scrollWidth - window.innerWidth);
        const horizontalTween = gsap.to(horizontalTrack, {
          x: () => -getDistance(),
          ease: 'none',
          scrollTrigger: {
            trigger: horizontalSection,
            start: 'top top',
            end: () => `+=${getDistance()}`,
            pin: '.horizontal-viewport',
            scrub: 0.85,
            invalidateOnRefresh: true,
            anticipatePin: 1,
            onUpdate: self => gsap.set(horizontalProgress, { scaleX: self.progress })
          }
        });
        return () => horizontalTween.kill();
      });
    }
  }
  const pageLoader = document.querySelector('#pageLoader');
  const loaderStartedAt = performance.now();
  const finishLoading = () => {
    if (!pageLoader || pageLoader.classList.contains('is-finished')) return;
    const remaining = Math.max(0, 700 - (performance.now() - loaderStartedAt));
    window.setTimeout(() => {
      pageLoader.classList.add('is-finished');
      document.body.classList.remove('is-loading');
      if (window.ScrollTrigger) {
        requestAnimationFrame(() => { ScrollTrigger.refresh(true); ScrollTrigger.update(); });
        window.setTimeout(() => ScrollTrigger.refresh(true), 350);
      }
    }, remaining);
  };
  if (document.readyState === 'complete') finishLoading();
  else window.addEventListener('load', finishLoading, { once: true });
  window.setTimeout(finishLoading, 3000);

  if (window.gsap && window.ScrollTrigger) {
    document.querySelectorAll('.impact-counter').forEach(counter => {
      const target = Number(counter.dataset.count || 0);
      const suffix = counter.dataset.suffix || '';
      const state = { value: 0 };
      const render = () => { counter.textContent = `${Math.round(state.value).toLocaleString('en-IN')}${suffix}`; };
      const reset = () => { gsap.killTweensOf(state); state.value = 0; render(); };
      const play = () => {
        reset();
        gsap.to(state, { value: target, duration: 1.8, ease: 'power2.out', onUpdate: render });
      };
      ScrollTrigger.create({
        trigger: counter,
        start: 'top 88%',
        end: 'bottom 12%',
        onEnter: play,
        onEnterBack: play,
        onLeave: reset,
        onLeaveBack: reset
      });
    });
  }
  document.querySelectorAll('[data-accordion]').forEach(accordion => {
    const panels = [...accordion.querySelectorAll('.accordion-panel')];
    let activeIndex = Math.max(0, panels.findIndex(panel => panel.classList.contains('is-active')));
    let loopTimer;
    let switching = false;

    const activatePanel = (panel, immediate = false) => {
      const nextIndex = panels.indexOf(panel);
      if (nextIndex < 0 || nextIndex === activeIndex || switching) return;
      switching = true;
      const current = panels[activeIndex];
      current?.classList.add('is-switching');
      const change = () => {
        panels.forEach(item => {
          const active = item === panel;
          item.classList.toggle('is-active', active);
          item.classList.remove('is-switching');
          item.setAttribute('aria-expanded', String(active));
        });
        activeIndex = nextIndex;
        window.setTimeout(() => { switching = false; }, immediate ? 0 : 900);
      };
      if (immediate) change(); else window.setTimeout(change, 140);
    };
    const startLoop = () => {
      window.clearInterval(loopTimer);
      loopTimer = window.setInterval(() => activatePanel(panels[(activeIndex + 1) % panels.length]), 4800);
    };
    const pauseLoop = () => window.clearInterval(loopTimer);

    panels.forEach(panel => {
      panel.addEventListener('mouseenter', () => {
        pauseLoop();
        if (window.matchMedia('(min-width: 901px)').matches) activatePanel(panel);
      });
      panel.addEventListener('focusin', () => { pauseLoop(); activatePanel(panel); });
      panel.addEventListener('click', event => {
        if (!event.target.closest('a')) { pauseLoop(); activatePanel(panel); }
      });
      panel.addEventListener('keydown', event => {
        if (event.key === 'Enter' || event.key === ' ') {
          event.preventDefault(); pauseLoop(); activatePanel(panel);
        }
      });
    });
    accordion.addEventListener('mouseleave', startLoop);
    accordion.addEventListener('focusout', event => { if (!accordion.contains(event.relatedTarget)) startLoop(); });
    if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) startLoop();
  });
  document.querySelectorAll('[data-career-accordion]').forEach(accordion => {
    const cards = [...accordion.querySelectorAll('.career-card')];
    cards.forEach(card => {
      const button = card.querySelector('button');
      button.addEventListener('click', () => {
        cards.forEach(item => {
          const open = item === card;
          item.classList.toggle('is-open', open);
          item.setAttribute('aria-expanded', String(open));
        });
      });
    });
  });

  if (window.gsap && window.ScrollTrigger && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    gsap.from('.news-card', {
      opacity: 0,
      y: 55,
      duration: .9,
      stagger: .14,
      ease: 'power3.out',
      scrollTrigger: { trigger: '.news-grid', start: 'top 84%', toggleActions: 'play none none reverse' }
    });
    gsap.from('.brand-story-copy > *', {
      opacity: 0,
      y: 38,
      duration: .9,
      stagger: .12,
      ease: 'power3.out',
      scrollTrigger: { trigger: '.brand-story', start: 'top 70%', toggleActions: 'play none none reverse' }
    });
    gsap.from('.brand-stack figure', {
      opacity: 0,
      y: 80,
      rotate: 4,
      duration: 1.1,
      stagger: .12,
      ease: 'power3.out',
      scrollTrigger: { trigger: '.brand-story', start: 'top 72%', toggleActions: 'play none none reverse' }
    });
    gsap.to('.brand-stack', {
      yPercent: -8,
      ease: 'none',
      scrollTrigger: { trigger: '.brand-story', start: 'top bottom', end: 'bottom top', scrub: 1.1 }
    });
    gsap.from('.career-card', {
      opacity: 0,
      y: 50,
      duration: .85,
      stagger: .1,
      ease: 'power3.out',
      scrollTrigger: { trigger: '.career-accordion', start: 'top 84%', toggleActions: 'play none none reverse' }
    });
  }
  window.addEventListener('pageshow', () => {
    if (window.ScrollTrigger) {
      requestAnimationFrame(() => ScrollTrigger.refresh(true));
      window.setTimeout(() => ScrollTrigger.refresh(true), 250);
    }
  });
})();
