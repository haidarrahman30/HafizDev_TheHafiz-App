<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= $this->session->flashdata('berhasil'); ?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Play Booster</h1>

    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of Play Booster</h6>
        </div>
        <div class="card-body">
            <?php if (empty($play_booster)) : ?>
                <h4 class="mb-0 text-gray-800">No Play Booster</h4>
            <?php else : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Url</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($play_booster as $play) : ?>
                                <tr>
                                    <td><?= $i++; ?> </td>
                                    <td><?= $play['judul'] ?> </td>
                                    <td><?= $play['url'] ?></td>
                                    <td>
                                        <a href="<?= base_url('pujut/play_booster') . '?id=' . $play['id_video'] ?>" class="btn btn-danger" onclick="return confirm('Do you really want to delete?');">Delete</a>
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