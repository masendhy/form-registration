<section class="section">
  <div class="section-body">
    <section class="section">
      <div class="section-header">
        <h1>Add User</h1>
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
                            <input name="username" value="<?= set_value('username') ?>" type="text" class="form-control">
                            <?= form_error('username') ?>
                          </div>
                          <div class="form-group <?= form_error('email') ? "has-error" : null ?>">
                            <label>Email</label>
                            <input name="email" value="<?= set_value('email') ?>" type="email" class="form-control ">
                            <?= form_error('email') ?>
                          </div>
                          <div class="form-group <?= form_error('password') ? "has-error" : null ?>">
                            <label>Password</label>
                            <input name="password" value="<?= set_value('password') ?>" type="text" class="form-control">
                            <?= form_error('password') ?>
                          </div>
                          <div class="form-group <?= form_error('passconfirm') ? "has-error" : null ?>">
                            <label>Passconfirm</label>
                            <input name="passconfirm" value="<?= set_value('passconfirm') ?>" type="text" class="form-control">
                            <?= form_error('passconfirm') ?>
                          </div>
                          <div class="form-group <?= form_error('steartday') ? "has-error" : null ?>">
                            <label>Startday</label>
                            <input name="startday" value="<?= set_value('startday') ?>" type="date" class="form-control " required>
                          </div>
                          <div class="form-group <?= form_error('endday') ? "has-error" : null ?>">
                            <label>Endday</label>
                            <input name="endday" value="<?= set_value('endday') ?>" type="date" class="form-control" required>
                          </div>
                          <div class="form-group <?= form_error('phone') ? "has-error" : null ?>">
                            <label>Phone</label>
                            <input name="phone" value="<?= set_value('phone') ?>" type="text" class="form-control">
                            <?= form_error('phone') ?>
                          </div>
                          <div class="form-group <?= form_error('address') ? "has-error" : null ?>">
                            <label>Address</label>
                            <textarea name="address" class="form-control" required><?= set_value('address') ?></textarea>
                          </div>
                          <div class="form-group <?= form_error('level') ? "has-error" : null ?>">
                            <label>Level</label>
                            <select name="level" class="form-control" required>
                              <option value="">- Select - </option>
                              <option value="1" <?= set_value('level') == 1 ? "selected" : null ?>>Admin</option>
                              <option value="2" <?= set_value('level') == 2 ? "selected" : null ?>>User</option>
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