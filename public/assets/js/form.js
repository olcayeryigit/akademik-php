const formContainer = document.getElementById('formContainer');
const toggleButton = document.getElementById('toggleButton');
const openIcon = document.getElementById('openIcon');
const closeIcon = document.getElementById('closeIcon');
const buttonText = document.getElementById('buttonText');

toggleButton.addEventListener('click', () => {
  if (formContainer.classList.contains('-right-[285px]')) {
    // Form görünür hale getiriliyor
    formContainer.classList.remove('-right-[285px]');
    formContainer.classList.add('right-0');

    // Buton boyutu değişiyor
    toggleButton.classList.remove('w-32');
    toggleButton.classList.add('w-20');
    toggleButton.classList.remove('-left-[79px]');
    toggleButton.classList.add('-left-[56px]');

    // İçerik değişimi hemen yapılıyor
    openIcon.classList.add('hidden');
    closeIcon.classList.remove('hidden');
    buttonText.textContent = 'Kapat'; // Yazıyı "Kapat" olarak değiştir
  } else {
    // Form gizleniyor
    formContainer.classList.remove('right-0');
    formContainer.classList.add('-right-[285px]');

    // Buton boyutu değişiyor
    toggleButton.classList.remove('w-20');
    toggleButton.classList.add('w-32');
    toggleButton.classList.remove('-left-[56px]');
    toggleButton.classList.add('-left-[79px]');

    // İçerik değişimi hemen yapılıyor
    closeIcon.classList.add('hidden');
    openIcon.classList.remove('hidden');
    buttonText.textContent = 'Ön Bilgi Formu'; // Yazıyı "Ön Bilgi Formu" olarak geri değiştir
  }
});
