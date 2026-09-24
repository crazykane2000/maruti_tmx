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
        let distance = 0;
        let sectionTop = 0;
        let ticking = false;

        const measure = () => {
          gsap.set(horizontalTrack, { x: 0 });
          distance = Math.max(0, horizontalTrack.scrollWidth - window.innerWidth);
          horizontalSection.style.height = `${window.innerHeight + distance}px`;
          sectionTop = horizontalSection.getBoundingClientRect().top + window.scrollY;
        };
        const render = () => {
          ticking = false;
          const progress = distance > 0 ? Math.min(1, Math.max(0, (window.scrollY - sectionTop) / distance)) : 0;
          gsap.set(horizontalTrack, { x: -distance * progress });
          gsap.set(horizontalProgress, { scaleX: progress });
        };
        const requestRender = () => {
          if (ticking) return;
          ticking = true;
          requestAnimationFrame(render);
        };
        const refresh = () => {
          measure();
          render();
        };

        window.addEventListener('scroll', requestRender, { passive: true });
        window.addEventListener('resize', refresh);
        requestAnimationFrame(refresh);
        window.setTimeout(refresh, 250);
        window.setTimeout(refresh, 900);

        return () => {
          window.removeEventListener('scroll', requestRender);
          window.removeEventListener('resize', refresh);
          horizontalSection.style.height = '';
          gsap.set(horizontalTrack, { clearProps: 'transform' });
          gsap.set(horizontalProgress, { clearProps: 'transform' });
        };
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

  document.querySelectorAll('[data-source-slider]').forEach(slider => {
    const track = slider.querySelector('.source-track');
    const cards = [...slider.querySelectorAll('.source-card')];
    const section = slider.closest('.strength-source');
    const previous = section?.querySelector('[data-source-prev]');
    const next = section?.querySelector('[data-source-next]');
    const progress = section?.querySelector('.source-controls > span i');
    let activeIndex = 0;
    let timer;

    const render = (index, userInitiated = false) => {
      activeIndex = (index + cards.length) % cards.length;
      const card = cards[activeIndex];
      const maxTravel = Math.max(0, track.scrollWidth - slider.clientWidth);
      const target = Math.min(card.offsetLeft, maxTravel);
      track.style.transform = `translate3d(${-target}px,0,0)`;
      cards.forEach((item, itemIndex) => item.classList.toggle('is-active', itemIndex === activeIndex));
      if (progress) progress.style.transform = `translateX(${activeIndex * 100}%)`;
      if (userInitiated) restart();
    };
    const restart = () => {
      window.clearInterval(timer);
      if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        timer = window.setInterval(() => render(activeIndex + 1), 4600);
      }
    };
    previous?.addEventListener('click', () => render(activeIndex - 1, true));
    next?.addEventListener('click', () => render(activeIndex + 1, true));
    slider.addEventListener('mouseenter', () => window.clearInterval(timer));
    slider.addEventListener('mouseleave', restart);
    slider.addEventListener('focusin', () => window.clearInterval(timer));
    slider.addEventListener('focusout', event => { if (!slider.contains(event.relatedTarget)) restart(); });
    window.addEventListener('resize', () => render(activeIndex));
    render(0);
    restart();
  });
  if (window.gsap && window.ScrollTrigger && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    gsap.from('.capability-copy > *', {
      opacity: 0,
      y: 38,
      duration: .85,
      stagger: .09,
      ease: 'power3.out',
      scrollTrigger: { trigger: '.capability-body', start: 'top 76%', toggleActions: 'play none none reverse' }
    });
    gsap.from('.india-mark, .network-node, .coverage-label', {
      opacity: 0,
      scale: .9,
      y: 24,
      duration: .9,
      stagger: .08,
      ease: 'power3.out',
      scrollTrigger: { trigger: '.coverage-visual', start: 'top 78%', toggleActions: 'play none none reverse' }
    });
    gsap.from('.source-copy > *', {
      opacity: 0,
      y: 35,
      duration: .8,
      stagger: .08,
      ease: 'power3.out',
      scrollTrigger: { trigger: '.strength-source', start: 'top 78%', toggleActions: 'play none none reverse' }
    });
    gsap.from('.source-slider', {
      opacity: 0,
      x: 70,
      duration: 1.05,
      ease: 'power3.out',
      scrollTrigger: { trigger: '.strength-source', start: 'top 78%', toggleActions: 'play none none reverse' }
    });    gsap.from('.news-card', {
      opacity: 0,
      y: 55,
      duration: .9,
      stagger: .14,
      ease: 'power3.out',
      scrollTrigger: { trigger: '.news-grid', start: 'top 84%', toggleActions: 'play none none reverse' }
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
  const refreshStoryPosition = () => {
    if (!window.ScrollTrigger) return;
    ScrollTrigger.refresh(true);
    ScrollTrigger.update();
  };
  window.addEventListener('pageshow', () => {
    requestAnimationFrame(refreshStoryPosition);
    window.setTimeout(refreshStoryPosition, 250);
    window.setTimeout(refreshStoryPosition, 900);
  });
  window.addEventListener('hashchange', () => {
    requestAnimationFrame(refreshStoryPosition);
    window.setTimeout(refreshStoryPosition, 250);
  });

  document.querySelectorAll('[data-image-sequence]').forEach(section => {
    const canvas = section.querySelector('.sequence-canvas');
    const context = canvas?.getContext('2d');
    const stage = section.querySelector('.sequence-stage');
    const loading = section.querySelector('.sequence-loading');
    const progressBar = section.querySelector('.sequence-progress i');
    const captionInner = section.querySelector('.sequence-caption-inner');
    const eyebrow = section.querySelector('.sequence-eyebrow');
    const heading = section.querySelector('.sequence-caption h2');
    const description = section.querySelector('.sequence-description');
    const accent = section.querySelector('.sequence-accent i');
    if (!canvas || !context || !stage) return;

    const captions = [
      ['01 — TMT QUALITY', 'High Strength', 'Built for dependable load-bearing performance with strong structural support for demanding construction use.'],
      ['02 — FLEXIBILITY', 'Superior Bendability', 'Engineered to bend with ease during fabrication while maintaining its core strength and integrity.'],
      ['03 — SAFETY', 'Earthquake Resistance', 'High ductility helps the structure absorb stress better, making it more reliable in seismic conditions.'],
      ['04 — BONDING', 'Better Grip', 'Designed for excellent bonding with concrete to improve structural hold and long-term stability.'],
      ['05 — DURABILITY', 'Corrosion Resistance', 'Enhanced resistance against rust and environmental wear helps increase the life of the structure.'],
      ['06 — PERFORMANCE', 'Thermal Stability', 'Consistent performance under temperature variation supports reliability, longevity, and structural confidence.']
    ];
    const frameCount = 120;
    const images = new Array(frameCount);
    const states = new Array(frameCount).fill(0);
    const queue = [];
    const queued = new Set();
    let loadingCount = 0;
    let currentFrame = 0;
    let activeCaption = -1;
    let ticking = false;
    let width = 0;
    let height = 0;
    let ratio = 1;

    const framePath = index => `assets/images/seq/ezgif-frame-${String(index + 1).padStart(3, '0')}.jpg`;
    const draw = requested => {
      let image = images[requested];
      if (!image) {
        for (let offset = 1; offset < frameCount && !image; offset++) image = images[requested - offset] || images[requested + offset];
      }
      if (!image || !image.naturalWidth) return;
      context.setTransform(ratio, 0, 0, ratio, 0, 0);
      context.clearRect(0, 0, width, height);
      const scale = Math.min(width / image.naturalWidth, height / image.naturalHeight);
      const drawWidth = image.naturalWidth * scale;
      const drawHeight = image.naturalHeight * scale;
      const x = (width - drawWidth) / 2 + Math.min(width * .045, 46);
      const y = (height - drawHeight) / 2;
      context.drawImage(image, x, y, drawWidth, drawHeight);
      loading?.classList.add('is-hidden');
    };
    const pump = () => {
      while (loadingCount < 5 && queue.length) {
        const index = queue.shift();
        queued.delete(index);
        if (states[index]) continue;
        states[index] = 1;
        loadingCount++;
        const image = new Image();
        image.decoding = 'async';
        image.onload = () => {
          images[index] = image;
          states[index] = 2;
          loadingCount--;
          if (index === currentFrame || !images[currentFrame]) draw(currentFrame);
          pump();
        };
        image.onerror = () => { states[index] = 3; loadingCount--; pump(); };
        image.src = framePath(index);
      }
    };
    const requestFrame = index => {
      if (index < 0 || index >= frameCount || states[index] || queued.has(index)) return;
      queued.add(index);
      queue.push(index);
    };
    const preloadAround = index => {
      requestFrame(index);
      for (let radius = 1; radius <= 8; radius++) {
        requestFrame(index + radius);
        requestFrame(index - radius);
      }
      pump();
    };
    const resize = () => {
      const bounds = stage.getBoundingClientRect();
      width = Math.max(1, bounds.width);
      height = Math.max(1, bounds.height);
      ratio = Math.min(2, window.devicePixelRatio || 1);
      canvas.width = Math.round(width * ratio);
      canvas.height = Math.round(height * ratio);
      draw(currentFrame);
    };
    const smoothstep = value => value * value * (3 - 2 * value);
    const render = () => {
      ticking = false;
      const bounds = section.getBoundingClientRect();
      const travel = Math.max(1, section.offsetHeight - window.innerHeight);
      const progress = Math.min(1, Math.max(0, -bounds.top / travel));
      currentFrame = Math.min(frameCount - 1, Math.round(progress * (frameCount - 1)));
      preloadAround(currentFrame);
      draw(currentFrame);
      if (progressBar) progressBar.style.transform = `scaleX(${progress})`;

      const rawCaption = Math.min(captions.length - .0001, progress * captions.length);
      const captionIndex = Math.floor(rawCaption);
      const local = rawCaption - captionIndex;
      if (captionIndex !== activeCaption) {
        activeCaption = captionIndex;
        eyebrow.textContent = captions[captionIndex][0];
        heading.textContent = captions[captionIndex][1];
        description.textContent = captions[captionIndex][2];
      }
      const fadeIn = smoothstep(Math.min(1, local / .14));
      const fadeOut = smoothstep(Math.min(1, (1 - local) / .14));
      const visibility = Math.max(.04, Math.min(fadeIn, fadeOut));
      captionInner.style.opacity = visibility;
      captionInner.style.transform = `translateY(${(1 - visibility) * 15}px)`;
      captionInner.style.filter = `blur(${(1 - visibility) * 7}px)`;
      if (accent) accent.style.transform = `scaleX(${Math.max(.08, visibility)})`;
    };
    const requestRender = () => {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(render);
    };

    requestFrame(0);
    pump();
    resize();
    render();
    window.addEventListener('scroll', requestRender, { passive: true });
    window.addEventListener('resize', () => { resize(); requestRender(); });
    if ('ResizeObserver' in window) new ResizeObserver(resize).observe(stage);
  });
  document.querySelectorAll('[data-india-map]').forEach(map => {
    const tooltip = map.querySelector('.map-tooltip');
    const title = tooltip?.querySelector('strong');
    const activeIds = ['IN-DL', 'IN-UP', 'IN-MP', 'IN-BR', 'IN-TG', 'IN-MH', 'IN-OR', 'IN-KA', 'IN-AP'];
    const stateNames = { 'IN-DL': 'Delhi NCR', 'IN-UP': 'Uttar Pradesh', 'IN-MP': 'Madhya Pradesh', 'IN-BR': 'Bihar', 'IN-TG': 'Telangana', 'IN-MH': 'Maharashtra', 'IN-OR': 'Odisha', 'IN-KA': 'Karnataka', 'IN-AP': 'Andhra Pradesh' };
    activeIds.forEach(id => {
      const state = map.querySelector(`#${id}`);
      if (!state) return;
      state.classList.add('is-network-state');
      state.setAttribute('tabindex', '0');
      state.setAttribute('role', 'button');
      state.setAttribute('aria-label', `${stateNames[id]} — Maruti TMX network`);
      const show = event => {
        if (!tooltip || !title) return;
        title.textContent = stateNames[id];
        tooltip.classList.add('is-visible');
        tooltip.setAttribute('aria-hidden', 'false');
        const bounds = map.getBoundingClientRect();
        const x = event.clientX ? event.clientX - bounds.left : bounds.width / 2;
        const y = event.clientY ? event.clientY - bounds.top : bounds.height / 2;
        tooltip.style.left = `${Math.min(bounds.width - 20, Math.max(20, x))}px`;
        tooltip.style.top = `${Math.min(bounds.height - 20, Math.max(20, y))}px`;
      };
      const hide = () => { tooltip?.classList.remove('is-visible'); tooltip?.setAttribute('aria-hidden', 'true'); };
      state.addEventListener('pointerenter', show);
      state.addEventListener('pointermove', show);
      state.addEventListener('pointerleave', hide);
      state.addEventListener('focus', show);
      state.addEventListener('blur', hide);
    });
  });
  document.querySelectorAll('.footer-connect form').forEach(form => {
    form.addEventListener('submit', event => event.preventDefault());
  });
})();
