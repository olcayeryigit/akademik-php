<div class="testimonals-container container mx-auto p-6" id="testimonals-container" style="display: none;">
    <!-- Başlık -->
    <h1 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Referanslar Listesi</h1>

    <!-- Testimonial Listeleme -->
    <?php if ($testimonals): ?>
        <div class="overflow-x-auto bg-white rounded-md shadow-sm">
            <table class="min-w-full table-auto">
                <thead class="bg-indigo-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm text-gray-700">Başlık</th>
                        <th class="px-4 py-2 text-left text-sm text-gray-700">Resim</th>
                        <th class="px-4 py-2 text-left text-sm text-gray-700">Aksiyonlar</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-600">
                    <?php foreach ($testimonals as $testimonal): ?>
                        <tr class="border-b">
                            <td class="px-4 py-3"><?= esc($testimonal['title']); ?></td>
                            <td class="px-4 py-3">
                                <img src="<?= base_url($testimonal['image']); ?>" alt="Testimonial Resmi" class="h-24 object-contain ">
                            </td>
                            <td class="px-4 py-3">
                                <a href="<?= site_url('/testimonal/delete/' . $testimonal['id']); ?>" onclick="return confirm('Silmek istediğinize emin misiniz?');" class="text-red-500 hover:text-red-700">Sil</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p class="text-center text-gray-500 mt-4">Henüz testimonial eklenmemiş.</p>
    <?php endif; ?>

    <!-- Yeni Testimonial Ekleme -->
    <div class="mt-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Yeni Referans Ekle</h2>
        <form action="<?= site_url('/testimonal/store'); ?>" method="POST" enctype="multipart/form-data" class="space-y-4">
            <div>
                <label for="title" class="text-sm font-medium text-gray-700">Başlık:</label>
                <input type="text" id="title" name="title" value="<?= old('title'); ?>" class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-400" required>
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="text-red-500 text-sm mt-2">
                        <?= session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div>
                <label for="image" class="text-sm font-medium text-gray-700">Resim:</label>
                <input type="file" id="image" name="image" accept="image/*" class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-400">
            </div>

            <button type="submit" class="bg-[#334155] text-white px-6 py-2 rounded-md hover:bg-[#334155]/80 focus:ring-2 focus:ring-indigo-300 transition duration-200">Kaydet</button>
        </form>
    </div>
</div>
