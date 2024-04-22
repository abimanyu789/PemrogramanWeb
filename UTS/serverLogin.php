<!-- session  -->
<?php
session_start();

$_SESSION['rekam'] = "24681357";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rekam = $_POST['rekam'];
    
    if ($rekam == $_SESSION['rekam']) {
        header("location:form.php");    
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('Nomor Rekam Medis belum terdaftar')";
        echo "</script>";
    }
}