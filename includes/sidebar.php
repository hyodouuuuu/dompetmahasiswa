<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Navigation</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>
    <!-- sidebar.php -->
    <div class="sidebar">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.php">Dompet Mahasiswa</a>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>
                    <li class="sidebar-item">
                        <a href="index.php" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item dropdown-parent">
                        <a href="#" class='sidebar-link dropdown-toggle'>
                            <i class="bi bi-collection-fill"></i>
                            <span>Edit Fitur</span>
                            <i class="bi bi-chevron-down dropdown-icon"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="submenu-item">
                                <a href="simulasibiayakuliah.php" class="submenu-link">
                                    <i class="bi bi-calculator"></i>
                                    <span>Simulasi Biaya Kuliah</span>
                                </a>
                            </li>
                            <li class="submenu-item">
                                <a href="kalkulator-anggaran.php" class="submenu-link">
                                    <i class="bi bi-piggy-bank"></i>
                                    <span>Kalkulator Anggaran Hidup</span>
                                </a>
                            </li>
                            <li class="submenu-item">
                                <a href="simulasi-tabungan.php" class="submenu-link">
                                    <i class="bi bi-wallet2"></i>
                                    <span>Simulasi Tabungan Liburan</span>
                                </a>
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
                            <span>Greetings</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="komentar.php" class="sidebar-link">
                            <i class="bi bi-chat-dots-fill"></i>
                            <span>Komentar</span>
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
        /* Basic Sidebar Styling */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #435ebe;
            color: white;
            font-family: Arial, sans-serif;
            position: fixed;
            left: 0;
            top: 0;
        }

        .sidebar-header {
            padding: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .logo a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
        }

        /* Menu Styling */
        .menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-title {
            padding: 20px 20px 10px;
            font-size: 12px;
            text-transform: uppercase;
            color: rgba(255,255,255,0.6);
            font-weight: bold;
        }

        .sidebar-item {
            position: relative;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            background: none;
            width: 100%;
            cursor: pointer;
        }

        .sidebar-link:hover {
            background: rgba(255,255,255,0.1);
            color: white;
        }

        .sidebar-link i {
            margin-right: 10px;
            font-size: 16px;
            width: 20px;
            text-align: center;
        }

        /* Dropdown Specific Styling */
        .dropdown-parent {
            position: relative;
        }

        .dropdown-toggle {
            justify-content: space-between;
            width: 100%;
        }

        .dropdown-icon {
            margin-left: auto;
            margin-right: 0;
            transition: transform 0.3s ease;
            font-size: 12px;
        }

        .dropdown-parent.active .dropdown-icon {
            transform: rotate(180deg);
        }

        .dropdown-menu {
            display: none;
            list-style: none;
            padding: 0;
            margin: 0;
            background: rgba(0,0,0,0.1);
        }

        .dropdown-parent.active .dropdown-menu {
            display: block;
        }

        .submenu-item {
            border-left: 3px solid transparent;
        }

        .submenu-link {
            display: flex;
            align-items: center;
            padding: 10px 20px 10px 35px;
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .submenu-link:hover {
            background: rgba(255,255,255,0.1);
            color: white;
            border-left-color: #25d0e5;
        }

        .submenu-link i {
            margin-right: 8px;
            font-size: 14px;
            width: 16px;
        }

        /* Active States */
        .sidebar-item.active > .sidebar-link,
        .submenu-item.active .submenu-link {
            background: rgba(255,255,255,0.1);
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle dropdown toggle
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
            
            dropdownToggles.forEach(function(toggle) {
                toggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    const parentLi = this.closest('.dropdown-parent');
                    
                    // Toggle current dropdown
                    parentLi.classList.toggle('active');
                    
                    // Optional: Close other dropdowns
                    document.querySelectorAll('.dropdown-parent').forEach(function(item) {
                        if (item !== parentLi) {
                            item.classList.remove('active');
                        }
                    });
                });
            });

            // Set active state based on current URL
            const currentPath = window.location.pathname;
            const allLinks = document.querySelectorAll('.sidebar-link, .submenu-link');
            
            allLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath.split('/').pop()) {
                    link.closest('.sidebar-item')?.classList.add('active');
                    // If it's a submenu item, also activate the parent dropdown
                    const dropdownParent = link.closest('.dropdown-parent');
                    if (dropdownParent) {
                        dropdownParent.classList.add('active');
                    }
                }
            });
        });
    </script>
</body>
</html>