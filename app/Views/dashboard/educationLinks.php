<div class="bg-green-500 p-6">
    <h2 class="text-xl font-bold text-white mb-4">Education Links</h2>

    <form action="<?= site_url('educationLinks/update') ?>" method="post">
        <input type="hidden" name="id" value="<?= esc($educationLinks['id']) ?>" />
        
        <div class="mb-4">
            <label for="links" class="text-white block mb-2">Update Links (separate by commas)</label>
            <input type="text" name="links" id="links" value="<?= esc(implode(',', (array)$educationLinks['links'])) ?>" class="rounded p-2 w-full" required />
        </div>

        <button type="submit" class="bg-blue-500 text-white p-2 rounded mt-4">Update All Links</button>
    </form>
</div>
