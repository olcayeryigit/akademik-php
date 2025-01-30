<div class="testimonals-container container mx-auto p-6" id="testimonals-container" style="display: none;">
<!-- testimonals/index.php -->
<h1>Testimonals Listesi</h1>

<!-- Testimonial Listeleme -->
<?php if ($testimonals): ?>
    <table>
        <thead>
            <tr>
                <th>Başlık</th>
                <th>Resim</th>
                <th>Aksiyonlar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($testimonals as $testimonal): ?>
                <tr>
                    <td><?= esc($testimonal['title']); ?></td>
                    <td><img src="<?= base_url($testimonal['image']); ?>" alt="Testimonial Resmi" width="100"></td>
                    <td>
                        <!-- Silme butonu -->
                        <a href="<?= site_url('/testimonal/delete/' . $testimonal['id']); ?>" onclick="return confirm('Silmek istediğinize emin misiniz?');">Sil</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Henüz testimonial eklenmemiş.</p>
<?php endif; ?>

<!-- Yeni Testimonial Ekleme -->
<h2>Yeni Testimonial Ekle</h2>
<form action="<?= site_url('/testimonal/store'); ?>" method="POST" enctype="multipart/form-data">
    <div>
        <label for="title">Başlık:</label>
        <input type="text" id="title" name="title" value="<?= old('title'); ?>" required>
        <?php if (session()->getFlashdata('error')): ?>
            <div style="color: red;">
                <?= session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
    </div>

    <div>
        <label for="image">Resim:</label>
        <input type="file" id="image" name="image" accept="image/*">
    </div>

    <button type="submit">Kaydet</button>
</form>
</div>