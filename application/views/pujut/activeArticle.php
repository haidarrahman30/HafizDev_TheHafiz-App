<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Approved Article</h1>

    </div>
    <?= $this->session->flashdata('berhasil'); ?>
    <?= $this->session->flashdata('diedit'); ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of Approved Article</h6>
        </div>
        <div class="card-body">
            <?php if (empty($list)) : ?>
                <h4 class="mb-0 text-gray-800">No Approved Article</h4>
            <?php else : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Submitted at</th>
                                <th>Writer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($list as $li) : ?>
                                <tr>
                                    <td><?= $i++; ?> </td>
                                    <td><?= $li['title'] ?> </td>
                                    <td><?= $li['created_at'] ?></td>
                                    <td><?= $li['username'] ?></td>
                                    <td>
                                        <a href="<?= base_url('blog/view') . '?id=' . $li['article_id'] ?>" target="_blank" class="btn btn-info">View</a>
                                        <a href="<?= base_url('pujut/editArticle') . '?id=' . $li['article_id'] ?>" target="_blank" class="btn btn-success">Edit</a>
                                        <a href="<?= base_url('pujut/deleteArticle') . '?id=' . $li['article_id'] ?>" class="btn btn-danger" onclick="return confirm('Do you really want to delete?');">Delete</a>
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