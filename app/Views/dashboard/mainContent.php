<div class="main-content-container container mx-auto p-6" id="main-content-container" style="display: none;">
    <?php if (!empty($mainContent)): ?>
        <!-- Ana Görsellerin Gösterimi -->
        <div class="py-4 px-6 border-b border-gray-300 mb-4">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Slider Resimleri</h3>
            <div class="flex gap-6">
                <?php
                if (isset($mainContent['mainImage']) && is_array($mainContent['mainImage'])) {
                    foreach ($mainContent['mainImage'] as $image) {
                        echo '<div class="image-container">';
                        echo '<img src="' . base_url($image) . '" alt="Main Image" class=" h-24 object-contain " />';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>

        <!-- Secondary Image -->
        <div class="py-4 px-6 border-b border-gray-300 mb-4">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Küçük Resim</h3>
            <?= isset($mainContent['image2']) ? '<img src="' . base_url($mainContent['image2']) . '" alt="Image 2" class="h-24 object-contain " />' : '' ?>
        </div>

        <!-- Güncelleme Formu -->
        <form action="<?= site_url('/mainContent/update') ?>" method="post" enctype="multipart/form-data" class="max-w-xl mx-auto">
            <h3 class="text-2xl font-semibold text-gray-800 text-center mb-4">Güncelleme</h3>
            <input type="hidden" name="id" value="<?= $mainContent['id'] ?>">

            <!-- Ana Görsellerin Güncellenmesi -->
            <div class="form-group mb-4">
                <label for="mainImage" class="text-sm font-medium text-gray-700">Slider resimlerini güncelle:</label>
                <input type="file" name="mainImage[]" id="mainImage" multiple class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-400 transition duration-200">
            </div>

            <!-- Secondary Image Güncellenmesi -->
            <div class="form-group mb-4">
                <label for="image2" class="text-sm font-medium text-gray-700">Küçük Resmi Güncelleme:</label>
                <input type="file" name="image2" id="image2" class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-400 transition duration-200">
            </div>

            <!-- Güncelleme Butonu -->
            <div class="form-group text-center">
                <button type="submit" class="bg-[#475569] text-white px-4 py-2 rounded-md hover:bg-[#475569]/80 text-lg">Güncelle</button>
            </div>
        </form>
    <?php endif; ?>
</div>
