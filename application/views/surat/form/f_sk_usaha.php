<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- Buat Konten Disini -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard<?php //$title ?></h1>

    <div class="row">
        <div class="col">
            <form action="<?= base_url(''); ?>" method="post">
                <div class="form-group row">
                    <label for="noSurat" class="col-sm-2 col-form-label">No Surat</label>
                    <div class="col-sm-9 mb-3">
                        <input type="text" class="form-control" id="noSurat" name="noSurat"
                            value="<?= set_value('noSurat') ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="nama" class="col-sm-2 col-form-label">Nama Pemohon</label>
                    <div class="col-sm-9 mb-3">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama') ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="tem_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9 mb-3">
                        <input type="text" class="form-control" id="tem_lahir" name="tem_lahir"
                            value="<?= set_value('tem_lahir') ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="tang_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-9 mb-3">
                        <input type="date" class="form-control" id="tang_lahir" name="tang_lahir"
                            value="<?= set_value('tang_lahir') ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="noSurat" class="col-sm-2 col-form-label">No Surat</label>
                    <div class="col-sm-9 mb-3">
                        <input type="text" class="form-control" id="noSurat" name="noSurat"
                            value="<?= set_value('noSurat') ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="noSurat" class="col-sm-2 col-form-label">No Surat</label>
                    <div class="col-sm-9 mb-3">
                        <input type="text" class="form-control" id="noSurat" name="noSurat"
                            value="<?= set_value('noSurat') ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="noSurat" class="col-sm-2 col-form-label">No Surat</label>
                    <div class="col-sm-9 mb-3">
                        <input type="text" class="form-control" id="noSurat" name="noSurat"
                            value="<?= set_value('noSurat') ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="noSurat" class="col-sm-2 col-form-label">No Surat</label>
                    <div class="col-sm-9 mb-3">
                        <input type="text" class="form-control" id="noSurat" name="noSurat"
                            value="<?= set_value('noSurat') ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="noSurat" class="col-sm-2 col-form-label">No Surat</label>
                    <div class="col-sm-9 mb-3">
                        <input type="text" class="form-control" id="noSurat" name="noSurat"
                            value="<?= set_value('noSurat') ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="noSurat" class="col-sm-2 col-form-label">No Surat</label>
                    <div class="col-sm-9 mb-3">
                        <input type="text" class="form-control" id="noSurat" name="noSurat"
                            value="<?= set_value('noSurat') ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <label for="noSurat" class="col-sm-2 col-form-label">No Surat</label>
                    <div class="col-sm-9 mb-3">
                        <input type="text" class="form-control" id="noSurat" name="noSurat"
                            value="<?= set_value('noSurat') ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Ubah Password</button>
                </div>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->