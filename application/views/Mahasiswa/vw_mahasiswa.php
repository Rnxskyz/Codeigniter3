
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title fw-semibold mb-4"><?php echo $judul; ?></h2>
            <div class="row">
              <div class="col-md-6"><a href="<?= base_url()?>Mahasiswa/Tambah" class="btn btn-info mb-2">Tambah Mahasiswa</a></div>
              <div class="col-md-12">
                <table class="table">
                  <thead>
                    <tr>
                      <td>No</td>
                      <td>Nama</td>
                      <td>Nim</td>
                      <td>Email</td>
                      <td>Aksi</td>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $i = 1;?> 
                    <?php foreach ($mahasiswa as $us) : ?>
                      <tr>
                          <td><?= $i;?>.</td>
                          <td><?= $us['nama'];?>.</td>
                          <td><?= $us['nim'];?>.</td>
                          <td><?= $us['email'];?>.</td>
                        <td>
                          <a href="<?= base_url('Mahasiswa/Hapus/') . $us['id']; ?> " class="btn btn-danger">Hapus</a>
                          <a href="<?= base_url('Mahasiswa/Edit/') . $us['id'];?>" class="btn btn-warning">Edit</a>
                          <a href="<?= base_url('Mahasiswa/Detail/') . $us['id'];?>" class="btn btn-info">Detail</a>
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
  