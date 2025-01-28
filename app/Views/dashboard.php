<?= $this->extend('layouts/dashboardLayout') ?>

<?= $this->section('content') ?>

<?= $this->include('dashboard/blog') ?> 
<?= $this->include('dashboard/announcement') ?> 


<?= $this->endSection() ?>
