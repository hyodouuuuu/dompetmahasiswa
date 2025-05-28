<?php
session_start();


if (!isset($_SESSION['id_user'])) {
    header("Location: index.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - Dompet Mahasiswa</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
      background-color: #2AC7A5;
      color: white;
    }

    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 20px;
    }

    .top-bar i {
      font-size: 24px;
      color: white;
      cursor: pointer;
    }

    .welcome-box {
      background-color: white;
      color: #333;
      border-radius: 10px;
      padding: 15px;
      margin: 0 20px 20px 20px;
    }

    .menu-section {
      margin: 0 20px;
    }

    .menu-title {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .menu-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 15px;
      margin-bottom: 30px;
    }

    .menu-item {
      background-color: #f0f0f0;
  border-radius: 15px;
  text-align: center;
  padding: 20px 10px;
  color: #333;
  font-size: 14px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 150px; /* buat semua kotak sama tinggi */
  box-sizing: border-box;
    }

    .menu-item img {
      max-width: 60px;
  max-height: 60px;
  object-fit: contain;
  margin-bottom: 10px;
    }

    .comment-section {
      background-color: white;
      padding: 10px 20px;
      border-radius: 25px;
      margin: 20px;
      color: #333;
    }

    .comment-section input {
      width: 100%;
      border: none;
      outline: none;
      font-size: 16px;
      padding: 10px;
    }

    a {
      text-decoration: none;
      color: inherit;
    }
  </style>
</head>
<body>

  <div class="top-bar">
    <i class="fas fa-bars"></i>
    <a href="profil.php"><i class="fas fa-user-circle"></i></a>
  </div>

  <div class="welcome-box">
    <p>Hi, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <p>Kami akan membantumu dalam mengelola keuanganmu</p>
  </div>

  <div class="menu-section">
    <div class="menu-title">Apa yang ingin kamu hitung?</div>
    <div class="menu-grid">
      <a href="#"><div class="menu-item">
        <img src="image/simulasi1.png" alt="simulasi biaya kuliah">
        <div>simulasi biaya kuliah</div>
      </div></a>

      <a href="#"><div class="menu-item">
        <img src="image/anggaran.png" alt="Kalkulator anggaran">
        <div>Kalkulator anggaran hidup</div>
      </div></a>

      <a href="#"><div class="menu-item">
        <img src="image/tabungan.png" alt="simulasi tabungan liburan">
        <div>simulasi tabungan liburan</div>
      </div></a>

      <a href="#"><div class="menu-item">
        <img src="image/tips.png" alt="tips">
        <div>tips-tips</div>
      </div></a>

      <a href="#"><div class="menu-item">
        <img src="image/catatan.png" alt="catatan">
        <div>catatan</div>
      </div></a>

    </div>

    <div class="menu-title">Segera hadir</div>
    <div class="menu-grid">
      <div class="menu-item">
        <img src="image/comingsoon.png" alt="Coming soon">
        <div>coming soon</div>
      </div>
    </div>
  </div>

  <div class="comment-section">
    <input type="text" placeholder="Komentar">
  </div>

</body>
</html>
