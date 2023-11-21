
<div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title fw-semibold mb-4"><?php echo $judul; ?></h2>
            <div class="row">
              <div class="col-md-6"><a href="<?= base_url()?>Prodi/Tambah" class="btn btn-info mb-2">Tambah Data</a></div>
              <div class="col-md-12">
                <table class="table">
                  <thead>
                    <tr>
                      <td>No</td>
                      <td>Nama Prodi</td>
                      <td>Ruangan</td>
                      <td>Jurusan</td>
                      <td>Akreditasi</td>
                      <td>Nama Kaprodi</td>
                      <td>Tahun Berdiri</td>
                      <td>Output Lulusan</td>
                      <td>Aksi</td>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $i = 1;?> 
                    <?php foreach ($prodi as $pr) : ?>
                      <tr>
                          <td><?= $i;?>.</td>
                          <td><?= $pr['prodi'];?>.</td>
                          <td><?= $pr['ruangan'];?>.</td>
                          <td><?= $pr['jurusan'];?>.</td>
                          <td><?= $pr['akreditasi'];?>.</td>
                          <td><?= $pr['nama_kaprodi'];?>.</td>
                          <td><?= $pr['tahun'];?>.</td>
                          <td><?= $pr['lulusan'];?>.</td>
                        <td>
                          <a href="<?= base_url('Prodi/Hapus/') . $pr['id']; ?> " class="btn btn-danger">Hapus</a>
                          <a href="<?= base_url('Prodi/Edit/') . $pr['id'];?>" class="btn btn-warning">Edit</a>
                          <a href="<?= base_url('Prodi/Detail/') . $pr['id'];?>" class="btn btn-info">Detail</a>
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
  