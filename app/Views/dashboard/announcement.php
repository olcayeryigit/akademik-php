<div class="announcement-container container mx-auto p-6" id="announcement-container" style="display: none;">
    <h1 class="text-xl font-bold mb-6 text-gray-800">Duyurular</h1>

    <!-- Duyuru Ekle Butonu -->
    <div class="mb-4">
        <button onclick="showAnnouncementForm()" class="bg-[#475569] text-white px-4 py-2 rounded-md hover:bg-[#475569]/80 text-sm">Duyuru Ekle</button>
    </div>

    <!-- Duyuru Listesi -->
    <table class="min-w-full bg-white border rounded-md shadow-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-2 px-4 text-sm text-left text-gray-600">ID</th>
                <th class="py-2 px-4 text-sm text-left text-gray-600">Başlık</th>
                <th class="py-2 px-4 text-sm text-left text-gray-600">Durum</th>
                <th class="py-2 px-4 text-sm text-left text-gray-600">Aksiyon</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($announcements)): ?>
                <?php foreach ($announcements as $announcement): ?>
                    <tr class="border-t">
                        <td class="py-2 px-4 text-sm text-gray-700"><?= $announcement['id'] ?></td>
                        <td class="py-2 px-4 text-sm text-gray-700"><?= $announcement['title'] ?></td>
                        <td class="py-2 px-4 text-sm text-gray-700"><?= $announcement['status'] == 1 ? 'Aktif' : 'Pasif' ?></td>
                        <td class="py-2 px-4 text-sm flex gap-8">
                            <?php if ($announcement['status'] == 1): ?>
                                <a href="/announcement/update-status/<?= $announcement['id'] ?>/0" class="text-yellow-600 hover:text-yellow-800">Pasife Al</a>
                            <?php else: ?>
                                <a href="/announcement/update-status/<?= $announcement['id'] ?>/1" class="text-green-600 hover:text-green-800">Yayınla</a>
                            <?php endif; ?>
                            <a href="#" onclick="showUpdateForm2(<?= $announcement['id'] ?>, '<?= $announcement['title'] ?>', '<?= $announcement['slug'] ?>', '<?= $announcement['description'] ?>', '<?= $announcement['image'] ?>')" class="text-blue-600 hover:text-blue-800">Güncelle</a>
                            <a href="/announcement/delete/<?= $announcement['id'] ?>" class="text-red-600 hover:text-red-800" onclick="return confirm('Bu duyuruyu silmek istediğinizden emin misiniz?')">Sil</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center py-4 text-gray-500 text-sm">Henüz duyuru eklenmemiş.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Duyuru Ekleme Formu -->
    <div id="addAnnouncementForm" class="my-6 p-4 border rounded-md shadow-sm bg-white hidden relative">
        <div class="flex justify-between items-center">
            <h2 class="text-lg font-semibold mb-4 text-gray-800">Yeni Duyuru Ekle</h2>
            <button onclick="closeAnnouncementForm()" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 text-sm">Kapat</button>
        </div>

        <form action="/announcement/store" method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-600">Başlık</label>
                <input type="text" id="title" name="title" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-sm" required>
            </div>
            <div class="mb-4">
                <label for="slug" class="block text-sm font-medium text-gray-600">URL</label>
                <input type="text" id="slug" name="slug" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-sm">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-600">Açıklama</label>
                <textarea id="description" name="description" rows="2" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-sm"></textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-600">Resim</label>
                <input type="file" id="image" name="image" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-sm">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-[#475569] hover:bg-[#475569]/80 text-white px-4 py-2 rounded-md text-sm">Ekle</button>
            </div>
        </form>
    </div>

    <!-- Güncelleme Formu -->
    <div id="updateForm2" class="hidden mt-6 p-4 border rounded-md shadow-sm bg-white relative">
        <div class="flex justify-between items-center">
            <h2 class="text-lg font-semibold mb-4 text-gray-800">Duyuru Güncelle</h2>
            <button onclick="closeUpdateForm2()" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 text-sm">Kapat</button>
        </div>

        <form action="/announcement/update" method="post" enctype="multipart/form-data">
            <input type="hidden" id="update_id2" name="id">

            <div class="mb-4">
                <label for="update_title2" class="block text-sm font-medium text-gray-600">Başlık</label>
                <input type="text" id="update_title2" name="title" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-sm" required>
            </div>
            <div class="mb-4">
                <label for="update_slug2" class="block text-sm font-medium text-gray-600">URL</label>
                <input type="text" id="update_slug2" name="slug" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-sm">
            </div>
            <div class="mb-4">
                <label for="update_description2" class="block text-sm font-medium text-gray-600">Açıklama</label>
                <textarea id="update_description2" name="description" rows="2" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-sm"></textarea>
            </div>
            <div class="mb-4">
                <label for="update_image2" class="block text-sm font-medium text-gray-600">Resim</label>
                <input type="file" id="update_image2" name="image" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-sm">
                <img id="update_image_preview2" src="" alt="Mevcut Duyuru Resmi" class="mt-2  h-20 object-contain">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-[#475569] hover:bg-[#475569]/80 text-white px-4 py-2 rounded-md text-sm">Güncelle</button>
            </div>
        </form>
    </div>
</div>

<script>
// Duyuru Ekleme Formunu Göster
function showAnnouncementForm() {
    // Güncelleme formunu kapat
    document.getElementById('updateForm2').classList.add('hidden');
    // Ekleme formunu göster
    document.getElementById('addAnnouncementForm').classList.remove('hidden');
}

// Duyuru Ekleme Formunu Kapat
function closeAnnouncementForm() {
    document.getElementById('addAnnouncementForm').classList.add('hidden');
}

// Güncelleme formunu göster
function showUpdateForm2(id, title, slug, description, image) {
    // Ekleme formunu kapat
    document.getElementById('addAnnouncementForm').classList.add('hidden');
    // Güncelleme formunu göster
    document.getElementById('update_id2').value = id;
    document.getElementById('update_title2').value = title;
    document.getElementById('update_slug2').value = slug;
    document.getElementById('update_description2').value = description;
    document.getElementById('update_image_preview2').src = image ? "/" + image : ''; // Resim var ise göster
    document.getElementById('updateForm2').classList.remove('hidden');
}

// Güncelleme Formunu Kapat
function closeUpdateForm2() {
    document.getElementById('updateForm2').classList.add('hidden');
}
</script>
