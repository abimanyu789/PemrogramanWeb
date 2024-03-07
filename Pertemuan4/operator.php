<?php
// Praktikum3 tentang Operator
// Menginisialisasi variabel
$a = 10;
$b = 5;

// Operasi Aritmatika
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// Menampilkan hasil dari operasi aritmatika
echo "===========================<br>".
    "Operasi Aritmatika PHP :<br>".
    "===========================<br>".
    "Penambahan: $a + $b = $hasilTambah<br>".
    "Pengurangan: $a - $b = $hasilKurang<br>".
    "Perkalian: $a * $b = $hasilKali<br>".
    "Pembagian: $a / $b = $hasilBagi<br>".
    "Sisa Bagi: $a % $b = $sisaBagi<br>".
    "Pangkat: $a ** $b = $pangkat<br><br>";

// Operasi Perbandingan
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasillebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// Menampilkan hasil dari operasi perbandingan
echo "===========================<br>".
    "Operasi Perbandingan PHP :<br>".
    "===========================<br>".
    "Sama: $a == $b = ".($hasilSama ? 'true':'false')."<br>".
    "Tidak Sama: $a != $b = ".($hasilTidakSama ? 'true':'false')."<br>".
    "Lebih Kecil: $a < $b = ".($hasillebihKecil ? 'true':'false')."<br>".
    "Lebih Besar: $a > $b = ".($hasilLebihBesar ? 'true':'false')."<br>".
    "Lebih Kecil Sama: $a <= $b = ".($hasilLebihKecilSama ? 'true':'false')."<br>".
    "Lebih Besar Sama: $a >= $b = ".($hasilLebihBesarSama ? 'true':'false')."<br><br>";

// Operasi Logika
$hasilAnd = $a && $b;
$hasilor = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// Menampilkan hasil dari operasi logika
echo "===========================<br>".
    "Operasi Logika PHP :<br>".
    "===========================<br>".
    "AND: $a && $b = ".($hasilAnd ? 'true':'false')."<br>".
    "OR: $a || $b = ".($hasilor ? 'true':'false')."<br>".
    "NOT A: !$a = ".($hasilNotA ? 'true':'false')."<br>".
    "NOT B: !$b = ".($hasilNotB ? 'true':'false')."<br><br>";

// Operasi Penugasan dan Menampilkan hasilnya
echo "===========================<br>".
    "Operasi Penugasan PHP :<br>".
    "===========================<br>";
$a += $b;
echo "Penambahan: a += b = $a<br>";
$a -= $b;
echo "Pengurangan: a -= b = $a<br>";
$a *= $b;
echo "Perkalian: a *= b = $a<br>";
$a /= $b;
echo "Pembagian: a /= b = $a<br>";
$a %= $b;
echo "Sisa Bagi: a %= b = $a<br><br>";

// Operasi Identitas
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

// Menampilkan hasil dari operasi identitas
echo "===========================<br>".
    "Operasi Identitas PHP :<br>".
    "===========================<br>".
    "Identik: $a === $b = ".($hasilIdentik ? 'true':'false')."<br>".
    "Tidak Identik: $a !== $b = ".($hasilTidakIdentik ? 'true':'false')."<br><br>";

// Soal No.16
// Menginisialisasi varibel total kursi
$totalKursi = 45;
// Menginisialisasi varibel kursi yang terisi
$kursiTerisi = 28;
// Menginisialisasi varibel kursi yang masih kosong
$kursiKosong = $totalKursi - $kursiTerisi;
// Menghitung persentase kursi yang masih kosong
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;
// Menampilkan hasil
echo "Praktikum 3 Soal No16<br>";
echo "Jumlah kursi yang masih kosong: $kursiKosong dari $totalKursi kursi<br>";
echo "Persentase kursi yang masih kosong: ".number_format($persentaseKosong, 2)."%";
?>