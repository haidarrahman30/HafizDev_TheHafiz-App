<main id="main">
  <!-- ======= breadrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Detail Ayat</h2>
        <ol>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li><a href="<?= base_url() ?>test">Uji Hafalan</a></li>
          <li><a href="<?= base_url() ?>question">Pertanyaan</a></li>
          <li><a href="<?= base_url() ?>answer">Jawaban</a></li>
          <li>Detail Ayat</li>
        </ol>
      </div>

    </div>
  </section><!-- bread Section -->
  <div class="col-md-7 col-12 mx-auto mt-5">
    <div class="d-flex justify-content-between">
      <h4 class="gothic h4">Juz <?= $detail->juz; ?></h4>
      <h4 class="gothic h4"><?= $detail->surahName; ?></h4>
    </div>


    <div class="detail">
      <p class="arab" dir="rtl" lang="ar"> <?= $detail->ayahText; ?> <span><?= $num ?></span></p>
      <br>
      <p class="arti"> Artinya: <br> <?= $detail->indoText; ?></p>
    </div>
    <div class="atas">
      <h4 class="gothic text-center h4">Hal-<?= $detail->page; ?></h4>
    </div>
    <div class="buttonbox d-flex justify-content-between">
      <a class="btn btn-success white" href="<?= base_url() ?>question"> Mulai ulang </a>
      <a class="btn btn-primary white" href="<?= base_url('test') ?>"> Home </a>
    </div>

  </div>
</main>
<div style="margin-bottom:2em"></div>