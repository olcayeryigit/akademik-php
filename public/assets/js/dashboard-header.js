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
    const imageSectionLink = document.getElementById("imageSectionLink");
    const imageSectionContainer = document.getElementById("image-section-container");
    const mainContentLink = document.getElementById("mainContentLink");
    const mainContentContainer = document.getElementById("main-content-container");
    const testimonalsLink = document.getElementById("testimonalsLink");
    const testimonalsContainer = document.getElementById("testimonals-container");

    // Yeni eklenen webform container ve link
    const webformLink = document.getElementById("webformLink");
    const webformContainer = document.getElementById("webform-container");

    // Tüm container'ları gizle
    function hideAllContainers() {
        blogContainer.style.display = "none";
        duyuruContainer.style.display = "none";
        aboutContainer.style.display = "none";
        imageSectionContainer.style.display = "none";
        mainContentContainer.style.display = "none";
        testimonalsContainer.style.display = "none";
        webformContainer.style.display = "none"; // Webform container'ını da gizle
    }

    blogLink.addEventListener("click", function(event) {
        event.preventDefault();
        hideAllContainers();
        blogContainer.style.display = "block";
    });

    duyuruLink.addEventListener("click", function(event) {
        event.preventDefault();
        hideAllContainers();
        duyuruContainer.style.display = "block";
    });

    aboutLink.addEventListener("click", function(event) {
        event.preventDefault();
        hideAllContainers();
        aboutContainer.style.display = "block";
    });

    imageSectionLink.addEventListener("click", function(event) {
        event.preventDefault();
        hideAllContainers();
        imageSectionContainer.style.display = "block";
    });

    mainContentLink.addEventListener("click", function(event) {
        event.preventDefault();
        hideAllContainers();
        mainContentContainer.style.display = "block";
    });

    testimonalsLink.addEventListener("click", function(event) {
        event.preventDefault();
        hideAllContainers();
        testimonalsContainer.style.display = "block";
    });

    // Webform linkine tıklandığında çalışacak fonksiyon
    webformLink.addEventListener("click", function(event) {
        event.preventDefault();
        hideAllContainers();
        webformContainer.style.display = "block";
    });
});
