<main id="main">
    <!-- ======= breadrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Jawaban</h2>
                <ol>
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li><a href="<?= base_url() ?>test">Uji Hafalan</a></li>
                    <li><a href="<?= base_url() ?>question">Pertanyaan</a></li>
                    <li>Jawaban</li>
                </ol>
            </div>

        </div>
    </section><!-- bread Section -->
    <div class="col-md-6 col-12 col-sm-6 mx-auto mt-5">

        <?php
        if (isset($answer)) :
            if ($juz == $answer->juz) :
        ?>
                <div class="benar">
                    <table class="jawaban">
                        <tr>
                            <th class="jawaban" colspan="2"> Juz </th>
                        </tr>
                        <tr>
                            <td class="jawaban" style="border-right:1px solid white;"> <i class="fa fa-check-circle"></i></td>
                            <td class="jawaban"> Benar <br> Jawaban Anda : <?= $juz ?></td>
                        </tr>
                    </table>
                </div>
            <?php else : ?>
                <div class="salah">
                    <table class="jawaban">
                        <tr>
                            <th class="jawaban" colspan="2"> Juz </th>
                        </tr>
                        <tr>
                            <td class="jawaban" style="border-right:1px solid white;"> <i class="fa fa-times-circle"></i></td>
                            <td class="jawaban"> Salah <br> Jawaban Anda : <?= $juz ?> <br>
                                Jawaban Benar : <?= $answer->juz ?></td>
                        </tr>
                    </table>
                </div>
            <?php endif;
            if ($surah == $answer->suraId) :
            ?>
                <div class="benar">
                    <table class="jawaban">
                        <tr>
                            <th class="jawaban" colspan="2"> Surah </th>
                        </tr>
                        <tr>
                            <td class="jawaban" style="border-right:1px solid white;"> <i class="fa fa-check-circle"></i></td>
                            <td class="jawaban"> Benar <br> Jawaban Anda : <?= $surah ?></td>
                        </tr>
                    </table>
                </div>
            <?php else : ?>
                <div class="salah">
                    <table class="jawaban">
                        <tr>
                            <th class="jawaban" colspan="2"> Surah </th>
                        </tr>
                        <tr>
                            <td class="jawaban" style="border-right:1px solid white;"> <i class="fa fa-times-circle"></i></td>
                            <td class="jawaban"> Salah <br> Jawaban Anda : <?= $surah ?> <br>
                                Jawaban Benar : <?= $answer->suraId ?></td>
                        </tr>
                    </table>
                </div>
            <?php endif;

            if ($ayat == $answer->verseID) :
            ?>
                <div class="benar">
                    <table class="jawaban">
                        <tr>
                            <th class="jawaban" colspan="2"> Ayat </th>
                        </tr>
                        <tr>
                            <td class="jawaban" style="border-right:1px solid white;"> <i class="fa fa-check-circle"></i></td>
                            <td class="jawaban"> Benar <br> Jawaban Anda : <?= $ayat ?></td>
                        </tr>
                    </table>
                </div>
            <?php else : ?>
                <div class="salah">
                    <table class="jawaban">
                        <tr>
                            <th class="jawaban" colspan="2"> Ayat </th>
                        </tr>
                        <tr>
                            <td class="jawaban" style="border-right:1px solid white;"> <i class="fa fa-times-circle"></i></td>
                            <td class="jawaban"> Salah <br> Jawaban Anda : <?= $ayat ?> <br>
                                Jawaban Benar : <?= $answer->verseID ?></td>
                        </tr>
                    </table>
                </div>

            <?php endif;

            if ($page == $answer->page) :
            ?>
                <div class="benar">
                    <table class="jawaban">
                        <tr>
                            <th class="jawaban" colspan="2"> Halaman </th>
                        </tr>
                        <tr>
                            <td class="jawaban" style="border-right:1px solid white;"> <i class="fa fa-check-circle"></i></td>
                            <td class="jawaban"> Benar <br> Jawaban Anda : <?= $page ?></td>
                        </tr>
                    </table>
                </div>
            <?php else : ?>

                <div class="salah">
                    <table class="jawaban">
                        <tr>
                            <th class="jawaban" colspan="2"> Halaman </th>
                        </tr>
                        <tr>
                            <td class="jawaban" style="border-right:1px solid white;"> <i class="fa fa-times-circle"></i></td>
                            <td class="jawaban"> Salah <br> Jawaban Anda : <?= $page ?> <br>
                                Jawaban Benar : <?= $answer->page ?></td>
                        </tr>
                    </table>
                </div>

            <?php
            endif;
            ?>
    </div>

    <div class="col-md-3 mx-auto col-10 col-sm-5 mt-3 d-flex justify-content-between btn-group mt-5" role="group" aria-label="Basic example">
        <a class="btn btn-success white" href="<?= base_url() ?>question"> Mulai Ulang </a>
        <a class="btn btn-primary white" href="<?= base_url() ?>detail?id=<?= $answer->id ?>"> Detail Ayat </a>
    </div>
<?php
        endif;
?>