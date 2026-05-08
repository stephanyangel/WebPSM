// --- FUNGSI UTAMA UNTUK MEMUAT NAVBAR & FOOTER ---
function loadComponents() {
    // 1. Memuat Navbar
    fetch('navbar.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('navbar-placeholder').innerHTML = data;

            // ==========================================
            // LOGIKA CLASS ACTIVE 
            // ==========================================
            let currentPage = window.location.pathname.split("/").pop();
            
            // Kalau di halaman utama (Home), anggap saja "index"
            if (currentPage === "") {
                currentPage = "index";
            }
            // Buang tulisan .html dari URL browser
            currentPage = currentPage.replace('.html', '');

            const navLinks = document.querySelectorAll('.nav-links a');
            navLinks.forEach(link => {
                // Buang juga tulisan .html dari href menu
                let linkHref = link.getAttribute('href').replace('.html', '');
                
                // Kalau cocok, kasih garis biru
                if (linkHref === currentPage) {
                    link.classList.add('active');
                }
            });

            // ==========================================
            // LOGIKA HAMBURGER MENU (Untuk Layar HP)
            // ==========================================
            const hamburgerBtn = document.getElementById('hamburger-btn');
            const navMenu = document.getElementById('nav-menu');

            if (hamburgerBtn && navMenu) {
                hamburgerBtn.addEventListener('click', function() {
                    navMenu.classList.toggle('active');
                    
                    const icon = hamburgerBtn.querySelector('i');
                    if (navMenu.classList.contains('active')) {
                        icon.classList.remove('fa-bars');
                        icon.classList.add('fa-xmark');
                    } else {
                        icon.classList.remove('fa-xmark');
                        icon.classList.add('fa-bars');
                    }
                });
            }
        })
        .catch(error => console.error('Gagal memuat navbar:', error));

    // 2. Memuat Footer
    fetch('footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-placeholder').innerHTML = data;
        })
        .catch(error => console.error('Gagal memuat footer:', error));
}

// 3. Jalankan fungsi saat halaman siap
document.addEventListener("DOMContentLoaded", loadComponents);

/* === FOOTER PAGE === */

// Tunggu sampai seluruh halaman HTML selesai dimuat
document.addEventListener("DOMContentLoaded", function() {
    
    // Cari elemen dengan id "footer-placeholder"
    const footerWadah = document.getElementById('footer-placeholder');

    // Kalau wadahnya ketemu, ambil file footer.html
    if (footerWadah) {
        fetch('footer.html')
            .then(response => {
                if (!response.ok) throw new Error('Gagal memuat file');
                return response.text();
            })
            .then(data => {
                // Masukkan isi footer.html ke dalam wadah
                footerWadah.innerHTML = data;
            })
            .catch(error => {
                console.error('Ada masalah:', error);
                footerWadah.innerHTML = '<p style="color:red;">Error: Footer gagal dimuat. Cek console atau pastikan pakai Live Server.</p>';
            });
    }
});