<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= $this->session->flashdata('berhasil'); ?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Discussions</h1>

    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of Discussions</h6>
        </div>
        <div class="card-body">
            <?php if (empty($discussions)) : ?>
                <h4 class="mb-0 text-gray-800">No Discussions</h4>
            <?php else : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Konten</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($discussions as $dis) : ?>
                                <tr>
                                    <td><?= $i++; ?> </td>
                                    <td><?= $dis['judul'] ?> </td>
                                    <td><?= $dis['konten'] ?></td>
                                    <td>
                                        <a href="<?= base_url('pujut/forum') . '?id=' . $dis['id_discussion'] ?>" class="btn btn-danger" onclick="return confirm('Do you really want to delete?');">Delete</a>
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