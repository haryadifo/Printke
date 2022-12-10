<body background="<?= base_url() ?>assets/img/login.jpg" style="background-repeat: no-repeat; background-size: cover;">

    <div class="container">

        <div class="card o-hidden border-0 col-lg-7 shadow-lg my-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registrasi Akun</h1>
                            </div>
                            <form method="post" action="<?= base_url('registrasi/index')?>" class="user">
                                <div class="form-group">
                                    <input type="text" name="user_nama" class="form-control form-control-user" id="exampleInputEmail" placeholder="Masukkan Nama Anda">
                                    <?= form_error('user_nama','<div class="text-danger small ml-2">','</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="username" class="form-control form-control-user" id="exampleInputEmail" placeholder="Masukkan Email">
                                    <?= form_error('username','<div class="text-danger small ml-2">','</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="user_password" class="form-control form-control-user" id="exampleInputEmail" placeholder="Masukkan Password">
                                    <input type="hidden" name="user_role_id" class="form-control form-control-user" >
                                    <?= form_error('user_password','<div class="text-danger small ml-2">','</div>') ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                   Buat Akun
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth/login')?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>