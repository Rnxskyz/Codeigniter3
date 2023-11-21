
<div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title fw-semibold mb-4"><?php echo $judul; ?></h2>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Tambah Data Calon Presiden
                    </div>

                    <div class="card-body">
                        <form action="<?= base_url('Capres/upload'); ?>" method="post">
                            <div class="form-group mb-3">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama lengkap">
                            </div>

                            <div class="form-group mb-3">
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK">
                            </div>

                            <!-- <div class="form-group mb-3">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                    <option value="">Jenis Kelamin</option>
                                    <option value="">Laki - laki</option>
                                    <option value="">Perempuan</option>
                                </select>
                            </div> -->

                            <div class="form-group mb-3">
                                <label for="text">Asal</label>
                                <input type="text" name="asal" class="form-control" id="asal" placeholder="asal">
                            </div>
                            <div class="form-group mb-3">
                                <label for="text">Umur</label>
                                <input type="text" name="umur" class="form-control" id="umur" placeholder="umur">
                            </div>

                            <!-- <div class="form-group mb-3">
                                <label for="prodi">Prodi</label>
                                <select name="prodi" id="prodi" class="form-control">
                                    <option value="">Pilih Prodi</option>
                                    <option value="teknik Informatika">teknik Informatika</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                </select>
                            </div> -->

                            <div class="form-group mb-3">
                                <label for="">Riwayat PekerJaan</label>
                                <input type="text" name="riwayat_pekerjaan" class="form-control" id="riwayat_pekerjaan" placeholder="riwayat_pekerjaan">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="">Partai Pendukung</label>
                                <input type="text" name="partai" class="form-control" id="partai" placeholder="No hp">
                            </div>

                            <!-- <div class="form-group mb-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="alamat">
                            </div> -->

                            <a href="<?=base_url('Capres')?> " class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Capres</button>
                        </form>
                    </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  