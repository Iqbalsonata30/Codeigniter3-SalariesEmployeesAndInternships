<div class="row mt-3">
  <div class="col-md-6 mx-auto">
    <div class="card shadow-lg border-left-info mb-3">
      <div class="card-header text-center">
        <h3 class="font-weight-bold" style="color:rgb(0,0,0,0.7);">Form Tambah Data Karyawan</h3>
      </div>
      <div class="card-body">
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
          <a href="<?= site_url('Karyawan/index'); ?>" class="btn btn-outline-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
            </svg>
            Kembali
          </a>
        </div>
        <?= form_open(''); ?>
        <div class="form-floating mb-3">
          <input type="number" class="form-control" id="ID" name="idKaryawan" placeholder="Masukkan ID Karyawan" style="color:black;">
          <label for="ID">ID Karyawan</label>
          <small class="form-text text-danger"><?= form_error('idKaryawan'); ?></small>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" style="color:black;" id="nama" name="namaKaryawan" placeholder="Masukkan Nama Karyawan">
          <label for="nama">Nama </label>
          <small class="form-text text-danger"><?= form_error('namaKaryawan'); ?></small>
        </div>
        <div class="form-floating mb-3">
          <select class="form-select " id="jenisKelamin" aria-label="Floating label select example" name="jeniskelamin">
            <option selected disabled>Gender </option>
            <option>Pria</option>
            <option>Wanita</option>
          </select>
          <label for="jenisKelamin">Jenis Kelamin</label>
          <small class="form-text text-danger"><?= form_error('jeniskelamin'); ?></small>
        </div>
        <div class="form-floating mb-3">
          <select class="form-select" id="jabatan" aria-label="Floating label select example" name="jabatanKaryawan">
            <option selected disabled>Pilih Jabatan </option>
            <option>CEO (Chief Executive Officer)</option>
            <option>CTO (Chief Technology Officer)</option>
            <option>CFO (Chief Financial Officer)</option>
            <option>CMO (Chief Marketing Officer)</option>
            <option>COO (Chief Operating Officer)</option>
            <option>Sales Manager</option>
          </select>
          <label for="jabatan">Jabatan</label>
          <small class="form-text text-danger"><?= form_error('jabatanKaryawan'); ?></small>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="Alamat" name="alamatKaryawan" placeholder="Jenis Kelamin Karyawan" style="color:black;">
          <label for="Alamat">Alamat</label>
          <small class="form-text text-danger"><?= form_error('alamatKaryawan'); ?></small>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button type="submit" class="btn btn-primary ">
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