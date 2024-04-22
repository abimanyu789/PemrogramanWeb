<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["nomor_rekam_medis"] = htmlspecialchars($_POST["nomor_rekam_medis"]);
    $_SESSION["nama"] = htmlspecialchars($_POST["nama"]);
    $_SESSION["tanggal_lahir"] = htmlspecialchars($_POST["tanggal_lahir"]);
    $_SESSION["gender"] = htmlspecialchars($_POST["gender"]);
    $_SESSION["alamat"] = htmlspecialchars($_POST["alamat"]);
    $_SESSION["poli"] = htmlspecialchars($_POST["poli"]);
    $_SESSION["doctor"] = htmlspecialchars($_POST["doctor"]);
    $_SESSION["tanggal_periksa"] = htmlspecialchars($_POST["tanggal_periksa"]);
    $_SESSION["payment"] = htmlspecialchars($_POST["payment"]);
}

header("location: hasilForm.php");
?>