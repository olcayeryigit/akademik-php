<?php if (!empty($imageSection)): ?>
<section id="image-section" class="container mx-auto px-4 md:px-0 py-4 md:py-16" >
        <img src="<?= base_url('' . $imageSection[0]['image']); ?>" class="hidden md:block w-full object-contain rounded-[2rem]">
        <img src="<?= base_url('' . $imageSection[0]['mobileImage']); ?>"  class="md:hidden w-full object-contain rounded-xl"/>

</section>
<?php endif; ?>

