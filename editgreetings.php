<?php
session_start();
include('../koneksi/koneksi.php');
if (isset($_GET['data'])) {

    $id_greetings = $_GET['data'];
    $_SESSION['id_greetings'] = $id_greetings;

    $sql_d = "select `isi_greetings` from `greetings` where`id_greetings` = '$id_greetings'";
    $query_d = mysqli_query($koneksi, $sql_d);
    while ($data_d = mysqli_fetch_row($query_d)) {
        $greetings = $data_d[0];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - DompetMahasiswa</title>
    <link rel="stylesheet" href="dist/assets/compiled/css/app.css">
    <link rel="stylesheet" href="dist/assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="dist/assets/compiled/css/iconly.css">
    <style>
        .container {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .textarea-full {
            width: 100%;
            max-width: 100%;
            height: 300px;

            padding: 10px;
            box-sizing: border-box;
            background-color: #1a1a2e;

            color: #fff;
            border: 1px solid #444;
            border-radius: 5px;
            resize: vertical;
        }

        label {
            display: block;

            margin-bottom: 20px;

            font-weight: 600;
            font-size: 16px;
        }

        .edit-btn {
            display: inline-block;
            margin-bottom: 15px;
            margin-left: 20px;
            padding: 8px 16px;
            background-color: rgb(1, 56, 116);
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .edit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <?php include("includes/sidebar.php") ?>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">

        <!-- Main Content -->
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Edit Greetings </h3>
            </div>

            <div class="container">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" class="textarea-full" rows="10" name="greetings"><?= isset($greetings) ? htmlspecialchars($greetings) : '' ?></textarea>
            </div>
            <div class="content-box">
                <a href="greetings.php" class="edit-btn">simpan</a>
                <div class="description">
                    <!-- isi deskripsi -->
                </div>
            </div>


            <footer>
                <div class="footer text-muted text-center py-3">
                    <p>2025 &copy; DompetMahasiswa</p>
                </div>
            </footer>
        </div>
    </div>

    <!-- Scripts -->
    <script src="dist/assets/static/js/components/dark.js"></script>
    <script src="dist/assets/compiled/js/app.js"></script>
</body>

</html>