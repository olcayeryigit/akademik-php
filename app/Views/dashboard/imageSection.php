<div class="image-section-container container mx-auto p-6" id="image-section-container" style="display: none;">
    <?php if (!empty($imageSection)): ?>
     

        <!-- image2'yi görsel olarak göster -->
        <div class="py-2 px-4 border-b">
            <?= isset($imageSection['image']) ? '<img src="' . base_url($imageSection['image']) . '" alt="Image 2" style="max-width: 200px; max-height: 200px;" />' : '' ?>
            <?= isset($imageSection['mobileImage']) ? '<img src="' . base_url($imageSection['mobileImage']) . '" alt="Image 2" style="max-width: 200px; max-height: 200px;" />' : '' ?>
        </div>

        <!-- Güncelleme formu -->
        <form action="<?= site_url('/imageSection/update') ?>" method="post" enctype="multipart/form-data">
            <h3>Resim Bölümü</h3>
            <input type="hidden" name="id" value="<?= $imageSection['id'] ?>">

            <!-- Main Image (Yeni resim yükleme) -->
            <div class="form-group py-2">
                <label for="image">Resim</label>
                <input type="file" name="image" id="image"  class="form-control">
            </div>

            <!-- image2 (Yeni resim yükleme) -->
            <div class="form-group py-2">
                <label for="MobileImage">Mobile Resim</label>
                <input type="file" name="mobileImage" id="mobileImage" class="form-control">
            </div>

            <!-- Submit button -->
            <div class="form-group py-2">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    <?php endif; ?>
</div>
