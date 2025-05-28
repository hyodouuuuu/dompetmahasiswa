<?php

include('koneksi/koneksi.php');
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$nama_lengkap = filter_input(INPUT_POST, 'nama_lengkap', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$password = md5($password);

if ($email === false) {
    header("Location:register.php?" . http_build_query(['notif' => 'emailinvalid']));
    exit();
}
if (empty($username)) {
    header("Location:register.php?" . http_build_query(['notif' => 'usernamekosong']));
} else if (empty($nama_lengkap)) {
    header("Location:register.php?" . http_build_query(['notif' => 'namakosong']));
} else if (empty($email)) {
    header("Location:register.php?" . http_build_query(['notif' => 'emailkosong']));
} else if (empty($password)) {
    header("Location:register.php?" . http_build_query(['notif' => 'passwordkosong']));
} else {
    $stmt = $koneksi->prepare("INSERT INTO user (username, nama_lengkap, email, password, level) VALUES (?, ?, ?, ?, 'user')");
    $stmt->bind_param("ssss", $username, $nama_lengkap, $email, $password);
    $query = $stmt->execute();
    if ($query) {
        header("Location:login.php?" . http_build_query(['notif' => 'daftarberhasil']));
    } else {
        header("Location:register.php?" . http_build_query(['notif' => 'gagal']));
    }
}
?>