<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <!-- sidebar.php -->
    <div class="sidebar">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.php">Dompet
                        Mahasiswa</a>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item ">
                        <a href="index.php" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-collection-fill"></i>
                            <span>Edit Fitur</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item">
                                <a href="simulasibiayakuliah.php" class="submenu-link">Simulasi Biaya Kuliah</a>
                            </li>
                            <li class="submenu-item">
                                <a href="extra-component-comment.html" class="submenu-link">Kalkulator Anggaran Hidup</a>
                            </li>
                            <li class="submenu-item">
                                <a href="extra-component-divider.html" class="submenu-link">Simulasi Tabungan Liburan</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-person-circle"></i>
                            <span>Account</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="greetings.php" class="sidebar-link">
                            <i class="bi bi-person-badge-fill"></i>
                            <span>greetings</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="komentar.php" class="sidebar-link">
                            <i class="bi bi-person-badge-fill"></i>
                            <span>komentar</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-x-octagon-fill"></i>
                            <span>Errors</span>
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </div>
   <style>
    .submenu {
        display: none !important;
    }
    .has-sub.active .submenu {
        display: block !important;
    }
    .has-sub > a {
        cursor: pointer;
    }
    .sidebar {
        position: relative;
        z-index: 1000;
    }
</style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleSubmenus = document.querySelectorAll('.has-sub > a');

            toggleSubmenus.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const parentLi = this.parentElement;
                    parentLi.classList.toggle('active');
                });
            });
        });
    </script>
    <!-- <link rel="stylesheet" href="dist/assets/compiled/css/app.css"> -->

</body>

</html>