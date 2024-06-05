<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Usaha Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script>
        function toggleForm() {
            var beroperasi = document.getElementById('buka');
            var tidakBeroperasi = document.getElementById('tutup');
            var divBeroperasi = document.getElementById('divBeroperasi');
            var divTidakBeroperasi = document.getElementById('divTidakBeroperasi');

            if (beroperasi.checked) {
                divBeroperasi.style.display = 'block';
                divTidakBeroperasi.style.display = 'none';
            } else if (tidakBeroperasi.checked) {
                divBeroperasi.style.display = 'none';
                divTidakBeroperasi.style.display = 'block';
            } else {
                divBeroperasi.style.display = 'none';
                divTidakBeroperasi.style.display = 'none';
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="<?= base_url('surat/test'); ?>" method="post">
                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status Usaha</label>
                        <div class="col-sm-9 mb-3">
                            <div class="form-check-inline mr-5 mt-2">
                                <input class="mr-2" type="radio" id="buka" name="status" value="Beroperasi"
                                    onclick="toggleForm()">
                                <label class="form-check-label" for="buka">Beroperasi</label>
                            </div>
                            <div class="form-check-inline mr-3 mt-2">
                                <input class="mr-2" type="radio" id="tutup" name="status" value="Tidak Beroperasi"
                                    onclick="toggleForm()">
                                <label class="form-check-label" for="tutup">Tidak Beroperasi</label>
                            </div>
                            <?= form_error('status', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>

                        <!-- Tidak Beroperasi -->
                        <div id="divTidakBeroperasi" style="display: none;">
                            <label for="namaUsaha" class="col-sm-2 col-form-label">Nama Usaha</label>
                            <div class="col-sm-9 mb-3">
                                <input type="text" class="form-control" id="namaUsaha" name="namaUsaha"
                                    value="<?= set_value('namaUsaha') ?>">
                                <?= form_error('namaUsaha', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <!-- Beroperasi -->
                        <div id="divBeroperasi" style="display: none;">

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

                            <label for="j_usaha" class="col-sm-2 col-form-label">Jenis Usaha</label>
                            <div class="col-sm-9 mb-3">
                                <input type="text" class="form-control" id="j_usaha" name="j_usaha"
                                    value="<?= set_value('j_usaha') ?>">
                                <?= form_error('j_usaha', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>

                            <label for="a_usaha" class="col-sm-2 col-form-label">Alamat Tempat Usaha</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" id="alamat" name="alamat"
                                    value="<?= set_value('alamat') ?>"></textarea>
                                <?= form_error('a_usaha', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Ubah Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>