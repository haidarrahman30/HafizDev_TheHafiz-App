<main id="main">

    <!-- ======= breadrumbs Section ======= -->
    <section class="breadcrumbs bg-sand">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Forum Diskusi</h2>
                <ol>
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li>Forum Diskusi</li>
                </ol>
            </div>

        </div>
    </section><!-- bread Section -->


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Forum Diskusi</h2>
                    <p>Mari berbagi pendapat dan belajar pendapat dari forum diskusi</p>
                </div>
                <?php foreach ($discussions as $dis) :  ?>
                    <div class="card mb-2">
                        <div class="card-header">
                            <div class="media flex-wrap w-100 align-items-center">
                                <div class="media-body ml-3"> <a href="#komentar" data-toggle="collapse" style="text-decoration: none;">
                                        <h3><?= $dis['judul'] ?></h3>
                                    </a>
                                    <div class="text-muted small">Dari <?= $dis['name'] ?> <br> <?= date("F j, Y g:i a", strtotime($dis["date"])) ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p><?= $dis['konten'] ?></p>
                            <div class="pt-3">
                                <?php if ($this->session->userdata('email')) : ?>

                                    <a href="#komen<?= $dis['id_discussion'] ?>" data-toggle="collapse" aria-expanded="false" aria-controls="komen<?= $dis['id_discussion'] ?>" type="button" class="btn btn-light text-right"> <span><i class="far fa-comment ml-2"></i> Berikan Komentar</span></a>

                                <?php endif; ?>

                                <a href="#komentar<?= $dis['id_discussion'] ?>" data-toggle="collapse" type="button" class="btn btn-light text-right"> <span><i class="far fa-eye ml-2"></i> Lihat Komentar</span></a>
                            </div>
                        </div>
                    </div>

                    <?php if ($this->session->userdata('email')) : ?>
                        <!-- Kolom komentar -->
                        <div class="container collapse card-header mb-2" id="komen<?= $dis['id_discussion'] ?>">
                            <form action="<?= base_url('forum/komentari') ?>" method="post" class="p-3">
                                <input class="form-control" type="text" name="komentar" placeholder="Berikan Pendapat anda" autocomplete="off" required>
                                <input type="hidden" value="<?= $dis['id_discussion'] ?>" name="id_discussion">
                                <button type="submit" class="btn btn-primary p-2 mt-2">Komentari</button>
                            </form>
                        </div>
                    <?php endif; ?>

                    <!-- Daftar komentar -->

                    <?php foreach ($komentar as $komen) :  ?>

                        <?php if ($dis['id_discussion'] == $komen['id_discussion']) : ?>

                            <div class="container collapse card-header" id="komentar<?= $komen['id_discussion'] ?>">
                                <div class="card-header">
                                    <div class="media-body ml-3"> <a href="#discussion" data-toggle="collapse" style="text-decoration: none;">
                                            <h6><?= $komen['name'] ?></h6>
                                        </a>
                                        <div class="text-muted small"><?= date("F j, Y g:i a", strtotime($komen["date"])) ?></div>
                                        <p><?= $komen['komentar'] ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endforeach; ?>

                <?php endforeach; ?>


            </div>


        </div>
    </div>
    </div>

</main>