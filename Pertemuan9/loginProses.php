<?php
// Mengimpor file koneksi.php untuk menghubungkan ke database
include "koneksi.php";

// Mengambil data username dan password yang dikirimkan melalui metode POST
$username = $_POST['username'];
$password = md5($_POST['password']); // Mengenkripsi password menggunakan fungsi md5

// Membuat query untuk memeriksa apakah username dan password cocok dengan yang ada di database
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $query);

// Menghitung jumlah baris hasil query
$cek = mysqli_num_rows($result);

// Memeriksa apakah ada baris hasil query
if ($cek > 0) {
    // Jika ada, menampilkan pesan berhasil login dan tautan ke halaman homeAdmin.html
    echo "Anda berhasil login. Silahkan menuju <a href='homeAdmin.html'>Halaman HOME</a>";
} else {
    // Jika tidak ada, menampilkan pesan gagal login dan tautan untuk login kembali
    echo "Anda gagal login. Silahkan <a href='loginForm.html'>Login kembali</a>";
    // Menampilkan pesan kesalahan jika ada
    echo mysqli_error($connect);
}
?>