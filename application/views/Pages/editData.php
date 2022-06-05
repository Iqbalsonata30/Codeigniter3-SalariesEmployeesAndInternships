<div class="row mt-3">
  <div class="col-md-6 mx-auto">
    <div class="card shadow-lg border-left-info mb-3">
      <div class="card-header text-center">
        <h3 class="font-weight-bold" style="color:rgb(0,0,0,0.7);">Form Edit Data Karyawan</h3>
      </div>
      <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
          <a href="<?= site_url('Karyawan/index'); ?>" class=" btn btn-outline-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
            </svg>
            Kembali
          </a>
        </div>
        <?= form_open(''); ?>
        <input hidden type="number" class="form-control" id="ID" name="Id" placeholder="Masukkan ID Karyawan" value="<?= $Karyawan['Id']; ?>">
        <div class="form-floating mb-3">
          <input type="number" class="form-control" id="id" name="idKaryawan" placeholder="Masukkan ID Karyawan" value="<?= $Karyawan['id_Karyawan']; ?>" style="color:black;">
          <label for="idKaryawan">Id Karyawan </label>
          <small class="form-text text-danger"><?= form_error('namaKaryawan'); ?></small>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="nama" name="namaKaryawan" placeholder="Masukkan Nama Karyawan" value="<?= $Karyawan['Nama']; ?>" style="color:black;">
          <label for="nama">Nama </label>
          <small class="form-text text-danger"><?= form_error('namaKaryawan'); ?></small>
        </div>
        <div class="form-floating mb-3">
          <select class="form-select" id="jenisKelamin" aria-label="Floating label select example" name="jeniskelamin">
            <option disabled>Gender </option>
            <?php foreach ($Gender as $G) : ?>
              <?php if ($G == $Karyawan['Jeniskelamin']) : ?>
                <option value="<?= $G; ?>" selected><?= $G; ?></option>
              <?php else : ?>
                <option value="<?= $G; ?>"><?= $G; ?></option>
              <?php endif; ?>
            <?php endforeach; ?>
          </select>
          <label for="jenisKelamin">Jenis Kelamin</label>
          <small class="form-text text-danger"><?= form_error('jeniskelamin'); ?></small>
        </div>
        <div class="form-floating mb-3">
          <select class="form-select" id="jabatan" aria-label="Floating label select example" name="jabatanKaryawan">
            <option disabled>Pilih Jabatan</option>
            <?php foreach ($jabatan as $J) : ?>
              <?php if ($J == $Karyawan['Jabatan']) : ?>
                <option value="<?= $J; ?>" selected><?= $J; ?></option>
              <?php else : ?>
                <option value="<?= $J; ?>"><?= $J; ?></option>
              <?php endif; ?>
            <?php endforeach; ?>
          </select>
          <label for="jabatan">Jabatan</label>
          <small class="form-text text-danger"><?= form_error('jabatanKaryawan'); ?></small>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="Alamat" name="alamatKaryawan" placeholder="Jenis Kelamin Karyawan" value="<?= $Karyawan['Alamat']; ?>" style="color:black;">
          <label for="Alamat">Alamat</label>
          <small class="form-text text-danger"><?= form_error('alamatKaryawan'); ?></small>
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
      </div>
      </form>
    </div>
  </div>
</div>
</div>