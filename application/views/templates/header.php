<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="icon" href="<?= base_url('assets/img/') ?>logo1.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style-baru.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Poppins&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Noto+Serif&family=Poppins&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url() ?>/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/vendor/aos/aos.css" rel="stylesheet">
  <title><?= $title ?></title>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="<?= base_url() ?>"><span>TheHafiz</span></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li class="drop-down"><a href="">Uji Hafalan</a>
            <ul>
              <li><a href="<?= base_url() ?>test/record">Uji Hafalan Dengan Suara</a></li>
              <li><a href="<?= base_url() ?>test">Uji Hafalan Dengan Tulisan</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">Murotal Qur'an</a>
            <ul>
              <li><a href="<?= base_url() ?>audio">Murotal Qur'an Per Ayat</a></li>
              <li><a href="<?= base_url() ?>audio/page">Murotal Qur'an Per Halaman</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">Moodboostering</a>
            <ul>
              <li><a href="<?= base_url() ?>moodbooster">Play Booster</a></li>
              <li><a href="<?= base_url() ?>forum">Diskusi Forum</a></li>
              <li><a href="<?= base_url() ?>moodbooster/reminder">Reminder</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url() ?>blog">Upgrade Wawasan</a></li>
          <?php if (!$this->session->userdata('email')) : ?>
            <li><a href="<?= base_url() ?>auth">Login</a></li>
          <?php else : ?>
            <li><a href="<?= base_url() ?>kontributor">Dashboard</a></li>
          <?php endif; ?>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->