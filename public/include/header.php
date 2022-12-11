<?php $profileInfo = $profile->getData($_SESSION['user']->uuid); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PedalBucks | Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/assets/js/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="/assets/js/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/js/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/js/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="/assets/css/adminlte.min.css">
    <link rel="stylesheet" href="/assets/js/plugins/sweetalert2/sweetalert2.min.css" />
    <script src="/assets/js/plugins/jquery/jquery.min.js"></script>
    <script src="/assets/js/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/notification.php'; ?>

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <img src="/assets/index/Logo Group.ico" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><b>Pedal</b> Bucks</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/assets/img/default_pfp.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $profileInfo->firstname . " " . $profileInfo->lastname; ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="fas fa-tools"></i>
                                <p>
                                    Administrative Board
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="?field=1&content=syslogs" class="nav-link">
                                        <i class="fas fa-book"></i>
                                        <p>System Logs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-tools"></i>
                                        <p>
                                            Website Settings
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="?field=2&content=advertisements" class="nav-link">
                                                <i class="fas fa-folder nav-icon"></i>
                                                <p>Advertisements</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="?field=2&content=features" class="nav-link">
                                                <i class="fas fa-folder nav-icon"></i>
                                                <p>Web Features</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-coins"></i>
                                        <p>
                                            Economy Tools
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="?field=3&content=economy" class="nav-link">
                                                <i class="fas fa-folder nav-icon"></i>
                                                <p>Economy List</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="?field=3&content=task" class="nav-link">
                                                <i class="fas fa-folder nav-icon"></i>
                                                <p>Task List</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-shopping-cart"></i>
                                        <p>
                                            Product Tools
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="fas fa-folder nav-icon"></i>
                                                <p>Brand List</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="fas fa-folder nav-icon"></i>
                                                <p>Category List</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="?field=4&content=product" class="nav-link">
                                                <i class="fas fa-folder nav-icon"></i>
                                                <p>Product List</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-users"></i>
                                        <p>
                                            User Tools
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="?field=5&content=profile" class="nav-link">
                                                <i class="fas fa-folder nav-icon"></i>
                                                <p>Profile List</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="?field=5&content=user" class="nav-link">
                                                <i class="fas fa-folder nav-icon"></i>
                                                <p>User List</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">