<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h3> Time </h3>     <!-- judul -->
    <?php
        date_default_timezone_set("asia/jakarta");  // Mengatur zona waktu ke "Asia/Jakarta"
        echo date("h:i:sa");    // Menampilkan waktu dalam format jam:menit:detik:am/pm
    ?>
</body>
</html> 