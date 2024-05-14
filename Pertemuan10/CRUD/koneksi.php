<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost","root","","prakwebdb","3307");
var_dump($koneksi);
die;

// Periksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
