<?php
// Praktikum1 tentang Variabel Konstanta
// Menginisialisasi variabel
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;

// Menampilkan teks dan variabel yang telah dibuat
echo "Hasil penjualan $angka1 dan $angka2 adalah $hasil<br><br>";

// Menginisialisasi variabel
$benar = true;
$salah = false;
// Menampilkan teks dan variabel yang telah dibuat
echo "Variabel benar: $benar, Variabel salah: $salah<br><br>";

// Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS","WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

// Menampilkan teks dan konstanta yang telah dibuat
echo "Selamat datang di ".NAMA_SITUS.", situs yang didirikan pada tahun ".TAHUN_PENDIRIAN.".";
?>