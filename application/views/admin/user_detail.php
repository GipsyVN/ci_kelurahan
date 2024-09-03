<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- Buat Konten Disini -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
    <div class="row">
        <div id="flash-message" class="col-lg-12">
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nama</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?= $users['name']; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">NIP</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?= $users['nip'] ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?= $users['email'] ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Role</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?= $users['role'] ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Akun Dibuat</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?= format_tanggal_profile(date('Y-m-d', $users['date_created'])) ?>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-3">Gambar</div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img width="100px" height="auto"
                                        src="<?= base_url('assets/img/profile/') . $users['image']; ?>"
                                        class="img-thumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <a class="btn btn-info " data-toggle="modal" data-target="#exampleModal">Ubah
                                Role</a>
                            <a class="btn btn-secondary " data-toggle="modal" data-target="#exampleModal1">Ubah
                                Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Role -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url('admin/update_role_user/') . $users['id'] ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="role">Role &#42;</label>
                            <select class="custom-select" data-placeholder="Pilih Role" name="role">
                                <option value=""></option>
                                <option value="1">Administrator</option>
                                <option value="2">Trantib</option>
                                <option value="3">Kesejahteraan Sosial</option>
                                <option value="4">Pemerintahan</option>
                            </select>
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

    <!-- Modal Reset Password -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Ubah Password <?= $users['name'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url('admin/update_password_user/') . $users['id'] ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="password">Password Baru &#42;</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="password1">Ulangi Password Baru &#42;</label>
                            <input type="password" class="form-control" id="password1" name="password1">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="password_admin">Password Anda &#42;</label>
                            <input type="password" class="form-control" id="password_admin" name="password_admin">
                            <?= form_error('password_admin', '<small class="text-danger pl-3">', '</small>') ?>
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