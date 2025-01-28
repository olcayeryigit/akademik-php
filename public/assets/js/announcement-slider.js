const BlogSwiper = new Swiper('.announcement-swiper-container', {
    navigation: {
      nextEl: '.announcement-swiper-button-next',
      prevEl: '.announcement-swiper-button-prev',
    },
    loop: true, // Slaytlar döngüsel
    slidesPerView: 1, // Her sayfada yalnızca 1 slayt gösterilecek
    spaceBetween: 0, // Slaytlar arasında boşluk olmayacak
    centeredSlides: true, // Slaytlar ortalanacak
    autoplay: {
      delay: 3000, // Her slayt arasında 3 saniye gecikme
      disableOnInteraction: false, // Kullanıcı etkileşimi sonrası otomatik geçiş durmaz
    },
  });
  