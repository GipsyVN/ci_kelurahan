<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- Buat Konten Disini -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $title ?></h1>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary mb-2" href="">Tambah</a>
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

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->