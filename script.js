const photosContainer = document.getElementById("photos");
const prevButton = document.getElementById("prev");
const nextButton = document.getElementById("next");
let photoWidth;
let currentIndex = 0;
const totalPhotos = document.querySelectorAll(".photo").length;
let galleryWidth;

function updateSizes() {
  // Обновляем значения, так как они могут меняться при ресайзе
  photoWidth = document.querySelector(".photo").offsetWidth + 15; // Добавляем отступ
  galleryWidth = document.querySelector(".gallery").offsetWidth;
}

function updateGallery() {
  updateSizes();
  const visiblePhotos = Math.max(1, Math.floor(galleryWidth / photoWidth)); // Минимум 1 видимое фото

  const maxTranslateX = (totalPhotos - visiblePhotos) * photoWidth;
  let translateX = -currentIndex * photoWidth;

  translateX = Math.max(translateX, -maxTranslateX);
  translateX = Math.min(translateX, 0);

  photosContainer.style.transform = `translateX(${translateX}px)`;

  prevButton.classList.toggle("hidden", currentIndex === 0);
  nextButton.classList.toggle(
    "hidden",
    translateX === -maxTranslateX || totalPhotos <= visiblePhotos
  );
}

nextButton.addEventListener("click", () => {
  currentIndex++;
  updateGallery();
});

prevButton.addEventListener("click", () => {
  currentIndex--;
  updateGallery();
});

window.addEventListener("load", () => {
  updateSizes();
  updateGallery();
});
window.addEventListener("resize", () => {
  updateSizes();
  updateGallery();
});
