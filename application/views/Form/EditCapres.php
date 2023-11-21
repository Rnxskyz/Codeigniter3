
<div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title fw-semibold mb-4"><?php echo $judul; ?></h2>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Edit Data Calon Presiden 
                    </div>

                    <div class="card-body">
                        <form action="<?= base_url('Capres/update'); ?>" method="post">
                        <input type="hidden" name="id" value="<?= $calon_presiden['id'];?>">
                            <div class="form-group mb-3">
                                <label for="nama_lengkap">Nama lengkap</label>
                                <input type="text" name="nama_lengkap" value="<?= $calon_presiden['nama_lengkap'];?>" class="form-control" id="nama_lengkap" placeholder="Nama lengkap">
                            </div>

                            <div class="form-group mb-3">
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" value="<?= $calon_presiden['nik'];?>" class="form-control" id="nik" placeholder="NIK">
                            </div>

                            <!-- <div class="form-group mb-3">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" value="" class="form-control">
                                    <option value="">Jenis Kelamin</option>
                                    <option value="Laki - laki">Laki - laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div> -->

                            <div class="form-group mb-3">
                                <label for="email">Asal</label>
                                <input type="text" name="email" value="<?= $calon_presiden['asal'];?>" class="form-control" id="email" placeholder="Asal">
                            </div>
                            <div class="form-group mb-3">
                                <label for="umur">Umur</label>
                                <input type="text" name="umur" value="<?= $calon_presiden['umur'];?>" class="form-control" id="umur" placeholder="umur">
                            </div>

                            <!-- <div class="form-group mb-3">
                                <label for="prodi">Prodi</label>
                                <select name="prodi" id="prodi" value=" class="form-control">
                                    <option value="">Pilih Prodi</option>
                                    <option value="teknik Informatika">teknik Informatika</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                </select>
                            </div> -->

                            <div class="form-group mb-3">
                                <label for="riwayat_pekerjaan">riwayat Pekerjaan</label>
                                <input type="text" name="riwayat_pekerjaan" value="<?= $calon_presiden['riwayat_pekerjaan'];?>" class="form-control" id="asal_sekolah" placeholder="asal sekolah">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="partai">Partai Pendukung</label>
                                <input type="text" name="partai" value="<?= $calon_presiden['partai'];?>" class="form-control" id="partai" placeholder="Partai Pendukung">
                            </div>

                            <!-- <div class="form-group mb-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" value="<?= $calon_presiden['alamat'];?>" class="form-control" id="alamat" placeholder="alamat">
                            </div> -->

                            <a href="<?=base_url('Capres')?> " class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Edit Capres</button>
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
  