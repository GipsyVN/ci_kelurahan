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
                            <td style="text-align: center;"><?php echo $i; ?></td>
                            <td style="text-align: center;"><?php echo $user['name']; ?></td>
                            <td style="text-align: center;"><?php echo $user['email']; ?></td>
                            <td style="text-align: center;"><?php echo $user['role']; ?></td>
                            <td style="text-align: center;">
                                <a class="btn btn-warning" href="">
                                    <span class="fas fa-edit"></span>
                                </a>
                                <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn btn-danger" href="">
                                    <span class="fas fa-times"></span>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->