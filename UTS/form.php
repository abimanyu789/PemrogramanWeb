<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Form Pendaftaran Pasien</title>
    <link rel="stylesheet" href="./css/formStyle.css">
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/jquery-ui-1.13.2/jquery-ui.js"></script>
    <script>
        // javasript
        (document).ready(function () {
            $('form').submit(function (event) {
                event.preventDefault();
                var formData = new FormData(this);

                // Mengirim data ke server menggunakan AJAX
                $.ajax({
                    type: 'POST',
                    url: 'serverForm.php',
                    data: formData,
                    success: function (response) {
                        // pindah halaman
                        window.location.href = 'hasilForm.php';
                    }
                });
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <h1>Form Pendaftaran Pasien</h1>
        <hr>
        <form action="serverForm.php" method="POST">
            <label>Nomor Rekam Medis:</label>
            <input type="text" id="nomor_rekam_medis" name="nomor_rekam_medis" value="<?php echo $_SESSION["rekam"]; ?>"
                readonly><br>

            <label>Nama:</label>
            <input type="text" id="nama" name="nama" placeholder="" required><br>

            <label>Tgl. lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" placeholder="dd/mm/yyyy" required><br>

            <div class="radio-container">
                <label for="gender">Jenis Kelamin:</label>
                <input type="radio" id="laki-laki" name="gender" value="Laki-laki"> Laki-laki
                <br>
                <input type="radio" id="perempuan" name="gender" value="Perempuan"> Perempuan
            </div>

            <label>Alamat:</label>
            <input type="text" id="alamat" name="alamat" placeholder="ex: Jl. Contoh No. 123" required><br>

            <label>Poli Tujuan:</label>
            <select size="1" name="poli" id="poli_tujuan" required>
                <option value="Poli Gigi">Poli Gigi</option>
                <option value="Poli Kandungan">Poli Kandungan</option>
                <option value="Poli Jantung">Poli Jantung</option>
                <option value="Poli Jiwa">Poli Jiwa</option>
                <option value="Poli Saraf">Poli Saraf</option>
                <option value="Poli Anak">Poli Anak</option>
                <option value="Poli Umum">Poli Umum</option>
                <option value="Poli Gizi">Poli Gizi</option>
                <option value="Poli Mata">Poli Mata</option>
                <option value="Poli Penyakit Dalam">Poli Penyakit Dalam</option>
            </select><br>

            <label>Dokter:</label>
            <select size="1" name="doctor" id="dokter" required>
                <option value="Dr. John Daniel">Dr. John Daniel</option>
                <option value="Dr. Jane Sam">Dr. Jane Sam</option>
                <option value="Dr. Sammuel Rio">Dr. Sammuel Rio</option>
                <option value="Dr. Richard Cogan">Dr. Richard Cogan</option>
                <option value="Dr. Estu Nila">Dr. Estu Nila</option>
                <option value="Dr. Retno Putri">Dr. Retno Putri</option>
                <option value="Dr. Agung Setyadi">Dr. Agung Setyadi</option>
                <option value="Dr. Bambang Dwi">Dr. Bambang Dwi</option>
                <option value="Dr. Putri Sriwijayanti">Dr. Putri Sriwijayanti</option>
            </select><br>

            <label>Tgl. Periksa:</label>
            <input type="date" id="tanggal_periksa" name="tanggal_periksa" placeholder="dd/mm/yyyy" format required><br>

            <label>Cara Pembayaran:</label>
            <select size="1" name="payment" id="cara_pembayaran" required>
                <option value="BPJS KESEHATAN">BPJS KESEHATAN</option>
                <option value="BPJS KETENAGAKERJAAN">BPJS KETENAGAKERJAAN</option>
                <option value="JAMSOSTEK">JAMSOSTEK</option>
                <option value="JAMKESMAS">JAMKESMAS</option>
                <option value="UMUM">UMUM</option>
            </select><br>

            <div class="checkbox-container">
                <input type="checkbox" id="validation" value="validation" required> Saya menyetujui semua syarat &
                ketentuan yang berlaku
            </div>
            <br><br>
            <button type="submit">NEXT</button>
        </form>
    </div>
</body>

</html>