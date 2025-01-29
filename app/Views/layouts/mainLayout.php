<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'My Website' ?></title>
<!-- custom css -->

<link href="assets/css/style.css" rel="stylesheet" />
<script src="https://cdn.tailwindcss.com"></script>

<!-- Swiper CSS (CDN) -->
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

</head>
<body>
   <!-- Bottom Buton -->
<button class="scroll-top fixed right-4 bottom-8 z-[9999] flex items-center justify-center rounded-full p-2 opacity-0 transition-opacity duration-300">
  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
    <rect width="24" height="24" fill="white" rx="50" ry="50" />
    <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m12 4l-6 6m6-6l6 6m-6-6v10.5m0 5.5v-2.5"/>
  </svg>
</button>


<!-- Wp Buton -->

<a href="https://wa.me/905057508016" target="_blank" class="bg-[#25D366] fixed left-2 bottom-8 z-[99999] flex items-center justify-center rounded-2xl py-2 text-white text-xs md:text-sm px-2 md:px-3">
  <img src="/assets/icons/social/whatsapp.svg" class="h-5 md:h-6 object-contain"/>
<span>Whatsapp</span>
</a>
<!-- Call Buton -->
<a href="tel:4448016" target="_blank" class="bg-[#DC001E] fixed left-28 md:left-32 bottom-8 z-[99999] flex items-center justify-center rounded-2xl py-2 text-white text-xs md:text-sm px-2 md:px-3">
<img src="/assets/icons/social/phone.svg" class="h-5 md:h-6 object-contain"/>

<span>Hemen Ara</span>
</a>


<header class="">

<!-- Form  -->
<div class="lg:hidden fixed top-1/2 -right-[285px] transform -translate-y-1/2 z-[9999] transition-all duration-500 ease-in-out" id="formContainer">

  <div class="form-container h-[100vh] p-4 bg-[#FE7800] rounded-lg shadow-lg overflow-hidden transition-all duration-300 ease-in-out">
  <img class="w-64 rounded-2xl border-white " src="assets/images/modal-image.jpg"/>
  <form class="mt-4 space-y-4" action="#" method="POST">

  <!-- Ad -->
  <div>
    <label for="name" class="block text-sm text-white font-bold">Adınız</label>
    <div class="relative group">
      <span class="absolute inset-y-0 left-0 flex items-center pl-2">
        <img src="/assets/icons/name.svg" class="h-6 bg-[#E8E6E7] p-1 rounded-full" />
      </span>
      <input
        type="text"
        id="name"
        name="name"
        class="mt-1 block w-full pl-10 px-3 py-1.5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-[#013042]"
        placeholder="Adınız"
        required
      />
    </div>
  </div>

  <!-- Soyad -->
  <div>
    <label for="lastname" class="block text-sm text-white font-bold">Soyadınız</label>
    <div class="relative group">
      <span class="absolute inset-y-0 left-0 flex items-center pl-2">
        <img src="/assets/icons/name.svg" class="h-6 bg-[#E8E6E7] p-1 rounded-full" />
      </span>
      <input
        type="text"
        id="lastname"
        name="lastname"
        class="mt-1 block w-full pl-10 px-3 py-1.5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-[#013042]"
        placeholder="Soyadınız"
        required
      />
    </div>
  </div>

  <!-- Telefon Numarası -->
  <div>
    <label for="phone" class="block text-sm text-white font-bold">Telefon Numaranız</label>
    <div class="relative group">
      <span class="absolute inset-y-0 left-0 flex items-center pl-2">
        <img src="/assets/icons/phone-alt.svg" class="h-6 bg-[#E8E6E7] p-1 rounded-full" />
      </span>
      <input
        type="tel"
        id="phone"
        name="phone"
        class="mt-1 block w-full pl-10 px-3 py-1.5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-[#013042]"
        placeholder="Telefon numaranız"
        required
      />
    </div>
  </div>

  <!-- Mesaj -->
  <div>
    <label for="message" class="block text-sm text-white font-bold">Mesajınız</label>
    <textarea
      id="message"
      name="message"
      rows="4"
      class="mt-1 block w-full px-3 py-1.5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-[#013042]"
      placeholder="Mesajınızı yazınız"
      required
    ></textarea>
  </div>


    <button type="submit" class=" w-full py-2 bg-[#013042] text-white font-bold rounded-md hover:bg-[#0e3f51] transition duration-300">Gönder</button>
  </form>
  </div>
  <button
  id="toggleButton"
  class="absolute top-44 -left-[79px] inline-flex items-center justify-center transform h-8 -rotate-90 w-32 bg-[#FE7800] rounded-tr-xl rounded-tl-xl "
