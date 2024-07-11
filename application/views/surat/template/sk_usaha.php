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

        table {
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

        .navbar-brand {
            display: inline-block;
            padding-top: 0.3125rem;
            padding-bottom: 0.3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            line-height: inherit;
            white-space: nowrap;
        }

        .navbar-brand:hover,
        .navbar-brand:focus {
            text-decoration: none;
        }

        .navbar-btn {
            margin-top: 8px;
            margin-bottom: 8px
        }

        .btn-group-sm>.navbar-btn.btn,
        .navbar-btn.btn-sm {
            margin-top: 10px;
            margin-bottom: 10px
        }

        .btn-group-xs>.navbar-btn.btn,
        .navbar-btn.btn-xs {
            margin-top: 14px;
            margin-bottom: 14px
        }

        .navbar-right {
            float: right !important;
            margin-right: -15px
        }

        .navbar-right~.navbar-right {
            margin-right: 0
        }

        .navbar-default {
            background-color: #f8f8f8;
            border-color: #e7e7e7
        }

        .navbar-default .navbar-brand {
            color: #777
        }

        .navbar-default .navbar-brand:focus,
        .navbar-default .navbar-brand:hover {
            color: #5e5e5e;
            background-color: transparent
        }

        .navbar-default .navbar-nav>li>a,
        .navbar-default .navbar-text {
            color: #777
        }

        .navbar-default .navbar-nav>li>a:focus,
        .navbar-default .navbar-nav>li>a:hover {
            color: #333;
            background-color: transparent
        }

        .navbar-default .navbar-nav>.active>a,
        .navbar-default .navbar-nav>.active>a:focus,
        .navbar-default .navbar-nav>.active>a:hover {
            color: #555;
            background-color: #e7e7e7
        }

        .navbar-default .navbar-nav>.disabled>a,
        .navbar-default .navbar-nav>.disabled>a:focus,
        .navbar-default .navbar-nav>.disabled>a:hover {
            color: #ccc;
            background-color: transparent
        }

        .navbar-default .navbar-toggle {
            border-color: #ddd
        }

        .navbar-default .navbar-toggle:focus,
        .navbar-default .navbar-toggle:hover {
            background-color: #ddd
        }

        .navbar-default .navbar-toggle .icon-bar {
            background-color: #888
        }

        .navbar-default .navbar-collapse,
        .navbar-default .navbar-form {
            border-color: #e7e7e7
        }

        .navbar-default .navbar-nav>.open>a,
        .navbar-default .navbar-nav>.open>a:focus,
        .navbar-default .navbar-nav>.open>a:hover {
            background-color: #e7e7e7;
            color: #555
        }

        @media (max-width:767px) {
            .navbar-default .navbar-nav .open .dropdown-menu>li>a {
                color: #777
            }

            .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,
            .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
                color: #333;
                background-color: transparent
            }

            .navbar-default .navbar-nav .open .dropdown-menu>.active>a,
            .navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,
            .navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover {
                color: #555;
                background-color: #e7e7e7
            }

            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,
            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,
            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover {
                color: #ccc;
                background-color: transparent
            }
        }

        .navbar-default .navbar-link {
            color: #777
        }

        .navbar-default .navbar-link:hover {
            color: #333
        }

        .navbar-default .btn-link {
            color: #777
        }

        .navbar-default .btn-link:focus,
        .navbar-default .btn-link:hover {
            color: #333
        }

        .navbar-default .btn-link[disabled]:focus,
        .navbar-default .btn-link[disabled]:hover,
        fieldset[disabled] .navbar-default .btn-link:focus,
        fieldset[disabled] .navbar-default
    </style>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <p class="navbar-brand">Kartu Ujian Mahasiswa</p>
            <button type="button" class="btn btn-primary btn-flat navbar-btn navbar-right"
                onclick="window.print(); return false;"><i class="fa fa-print"></i> Cetak</button>
        </div>
    </nav>
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
        <p class="no_spasi"
            style="text-decoration: underline; text-align: center; font-weight: bold; padding-top :25px; ">SURAT
            KETERANGAN USAHA</p>
        <p class="no_spasi" style="text-align: center;">Nomor: </p>
        <p style="text-align: justify;">Yang bertandatangan dibawah ini Lurah Nanga Bulik Kecamatan Bulik Kabupaten
            Lamandau dengan ini menerangkan bahwa:
        <p>

        <table style="border-collapse: collapse; width: 100%;border-bottom:none;">
            <tr>
                <td style="border: none;">Nama</td>
                <td style="border: none;">:</td>
                <td style="border: none;">[Input nama]</td>
            </tr>
            <tr>
                <td style="border: none;">NIK</td>
                <td style="border: none;">:</td>
                <td style="border: none;">[Input nik]</td>
            </tr>
            <tr>
                <td style="border: none;">Tempat dan Tanggal Lahir</td>
                <td style="border: none;">:</td>
                <td style="border: none;">[Input Tempat,Tanggal-Bulan-Tahun]</td>
            </tr>
            <tr>
                <td style="border: none;">Jenis Kelamin</td>
                <td style="border: none;">:</td>
                <td style="border: none;">[Input Jenis Kelamin]</td>
            </tr>
            <tr>
                <td style="border: none;">Pekerjaan</td>
                <td style="border: none;">:</td>
                <td style="border: none;">[Input Pekerjaan]</td>
            </tr>
            <tr>
                <td style="border: none;">Alamat Tempat Tinggal</td>
                <td style="border: none;">:</td>
                <td style="border: none;">[Input Alamat Tempat Tinggal]</td>
            </tr>
            <tr>
                <td style="border: none;">Alamat Tempat Usaha</td>
                <td style="border: none;">:</td>
                <td style="border: none;">[InputAlamat Tempat Usaha]</td>
            </tr>
        </table>
        <p style="   text-align: justify;">Berdasarkan surat keterangan dari [Input Ketua RT] [Input
            Tanggal-Bulan-Tahun] yang menerangkan bahwa nama tersebut diatas benar mempunyai Usaha[Input Jenis Usaha]
            dengan alamat tempat usaha seperti tercantum diatas.</p>
        <p>Demikian Surat Keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>

        <br><br>
        <table style="border-collapse: collapse; width: 100%;border-bottom:none; text-align: right;">
            <tr>
                <td style="border: none;"></td>
                <td style="border: none;">Nanga Bulik,[Tanggal-Bulan-Tahun]</td>
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