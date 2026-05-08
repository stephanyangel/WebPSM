/* === HOME PAGE ==== */

document.addEventListener("DOMContentLoaded", function() {
    // Memilih semua elemen yang ingin dianimasikan
    const animatedElements = document.querySelectorAll('.card, .fade-in');

    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease-out';
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15 
    });

    animatedElements.forEach(el => {
        observer.observe(el);
    });
});