>
  <div id="iconContainer" class="flex items-center gap-1 text-white">
    <img id="openIcon" src="/assets/icons/message.svg" class="h-5" />
    <svg
      id="closeIcon"
      xmlns="http://www.w3.org/2000/svg"
      width="16"
      height="16"
      viewBox="0 0 24 24"
      class="text-white fill-white hidden"
    >
      <path
        fill="none"
        stroke="#fff"
        stroke-dasharray="12"
        stroke-dashoffset="12"
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M12 12l7 7M12 12l-7 -7M12 12l-7 7M12 12l7 -7"
      >
        <animate
          fill="freeze"
          attributeName="stroke-dashoffset"
          dur="0.3s"
          values="12;0"
        />
      </path>
    </svg>
    <span id="buttonText" class="text-xs text-white">Ön Bilgi Formu</span>
  </div>
</button>

</div>
<!-- Form  -->



  <div class="container mx-auto flex justify-between items-center bg-[#F4F4F4] text-[#666666] mt-2 md:rounded-xl px-4 py-1">
    <!-- Logo -->
    <a href="#home" class="logo flex items-center gap-2">
      <div class="bg-white rounded-full px-1 py-2">
        <img src="/assets/icons/logo-amblem.svg" alt="Logo" class="h-12 object-contain">
      </div>
      <img src="/assets/icons/logo-yazi.svg" alt="Logo" class="h-5 object-contain">
    </a>

 <!-- Hamburger Icon -->
<button id="mobile-menu-button" class="">
  <span class="line line-1 "></span>
  <span class="line line-2"></span>
  <span class="line line-3"></span>
</button>



    <!-- Desktop Navigation Links -->
    <nav class="hidden lg:block">
      <ul class="flex space-x-6">
      <li><a href="#home" class="hover:text-[#760E0E]">Anasayfa</a></li>
        <li><a href="#about" class="hover:text-[#760E0E]">Hakkımızda</a></li>
        <li><a href="#" class="hover:text-[#760E0E] flex items-center gap-1"><span>Eğitimlerimiz</span><img src="/assets/icons/header-ok.svg" class="h-2 object-contain" /></a></li>
        <li><a href="#blog" class="hover:text-[#760E0E]">Blog</a></li>
      </ul>
    </nav>

    <!-- Contact Information -->
    <div class="hidden lg:flex space-x-4">
      <a href="tel:4448016" target="_blank">
        <img src="/assets/icons/numara-header_1.svg" alt="" class="h-6 object-contain">
      </a>
      <div class="h-6 bg-gray-300 w-[0.1px]"></div>
      <img src="/assets/icons/header-40yil.svg" alt="" class="h-6 object-contain">
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class=" hidden absolute top-20 left-0 w-full bg-gray-50 text-[#666666] shadow-lg z-[99999]">
    <div class="p-4">
      <ul class="space-y-4">
      <li><a href="#home" class="block hover:text-[#760E0E]">Anasayfa</a></li>
        <li><a href="#about" class="block hover:text-[#760E0E]">Hakkımızda</a></li>
        <li><a href="#" class="block hover:text-[#760E0E] flex items-center gap-1"><span>Eğitimlerimiz</span><img src="/assets/icons/header-ok.svg" class="h-2 object-contain" /></a></li>
        <li><a href="#blog" class="block hover:text-[#760E0E]">Blog</a></li>
        <li><a href="#" class="block hover:text-[#760E0E]">Kurumsal</a></li>
      </ul>
     
    </div> <div class="flex justify-between p-4 bg-[#F4F4F4]">
    <a href="tel:4448016" target="_blank">
  <img src="/assets/icons/numara-header_1.svg" alt="" class="h-5 object-contain">
