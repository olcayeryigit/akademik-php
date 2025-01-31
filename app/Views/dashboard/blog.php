<div class="blog-container container mx-auto p-4" id="blog-container" style="display: none;">
    <h1 class="text-xl font-bold mb-6 text-gray-800">Bloglar</h1>

    <!-- Blog Ekle Butonu -->
    <div class="mb-4">
        <button onclick="showBlogForm()" class="bg-[#475569] text-white px-4 py-2 rounded-md hover:bg-[#475569]/80 text-sm">Blog Ekle</button>
    </div>

    <!-- Blog Listesi -->
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
            <?php if (!empty($blogs)): ?>
                <?php foreach ($blogs as $blog): ?>
                    <tr class="border-t">
                        <td class="py-2 px-4 text-sm text-gray-700"><?= $blog['id'] ?></td>
                        <td class="py-2 px-4 text-sm text-gray-700"><?= $blog['title'] ?></td>
                        <td class="py-2 px-4 text-sm text-gray-700"><?= $blog['status'] == 1 ? 'Aktif' : 'Pasif' ?></td>
                        <td class="py-2 px-4 text-sm flex gap-8">
                            <?php if ($blog['status'] == 1): ?>
                                <a href="/blog/update-status/<?= $blog['id'] ?>/0" class="text-yellow-600 hover:text-yellow-800 ">Pasife Al</a>
                            <?php else: ?>
                                <a href="/blog/update-status/<?= $blog['id'] ?>/1" class="text-green-600 hover:text-green-800">Yayınla</a>
                            <?php endif; ?>
                            <a href="#" onclick="showUpdateForm(<?= $blog['id'] ?>, '<?= $blog['title'] ?>', '<?= $blog['slug'] ?>', '<?= $blog['description'] ?>', '<?= $blog['image'] ?>')" class="text-blue-600 hover:text-blue-800">Güncelle</a>
                            <a href="/blog/delete/<?= $blog['id'] ?>" class="text-red-600 hover:text-red-800 " onclick="return confirm('Bu blogu silmek istediğinizden emin misiniz?')">Sil</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center py-4 text-gray-500 text-sm">Henüz blog eklenmemiş.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Blog Ekleme Formu -->
    <div id="addBlogForm" class="my-6 p-4 border rounded-md shadow-sm bg-white hidden relative">
<div class="flex justify-between items-center">
    <h2 class="text-lg font-semibold mb-4 text-gray-800">Yeni Blog Ekle</h2>
        <button onclick="closeBlogForm()" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 text-sm">Kapat</button>

</div>
        
        <form action="/blog/store" method="post" enctype="multipart/form-data">
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
                <input type="file" id="image" name="image" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-sm" required>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-[#475569] hover:bg-[#475569]/80 text-white px-4 py-2 rounded-md  text-sm">Ekle</button>
            </div>
        </form>
    </div>

    <!-- Güncelleme Formu -->
    <div id="updateForm" class="hidden mt-6 p-4 border rounded-md shadow-sm bg-white relative">
        <form action="/blog/update" method="post" enctype="multipart/form-data">   

             <div class="flex justify-between items-center">

    <h2 class="text-lg font-semibold mb-4 text-gray-800">Blog Güncelle</h2>
    <button onclick="closeUpdateForm()" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 text-sm">Kapat</button>

         </div>   

            <input type="hidden" id="update_id" name="id">

            <div class="mb-4">
                <label for="update_title" class="block text-sm font-medium text-gray-600">Başlık</label>
                <input type="text" id="update_title" name="title" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-sm" required>
            </div>
            <div class="mb-4">
                <label for="update_slug" class="block text-sm font-medium text-gray-600">URL</label>
                <input type="text" id="update_slug" name="slug" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-sm">
            </div>

            <div class="mb-4">
                <label for="update_description" class="block text-sm font-medium text-gray-600">Açıklama</label>
                <textarea id="update_description" name="description" rows="2" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-sm"></textarea>
            </div>

            <div class="mb-4">
                <label for="update_image" class="block text-sm font-medium text-gray-600">Resim</label>
                <input type="file" id="update_image" name="image" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-sm">
                <img id="update_image_preview" src="" alt="Mevcut Blog Resmi" class="mt-2  h-20 object-contain" />
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-[#475569] text-white px-4 py-2 rounded-md hover:bg-[#475569]/80 text-sm">Güncelle</button>
            </div>
        </form>
    </div>
</div>
<script>
  // Blog Ekleme Formunu Göster
function showBlogForm() {
    // Güncelleme formunu kapat
    document.getElementById('updateForm').classList.add('hidden');
    // Ekleme formunu göster
    document.getElementById('addBlogForm').classList.remove('hidden');
}

// Blog Ekleme Formunu Kapat
function closeBlogForm() {
    document.getElementById('addBlogForm').classList.add('hidden');
}

// Güncelleme formunu göster
function showUpdateForm(id, title, slug, description, image) {
    // Ekleme formunu kapat
    document.getElementById('addBlogForm').classList.add('hidden');
    // Güncelleme formunu göster
    document.getElementById('update_id').value = id;
    document.getElementById('update_title').value = title;
    document.getElementById('update_slug').value = slug;
    document.getElementById('update_description').value = description;
    document.getElementById('update_image_preview').src = image ? "/" + image : ''; // Resim var ise göster
    document.getElementById('updateForm').classList.remove('hidden');
}

// Güncelleme Formunu Kapat
function closeUpdateForm() {
    document.getElementById('updateForm').classList.add('hidden');
}

</script>
