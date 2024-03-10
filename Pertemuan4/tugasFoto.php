<?php
// Title page
echo"<b>Tugas PHP Array Multidimensi</b><br>".
"--------------------------------------------------------------------<br>".
"<b>Ananda Abimanyu Saputra</b><br>".
"<b>2241760093</b><br>".
"<b>SIB - 2C / 04</b><br><br><br>";

// Array multidimensi untuk menyimpan foto dan data
$Biodata = [
    [   //Biodata ke1
        "foto"=> "../img/fotoBio1.jpg",
        "nama"=> "Ananda Abimanyu",
        "alamat"=> "Kota Mojokerto",
        "noTelp"=> "08577575757",
        "umur"=> "20",
        "jurusan"=> "Teknologi Informasi",
    ],    
    [   //Biodata ke2
        "foto"=> "../img/fotoBio2.jpg",
        "nama"=> "Abimanyu Saputra",
        "alamat"=> "Kota Malang",
        "noTelp"=> "08888888888",
        "umur"=> "21",
        "jurusan"=> "Teknik Mesin",
    ]
];


// Menampilkan foto dan biodata menggunakan looping
foreach ($Biodata as $siswa ) {
    echo '<img src="' .$siswa["foto"] .'"alt="Foto' .$siswa["nama"] .'"width="200"><br><br>'. // Menampilkan foto
    "Nama : " . $siswa["nama"] . "<br>".    //Menampilkan nama
    "Alamat : ". $siswa["alamat"] ."<br>".  //menampilkan alamat
    "No telp : ". $siswa["noTelp"] ."<br>". //menampilkan nomor telepon
    "Umur : ". $siswa["umur"] ."<br>".      //menampilkan umur
    "Jurusan : ". $siswa["jurusan"] ."<br><br><br>";    //menampilkan jurusan
}
?>