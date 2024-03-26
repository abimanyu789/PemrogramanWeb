<?php
// //membuat fungsi untuk menghitung umur
// function hitungUmur($thn_lahir, $thn_sekarang) {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }
// //membuat fungsi perkenalan yang akan ditampilkan pada web
// function perkenalan ($nama, $salam="Assalamualaikum") { 
//     echo $salam.",";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
    
//     //memanggil fungsi lain 
//     echo "Saya berusia ". hitungUmur(1988, 2023)." tahun<br/>"; 
//     echo "Senang berkenalan dengan anda<br/>";
// }
//     //memanggil fungsi perkenalan 
//     perkenalan("Elok");

// membuat fungsi untuk menampilkan perkenalan
function perkenalan() {
echo "Assalamualaikum, ";
echo "Perkenalkan, nama saya Elok<br/>"; //Tulis sesuai nama kalian
echo "Senang berkenalan dengan Anda<br/>";
}
//memanggil fungsi yang sudah dibuat
perkenalan();
perkenalan();
?>
