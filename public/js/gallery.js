/* === GALLERY PAGE === */
document.addEventListener("DOMContentLoaded", function() {

    /* ==============================================
       1. ANIMASI FADE-IN SAAT DI-SCROLL
       ============================================== */
    const projectCards = document.querySelectorAll('.work-item');

    projectCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'all 0.5s ease-out';
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    projectCards.forEach(card => {
        observer.observe(card);
    });

    /* ==============================================
       2. FITUR FILTER KATEGORI (ALL, A, B, C)
       ============================================== */
    const filterBtns = document.querySelectorAll('.filter-btn');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Hapus warna biru (active) dari semua tombol, lalu aktifkan yang diklik
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filterValue = btn.getAttribute('data-filter');

            // Cek setiap kartu proyek
            projectCards.forEach(card => {
                const category = card.getAttribute('data-category');
                
                if (filterValue === 'all' || filterValue === category) {
                    card.style.display = 'block'; // Munculkan
                    // Sedikit delay biar animasinya mulus pas difilter
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    card.style.display = 'none'; // Sembunyikan
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.8)';
                }
            });
        });
    });

    /* ==============================================
       3. FITUR SLIDER GAMBAR (NEXT / PREV)
       ============================================== */
    const sliders = document.querySelectorAll('.card-slider');

    sliders.forEach(slider => {
        const slidesContainer = slider.querySelector('.card-slides');
        const images = slider.querySelectorAll('.card-slides img');
        const prevBtn = slider.querySelector('.prev-btn');
        const nextBtn = slider.querySelector('.next-btn');
        let currentIndex = 0;

        function updateSlider() {
            // Geser gambar berdasarkan index (0%, -100%, -200%)
            slidesContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        nextBtn.addEventListener('click', () => {
            if (currentIndex < images.length - 1) {
                currentIndex++;
            } else {
                currentIndex = 0; // Balik ke awal kalau udah mentok
            }
            updateSlider();
        });

        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = images.length - 1; // Balik ke akhir kalau di klik prev pas di awal
            }
            updateSlider();
        });
    });

});