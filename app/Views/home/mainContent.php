<?php if (!empty($mainContent)): ?>
<section id="main" class="relative">

<div class="container mx-auto mt-6 md:mt-12 px-2 md:px-0 ">
  <div class="flex flex-col lg:flex-row justify-between gap-4 ">
    <!-- Main Slider -->
    <div class="main-swiper-container overflow-hidden w-full  md:h-full relative rounded-xl">
      <div class="swiper-wrapper rounded-xl ">
        <?php 
          $mainImages = json_decode($mainContent[0]['mainImage'], true); // mainImage JSON'dan PHP dizisine dönüştürülür
          foreach ($mainImages as $image): 
        ?>
        <div class="swiper-slide rounded-xl"> 
          <img src="<?= base_url('' . $image); ?>" class="w-full h-full  rounded-xl object-contain" alt="bursa koleji"/>
        </div>
        <?php endforeach; ?>
      </div>

      <!-- Navigation Arrows -->
      <div class="main-swiper-button-prev z-50 absolute left-4 bottom-2 md:left-10 md:bottom-4">
        <img src="/assets/icons/yon-oklari-yuvarlak-beyaz.svg" class="h-8 md:h-12 "/>
      </div>
      <div class="main-swiper-button-next z-50 absolute left-4 bottom-12 md:left-10 md:bottom-20">
        <img src="/assets/icons/yon-oklari-yuvarlak-beyaz.svg" class="h-8 md:h-12 rotate-180"/>
      </div>
    </div>
    <!-- Main Slider Sonu -->
   
    <!-- Form ve Resim -->
    <div class="w-full lg:w-1/3 flex flex-col">
      <!-- FORM -->
      <div class="hidden lg:block p-1 animate-bg-color rounded-2xl shadow-md ">
        <div class="px-3 py-2 bg-white rounded-xl">
          <div class="flex items-center gap-2 mb-2">
            <img src="/assets/icons/bilgi-formu-icon.svg" class="h-8"/>
            <p class="text-lg"><span class="font-extrabold">Ön Bilgi</span> Formu</p>
          </div>
          <?php
$baseURL = getenv('app.baseURL');
?>
       <form class="mt-4 space-y-2" action="<?= site_url('submit_form'); ?>" method="POST" id="myForm">
    <!-- Ad -->
    <div>
        <label for="name" class="block text-xs text-black font-semibold">Adınız</label>
        <div class="relative group">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                <img src="/assets/icons/name.svg" class="h-5 bg-[#E8E6E7] p-1 rounded-full" />
            </span>
            <input
                type="text"
                id="name"
                name="name"
                class="mt-1 block w-full pl-8 px-2.5 py-1 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-red-600 text-xs"
                placeholder="Adınız"
                required
            />
        </div>
    </div>

    <!-- Soyad -->
    <div>
        <label for="lastname" class="block text-xs text-black font-semibold">Soyadınız</label>
        <div class="relative group">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                <img src="/assets/icons/name.svg" class="h-5 bg-[#E8E6E7] p-1 rounded-full" />
            </span>
            <input
                type="text"
                id="lastname"
                name="lastname"
                class="mt-1 block w-full pl-8 px-2.5 py-1 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-red-600 text-xs"
                placeholder="Soyadınız"
                required
            />
        </div>
    </div>

    <!-- Telefon Numarası -->
    <div>
        <label for="phone" class="block text-xs text-black font-semibold">Telefon Numaranız</label>
        <div class="relative group">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                <img src="/assets/icons/phone-alt.svg" class="h-5 bg-[#E8E6E7] p-1 rounded-full" />
            </span>
            <input
                type="tel"
                id="phone"
                name="phone"
                class="mt-1 block w-full pl-8 px-2.5 py-1 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-red-600 text-xs"
                placeholder="Telefon numaranız"
                required
            />
        </div>
    </div>

    <!-- Mesaj -->
    <div>
        <label for="message" class="block text-xs text-black font-semibold">Mesajınız</label>
        <textarea
            id="message"
            name="message"
            rows="2"
            class="mt-1 block w-full px-2.5 py-1 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-red-600 text-xs"
            placeholder="Mesajınızı yazınız"
            required
        ></textarea>
    </div>

    <!-- Gönder Butonu -->
    <div>
        <button
            type="submit"
            class="w-full px-2.5 py-1.5 text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-xs transition duration-300 ease-in-out flex items-center justify-center gap-1"
        >
            <img src="/assets/icons/send.svg" class="h-4 object-contain"/>
            <span class="text-xs">Gönder</span>
        </button>
    </div>
</form>
        </div>
      </div>
      <!-- FORM SONU -->

      <!-- RESİM -->
      <div class="mt-2 relative hidden lg:block">
        <img src="<?= base_url('' . $mainContent[0]['image2']); ?>" class="h-full object-contain rounded-xl ">
        <img src="/assets/icons/duyuru-icon.svg" class="absolute -top-1 w-28 right-8 object-contain z-10"/>
      </div>
      <!-- RESİM SONU -->
    </div>
    <!-- Form ve Resim Sonu -->
  </div>
</div>

</section>
<?php endif; ?>
<script>
  // Form gönderildiğinde
document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Sayfa yenilenmesinin engellenmesi

    var formData = new FormData(this);

    fetch('<?= site_url('submit_form'); ?>', { // 'submit_form' URL'sine POST isteği gönder
        method: 'POST',
        body: formData
    })
    .then(response => response.json())  // JSON yanıtını parse et
    .then(data => {
        // Yanıt başarı durumuna göre
        if (data.status === 'success') {
            Swal.fire({
                icon: 'success',
                title: 'Başarıyla Gönderildi',
                text: data.message,  // Mesajı al ve göster
            }).then(() => {
                // Formu sıfırlama
                document.getElementById('myForm').reset();
            });
        } else if (data.status === 'error') {
            Swal.fire({
                icon: 'error',
                title: 'Hata',
                text: data.message,  // Hata mesajını al ve göster
            });
        }
    })
    .catch(error => {
        Swal.fire({
            icon: 'error',
            title: 'Hata',
            text: 'Bir hata oluştu, lütfen tekrar deneyin.',
        });
    });
});

  </script>