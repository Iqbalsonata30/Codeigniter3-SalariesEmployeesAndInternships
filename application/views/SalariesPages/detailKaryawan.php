<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h3 class="m-0 text-center font-weight-bold text-info text-lg">Detail Karyawan Tetap</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Karyawan</th>
              <th>Nama Karyawan</th>
              <th>Jabatan</th>
              <?php if ($user['role_id'] == 3) : ?>
                <th>Opsi</th>
              <?php elseif ($user['role_id'] == 2) : ?>
                <th>Opsi</th>
              <?php endif; ?>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($Detail as $J) : ?>
              <tr style="color:Black;">
                <td><?= $i++; ?></td>
                <td><Strong><?= $J['id_Karyawan']; ?><strong></td>
                <td><?= $J['Nama']; ?></td>
                <td><?= $J['Jabatan']; ?> Hari</td>
                <?php if ($user['role_id'] == 3) : ?>
                  <td>" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="bi bi-printer-fill"></i>
                    </span>
                    <span class="text">Cetak Gaji </span>
                    </a>
                  </td>
                <?php elseif ($user['role_id'] == 2) : ?>
                  <td><a href=" <?= site_url('Salaries/PrintSalariesEmployees/') . $J['Id']; ?>" class="btn btn-info btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="bi bi-printer-fill"></i>
                      </span>
                      <span class="text">Cetak Gaji </span>
                    </a></td>
                <?php endif; ?>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>