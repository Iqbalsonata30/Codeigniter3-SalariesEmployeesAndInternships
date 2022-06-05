<div class="row mt-3  justify-content-center">
  <div class="card shadow-lg  border-left-info mb-3" style="width:33%;">
    <img src="<?= base_url('assets/img/gambarMagang/' . $Magang['Gambar']); ?>" class="img-fluid rounded-start p-1" alt="Data">
    <div class="card-body">
      <div class="row-detail">
        <div class="col-lg">
          <dl class="row" style="color:black;">
            <dt class="col-sm-5">ID Magang</dt>
            <dd class="col-sm-7">:<?= $Magang['ID_Magang'] ?></dd>
            <dt class="col-sm-5">Nama</dt>
            <dd class="col-sm-7">:<?= $Magang['Nama'] ?></dd>
            <dt class="col-sm-5">Gender</dt>
            <dd class="col-sm-7">:<?= $Magang['Jeniskelamin'] ?></dd>
            <dt class="col-sm-5">Tanggal Magang</dt>
            <dd class="col-sm-7">:<?= $Magang['Tahun_Masuk'] ?></dd>
            <dt class="col-sm-5">Alamat</dt>
            <dd class="col-sm-7">:<?= $Magang['Alamat'] ?></dd>
          </dl>
        </div>
      </div>

      <a href="<?= site_url('Internships/index'); ?>" class="btn btn-success btn-md float-end" style="float:right;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
        </svg>
        Kembali
      </a>
    </div>
  </div>
</div>            