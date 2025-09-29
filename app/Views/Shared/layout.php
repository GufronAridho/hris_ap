<?php

use Config\Menu;

$module = service('uri')->getSegment(1);
$menu_items = Menu::$menus[$module] ?? [];

?>
<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title ?? "My App" ?></title>
    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->
    <!--begin::Primary Meta Tags-->
    <meta name="title" content="<?php echo isset($title) ? $title : "My App"; ?>" />
    <meta name="author" content="ColorlibHQ" />
    <meta
        name="description"
        content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS. Fully accessible with WCAG 2.1 AA compliance." />
    <meta
        name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard, accessible admin panel, WCAG compliant" />
    <!--end::Primary Meta Tags-->
    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <!-- Accessibility Features -->
    <meta name="supported-color-schemes" content="light dark" />
    <link rel="preload" href="<?= base_url('dist/adminLte/css/adminlte.css'); ?>" as="style" />

    <!-- Fonts -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
        crossorigin="anonymous"
        media="print"
        onload="this.media='all'" />

    <!-- Core AdminLTE -->
    <link rel="stylesheet" href="<?= base_url('dist/adminLte/css/adminlte.css') ?>">

    <!-- Third Party Plugins -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
        crossorigin="anonymous" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
        integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
        crossorigin="anonymous" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
        integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
        crossorigin="anonymous" />

    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('dist/plugins/fontawosome7/css/all.min.css') ?>">

    <!-- Custom Plugins -->
    <link rel="stylesheet" href="<?= base_url('dist/plugins/DataTables/datatables.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('dist/plugins/select2-4.0.13/css/select2.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dist/plugins/sweetalert2/dist/sweetalert2.min.css') ?>">

</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg sidebar-mini bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        <nav class="app-header navbar navbar-expand-md navbar-dark shadow-sm m-0 p-0">
            <div class="container-fluid d-flex flex-column px-0">
                <!-- Top Nav -->
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-between w-100 py-2 px-3 top_nav_row-black">
                    <!-- Left Section -->
                    <div class="d-none d-md-flex align-items-center mb-2 mb-md-0">
                        <img src="<?= base_url('dist/adminLte/assets/img/AdminLTELogo.png'); ?>" alt="Company Logo" class="me-2" style="height: 40px;">
                        <span class="fw-bold fs-5 text-white">Your Company Name</span>
                    </div>

                    <!-- Middle Section -->
                    <div class="d-none d-md-flex align-items-center mb-2 mb-md-0">
                        <i class="fas fa-cubes me-2 fa-2x text-white"></i>
                        <div class="d-flex flex-column">
                            <span class="fw-semibold fs-5 text-white">HRiS</span>
                            <span class="small text-light">Human Resource Information System</span>
                        </div>
                    </div>

                    <!-- Right Section -->
                    <div class="d-flex align-items-center flex-wrap">
                        <span class="me-2 text-white">Gufron Aridho</span>
                        <i class="fas fa-user-circle fa-2x text-warning me-2"></i>

                        <div class="dropdown me-2">
                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fas fa-cog"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-key me-2"></i>Change Password</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-user-cog me-2"></i>Profile Settings</a></li>
                            </ul>
                        </div>

                        <a href="#" class="btn btn-sm btn-outline-info me-2">Help</a>

                        <a href="#" class="btn btn-sm btn-outline-danger">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>

                    </div>
                </div>

                <!-- Bottom Nav -->
                <div class="d-flex align-items-center justify-content-between w-100 py-2 px-3 bottom_nav_row-purple">
                    <button class="btn btn-sm btn-outline-light d-md-none rounded" type="button" data-bs-toggle="collapse" data-bs-target="#bottomNavMenu" aria-controls="bottomNavMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <!-- Menu -->
                    <div class="collapse d-md-flex flex-grow-1" id="bottomNavMenu">
                        <ul class="nav w-100 ">
                            <?php foreach ($menu_items as $item): ?>
                                <li class="nav-item">
                                    <a class="nav-link text-white <?= (uri_string() == $item['url']) ? 'active fw-bold border-bottom border-white' : 'text-light' ?>" href="<?= base_url($item['url']) ?>">
                                        <strong>
                                            <?= $item['label'] ?>
                                        </strong>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!--end::Header-->

        <!--begin::Main-->
        <?= $this->renderSection('content') ?>
        <!--end::Main-->

        <!--begin::Footer-->
        <footer class="app-footer top_nav_row-black d-flex justify-content-between align-items-center px-3 py-1">
            <!-- Left content -->
            <div>
                <strong>Copyright &copy; 2014-2025&nbsp;</strong> All rights reserved.
            </div>

            <!-- Right content -->
            <div class="d-none d-sm-block">
                Anything you want
            </div>
        </footer>

        <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <style>
        .nav-link.active {
            background-color: #7030a0 !important;
            color: #fff !important;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
            /* needed for animation */
        }

        .nav-link.active::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 10%;
            width: 80%;
            height: 5px;
            background-color: #efb11f;
            border-radius: 6px;
        }

        .top_nav_row-black {
            background-color: #1f1f1f;
            color: #efb11f;
        }

        .top_nav_row-black .nav-link,
        .top_nav_row-black span,
        .top_nav_row-black i,
        .top_nav_row-black .dropdown-item {
            color: #efb11f !important;
        }

        .top_nav_row-black .dropdown-menu {
            background-color: #1f1f1f;
        }

        .top_nav_row-black .dropdown-item:hover {
            background-color: #1a1a1a;
        }

        .bottom_nav_row-purple {
            background-color: #800080;
            color: #fff;
        }

        .bottom_nav_row-purple .nav-link,
        .bottom_nav_row-purple span,
        .bottom_nav_row-purple i,
        .bottom_nav_row-purple .btn {
            color: #fff !important;
        }

        .bottom_nav_row-purple .btn-outline-secondary,
        .bottom_nav_row-purple .btn-outline-info,
        .bottom_nav_row-purple .btn-outline-danger {
            border-color: #fff;
        }

        .bottom_nav_row-purple .nav-link.active {
            font-weight: bold;
            text-decoration: underline;
        }

        .bottom_nav_row-purple {
            margin-top: -1px;
        }

        nav.app-header {
            padding-bottom: 0;
            margin-bottom: 0;
        }

        .nav-link:hover {
            color: #ffd700 !important;
            transition: color 0.3s;
        }

        .bottom_nav_row-purple .nav-link.active {
            border-bottom: 3px solid #fff;
        }

        .btn-outline-light:hover {
            background-color: #fff;
            color: #000 !important;
        }

        .app-footer {
            min-height: 0;
        }
    </style>
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
        src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
        crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->

    <!-- Core JS -->
    <script src="<?= base_url('dist/plugins/jquery/jquery-3.7.1.min.js') ?>"></script>
    <script src="<?= base_url('dist/adminLte/js/adminlte.js') ?>"></script>

    <!-- UI & Icons -->
    <script src="<?= base_url('dist/plugins/fontawosome7/js/all.min.js') ?>"></script>

    <!-- Plugins -->
    <script src="<?= base_url('dist/plugins/DataTables/datatables.min.js') ?>"></script>
    <script src="<?= base_url('dist/plugins/select2-4.0.13/js/select2.full.min.js') ?>"></script>
    <script src="<?= base_url('dist/plugins/sweetalert2/dist/sweetalert2.all.min.js') ?>"></script>

    <?= $this->renderSection('script'); ?>
    <!--end::Script-->
</body>
<!--end::Body-->

</html>