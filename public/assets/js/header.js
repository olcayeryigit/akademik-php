const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
const hamburgerIcon = document.getElementById('hamburger-icon');
const closeIcon = document.getElementById('close-icon');

// Hamburger ikonu tıklandığında mobile menüyü açma ve kapama
mobileMenuButton.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
  
  // Hamburger ve Close ikonlarını toggle etme
  hamburgerIcon.classList.toggle('hidden');
  closeIcon.classList.toggle('hidden');
});


//Bu kod, bir bağlantıya tıklandığında sayfayı yeniden yüklemeden, mevcut sayfada sadece belirli bir bölüme gitmeye olanak tanır. Ancak, burada normalde sayfa tazelenmez, sadece URL'nin değiştirilmesi sağlanır (bu, tek sayfa uygulamaları veya sayfa içi geçişlerde kullanışlı olabilir).
//blog detayları görüntülenirken anasayfaya gitmek istediğimde anasayfaya gidilir
document.querySelectorAll('.nav-link').forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault();  // Varsayılan bağlantı davranışını engeller
    const sectionId = this.getAttribute('href');  // Href değerini alır (örneğin, #home, #about, vb.)
    
    // Yeni URL'yi oluşturur ve sayfayı yeni bölüme yönlendirir
    window.location.href = window.location.origin + sectionId;
  });
});




