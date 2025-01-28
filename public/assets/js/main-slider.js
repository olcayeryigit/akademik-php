const mainSwiper = new Swiper('.main-swiper-container', {
    navigation: {
      nextEl: '.main-swiper-button-next',
      prevEl: '.main-swiper-button-prev',
    },
    loop: true, // İsteğe bağlı,
    autoplay: {
      delay: 3000, // Her slayt arasında 3 saniye gecikme
      disableOnInteraction: false, // Kullanıcı etkileşimi sonrası otomatik geçiş durmaz
    },
  });
  