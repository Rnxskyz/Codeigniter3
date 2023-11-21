    <div class="container-fluid">
    <h1 class="card-title fw-semibold mb-4 "><?php echo $judul;?></h1>
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            Detail Prodi
            </div>
            <div class="card-body">
            <div class="card-title"><?= $prodi['nama_kaprodi'];?></div>
            <h6 class="card-subtitle mb-2 text-muted"><?= $prodi['email'];?></h6>
            
            <div class="row">
                <div class="col-md-4">Jurusan</div>
                <div class="col-md-2">:</div>
                <div class="col-md-4"><?= $prodi['jurusan'];?></div>
            </div>
            
            <div class="row">
                <div class="col-md-4">Ruangan</div>
                <div class="col-md-2">:</div>
                <div class="col-md-4"><?= $prodi['ruangan'];?></div>
            </div>
            
            <div class="row">
                <div class="col-md-4">Akreditasi</div>
                <div class="col-md-2">:</div>
                <div class="col-md-4"><?= $prodi['akreditasi'];?></div>
            </div>
            
            <div class="row">
                <div class="col-md-4">Nama Prodi</div>
                <div class="col-md-2">:</div>
                <div class="col-md-4"><?= $prodi['prodi'];?></div>
            </div>
            
            <div class="row">
                <div class="col-md-4">Tahun berdiri</div>
                <div class="col-md-2">:</div>
                <div class="col-md-4"><?= $prodi['tahun'];?></div>
            </div>
            
            <div class="row">
                <div class="col-md-4">Output Lulusan</div>
                <div class="col-md-2">:</div>
                <div class="col-md-4"><?= $prodi['lulusan'];?></div>
            </div>
            </div>
            <div class="card-footer justify-content-center">
            <a href="<?=base_url('Prodi')?>" class="btn btn-danger">Tutup</a>
            </div>
        </div>
        </div>
    </div>
    </div>