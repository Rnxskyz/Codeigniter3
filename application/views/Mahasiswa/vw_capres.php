
<div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title fw-semibold mb-4"><?php echo $judul; ?></h2>
            <div class="row">
              <div class="col-md-6"><a href="<?= base_url()?>Capres/Tambah" class="btn btn-info mb-2">Tambah Mahasiswa</a></div>
              <div class="col-md-12">
                <table class="table">
                  <thead>
                    <tr>
                      <td>No</td>
                      <td>Nama Lengkap</td>
                      <td>NIK</td>
                      <td>Asal</td>
                      <td>Umur</td>
                      <td>Riwayat Pekerjaan</td>
                      <td>Partai Pendukung</td>
                      <td>Aksi</td>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $i = 1;?> 
                    <?php foreach ($calon_presiden as $cp) : ?>
                      <tr>
                          <td><?= $i;?>.</td>
                          <td><?=  $cp['nama_lengkap'];?>.</td>
                          <td><?=  $cp['nik'];?>.</td>
                          <td><?=  $cp['asal'];?>.</td>
                          <td><?=  $cp['umur'];?>.</td>
                          <td><?=  $cp['riwayat_pekerjaan'];?>.</td>
                          <td><?=  $cp['partai'];?>.</td>
                        <td>
                          <a href="<?= base_url('Capres/Hapus/') . $cp['id']; ?> " class="btn btn-danger">Hapus</a>
                          <a href="<?= base_url('Capres/Edit/') .  $cp['id'];?>" class="btn btn-warning">Edit</a>
                          <a href="<?= base_url('Capres/Detail/') . $cp['id'];?>" class="btn btn-info">Detail</a>
                        </td>
                      </tr>
                      <?php $i++; ?> 
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  