// ── Mobile menu ──
const burger = document.getElementById('burger');
const mobileMenu = document.getElementById('mobile-menu');
let menuOpen = false;
if (burger) {
  burger.addEventListener('click', () => {
    menuOpen = !menuOpen;
    mobileMenu.classList.toggle('hidden', !menuOpen);
  });
}
function closeMenu() { menuOpen = false; if (mobileMenu) mobileMenu.classList.add('hidden'); }

// ── Slider (safe — elements may not exist) ──
const track = document.getElementById('slider-track');
if (track) {
  const slides = track.querySelectorAll('.slide');
  const dotsContainer = document.getElementById('dots');
  let current = 0;

  function getSlidesPerView() {
    if (window.innerWidth >= 1024) return 3;
    if (window.innerWidth >= 640) return 2;
    return 1;
  }
  function totalSlides() { return Math.ceil(slides.length / getSlidesPerView()); }
  function buildDots() {
    if (!dotsContainer) return;
    dotsContainer.innerHTML = '';
    for (let i = 0; i < totalSlides(); i++) {
      const d = document.createElement('button');
      d.className = `w-2 h-2 rounded-full transition-all ${i === current ? 'bg-[#00e5ff] w-6' : 'bg-slate-600'}`;
      d.addEventListener('click', () => goTo(i));
      dotsContainer.appendChild(d);
    }
  }
  function goTo(idx) {
    current = Math.max(0, Math.min(idx, totalSlides() - 1));
    const perView = getSlidesPerView();
    const slideW = slides[0] ? slides[0].offsetWidth : 0;
    const gap = 24;
    const offset = current * perView * (slideW + gap);
    track.style.transform = `translateX(-${offset}px)`;
    buildDots();
  }
  const prevBtn = document.getElementById('prev');
  const nextBtn = document.getElementById('next');
  if (prevBtn) prevBtn.addEventListener('click', () => goTo(current - 1));
  if (nextBtn) nextBtn.addEventListener('click', () => goTo(current + 1));
  window.addEventListener('resize', () => { current = 0; goTo(0); });
  buildDots();
}

// ── Scroll reveal ──
const revealEls = document.querySelectorAll('.reveal');
const observer = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) { e.target.classList.add('visible'); }
  });
}, { threshold: 0.1 });
revealEls.forEach(el => observer.observe(el));

// ── Smooth scroll on nav links ──
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const target = document.querySelector(a.getAttribute('href'));
    if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth' }); }
  });
});