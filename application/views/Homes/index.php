<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-900 text-uppercase"><Strong>Home</strong></h1>
  </div>
  <div class="row" style="justify-content:space-between;">
    <div class="col-lg-7 m-auto ">
      <div class="card   border-left-primary shadow-lg mb-4" id="Jumbotron" style="height:25rem;">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-auto font-weight-bold text-dark text-lg" style="text-align:center;">Greetings</h6>
        </div>
        <div class="card-body text-gray-900 py-5">
          <h1 class="text-center textjumbo" id="selamat"><?= $Salam; ?>,<p style="font-size:0.6em;"><?= $user['fullname']; ?></p>
          </h1>
          <h3 class=" lead text-center" style="font-family: 'Tinos', serif;">Ini merupakan contoh sistem aplikasi mencetak total gaji karyawan tetap dan karyawan magang di <br>
            <span class="text-center fs-2" style="font-family:'Dancing Script';font-size:larger;"><b>Sand-Box</b></span>.
          </h3>
        </div>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="card border-left-primary shadow mb-4" style="width: 25rem;height:25rem;">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-auto font-weight-bold text-dark text-lg"> Absensi</h6>
        </div>
        <div class="card-body py-5 m-auto">
          <div class="card-text text-center text-lg font-weight-bold" style="color:black">
            <h3 id="Jamsekarang"></h3>
            <h3 id="Tanggalsekarang"></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-5">
      <div class="card border-left-info shadow mb-4" style="width: 25rem;height:25rem;">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-auto font-weight-bold text-primary "> Jumlah Karyawan Tetap</h6>
        </div>
        <div class="card-body py-5 m-auto">
          <div class="text-center ">
            <a href="<?= site_url('Karyawan/index'); ?>">
              <img src="<?= base_url('assets/img/karyawantetap.png'); ?>" alt="Karyawan">
            </a>
          </div>
          <h3 class="card-text text-center  font-weight-bold py-5 " id="text4" style="color:black;"><?= $JumlahEmployees; ?> Orang</h3>
        </div>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="card border-left-info shadow mb-4" style="width: 25rem;height:25rem;">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-auto font-weight-bold text-primary">Jumlah Karyawan Magang</h6>
        </div>
        <div class="card-body py-5 m-auto">
          <div class="text-center ">
            <a href="<?= site_url('Internships/index'); ?>">
              <img src="<?= base_url('assets/img/magang.png'); ?>" alt="Karyawan">
            </a>
          </div>
          <h3 class="card-text text-center font-weight-bold py-5 " id="text4" style="color:black;"><?= $JumlahInternships; ?> Orang</h3>
        </div>
      </div>
    </div>
  </div>