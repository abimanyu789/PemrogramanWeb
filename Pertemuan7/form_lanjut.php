<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <!-- Form untuk memilih buah menggunakann option menu -->
    <form method="POST" action="proses_lanjut.php">
        <label for="buah">Pilih Buah :</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br>

        <!-- Form untuk memilih warna favorit menggunakan checkbox -->
        <label>Pilih Warna Favorit :</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>
        <br>

        <!-- Form untuk memilih jenis kelamin menggunakan checkradio -->
        <label>Pilih Jenis Kelamin :</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>
        <br>

        <!-- Tombol submit untuk mengirimkan form -->
        <input type="submit" value="Submit">
    </form>
</body>
</html>