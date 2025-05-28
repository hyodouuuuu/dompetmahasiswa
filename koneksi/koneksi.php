<?php
$koneksi = mysqli_connect("localhost", "root", "", "dompetmahasiswa");
if (!$koneksi) {
    die("Error koneksi: " . mysqli_connect_error());
}
?>
