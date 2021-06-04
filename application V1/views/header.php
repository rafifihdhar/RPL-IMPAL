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
            <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url('_assets/img/logo.png') ?>" /></a>

            <div class="fik-navbar-menu">
                <ul class="center">
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li><a href="<?= base_url('Event/') ?>">Semua Event</a></li>
                    <li><a href="<?= base_url('Cevent/tambahevent') ?>">Buat Event</a></li>
                </ul>
                <ul class="right">
                    <div class="dropdown show fik-login-dropdown">
                        <a class="btn btn-sm btn-pill btn-icon btn-icon-left dropdown-toggle" href="#" role="div" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fa fa-user-circle"></span> Login
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-item regis-dropdown">
                                <form action="#">
                                    <h6>Login to Account</h6>
                                    <div class="custom-form">
                                        <div class="form-group" style="margin-bottom:12px">
                                            <input type="text" name="" class="form-control" placeholder="" required="required" autocomplete="off" />
                                            <label>Username</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="" class="form-control" placeholder="" required="required" autocomplete="off" />
                                            <label>Password</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-sm btn-icon btn-icon-right">Login <span class="fas fa-sign-in-alt"></span></button>
                                </form>
                            </div>
                        </div>

                    </div>
                </ul>
            </div>

        </div>
    </nav>
    <!-- End Navbar -->