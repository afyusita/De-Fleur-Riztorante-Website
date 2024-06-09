document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('reservationForm');
    const popup = document.getElementById('popup');
    const closePopup = document.getElementById('closePopup');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Mencegah submit form
        popup.style.display = 'flex'; // Menampilkan popup
    });

    closePopup.addEventListener('click', function () {
        popup.style.display = 'none'; // Menyembunyikan popup saat tombol tutup diklik
    });

    // Menyembunyikan popup saat klik di luar konten popup
    window.addEventListener('click', function (event) {
        if (event.target === popup) {
            popup.style.display = 'none';
        }
    });
});
