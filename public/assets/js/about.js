
const misyonContent = document.getElementById('misyonContent');
const misyonButton = document.getElementById('misyonButton');
const misyonIcon = document.getElementById('misyonIcon');
const misyonButtonText = document.getElementById('misyonButtonText');

misyonButton.addEventListener('click', () => {
  if (misyonContent.classList.contains('line-clamp-3')) {
    misyonContent.classList.remove('line-clamp-3');
    misyonButtonText.textContent = 'Daha Az Gör';
    misyonIcon.classList.add('rotate-180'); // Ok ikonu yukarıya döner
  } else {
    misyonContent.classList.add('line-clamp-3');
    misyonButtonText.textContent = 'Daha Fazla Gör';
    misyonIcon.classList.remove('rotate-180'); // Ok ikonu aşağıya döner
  }
});

const vizyonContent = document.getElementById('vizyonContent');
const vizyonButton = document.getElementById('vizyonButton');
const vizyonIcon = document.getElementById('vizyonIcon');
const vizyonButtonText = document.getElementById('vizyonButtonText');

vizyonButton.addEventListener('click', () => {
  if (vizyonContent.classList.contains('line-clamp-3')) {
    vizyonContent.classList.remove('line-clamp-3');
    vizyonButtonText.textContent = 'Daha Az Gör';
    vizyonIcon.classList.add('rotate-180'); // Ok ikonu yukarıya döner
  } else {
    vizyonContent.classList.add('line-clamp-3');
    vizyonButtonText.textContent = 'Daha Fazla Gör';
    vizyonIcon.classList.remove('rotate-180'); // Ok ikonu aşağıya döner
  }
});
