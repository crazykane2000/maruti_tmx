<?php
// includes/header.php - Maruti TMX Header with Executive Top Bar and Jindal Steel Style Mega Menu
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maruti TMX Steel | High-Strength TMX Bars & Sustainable Infrastructure</title>
  <meta name="description" content="Maruti TMX is a premier manufacturer of high-strength Fe-550D TMX steel rebars, structural steel, and sustainable green steel solutions for mega infrastructure.">
  
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              orange: '#ff5500',
              orangeDark: '#d94400',
              teal: '#00b4d8',
              dark: '#090d16',
              surface: '#111726'
            }
          }
        }
      }
    }
  </script>

  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  
  <!-- jQuery & GSAP Libraries -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>
<body class="bg-[#090d16] text-slate-100 antialiased selection:bg-orange-600 selection:text-white">

<!-- SITE HEADER -->
<header id="siteHeader" class="site-header text-white transition-all duration-300">
  
  <!-- TOP UTILITY BAR (Inspired by ArcelorMittal Corporate Top Bar) -->
  <div class="top-bar bg-slate-950/80 backdrop-blur-sm py-2 text-slate-300 border-b border-white/10 hidden md:block">
    <div class="custom-container flex items-center justify-between">
      
      <!-- Left: Ticker / Stock & Status -->
      <div class="flex items-center space-x-6 text-xs font-medium">
        <div class="flex items-center space-x-2">
          <span class="inline-block w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
          <span class="text-slate-400 font-semibold">MARUTI TMX (NSE):</span>
          <span class="text-emerald-400 font-bold">₹63.56 ▲ +1.8%</span>
        </div>
        <span class="text-slate-600">|</span>
        <div class="flex items-center space-x-2 text-orange-400 font-semibold">
          <i class="fa-solid fa-award text-xs"></i>
          <span>25th Anniversary 1999 - 2026</span>
        </div>
      </div>

      <!-- Right: Utility Links -->
      <div class="flex items-center space-x-6 text-xs uppercase tracking-wider font-semibold">
        <a href="#reports" class="hover:text-orange-500 transition-colors">Reports & Policies</a>
        <a href="#media" class="hover:text-orange-500 transition-colors">Media</a>
        <a href="#contact" class="hover:text-orange-500 transition-colors">Contact</a>
        <a href="#global" class="hover:text-orange-500 transition-colors flex items-center space-x-1">
          <i class="fa-solid fa-globe text-xs text-orange-500"></i>
          <span>Global / India</span>
        </a>
      </div>
    </div>
  </div>

  <!-- MAIN NAVBAR -->
  <div class="py-3 lg:py-0 border-b border-white/10 bg-slate-950/60 backdrop-blur-md">
    <div class="custom-container flex items-center justify-between">
      
      <!-- Logo Branding -->
      <a href="index.php" class="flex items-center space-x-3 py-3 group">
        <div class="w-11 h-11 bg-gradient-to-br from-orange-500 to-amber-600 rounded-lg flex items-center justify-center shadow-lg shadow-orange-500/30 group-hover:scale-105 transition-transform duration-300">
          <i class="fa-solid fa-cubes-stacked text-white text-xl"></i>
        </div>
        <div>
          <div class="flex items-center space-x-2">
            <span class="font-heading font-black text-2xl tracking-wider text-white">MARUTI</span>
            <span class="bg-gradient-to-r from-orange-500 to-amber-500 text-white font-black text-sm px-2 py-0.5 rounded tracking-widest">TMX</span>
          </div>
          <p class="text-[10px] text-slate-400 uppercase tracking-widest font-semibold -mt-1">High-Strength Steel Rebars</p>
        </div>
      </a>

      <!-- Desktop Navigation Menu Items -->
      <nav class="hidden lg:flex items-center space-x-1 font-heading">
        
        <!-- About Us -->
        <div class="mega-trigger text-sm uppercase tracking-wider text-slate-200 hover:text-orange-500 cursor-pointer" data-mega-target="megaAbout">
          <span class="nav-link-item">About Us <i class="fa-solid fa-chevron-down text-[10px] ml-1.5 opacity-60"></i></span>
        </div>

        <!-- Products & TMX -->
        <div class="mega-trigger text-sm uppercase tracking-wider text-slate-200 hover:text-orange-500 cursor-pointer" data-mega-target="megaProducts">
          <span class="nav-link-item">Products & TMX <i class="fa-solid fa-chevron-down text-[10px] ml-1.5 opacity-60"></i></span>
        </div>

        <!-- Sustainability (Inspired by Jindal Steel Menu Screenshot) -->
        <div class="mega-trigger text-sm uppercase tracking-wider text-slate-200 hover:text-orange-500 cursor-pointer" data-mega-target="megaSustainability">
          <span class="nav-link-item text-orange-400 font-bold">Sustainability <i class="fa-solid fa-chevron-down text-[10px] ml-1.5 opacity-60"></i></span>
        </div>

        <!-- Industries -->
        <div class="mega-trigger text-sm uppercase tracking-wider text-slate-200 hover:text-orange-500 cursor-pointer" data-mega-target="megaIndustries">
          <span class="nav-link-item">Industries <i class="fa-solid fa-chevron-down text-[10px] ml-1.5 opacity-60"></i></span>
        </div>

        <!-- Investors -->
        <div class="mega-trigger text-sm uppercase tracking-wider text-slate-200 hover:text-orange-500 cursor-pointer" data-mega-target="megaInvestors">
          <span class="nav-link-item">Investors <i class="fa-solid fa-chevron-down text-[10px] ml-1.5 opacity-60"></i></span>
        </div>

        <!-- Careers -->
        <a href="#careers" class="text-sm uppercase tracking-wider text-slate-200 hover:text-orange-500 nav-link-item">
          Careers
        </a>
      </nav>

      <!-- Right Header Actions (Search & Quote Button) -->
      <div class="flex items-center space-x-4">
        <button id="searchToggleBtn" class="w-10 h-10 rounded-full bg-white/5 hover:bg-white/10 flex items-center justify-center text-slate-300 hover:text-white transition-colors">
          <i class="fa-solid fa-magnifying-glass text-sm"></i>
        </button>

        <a href="#contact" class="hidden sm:inline-flex items-center justify-center px-5 py-2.5 bg-orange-600 hover:bg-orange-500 text-white font-heading font-bold text-xs uppercase tracking-wider rounded-md transition-all shadow-lg shadow-orange-600/30">
          <span>Get Dealer Quote</span>
          <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
        </a>

        <!-- Mobile Menu Hamburger Button -->
        <button id="mobileMenuBtn" class="lg:hidden p-2 text-slate-300 hover:text-white focus:outline-none">
          <i class="fa-solid fa-bars text-2xl"></i>
        </button>
      </div>

    </div>
  </div>

  <!-- ==========================================================================
       MEGA MENU OVERLAYS (EXACT MATCH TO JINDAL STEEL ATTACHED SCREENSHOT)
       ========================================================================== -->
  <div id="megaMenuContainer" class="relative">
    
    <!-- 1. SUSTAINABILITY MEGA MENU (Attached Jindal Steel Reference) -->
    <div id="megaSustainability" class="mega-menu-overlay py-10">
      <div class="custom-container">
        <div class="grid grid-cols-12 gap-8 items-start">
          
          <!-- Left Column: Title & Corporate Intro (Matching Screenshot 2) -->
          <div class="col-span-12 lg:col-span-5 mega-menu-left p-6 lg:p-8 rounded-xl">
            <h3 class="mega-menu-heading">SUSTAINABILITY</h3>
            <p class="text-slate-600 leading-relaxed text-sm mb-6 mt-3">
              At Maruti TMX, the company's sustainability initiatives are rooted in a deep commitment to forging a greener future through responsible practices, zero-effluent steelmaking, and eco-conscious innovation.
            </p>
            
            <div class="relative overflow-hidden rounded-lg group shadow-md">
              <img src="assets/images/sustainability_bg.jpg" alt="Sustainability Maruti TMX" class="w-full h-44 object-cover group-hover:scale-105 transition-transform duration-500">
              <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent flex items-end p-4">
                <span class="text-white text-xs font-bold uppercase tracking-wider flex items-center">
                  <i class="fa-solid fa-leaf text-emerald-400 mr-2"></i> Green Steel Net-Zero Roadmap 2030
                </span>
              </div>
            </div>
          </div>

          <!-- Right Column: Interactive Sub-Menu Categories (Matching Screenshot 2 chevron menu) -->
          <div class="col-span-12 lg:col-span-7 grid grid-cols-1 md:grid-cols-2 gap-4 pt-2">
            
            <a href="#overview" class="mega-sub-link group">
              <span class="arrow-icon"><i class="fa-solid fa-chevron-right"></i></span>
              <div>
                <div class="font-bold text-slate-800 group-hover:text-orange-600">Overview</div>
                <div class="text-xs text-slate-500 font-normal">Our commitment to sustainable steelmaking</div>
              </div>
            </a>

            <a href="#governance" class="mega-sub-link group">
              <span class="arrow-icon"><i class="fa-solid fa-chevron-right"></i></span>
              <div>
                <div class="font-bold text-slate-800 group-hover:text-orange-600">Responsible Governance</div>
                <div class="text-xs text-slate-500 font-normal">Ethics, accountability & climate policy</div>
              </div>
            </a>

            <a href="#rise" class="mega-sub-link group">
              <span class="arrow-icon"><i class="fa-solid fa-chevron-right"></i></span>
              <div>
                <div class="font-bold text-slate-800 group-hover:text-orange-600">R.I.S.E. Framework</div>
                <div class="text-xs text-slate-500 font-normal">Resource Innovation & Sustainable Efficiency</div>
              </div>
            </a>

            <a href="#environmental" class="mega-sub-link group">
              <span class="arrow-icon"><i class="fa-solid fa-chevron-right"></i></span>
              <div>
                <div class="font-bold text-slate-800 group-hover:text-orange-600">Environmental Compliance</div>
                <div class="text-xs text-slate-500 font-normal">Zero liquid discharge & emission control</div>
              </div>
            </a>

            <a href="#esg" class="mega-sub-link group">
              <span class="arrow-icon"><i class="fa-solid fa-chevron-right"></i></span>
              <div>
                <div class="font-bold text-slate-800 group-hover:text-orange-600">ESG Profile & Disclosures</div>
                <div class="text-xs text-slate-500 font-normal">BRSR reports and global ESG ratings</div>
              </div>
            </a>

            <a href="#circular" class="mega-sub-link group">
              <span class="arrow-icon"><i class="fa-solid fa-chevron-right"></i></span>
              <div>
                <div class="font-bold text-slate-800 group-hover:text-orange-600">Circular Steel Economy</div>
                <div class="text-xs text-slate-500 font-normal">100% scrap recycling & slag utilization</div>
              </div>
            </a>

          </div>

        </div>
      </div>
    </div>

    <!-- 2. PRODUCTS & TMX MEGA MENU -->
    <div id="megaProducts" class="mega-menu-overlay py-10">
      <div class="custom-container">
        <div class="grid grid-cols-12 gap-8 items-start">
          
          <div class="col-span-12 lg:col-span-4 mega-menu-left p-6 lg:p-8 rounded-xl">
            <h3 class="mega-menu-heading">PRODUCTS & TMX</h3>
            <p class="text-slate-600 leading-relaxed text-sm mb-4 mt-3">
              Engineered using state-of-the-art German Thermex quenching technology for unmatched tensile strength, ductility, and seismic resistance.
            </p>
            <div class="p-4 bg-orange-50 border border-orange-200 rounded-lg">
              <div class="text-xs font-bold text-orange-800 uppercase tracking-wide">Featured Certification</div>
              <div class="text-sm font-extrabold text-slate-900 mt-1">IS 1786:2008 Grade Fe-550D Super</div>
              <div class="text-xs text-slate-600 mt-1">Earthquake-resistant steel certified for high-rise bridges & dams.</div>
            </div>
          </div>

          <div class="col-span-12 lg:col-span-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
              <h4 class="font-bold text-slate-900 text-sm uppercase tracking-wider mb-3 border-b pb-2">TMX Steel Rebars</h4>
              <ul class="space-y-2">
                <li><a href="#fe550d" class="mega-sub-link"><i class="fa-solid fa-angle-right arrow-icon"></i> Fe-550D TMX Rebar</a></li>
                <li><a href="#fe500d" class="mega-sub-link"><i class="fa-solid fa-angle-right arrow-icon"></i> Fe-500D CRS Rebar</a></li>
                <li><a href="#fe600" class="mega-sub-link"><i class="fa-solid fa-angle-right arrow-icon"></i> Fe-600 High Strain Rebar</a></li>
                <li><a href="#corrosion" class="mega-sub-link"><i class="fa-solid fa-angle-right arrow-icon"></i> Corrosion Resistant (CRS)</a></li>
              </ul>
            </div>

            <div>
              <h4 class="font-bold text-slate-900 text-sm uppercase tracking-wider mb-3 border-b pb-2">Structural Steel</h4>
              <ul class="space-y-2">
                <li><a href="#beams" class="mega-sub-link"><i class="fa-solid fa-angle-right arrow-icon"></i> Heavy I-Beams & Joists</a></li>
                <li><a href="#channels" class="mega-sub-link"><i class="fa-solid fa-angle-right arrow-icon"></i> MS Channels & Angles</a></li>
                <li><a href="#pipes" class="mega-sub-link"><i class="fa-solid fa-angle-right arrow-icon"></i> ERW & Hollow Sections</a></li>
                <li><a href="#billets" class="mega-sub-link"><i class="fa-solid fa-angle-right arrow-icon"></i> Continuous Cast Billets</a></li>
              </ul>
            </div>

            <div>
              <h4 class="font-bold text-slate-900 text-sm uppercase tracking-wider mb-3 border-b pb-2">Solutions & Services</h4>
              <ul class="space-y-2">
                <li><a href="#cutbend" class="mega-sub-link"><i class="fa-solid fa-angle-right arrow-icon"></i> Cut & Bend Automation</a></li>
                <li><a href="#readywelded" class="mega-sub-link"><i class="fa-solid fa-angle-right arrow-icon"></i> Ready-Made Stirrups</a></li>
                <li><a href="#testing" class="mega-sub-link"><i class="fa-solid fa-angle-right arrow-icon"></i> On-Site Metallurgical Lab</a></li>
                <li><a href="#techspecs" class="mega-sub-link"><i class="fa-solid fa-angle-right arrow-icon"></i> Technical Datasheets</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- 3. ABOUT US MEGA MENU -->
    <div id="megaAbout" class="mega-menu-overlay py-10">
      <div class="custom-container">
        <div class="grid grid-cols-12 gap-8 items-start">
          <div class="col-span-12 lg:col-span-4 mega-menu-left p-6 lg:p-8 rounded-xl">
            <h3 class="mega-menu-heading">ABOUT MARUTI TMX</h3>
            <p class="text-slate-600 leading-relaxed text-sm mb-4 mt-3">
              Founded on principles of integrity, metallurgical excellence, and continuous technological evolution, Maruti TMX powers India's iconic landmarks.
            </p>
          </div>
          <div class="col-span-12 lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="#story" class="mega-sub-link"><i class="fa-solid fa-chevron-right arrow-icon"></i> Corporate Journey & Legacy</a>
            <a href="#leadership" class="mega-sub-link"><i class="fa-solid fa-chevron-right arrow-icon"></i> Board of Directors & Leadership</a>
            <a href="#plants" class="mega-sub-link"><i class="fa-solid fa-chevron-right arrow-icon"></i> Manufacturing Facilities & Rolling Mills</a>
            <a href="#awards" class="mega-sub-link"><i class="fa-solid fa-chevron-right arrow-icon"></i> Accreditations & Awards</a>
            <a href="#quality" class="mega-sub-link"><i class="fa-solid fa-chevron-right arrow-icon"></i> Quality Policy & German Technology</a>
            <a href="#csr" class="mega-sub-link"><i class="fa-solid fa-chevron-right arrow-icon"></i> CSR & Community Impact</a>
          </div>
        </div>
      </div>
    </div>

    <!-- 4. INDUSTRIES MEGA MENU -->
    <div id="megaIndustries" class="mega-menu-overlay py-10">
      <div class="custom-container">
        <div class="grid grid-cols-12 gap-8 items-start">
          <div class="col-span-12 lg:col-span-4 mega-menu-left p-6 lg:p-8 rounded-xl">
            <h3 class="mega-menu-heading">INDUSTRIES WE SERVE</h3>
            <p class="text-slate-600 leading-relaxed text-sm mb-4 mt-3">
              Providing customized high-yield TMX steel bars engineered for heavy infrastructure, coastal bridges, nuclear plants, and high-rise developments.
            </p>
          </div>
          <div class="col-span-12 lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="#highways" class="mega-sub-link"><i class="fa-solid fa-chevron-right arrow-icon"></i> Highways, Expressways & Flyovers</a>
            <a href="#metro" class="mega-sub-link"><i class="fa-solid fa-chevron-right arrow-icon"></i> Metro Rail & Tunnels</a>
            <a href="#dams" class="mega-sub-link"><i class="fa-solid fa-chevron-right arrow-icon"></i> Hydroelectric Dams & Water Reservoirs</a>
            <a href="#highrise" class="mega-sub-link"><i class="fa-solid fa-chevron-right arrow-icon"></i> High-Rise Residential & Commercial Towers</a>
            <a href="#industrial" class="mega-sub-link"><i class="fa-solid fa-chevron-right arrow-icon"></i> Industrial Parks & Logistics Hubs</a>
            <a href="#coastal" class="mega-sub-link"><i class="fa-solid fa-chevron-right arrow-icon"></i> Coastal & Marine Infrastructure</a>
          </div>
        </div>
      </div>
    </div>

    <!-- 5. INVESTORS MEGA MENU -->
    <div id="megaInvestors" class="mega-menu-overlay py-10">
      <div class="custom-container">
        <div class="grid grid-cols-12 gap-8 items-start">
          <div class="col-span-12 lg:col-span-4 mega-menu-left p-6 lg:p-8 rounded-xl">
            <h3 class="mega-menu-heading">INVESTOR RELATIONS</h3>
            <p class="text-slate-600 leading-relaxed text-sm mb-4 mt-3">
              Delivering sustainable long-term value, financial governance, and transparent disclosures to stakeholders.
            </p>
          </div>
          <div class="col-span-12 lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="#financials" class="mega-sub-link"><i class="fa-solid fa-chevron-right arrow-icon"></i> Quarterly Financial Results</a>
            <a href="#annual" class="mega-sub-link"><i class="fa-solid fa-chevron-right arrow-icon"></i> Annual Reports & Presentations</a>
            <a href="#stock" class="mega-sub-link"><i class="fa-solid fa-chevron-right arrow-icon"></i> Shareholding Pattern & Stock Ticker</a>
            <a href="#governance" class="mega-sub-link"><i class="fa-solid fa-chevron-right arrow-icon"></i> Corporate Governance Policies</a>
          </div>
        </div>
      </div>
    </div>

  </div>

