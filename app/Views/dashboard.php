<?= $this->extend('layouts/dashboardLayout') ?>

<?= $this->section('content') ?>

<?= $this->include('dashboard/blog') ?> 
<?= $this->include('dashboard/announcement') ?> 
<?= $this->include('dashboard/about') ?> 
<?= $this->include('dashboard/mainContent') ?> 
<?= $this->include('dashboard/imageSection') ?> 


<?= $this->endSection() ?>
