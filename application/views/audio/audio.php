<script>
    var playing = null;
    var button = null;
    <?php
    foreach ($audio as $au) :
    ?>

        <?= 'var audio' . $au['id'] ?> = new Howl({
            src: [<?= '\'' . base_url('assets/audio/verse/') . $au['id'] . '.mp3' . '\'' ?>],
            preload: false,
            loop: true,

        });


        $('#' + <?= $au['id'] ?>).click(function() {
            $(this).toggleClass('playing');
            if ($(this).hasClass('playing')) {

                if (playing != null) {
                    playing.stop();
                    $('#' + button).toggleClass('playing');
                    $('#' + button).html("<i class=\"fa fa-play\"></i>");

                }

                <?= 'audio' . $au['id'] ?>.load();
                <?= 'audio' . $au['id'] ?>.play();
                $(this).html("<i class=\"fa fa-pause\"></i>");
                playing = <?= 'audio' . $au['id'] ?>;
                button = <?= $au['id'] ?>;
            } else {
                <?= 'audio' . $au['id'] ?>.pause();
                $(this).html("<i class=\"fa fa-play\"></i>");
                playing = null;
                button = null;
            }

        });


    <?php endforeach; ?>
</script>

</body>

</html>