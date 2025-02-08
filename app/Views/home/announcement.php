<section id="announcement" class="bg-[#F3F3F3] mt-2 pt-6 md:px-0 md:mt-8 md:pt-8">
    <div class="container mx-auto bg-[#013042] rounded-t-xl">
        <div class="announcement-swiper-container overflow-hidden w-full relative">
            <div class="swiper-wrapper">
                <?php foreach ($publishedAnnouncements as $announcement): ?>
                    <div class="swiper-slide flex flex-col md:flex-row">
                        <div class="w-full md:w-1/2 p-6 md:px-10  md:py-8">
                            <img src="<?php echo base_url('' . $announcement['image']); ?>" alt=<?php echo esc($announcement['title']); ?> class="w-full h-28 md:h-full object-cover rounded-xl md:rounded-[2rem]" />
                        </div>

                        <div class="w-full md:w-1/3 p-6 text-white md:mt-4">
                            <h3 class="text-2xl font-semibold"><?php echo esc($announcement['title']); ?></h3>
                            <p class="mt-2 line-clamp-2 md:text-sm">
                                <?php echo esc($announcement['description']); ?>
                            </p>
                            <div class="flex justify-end mt-4">
                                <a href="/blog/<?= esc($announcement['slug'])?>"  class="w-40 text-center py-1 bg-gradient-to-r from-[#FE5A01] via-[#FE7800] to-[#FF7B00] text-sm md:text-md text-white rounded-md font-bold">
                                    Devamını Oku!
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Navigation Arrows -->
            <div class="announcement-swiper-button-prev z-50 absolute md:right-12 md:top-12 -rotate-90 md:rotate-0">
                <img src="/assets/icons/yon-oku.svg" class="h-8 md:h-12"/>
            </div>
            <div class="announcement-swiper-button-next z-50 absolute md:right-12 md:bottom-12 rotate-90 md:rotate-180">
                <img src="/assets/icons/yon-oku.svg" class="h-8 md:h-12"/>
            </div>
        </div>
    </div>
</section>
