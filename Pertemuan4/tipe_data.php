<?php
// Praktikum2 tentang Tipe Data
// Menginisialisasi variabel dan melakukan operasi matematika sederhana
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

// Menampilkan nilai dari variabel yang dibuat
echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";
// Menampilkan tipe data dari variabel e
var_dump($e);

// Menginisialisasi variabel
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;
$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

// Menampilkan teks dan nilai dari variabel
echo "<br><br>Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";
// Menampilkan tipe data dari variabel rataRata
var_dump($rataRata);

// Menginisialisasi variabel dengan tipe boolean
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

// Menampilkan tipe data dari variabel apakahSiswaLulus dan apakahSiswaSudahUjian
echo "<br><br>";
var_dump($apakahSiswaLulus); 
echo "<br>";
var_dump($apakahSiswaSudahUjian);

// Menginisialisasi variabel
$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';
$namaLengkap = "{$namaDepan } {$namaBelakang }";
$namaLengkap2 = $namaDepan.''. $namaBelakang;

// Menampilkan nama depan, nama belakang, dan nama lengkap
echo "<br><br>Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: '.$namaBelakang. '<br>';
echo $namaLengkap;

// Menampilkan elemen pertama dari array $listMahasiswa
echo "<br>";
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"]; 
// Menampilkan elemen pertama dari array $listMahasiswa
echo $listMahasiswa[0];
?>