<!DOCTYPE html>
<html lang="en-id">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I-TAK</title>

    <!-- CSS Vendor -->
    <link rel="stylesheet" href="<?= base_url('_assets/vendor/bootstrap-4.5.0-dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('_assets/vendor/fontawesome-free-5.13.0-web/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('_assets/vendor/owl-carousel/owl.carousel.css'); ?>">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('_assets/css/style.css') ?>">

    <!-- JQuery 3.3.1 -->
    <script src="<?= base_url('_assets/vendor/jquery.min.js') ?>"></script>

    <!-- JS Vendor -->
    <script src="<?= base_url('_assets/vendor/bootstrap-4.5.0-dist/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('_assets/vendor/bootstrap-4.5.0-dist/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('_assets/vendor/owl-carousel/owl.carousel.min.js') ?>"></script>

</head>

<body style="background-color: #A63333;">

    <!-- Navbar -->
    <nav class="navbar fixed-top">
        <div class="container loss">

            <a class="menu-trigger show-mobile"><span class="fas fa-bars"></span></a>
            <a class="navbar-brand" href="<?= base_url('main') ?>"><img src="<?= base_url('_assets/img/logo.png') ?>" /></a>

            <div class="fik-navbar-menu">
                <ul class="center">
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li><a href="<?= base_url('Event/') ?>">Semua Event</a></li>
                    <li><a href="<?= base_url('Cevent/islogin') ?>">Buat Event</a></li>
                    <?php if ($this->session->userdata('role') == 'user') : ?>
                        <li><a href="<?= base_url('main/eventakun') ?>">Eventku</a></li>
                    <?php elseif ($this->session->userdata('role') == 'admin') : ?>
                        <li><a href="<?= base_url('main/publish') ?>">Permintaan Publish</a></li>
                    <?php endif; ?>
                </ul>
                <ul class="right">
                    <div class="dropdown show fik-login-dropdown">
                        <?php if (isset($_SESSION['username'])) : ?>
                            <a class="btn btn-sm btn-pill btn-icon btn-icon-left dropdown-toggle" href="#" role="div" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fa fa-user-circle"></span>
                                <?= $this->session->userdata('nama'); ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-item regis-dropdown">
                                    <a class="dropdown-item" href="<?= base_url('auth/check') ?>">
                                        <i class="fas fa-th-large fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Dashboard
                                    </a>
                                    <a class="dropdown-item" href="<?= base_url('main/helpdesk') ?>">
                                        <i class="fas fa-life-ring fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Helpdesk
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('main/logout'); ?>">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </div>
                        <?php else : ?>
                            <a class="btn btn-sm btn-pill btn-icon btn-icon-left dropdown-toggle" href="<?= base_url('main/login') ?>">
                                <span class="fa fa-user-circle"></span>
                                Login
                            </a>
                        <?php endif; ?>
                    </div>
                </ul>
            </div>

        </div>
    </nav>
    <!-- End Navbar -->