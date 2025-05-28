<?php
session_start();
include('../koneksi/koneksi.php');

if (isset($_POST['id_greetings']) && isset($_POST['greetings'])) {
    $id_greetings = $_POST['id_greetings'];
    $isi_greetings = mysqli_real_escape_string($koneksi, $_POST['greetings']); // Hindari SQL Injection

    $sql = "UPDATE greetings SET isi_greetings = '$isi_greetings' WHERE id_greetings = '$id_greetings'";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        // Jika berhasil, arahkan ke greetings.php
        header("Location: greetings.php?update=success");
        exit();
    } else {
        echo "Gagal menyimpan perubahan: " . mysqli_error($koneksi);
    }
} else {
    echo "Data tidak lengkap!";
}
?>
