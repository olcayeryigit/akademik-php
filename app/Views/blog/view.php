
<?= $this->extend('layouts/mainLayout') ?>
<?= $this->section('content') ?>

<h1><?= esc($blog['title']) ?></h1>
<p><?= esc($blog['description']) ?></p>
<img src="<?= base_url('' . $blog['image']); ?> "alt="<?= esc($blog['title']) ?>"  class="w-full h-32 object-cover rounded-lg" />
<?= $this->endSection() ?>
