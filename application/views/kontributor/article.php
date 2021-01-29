<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Artikel Saya</h1>

    </div>
    <?= $this->session->flashdata('berhasil'); ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Artikel</h6>
        </div>
        <div class="card-body">
            <?php if (empty($article)) : ?>
                <h4 class="mb-0 text-gray-800">Anda belum memiliki artikel</h4>
            <?php else : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Judul Artikel</th>
                                <th>Tanggal Ditulis</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($article as $ar) : ?>
                                <tr>
                                    <td><?= $ar['title'] ?> </td>
                                    <td><?= $ar['created_at'] ?></td>
                                    <td><?= $ar['status'] ?></td>
                                    <td>
                                        <a href="<?= base_url('blog/view') . '?id=' . $ar['id_article'] ?>" class="btn btn-info">Lihat Artikel</a>
                                        <a href="<?= base_url('kontributor/editArticle') . '?id=' . $ar['id_article'] ?>" target="_blank" class="btn btn-success">Edit</a>
                                        <a href="<?= base_url('kontributor/deleteArticle') . '?id=' . $ar['id_article'] ?>" class="btn btn-danger" onclick="return confirm('Do you really want to delete?');">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>

</div>