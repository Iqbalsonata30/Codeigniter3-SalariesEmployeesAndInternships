<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0 ">
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">
                    <div style="font-family:'Dancing Script','cursive';font-weight:600;font-size:35px;">Sand-Box</div> <span class=" d-flex justify-content-center pt-2  fs-4 text-uppercase "> Register</span>
                  </h1>
                </div>
                <form class="user" method="post" action="<?= site_url('Auth/Registration'); ?>">
                  <div class="form-group row">
                    <div class="col-lg">
                      <input type="text" class="form-control form-control-user" id="fullname" name="fullname" placeholder="Fullname" value="<?= set_value('fullname'); ?>">
                      <?= form_error('fullname', '<small class="form-text text-danger px-3">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg ">
                      <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                      <?= form_error('username', '<small class="form-text text-danger px-3">', '</small>'); ?>
                    </div>
                  </div>
                  <div class=" form-group row">
                    <div class="col-lg">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                      <?= form_error('password', '<small class="form-text text-danger px-3">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg">
                      <input type="password" class="form-control form-control-user" id="konfirmasipassword" name="konfirmasipassword" placeholder="Konfirmasi  Password">
                      <?= form_error('konfirmasipassword', '<small class="form-text text-danger px-3">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="form-group-row">
                    <div class="col-lg-8">
                      <div class="form-floating mb-3">
                        <select class="form-select" id="jeniskaryawan" aria-label="Floating label select example" name="role_id">
                          <option selected disabled>Jenis Karyawan </option>
                          <option value="2">Karyawan Tetap</option>
                          <option value="3">Karyawan Magang</option>
                        </select>
                        <label for="jabatan">Jenis Karyawan </label>
                        <small class="form-text text-danger"><?= form_error('role_id'); ?></small>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Register
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="<?= site_url('Auth/index'); ?>">Already have an account? Login!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>