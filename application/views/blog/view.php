<main id="main">
  <!-- ======= breadrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Detail Artikel</h2>
        <ol>
          <li><a href="<?= base_url() ?>">Home</a></li>
          <li>Detail Artikel</li>
        </ol>
      </div>

    </div>
  </section><!-- bread Section -->
  <section class="detail" style="border: none;">
    <div class="container card pt-5 pb-5 mx-auto">
      <div class="col-lg-9 mb-4 mx-auto">
        <img class="img-fluid mx-auto rounded mb-3" src="<?= base_url() ?>assets/img/alquran.jpg">
        <a style="display:block;" href="#" class="mt-4 h2 text-dark"><?= $article['title'] ?></a>
        <p class="mt-4"><?= $article['content'] ?></p>

      </div>
    </div>
  </section>
</main>