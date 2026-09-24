<?php
// includes/hero.php - Video Background Hero Section with Overlay & Animated Ticker Stats
?>
<section class="hero-wrapper relative bg-slate-950 overflow-hidden min-h-screen flex items-center justify-center">
  
  <!-- VIDEO BACKGROUND -->
  <video autoplay loop muted playsinline poster="assets/images/hero_bg.jpg" class="hero-video-bg">
    <source src="https://assets.mixkit.co/videos/preview/mixkit-heavy-industry-steel-foundry-factory-41804-large.mp4" type="video/mp4">
    <!-- Fallback Image if video is unsupported -->
    <img src="assets/images/hero_bg.jpg" alt="Maruti TMX Steel Factory" class="w-full h-full object-cover">
  </video>

  <!-- DARK OVERLAY & GRADIENTS -->
  <div class="hero-overlay"></div>
  <div class="hero-overlay-grid"></div>

  <!-- HERO CONTENT CONTAINER -->
  <div class="custom-container hero-content py-24 z-10">
    <div class="grid grid-cols-12 gap-8 items-center">
      
      <!-- Main Text Content (Left Column) -->
      <div class="col-span-12 lg:col-span-8 space-y-6">
        
        <!-- Badge Tag -->
        <div class="hero-badge">
          <span class="w-2 h-2 rounded-full bg-orange-500 animate-ping"></span>
          <span>GERMAN THERMEX TECHNOLOGY | FE-550D GRADE</span>
        </div>

        <!-- Headline -->
        <h1 class="text-4xl sm:text-5xl lg:text-7xl font-black text-white tracking-tight leading-[1.08] uppercase">
          ENGINEERING <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 via-amber-500 to-orange-400">STRENGTH.</span><br>
          SUSTAINING THE FUTURE.
        </h1>

        <!-- Subtext -->
        <p class="text-slate-300 text-lg sm:text-xl font-normal leading-relaxed max-w-3xl">
          Maruti TMX manufactures high-strength, earthquake-resistant Fe-550D steel rebars using state-of-the-art German Thermex quenching technology for monumental infrastructure across the globe.
        </p>

        <!-- CTA Buttons -->
        <div class="pt-4 flex flex-wrap gap-4 items-center">
          <a href="#products" class="btn-primary-orange group">
            <span>Explore TMX Range</span>
            <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
          </a>

          <a href="#sustainability" class="btn-outline-glass group">
            <i class="fa-solid fa-leaf text-emerald-400"></i>
            <span>Green Steel Commitment</span>
          </a>
        </div>

      </div>

      <!-- Right Column: Quick Feature Cards -->
      <div class="col-span-12 lg:col-span-4 hidden lg:block space-y-4">
        
        <div class="glass-card p-6 border-l-4 border-l-orange-500">
          <div class="flex items-center space-x-4">
            <div class="w-12 h-12 rounded-lg bg-orange-500/20 text-orange-400 flex items-center justify-center text-xl">
              <i class="fa-solid fa-shield-halved"></i>
            </div>
            <div>
              <h4 class="font-heading font-bold text-white text-lg">Seismic Resilience</h4>
              <p class="text-xs text-slate-400 mt-1">High elongation > 16% engineered for Zone 5 earthquake resistance.</p>
            </div>
          </div>
        </div>

        <div class="glass-card p-6 border-l-4 border-l-emerald-500">
          <div class="flex items-center space-x-4">
            <div class="w-12 h-12 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xl">
              <i class="fa-solid fa-recycle"></i>
            </div>
            <div>
              <h4 class="font-heading font-bold text-white text-lg">Green Steel Tech</h4>
              <p class="text-xs text-slate-400 mt-1">Recycled scrap furnace technology with 35% lower carbon footprint.</p>
            </div>
          </div>
        </div>

        <div class="glass-card p-6 border-l-4 border-l-amber-500">
          <div class="flex items-center space-x-4">
            <div class="w-12 h-12 rounded-lg bg-amber-500/20 text-amber-400 flex items-center justify-center text-xl">
              <i class="fa-solid fa-microscope"></i>
            </div>
            <div>
              <h4 class="font-heading font-bold text-white text-lg">Tempered Martensite</h4>
              <p class="text-xs text-slate-400 mt-1">Controlled water-quenching structure ensuring anti-corrosive shell.</p>
            </div>
          </div>
        </div>

      </div>

    </div>

    <!-- STATS TICKER BAR AT BOTTOM OF HERO -->
    <div class="mt-16 stats-bar p-6 lg:p-8">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center divide-y md:divide-y-0 md:divide-x divide-white/10">
        
        <div class="pt-4 md:pt-0">
          <div class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-orange-500">
            <span class="counter-num" data-count="5.2" data-decimals="1" data-suffix=" MTPA">0</span>
          </div>
          <div class="text-xs uppercase tracking-wider font-semibold text-slate-400 mt-2">Annual Steel Production</div>
        </div>

        <div class="pt-4 md:pt-0">
          <div class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-white">
            <span class="counter-num" data-count="550" data-suffix="D Grade">0</span>
          </div>
          <div class="text-xs uppercase tracking-wider font-semibold text-slate-400 mt-2">Super Yield Strength (N/mm²)</div>
        </div>

        <div class="pt-4 md:pt-0">
          <div class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-emerald-400">
            <span class="counter-num" data-count="100" data-suffix="%">0</span>
          </div>
          <div class="text-xs uppercase tracking-wider font-semibold text-slate-400 mt-2">Zero Liquid Discharge</div>
        </div>

        <div class="pt-4 md:pt-0">
          <div class="font-heading font-extrabold text-3xl sm:text-4xl lg:text-5xl text-amber-400">
            <span class="counter-num" data-count="1500" data-suffix="+">0</span>
          </div>
          <div class="text-xs uppercase tracking-wider font-semibold text-slate-400 mt-2">Landmark Mega Projects</div>
        </div>

      </div>
    </div>

    <!-- SCROLL INDICATOR -->
    <div class="flex justify-center mt-10">
      <a href="#products" class="flex flex-col items-center text-xs text-slate-400 hover:text-white transition-colors">
        <div class="scroll-mouse mb-2">
          <div class="scroll-wheel"></div>
        </div>
        <span class="uppercase tracking-widest font-semibold">Scroll to Explore</span>
      </a>
    </div>

  </div>

</section>
