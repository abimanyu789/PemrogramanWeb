<?php
// membuat fungsi untuk menampilkan teks
function tampilkanHaloDunia(){ 
    echo "Halo dunia! <br>";    
    tampilkanHaloDunia();   //memanggil fungsi yang sama (rekursif)
}
// tampilkanHaloDunia();    // menonaktifkan query line ini

// menampilkan hasil perulangan dengan looping
for($i=1; $i <=25; $i++){
    echo "Perulangan ke-{$i} <br>";
}

// membuat fungsi untuk menampilkan angka
function tampilkanAngka (int $jumlah, int $indeks = 1) { 
    echo "Perulangan ke-{$indeks} <br>";
    //panggil diri sendiri selama $indeks <= $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka ($jumlah, $indeks + 1);
    } 
}
echo"<hr>";
tampilkanAngka(20); //memanggil fungsi dengan menginputkan nilai dalam parameter
?> 