<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/1654320a29.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('asset/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/style2.css'); ?>">
    <title><?= $title ?></title>

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white gothic shadow mb-4">
        <a class="navbar-brand" href="<?= base_url() ?>">
            <p class="hijau h2">The<span class="biru h2">Hafiz</span></p>
        </a>
        <button class="navbar-toggler hijau" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="hijau h4"><i class="fa fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto h4">
                <li class="nav-item abu mx-auto">
                    <a class="nav-link" href="<?= base_url() ?>">Home</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class="nav-link" href="<?= base_url('kontributor') ?>">Kontributor</a>
                </li>
                <li class="nav-item dropdown mx-auto">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Uji Hafalan
                    </a>
                    <div class="dropdown-menu h4 mx-auto" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item abu h4" href="<?= base_url('test/record') ?>">Uji Hafalan Dengan Suara</a>
                        <a class="dropdown-item abu h4" href="<?= base_url('test') ?>">Uji Hafalan Biasa</a>
                    </div>
                </li>
                <li class="nav-item dropdown mx-auto">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Audio Qur'an
                    </a>
                    <div class="dropdown-menu h4" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item abu h4" href="<?= base_url('voice') ?>">Audio per Ayat</a>
                        <a class="dropdown-item abu h4" href="<?= base_url('voice/page') ?>">Audio Per Halaman</a>
                    </div>
                </li>
                <li class="nav-item mx-auto">
                    <a class="nav-link" href="<?= base_url('report') ?>">Laporkan Masalah</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class="nav-link" href="<?= base_url('contact') ?>">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </nav>