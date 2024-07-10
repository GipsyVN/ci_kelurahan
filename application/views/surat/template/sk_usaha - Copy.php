<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Usaha</title>
    <style type="text/css">
        @page {
            size: F4 portrait;
        }

        body {
            font-family: 'Times New Roman';
            font-size: 13.5px;
            background-color: #ffffff;
            width: 21.59cm;
            height: 33cm;
            margin-top: 2.54cm;
            margin-bottom: 2.54cm;
            margin-left: 2.54cm;
            margin-right: 2.54cm;
        }

        .kopsurat {
            outline: none;
            background-color: #ffffff;
            height: 28px;
            padding: 2px;
        }

        table {
            border-bottom: 6px solid #000000;
            padding-top: 3px;
            width: auto;
        }

        .tengah {
            text-align: center;
            line-height: 7px;
            padding-right: 70px;
            margin-left: 50px
        }

        .logo {
            padding-left: 70px;
            margin-right: 50px;
        }

        .title {
            font-size: 24.5px;
            font-weight: bold;
        }

        .title2 {
            font-size: 27px;
            font-weight: bold;
        }

        .title3 {
            font-size: 16.5px;
        }

        h2 {
            font-weight: normal;
        }

        .header {
            text-align: center;
        }

        .container {
            font-family: 'Times New Roman';
            font-size: 13.5px;
            background-color: #ffffff;
            width: auto;
            text-align: justify;

        }

        .content {
            font-family: 'Times New Roman';
            font-size: 13.5px;
            background-color: #ffffff;
            width: auto;

        }

        .penutup {
            font-family: 'Times New Roman';
            font-size: 13.5px;
            text-align: justify;
            background-color: #ffffff;
            width: 21.59cm;
            height: 33cm;
            margin-left: 3cm;
            margin-right: 2.8544cm;
        }

        .tt {
            font-size: 20px;
            font-family: 'Times New Roman', Times, ;
        }

        .tt table {
            text-align: right;
        }

        @media print {
            #printButton {
                display: none;
            }
        }
    </style>
</head class="kopsurat">

<body>
    <div>
        <table>
            <tr>
                <td class="logo">
                    <img src="<?= base_url('assets/img/logo.png') ?>" width=95px>
                </td>
                <td class="tengah">
                    <h2 class="title">PEMERINTAH KABUPATEN LAMANDAU</h2>
                    <h2 class="title2">KECAMATAN BULIK</h2>
                    <h2 class="title2">KELURAHAN NANGA BULIK</h2>
                    <h2 class="title3">Jl.Batu Batanggui RT.004C Nomor : 052</h2>
                    <h2 class="title3">Email: kelurahankantor664@gmail.com Kode Pos : 74662</h2>
                    <h2></h2>
                </td>
            </tr>
        </table>
    </div>
    <div class="container">
        <div class="header">
            <h2 style="text-decoration: underline;">SURAT KETERANGAN USAHA</h2>
            <h2>Nomor: <?= $no_surat; ?></h2>
        </div>
        <div class="content">
            <h2>Yang bertandatangan dibawah ini Lurah Nanga Bulik Kecamatan Bulik Kabupaten Lamandau dengan ini
                menerangkan bahwa:<h2>
                    <table style="border-collapse: collapse; width: 100%;border-bottom:none;">
                        <tr>
                            <td style="border: none;">Nama</td>
                            <td style="border: none;">:</td>
                            <td style="border: none;"><?= $nama; ?></td>
                        </tr>
                        <tr>
                            <td style="border: none;">NIK</td>
                            <td style="border: none;">:</td>
                            <td style="border: none;"><?= $nik; ?></td>
                        </tr>
                        <tr>
                            <td style="border: none;">Tempat dan Tanggal Lahir</td>
                            <td style="border: none;">:</td>
                            <td style="border: none;"><?= $tempat_lahir . ', ' . $tanggal_lahir; ?></td>
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
        </div class="penutup">
        <h2><?= "Berdasarkan surat keterangan dari " . $no_surat_rt . " Tanggal " . $tanggal_surat . " yang menerangkan bahwa nama
            tersebut diatas benar mempunyai Usaha " . $jenis_usaha . " dengan alamat tempat usaha seperti tercantum
            diatas." ?></h2>
        <h2>Demikian Surat Keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</h2>
    </div>
    <div class="tt">
        <br><br>
        <table style="border-collapse: collapse; width: 100%;border-bottom:none;">
            <tr>
                <td style="border: none;"></td>
                <td style="border: none;">Nanga Bulik, <?= format_tanggal() ?></td>
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
    </div>
    </div>
</body>

</html>