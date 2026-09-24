<?php
// index.php - Main Maruti TMX Corporate Homepage
include 'includes/header.php';
include 'includes/hero.php';
include 'includes/products_teaser.php';
?>

<!-- SUSTAINABILITY SPOTLIGHT SECTION (Matching Jindal Steel Mega Menu Focus) -->
<section id="sustainability-spotlight" class="py-24 bg-slate-950 relative overflow-hidden">
  
  <!-- Background Glow & Grid -->
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,_var(--tw-gradient-stops))] from-orange-950/30 via-transparent to-transparent pointer-events-none"></div>

  <div class="custom-container relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      
      <!-- Left Visual Image -->
      <div class="lg:col-span-6 relative">
        <div class="relative rounded-2xl overflow-hidden border border-white/10 shadow-2xl group">
          <img src="assets/images/sustainability_bg.jpg" alt="Maruti TMX Sustainability & Solar Power" class="w-full h-[450px] object-cover group-hover:scale-105 transition-transform duration-700">
          <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>
          
          <!-- Floating Badge -->
          <div class="absolute bottom-6 left-6 right-6 bg-slate-900/90 backdrop-blur-md p-6 rounded-xl border border-white/10">
            <div class="flex items-center space-x-4">
              <div class="w-12 h-12 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xl font-bold">
                <i class="fa-solid fa-leaf"></i>
              </div>
              <div>
                <h4 class="font-heading font-extrabold text-white text-lg">Net-Zero 2030 Carbon Target</h4>
                <p class="text-xs text-slate-300 mt-0.5">Powering 45% of rolling mills via on-site solar & wind energy farms.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Content Text -->
      <div class="lg:col-span-6 space-y-6">
        <div class="inline-flex items-center space-x-2 text-emerald-400 font-bold text-xs uppercase tracking-widest">
          <i class="fa-solid fa-seedling"></i>
          <span>Eco-Conscious Innovation</span>
        </div>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight">
          PIONEERING GREEN STEEL <br>
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-teal-300">FOR FUTURE GENERATIONS</span>
        </h2>

        <p class="text-slate-300 leading-relaxed text-base">
          Rooted in our deep commitment to forging a sustainable future, Maruti TMX integrates energy-efficient induction furnaces, rainwater harvesting systems, and 100% slag recycling across all manufacturing facilities.
        </p>

        <!-- Bullet Highlights -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
          <div class="flex items-start space-x-3 p-4 bg-slate-900/80 rounded-lg border border-white/5">
            <i class="fa-solid fa-circle-check text-emerald-400 text-lg mt-0.5"></i>
            <div>
              <h5 class="font-heading font-bold text-white text-sm">Zero Liquid Discharge</h5>
              <p class="text-xs text-slate-400 mt-1">Closed-loop water recycling treatment facilities.</p>
            </div>
          </div>

          <div class="flex items-start space-x-3 p-4 bg-slate-900/80 rounded-lg border border-white/5">
            <i class="fa-solid fa-circle-check text-emerald-400 text-lg mt-0.5"></i>
            <div>
              <h5 class="font-heading font-bold text-white text-sm">R.I.S.E Framework</h5>
              <p class="text-xs text-slate-400 mt-1">Resource Innovation & Sustainable Efficiency standard.</p>
            </div>
          </div>
        </div>

        <div class="pt-4">
          <a href="#sustainability" class="btn-primary-orange">
            <span>Explore ESG Disclosures</span>
            <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CONTACT & DEALER ENQUIRY SECTION -->
<section id="contact" class="py-20 bg-slate-900 border-t border-white/10">
  <div class="custom-container">
    <div class="glass-card p-8 sm:p-12 border border-orange-500/30 relative overflow-hidden">
      
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
        <div class="lg:col-span-7 space-y-4">
          <span class="text-xs uppercase tracking-widest font-extrabold text-orange-500">Partner With Us</span>
          <h3 class="text-3xl sm:text-4xl font-extrabold text-white font-heading">
            BECOME AN AUTHORIZED MARUTI TMX DEALER OR REQUEST A PROJECT QUOTE
          </h3>
          <p class="text-slate-300 text-sm leading-relaxed max-w-xl">
            Our technical metallurgical engineers are ready to assist you with customized rebar estimates, structural steel requirements, and bulk logistics.
          </p>
        </div>
        <div class="lg:col-span-5 flex flex-col sm:flex-row gap-4 justify-end">
          <a href="tel:18001234567" class="btn-outline-glass justify-center">
            <i class="fa-solid fa-phone text-orange-500"></i>
            <span>Toll-Free: 1800-TMX-STEEL</span>
          </a>
          <a href="mailto:sales@marutitmx.com" class="btn-primary-orange justify-center">
            <i class="fa-solid fa-paper-plane"></i>
            <span>Request Proposal</span>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<?php
include 'includes/footer.php';
?>
