<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Usaha Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script>
        function toggleForm() {
            const status = document.querySelector('input[name="status"]:checked').value;
            const operatingFields = document.querySelectorAll('.operating-field');
            const nonOperatingFields = document.querySelectorAll('.non-operating-field');

            if (status === 'Beroperasi') {
                operatingFields.forEach(field => field.style.display = 'block');
                nonOperatingFields.forEach(field => field.style.display = 'none');
            } else {
                operatingFields.forEach(field => field.style.display = 'none');
                nonOperatingFields.forEach(field => field.style.display = 'block');
            }
        }

        window.onload = function () {
            // Sembunyikan semua form tambahan saat halaman dimuat
            const operatingFields = document.querySelectorAll('.operating-field');
            const nonOperatingFields = document.querySelectorAll('.non-operating-field');
            operatingFields.forEach(field => field.style.display = 'none');
            nonOperatingFields.forEach(field => field.style.display = 'none');
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
                        <div class="non-operating-field">
                            <label for="namaUsaha" class="col-sm-2 col-form-label">Nama Usaha</label>
                            <div class="col-sm-9 mb-3">
                                <input type="text" class="form-control" id="namaUsaha" name="namaUsaha"
                                    value="<?= set_value('namaUsaha') ?>">
                                <?= form_error('namaUsaha', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <!-- Beroperasi -->
                        <div class="operating-field">
                            <label for="noSurat" class="col-sm-2 col-form-label">SK dari RT</label>
                            <div class="col-sm-9 mb-3">
                                <input type="text" class="form-control" id="noSurat" name="noSurat"
                                    value="<?= set_value('noSurat') ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <div class="operating-field">
                            <label for="tang_surat" class="col-sm-2 col-form-label">Tanggal Surat</label>
                            <div class="col-sm-9 mb-3">
                                <input type="date" class="form-control" id="tang_surat" name="tang_surat"
                                    value="<?= set_value('tang_surat') ?>">
                                <?= form_error('tang_surat', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>

                        <div class="operating-field">
                            <label for="j_usaha" class="col-sm-2 col-form-label">Jenis Usaha</label>
                            <div class="col-sm-9 mb-3">
                                <input type="text" class="form-control" id="j_usaha" name="j_usaha"
                                    value="<?= set_value('j_usaha') ?>">
                                <?= form_error('j_usaha', '<small class="text-danger pl-3">', '</small>') ?>
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