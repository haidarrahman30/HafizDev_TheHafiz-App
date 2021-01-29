  <!-- ======= breadrumbs Section ======= -->
  <section class="breadcrumbs bg-sand">
      <div class="container">
          <div class="d-flex justify-content-between align-items-center">
              <h2>Murotal Quran</h2>
              <ol>
                  <li><a href="<?= base_url() ?>">Home</a></li>
                  <li>Murotal Quran</li>
              </ol>
          </div>

      </div>
  </section><!-- bread Section -->

  <div class="section-title mt-3">
      <h2>Murotal Quran PerJuz - TheHafiz</h2>
      <p>Silahkan Pilih Juz Yang Ingin Didengarkan.</p>
  </div>

  <div class="container">
      <div class="row col-md-10 d-flex justify-content-between mx-auto col-12">
          <div class="col-11 col-md-3">

              <?php foreach ($juz1 as $juz) : ?>
                  <table class="table">
                      <tr class="row">
                          <td class="col-2 col-md-2 p-0">
                              <div class="bg-biru p-1">
                                  <p class="white text-center"><?= $juz['juz'] ?></p>
                              </div>
                          </td>
                          <td class="p-1 col-10">
                              <a class="text-decoration-none" href="<?= base_url('audio/pageview') ?>?juz=<?= $juz['juz'] ?>">
                                  <div class="col-10">Juz <?= $juz['juz'] ?></div>
                              </a>
                          </td>
                      </tr>
                  </table>
              <?php endforeach; ?>

          </div>
          <div class="col-11 col-md-3">
              <?php foreach ($juz2 as $juz) : ?>
                  <table class="table">
                      <tr class="row">
                          <td class="col-2 col-md-2 p-0">
                              <div class="bg-biru p-1">
                                  <p class="white text-center"><?= $juz['juz'] ?></p>
                              </div>
                          </td>
                          <td class="p-1 col-10">
                              <a class="text-decoration-none" href="<?= base_url('audio/pageview') ?>?juz=<?= $juz['juz'] ?>">
                                  <div class="col-10">Juz <?= $juz['juz'] ?></div>
                              </a>
                          </td>
                      </tr>
                  </table>
              <?php endforeach; ?>

          </div>
          <div class="col-11 col-md-3">

              <?php foreach ($juz3 as $juz) : ?>
                  <table class="table">
                      <tr class="row">
                          <td class="col-2 col-md-2 p-0">
                              <div class="bg-biru p-1">
                                  <p class="white text-center"><?= $juz['juz'] ?></p>
                              </div>
                          </td>
                          <td class="p-1 col-10">
                              <a class="text-decoration-none" href="<?= base_url('audio/pageview') ?>?juz=<?= $juz['juz'] ?>">
                                  <div class="col-10">Juz <?= $juz['juz'] ?></div>
                              </a>
                          </td>
                      </tr>
                  </table>
              <?php endforeach; ?>

          </div>
      </div>
  </div>