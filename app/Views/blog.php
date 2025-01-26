<?= $this->extend('layouts/mainLayout') ?>

<?= $this->section('content') ?>
<h2>Blog Page</h2>
<p>Here are some of the latest blog posts.</p>
<ul>
    <li><a href="/blog/post-1">Post 1</a></li>
    <li><a href="/blog/post-2">Post 2</a></li>
</ul>
<?= $this->endSection() ?>
