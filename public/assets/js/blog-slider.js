const Blog2Swiper = new Swiper('.blog-swiper-container', {
  navigation: {
    nextEl: '.blog-swiper-button-next',
    prevEl: '.blog-swiper-button-prev',
  },
  loop: true, // Slaytlar döngüsel
  slidesPerView: 1, // Küçük ekranlarda 1 slayt gösterilecek
  spaceBetween: 10, // Slaytlar arasındaki boşluk
  breakpoints: {
    480: {
      slidesPerView: 2, // Çok küçük ekranlarda 2 slayt gösterilecek
      spaceBetween: 15, // Daha fazla boşluk
    },
    768: {
      slidesPerView: 2, // 768px ve üzeri ekranlarda 3 slayt gösterilecek
      spaceBetween: 20, // Daha fazla boşluk
    },
    1024: {
      slidesPerView: 3, // 768px ve üzeri ekranlarda 3 slayt gösterilecek
      spaceBetween: 20, // Daha fazla boşluk
    },
    1200: {
      slidesPerView: 4, // 1024px ve üzeri ekranlarda 4 slayt gösterilecek
      spaceBetween: 15, // Daha fazla boşluk
    },
   
  },
});
