<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-900 text-uppercase"><Strong>
        <i class="bi bi-person-lines-fil "></i>
        Profile</strong></h1>
  </div>

  <div class="card mb-3" style="max-width: 100%;border:2px solid gray">
    <div class="card-header text-center text-lg" style="border-bottom:2px solid gray;color:black">
      <h2><i class="bi bi-person-lines-fill"></i>
        My Profile</h2>
    </div>
    <div class="row g-0">
      <div class="col-lg m-2">
        <img src=" <?= base_url('assets/img/profile/'); ?><?= $user['image']; ?>" class="img-fluid rounded-start border-secondary" alt="Profile" width="auto;" height="auto">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <div class="row-detail">
            <div class="col-md-10 col-sm-8 col-6">
              <dl class="row" style="color:black;">
                <dt class="col-sm-5">Full Name:</dt>
                <dd class="col-sm-7" id="fullnameuser"><?= $user['fullname'] ?></dd>
                <dt class="col-sm-5">Username:</dt>
                <dd class="col-sm-7" id="namauser"><?= $user['username'] ?></dd>
                <?php if ($user['role_id'] == 2) : ?>
                  <dt class="col-sm-5">Jenis Karyawan:</dt>
                  <dd class="col-sm-7" id="roleid">
                    Karyawan Tetap
                  <?php elseif ($user['role_id'] == 3) : ?>
                  <dt class="col-sm-5">Jenis Karyawan:</dt>
                  <dd class="col-sm-7" id="roleid">
                    Karyawan Magang
                  <?php endif; ?>
                  </dd>
                  <?php foreach ($jabatan as $J) : ?>
                    <?php if ($user['fullname'] == $J['Nama']) : ?>
                      <dt class="col-sm-5">Jabatan:</dt>
                      <dd class="col-sm-7"><?= $J['Jabatan']; ?></dd>
                    <?php endif; ?>
                  <?php endforeach; ?>
                  <dt class="col-sm-5">Verifikasi Akun:</dt>
                  <dd class="col-sm-7"><?= $statuspegawai = ($user['is_active'] == 1) ? '<span class="badge badge-success">Sudah Aktif</span>' : '<span class="badge badge-danger">Belum Aktif</span>'; ?></dd>

              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>