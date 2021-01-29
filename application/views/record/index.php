<main id="main">
  <!-- ======= breadrumbs Section ======= -->
  <section class="breadcrumbs bg-sand">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Uji Hafalan Dengan Suara</h2>
        <ol>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li>Uji Hafalan Dengan Suara</li>
        </ol>
      </div>

    </div>
  </section><!-- bread Section -->
  <div class="container col-md-4 col-12 col-sm-5 mt-3">

    <div class="col-2 mx-auto"><i class="text-center biru fa fa-microphone fa-3x"></i></div>
    <div class="section-title mt-3">
      <h2>Uji Hafalan Dengan Suara</h2>
    </div>

    <div class="card mb-3" style="background-color: #fff;
  	border-radius: 15px;
	  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);">
      <div class="card-header text-light p-3 text-center" style="background-color: rgba(30, 67, 86, 0.9); border-radius: 15px;">
        <h5>Uji Hafalan Beberapa Juz</h5>
        <small>*Isi Kolom Berikut dengan rentang Juz yang diiingkan, Contoh <br> 2 sampai 5</small>
      </div>
      <div class="body p-4 d-flex justify-content-between align-items-center">
        <form class="row mt-2" action="<?= base_url('test/start') ?>" method="POST">
          <?= form_error('jumlah', '<small class="ml-2 text-center text-danger pl-3">', '</small>') ?>
          <div class="row col-md-12">

            <div class="form-group col-md-4">
              <input type="number" class="form-control" name="jumlah1" id="jumlah" autocomplete="off" placeholder="Dari Juz" style="font-size: 14px;">
            </div>
            <div class="form-group col-md-4">
              <input type="number" class="form-control" name="jumlah2" id="jumlah" autocomplete="off" placeholder="Sampai Juz" style="font-size: 14px;">
            </div>
            <div class="col-md-3">
              <button type="submit" class=" btn btn-primary white">Mulai</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="card mb-3" style="background-color: #fff; border-radius: 15px; box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);">
      <div class="card-header text-light p-3 text-center" style="background-color: rgba(30, 67, 86, 0.9); border-radius: 15px;">
        <h5>Uji Hafalan Satu Juz Tertentu</h5>
        <small>*Isi Kolom Berikut dengan Nomor Juz yang ingin diuji</small>
      </div>
      <div class="body p-4 d-flex justify-content-between align-items-center m-auto">
        <form class="row mt-1" action="<?= base_url('test/start') ?>" method="POST">
          <?= form_error('juz', '<small class="ml-2 text-center text-danger pl-3">', '</small>') ?>
          <input type="text" name="juz" class="form-control col-5 ml-5" autocomplete="off" required>
          <button type="submit" class="col-4 ml-3 btn btn-primary white">Mulai</button>
        </form>
      </div>
    </div>

    <div class="card mb-3" style="background-color: #fff; border-radius: 15px; box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);">
      <div class="card-header text-light p-3 text-center" style="background-color: rgba(30, 67, 86, 0.9); border-radius: 15px;">
        <h5>Uji Hafalan Per Surah</h5>
        <small>*Isi Kolom Berikut dengan Nomor Surah yang ingin diuji</small>
      </div>
      <div class="body p-4 d-flex justify-content-between align-items-center m-auto">
        <form class="row mt-1" action="<?= base_url('test/start') ?>" method="POST">
          <?= form_error('surah', '<small class="ml-2 text-center text-danger pl-3">', '</small>') ?>
          <input type="text" name="surah" class="form-control col-5 ml-5" autocomplete="off" required>
          <button type="submit" class="col-4 ml-3 btn btn-primary white">Mulai</button>
        </form>
      </div>
    </div>

  </div>