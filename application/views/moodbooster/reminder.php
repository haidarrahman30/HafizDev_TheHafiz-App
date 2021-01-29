<main id="main">
    <!-- ======= breadrumbs Section ======= -->
    <section class="breadcrumbs bg-sand">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Reminder</h2>
                <ol>
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li>Reminder</li>
                </ol>
            </div>

        </div>
    </section><!-- bread Section -->
    <div class="container" style="margin-top: 50px; margin-bottom: 100px;">
        <div class="row">
            <?php foreach ($reminder as $rem) : ?>
                <div class="col-md-6">
                    <div class="widget widget-reminder">
                        <div class="widget-reminder-header"><?= date('j F Y', strtotime($rem['tanggal'])) ?></div>

                        <?php foreach ($reminder as $re) : ?>
                            <?php if ($re['tanggal'] == $rem['tanggal']) : ?>

                                <div class="widget-reminder-container">
                                    <div class="widget-reminder-time">
                                        <?= substr($re['jam'], 0, -3) ?>
                                    </div>
                                    <div class="widget-reminder-divider bg-primary"></div>
                                    <div class="widget-reminder-content">
                                        <h4 class="widget-title"><?= $re['isi'] ?></h4>

                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</main>