<div class="row">
  <div class="col-lg-7 m-auto">
    <div class="card shadow mb-4 d-flex">
      <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <h6 class="m-0 text-center  font-weight-bold text-primary">Daftar Karyawan Magang</h6>
      </a>
      <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
          <?php if ($user['role_id'] == 1) : ?>
            <div class="col-lg-6 ">
              <a type="button" href="<?= site_url('Internships/tambahDataMagang'); ?>" class="btn btn-success btn-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                </svg>
                Data Karyawan Magang
              </a>
            </div>
          <?php endif; ?>
          <div class="col-lg-6 mt-2 " style="float:right;">
            <?= form_open(); ?>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Cari data Karyawan" name="cari">
              <button class="btn btn-info" type="submit" id="button-addon2">Search</button>
            </div>
            <?= form_close(); ?>
          </div>
        </div>
        <div class="card-body mt-3">
          <?php if ($this->session->flashdata('Hapus')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Karyawan Magang
              Berhasil <strong><?= $this->session->flashdata('Hapus'); ?></strong>
            </div>
          <?php endif; ?>
        </div>
        <?php if ($this->session->flashdata('Edit')) : ?>
          <div class="card-body ">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">Data Karyawan Magang
              Berhasil <strong><?= $this->session->flashdata('Edit'); ?></strong>
            </div>
          </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('Kilat')) : ?>
          <div class="card-body">
            <div class="alert alert-success alert-dismissible fade show " id="RegisterSession" role="alert">Data Karyawan Magang
              Berhasil <Strong><?= $this->session->flashdata('Kilat'); ?></strong>
            </div>
          </div>
        <?php endif; ?>
      </div>
      <ul class="list-group list-group-flush col-lg p-2 mt-2">
        <?php if (empty($Magang)) : ?>
          <li class="list-group-item">
            <div class="alert alert-danger d-flex align-items-center" role="alert">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-octagon-fill" viewBox="0 0 16 16">
                <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
              </svg>
              <div class="ms-2">
                Data Karyawan Magang Tidak Ada.
              </div>
            </div>
          </li>
        <?php endif; ?>
        <?php foreach ($Magang as $m) : ?>
          <li class="list-group-item "><?= $m['Nama']; ?>
            <?php if ($user['role_id'] == 1) : ?>
              <div class="" style="float:right">
                <a href="<?= site_url(); ?>Internships/editDataMagang/<?= $m['Id']; ?>" role="button" class="btn btn-warning btn-sm">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                  </svg>
                  Edit</a>
              </div>
              <div class="mr-2 " style="float:right">
                <a href="<?= site_url(); ?>Internships/deleteDataMagang/<?= $m['Id']; ?>" role="button" class="btn btn-danger btn-sm">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                  </svg>
                  Delete</a>
              </div>
            <?php endif; ?>
            <div class="mr-2 " style="float:right">
              <a href="<?= site_url(); ?>Internships/DataMagang/<?= $m['Id']; ?>" role="button" class="btn btn-primary btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z" />
                </svg>
                Data Lengkap</a>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
      <div class="m-3">
        <?= $this->pagination->create_links(); ?>
      </div>
    </div>
  </div>
</div>