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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>NRP</td>
                            <td><?= $mahasiswa['nrp']; ?></td>
                        </tr>
                        <tr>
                            <td>NAMA</td>
                            <td><?= $mahasiswa['nama']; ?></td>
                        </tr>
                        <tr>
                            <td>JURUSAN</td>
                            <td><?= $mahasiswa['jurusan']; ?></td>
                        </tr>
                        <tr>
                            <td>EMAIL</td>
                            <td><?= $mahasiswa['email']; ?></td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary float-right">Kembali</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>