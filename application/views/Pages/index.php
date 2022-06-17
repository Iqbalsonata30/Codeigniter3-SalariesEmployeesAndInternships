<div class="container-fluid">
  <div class="card  shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-auto text-lg font-weight-bold text-primary text-center">Daftar Karyawan Tetap</h6>
    </div>
    <?php if ($this->session->flashdata('Flash')) : ?>
      <div class="col-md-8 m-auto py-3">
        <div class="justify-content-md-start">
          <div class="alert alert-success alert-dismissible fade show" role="alert">Data Karyawan
            <strong>Berhasil </strong><?= $this->session->flashdata('Flash'); ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('Hapus')) : ?>
      <div class="col-md-8 m-auto py-3">
        <div class="justify-content-md-start">
          <div class="alert alert-info alert-dismissible fade show" role="alert">Data Karyawan
            <strong>Berhasil </strong><?= $this->session->flashdata('Hapus'); ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('Edit')) : ?>
      <div class="col-md-8 m-auto py-3">
        <div class="justify-content-md-start">
          <div class="alert alert-warning alert-dismissible fade show" role="alert">Data Karyawan
            <strong>Berhasil </strong><?= $this->session->flashdata('Edit'); ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <?php if ($user['role_id'] == 1) : ?>
      <div class="col-md-2 mt-3 mb-1">
        <a type="button" class="btn btn-success" href="<?= site_url('Karyawan/addData'); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
          </svg>
          Data Karyawan
        </a>
      </div>
    <?php endif; ?>
    <div class="card-body">
      <div class="row justify-content-end me-4">
        <div class="col-md-4 mt-3 mb-1 ">
          <?= form_open(); ?>
          <div class="input-group mb-3 ">
            <input type="text" class="form-control" placeholder="Cari data Karyawan" name="cari">
            <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
          </div>
          <?= form_close(); ?>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>NIK</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Jabatan</th>
              <th>Alamat</th>
              <?php if ($user['role_id'] == 1) : ?>
                <th>Opsi</th>
              <?php endif; ?>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($Karyawan as $k) : ?>
              <tr>
                <th><?= ++$start ?></th>
                <td><?= $k['id_Karyawan']; ?></td>
                <td><?= $k['Nama']; ?></td>
                <td><?= $k['Jeniskelamin']; ?></td>
                <td><?= $k['Jabatan']; ?></td>
                <td><?= $k['Alamat']; ?></td>
                <?php if ($user['role_id'] == 1) : ?>
                  <td class="d-flex" style="justify-content:space-between;flex-direction:row;">
                    <a href="<?= site_url(); ?>Karyawan/deleteData/<?= $k['Id']; ?>" class="btn btn-danger text-xs " role="button">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                      </svg>
                      Delete
                    </a>
                    <a href="<?= site_url(); ?>Karyawan/editData/<?= $k['Id']; ?>" role="button" class="btn btn-warning text-xs ml-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                      </svg>
                      Edit
                    </a>
                  </td>
                <?php endif; ?>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <?php if (empty($Karyawan)) : ?>
          <div class="alert alert-danger" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-octagon-fill" viewBox="0 0 16 16">
              <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>Data Karyawan Tidak Ada.
          </div>
        <?php endif; ?>
        <?= $this->pagination->create_links(); ?>
      </div>
    </div>
  </div>
</div>