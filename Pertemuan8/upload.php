<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "documents/"; // Direktori tujuan untuk menyimpan dokumen
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    
    $maxFileSize = 10 * 1024 * 1024;
    
    if ($_FILES["documentToUpload"]["name"] != "" && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
        if (in_array($documentFileType, $allowedExtensions)) {
            if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
                echo "Dokumen berhasil diunggah.";
            } else {
                echo "Gagal mengunggah dokumen.";
            }
        } else {
            echo "Jenis dokumen tidak valid.";
        }
    } else {
        echo "Ukuran dokumen melebihi batas yang diizinkan atau file tidak dipilih.";
    }
}
?>
