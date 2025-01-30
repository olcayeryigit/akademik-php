const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

// Hamburger ikonu tıklandığında mobile menüyü açma ve kapama
mobileMenuButton.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
  mobileMenuButton.classList.toggle('active');
});



