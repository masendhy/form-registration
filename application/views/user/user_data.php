<section class="section">
    <div class="section-header">
        <h1>Users Data</h1>
    </div>

    <div class="section-body">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="">
                    <div class="buttons">
                        <a href="<?= site_url('user/add') ?>" class=" btn btn-icon icon-left btn-primary"><i class="fas fa-user-plus"></i> Create</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">Username</th>
                                <th style="text-align: center;">Email</th>
                                <th style="text-align: center;">Start_day</th>
                                <th style="text-align: center;">End_day</th>
                                <th style="text-align: center;">Phone</th>
                                <th style="text-align: center;">Address</th>
                                <th style="text-align: center;">Level</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                            <?php $no = 1;
                            foreach ($row->result() as $key => $data) { ?>
                                <tr>
                                    <td><?= $no++ ?>. </td>
                                    <td><?= $data->username ?></td>
                                    <td><?= $data->email ?></td>
                                    <td width="100px"><?= $data->start_day ?></td>
                                    <td width="100px"><?= $data->end_day ?></td>
                                    <td><?= $data->phone ?></td>
                                    <td><?= $data->address ?></td>
                                    <td><?= $data->level == 1 ? "Admin" : "User" ?></td>
                                    <td class="text-center" width="260px">
                                        <div>
                                            <div class="card-body text-right">
                                                <form action="<?= site_url('user/del') ?>" method="post">
                                                    <a href="<?= site_url('user/edit/' .$data->user_id) ?>" class="btn btn-warning" >
                                                       Update
                                                    </a>
                                                    <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
                                                    <button onclick="return confirm(' Are you sure delete data?')" class="btn btn-danger" >
                                                       Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>