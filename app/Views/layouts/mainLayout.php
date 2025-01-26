<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'My Website' ?></title>
<!-- custom css -->

<link href="<?=site_url('assets/css/index.css')?>" rel="stylesheet" />
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    
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
        <li><a href="#instituonal" class="hover:text-[#760E0E]">Kurumsal</a></li>
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
  <img src="/assets/icons/numara-header_1.svg" alt="" class="h-6 object-contain">
</a>

        <img src="/assets/icons/header-40yil.svg" alt="" class="h-6 object-contain">

  
    
      </div>
  </div>
</header>
    </header>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="relative bg-[url('/assets/images/footer-bg.jpg')] bg-cover bg-center py-8">
  <!-- Arka Plan Katmanı -->
  <div class="absolute inset-0 w-full h-full bg-[#010F1F]/90 z-0"></div>

  <!-- İçerik -->
  <div class="relative container mx-auto z-50">
    <!-- Üst Kısım -->
    <div class="border-b border-gray-300 py-6">
      <div class="flex flex-col md:flex-row flex-wrap items-center justify-center gap-12">
        <!-- Sol: Logo ve Tanım -->
        <div class="w-full md:w-1/3 mb-6 md:mb-0 flex flex-col justify-center items-center">
          <img src="/assets/icons/logo-amblem.svg" alt="Logo" class="h-20 md:h-24 object-contain">
          <img src="/assets/icons/logo-yazi-beyaz.svg" alt="Logo" class="mt-2 h-8 md:h-10 object-contain">
          <p class="text-[#FEFEFE] mt-3 text-center">
            Eşitlik, hoşgörü, adalet ve toplum değerlerimiz, eğitim misyonumuza derinden etki eden faktörler olmuştur.
          </p>
        </div>
                <!-- SAĞ  -->

        <!--Hızlı Menü -->

         <div class="flex justify-center gap-24 md:gap-0 w-full  md:justify-between md:w-1/3">
        <div class="md:w-1/2 ">
          <h3 class="text-lg font-bold mb-2 text-[#FEFEFE]   inline-block border-b-2 border-white pb-1">Hızlı Menü</h3>
          <ul class="space-y-2 text-[#F8F8F8]">
            <li><a href="#home" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Anasayfa</a></li>
            <li><a href="#about" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Hakkımızda</a></li>
            <li><a href="#" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">İletişim</a></li>
            <li><a href="#" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Kurumsal</a></li>
            <li><a href="#blog" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Blog</a></li>
            <li><a href="#" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Eğitimlerimiz</a></li>
          </ul>
        </div>

        <!-- Eğitimlerimiz -->
        <div class="md:w-1/2">
          <h3 class="font-bold mb-2 text-[#FEFEFE] inline-block border-b-2 border-white pb-1 text-lg">Eğitimlerimiz</h3>
          <ul class="space-y-2 text-[#F8F8F8]">
            <li><a href="#" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Anasayfa</a></li>
            <li><a href="#" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Hakkımızda</a></li>
            <li><a href="#" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">İletişim</a></li>
            <li><a href="#" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Kurumsal</a></li>
            <li><a href="#" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Blog</a></li>
            <li><a href="#" class="transition-colors duration-300 ease-in-out hover:text-[#ffc896]">Eğitimlerimiz</a></li>
          </ul>
        </div>
        </div>


      </div>
    </div>

    <!-- Alt Kısım -->
    <div class="py-6">
      <div class="flex flex-col md:flex-row  flex-nowrap justify-between gap-8 ">
        <!-- Sol: Haber Bülteni -->
        <div class="w-full md:w-1/3 p-4">
  <h3 class="font-bold mb-4 text-[#FEFEFE] text-xl">Haberdar Ol!</h3>
  <p class="text-sm mb-4 text-[#FEFEFE]">En son haberleri ve güncellemeleri almak için kaydolun.</p>
  <form class="relative w-full">
    <!-- E-posta Girişi -->
    <div class="relative">
      <input
        type="email"
        placeholder="E-POSTA"
        class="bg-white bg-opacity-30 px-4 py-3 rounded-lg w-full pr-20 placeholder-text-gray-200 focus:outline-none text-white "
      />
      <button
        type="submit"
        class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-[#FF3D00] text-white px-4 py-2 rounded-lg hover:bg-[#FF3D00] border border-white font-bold text-sm"
      >
        GÖNDER
      </button>
    </div>
    <!-- Checkbox Alanları -->
    <div class="mt-4 space-y-2">
    <label class="flex items-center text-sm text-[#FEFEFE]">
  <input type="checkbox" class="custom-checkbox mr-2">
  Özel bildirim ve kampanyalar almak istiyorum.
</label>
<label class="flex items-center text-sm text-[#FEFEFE]">
  <input type="checkbox" class="custom-checkbox mr-2">
  Gizlilik politikalarını kabul ediyorum.
</label>

    </div>
  </form>
</div>

        <!-- Orta: Sosyal Medya -->
        <div class="w-full md:w-1/3 flex px-4 md:px-0 md:ms-8">
          <div>
          <h3 class="font-bold mb-4 text-[#FEFEFE] text-xl">Bizi Takip Edin!</h3>
          <p class="text-[#FEFEFE]">Güncel sosyal medya ve dijital platformlarımızdan kampanya, etkinlik ve satışlarımız içni takipte kal.

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

      <p class="">Çağrı merkezimiz üzerinden müşteri temsilcilerimiz ile sorunlarınıza 7/24 destek ile yanınızdayız.</p>

        </div>
      </div>
    </div>

    


    <div class="flex flex-col gap-2 md:gap-0 md:flex-row   md:justify-between text-white text-xs md:text-sm px-4 mt-4">
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

    <script type="module" src="<?=site_url('assets/js/main-slider.js')?>"></script>
<script type="module" src="<?=site_url('assets/js/announcement-slider.js')?>"></script>
<script type="module" src="<?=site_url('assets/js/blog-slider.js')?>"></script>
<script type="module" src="<?=site_url('assets/js/testimonals-slider.js')?>"></script>
<script type="module" src="<?=site_url('assets/js/header.js')?>"></script>
<script type="module" src="<?=site_url('assets/js/form.js')?>"></script>
<script type="module" src="<?=site_url('assets/js/about.js')?>"></script>
<script type="module" src="<?=site_url('assets/js/top-button.js')?>"></script>



    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>
</html>
