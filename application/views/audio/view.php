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
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Surah Al-Qur'an</h2>
                <ol>
                    <li><a href="audio/page">Home</a></li>
                    <li><a href="audio">Murotal Quran</a></li>
                    <li>Surah Al-Qur'an</li>
                </ol>
            </div>

        </div>
    </section><!-- bread Section -->

    <div class="container">
        <div class="row justify-content-start">
            <div class="col-3 col-md-1 p-0">
                <p class="text-right pt-2">Cari Ayat :</p>
            </div>
            <div class="col-2 col-md-1 col-lg-1 col-sm-1 p-1">
                <select class="custom-select" onchange="select(this)">

                    <?php foreach ($audio as $au) : ?>

                        <option value="<?= '#ayat' . $au['verseID'] ?>">
                            <p><?= $au['verseID'] ?></p>
                        </option>

                    <?php endforeach; ?>

                </select>

            </div>
        </div>

        <h2 class="mt-2 text-center"><?= $surah['surahName'] ?></h2>

        <?php foreach ($audio as $au) : ?>

            <table class="table table-xl table-borderless">
                <tr>
                    <td class="pl-0">
                        <button class="col-2 col-lg-1 btn btn-outline-success" id="<?= $au['id'] ?>">
                            <i class="fa fa-play"></i></button>
                    </td>
                </tr>
                <tr>
                    <td style="padding:10px;">
                        <p class="m-y-5 misbah h3 text-right" dir="rtl" lang="ar"><?= $au['ayahText']; ?>
                            <span><?= convert(strrev($au['verseID'])) ?></span>
                        </p>
                    </td>
                    <hr id="<?= 'ayat' . $au['verseID'] ?>" class="m-0 border-bottom border-primary">
                    <p class="col-3 col-md-1 col-sm-2 col-lg-1 text-center border border-top-0 border-2 rounded-bottom border-primary p-1"><?= $au['suraId'] . ' : ' . $au['verseID'] ?></p>
                </tr>
            </table>
        <?php endforeach; ?>
    </div>
</main>