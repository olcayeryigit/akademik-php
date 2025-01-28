//DROPDOWN
const dropdownButton = document.getElementById('dropdownButton');
const dropdownMenu = document.getElementById('dropdownMenu');

// Dropdown menüsünü göster ve gizle
dropdownButton.addEventListener('click', () => {
  dropdownMenu.classList.toggle('hidden');
});






///TOGGLE CONTAİNER GÖSTERİMİ
document.addEventListener("DOMContentLoaded", function() {
  const blogLink = document.getElementById("blogLink");
  const blogContainer = document.getElementById("blog-container");
  const duyuruLink = document.getElementById("duyuruLink");
  const duyuruContainer = document.getElementById("duyuru-container");

  // Blog linkine tıklandığında çalışacak fonksiyon
  blogLink.addEventListener("click", function(event) {
      event.preventDefault(); // Linkin varsayılan davranışını engelle
      
      // Eğer container gizliyse, görünür yap, görünürse gizle
      if (blogContainer.style.display === "none" || blogContainer.style.display === "") {
          blogContainer.style.display = "block"; // Görünür yap
      } 

      if (duyuruContainer.style.display === "block") {
          duyuruContainer.style.display = "none"; // Görünür yap
      } 

      
  });





  // Duyuru linkine tıklandığında çalışacak fonksiyon
  duyuruLink.addEventListener("click", function(event) {
      event.preventDefault(); // Linkin varsayılan davranışını engelle
                  blogContainer.style.display = "none"; // Görünür yap

      // Eğer container gizliyse, görünür yap, görünürse gizle
      if (duyuruContainer.style.display === "none" || duyuruContainer.style.display === "") {
          duyuruContainer.style.display = "block"; // Görünür yap
      } 

    
  });


});
