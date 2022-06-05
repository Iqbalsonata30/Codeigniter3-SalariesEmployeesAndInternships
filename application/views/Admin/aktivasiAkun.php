<div class="row mt-3">
  <div class="col-md-6 mx-auto">
    <div class="card shadow-lg border-left-info mb-3">
      <div class="card-header text-center">
        <h3 class="font-weight-bold" style="color:rgb(0,0,0,0.7);">Form Activation Account</h3>
      </div>
      <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
          <a href="<?= site_url('Admin/index'); ?>" class="btn btn-outline-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
            </svg>
            Kembali
          </a>
        </div>
        <form action="" method="POST">
          <input hidden type="number" class="form-control" name="id_user" value="<?= $Aktivasi['id_user']; ?>">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="username" name="username" value="<?= $Aktivasi['username']; ?>" style="color:black;">
            <label for="username">Username </label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $Aktivasi['fullname']; ?>" style="color:black;">
            <label for="fullname">Full Name </label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="image" name="image" value="<?= $Aktivasi['image']; ?>">
            <label for="image">Gambar Profile</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="role_id" name="role_id" value="<?= $Aktivasi['role_id']; ?>" style="color:black;">
            <label for="role_id">Role ID</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="date" name="date_created" value="<?= $Aktivasi['date_created']; ?>">
            <label for="date">Tanggal Pembuatan Akun</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" name="password" value="<?= $Aktivasi['password']; ?>">
            <label for="password">Password</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="konfir" name="confir_password" value="<?= $Aktivasi['confir_password']; ?>">
            <label for="konfir">Konfirmasi Password</label>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-success ">
              <i class="fas fa-check"></i>
              Aktivasi Akun
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>