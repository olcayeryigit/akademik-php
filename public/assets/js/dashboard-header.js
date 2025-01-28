const dropdownButton = document.getElementById('dropdownButton');
const dropdownMenu = document.getElementById('dropdownMenu');

// Dropdown menüsünü göster ve gizle
dropdownButton.addEventListener('click', () => {
  dropdownMenu.classList.toggle('hidden');
});

document.addEventListener("DOMContentLoaded", function() {
    const blogLink = document.getElementById("blogLink");
    const blogContainer = document.getElementById("blog-container");
    const duyuruLink = document.getElementById("announcementLink");
    const duyuruContainer = document.getElementById("announcement-container");
    const aboutLink = document.getElementById("aboutLink");
    const aboutContainer = document.getElementById("about-container");
  
    // Tüm container'ları gizle
    function hideAllContainers() {
        blogContainer.style.display = "none";
        duyuruContainer.style.display = "none";
        aboutContainer.style.display = "none";
    }
  
    // Blog linkine tıklandığında çalışacak fonksiyon
    blogLink.addEventListener("click", function(event) {
        event.preventDefault(); // Linkin varsayılan davranışını engelle
        hideAllContainers(); // Tüm container'ları gizle
  
        // Blog container'ını göster
        blogContainer.style.display = "block";
    });
  
    // Duyuru linkine tıklandığında çalışacak fonksiyon
    duyuruLink.addEventListener("click", function(event) {
        event.preventDefault(); // Linkin varsayılan davranışını engelle
        hideAllContainers(); // Tüm container'ları gizle
  
        // Duyuru container'ını göster
        duyuruContainer.style.display = "block";
    });
  
    // About linkine tıklandığında çalışacak fonksiyon
    aboutLink.addEventListener("click", function(event) {
        event.preventDefault(); // Linkin varsayılan davranışını engelle
        hideAllContainers(); // Tüm container'ları gizle
  
        // About container'ını göster
        aboutContainer.style.display = "block";
    });
  });
  