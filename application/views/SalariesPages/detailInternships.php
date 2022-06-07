<?php
$Join = "SELECT `karyawan_magang`.`ID_Magang`,`Nama`,`Tahun_Masuk`,`total_hadir`
  FROM `karyawan_magang`
  JOIN `detail_magang` 
  ON `karyawan_magang`.`ID_Magang` = `detail_magang`.`ID_Magang`";
$HasilJoin = $this->db->query($Join)->result_array();
?>

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h3 class="m-0 text-center font-weight-bold text-info text-lg">Detail Karyawan Magang</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Karyawan Magang</th>
              <th>Nama Karyawan</th>
              <th>Awal Magang</th>
              <th>Total Hadir</th>
              <?php if ($user['role_id'] == 3) : ?>
                <th>Opsi</th>
              <?php elseif ($user['role_id'] == 2) : ?>
                <th>Opsi</th>
              <?php endif; ?>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($HasilJoin as $J) : ?>
              <tr style="color:Black;">
                <td><?= $i++; ?></td>
                <td><Strong><?= $J['ID_Magang']; ?><strong></td>
                <td><?= $J['Nama']; ?></td>
                <td><?= $J['Tahun_Masuk']; ?></td>
                <td><?= $J['total_hadir']; ?> Hari</td>
                <?php if ($user['role_id'] == 3) : ?>
                  <td><a href="#" class="btn btn-info btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="bi bi-printer-fill"></i>
                      </span>
                      <span class="text">Cetak Gaji </span>
                    </a></td>
                <?php elseif ($user['role_id'] == 2) : ?>
                  <td><a href="#" class="btn btn-info btn-icon-split">
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