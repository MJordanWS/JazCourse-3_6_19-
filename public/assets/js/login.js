// Menangani submit form
document.getElementById('login-form').addEventListener('submit', function (event) {
    event.preventDefault(); // Mencegah submit default

    const correctUsername = '123';
    const correctPassword = '123';

    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();

    // Validasi sederhana
    if (username === correctUsername && password === correctPassword) {
        alert("Selamat, Login Berhasil");
        window.location.href = indexUrl;
    } else {
        alert("Username atau Password Anda salah");
    }
});

// Fungsi toggle password visibility
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const passIcon = document.getElementById('pass-icon');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        passIcon.src = '/assets/images/show.jpg'; // Ganti gambar untuk menunjukkan password
    } else {
        passwordInput.type = 'password';
        passIcon.src = '/assets/images/hide.jpg'; // Ganti gambar untuk menyembunyikan password
    }
}
