<section class="section">
  <div class="section-body">
    <section class="section">
      <div class="section-header">
        <h1>Edit User</h1>
      </div>

      <div class="section-body ">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="col-12 col-md-6 col-lg-6">
            <div class="">
              <div class="buttons">
                <a href="<?= site_url('user') ?>" class=" btn btn-icon icon-left btn-warning"><i class="fas fa-undo-alt"></i> Back</a>
              </div>
            </div>
          </div>
          <div class="card ">
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped table-lg">
                  <div class="col-12 col-md-12 col-lg-12 ">
                    <div class="card">

                      <form action="" method="post">
                        <!-- <div class="card-header">
                      <h4>Server-side Validation</h4>
                    </div> -->
                        <div class="card-body" style="padding-left:25%; padding-right:25%">
                          <div class="form-group <?= form_error('username') ? "has-error" : null ?> ">
                            <label>Username</label>
                            <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                            <input name="username" value="<?=$this->input->post('username') ?? $row->username ?>" type="text" class="form-control">
                            <?= form_error('username') ?>
                          </div>
                          <div class="form-group <?= form_error('email') ? "has-error" : null ?>">
                            <label>Email</label>
                            <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                            <input name="email"  value="<?=$this->input->post('email') ?? $row->email ?>" type="email" class="form-control ">
                            <?= form_error('email') ?>
                          </div>
                          <div class="form-group <?= form_error('password') ? "has-error" : null ?>">
                            <label>Password</label>
                            <input name="password" value="<?= $this->input->post('password') ?>" type="text" class="form-control">
                            <?= form_error('password') ?>
                          </div>
                          <div class="form-group <?= form_error('passconfirm') ? "has-error" : null ?>">
                            <label>Passconfirm</label>
                            <input name="passconfirm" value="<?=  $this->input->post('passconfirm') ?>" type="text" class="form-control">
                            <?= form_error('passconfirm') ?>
                          </div>
                          <div class="form-group <?= form_error('startday') ? "has-error" : null ?>">
                            <label>Startday</label>
                            <input name="startday"  value="<?=$this->input->post('startday') ?? $row->start_day ?>" type="date" class="form-control " required>
                          </div>
                          <div class="form-group <?= form_error('endday') ? "has-error" : null ?>">
                            <label>Endday</label>
                            <input name="endday" value="<?=$this->input->post('endday') ?? $row->end_day ?>" type="date" class="form-control" required>
                          </div>
                          <div class="form-group <?= form_error('phone') ? "has-error" : null ?>">
                            <label>Phone</label>
                            <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                            <input name="phone" value="<?=$this->input->post('phone') ?? $row->phone ?>" type="text" class="form-control">
                            <?= form_error('phone') ?>
                          </div>
                          <div class="form-group <?= form_error('address') ? "has-error" : null ?>">
                            <label>Address</label>
                            <textarea name="address" class="form-control"><?=$this->input->post('address') ?? $row->address ?></textarea>
                          </div>
                          <div class="form-group <?= form_error('level') ? "has-error" : null ?>">
                            <label>Level</label>
                            <select name="level" class="form-control" >
                                <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
                             
                              <option value="1">Admin</option>
                              <option value="2" <?=$level == 2 ? "selected" : null ?>>User</option>
                            </select>
                          </div>

                        </div>
                        <div class="card-footer text-right">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button type="Reset" class="btn btn-danger">Reset</button>
                        </div>

                      </form>
                    </div>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
  </div>
</section>

</div>
</section>