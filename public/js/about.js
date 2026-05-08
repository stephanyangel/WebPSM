/* === ABOUT US PAGE === */

document.addEventListener("scroll", function() {
    const timelineContainer = document.querySelector('.timeline-container');
    const scrollLine = document.getElementById('scroll-line');
    
    if (timelineContainer && scrollLine) {
        // Ambil posisi elemen timeline di layar
        const rect = timelineContainer.getBoundingClientRect();
        
        // Mulai jalankan garis saat timeline mulai kelihatan di layar
        const startScroll = window.innerHeight * 0.8; 
        
        // Hitung persentase scroll
        let scrollPercentage = (startScroll - rect.top) / rect.height * 100;
        
        // Batasi nilai agar tidak kurang dari 0 atau lebih dari 100%
        scrollPercentage = Math.max(0, Math.min(100, scrollPercentage));
        
        // Terapkan ke tinggi garis biru
        scrollLine.style.height = scrollPercentage + "%";
    }
});