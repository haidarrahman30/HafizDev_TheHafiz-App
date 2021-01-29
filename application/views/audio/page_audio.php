<script>
    var playing = null;
    var button = null;
    <?php
    foreach ($page as $pa) :
    ?>

        <?= 'var audio' . $pa['page'] ?> = new Howl({
            src: [<?= '\'' . base_url('assets/audio/page/Page') . $pa['page'] . '.mp3' . '\'' ?>],
            preload: false,
            onend: function() {
                <?php
                $au = $pa['page'];
                $au++;
                ?>
                <?= 'audio' . $au ?>.load();
                <?= 'audio' . $au ?>.play();
                playing = <?= 'audio' . $au ?>;
                button = <?= $au ?>;
                $('#' + button).toggleClass('playing');
                $('#' + <?= $pa['page'] ?>).html("<i class=\"fa fa-play p-1\"></i>");
                $('#' + button).html("<i class=\"fa fa-pause p-1\"></i>");
            }
        });


        $('#' + <?= $pa['page'] ?>).click(function() {
            $(this).toggleClass('playing');
            if ($(this).hasClass('playing')) {

                if (playing != null) {
                    playing.stop();
                    $('#' + button).toggleClass('playing');
                    $('#' + button).html("<i class=\"fa fa-play p-1\"></i>");

                }
                <?= 'audio' . $pa['page'] ?>.load();
                <?= 'audio' . $pa['page'] ?>.play();
                $(this).html("<i class=\"fa fa-pause p-1\"></i>");
                playing = <?= 'audio' . $pa['page'] ?>;
                button = <?= $pa['page'] ?>;
            } else {
                <?= 'audio' . $pa['page'] ?>.pause();
                $(this).html("<i class=\"fa fa-play p-1\"></i>");
                playing = null;
                button = null;
            }

        });


    <?php endforeach; ?>
</script>

</body>

</html>