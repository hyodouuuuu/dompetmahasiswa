<?php

$nama_lengkap = $username = $email = $password = $confirm_password = "";
$errors = [];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate nama lengkap
    if (empty($_POST["nama_lengkap"])) {
        $errors["nama_lengkap"] = "Nama lengkap diperlukan";
    } else {
        $nama_lengkap = test_input($_POST["nama_lengkap"]);
    }
    
    // Validate username
    if (empty($_POST["username"])) {
        $errors["username"] = "Username diperlukan";
    } else {
        $username = test_input($_POST["username"]);
        // Check if username contains only letters and numbers
        if (!preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
            $errors["username"] = "Username hanya boleh berisi huruf, angka, dan underscore";
        }
    }
    
    // Validate email
    if (empty($_POST["email"])) {
        $errors["email"] = "Email diperlukan";
    } else {
        $email = test_input($_POST["email"]);
        // Check if e-mail address is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Format email tidak valid";
        }
    }
    
    // Validate password
    if (empty($_POST["password"])) {
        $errors["password"] = "Password diperlukan";
    } else {
        $password = test_input($_POST["password"]);
        // Check if password is at least 8 characters
        if (strlen($password) < 8) {
            $errors["password"] = "Password minimal 8 karakter";
        }
    }
    
    // Validate password confirmation
    if (empty($_POST["confirm_password"])) {
        $errors["confirm_password"] = "Konfirmasi password diperlukan";
    } else {
        $confirm_password = test_input($_POST["confirm_password"]);
        // Check if password matches confirmation
        if ($password != $confirm_password) {
            $errors["confirm_password"] = "Password tidak cocok";
        }
    }
    
    // If no errors, process registration
    if (empty($errors)) {
        // Here you would typically:
        // 1. Hash the password
        // 2. Store user information in a database
        // 3. Redirect to login page or dashboard
        
        // For demonstration purposes:
        // Redirect to login page (you should replace this with your actual logic)
        header("Location: login.php");
        exit();
    }
}

// Function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Dompet Mahasiswa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #4CAF50; /* Green background matching login page */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .register-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            padding: 30px;
        }
        
        .register-header {
            text-align: center;
            margin-bottom: 30px;
            color: #4CAF50;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            font-size: 16px;
        }
        
        .btn-register {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        
        .btn-register:hover {
            background-color: #45a049;
        }
        
        .register-footer {
            text-align: center;
            margin-top: 20px;
            color: #333; /* Mengubah warna teks menjadi abu-abu gelap */
        }
        
        .register-footer a {
            color: #4CAF50;
            text-decoration: none;
        }
        
        /* Menambahkan efek underline saat hover pada link */
        .register-footer a:hover {
            text-decoration: underline;
        }
        
        .error-text {
            color: #ff0000;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-header">
            <h2>Selamat datang di Dompet Mahasiswa</h2>
        </div>
        
        <form method="post" action="konfirmasiregister.php">
            <div class="form-group">
                <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan nama lengkap" value="<?php echo $nama_lengkap; ?>">
                <?php if(isset($errors['nama_lengkap'])): ?>
                    <div class="error-text"><?php echo $errors['nama_lengkap']; ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Masukkan username" value="<?php echo $username; ?>">
                <?php if(isset($errors['username'])): ?>
                    <div class="error-text"><?php echo $errors['username']; ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Masukkan email" value="<?php echo $email; ?>">
                <?php if(isset($errors['email'])): ?>
                    <div class="error-text"><?php echo $errors['email']; ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Masukkan password">
                <?php if(isset($errors['password'])): ?>
                    <div class="error-text"><?php echo $errors['password']; ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-group">
                <input type="password" class="form-control" name="confirm_password" placeholder="Konfirmasi password">
                <?php if(isset($errors['confirm_password'])): ?>
                    <div class="error-text"><?php echo $errors['confirm_password']; ?></div>
                <?php endif; ?>
            </div>
            
            <button type="submit" class="btn-register">DAFTAR</button>
        </form>
        
        <div class="register-footer">
            <p>Sudah punya akun? <a href="login.php">Masuk sekarang</a></p>
        </div>
    </div>
</body>
</html>