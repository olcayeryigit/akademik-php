<?= $this->extend('layouts/mainLayout') ?>
<?= $this->section('content') ?>

<div class="container mx-auto px-6 py-12">
    <div class="flex flex-col md:flex-row items-start gap-8">

        <!-- Blog İçerik Bölümü -->
        <div class="md:w-3/4">
            <?php if ($blog): ?>
                    <img src="<?= base_url($blog['image']); ?>" alt="<?= esc($blog['title']) ?>" 
        class="w-full rounded-lg shadow-lg object-contain" />
        <h1 class="text-xl font-semibold text-gray-800 mt-4 mb-4"><?= esc($blog['title']) ?></h1>
    
        <p class="text-md text-gray-600 leading-relaxed"><?= esc($blog['description']) ?></p>
        <!-- Blog içeriği burada -->
    <?php elseif ($announcement): ?>
        <img src="<?= base_url($announcement['image']); ?>" alt="<?= esc($announcement['title']) ?>" 
        class="w-full h-80 object-cover rounded-lg shadow-lg" />
        <h1 class="text-xl font-semibold text-gray-800 mt-4 mb-4"><?= esc($announcement['title']) ?></h1>
        <p class="text-md text-gray-600 leading-relaxed"><?= esc($announcement['description']) ?></p>
        <!-- Duyuru içeriği burada -->
    <?php endif; ?>


        </div>

        <div class="md:w-1/4 bg-white rounded-lg shadow-lg overflow-hidden px-4 py-6">
            <div class="">
                <h2 class="mb-4 font-semibold">Diğer Yazılar</h2>

    <?php foreach ($publishedBlogs as $blog): ?>
            <li  class="flex  gap-1">
            <img src="/assets/icons/bullet.svg" class="h-4 mt-1 object-contain" />

                <a href="/blog/<?= esc($blog['slug']) ?>"><?= esc($blog['title']) ?></a>
            </li>
        <?php endforeach; ?>
        <?php foreach ($publishedAnnouncements as $announcement): ?>
            <li  class="flex  gap-1 ">
        <img src="/assets/icons/bullet.svg" class="h-4 object-contain mt-1" />
                <a href="/blog/<?= esc($announcement['slug']) ?>"><?= esc($announcement['title']) ?></a>
            </li>
        <?php endforeach; ?>
</div>
<?= $this->endSection() ?>


                
            </div>
        </div>
    </div>
</div>


