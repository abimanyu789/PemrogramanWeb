<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bukti Pendaftaran Pasien</title>
    <link rel="stylesheet" href="./css/hasilFormStyle.css">
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/jquery-ui-1.13.2/jquery-ui.js"></script>
</head>

<body>
    <div class="container">
        <h1>Bukti Pendaftaran Pasien</h1>
        <hr>
        <table action="">
            <tr>
                <td id="kolom1">Tgl. Periksa </td>
                <td> :</td>
                <td id="hasil"> <?php echo $_SESSION["tanggal_periksa"]; ?></td>
            </tr>
            <tr>
                <td id="kolom1">Nama </td>
                <td> :</td>
                <td id="hasil"> <?php echo $_SESSION["nama"]; ?></td>
            </tr>
            <tr>
                <td id="kolom1">No. Rekam Medis </td>
                <td> :</td>
                <td id="hasil"> <?php echo $_SESSION["nomor_rekam_medis"]; ?></td>
            </tr>
            <tr>
                <td id="kolom1">Ruang </td>
                <td> :</td>
                <td id="hasil"> <?php echo $_SESSION["poli"]; ?></td>
            </tr>
            <tr>
                <td id="kolom1">Dokter </td>
                <td> :</td>
                <td id="hasil"> <?php echo $_SESSION["doctor"]; ?></td>
            </tr>
            <tr>
                <td id="kolom1">Cara Bayar </td>
                <td> :</td>
                <td id="hasil"> <?php echo $_SESSION["payment"]; ?></td>
            </tr>
        </table>
        <br><br>
        <hr>
        <div id="button">
            <button onclick="window.print()">Bukti Pendaftaran</button>
        </div>
    </div>
</body>
</html>