</header>

<!-- SEARCH OVERLAY MODAL -->
<div id="searchOverlay" class="fixed inset-0 bg-slate-950/95 backdrop-blur-xl z-[2000] hidden items-center justify-center p-6">
  <button id="closeSearchBtn" class="absolute top-8 right-8 text-slate-400 hover:text-white text-3xl">
    <i class="fa-solid fa-xmark"></i>
  </button>
  <div class="w-full max-w-2xl">
    <h3 class="text-xs uppercase tracking-widest text-orange-500 font-bold mb-4">Search Maruti TMX Portal</h3>
    <div class="relative">
      <input type="text" id="searchInput" placeholder="Search products (e.g. Fe-550D, TMX rebar, dealers, ESG)..." class="w-full bg-slate-900 border-2 border-slate-700 focus:border-orange-500 rounded-xl py-4 pl-6 pr-14 text-white text-lg outline-none transition-colors">
      <button class="absolute right-4 top-1/2 -translate-y-1/2 text-orange-500 text-xl">
        <i class="fa-solid fa-arrow-right"></i>
      </button>
    </div>
  </div>
</div>

<!-- MOBILE DRAWER NAV -->
<div id="mobileMenuDrawer" class="fixed top-0 right-0 w-80 h-full bg-slate-950 z-[3000] p-6 shadow-2xl transform translate-x-full transition-transform duration-300 overflow-y-auto lg:hidden">
  <div class="flex items-center justify-between border-b border-slate-800 pb-4 mb-6">
    <span class="font-heading font-extrabold text-xl text-white">MARUTI <span class="text-orange-500">TMX</span></span>
    <button id="closeMobileMenuBtn" class="text-slate-400 hover:text-white text-2xl">
      <i class="fa-solid fa-xmark"></i>
    </button>
  </div>
  
  <div class="space-y-4 font-heading">
    <div>
      <a href="#about" class="block font-bold text-slate-200 py-2 border-b border-slate-900">About Us</a>
    </div>
    <div>
      <a href="#products" class="block font-bold text-slate-200 py-2 border-b border-slate-900">Products & TMX</a>
    </div>
    <div>
      <a href="#sustainability" class="block font-bold text-orange-400 py-2 border-b border-slate-900">Sustainability</a>
    </div>
    <div>
      <a href="#industries" class="block font-bold text-slate-200 py-2 border-b border-slate-900">Industries</a>
    </div>
    <div>
      <a href="#investors" class="block font-bold text-slate-200 py-2 border-b border-slate-900">Investors</a>
    </div>
    <div>
      <a href="#careers" class="block font-bold text-slate-200 py-2 border-b border-slate-900">Careers</a>
    </div>
  </div>

  <div class="mt-8 pt-6 border-t border-slate-800">
    <a href="#contact" class="w-full block text-center py-3 bg-orange-600 text-white font-bold rounded-lg uppercase tracking-wider text-xs">
      Contact & Dealer Inquiry
    </a>
  </div>
</div>
