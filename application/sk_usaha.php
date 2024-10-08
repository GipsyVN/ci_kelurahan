<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Usaha</title>
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #ccc;
        }

        .rangkasurat {
            width: 19.05cm !important;
            margin: 0 auto !important;
            background-color: #fff;
            height: 30.46cm !important;
            padding-top: 1.54cm !important;
            padding-left: 2.54cm !important;
            padding-right: 2.54cm !important;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            border: 1px solid #ddd;
            max-width: 600px;
            margin: 50px auto;
        }

        .title {
            font-size: 16px;
            color: #333;
        }

        .print-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }

        .print-button:hover {
            background-color: #0056b3;
        }

        .table-kop {
            border-bottom: 5px solid #000;
            padding: 2px;
        }

        .tengah {
            text-align: center;
            line-height: 5px;
        }

        .no_spasi {
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #f8f8f8;
            border-color: #e7e7e7;
            padding: 10px 20px;
            width: 100%;
            box-sizing: border-box;
        }

        .container1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .navbar-brand {
            display: inline-block;
            padding-top: 0.3125rem;
            padding-bottom: 0.3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            line-height: inherit;
            white-space: nowrap;
            color: #777;
        }

        .navbar-brand:hover,
        .navbar-brand:focus {
            text-decoration: none;
            color: #5e5e5e;
        }

        .navbar-btn {
            margin-top: 8px;
            margin-bottom: 8px;
        }

        .navbar-right {
            float: right !important;
            margin-right: -15px;
        }

        .navbar-right~.navbar-right {
            margin-right: 0;
        }

        .btn-primary {
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #2e59d9;
            border-color: #2653d4
        }

        .btn-primary.focus,
        .btn-primary:focus {
            color: #fff;
            background-color: #2e59d9;
            border-color: #2653d4;
            box-shadow: 0 0 0 .2rem rgba(105, 136, 228, .5)
        }

        .btn-primary.disabled,
        .btn-primary:disabled {
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df
        }

        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #2653d4;
            border-color: #244ec9
        }

        .btn-primary:not(:disabled):not(.disabled).active:focus,
        .btn-primary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(105, 136, 228, .5)
        }

        .table-ket {
            border-collapse: collapse;
            width: 100%;
            border-bottom: none;
        }

        .table-ket td {
            border: none;
        }

        .right-align {
            text-align: right;
        }

        .bold-underline {
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container1">
            <p class="navbar-brand">Kartu Ujian Mahasiswa</p>
            <button type="button" class="btn btn-primary" onclick="window.print(); return false;"><i
                    class="fa fa-print"></i> Cetak</button>
        </div>
    </nav>
    <br>
    <div class="rangkasurat">
        <table class="table-kop" width="100%">
            <tr>
                <td><img src="<?= base_url('/assets/img/logo.png') ?>" width="100px"></td>
                <td class="tengah">
                    <h2>PEMERINTAH KABUPATEN LAMANDAU</h2>
                    <h2>KECAMATAN BULIK</h2>
                    <h2>KELURAHAN NANGA BULIK</h2>
                    <p>Jl.Batu Batanggui Nomor 052 RT.004C Kelurahan Nanga Bulik Kecamatan Bulik</p>
                    <p>Kabupaten Lamandau Kode Pos : 74662</p>
                </td>
            </tr>
        </table>
        <p class="no_spasi"
            style="text-decoration: underline; text-align: center; font-weight: bold; padding-top :25px; ">SURAT
            KETERANGAN USAHA</p>
        <p class="no_spasi" style="text-align: center;">Nomor: <?= $no_surat ?></p>
        <p style="text-align: justify;">Yang bertandatangan dibawah ini Lurah Nanga Bulik Kecamatan Bulik Kabupaten
            Lamandau dengan ini menerangkan bahwa:
        <p>

        <table class="table-ket">
            <tr>
                <td style="width: 250px;">Nama</td>
                <td style="width: 10px;">:</td>
                <td style="width: auto;"><?= $nama ?></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><?= $nik ?></td>
            </tr>
            <tr>
                <td>Tempat dan Tanggal Lahir</td>
                <td>:</td>
                <td><?= $tempat_lahir . ", " . $tanggal_lahir ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?= $jenis_kelamin ?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?= $pekerjaan ?></td>
            </tr>
            <tr>
                <td>Alamat Tempat Tinggal</td>
                <td>:</td>
                <td><?= $alamat_tempat_tinggal ?></td>
            </tr>
            <tr>
                <td>Alamat Tempat Usaha</td>
                <td>:</td>
                <td><?= $alamat_usaha ?></td>
            </tr>
        </table>
        <p style="text-align: justify;">Berdasarkan surat keterangan dari RT <?= $no_rt . ", " . $tanggal_surat ?> yang
            menerangkan bahwa nama
            tersebut diatas benar mempunyai Usaha <?= $jenis_usaha ?> dengan alamat tempat usaha seperti tercantum
            diatas.</p>
        <p style="text-align: justify;">Demikian Surat Keterangan ini dibuat untuk dapat dipergunakan sebagaimana
            mestinya.</p>

        <br><br>
        <table class="table-ket right-align">
            <tr>
                <td></td>
                <td>Nanga Bulik, <?= format_tanggal() ?></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Lurah Nanga Bulik</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><br><br><br></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td class="bold-underline">[Input Nama Lurah]</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>NIP. [Input NIP Lurah]</td>
                <td></td>
            </tr>
        </table>

    </div>

</body>

</html>