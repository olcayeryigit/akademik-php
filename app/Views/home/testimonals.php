<section id="" class="container mx-auto pt-10 pb-8 md:px-0 lg:px-12 md:py-12">

  <div class="testimonials-swiper-container overflow-hidden w-full relative">
    <div class="swiper-wrapper flex md:flex-row md:items-center md:justify-center gap-2">
      <?php foreach ($testimonals as $testimonal): ?>
        <div class="swiper-slide flex items-center justify-center w-auto">
          <img src="<?= base_url('' . $testimonal['image']); ?>" alt=<?= esc($testimonal['title']); ?>  class="h-16 md:h-12 object-contain" />
        </div>
      <?php endforeach; ?>
    </div>
  </div>

</section>
