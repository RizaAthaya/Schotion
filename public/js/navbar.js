document.addEventListener('DOMContentLoaded', function () {
    const mobileMenu = document.getElementById('mobileMenu');
    const burgerButton = document.querySelector('.burger');

    burgerButton.addEventListener('click', function (event) {
        event.preventDefault(); // Menonaktifkan aksi default link
        if (mobileMenu) {
            mobileMenu.classList.toggle('show');
        }
    });

    // Menyembunyikan dropdown saat mengklik di luar dropdown
    window.addEventListener('click', function (event) {
        if (!event.target.matches('.burger')) {
            if (mobileMenu && mobileMenu.classList.contains('show')) {
                mobileMenu.classList.remove('show');
            }
        }
    });
});
