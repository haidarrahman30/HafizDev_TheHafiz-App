<!-- Begin Page Content -->
<div class="container-fluid">

    <?= $this->session->flashdata('berhasil') ?>
    <!-- Page Heading -->
    <h3 class="mb-4 text-gray-800">Tulis Artikel</h3>
    <form action="<?= base_url('kontributor/write') ?>" method="POST">
        <?= form_error('title', '<small class="text-danger pl-3">', '</small>') ?>
        <div class="form-group">
            <label for="title">Judul Artikel</label>
            <input type="text" class="form-control" name="title" placeholder="judul" autocomplete="off">
        </div>
        <?= form_error('content', '<small class="text-danger pl-3">', '</small>') ?>
        <div class="form-group">
            <label for="content">Konten</label>
            <textarea class="form-control" name="content" id="konten" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script src="https://cdn.tiny.cloud/1/rvg0gq7iailz7txmwgw6hsqj50q3t57h07mif3o7qobeeqd8/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector: 'textarea',
        /*plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',*/
        toolbar_mode: 'floating',
        toolbar: 'undo redo | formatselect | ' +
            'bold italic underline backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        toolbar_sticky: true,
        height: 500,
        mobile: {
            menubar: true
        }
    });
</script>