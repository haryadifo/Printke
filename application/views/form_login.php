<body background="<?= base_url() ?>assets/img/login.jpg" style="background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg mt-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
                                    </div>
                                    <form method="post" action="<?= base_url('auth/login') ?>" class="user">
                                        <?= $this->session->flashdata('pesan'); ?>
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username">
                                            <?= form_error('username', '<div class="text-danger small mt-2 ml-2">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="user_password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password">
                                            <?= form_error('user_password', '<div class="text-danger small mt-2 ml-2">', '</div>'); ?>
                                        </div>

                                        <button type="submit" class="btn btn-dark form-control">Masuk</button>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('registrasi/index')?>">Registrasi Akun</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>
</html>