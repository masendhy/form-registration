<section class="section">
  <div class="section-body">
    <section class="section">
      <div class="section-header">
        <h1>Add Account</h1>
      </div>

      <div class="section-body ">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="col-12 col-md-6 col-lg-6">
            <div class="">
              <!-- <div class="buttons">
                <a href="<?= site_url('account') ?>" class=" btn btn-icon icon-left btn-warning"><i class="fas fa-undo-alt"></i> Back</a>
              </div> -->
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
                            <label>Name</label>
                            <input name="username" value="<?= set_value('username') ?>" type="text" class="form-control">
                            <?= form_error('username') ?>
                          </div>
                          <div class="form-group <?= form_error('email') ? "has-error" : null ?>">
                            <label>Email</label>
                            
                            <input name="email" value="<?= set_value('email') ?>" type="email" class="form-control ">
                            <?= form_error('email') ?>
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