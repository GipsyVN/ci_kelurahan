<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- Buat Konten Disini -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Kelurahan</title>
        <style>
            body {
                margin: 0;
                padding: 0;
            }

            .header {
                background-color: #333;
                color: #fff;
                padding: 10px;
                text-align: center;
            }

            .menu {
                background-color: #f1f1f1;
                overflow: hidden;

            }

            .menu a {
                float: left;
                display: block;
                color: #333;
                text-align: center;
                padding: 14px 20px;
                text-decoration: none;
                font-size: 17px;
            }

            .menu a:hover {
                background-color: #ddd;
            }

            .content {
                padding: 20px;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <div class="header">
            <table class="table-kop" width="100%">
                <tr>
                    <td><img src="<?= base_url('/assets/img/logo.png') ?>" width="100px"></td>
                    <td class="tengah">
                        <h2>Kelurahan Nanga Bulik</h2>
                    </td>
                </tr>
            </table>
        </div>
        <div class="content">
            <h2>Selamat datang di Dashboard Kelurahan</h2>
            <p>Ini adalah halaman utama untuk melihat dan mengelola informasi terkait dengan kelurahan.</p>
            <p>Anda dapat menggunakan menu di atas untuk mengakses berbagai fitur yang tersedia.</p>
        </div>
    </body>

    </html>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->