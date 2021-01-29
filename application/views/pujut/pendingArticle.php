<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pending Article</h1>

    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of Pending Article</h6>
        </div>
        <div class="card-body">
            <?php if (empty($list)) : ?>
                <h4 class="mb-0 text-gray-800">No Pending Article</h4>
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
                                        <a href="<?= base_url('blog/view') . '?id=' . $li['article_id'] ?>" target="_blank" class="btn btn-info col-md-5">View</a>

                                        <form action="<?= base_url('pujut/pendingArticle') ?>" method="POST" class="mt-1">
                                            <input type="hidden" class="form-control" name="article_id" value="<?= $li['article_id'] ?>">
                                            <button type="submit" class="btn btn-success">Approve</button>
                                        </form>
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