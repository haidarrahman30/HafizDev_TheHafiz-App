<?php
function convert($digit)
{
    if (empty($digit))
        return '٠';

    $ar_digit = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩', '-' => '', '.' => '.');

    $arabic_digit = '';

    $length = strlen($digit);

    for ($i = 0; $i < $length; $i++) {

        if (isset($ar_digit[$digit[$i]]))

            $arabic_digit .= $ar_digit[$digit[$i]];
    }
    return $arabic_digit;
}

?>
<main id="main">
    <!-- ======= breadrumbs Section ======= -->
    <section class="breadcrumbs bg-sand">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Uji Hafalan Dengan Suara</h2>
                <ol>
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li>Uji Hafalan Dengan Suara</li>
                </ol>
            </div>

        </div>
    </section><!-- bread Section -->
    <div id="question">
        <h4 class="text-center titillium">Lanjutkan Ayat Berikut Sebanyak 3 Ayat</h4>
        <?php foreach ($question as $quest) : ?>
            <div class="container-ayat">
                <p class="question h2 misbah space" dir="rtl" lang="ar"> <?= $quest['ayahText'] ?> </p>
            </div>
        <?php endforeach; ?>
    </div>

    <div id="answer" class="hide">
        <h4 class="text-center titillium">Jawaban</h4>
        <hr>

        <?php foreach ($answer as $an) : ?>

            <table class="table table-xl table-borderless">
                <tr>
                    <td style="padding:10px;">
                        <p class="m-y-5 misbah h3 text-right" dir="rtl" lang="ar"><?= $an['ayahText']; ?>
                            <span><?= convert(strrev($an['verseID'])) ?></span>
                        </p>
                    </td>
                </tr>
            </table>
            <hr>
        <?php endforeach; ?>
    </div>

    <div class="col-md-4 mx-auto col-12 col-sm-4">
        <div id="restart" class="hide text-center mt-1">
            <a class="btn titillium btn-success white" href="<?= base_url('test/start') ?>"> Mulai Ulang </a>
            <a class="btn titillium btn-primary white" href="<?= base_url('test/record') ?>"> Atur Jumlah Juz </a>
        </div>

        <div id="rekam" class="container col-8 col-md-7 col-sm-12 mx-auto">
            <div class="mt-2 btn-group" id="controls">
                <button class="btn titillium btn-success white" id="recordButton">Rekam</button>
                <button class="btn titillium btn-primary white" id="pauseButton" disabled>Pause</button>
                <button class="btn titillium btn-danger" id="stopButton" disabled>Stop</button>
            </div>
        </div>

        <div id="ganti" class="container col-8 col-md-4 col-sm-12 mx-auto mt-1 text-center">
            <a class="btn titillium btn-success white mt-4 mr-2" href="<?= base_url('test/start') ?>"> Ganti Ayat </a>
        </div>
    </div>

    <div style="margin-bottom:20px"></div>