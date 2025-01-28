<section id="main" class="relative">
<div class="container mx-auto mt-6 md:mt-12 px-2 md:px-0 ">
<div class="flex flex-col md:flex-row justify-between gap-4 ">
  <!-- Main Slider -->


<div class="main-swiper-container overflow-hidden w-full md:h-full  relative rounded-xl">
  <div class="swiper-wrapper ">
    <div class="swiper-slide"> 
         <img src="/assets/slider-1.jpg" class="w-full h-full rounded-xl  object-contain"/>
    </div>
    <div class="swiper-slide"> 
         <img src="/assets/slider-2.jpg" class="w-full h-full rounded-xl  object-contain"/>
    </div>
  </div>
<!-- Navigation Arrows -->
  <div class="main-swiper-button-prev z-50  absolute  left-4 bottom-2  md:left-10 md:bottom-4 ">
<img src="/assets/icons/yon-oklari-yuvarlak-beyaz.svg" class="h-8 md:h-12 "/>
  </div>
  <div class="main-swiper-button-next z-50 absolute left-4  bottom-12  md:left-10  md:bottom-20">
  <img src="/assets/icons/yon-oklari-yuvarlak-beyaz.svg" class="h-8 md:h-12 rotate-180"/>

  </div>
</div> 

  <!-- Main Slider Sonu -->




<div class=" w-full hidden lg:block lg:w-1/3  flex flex-col">
 <!-- FORM -->
 <div class="p-1 animate-bg-color rounded-2xl shadow-md m ">   
  <div class="px-3 py-2 bg-white rounded-xl  ">

    <div class="flex items-center gap-2 mb-2">
      <img src="/assets/icons/bilgi-formu-icon.svg" class="h-8"/>
      <p class="text-lg "><span class="font-extrabold">Ön Bilgi</span> Formu</p>
    </div>
    <form class="space-y-1">
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
      <div class="">
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

<div class="mt-2 relative ">
 <img src="/assets/duyuru-kart.jpg" class="h-full object-contain rounded-xl">
 <img src="/assets/duyuru-icon.svg" class="absolute top-0 w-28 right-8 object-contain"/>

</div>
 <!-- RESİM SONU -->

</div>
</div>
</div>

</section>