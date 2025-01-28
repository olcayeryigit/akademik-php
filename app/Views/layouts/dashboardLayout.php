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
    



    <!-- Header -->

  <!-- Dashboard Header -->
  <header class="bg-blue-600 text-white">
    <div class="max-w-7xl mx-auto p-5 flex items-center justify-around space-x-4">
      <!-- Dashboard Link -->
      <a href="/dashboard" class="p-2 bg-blue-700 text-white rounded-md hover:bg-blue-800">Dashboard</a>

      <div class="flex gap-4 items-center">
      <!-- İçerik Yönetimi Dropdown -->
      <div class="relative">
        <button class="p-2 bg-blue-700 text-white rounded-md w-full text-left" id="dropdownButton">
          İçerik Yönetimi
        </button>

        <div id="dropdownMenu" class=" absolute hidden bg-blue-700 text-white w-full mt-2 rounded-md shadow-lg">
        <button class="link p-2 bg-blue-700 text-white rounded-md w-full text-left" id="blogLink">
                            Bloglar
                        </button>   
                        <button class="link p-2 bg-blue-700 text-white rounded-md w-full text-left" id="duyuruLink">
                           Duyurular
                        </button>  
        </div>
      </div>

      <!-- Web Formlar Linki -->
      <a href="/web-forms" class="p-2 bg-blue-700 text-white rounded-md hover:bg-blue-800">
        Web Formlar
      </a>
      </div>
      <!-- Çıkış Yap Linki -->
      <a href="/login" class="p-2 bg-blue-700 text-white rounded-md hover:bg-blue-800">Çıkış Yap</a>
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
