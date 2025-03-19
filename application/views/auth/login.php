<div class="container">

    <!-- Outer Row -->
    <div class="container h-100 d-flex align-items-center justify-content-center">

        <div class="col-lg-8">
            <div class="card o-hidden border-0 shadow-lg">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!-- Bagian Gambar -->
                        <div class="col-lg-5 d-flex align-items-center justify-content-center bg-light">
                            <img src="<?= base_url('/assets/img/logo.png') ?>" class="img-fluid p-4" alt="Logo">
                        </div>
                        <!-- Bagian Form Login -->
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
                                </div>
                                <?= $this->session->flashdata('message') ?>
                                <form class="user" method="post" action="<?= base_url('auth') ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="email"
                                            id="email" placeholder="Masukan Alamat Email..."
                                            value="<?= set_value('email') ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password"
                                            name="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <style>
        body,
        html {
            height: 100%;
        }

        .container {
            min-height: 100vh;
        }
    </style>


</div>