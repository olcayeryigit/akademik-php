<div class="about-container container mx-auto p-6" id="about-container" style="display: none;">
    <?php if (!empty($about)): ?>
        <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Kurumsal Bilgiler</h2>

        <!-- Güncelleme Formu -->
        <form action="<?= site_url('/about/update') ?>" method="post" class="space-y-6 max-w-4xl mx-auto">
            <input type="hidden" name="id" value="<?= esc($about['id']) ?>">

            <!-- Ana Paragraf -->
            <div>
                <label for="mainparagraph" class="block text-lg font-medium text-gray-700 mb-2">Ana Paragraf:</label>
                <textarea name="mainparagraph" class="w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400" rows="2" placeholder="Ana paragrafınızı buraya yazın..."><?= esc($about['mainparagraph']) ?></textarea>
            </div>

            <!-- Misyon -->
            <div>
                <label for="mission" class="block text-lg font-medium text-gray-700 mb-2">Misyon:</label>
                <textarea name="mission" class="w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400" rows="2" placeholder="Misyonunuzu buraya yazın..."><?= esc($about['mission']) ?></textarea>
            </div>

            <!-- Vizyon -->
            <div>
                <label for="vision" class="block text-lg font-medium text-gray-700 mb-2">Vizyon:</label>
                <textarea name="vision" class="w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400" rows="2" placeholder="Vizyonunuzu buraya yazın..."><?= esc($about['vision']) ?></textarea>
            </div>

            <!-- Paragraf 2 -->
            <div>
                <label for="paragraph2" class="block text-lg font-medium text-gray-700 mb-2">Paragraf 2:</label>
                <textarea name="paragraph2" class="w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400" rows="2" placeholder="İkinci paragrafınızı buraya yazın..."><?= esc($about['paragraph2']) ?></textarea>
            </div>

            <!-- Paragraf 3 -->
            <div>
                <label for="paragraph3" class="block text-lg font-medium text-gray-700 mb-2">Paragraf 3:</label>
                <textarea name="paragraph3" class="w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400" rows="2" placeholder="Üçüncü paragrafınızı buraya yazın..."><?= esc($about['paragraph3']) ?></textarea>
            </div>

            <!-- Güncelleme Butonu -->
            <div class="flex justify-end">
                <button type="submit" class="bg-[#475569] text-white px-4 py-3 rounded-md hover:bg-[#475569]/80 text-lg">Güncelle</button>
            </div>
        </form>
    <?php else: ?>
        <p class="text-center text-gray-500">Hakkımızda bilgisi bulunamadı.</p>
    <?php endif; ?>
</div>
