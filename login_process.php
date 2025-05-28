<?php

session_start();


$host = "localhost";
$dbname = "dompetmahasiswa";
$username = "root";
$password = "";

try {
    // Create database connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Debug: Check connection
    // echo "Connected successfully"; exit;
    
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get username/email and password from form
        $user_input = $_POST['username'];
        $password = $_POST['password'];
        
        // Prepare SQL statement to check user credentials
        $stmt = $conn->prepare("SELECT * FROM user WHERE (email = :user_input OR username = :user_input)");
        $stmt->bindParam(':user_input', $user_input);
        $stmt->execute();
        
        // Get the user data
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Debug: Output fetched user data (uncomment to check)
        /*
        echo "<pre>";
        var_dump($user);
        echo "</pre>";
        exit();
        */
        
        // Check if user exists
        if ($user) {
            // Verify password using MD5
            if (md5($password) == $user['password']) {
                // Set session variables
                $_SESSION['logged_in'] = true;
                
                // Perbaikan untuk nama kolom ID:
                // Menggunakan kondisional untuk memeriksa kolom apa yang ada di tabel
                if (isset($user['id_pengguna'])) {
                    $_SESSION['id_user'] = $user['id_pengguna'];
                } elseif (isset($user['id'])) {
                    $_SESSION['id_user'] = $user['id'];
                }
                
                $_SESSION['username'] = $user['username'];
                $_SESSION['level'] = $user['level'];
                
                // Debug session after setting
                /*
                echo "<pre>";
                var_dump($_SESSION);
                echo "</pre>";
                exit();
                */
                
                // Redirect based on user level
                if ($user['level'] == 'superadmin') {
                    header("Location: index.php");
                    exit();
                } else if ($user['level'] == 'user') {
                    header("Location: dashboard.php");
                    exit();
                }
            } else {
                // Invalid password
                $_SESSION['login_error'] = "Email/username atau password salah!";
                header("Location: login.php");
                exit();
            }
        } else {
            // User not found
            $_SESSION['login_error'] = "Email/username atau password salah!";
            header("Location: login.php");
            exit();
        }
    } else {
        // If not submitted via POST, redirect to login page
        header("Location: login.php");
        exit();
    }
} catch(PDOException $e) {
    // Handle database connection errors
    $_SESSION['login_error'] = "Error: " . $e->getMessage();
    header("Location: login.php");
    exit();
}
?>