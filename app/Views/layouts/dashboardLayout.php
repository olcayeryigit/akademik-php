<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'My Website' ?></title>
<!-- custom css -->

<script src="https://cdn.tailwindcss.com"></script>

<!-- Swiper CSS (CDN) -->
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

</head>
<body>
    


<!-- Dashboard Header -->
<!-- Dashboard Header -->
<header class="bg-slate-700 text-white shadow-lg ">
  <div class="max-w-7xl mx-auto p-6 flex items-center justify-between gap-6">
    
    <!-- Dashboard Link -->
    <a id="dashboardLink" href="/dashboard" class="px-4 py-2 bg-slate-600 text-white  rounded-lg shadow-md hover:bg-slate-500 transition-all duration-300 text-md">
      Dashboard
    </a>

    <div class="flex gap-6 items-center">
      <!-- İçerik Yönetimi Dropdown -->
      <div class="relative group">
        <button id="dropdownButton" class="px-5 py-2 bg-slate-600 text-white text-md rounded-lg shadow-md flex items-center justify-between min-w-[180px] hover:bg-slate-500 transition-all duration-300 ">
          İçerik Yönetimi
          <svg class="w-5 h-5 ml-2 transition-transform group-hover:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        
        <div id="dropdownMenu" class="absolute hidden group-hover:block bg-slate-800 text-white rounded-lg shadow-lg transition-all duration-300 transform scale-95 group-hover:scale-100 opacity-0 group-hover:opacity-100 min-w-[180px]  z-10">
          <button id="blogLink" class="block px-6 py-3 hover:bg-slate-600 w-full text-left rounded-t-lg">Bloglar</button>   
          <button id="announcementLink" class="block px-6 py-3 hover:bg-slate-600 w-full text-left">Duyurular</button>  
          <button id="aboutLink" class="block px-6 py-3 hover:bg-slate-600 w-full text-left">Kurumsal</button>  
          <button id="mainContentLink" class="block px-6 py-3 hover:bg-slate-600 w-full text-left">Ana İçerik</button>  
          <button id="imageSectionLink" class="block px-6 py-3 hover:bg-slate-600 w-full text-left">Resim Bölümü</button>  
          <button id="testimonalsLink" class="block px-6 py-3 hover:bg-slate-600 w-full text-left rounded-b-lg">Referanslar</button>  
        </div>
      </div>

      <!-- Web Formlar Linki -->
      <button id="webformLink" class="px-4 py-2 bg-slate-600 text-white  rounded-lg shadow-md hover:bg-slate-500 transition-all duration-300 text-md">
        Webform
      </button>  
    </div>
<div class="flex gap-4">
    
     <a id="logoutLink" href="/" class="px-4 py-2  text-white  rounded-lg shadow-md  transition-all duration-300 text-md rounded-lg shadow-md bg-green-500 hover:bg-green-600 transition-all duration-300">
     Siteye Git


    </a>
    
    <!-- Çıkış Yap Linki -->
    <a id="logoutLink" href="/logout" class="px-4 py-2  text-white  rounded-lg shadow-md  transition-all duration-300 text-md rounded-lg shadow-md bg-red-500 hover:bg-red-600 transition-all duration-300">
      Çıkış Yap
    </a>


 
</div>

  </div>
</header>


  <?= $this->renderSection('content') ?>



  <!-- Swiper JS (CDN) -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.0/gsap.min.js"></script>

    <!-- Custom Js -->

    <script type="module" src="/assets/js/dashboard-header.js"></script>

   

</body>
</html>
