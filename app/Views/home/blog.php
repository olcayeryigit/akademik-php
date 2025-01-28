



<section id="blog" class="bg-[#F3F3F3] pb-6 md:pb-8">
<div class="container mx-auto bg-[#F9F9F9]">
<div class="flex  p-4 gap-4 gap-4 md:gap-8 md:p-8">
  <!-- Blog  SOL  -->
<div class="py-6 px-2 sm:px-4 space-y-3 md:w-1/4 border-r-2 border-r-[#FF5F01]">
<div class="logo flex flex-col lg:flex-row items-center gap-2">
    <div class="bg-white rounded-full px-1 py-2">
    <img src="/assets/icons/logo-amblem.svg" alt="Logo" class="h-10 md:h-14 object-contain">
  </div>
  <img src="/assets/icons/logo-yazi.svg" alt="Logo" class="h-4 md:h-5 object-contain">

  </div>

<h1 class="font-bold text-[#414141] text-xs sm:text-sm md:text-2xl lg:text-3xl">BURSA KOLEJİ</h1>
<h1 class="text-xs md:text-2xl lg:text-3xl"><span class="font-bold text-[#414141] ">BLOG</span> BÖLÜMÜ</h1>

<a href="" class="mt-4  block w-24 md:w-36 lg:w-40 text-center py-1 bg-gradient-to-r from-[#FE5A01] via-[#FE7800] to-[#FF7B00] text-sm md:text-md text-white rounded-md
     font-bold">Tümünü Gör!</a>

</div>
  <!-- Blog SOL SONU -->

  <!-- Blog Slider -->
  <div class="w-3/4 blog-swiper-container overflow-hidden relative rounded-xl ">
  <div class="swiper-wrapper ">


<?php foreach ($blogs as $blog): ?>
    <div class="swiper-slide">
        <div class="card bg-white rounded-lg p-4">
            <img src="<?= base_url('' . $blog['image']); ?>" alt="Blog Resmi" class="w-full h-32 object-cover rounded-lg" />
            <div class="card-content mt-4">
                <h3 class="text-md font-semibold"><?= esc($blog['title']); ?></h3>
                <p class="text-gray-600 mt-2 line-clamp-2 text-sm"><?= esc($blog['description']); ?></p>
            </div>
            <div class="flex justify-between items-center mt-3">
                <a href="/blog/view/<?= $blog['id']; ?>" class="text-[11px] sm:text-xs block text-center px-2 py-1 bg-gradient-to-r from-[#FE5A01] via-[#FE7800] to-[#FF7B00] text-white rounded-md">Devamını Oku!</a>
                <div class="text-[10px] sm:text-xs"><?= date('d.m.Y', strtotime($blog['published_at'])); ?> </div>

            </div>
        </div>
    </div>
<?php endforeach; ?>

</div>
  </div>
</section>