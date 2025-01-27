
<div class="blog-container container mx-auto p-6" id="blog-container" style="display: none;">
    <h1 class="text-2xl font-bold mb-4">Bloglar</h1>

    <!-- Blog Ekleme Formu -->
    <div class="mb-6">
        <h2 class="text-xl font-semibold mb-4">Yeni Blog Ekle</h2>
        <form action="/blog/store" method="post" enctype="multipart/form-data">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Başlık</label>
                <input type="text" id="title" name="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Açıklama</label>
                <textarea id="description" name="description" rows="2" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Resim</label>
                <input type="file" id="image" name="image" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Ekle</button>
            </div>
        </form>
    </div>

    <!-- Blog Listesi -->
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Başlık</th>
                <th class="py-2 px-4 border-b">Aksiyon</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($blogs)): ?>
                <?php foreach ($blogs as $blog): ?>
                    <tr>
                        <td class="py-2 px-4 border-b"><?= $blog['id'] ?></td>
                        <td class="py-2 px-4 border-b"><?= $blog['title'] ?></td>
                        <td class="py-2 px-4 border-b">
                            <a href="/blog/view/<?= $blog['id'] ?>" class="text-blue-500 hover:text-blue-700">Görüntüle</a>
                            <a href="#" onclick="showUpdateForm(<?= $blog['id'] ?>, '<?= $blog['title'] ?>', '<?= $blog['description'] ?>', '<?= $blog['image'] ?>')" class="text-yellow-500 hover:text-yellow-700 ml-4">Güncelle</a>
                            <a href="/blog/delete/<?= $blog['id'] ?>" class="text-red-500 hover:text-red-700 ml-4" onclick="return confirm('Bu blogu silmek istediğinizden emin misiniz?')">Sil</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" class="text-center py-4">Henüz blog eklenmemiş.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Güncelleme Formu -->
    <div id="updateForm" class="hidden mt-6">
        <h2 class="text-xl font-semibold mb-4">Blog Güncelle</h2>
        <form action="/blog/update" method="post" enctype="multipart/form-data">
            <input type="hidden" id="update_id" name="id">

            <div>
                <label for="update_title" class="block text-sm font-medium text-gray-700">Başlık</label>
                <input type="text" id="update_title" name="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
            </div>

            <div>
                <label for="update_description" class="block text-sm font-medium text-gray-700">Açıklama</label>
                <textarea id="update_description" name="description" rows="2" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>

            <div>
                <label for="update_image" class="block text-sm font-medium text-gray-700">Resim</label>
                <input type="file" id="update_image" name="image" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <img id="update_image_preview" src="" alt="Mevcut Blog Resmi" class="mt-2 w-32 h-32 object-cover rounded-md" />
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Güncelle</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Güncelleme formunu göster
    function showUpdateForm(id, title, description, image) {
        document.getElementById('update_id').value = id;
        document.getElementById('update_title').value = title;
        document.getElementById('update_description').value = description;
        document.getElementById('update_image_preview').src = "/assets/" + image;
        document.getElementById('updateForm').classList.remove('hidden');
    }



    
</script>