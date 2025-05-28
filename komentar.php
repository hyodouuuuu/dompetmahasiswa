<?php
include('koneksi.php');

if (isset($_GET['aksi']) && $_GET['aksi'] == 'hapus' && isset($_GET['id'])) {
    $id_komentar_hapus = intval($_GET['id']);
    $hapus_sql = "DELETE FROM komentar WHERE id_komentar = ?";
    $stmt = $koneksi->prepare($hapus_sql);
    $stmt->bind_param('i', $id_komentar_hapus);
    $stmt->execute();
    $stmt->close();

    header('Location: komentar.php?notif=hapusberhasil');
    exit;
}

$sql = "SELECT k.id_komentar, u.nama_lengkap, k.isi_komentar, k.tanggal_komentar
        FROM komentar k
        INNER JOIN user u ON k.id_pengguna = u.id_pengguna
        ORDER BY k.tanggal_komentar DESC";

$result = $koneksi->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/head.php") ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - DompetMahasiswa</title>
    <link rel="stylesheet" href="dist/assets/compiled/css/app.css">
    <link rel="stylesheet" href="dist/assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="dist/assets/compiled/css/iconly.css">
</head>
<style>
    .sidebar {
        background-color: #123456 !important;
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: #0f0f1a;
        color: #fff;
        margin: 0;
        padding: 0;
    }

    .container {
        margin-left: 380px;
        padding: 30px;

    }

    h2 {
        font-size: 24px;
        margin-bottom: 20px;
        color: #ffffff;
    }

    .table-box {
        background-color: #1a1a2e;
        padding: 20px;
        border-radius: 8px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #333;
    }

    th {
        background-color: #1f1f38;
        color: #aab1ff;
    }

    tr:nth-child(even) {
        background-color: #141425;
    }

    tr:hover {
        background-color: #22223d;
    }

    .btn-delete {
        background-color: #eab308;
        color: #000;
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        font-size: 12px;
        cursor: pointer;
    }

    .footer {
        text-align: center;
        padding: 20px;
        font-size: 14px;
        color: #a0a0b0;
    }
</style>

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
                <h3>komentar </h3>
            </div>



            <div class="table-box">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Komentar</th>
                            <th>tanggal</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $no = 1;
                        while ($row = $result->fetch_assoc()):
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= htmlspecialchars($row['nama_lengkap']); ?></td>
                                <td><?= htmlspecialchars($row['isi_komentar']); ?></td>
                                <td><?= htmlspecialchars($row['tanggal_komentar']); ?></td>
                                <td>
                                    <a href="komentar.php?aksi=hapus&id=<?= $row['id_komentar']; ?>"
                                        class="btn-hapus"
                                        onclick="return confirm('Yakin ingin menghapus komentar ini?')">
                                        🗑 hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endwhile; ?>

                    </tbody>
                </table>
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