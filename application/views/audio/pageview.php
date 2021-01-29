<main id="main">
    <!-- ======= breadrumbs Section ======= -->
    <section class="breadcrumbs bg-sand">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Murotal Quran per Juz</h2>
                <ol>
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li><a href="<?= base_url() ?>audio/page">Murotal Quran</a></li>
                    <li>Murotal Quran per Juz</li>
                </ol>
            </div>

        </div>
    </section><!-- bread Section -->
    <div class="container">
        <div class="row col-md-9 mx-auto">
            <div class="col-5 col-md-2 p-0">
                <p class="text-right pt-2">Cari Halaman :</p>
            </div>
            <div class="col-4 col-md-6 col-sm-1 p-1">
                <select class="custom-select col-md-3" onchange="select(this)">

                    <?php foreach ($page as $pa) : ?>

                        <option value="<?= '#page' . $pa['page'] ?>">
                            <p><?= $pa['page'] ?></p>
                        </option>

                    <?php endforeach; ?>

                </select>

            </div>
        </div>

        <div class="col-md-8 mx-auto col-12">
            <h2 class="mt-2 text-center">Juz <?= $juz ?></h2>

            <?php foreach ($page as $pa) : ?>

                <table class="table table-xl table-borderless">
                    <tr class="row">
                        <td class="col-3">
                            <button class="btn btn-outline-success" id="<?= $pa['page'] ?>">
                                <i class="fa fa-play p-1"></i></button>
                        </td>
                        <td class="col-9">
                            <p class="titillium h4 text-right">Halaman <?= $pa['page']; ?>
                            </p>
                        </td>
                        <hr id="<?= 'page' . $pa['page'] ?>" class="m-0 border-bottom border-primary">
                    </tr>
                </table>

            <?php endforeach; ?>
        </div>
    </div>
</main>