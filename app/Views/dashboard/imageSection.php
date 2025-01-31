<div class="image-section-container container mx-auto p-6" id="image-section-container" style="display: none;">
    <?php if (!empty($imageSection)): ?>
        <!-- Resimler için Görsel Gösterimi -->
        <div class="py-6 px-8 border-b flex items-center gap-12">
            <!-- Ana Görsel -->
            <div class="flex flex-col items-center">
                <div class="text-center text-xl font-semibold text-gray-700 mb-4">Büyük Görsel</div>
                <?= isset($imageSection['image']) ? '<img src="' . base_url($imageSection['image']) . '" alt="Ana Görsel" class="h-40  object-contain shadow-lg" />' : '' ?>
            </div>

            <!-- Mobil Görsel -->
            <div class="flex flex-col items-center">
                <div class="text-center text-xl font-semibold text-gray-700 mb-4">Mobil Görsel</div>
                <?= isset($imageSection['mobileImage']) ? '<img src="' . base_url($imageSection['mobileImage']) . '" alt="Mobil Görsel" class=" h-40  object-contain shadow-lg" />' : '' ?>
            </div>
        </div>

        <!-- Güncelleme Formu -->
        <form action="<?= site_url('/imageSection/update') ?>" method="post" enctype="multipart/form-data" class="space-y-6 mt-6">
            <h3 class="text-3xl font-semibold text-gray-800 text-center mb-6">Resim Bölümü Güncelle</h3>
            <input type="hidden" name="id" value="<?= $imageSection['id'] ?>">

            <div class="flex items-center gap-8">
                <!-- Ana Görsel Yükleme -->
                <div class="form-group w-full max-w-sm flex flex-col items-center gap-4 py-4">
                    <label for="image" class="text-sm font-medium text-gray-700 mb-2">Büyük Görsel:</label>
                    <input type="file" name="image" id="image" class="form-control w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 shadow-md transition-all duration-200">
                </div>

                <!-- Mobil Görsel Yükleme -->
                <div class="form-group w-full max-w-sm flex flex-col items-center gap-4 py-4">
                    <label for="mobileImage" class="text-sm font-medium text-gray-700 mb-2">Mobil Görsel:</label>
                    <input type="file" name="mobileImage" id="mobileImage" class="form-control w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 shadow-md transition-all duration-200">
                </div>
                
                <!-- Güncelleme Butonu -->
                <div class="form-group  mt-12">
                    <button type="submit" class="bg-[#334155] text-white px-4 py-3 rounded-lg text-lg font-semibold hover:bg-[#334155]/80 focus:ring-4 focus:ring-indigo-300 transition duration-300 w-full">Güncelle</button>
                </div>
            </div>
        </form>
    <?php endif; ?>
</div>
