<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Mahasiswa</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Mahasiswa</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


  <!-- Main content -->
  <section class="content">
    <!-- NOTIFIKASI -->
    <?php
    if ($this->session->flashdata('flash_mahasiswa')) { ?>
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h6>
          <i class="icon fas fa-check"></i>
          Data Berhasil
          <strong>
            <?= $this->session->flashdata('flash_mahasiswa');   ?>
          </strong>
        </h6>
      </div>
    <?php } ?>
    <!-- tambah data -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Tambah Data Mahasiswa</h5>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <form action="<?= base_url('Mahasiswa/tambahData') ?>" method="post">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                  </div>
                  <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" name="nrp" class="form-control" id="nrp">
                    <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email">
                    <small class="form-text text-danger"><?= form_error('email'); ?></small>
                  </div>
                  <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                      <option value="Teknik Informatika">Teknik Informatika</option>
                      <option value="Teknik Industri">Teknik Industri</option>
                      <option value="Teknik Pangan">Teknik Pangan</option>
                      <option value="Teknik Mesin">Teknik Mesin</option>
                      <option value="Teknik Planologi">Teknik Planologi</option>
                      <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                    </select>
                  </div>
                  <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                </form>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- ./card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- list data -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- card-body -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>nrp</th>
                  <th>nama</th>
                  <th>email</th>
                  <th>jurusan</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $row) { ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $row['nrp']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['jurusan']; ?></td>
                    <td>
                      <a href="<?= base_url(); ?>Mahasiswa/deleteData/<?= $row['id']; ?>" class="btn btn-danger float-right tombol-hapus">hapus</a>
                      <a href="<?= base_url(); ?>Mahasiswa/ubah/<?= $row['id']; ?>" class="btn btn-success float-right">ubah</a>
                      <a href="<?= base_url(); ?>Mahasiswa/detail/<?= $row['id']; ?>" class="btn btn-primary float-right">detail</a>
                    </td>
                  </tr>
                <?php
                  $no++;
                }
                ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper