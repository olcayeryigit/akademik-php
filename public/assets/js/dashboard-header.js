const dropdownButton = document.getElementById('dropdownButton');
const dropdownMenu = document.getElementById('dropdownMenu');

// Dropdown menüsünü göster ve gizle
dropdownButton.addEventListener('click', () => {
  dropdownMenu.classList.toggle('hidden');
});