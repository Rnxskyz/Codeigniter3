
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title fw-semibold mb-4"><?php echo $judul; ?></h2>
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Prodi
                </div>

                <div class="card-body">
                    <form action="<?= base_url('Prodi/upload'); ?>" method="post">
                        <div class="form-group mb-3">
                            <label for="prodi">Nama Prodi</label>
                            <input type="text" name="prodi" class="form-control" id="prodi" placeholder="Nama Prodi">
                        </div>

                        <div class="form-group mb-3">
                            <label for="ruangan">Ruangan</label>
                            <input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="Ruangan">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" name="akreditasi" class="form-control" id="akreditasi" placeholder="akreditasi">
                        </div>

                        <div class="form-group mb-3">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control">
                                <option value="">Pilih Jurusan</option>
                                <option value="JTI">JTI</option>
                                <option value="JSI">JSI</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama_kaprodi">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi" placeholder="nama kaprodi">
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="tahun">Tahun Berdiri</label>
                            <input type="text" name="tahun" class="form-control" id="tahun" placeholder="tahun">
                        </div>

                        <div class="form-group mb-3">
                            <label for="lulusan">Output Lulusan</label>
                            <input type="text" name="lulusan" class="form-control" id="lulusan" placeholder="lulusan">
                        </div>

                        <a href="<?=base_url('Prodi')?> " class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Prodi</button>
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
