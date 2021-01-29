<?php

if (isset($question)) :
    foreach ($question as $quest) :

?>

        <main id="main">
            <!-- ======= breadrumbs Section ======= -->
            <section class="breadcrumbs">
                <div class="container">

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Pertanyaan</h2>
                        <ol>
                            <li><a href="<?= base_url() ?>">Home</a></li>
                            <li><a href="<?= base_url() ?>test">Uji Hafalan</a></li>
                            <li>Pertanyaan</li>
                        </ol>
                    </div>

                </div>
            </section><!-- bread Section -->
            <div class="container-ayat">
                <p class="question h2 misbah" dir="rtl" lang="ar"> <?= $quest['ayahText'] ?> </p>
        <?php endforeach;
endif; ?>
            </div>

            <?php
            if (isset($ulang)) :
            ?>

                <div class="container-ayat">
                    <p class="question h2 misbah" dir="rtl" lang="ar"> <?= $ulang->ayahText; ?> </p>
                <?php endif;  ?>
                </div>



                <div class="container">

                    <div class="col-md-5 col-sm-8 col-12 mx-auto mt-5">

                        <?php if (validation_errors()) : ?>
                            <div class="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>

                        <form action="<?= base_url('/answer') ?>" method="POST">
                            <table>
                                <tr>
                                    <td><label> Juz </label></td>
                                    <td><input type="text" name="answerjuz" autocomplete="off"></td>
                                    <td><label> Ayat </label></td>
                                    <td><input type="text" name="ayat" autocomplete="off"></td>
                                </tr>
                                <tr>
                                    <td><label> No.Surah </label></td>
                                    <td><input type="text" name="surah" autocomplete="off"></td>
                                    <td><label> Halaman </label></td>
                                    <td><input type="text" name="page" autocomplete="off"></td>
                                    <td> <?php
                                            if (isset($question)) :
                                            ?>
                                            <input type="hidden" name="id" value="<?= $quest['id'] ?>">
                                        <?php endif; ?>

                                        <?php
                                        if (isset($ulang)) :
                                        ?>
                                            <input type="hidden" name="id" value="<?= $ulang->id ?>">
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="buttonbox">
                                            <input type="submit" name="submit" value="Submit">
                        </form>
                        </td>
                        <td colspan="2">
                            <form action="" method="POST">
                                <input type="submit" class="blue" name="reload" value="Ganti Ayat">
                            </form>
                    </div>
                    </td>
                    </tr>
                    </table>
                    <p class="ket"> *tidak semua kolom harus diisi</p>
                </div>
                </div>
        </main>