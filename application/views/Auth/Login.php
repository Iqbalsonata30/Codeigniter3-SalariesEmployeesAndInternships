<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card o-hidden border-0 p-2 shadow-lg my-5">
        <div class="card-body p-0">
          <div class="row justify-content-center">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">
                    <div style="font-family:'Dancing Script','cursive';font-weight:600;font-size:35px;">Sand-Box</div> <span class=" d-flex justify-content-center pt-2 fs-4 text-uppercase "> Login</span>
                  </h1>
                </div>
                <?= $this->session->flashdata('Pesan');?>
                <form class="user" method="post" action="<?= site_url('Auth');?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="usernameLogin" aria-describedby="username" name="username" placeholder="Masukkan Username">
                    <?= form_error('username','<small class="form-text text-danger px-3">','</small>');?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Masukkan Password">
                    <?= form_error('password','<small class="form-text text-danger px-3">','</small>');?>
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                </button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="<?= site_url('Auth/Registration'); ?>">Create an Account</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>