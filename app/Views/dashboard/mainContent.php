<div class="main-content-container container mx-auto p-6" id="main-content-container" style="display: none;">
    <?php if (!empty($mainContent)): ?>
        <!-- mainImage dizisini çöz ve her bir öğeyi görsel olarak göster -->
        <div class="py-2 px-4 border-b">
            <h3>Main Images</h3>
            <?php
            if (isset($mainContent['mainImage']) && is_array($mainContent['mainImage'])) {
                foreach ($mainContent['mainImage'] as $image) {
                    echo '<div class="image-container py-2">';
                    echo '<img src="' . base_url($image) . '" alt="Main Image" style="max-width: 200px; max-height: 200px;"/>';
                    echo '</div>';
                }
            }
            ?>
        </div>

        <!-- image2'yi görsel olarak göster -->
        <div class="py-2 px-4 border-b">
            <h3>Secondary Image</h3>
            <?= isset($mainContent['image2']) ? '<img src="' . base_url($mainContent['image2']) . '" alt="Image 2" style="max-width: 200px; max-height: 200px;" />' : '' ?>
        </div>

        <!-- Güncelleme formu -->
        <form action="<?= site_url('/mainContent/update') ?>" method="post" enctype="multipart/form-data">
            <h3>Update Main Content</h3>
            <input type="hidden" name="id" value="<?= $mainContent['id'] ?>">

            <!-- Main Image (Yeni resim yükleme) -->
            <div class="form-group py-2">
                <label for="mainImage">Update Main Images:</label>
                <input type="file" name="mainImage[]" id="mainImage" multiple class="form-control">
            </div>

            <!-- image2 (Yeni resim yükleme) -->
            <div class="form-group py-2">
                <label for="image2">Update Secondary Image:</label>
                <input type="file" name="image2" id="image2" class="form-control">
            </div>

            <!-- Submit button -->
            <div class="form-group py-2">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    <?php endif; ?>
</div>
