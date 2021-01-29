<main id="main">

  <!-- ======= breadrumbs Section ======= -->
  <section class="breadcrumbs bg-sand">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>Play Booster</h2>
        <ol>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li>Play Booster</li>
        </ol>
      </div>

    </div>
  </section><!-- bread Section -->

  <!-- Accordion -->
  <div class="container-fluid bg-gray" id="accordion-style-1">
    <div class="container">
      <section>
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Play Booster</h2>
              <p>Perbaiki Mood Hati dengan playlist penyejuk hati.</p>
            </div>
          </div>
          <div class="col-10 mx-auto">
            <div class="accordion" id="accordionExample">
              <?php foreach ($play_booster as $play) : ?>

                <div class="card">
                  <div class="card-header" id="heading<?= $play['id_video'] ?> ">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?= $play['id_video'] ?>" aria-expanded="false" aria-controls="collapse<?= $play['id_video'] ?>">
                        <i class="fa fa-plus main"></i></i><i class="fa fa-angle-double-right mr-3"></i><?= $play['judul'] ?>
                      </button>
                    </h5>
                  </div>
                  <div id="collapse<?= $play['id_video'] ?>" class="collapse fade" aria-labelledby="heading<?= $play['id_video'] ?>" data-parent="#accordionExample">
                    <div class="card-body mx-auto m-auto text-center justify-content-center">
                      <iframe class="booster" width="560" height="315" src="<?= $play['url'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

              <?php endforeach; ?>



            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- .// Accordion -->

</main>