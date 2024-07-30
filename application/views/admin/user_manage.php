<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- Buat Konten Disini -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $title ?></h1>
    <div class="row">
        <div id="flash-message" class="col-lg-12">
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="col">
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal1">
                Tambah
            </button>
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th style="text-align: center;" width="20">No</th>
                        <th style="text-align: center;" width="200">Nama</th>
                        <th style="text-align: center;" width="200">Email</th>
                        <th style="text-align: center;" width="100">Role</th>
                        <th style="text-align: center;" width="80">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $i++; ?></td>
                            <td style="text-align: center;"><?php echo htmlspecialchars($user['name']); ?></td>
                            <td style="text-align: center;"><?php echo htmlspecialchars($user['email']); ?></td>
                            <td style="text-align: center;"><?php echo htmlspecialchars($user['role']); ?></td>
                            <td style="text-align: center;">
                                <a class="btn btn-warning" href="">
                                    <span class="fas fa-edit"></span>
                                </a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"
                                    data-user-id="<?= htmlspecialchars($user['id']); ?>">
                                    <span class="fas fa-times"></span>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Anda Yakin Menghapus User Ini??
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <a id="confirmDeleteButton" type="button" class="btn btn-danger" href="#">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Tambah User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo base_url('admin/tambah_user') ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="required-field" for="nama">Nama Lengkap &#42;</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" inputmode="numeric" class="form-control" id="nip" name="nip">
                                <?= form_error('nip', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="email">Email &#42;</label>
                                <input type="text" class="form-control" id="email" name="email">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="role">Role &#42;</label>
                                <select class="custom-select" data-placeholder="Pilih Role" name="role">
                                    <option value=""></option>
                                    <option value="1">Administrator</option>
                                    <option value="2">Trantib</option>
                                    <option value="3">Kesejahteraan Sosial</option>
                                    <option value="4">Pemerintahan</option>
                                </select>
                                <?= form_error('role', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Password &#42;</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label for="password1">Ulangi Password &#42;</label>
                                <input type="password" class="form-control" id="password1" name="password1">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->