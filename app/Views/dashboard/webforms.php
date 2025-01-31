<div class="webform-container container mx-auto" id="webform-container" style="display: none;">
    <h1 class="text-3xl font-semibold text-center text-gray-900 my-6">Form Verileri</h1>

    <table class="w-4/5 mx-auto bg-white border border-gray-300 shadow-lg  overflow-hidden ">
        <thead class="bg-[#334155]/20 text-gray-800">
            <tr>
                <th class="px-6 py-4 text-left font-medium">Ad</th>
                <th class="px-6 py-4 text-left font-medium">Soyad</th>
                <th class="px-6 py-4 text-left font-medium">Telefon</th>
                <th class="px-6 py-4 text-left font-medium">Mesaj</th>
                <th class="px-6 py-4 text-left font-medium">Tarih</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            <?php foreach ($webforms as $form): ?>
                <tr class="border-b">
                    <td class="px-6 py-4"><?= esc($form['name']) ?></td>
                    <td class="px-6 py-4"><?= esc($form['lastname']) ?></td>
                    <td class="px-6 py-4"><?= esc($form['phone']) ?></td>
                    <td class="px-6 py-4"><?= esc($form['message']) ?></td>
                    <td class="px-6 py-4"><?= esc($form['created_at']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
