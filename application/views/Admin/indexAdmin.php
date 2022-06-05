<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Aktivasi Akun</h6>
    </div>
    <div class="row mt-4 justify-content-center">
      <div class="col-lg-8">
        <?= $this->session->flashdata('Active'); ?>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Username</th>
              <th>Fullname</th>
              <th>Default Image</th>
              <th>Role ID</th>
              <th>Tanggal Pembuatan Akun</th>
              <th>Aktivasi Akun</th>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($Aktivasi as $a) : ?>
              <?php if ($a['is_active'] == 0) : ?>
                <tr style="Color:black;">
                  <td><?= $a['username']; ?></td>
                  <td><?= $a['fullname']; ?></td>
                  <td><?= $a['image']; ?></td>
                  <td><?= $a['role_id']; ?></td>
                  <td><?= date('d-m-Y', $a['date_created']); ?></td>
                  <td>
                    <?php if ($a['is_active'] == 0) : ?>
                      <a href="<?= base_url('Admin/doActiveAccount/') . $a['id_user']; ?>" type="submit" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Aktivasi Akun</span>
                      </a>
                    <?php endif; ?>
                  </td>
                </tr>
              <?php endif; ?>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->