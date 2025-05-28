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

<body>
    <?php include ("includes/sidebar.php") ?>
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
                <h3>Profile </h3>
            </div>

            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <!-- Card Ringkas -->
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="stats-icon purple mb-2"><i class="iconly-boldShow"></i></div>
                                        <h6>Profile Views</h6>
                                        <h6>112.000</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="stats-icon blue mb-2"><i class="iconly-boldProfile"></i></div>
                                        <h6>Followers</h6>
                                        <h6>183.000</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="stats-icon green mb-2"><i class="iconly-boldAdd-User"></i></div>
                                        <h6>Following</h6>
                                        <h6>80.000</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="stats-icon red mb-2"><i class="iconly-boldBookmark"></i></div>
                                        <h6>Saved Post</h6>
                                        <h6>112</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Chart Placeholder -->
                        <div class="card mt-4">
                            <div class="card-header">
                                <h4>Profile Visit</h4>
                            </div>
                            <div class="card-body">
                                <div style="height: 200px; background: #eee; display: flex; align-items: center; justify-content: center;">
                                    [Chart Placeholder]
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Right -->
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="./assets/compiled/jpg/1.jpg" class="rounded-circle mb-2" width="80" height="80" alt="">
                                <h5 class="mb-0">Rio</h5>
                                <small>@Rio</small>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Recent Messages</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                    <li>Singgih (@singgih123)</li>
                                    <li>Aqilla (@aqilla321)</li>
                                    <li>Rayyan (@rayyan11)</li>
                                </ul>
                                <button class="btn btn-outline-primary btn-block mt-3">Start Conversation</button>
                            </div>
                        </div>
                    </div>
                </section>
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