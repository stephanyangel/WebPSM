/* === CLIENTS PAGE ===  */

document.addEventListener('DOMContentLoaded', function() {
    
    // --- 1. FUNGSI FILTER KATEGORI ---
    const filterButtons = document.querySelectorAll('.filter-btn');
    const workItems = document.querySelectorAll('.work-item');

    if (filterButtons.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                
                // Ganti warna tombol aktif
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                const filterValue = button.getAttribute('data-filter');

                // Sortir kartu yang muncul
                workItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block'; 
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 50);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 400); 
                    }
                });
            });
        });
    }

    // --- 2. FUNGSI MINI SLIDER DI DALAM KARTU ---
    const cardSliders = document.querySelectorAll('.card-slider');

    if (cardSliders.length > 0) {
        cardSliders.forEach(slider => {
            const track = slider.querySelector('.card-slides');
            const images = slider.querySelectorAll('.card-slides img');
            const prevBtn = slider.querySelector('.prev-btn');
            const nextBtn = slider.querySelector('.next-btn');
            
            let currentIndex = 0;
            const totalImages = images.length;

            // Kalau fotonya cuma 1, sembunyiin tombol panahnya biar rapi
            if (totalImages <= 1) {
                if(prevBtn) prevBtn.style.display = 'none';
                if(nextBtn) nextBtn.style.display = 'none';
                return; 
            }

            function updateMiniSlider() {
                const offset = -currentIndex * 100;
                track.style.transform = `translateX(${offset}%)`;
            }

            // Aksi klik panah kanan
            if (nextBtn) {
                nextBtn.addEventListener('click', (e) => {
                    e.preventDefault(); 
                    currentIndex = (currentIndex + 1) % totalImages;
                    updateMiniSlider();
                });
            }

            // Aksi klik panah kiri
            if (prevBtn) {
                prevBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
                    updateMiniSlider();
                });
            }
        });
    }
});
