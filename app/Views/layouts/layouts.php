<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

    <?= $this->renderSection('css'); ?>

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/components.css">

    <link rel="stylesheet" href="<?= base_url() ?>/assets/modules/izitoast/css/iziToast.min.css">
    <script src="<?= base_url() ?>/assets/modules/izitoast/js/iziToast.min.js"></script>

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url() ?>/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block"><?= session()->get('nama') ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <!-- <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a> -->
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">A'Dinda Kue</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">AK</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="dropdown <?= $title == 'Dashboard' ? 'active' : '' ?>">
                            <a href="<?= base_url('dashboard') ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Perusahaan</li>
                        <li class="dropdown <?= $title == 'Profile Perusahaan' ? 'active' : '' ?>">
                            <a href="<?= base_url('dashboard/profile-perusahaan') ?>" class="nav-link"><i class="fas fa-building"></i><span>Profile Perusahaan</span></a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Master</li>
                        <li class="dropdown <?= $title == 'Produk' ? 'active' : '' ?>">
                            <a href="<?= base_url('dashboard/produk') ?>" class="nav-link"><i class="fas fa-archive"></i><span>Produk</span></a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Proses</li>
                        <li class="dropdown <?= $title == 'Produksi' ? 'active' : '' ?>">
                            <a href="<?= base_url('dashboard/produksi') ?>" class="nav-link"><i class="fas fa-industry"></i><span>Produksi</span></a>
                        </li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <?= $this->renderSection('content'); ?>
            <!-- End Main Content -->
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; <?= date('Y') ?> A'Dinda Kue
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>/assets/modules/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/modules/popper.js"></script>
    <script src="<?= base_url() ?>/assets/modules/tooltip.js"></script>
    <script src="<?= base_url() ?>/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>/assets/modules/moment.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url() ?>/assets/modules/jquery.sparkline.min.js"></script>
    <script src="<?= base_url() ?>/assets/modules/chart.min.js"></script>
    <script src="<?= base_url() ?>/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/assets/modules/summernote/summernote-bs4.js"></script>
    <script src="<?= base_url() ?>/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url() ?>/assets/js/page/index.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/assets/js/custom.js"></script>


    <!-- Page Specific JS File -->
    <?= $this->renderSection('script'); ?>
</body>

</html>