<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "images/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Periksa apakah ada file yang diunggah
if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    // Daftar ekstensi file gambar yang diizinkan
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Periksa apakah ekstensi file sesuai dengan yang diizinkan
        if (in_array($fileType, $allowedExtensions)) {
            $targetFile = $targetDirectory . $fileName;

            // Pindahkan file yang diunggah ke direktori penyimpanan
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            echo "File $fileName tidak diizinkan. Hanya file gambar (jpg, jpeg, png, gif) yang diizinkan.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?> 