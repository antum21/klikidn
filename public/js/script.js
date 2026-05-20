    // ── Intersection Observer for card entrance animation ──
    const cards = document.querySelectorAll('.promo-card');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('visible');
          observer.unobserve(e.target);
        }
      });
    }, { threshold: 0.15 });
    cards.forEach(c => observer.observe(c));

    // ── Card click → change hero color & banner ──
    function activateCard(card) {
      // Remove active from others
      document.querySelectorAll('.promo-card').forEach(c => c.classList.remove('active-card'));
      card.classList.add('active-card');

      const color = card.dataset.color;
      const img   = card.dataset.img;
      const hero  = document.getElementById('hero');
      const bannerImg = document.getElementById('heroBannerImg');

      hero.style.background = color;

      if (img) {
        bannerImg.src = img;
        bannerImg.classList.add('active');
      } else {
        bannerImg.classList.remove('active');
        bannerImg.src = '';
      }
    }



    const slides     = document.querySelectorAll('.slide-img');
const dotsWrap   = document.getElementById('slideDots');
let currentSlide = 0;
let autoTimer    = null;
const INTERVAL   = 4000; // ganti angka ini untuk ubah kecepatan (ms)
 
// Buat dots otomatis sesuai jumlah slide
slides.forEach((_, i) => {
  const dot = document.createElement('button');
  dot.classList.add('slide-dot');
  if (i === 0) dot.classList.add('active');
  dot.addEventListener('click', () => goToSlide(i));
  dotsWrap.appendChild(dot);
});
 
function goToSlide(index) {
  slides[currentSlide].classList.remove('active');
  dotsWrap.children[currentSlide].classList.remove('active');
 
  currentSlide = (index + slides.length) % slides.length;
 
  slides[currentSlide].classList.add('active');
  dotsWrap.children[currentSlide].classList.add('active');
 
  // Reset timer supaya tidak langsung loncat setelah klik manual
  resetAutoSlide();
}
 
function nextSlide() { goToSlide(currentSlide + 1); }
function prevSlide()  { goToSlide(currentSlide - 1); }
 
function startAutoSlide() {
  autoTimer = setInterval(() => goToSlide(currentSlide + 1), INTERVAL);
}
 
function resetAutoSlide() {
  clearInterval(autoTimer);
  startAutoSlide();
}
 
// Mulai auto slide
startAutoSlide();
 
// Pause saat hover di hero
const hero = document.getElementById('hero');
hero.addEventListener('mouseenter', () => clearInterval(autoTimer));
hero.addEventListener('mouseleave', () => startAutoSlide());
 
 
// ── CARD CLICK → GANTI SLIDE PERTAMA ──────────────────────
function activateCard(card) {
  // Tandai card aktif
  document.querySelectorAll('.promo-card').forEach(c => c.classList.remove('active-card'));
  card.classList.add('active-card');
 
  // Ganti warna hero
  const color = card.dataset.color;
  if (color) hero.style.background = color;
 
  // Ganti gambar slide pertama (index 0) dengan gambar dari card
  const img = card.dataset.img;
  if (img && slides.length > 0) {
    slides[0].src = img;
  }
 
  // Langsung tampilkan slide pertama
  goToSlide(0);
}

function toggleMenu() {
  const btn  = document.getElementById('hamburger');
  const menu = document.getElementById('mobileMenu');

  btn.classList.toggle('open');
  menu.classList.toggle('open');
}

// Tutup menu saat klik di luar
document.addEventListener('click', (e) => {
  const nav  = document.querySelector('nav');
  const menu = document.getElementById('mobileMenu');
  const btn  = document.getElementById('hamburger');

  if (!nav.contains(e.target)) {
    menu.classList.remove('open');
    btn.classList.remove('open');
  }
});