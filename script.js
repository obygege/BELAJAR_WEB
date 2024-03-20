// Src By oby_gege
// Animasi index ( WEBSITE PRIBADI )
const title = document.querySelector('.title');
title.style.opacity = '0';
title.style.transform = 'translateY(-50px)';
setTimeout(() => {
    title.style.opacity = '1';
    title.style.transform = 'translateY(0)';
}, 500);

// Animasi index ( HOME )
const subtitle = document.querySelector('.subtitle');
subtitle.style.opacity = '0';
subtitle.style.transform = 'translateY(-50px)';
setTimeout(() => {
    subtitle.style.opacity = '1';
    subtitle.style.transform = 'translateY(0)';
}, 700);

// Animasi index ( Logo )
const logo = document.querySelector('img');
logo.style.opacity = '0';
logo.style.transform = 'translateY(-50px)';
setTimeout(() => {
    logo.style.opacity = '1';
    logo.style.transform = 'translateY(0)';
}, 900);

// Animasi index ( Selamat Datang )
const welcomeText = document.querySelector('.welcome-text');
welcomeText.style.opacity = '0';
welcomeText.style.transform = 'translateY(-50px)';
setTimeout(() => {
    welcomeText.style.opacity = '1';
    welcomeText.style.transform = 'translateY(0)';
}, 1100);

// Animasi index ( Tombol )
const button = document.querySelector('.button');
button.style.opacity = '0';
button.style.transform = 'translateY(-50px)';
setTimeout(() => {
    button.style.opacity = '1';
    button.style.transform = 'translateY(0)';
}, 1300);

// End Index

// Start Homepage
// Ambil form dan tombol reset
const form = document.getElementById('biodataForm');
const resetButton = document.getElementById('resetButton');

// Atur event listener untuk tombol reset
resetButton.addEventListener('click', function(event) {
    // Hentikan event default agar form tidak di-submit
    event.preventDefault();

    // Reset nilai input dan textarea ke nilai awal
    form.reset();

    // Reset radio button ke yang pertama
    const radioButtons = form.querySelectorAll('input[type="radio"]');
    radioButtons[0].checked = true;

    // Reset checkbox ke tidak terpilih
    const checkboxes = form.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = false;
    });

    // Fokuskan kursor ke input pertama di form
    const firstInput = form.querySelector('input');
    firstInput.focus();
});
// End Homepage

// Start Hasil
// Ambil semua elemen td pada tabel
const tableCells = document.querySelectorAll('td');

// Tambahkan efek fade in pada setiap elemen td saat dokumen dimuat
tableCells.forEach(function(cell) {
    cell.classList.add('fade-in');
});

// Tambahkan event listener untuk setiap elemen td agar memunculkan efek fade out saat diklik
tableCells.forEach(function(cell) {
    cell.addEventListener('click', function() {
        cell.classList.remove('fade-in');
        cell.classList.add('fade-out');
        // Setelah efek fade out selesai, hapus elemen dari DOM
        setTimeout(() => {
            cell.remove();
        }, 1000);
    });
});
// End Hasil