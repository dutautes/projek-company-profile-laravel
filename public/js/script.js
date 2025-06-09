const navbar = document.getElementById('mainNavbar'); //navbar adjusment

window.addEventListener('scroll', () => {
  // kalau sudah lewat 50 px dari atas, tambah class
  if (window.scrollY > 50) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

// function filter kategori pakaian
function filterKategori(nama) {
    const cards = document.querySelectorAll('.fashion-card');
    cards.forEach(card => {
        const namaCard = card.getAttribute('data-kategori');
        if (nama === 'all' || namaCard === nama) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}
