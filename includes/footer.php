<?php
// includes/footer.php - Corporate Footer Component with Copyright & Scripts
?>
<footer class="bg-slate-950 text-slate-400 border-t border-white/10 pt-20 pb-10">
  <div class="custom-container">
    
    <!-- Top Footer Row: Newsletter & Dealer Call -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 pb-16 border-b border-slate-800 items-center">
      <div class="lg:col-span-6 space-y-2">
        <h3 class="font-heading font-extrabold text-2xl text-white">Subscribe to Maruti TMX Market & Steel Insights</h3>
        <p class="text-sm text-slate-400">Receive monthly price trends, technical whitepapers, and corporate disclosures.</p>
      </div>
      <div class="lg:col-span-6">
        <form class="flex flex-col sm:flex-row gap-3">
          <input type="email" placeholder="Enter your corporate email address..." class="bg-slate-900 border border-slate-800 focus:border-orange-500 rounded-lg px-5 py-3 text-white text-sm outline-none flex-grow transition-colors">
          <button type="submit" class="bg-orange-600 hover:bg-orange-500 text-white font-heading font-bold text-xs uppercase tracking-wider px-8 py-3 rounded-lg transition-all shadow-lg shadow-orange-600/30 whitespace-nowrap">
            Subscribe Now
          </button>
        </form>
      </div>
    </div>

    <!-- Main Footer Link Columns -->
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8 py-16 border-b border-slate-900 text-sm">
      
      <!-- Col 1: Brand Info -->
      <div class="col-span-2 space-y-4">
        <div class="flex items-center space-x-3">
          <div class="w-9 h-9 bg-orange-600 rounded flex items-center justify-center text-white font-black text-lg">
            M
          </div>
          <span class="font-heading font-black text-2xl text-white tracking-wider">MARUTI <span class="text-orange-500">TMX</span></span>
        </div>
        <p class="text-xs text-slate-400 leading-relaxed max-w-sm">
          Maruti TMX is a premier manufacturer of high-strength Fe-550D TMX rebars and structural steel. Building earthquake-resistant, sustainable foundations for a resilient nation.
        </p>
        <div class="flex items-center space-x-3 text-slate-400 pt-2">
          <a href="#" class="w-9 h-9 rounded-full bg-slate-900 hover:bg-orange-600 hover:text-white flex items-center justify-center transition-colors"><i class="fa-brands fa-linkedin-in text-sm"></i></a>
          <a href="#" class="w-9 h-9 rounded-full bg-slate-900 hover:bg-orange-600 hover:text-white flex items-center justify-center transition-colors"><i class="fa-brands fa-twitter text-sm"></i></a>
          <a href="#" class="w-9 h-9 rounded-full bg-slate-900 hover:bg-orange-600 hover:text-white flex items-center justify-center transition-colors"><i class="fa-brands fa-youtube text-sm"></i></a>
          <a href="#" class="w-9 h-9 rounded-full bg-slate-900 hover:bg-orange-600 hover:text-white flex items-center justify-center transition-colors"><i class="fa-brands fa-facebook-f text-sm"></i></a>
        </div>
      </div>

      <!-- Col 2: Products -->
      <div class="space-y-3">
        <h4 class="font-heading font-bold text-white text-xs uppercase tracking-widest border-b border-slate-800 pb-2">Steel Products</h4>
        <ul class="space-y-2 text-xs">
          <li><a href="#fe550d" class="hover:text-orange-500 transition-colors">Fe-550D TMX Rebar</a></li>
          <li><a href="#fe500d" class="hover:text-orange-500 transition-colors">Fe-500D CRS Rebar</a></li>
          <li><a href="#fe600" class="hover:text-orange-500 transition-colors">Fe-600 High Strength</a></li>
          <li><a href="#structural" class="hover:text-orange-500 transition-colors">MS Heavy Channels</a></li>
          <li><a href="#cutbend" class="hover:text-orange-500 transition-colors">Ready Cut & Bend</a></li>
        </ul>
      </div>

      <!-- Col 3: Sustainability & Governance -->
      <div class="space-y-3">
        <h4 class="font-heading font-bold text-white text-xs uppercase tracking-widest border-b border-slate-800 pb-2">Sustainability</h4>
        <ul class="space-y-2 text-xs">
          <li><a href="#overview" class="hover:text-orange-500 transition-colors">Green Steel Roadmap</a></li>
          <li><a href="#governance" class="hover:text-orange-500 transition-colors">Responsible Governance</a></li>
          <li><a href="#rise" class="hover:text-orange-500 transition-colors">R.I.S.E Framework</a></li>
          <li><a href="#esg" class="hover:text-orange-500 transition-colors">ESG Disclosures</a></li>
          <li><a href="#csr" class="hover:text-orange-500 transition-colors">CSR Community Impact</a></li>
        </ul>
      </div>

      <!-- Col 4: Corporate & Investors -->
      <div class="space-y-3">
        <h4 class="font-heading font-bold text-white text-xs uppercase tracking-widest border-b border-slate-800 pb-2">Corporate</h4>
        <ul class="space-y-2 text-xs">
          <li><a href="#about" class="hover:text-orange-500 transition-colors">About Our Journey</a></li>
          <li><a href="#leadership" class="hover:text-orange-500 transition-colors">Leadership Team</a></li>
          <li><a href="#investors" class="hover:text-orange-500 transition-colors">Investor Relations</a></li>
          <li><a href="#careers" class="hover:text-orange-500 transition-colors">Careers & Growth</a></li>
          <li><a href="#contact" class="hover:text-orange-500 transition-colors">Dealer Network</a></li>
        </ul>
      </div>

    </div>

    <!-- Bottom Row: Copyright & Certifications -->
    <div class="flex flex-col md:flex-row items-center justify-between pt-8 text-xs text-slate-500 space-y-4 md:space-y-0">
      <div>
        &copy; <?php echo date('Y'); ?> Maruti TMX Steel Industries Ltd. All rights reserved. Built with German Thermex Technology.
      </div>
      <div class="flex items-center space-x-6">
        <a href="#privacy" class="hover:text-slate-300">Privacy Policy</a>
        <a href="#terms" class="hover:text-slate-300">Terms of Use</a>
        <a href="#disclaimer" class="hover:text-slate-300">Investor Disclaimer</a>
        <a href="#sitemap" class="hover:text-slate-300">Sitemap</a>
      </div>
    </div>

  </div>
</footer>

<!-- Include Core Main JS Controller -->
<script src="assets/js/main.js"></script>

</body>
</html>
