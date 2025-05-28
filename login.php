<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Dompet Mahasiswa</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #40C9A2;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 100%;
      max-width: 400px;
    }

    .login-container h2 {
      margin-bottom: 20px;
      color: #40C9A2;
      font-size: 24px;
    }

    .input-group {
      margin-bottom: 15px;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    .input-group input[type="submit"] {
      background-color: #2F9C95;
      color: white;
      cursor: pointer;
      border: none;
    }

    .input-group input[type="submit"]:hover {
      background-color: #40C9A2;
    }

    .links {
      margin-top: 20px;
    }

    .links a {
      color: #40C9A2;
      text-decoration: none;
    }

    .links a:hover {
      text-decoration: underline;
    }

    .logo {
      font-size: 50px;
      margin-bottom: 20px;
      color: #40C9A2;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <div class="logo">
      <i class="fas fa-wallet"></i>
    </div>
    <h2>Selamat datang di Dompet Mahasiswa</h2>
    <form action="login_process.php" method="POST">
      <div class="input-group">
        <input type="text" name="username" placeholder="Masukkan email atau username" required>
      </div>
      <div class="input-group">
        <input type="password" name="password" placeholder="Masukkan password" required>
      </div>
      <div class="input-group">
        <input type="submit" value="MASUK">
      </div>
    </form>
    <div class="links">
      <a href="#">Lupa password?</a> | <a href="register.php">Belum punya akun? Daftar sekarang</a>
    </div>
  </div>

</body>
</html>
