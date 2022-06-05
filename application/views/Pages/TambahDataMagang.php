<div class="row mt-3">
  <div class="col-md-6 mx-auto">
    <div class="card shadow-lg border-left-info mb-3">
      <div class="card-header text-center">
        <h4 class="font-weight-bold " style="color:rgb(0,0,0,0.7);">Form Tambah Data Karyawan Magang</h4>
      </div>
      <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
          <a href="<?= site_url('Internships/index'); ?>" class="btn btn-outline-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
            </svg>
            Kembali
          </a>
        </div>

        <form action="" method="POST" enctype="multipart/form-data" style="font-family:'Roboto Slab';">
          <div class=" mb-3">
            <input type="number" class="form-control" id="Id" name="idMagang" placeholder="ID Karyawan Magang">
            <small class="form-text text-danger"><?= form_error('idMagang'); ?></small>
          </div>
          <div class=" mb-3">
            <input type="text" class="form-control" id="nama" name="namaMagang" placeholder="Nama Karyawan Magang">
            <small class="form-text text-danger"><?= form_error('namaMagang'); ?></small>
          </div>
          <div class=" mb-3">
            <label for="jeniskelamin">Jenis Kelamin : </label>
            <div>
              <select class="form-select shadow-lg mb-3 animated--grow-in p-2" id="jeniskelamin" aria-label="Floating label select example" name="jeniskelaminMagang" style="border-radius:5px;width:85px;height:40px;font-size:0.9em;">
                <option selected disabled>Gender</option>
                <option value=" Pria">Pria</option>
                <option value="Wanita">Wanita</option>
              </select>
            </div>
            <small class="form-text text-danger"><?= form_error('jeniskelaminMagang'); ?></small>
          </div>
          <div class="mb-3">
            <input type="date" class="form-control" id="tanggalmasuk" name="tahunmasukMagang" placeholder="Tahun Awal Magang">
            <small class="form-text text-danger"><?= form_error('tahunmasukMagang'); ?></small>
          </div>
          <div class=" form">
            <label class="font-weight-bold p-1" for="alamat">Alamat : </label>
            <textarea class="form-control" placeholder="Leave a comment here" id="alamat" name="alamatMagang" style="height: 100px"></textarea>
            <small class="form-text text-danger"><?= form_error('alamatMagang'); ?></small>
          </div>
          <div class="col-lg mb-3">
            <input type="file" class="form-control shadow-lg" id="inputGroupFile02" name="userfile" style="border-radius:5px;height:auto;">
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-outline-primary ">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
              </svg>
              Tambah Data
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>