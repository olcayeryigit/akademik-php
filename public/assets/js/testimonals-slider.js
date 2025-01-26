const testimonialsSwiper = new Swiper('.testimonials-swiper-container', {

  loop: true, // Döngüsel kaydırma
  slidesPerView: 1, // Varsayılan: Tek slayt göster
  spaceBetween: 20, // Slaytlar arası boşluk
  breakpoints: {
    640: {
      slidesPerView: 1, // Mobil cihazlar için tek slayt
    },
    768: {
      slidesPerView: 2, // Orta ekranlarda 2 slayt
    },
    1024: {
      slidesPerView: 4, // Büyük ekranlarda 3 slayt
    },
  },
});