</a>

        <img src="/assets/icons/header-40yil.svg" alt="" class="h-5 object-contain">

  
    
      </div>
  </div>
</header>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="relative bg-[url('/assets/images/footer-bg.jpg')] bg-cover bg-center py-2">
  <!-- Arka Plan Katmanı -->
  <div class="absolute inset-0 w-full h-full bg-[#010F1F]/90 z-0"></div>

  <!-- İçerik -->
  <div class="relative container mx-auto z-50">
    <!-- Üst Kısım -->
    <div class="border-b border-gray-300 py-4 ">
      <div class="flex flex-col md:flex-row flex-wrap items-center justify-center gap-4 md:gap-12">
        <!-- Sol: Logo ve Tanım -->
        <div class="w-full md:w-1/3 mb-4 md:mb-0 flex flex-col justify-center items-center">
          <img src="/assets/icons/logo-amblem.svg" alt="Logo" class="h-16  object-contain">
          <img src="/assets/icons/logo-yazi-beyaz.svg" alt="Logo" class="mt-2 h-5  object-contain">
          <p class="text-[#FEFEFE] mt-3 text-center text-xs md:text-sm px-2 md:px-0 ">
            Eşitlik, hoşgörü, adalet ve toplum değerlerimiz, eğitim misyonumuza derinden etki eden faktörler olmuştur.
          </p>
        </div>
                <!-- SAĞ  -->

        <!--Hızlı Menü -->

         <div class="flex justify-center gap-24 md:gap-0 w-full  md:justify-between md:w-1/3">
        <div class="md:w-1/2 ">
          <h3 class="text-md font-bold mb-2 text-[#FEFEFE]   inline-block border-b-2 border-white pb-1">Hızlı Menü</h3>
          <ul class="space-y-2 text-[#F8F8F8] text-xs md:text-sm">
            <li><a href="#home" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Anasayfa</a></li>
            <li><a href="#about" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Hakkımızda</a></li>
            <li><a href="#" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">İletişim</a></li>
            <li><a href="#blog" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Blog</a></li>
            <li><a href="#" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Eğitimlerimiz</a></li>
          </ul>
        </div>

        <!-- Eğitimlerimiz -->
        <div class="md:w-1/2">
          <h3 class="font-bold mb-2 text-[#FEFEFE] inline-block border-b-2 border-white pb-1 text-md">Eğitimlerimiz</h3>
          <ul class="space-y-2 text-[#F8F8F8] text-xs md:text-sm">
            <li><a href="#" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Anasayfa</a></li>
            <li><a href="#" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Hakkımızda</a></li>
            <li><a href="#" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">İletişim</a></li>
            <li><a href="#" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Blog</a></li>
            <li><a href="#" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Eğitimlerimiz</a></li>
          </ul>
        </div>
        </div>


      </div>
    </div>

    <!-- Alt Kısım -->
    <div class="py-2 md:py-4">
      <div class="flex flex-col md:flex-row  flex-nowrap justify-between gap-4 md:gap-8 ">
        <!-- Sol: Haber Bülteni -->
        <div class="w-full md:w-1/3 px-4">
  <h3 class="font-bold mb-4 text-[#FEFEFE] text-md md:text-lg">Haberdar Ol!</h3>
  <p class="text-xs md:text-sm mb-4 text-[#FEFEFE]">En son haberleri ve güncellemeleri almak için kaydolun.</p>
  <form class="relative w-full">
    <!-- E-posta Girişi -->
    <div class="relative">
      <input
        type="email"
        placeholder="E-POSTA"
        class="bg-white bg-opacity-30 px-4 py-2 rounded-lg w-full pr-20 placeholder-text-gray-200 focus:outline-none text-white "
      />
      <button
        type="submit"
        class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-[#FF3D00] text-white px-4 py-1 rounded-md hover:bg-[#FF3D00] border border-white font-bold text-sm"
      >
        GÖNDER
      </button>
    </div>
    <!-- Checkbox Alanları -->
    <div class="mt-4 space-y-2">
    <label class="flex items-center text-xs md:text-sm text-[#FEFEFE]">
  <input type="checkbox" class="custom-checkbox mr-2">
  Özel bildirim ve kampanyalar almak istiyorum.
</label>
<label class="flex items-center text-xs md:text-sm text-[#FEFEFE]">
  <input type="checkbox" class="custom-checkbox mr-2">
  Gizlilik politikalarını kabul ediyorum.
</label>

    </div>
  </form>
</div>

        <!-- Orta: Sosyal Medya -->
        <div class="w-full md:w-1/3 flex px-4 md:px-0 md:ms-8">
          <div>
          <h3 class="font-bold mb-4 text-[#FEFEFE] text-md md:text-lg">Bizi Takip Edin!</h3>
          <p class="text-[#FEFEFE] text-xs md:text-sm">Güncel sosyal medya ve dijital platformlarımızdan kampanya, etkinlik ve satışlarımız içni takipte kal.

</p>
          <ul class="flex gap-1 mt-4 mb-4 ">
            <li><a href="https://www.facebook.com/akademikkoleji" target="_blank"><img src="/assets/icons/social/facebook.svg" alt="Facebook" class="w-8 h-8" /></a></li>
            <li><a href="https://x.com/akademikkoleji" target="_blank"><img src="/assets/icons/social/twitter.svg" alt="x" class="w-8 h-8" /></a></li>
            <li><a href="https://www.instagram.com/akademikkoleji/" target="_blank"><img src="/assets/icons/social/instagram.svg" alt="Instagram" class="w-8 h-8" /></a></li>
            <li><a href="https://www.youtube.com/@akademikkoleji" target="_blank"><img src="/assets/icons/social/youtube.svg" alt="YouTube" class="w-8 h-8" /></a></li>
          </ul>
          <p class="font-bold text-[#FEFEFE]">/akademikkoleji</p>
          </div>
        </div>

        <!-- Sağ: İletişim -->
        <div class="w-full md:w-1/3 text-[#FEFEFE] px-4 md:px-0  space-y-2">
        <a href="tel:4448016" class="">
     
     <div class="flex gap-4 items-center"> 
       <img
        src="/assets/icons/destek-hatti.svg"
        alt="Instagram"
        class="w-12 "
      />
      <p class="text-2xl font-bold">444 8 016</p>
      </div> 
      
    </a>

      <p class="text-xs md:text-sm">Çağrı merkezimiz üzerinden müşteri temsilcilerimiz ile sorunlarınıza 7/24 destek ile yanınızdayız.</p>

        </div>
      </div>
    </div>

    


    <div class="flex flex-col gap-2 md:gap-0 md:flex-row   md:justify-between text-white text-xs md:text-sm px-4 mt-8">
  <div class="text-center md:text-start">
    <p class="">developed by the <span class="font-bold">thefabrika </span>creative agency</p>
  </div> 

  <div class="text-center md:text-start">
    <p>Tüm Hakları saklıdır.</p>
  </div> 


  
  <div class=" flex justify-center gap-4">
    <a href="#" target="_blank"> Gizlilik Sözleşmesi</a>
    <a href="#" target="_blank">Aydınlatma Metni</a>
    <a href="#" target="_blank">Açık Rıza Metni</a>

  </div> 
 </div>
  </div>
    </footer>

  <!-- Swiper JS (CDN) -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.0/gsap.min.js"></script>

    <!-- Custom Js -->

    <script type="module" src="/assets/js/main-slider.js"></script>
<script type="module" src="/assets/js/announcement-slider.js"></script>
<script type="module" src="/assets/js/blog-slider.js"></script>
<script type="module" src="/assets/js/testimonals-slider.js"></script>
<script type="module" src="/assets/js/header.js"></script>
<script type="module" src="/assets/js/form.js"></script>
<script type="module" src="/assets/js/about.js"></script>
<script type="module" src="/assets/js/top-button.js"></script>


</body>
</html>
