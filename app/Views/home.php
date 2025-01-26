<?= $this->extend('layouts/mainLayout') ?>

<?= $this->section('content') ?>

<?= $this->include('home/blog') ?> <!-- blog.php dosyasını dışarıdan yüklüyoruz -->


<?= $this->endSection() ?>
