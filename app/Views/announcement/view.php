<?= $this->extend('layouts/mainLayout') ?>
<?= $this->section('content') ?>

<div class="space-x-4 container mx-auto my-8 ">
    <!-- Resim Bölümü -->
    <div class="w-1/3">
        <img src="<?= base_url('' . $announcement['image']); ?>" alt="<?= esc($announcement['title']) ?>" class="w-full h-auto object-cover " />
    </div>

    <!-- İçerik Bölümü -->
    <div class="w-full">
        <h1 class="text-3xl font-semibold"><?= esc($announcement['title']) ?></h1>
        <p class="mt-4"><?= esc($announcement['description']) ?></p>
    </div>
</div>

<?= $this->endSection() ?>
