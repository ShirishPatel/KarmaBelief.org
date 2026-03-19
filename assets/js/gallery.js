// Gallery filter
const filterButtons = document.querySelectorAll('.filter-btn');
const galleryItems = document.querySelectorAll('.gallery-item');

filterButtons.forEach(button => {
  button.addEventListener('click', () => {
    const filter = button.dataset.filter;
    
    filterButtons.forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');
    
    galleryItems.forEach(item => {
      if (filter === 'all' || item.dataset.category === filter) {
        item.style.display = 'block';
        setTimeout(() => item.style.opacity = '1', 10);
      } else {
        item.style.opacity = '0';
        setTimeout(() => item.style.display = 'none', 300);
      }
    });
  });
});

// Lightbox
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const lightboxCaption = document.getElementById('lightbox-caption');
const closeBtn = document.querySelector('.lightbox-close');
const prevBtn = document.querySelector('.lightbox-prev');
const nextBtn = document.querySelector('.lightbox-next');

let currentIndex = 0;
let visibleImages = [];

function updateVisibleImages() {
  visibleImages = Array.from(galleryItems).filter(item => item.style.display !== 'none');
}

galleryItems.forEach((item, index) => {
  item.addEventListener('click', () => {
    updateVisibleImages();
    currentIndex = visibleImages.indexOf(item);
    openLightbox(item);
  });
});

function openLightbox(item) {
  const img = item.querySelector('img');
  lightboxImg.src = img.src;
  lightboxCaption.textContent = img.alt;
  lightbox.classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeLightbox() {
  lightbox.classList.remove('active');
  document.body.style.overflow = '';
}

function showNext() {
  currentIndex = (currentIndex + 1) % visibleImages.length;
  openLightbox(visibleImages[currentIndex]);
}

function showPrev() {
  currentIndex = (currentIndex - 1 + visibleImages.length) % visibleImages.length;
  openLightbox(visibleImages[currentIndex]);
}

if (closeBtn) closeBtn.addEventListener('click', closeLightbox);
if (nextBtn) nextBtn.addEventListener('click', showNext);
if (prevBtn) prevBtn.addEventListener('click', showPrev);

if (lightbox) {
  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) closeLightbox();
  });
}

document.addEventListener('keydown', (e) => {
  if (!lightbox.classList.contains('active')) return;
  if (e.key === 'Escape') closeLightbox();
  if (e.key === 'ArrowRight') showNext();
  if (e.key === 'ArrowLeft') showPrev();
});
