<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <!-- Buat Konten Disini -->
    <div class="thumbnail">
        <ul>
            <!-- Looping jenis surat berdasarkan role -->
            <?php foreach ($surat as $s): ?>
                <li><a href="<?= base_url('surat/formSurat/') . $s['id']; ?>"><img
                            src="<?= base_url('assets/img/gb_surat.png') ?>" /><br /><?= $s['jenis'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->