<main id="main">
    <!-- ======= breadrumbs Section ======= -->
    <section class="breadcrumbs bg-sand">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Daftar Artikel</h2>
                <ol>
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li>Daftar Artikel</li>
                </ol>
            </div>

        </div>
    </section><!-- bread Section -->

    <div class="section-title mt-3">
        <h2>Daftar Artikel - TheHafiz</h2>
        <p>Upgrade Wawasan anda dengan membaca artikel dan ilmu pengetahuan.</p>
    </div>


    <div class="container mt-100 mt-60 mb-2">

        <div class="row">

            <?php foreach ($article as $ar) : ?>
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="blog-post rounded border">
                        <div class="blog-img d-block overflow-hidden position-relative">
                            <img src="<?= base_url() ?>assets/img/alquran.jpg" class="img-fluid rounded-top" alt="">
                            <div class="overlay rounded-top bg-dark"></div>
                            <div class="post-meta">
                                <a href="<?= base_url('blog/view') . '?id=' . $ar['id_article'] ?>" class="text-light read-more">Read More <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="content p-3">
                            <small class="text-muted p float-right"><?= date("F j, Y", strtotime($ar["created_at"])) ?></small>
                            <h4 class="mt-2"><a href="<?= base_url('blog/view') . '?id=' . $ar['id_article'] ?>" class="text-dark title"><?= $ar['title'] ?></a></h4>
                            <div class="content-singkat">
                                <p class="text-muted mt-2 card-text"><?= $ar['content'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end blog post-->
                <!--end col-->

            <?php endforeach; ?>

        </div>
        <!--end row-->
    </div>

    <?php echo $this->pagination->create_links(); ?>

</main>