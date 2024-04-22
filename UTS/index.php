<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pelayanan Pasien Rumah Sakit Sehat</title>
    <link rel="stylesheet" href="./css/indexStyle.css">
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/jquery-ui-1.13.2/jquery-ui.js"></script>

    <script>
        // javascript
        (document).ready(function () {
            $('#daftar').submit(function (event) {
                event.preventDefault();
                var rekam = $('#rekam').val();

                // Mengirim data ke server menggunakan AJAX
                $.ajax({
                    type: 'POST',
                    url: 'serverLogin.php',
                    data: {
                        rekam: rekam,
                    },
                    success: function (response) {
                        // pindah halaman
                        window.location.href = 'form.php';
                    }
                });
            });
        });
    </script>

</head>

<body>
    <div class="container">
        <div class="login">
            <form id="daftar" action="serverLogin.php" method="POST">
                <h1>PENDAFTARAN</h1>
                <hr>
                <h6>Rumah Sakit Sehat Kota Mojokerto</h6>
                <label for="">Nomor Rekam Medis</label>
                <input type="text" name="rekam" placeholder="ex: 23456789">
                <button>NEXT</button>
            </form>
        </div>

        <div class="vertical-line">
        </div>
        
        <div class="right">
            <img src="./css/doctor.png" alt="">
        </div>
    </div>
</body>
</html>