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
      <h2>Murotal Quran PerAyat - TheHafiz</h2>
      <p>Silahkan Pilih Surah Yang Ingin Didengarkan.</p>
  </div>

  <div class="container">


      <div class="row ml-5">
          <div class="col-md-4 col-12">
              <?php foreach ($row1 as $su) : ?>
                  <table class="table">
                      <tr class="row">
                          <td class="col-2 col-md-1 p-0">
                              <div class="bg-biru p-1">
                                  <p class="white text-center"><?= $su['suraId'] ?></p>
                              </div>
                          </td>
                          <td class="p-2 col-7 col-md-9">
                              <a class="text-decoration-none" href="<?= base_url('audio/view') ?>?suraId=<?= $su['suraId'] ?>">
                                  <div class="col-10"><?= $su['surahName'] ?></div>
                              </a>
                          </td>
                      </tr>
                  </table>
              <?php endforeach; ?>
          </div>

          <div class="col-md-4 col-12">
              <?php foreach ($row2 as $su) : ?>
                  <table class="table">
                      <tr class="row">
                          <td class="col-2 col-md-1 p-0">
                              <div class="bg-biru p-1">
                                  <p class="white text-center"><?= $su['suraId'] ?></p>
                              </div>
                          </td>
                          <td class="p-2 col-7 col-md-9">
                              <a class="text-decoration-none" href="<?= base_url('audio/view') ?>?suraId=<?= $su['suraId'] ?>">
                                  <div class="col-10"><?= $su['surahName'] ?></div>
                              </a>
                          </td>
                      </tr>
                  </table>
              <?php endforeach; ?>
          </div>

          <div class="col-md-4 col-11">
              <?php foreach ($row3 as $su) : ?>
                  <table class="table">
                      <tr class="row">
                          <td class="col-2 col-md-1 p-0">
                              <div class="bg-biru p-1" style="margin-right: -10px;">
                                  <p class="white text-center"><?= $su['suraId'] ?></p>
                              </div>
                          </td>
                          <td class="p-2 col-7 col-md-9">
                              <a class="text-decoration-none" href="<?= base_url('audio/view') ?>?suraId=<?= $su['suraId'] ?>">
                                  <div class="col-10"><?= $su['surahName'] ?></div>
                              </a>
                          </td>
                      </tr>
                  </table>
              <?php endforeach; ?>
          </div>

      </div>
  </div>