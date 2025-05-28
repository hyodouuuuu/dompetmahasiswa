<?php
session_start();
if (!isset($_SESSION['id_user'])) {
  header("Location: index.php");
  exit();
}

include(__DIR__ . '/koneksi.php');

$id_user = $_SESSION['id_user'];
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_pengguna = '$id_user'");
$user = mysqli_fetch_assoc($query);
?>


<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <title>Profil Pengguna</title>
  <style>
    body {
      background-color: #2AC7A5;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      color: white;
    }

    .back-arrow {
      font-size: 28px;
      cursor: pointer;
      margin-bottom: 24px;
      user-select: none;
      color: white;
    }

    .container {
      max-width: 700px;
      margin: auto;
      display: flex;
      gap: 40px;
      align-items: flex-start;
    }

    .avatar-section {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 12px;
      width: 150px;
      flex-shrink: 0;
    }

    .avatar-section img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      background-color: white;
      padding: 15px;
      margin-top: 20px;
      object-fit: cover;
      display: block;
    }

    .btn-avatar {
      padding: 8px 16px;
      background: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 600;
      color: #2AC7A5;
      user-select: none;
    }

    form {
      flex-grow: 1;
    }

    form label {
      display: block;
      font-weight: 600;
      margin-bottom: px;
      color: white;
    }

    form input[type="text"],
    form input[type="email"] {
      width: 100%;
      padding: 10px 14px;
      margin-bottom: 20px;
      border-radius: 8px;
      border: none;
      background-color: white;
      color: #2AC7A5;
      font-size: 1em;
      box-sizing: border-box;
      transition: background-color 0.3s, border-color 0.3s;
    }

    form input[type="email"]:focus {
      background-color: #def9f7;
      outline: none;
    }

    .logout-btn {
      display: block;
      width: 100%;
      padding: 12px 14px;
      text-align: center;
      background-color: white;
      color: red;
      border-radius: 8px;
      font-weight: bold;
      text-decoration: none;
      box-sizing: border-box;
    }

    .logout-btn:hover {
      background: #f8dcdc;
    }
  </style>
</head>

<body>

  <div class="back-arrow" onclick="history.back()">←</div>

  <div class="container">
    <div class="avatar-section">
      <img src="image/avatar.png" alt="Avatar" />
      <button class="btn-avatar" type="button">Ganti avatar</button>
    </div>

    <form action="update_profile.php" method="POST">
      <label for="nama">Nama</label>
      <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($user['nama_lengkap']); ?>" />

      <label for="username">Username</label>
      <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" />

      <label for="email">Email</label>
      <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" />

      <div style="text-align: center;">
        <a href="logout.php" class="logout-btn">Log Out</a>
      </div>

    </form>
  </div>

</body>

</html>