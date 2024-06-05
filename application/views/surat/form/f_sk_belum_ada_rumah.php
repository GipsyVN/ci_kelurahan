<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- Buat Konten Disini -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo "Form Isian Pemohon" ?></h1>

    <div class="row">
        <div class="col">
            <form action="<?= base_url('surat/test'); ?>" method="post">
                <div class="form-group row">
                    <label for="noSurat" class="col-sm-2 col-form-label">No Surat</label>
                    <div class="col-sm-9 mb-3">
                        <input type="text" class="form-control" id="noSurat" name="noSurat"
                            value="<?= set_value('noSurat') ?>">
                        <?= form_error('noSurat', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="nama" class="col-sm-2 col-form-label">Nama Pemohon</label>
                    <div class="col-sm-9 mb-3">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama') ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-9 mb-3">
                        <input type="number" class="form-control" id="nik" name="nik" value="<?= set_value('nik') ?>">
                        <?= form_error('nik', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="tem_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9 mb-3">
                        <input type="text" class="form-control" id="tem_lahir" name="tem_lahir"
                            value="<?= set_value('tem_lahir') ?>">
                        <?= form_error('tem_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="tang_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-9 mb-3">
                        <input type="date" class="form-control" id="tang_lahir" name="tang_lahir"
                            value="<?= set_value('tang_lahir') ?>">
                        <?= form_error('tang_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="j_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9 mb-3">
                        <div class="form-check-inline mr-5 mt-2">
                            <input class="mr-2" type="radio" id="laki" name="j_kelamin" value="Laki - Laki">
                            <label class="form-check-label " for="laki">Laki - Laki</label>
                        </div>
                        <div class="form-check-inline mr-3 mt-2">
                            <input class="mr-2" type="radio" id="perempuan" name="j_kelamin" value="Perempuan">
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                        <?= form_error('j_kelamin', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-9 mb-3">
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                            value="<?= set_value('pekerjaan') ?>">
                        <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="alamat" class="col-sm-2 col-form-label">Alamat Tempat Tinggal</label>
                    <div class="col-sm-9 mb-3">
                        <textarea type="text" class="form-control" id="alamat" name="alamat"
                            value="<?= set_value('alamat') ?>"></textarea>
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="noSurat" class="col-sm-2 col-form-label">SK dari RT</label>
                    <div class="col-sm-9 mb-3">
                        <input type="text" class="form-control" id="noSurat" name="noSurat"
                            value="<?= set_value('noSurat') ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="noSurat" class="col-sm-2 col-form-label">Tanggal Surat</label>
                    <div class="col-sm-9 mb-3">
                        <input type="date" class="form-control" id="tang_surat" name="tang_surat"
                            value="<?= set_value('tang_surat') ?>">
                        <?= form_error('tang_surat', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Preview</button>
                        <a href="<?php //echo base_url('surat') ?>" class="btn btn-primary">Simpan</a>
                        <a href="<?= base_url('surat') ?>" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->