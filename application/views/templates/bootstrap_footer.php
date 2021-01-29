<script src="<?= base_url('asset/js/myScript.js'); ?>"> </script>
<script src="<?= base_url('asset/js/') ?>app.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="<?= base_url('asset/js/howler.core.min.js'); ?>"> </script>
<script src="<?= base_url('asset/js/howler.js'); ?>"> </script>
<script src="<?= base_url('asset/js/howler.min.js'); ?>"> </script>
<script src="<?= base_url('asset/js/howler.spatial.min.js'); ?>"> </script>
<script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>


<script type="text/javascript">
    $(function() {
        $(".coba").each(function(i) {
            len = $(this).text().length;
            if (len > 250) {
                $(this).text($(this).text().substr(0, 250) + '...');
            }
        });
    });
</script>

<footer class="footer flex-shrink-0 text-center py-3 border-top">
    <div class="container">
        <small class="text-muted"> © 2020 Copyright: TheHafiz Team
    </div>
</footer>

<!-- <footer class="footer col-md-12">
    <div class="container text-center border-top">
        <small class="text-muted">© 2020 Copyright: TheHafiz Team</small>
    </div>
</footer> -->

</body>