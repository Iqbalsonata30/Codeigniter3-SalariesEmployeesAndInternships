<div class="container-fluid pt-5 mt-5 ">
  <div class="row mt-3 justify-content-center">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header text-center">
          <h3 class="">
            Absensi </h3>
        </div>
        <div class="card-body">
          <div class="card-text text-center">
            <h3 id="Jamsekarang"></h3>
            <h3 id="Tanggalsekarang"></h3>
          </div>
          <p class="card-text">
            <?= form_open(); ?>
          <div class="form-floating">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option value="">Hadir</option>
              <option value="">Sakit</option>
              <option value="">Cuti</option>
              <option value="">Alpha</option>
            </select>
            <label for="floatingSelect">Keterangan Absensi</label>
          </div>
          <?= form_close(); ?>
          </p>
          <h6 class="card-text text-center">Status Kehadiran :
            <div class="badge rounded-pill text-bg-primary">Belum Absen</div>
          </h6>
        </div>
      </div>
    </div>
    <!-- <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Absensi
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
      </div>
    </div> -->
  </div>










</div>