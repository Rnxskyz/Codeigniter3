<div class="container-fluid">
  <h1 class="card-title fw-semibold mb-4 "><?php echo $judul;?></h1>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Detail Mahasiswa
        </div>
        <div class="card-body">
          <div class="card-title"><?= $mahasiswa['nama'];?></div>
          <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email'];?></h6>
          
          <div class="row">
            <div class="col-md-4">NIM</div>
            <div class="col-md-2">:</div>
            <div class="col-md-4"><?= $mahasiswa['nim'];?></div>
          </div>
          
          <div class="row">
            <div class="col-md-4">Jenis Kelamin</div>
            <div class="col-md-2">:</div>
            <div class="col-md-4"><?= $mahasiswa['jenis_kelamin'];?></div>
          </div>
          
          <div class="row">
            <div class="col-md-4">Prodi</div>
            <div class="col-md-2">:</div>
            <div class="col-md-4"><?= $mahasiswa['prodi'];?></div>
          </div>
          
          <div class="row">
            <div class="col-md-4">Asal Sekolah</div>
            <div class="col-md-2">:</div>
            <div class="col-md-4"><?= $mahasiswa['asal_sekolah'];?></div>
          </div>
          
          <div class="row">
            <div class="col-md-4">No.HP</div>
            <div class="col-md-2">:</div>
            <div class="col-md-4"><?= $mahasiswa['no_hp'];?></div>
          </div>
          
          <div class="row">
            <div class="col-md-4">Alamat</div>
            <div class="col-md-2">:</div>
            <div class="col-md-4"><?= $mahasiswa['alamat'];?></div>
          </div>
        </div>
        <div class="card-footer justify-content-center">
          <a href="<?=base_url('Mahasiswa')?>" class="btn btn-danger">Tutup</a>
        </div>
      </div>
    </div>
  </div>
</div>