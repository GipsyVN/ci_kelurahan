<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Usaha</title>
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

        table {
            border-bottom: 5px solid #000;
            padding: 2px;
        }

        .tengah {
            text-align: center;
            line-height: 5px;
        }

        .no-spacing {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <div class="rangkasurat">
        <table width="100%">
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
        <p class="no-spacing"
            style="text-decoration: underline; text-align: center;font-weight: bold; padding-top: 25px;">SURAT
            KETERANGAN USAHA</p>
        <p class="no-spacing" style="text-align: center;">Nomor: <?= $no_surat ?></p>
        <p style="text-align: justify;">Yang bertandatangan dibawah ini Lurah Nanga Bulik Kecamatan Bulik Kabupaten
            Lamandau dengan ini menerangkan bahwa:
        <p>

        <table style="border-collapse: collapse; width: 100%;border-bottom:none;">
            <tr>
                <td style="border: none; width: 250px;">Nama</td>
                <td style="border: none;">:</td>
                <td style="border: none;"><?= $nama; ?></td>
            </tr>
            <tr>
                <td style="border: none;">NIK</td>
                <td style="border: none;">:</td>
                <td style="border: none;"><?= $nik ?></td>
            </tr>
            <tr>
                <td style="border: none;">Tempat dan Tanggal Lahir</td>
                <td style="border: none;">:</td>
                <td style="border: none;"><?= $tempat_lahir . ", " . $tanggal_lahir ?></td>
            </tr>
            <tr>
                <td style="border: none;">Jenis Kelamin</td>
                <td style="border: none;">:</td>
                <td style="border: none;"><?= $jenis_kelamin ?></td>
            </tr>
            <tr>
                <td style="border: none;">Pekerjaan</td>
                <td style="border: none;">:</td>
                <td style="border: none;"><?= $pekerjaan ?></td>
            </tr>
            <tr>
                <td style="border: none;">Alamat Tempat Tinggal</td>
                <td style="border: none;">:</td>
                <td style="border: none;"><?= $alamat_tempat_tinggal ?></td>
            </tr>
            <tr>
                <td style="border: none;">Alamat Tempat Usaha</td>
                <td style="border: none;">:</td>
                <td style="border: none;"><?= $alamat_usaha ?></td>
            </tr>
        </table>
        <p style="   text-align: justify;">
            <?= "Berdasarkan surat keterangan dari RT. " . $no_surat_rt . " tanggal " . $tanggal_surat . " yang menerangkan bahwa nama tersebut diatas benar mempunyai Usaha " . $jenis_usaha . " dengan alamat tempat usaha seperti tercantum diatas." ?>
        </p>
        <p>Demikian Surat Keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>

        <br><br>
        <table style="border-collapse: collapse; width: 100%;border-bottom:none; text-align: right;">
            <tr>
                <td style="border: none;"></td>
                <td style="border: none;"><?= "Nanga Bulik, " . format_tanggal(); ?></td>
                <td style="border: none;"></td>
            </tr>

            <tr>
                <td style="border: none;"></td>
                <td style="border: none;">Lurah Nanga Bulik</td>
                <td style="border: none;"></td>
            </tr>

            <tr>
                <td style="border: none;"></td>
                <td style="border: none;"><br><br><br></td>
                <td style="border: none;"></td>
            </tr>

            <tr>
                <td style="border: none;"></td>
                <td style="border: none;font-weight: bold;text-decoration: underline;">[Input Nama Lurah]</td>
                <td style="border: none;"></td>
            </tr>

            <tr>
                <td style="border: none;"></td>
                <td style="border: none;">NIP. [Input NIP Lurah]</td>
                <td style="border: none;"></td>
            </tr>
        </table>

    </div>

</body>

</html>