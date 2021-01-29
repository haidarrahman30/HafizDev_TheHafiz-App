<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pending Account</h1>

    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of Pending Account</h6>
        </div>
        <div class="card-body">
            <?php if (empty($list)) : ?>
                <h4 class="mb-0 text-gray-800">No Pending Account</h4>
            <?php else : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Member Since</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($list as $li) : ?>
                                <tr>
                                    <td><?= $i++; ?> </td>
                                    <td><?= $li['name'] ?> </td>
                                    <td><?= $li['email'] ?></td>
                                    <td><?= date("F d , Y ", $li['date_created']) ?></td>
                                    <td>
                                        <form action="<?= base_url('pujut/pendingAccount') ?>" method="POST">
                                            <input type="hidden" class="form-control" name="id" value="<?= $li['id'] ?>">
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