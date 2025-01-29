<div class="about-container container mx-auto p-6" id="about-container" style="display: none;">
    <?php if (!empty($about)): ?>
        <h2>Kurumsal</h2>

        <!-- Güncelleme Formu -->
        <form action="<?= site_url('/about/update') ?>" method="post">
            <input type="hidden" name="id" value="<?= esc($about['id']) ?>">

            <label for="mainparagraph">Ana Paragraf:</label>
            <textarea name="mainparagraph" class="w-full p-2 border"><?= esc($about['mainparagraph']) ?></textarea>

            <label for="mission">Misyon:</label>
            <textarea name="mission" class="w-full p-2 border"><?= esc($about['mission']) ?></textarea>

            <label for="vision">Vizyon:</label>
            <textarea name="vision" class="w-full p-2 border"><?= esc($about['vision']) ?></textarea>

            <label for="paragraph2">Paragraf 2:</label>
            <textarea name="paragraph2" class="w-full p-2 border"><?= esc($about['paragraph2']) ?></textarea>

            <label for="paragraph3">Paragraf 3:</label>
            <textarea name="paragraph3" class="w-full p-2 border"><?= esc($about['paragraph3']) ?></textarea>

            <!-- Tek bir güncelleme butonu -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-4">Güncelle</button>
        </form>
    <?php else: ?>
        <p>Hakkımızda bilgisi bulunamadı.</p>
    <?php endif; ?>
</div>
