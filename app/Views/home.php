<?= $this->extend('layouts/mainLayout') ?>

<?= $this->section('content') ?>
<?= $this->include('home/mainContent') ?> 
<?= $this->include('home/announcement') ?> 
<?= $this->include('home/blog') ?> <!-- blog.php dosyasını dışarıdan yüklüyoruz -->
<?= $this->include('home/about') ?> 
<?= $this->include('home/image-section') ?> 
<?= $this->include('home/testimonals') ?> 
<?= $this->include('home/ielts') ?> 


<?= $this->endSection() ?>
