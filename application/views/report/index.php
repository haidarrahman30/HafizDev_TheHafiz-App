<div class="container">
    <h3 class="text-center titillium mb-3">Laporkan Masalah</h3>


    <div class="col-md-8 col-11 mx-auto">
        <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('report') ?>" method="POST">
            <?= form_error('subject', '<small class="text-danger pl-3">', '</small>') ?>
            <div class="form-group">
                <label for="subject">Subjek</label>
                <input type="text" class="form-control" name="subject" placeholder="subjek...">
            </div>
            <?= form_error('message', '<small class="text-danger pl-3">', '</small>') ?>
            <div class="form-group">
                <label for="message">Pesan</label>
                <textarea class="form-control" name="message" rows="6" placeholder="pesan..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</div>

<div style="margin-bottom:6.4em"></div>