<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <?php
  // Get the current page URL
  $current_page = basename($_SERVER['PHP_SELF'], '.php');
  $canonical_url = 'https://www.teenpatti-download.io/';
  
  // Handle search pages
  if (isset($_GET['s'])) {
    $canonical_url = 'https://www.teenpatti-download.io/';
  }
  // Handle homepage and index variations
  else if ($current_page == 'index' || $current_page == '') {
    $canonical_url = 'https://www.teenpatti-download.io/';
  } else {
    // Remove .php extension and ensure clean URL
    $canonical_url .= str_replace('.php', '', $current_page);
  }
  ?>
  
  <!-- Canonical URL -->
  <link rel="canonical" href="<?php echo $canonical_url; ?>" />

  <title>Teen Patti Master APK Download 2025 | Play Teen Patti Online & Win Real Cash</title>
  <meta name="description" content="Download Teen Patti Master APK 2025 - The best Teen Patti app for Android. Play Teen Patti online, join tournaments, and earn real cash. Secure APK download with referral bonuses." />
  <meta name="keywords" content="Teen Patti Master APK download, Teen Patti Master 2025 APK, Play Teen Patti Online, Best Teen Patti app for Android, Teen Patti APK, Teen Patti referral bonus" />

  <!-- Open Graph / Social Media -->
  <meta property="og:title" content="Teen Patti Master APK Download 2025 | Play Teen Patti Online & Win Real Cash" />
  <meta property="og:description" content="Download Teen Patti Master APK 2025, the best Teen Patti app for Android. Play online, participate in tournaments, and get referral bonuses." />
  <meta property="og:image" content="assets/images/logo-icon.webp" />
  <meta property="og:url" content="https://teenpatti-download.io/download" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Teen Patti Master APK Download 2025 | Play Teen Patti Online & Win Real Cash" />
  <meta name="twitter:description" content="Download Teen Patti Master APK 2025, the top Teen Patti app for Android. Play online, win real cash, and enjoy exclusive bonuses." />
  <meta name="twitter:image" content="assets/images/logo-icon.webp" />

  <!-- Favicon & Icons -->
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="favicon.ico" />

  <!-- Preload assets -->
  <link rel="preload" as="image" href="assets/images/logo-icon.webp" type="image/webp" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/custom.css" />

  <!-- Structured Data for SEO -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "Teen Patti Master APK Download",
    "applicationCategory": "GameApplication",
    "operatingSystem": "Android",
    "offers": {
      "@type": "Offer",
      "price": "0",
      "priceCurrency": "INR"
    },
    "description": "Download Teen Patti Master APK 2025, the best Teen Patti app for Android. Play Teen Patti online, join tournaments, and earn real cash with secure APK download and referral bonuses.",
    "downloadUrl": "https://www.earntp.com/m/l4j4v3",
    "author": {
      "@type": "Organization",
      "name": "Teen Patti Master",
      "url": "https://teenpatti-download.io"
    }
  }
  </script>
</head>
<body class="bg-gray-50 text-gray-900 font-sans">

<!-- Header -->
<header class="sticky top-0 z-50 bg-gradient-to-r from-purple-900 to-indigo-800 shadow-lg">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <nav class="flex items-center justify-between h-16 md:h-20">
      
      <!-- Logo -->
      <div class="flex-shrink-0">
        <a href="index" class="flex items-center space-x-3">
          <div class="relative">
            <img src="assets/images/logo-icon.webp" alt="Download Teen Patti Master APK for Android" class="w-10 h-10 md:w-12 md:h-12 object-contain" />
            <div class="absolute -top-1 -right-1 w-4 h-4 bg-yellow-400 rounded-full animate-pulse hidden md:block"></div>
          </div>
          <div>
            <h1 class="text-white text-lg md:text-xl font-bold leading-tight headingtitle">Teen Patti Master</h1>
            <p class="text-xs text-gray-200 hidden sm:block">Download APK - Play Teen Patti Online & Win Real Cash</p>
          </div>
        </a>
      </div>

      <!-- Desktop Navigation -->
      <div class="hidden md:flex items-center space-x-6">
        <a href="index" class="text-gray-200 hover:text-white text-md font-medium">Home</a>
        <a href="teen-patti-master-faq" class="text-gray-200 hover:text-white text-md font-medium">FAQ</a>
        <a href="blog" class="text-gray-200 hover:text-white text-md font-medium">Blog</a>
        <a href="about" class="text-gray-200 hover:text-white text-md font-medium">About</a>
        <a href="download-teen-patti-master-apk" class="text-gray-200 hover:text-white text-md font-medium">Download APK</a>
      </div>

      <!-- Buttons -->
      <div class="flex items-center space-x-3">
        <a href="https://www.earntp.com/m/l4j4v3" class="mobileDownloadBtn inline-block bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white text-xs md:text-sm font-bold rounded-full px-4 py-2 md:px-5 md:py-2.5 transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
          <span class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
            </svg>
            Download APK
          </span>
        </a>

        <!-- Mobile menu button -->
        <button id="mobile-menu-button" aria-label="mobile-menu-button" type="button" class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-200 hover:text-white focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden mt-2 space-y-2 pb-4">
      <a href="index" class="text-gray-200 hover:text-white text-md font-medium">Home</a>
      <a href="teen-patti-master-faq" class="block text-gray-200 hover:text-white text-base font-medium">FAQ</a>
      <a href="blog" class="block text-gray-200 hover:text-white text-base font-medium">Blog</a>
      <a href="about" class="block text-gray-200 hover:text-white text-base font-medium">About</a>
      <a href="download-teen-patti-master-apk" class="block text-gray-200 hover:text-white text-base font-medium">Download APK</a>
    </div>
  </div>
</header>
