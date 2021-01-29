<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h5>HUBUNGI KAMI</h5>
                <a href="https://www.instagram.com/thehafiz.id">kontak kami</a>
            </div>
            <div class="col-sm-3">
                <h5>MEDIA SOSIAL</h5>
                <a href="https://www.instagram.com/thehafiz.id">Instagram</a>
            </div>
            <div class="col-sm-3">
                <h5>SERVICE</h5>
                <a href="https://wa.me/6285338264421">Laporkan Masalah</a>

            </div>
            <div class="col-sm-3">
                <h5>REFERENSI WEBSITE</h5>
                <a href="https://Quran.com">Quran.com</a>
                <br>
                <a href="https://Sunnah.com">Sunnah.com</a>


            </div>
        </div>
        <p class="text-center mt-5">&copy; Copyright 2021 | Built by TheHafizTeam</p>
    </div>
</footer>


<!-- Optional JavaScript -->
<script src="<?= base_url('assets/js/myScript.js'); ?>"> </script>
<script src="<?= base_url('assets/js/app.js'); ?>"> </script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/howler.core.min.js'); ?>"> </script>
<script src="<?= base_url('assets/js/howler.js'); ?>"> </script>
<script src="<?= base_url('assets/js/howler.min.js'); ?>"> </script>
<script src="<?= base_url('assets/js/howler.spatial.min.js'); ?>"> </script>
<script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>
<!-- Vendor JS Files -->
<script src="<?= base_url() ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url() ?>/vendor/venobox/venobox.min.js"></script>
<script src="<?= base_url() ?>/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?= base_url() ?>/vendor/counterup/counterup.min.js"></script>
<script src="<?= base_url() ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url() ?>/assets/js/main.js"></script>

<script type="text/javascript">
    $(function() {
        $(".content-singkat").each(function(i) {
            len = $(this).text().length;
            if (len > 250) {
                $(this).text($(this).text().substr(0, 250) + '...');
            }
        });
    });
</script>


</body>

</html>