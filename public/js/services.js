/* === SERVICE PAGE === */

// --- LOGIKA TABS FASILITAS ---
document.addEventListener('DOMContentLoaded', () => {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    if (tabBtns.length > 0) {
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // 1. Buang warna aktif dari semua tombol
                tabBtns.forEach(b => b.classList.remove('active'));
                // 2. Sembunyiin semua konten
                tabContents.forEach(c => c.classList.remove('active'));

                // 3. Kasih warna aktif ke tombol yang diklik
                btn.classList.add('active');
                // 4. Munculin konten yang sesuai sama tombol
                const targetId = btn.getAttribute('data-target');
                document.getElementById(targetId).classList.add('active');
            });
        });
    }
});