const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

// Hamburger ikonu tıklandığında mobile menüyü açma ve kapama
mobileMenuButton.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
  mobileMenuButton.classList.toggle('active');
});



document.addEventListener('DOMContentLoaded', function() {
  // Dropdown butonunu seç
  const dropdownButton = document.getElementById('dropdownButton1');
  // Dropdown menüsünü seç
  const dropdownMenu = document.getElementById('dropdownMenu1');

  // Dropdown butonuna tıklandığında
  dropdownButton.addEventListener('click', function(event) {
      event.preventDefault(); // Sayfanın yeniden yüklenmesini engelle
      // Dropdown menüsünü toggle et (gizle veya göster)
      dropdownMenu.classList.toggle('hidden');
  });

  // Dropdown menüsünün dışına tıklanırsa menüyü kapat
  document.addEventListener('click', function(event) {
      // Eğer tıklanan alan dropdown butonu veya menüsü değilse, menüyü kapat
      if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
          dropdownMenu.classList.add('hidden');
      }
  });
});
