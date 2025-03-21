<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Tidak Mempunyai Rumah</title>
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
            width: 100%;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .navbar-brand {
            display: inline-block;
            font-size: 1.25rem;
            line-height: inherit;
            white-space: nowrap;
            color: #777;
        }

        .btn-primary {
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df
        }

        .table-ket {
            border-collapse: collapse;
            width: 100%;
            border-bottom: none;
        }

        .table-ket td {
            border: none;
            overflow-wrap: break-word;
            white-space: pre-wrap;
            vertical-align: top;
        }

        .right-align {
            text-align: right;
        }

        .bold-underline {
            font-weight: bold;
            text-decoration: underline;
        }

        .tablepem {
            border-collapse: collapse;
            width: 100%;
            border-bottom: none;
            table-layout: fixed;
        }

        @media print {
            @page {
                size: A4 portrait landscape;
            }

            #navbar {
                display: none;
            }
        }
    </style>
</head>

<body>
    <nav id="navbar" class="navbar">
        <div class="container">
            <p class="navbar-brand">Surat Keterangan Tidak Mempunyai Rumah</p>
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
                    <p>Jl. Batu Batanggui Nomor 052 RT.004C Kelurahan Nanga Bulik Kecamatan Bulik</p>
                    <p>Kabupaten Lamandau Kode Pos : 74662</p>
                </td>
            </tr>
        </table>
        <p class="no_spasi"
            style="text-decoration: underline; text-align: center; font-weight: bold; padding-top :25px; font-size: 18px">
            SURAT KETERANGAN TIDAK MEMPUNYAI RUMAH</p>
        <p class="no_spasi" style="text-align: center; font-size: 18px;">Nomor: <?= $no_surat ?></p>
        <p style="text-align: justify; font-size: 18px;">Yang bertanda tangan dibawah ini Lurah Nanga Bulik Kecamatan
            Bulik Kabupaten Lamandau dengan ini menerangkan bahwa: </p>
        <div class="tablepem">

            <table class="table-ket" style="font-size: 18px;">
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
                    <td style="max-width: 0;"><?= $alamat_tempat_tinggal ?></td>
                </tr>
            </table>
        </div>
        <p style="text-align: justify; font-size: 18px;"> Berdasarkan surat keterangan dari Ketua RT. <?= $no_rt ?>
            Tanggal <?= $tanggal_surat ?> yang menerangkan bahwa nama
            tersebut diatas sampai saat ini <b><i>belum memiliki rumah atau tempat tinggal sendiri.</i></b>
        </p>
        <p style="text-align: justify; font-size: 18px;">Demikian Surat Keterangan ini dibuat untuk dapat
            dipergunakan
            sebagaimana
            mestinya.</p>

        <br><br>
        <table class="table-ket right-align" style="font-size: 18px;">
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
                <td><br><br><br><br></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td class="bold-underline"><?= $lurah ?></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>NIP. <?= $nip ?></td>
                <td></td>
            </tr>
        </table>

    </div>

</body>

</html>