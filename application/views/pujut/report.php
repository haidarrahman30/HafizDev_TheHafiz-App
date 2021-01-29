<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Reported Problem</h1>

    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of Reported Problem</h6>
        </div>
        <div class="card-body">
            <?php if (empty($list)) : ?>
                <h4 class="mb-0 text-gray-800">No Reported Problem</h4>
            <?php else : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Submitted at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($list as $li) : ?>
                                <tr>
                                    <td><?= $i++; ?> </td>
                                    <td><?= $li['subject'] ?> </td>
                                    <td><?= $li['message'] ?></td>
                                    <td><?= date("d F , Y ", $li['submitted_at']) ?></td>
                                    <td>
                                        <form action="<?= base_url('pujut/report') ?>" method="POST" class="mt-1">
                                            <input type="hidden" class="form-control" name="problem_id" value="<?= $li['id'] ?>">
                                            <button type="submit" class="btn btn-success">Mark as Solved</button>
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