<div class="row mt-3">
  <div class="col-md-6 mx-auto">
    <div class="card shadow-lg border-left-info mb-3">
      <div class="card-header text-center">
        <h4 class="font-weight-bold " style="color:rgb(0,0,0,0.7);">Form Edit Data Karyawan Magang</h4>
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
        <?= form_open_multipart(''); ?>
        <input hidden type="number" class="form-control" id="Id" name="Id" placeholder="ID Karyawan Magang">
        <div class=" mb-3">
          <input type="number" class="form-control" id="nama" name="idMagang" placeholder="Nama Karyawan Magang" value="<?= $Magang['ID_Magang']; ?>">
          <small class="form-text text-danger"><?= form_error('idMagang'); ?></small>
        </div>
        <div class=" mb-3">
          <input type="text" class="form-control" id="nama" name="namaMagang" placeholder="Nama Karyawan Magang" value="<?= $Magang['Nama']; ?>">
          <small class="form-text text-danger"><?= form_error('namaMagang'); ?></small>
        </div>
        <div class=" mb-3">
          <label for="jeniskelamin">Jenis Kelamin : </label>
          <div>
            <select class="form-select shadow-lg mb-3 animated--grow-in p-2" id="jeniskelamin" aria-label="Floating label select example" name="jeniskelaminMagang" style="border-radius:5px;width:85px;height:40px;font-size:0.9em;">
              <option disabled>Gender</option>
              <?php foreach ($Gender as $G) : ?>
                <?php if ($G == $Magang['Jeniskelamin']) : ?>
                  <option value="<?= $G; ?>" selected><?= $G; ?></option>
                <?php else : ?>
                  <option value="<?= $G; ?>"><?= $G; ?></option>
                <?php endif; ?>
              <?php endforeach; ?>
            </select>
          </div>
          <small class="form-text text-danger"><?= form_error('jeniskelaminMagang'); ?></small>
        </div>
        <div class=" mb-3">
          <input type="date" class="form-control" id="tanggalmasuk" name="tahunmasukMagang" placeholder="Tahun Awal Magang" value="<?= $Magang['Tahun_Masuk']; ?>">
          <small class="form-text text-danger"><?= form_error('tahunmasukMagang'); ?></small>
        </div>
        <div class=" mb-3">
          <label for="alamat" class="p-1">Alamat : </label>
          <input class="form-control" placeholder="Leave a comment here" id="alamat" name="alamatMagang" style="height: 100px" value="<?= $Magang['Alamat']; ?>">
          <small class="form-text text-danger"><?= form_error('alamatMagang'); ?></small>
        </div>
        <div class="input-group mb-3">
          <input type="file" class="form-control" id="inputGroupFile02" name="userfile" value="<?= $Magang['Gambar']; ?>" style="border-radius:5px;height:auto;>
        </div>
        <div class=" input-group mb-1">
          <img src="<?= base_url('assets/img/gambarMagang/' . $Magang['Gambar']); ?>" width="80px">
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button type="submit" class="btn btn-primary ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
            </svg>
            Edit Data
          </button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>