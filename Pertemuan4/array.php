<?php
// Praktikum5 Array
// Menginisialisasi array nilai siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

// Melakukan perulangan untuk memeriksa setiap nilai siswa dan menyimpan nilai yang lulus
foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) { 
        $nilaiLulus[] = $nilai; 
    }
}
// Menampilkan daftar nilai siswa yang lulus
echo "Daftar nilai siswa yang lulus: ".implode(', ', $nilaiLulus);

// Menginisialuisasi array daftar karyawan
$daftarkaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];
// Menginisialisasi array
$karyawanPengalamanLimaTahun = [];  

// Melakukan perulangan untuk memeriksa pengalaman kerja karyawan dan
// menyimpan nama karyawan yang memiliki pengalaman >5thn
foreach ($daftarkaryawan as $karyawan) {
    if ($karyawan [1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
// Menampilkan daftar karyawan dengan pengalaman kerja >5thn hasil dari perulangan di atas
echo "<br><br>Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: ". implode(', ', $karyawanPengalamanLimaTahun);

// menginisialisasi daftar nilai dalam mata kuliah
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

// Menginisialisasi variabel
$mataKuliah = 'Fisika';
echo "<br><br>Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
echo "------------------<br>".
     "|  Nama  |  Nilai  |<br>".
     "------------------<br>";
// Menampilkan daftar nilai mahasiswa dalam mata kuliah yang ditentukan menggunakan perulangan
foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "| {$nilai[0]} | {$nilai[1]} |<br>";
}

echo"<br>Soal Cerita No.13 Praktikum 5<br>";
// Soal No13 
// menginisialisasi array daftar nilai siswa (nama dan nilai)
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];
// Menghitung rata-rata nilai kelas
$totalNilai = 0;
foreach ($daftarNilai as $siswa) {
    $totalNilai += $siswa[1];
}
$rataRata = $totalNilai / count($daftarNilai);

// Mencetak daftar nilai siswa yang mencapai nilai di atas rata-rata kelas
echo "Daftar nilai siswa yang mencapai nilai di atas rata-rata kelas ($rataRata):<br>";
foreach ($daftarNilai as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "{$siswa[0]}: {$siswa[1]}<br>";
    }
}
?>