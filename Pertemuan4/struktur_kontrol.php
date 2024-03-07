<?php
// Praktikum4 Struktur Kontrol
// Menginisialisasi variabel
$nilaiNumerik = 92;

// Menggunakan perbandingan if untuk menentukan nilai huruf berdasarkan rentang nilai
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A<br>";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B<br>";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C<br>";
} else if ($nilaiNumerik < 70) {
    echo "Nilai huruf: D<br>";
}

// Menginisialisasi variabel tentang jarak atlet
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

// Menggunakan perulangan while untuk menghitung hari yang dibutuhkan atlet
while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
// Menampilkan jumlah hari yang dibutuhkan atlet untuk mencapai jarak 500 kilometer
echo "<br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br><br>";

// Menginisialisasi tentang jumlah buah yang dipanen
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

// Menggunakan perulangan for untuk menghitung jumlah buah yang dipanen
for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
// Menampilkan jumlah buah yang akan dipanen
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah<br><br>";

// Mengisialisasi variabel tentang total skor ujian
$skorUjian = [85, 92, 78, 96, 88]; 
$totalSkor = 0;
// Menggunakan foreach untuk menghitung total skor ujian
foreach ($skorUjian as $skor) { 
    $totalSkor += $skor;
}
// Menampilkan total skor ujian
echo "Total skor ujian adalah: $totalSkor<br><br>";

// Mengisialisasi variabel tentang nilai siswa
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
// Menggunakan foreach untuk menentukan lulus atau tidak lulus berdasarkan nilai
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo"Soal Cerita<br><br>";
// Soal No.21
// Menginisialisasi array daftar nilai siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Mengurutkan nilai siswa secara ascending dengan bubble sort
$jumlahNilai = count($nilaiSiswa);
for ($i = 0; $i < $jumlahNilai; $i++) {
    for ($j = 0; $j < $jumlahNilai - 1; $j++) {
        if ($nilaiSiswa[$j] > $nilaiSiswa[$j + 1]) {
            $temp = $nilaiSiswa[$j];
            $nilaiSiswa[$j] = $nilaiSiswa[$j + 1];
            $nilaiSiswa[$j + 1] = $temp;
        }
    }
}
// Menghapus dua nilai terendah dan dua nilai tertinggi dari array
$nilaiNoMinMax = [];
for ($i = 2; $i < $jumlahNilai - 2; $i++) {
    $nilaiNoMinMax[] = $nilaiSiswa[$i];     //array baru menyimpan data dari array nilai siswa tanpa 2 index awal dan 2 index akhir
}
// Menghitung total nilai siswa setelah mengabaikan 
// dua nilai tertinggi dan dua nilai terendah
$totalNilai = 0;
foreach ($nilaiNoMinMax as $nilai) {
    $totalNilai += $nilai;
}
// Menghitung rata-rata nilai
$rataRata = $totalNilai / count($nilaiNoMinMax);

// Menampilkan hasil
echo "<br>Total nilai siswa setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai<br>";
echo "Rata-rata nilai siswa: " . number_format($rataRata, 2)."<br><br>";

// Soal No.23
// Menginisialisasi variabel harga produk
$hargaProduk = 120000;
// Menginisialisasi variabel batas harga untuk mendapatkan diskon
$batasDiskon = 100000;
// Menginisialisasi variabel Persentase diskon
$persentaseDiskon = 20;
// Inisialisasi variabel untuk menyimpan harga yang harus dibayar setelah diskon
$hargaSetelahDiskon = 0;

// Memeriksa apakah harga produk melebihi batas diskon menggunakan if
if ($hargaProduk > $batasDiskon) {
    // Menghitung besar diskon
    $diskon = ($persentaseDiskon / 100) * $hargaProduk;
    // Menghitung harga setelah diskon  
    $hargaSetelahDiskon = $hargaProduk - $diskon;
} else {
    // Jika harga produk tidak melebihi batas diskon, maka harga setelah diskon = harga produk
    $hargaSetelahDiskon = $hargaProduk;
}
// Menampilkan harga yang harus dibayar setelah mendapatkan diskon
echo "Harga Produk : 120.000<br>"."Diskon : 20%<br>".
     "Harga yang harus dibayar setelah mendapatkan diskon: Rp ".
      number_format($hargaSetelahDiskon, 0, ',', '.')."<br><br>";

// Soal No.25
// Menginisialisasi variabel skor pemain
$skorPemain = 600; // dapat diganti dengan nilai yg diinginkan
// Menampilkan Total skor pemain
echo "Total skor pemain adalah: $skorPemain<br>";
// Apakah pemain mendapatkan hadiah tambahan?
$hadiahTambahan = ($skorPemain > 500) ? "YA" : "TIDAK";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";
?>