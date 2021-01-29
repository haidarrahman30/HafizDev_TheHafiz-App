<?= $this->session->flashdata('berhasil'); ?>
<div class="card mb-5 ml-5" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $user['name'] ?></h5>
                <p class="card-text"><?= $user['email'] ?></p>
                <p class="card-text"><small class="text-muted">Bergabung Sejak <?= date("d F , Y ", $user['date_created']) ?></small></p>
            </div>
        </div>
    </div>
</div>