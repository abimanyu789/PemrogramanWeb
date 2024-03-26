<DOCTYPE HTML>
<html>
<head>
</head>
<body>
    <h3> Date </h3>
    <?php
        // Menampilkan tanggal hari ini dalam format "tahun/bulan/tanggal"
        echo "Today is " . date("Y/m/d") . "<br>";
        // Menampilkan tanggal hari ini dalam format "tahun.bulan.tanggal"
        echo "Today is " . date("Y.m.d") . "<br>";
        // Menampilkan tanggal hari ini dalam format "tahun-bulan-tanggal"
        echo "Today is " . date("Y-m-d") . "<br>";
        // Menampilkan hari ini (nama hari dalam bahasa Inggris)
        echo "Today is " . date("l");
    ?>
</body>
</html> 