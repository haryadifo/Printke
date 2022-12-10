<div class="container-fluid">
    <h1 class="mt-4 mb-3">
        <small>Edit Admin</small>
    </h1>
    <hr>

    <?php foreach ($manage_account as $acc) : ?>
        <?php //php mengubah role id angka menjadi string 2 = admin, 1 = owner;
            if ($acc->user_role_id == 1) {
                $acc->user_role_id = "Super Admin";
            } 
            else if ($acc->user_role_id == 2) {
                $acc->user_role_id = "Admin";
            } else {
                $acc->user_role_id = "User";
            }
        ?>
        <form action="<?= base_url() . 'admin/manage_account/update_account' ?>" method="post">
            <div class="form-group">
                <label>Nama Lengkap <i class="text-danger">*</i></label>
                <input type="hidden" id="id_user" name="id_user" readonly value="<?= $acc->id_user ?>" class="form-control">
                <input type="text" id="user_nama" name="user_nama" value="<?= $acc->user_nama ?>" class="form-control" maxlength="35" placeholder="Masukkan nama lengkap" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Username <i class="text-danger">*</i></label>
                <input type="text" id="username" name="username" value="<?= $acc->username ?>" class="form-control" maxlength="35" placeholder="Masukkan username" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password <i class="text-danger">*</i></label>
                <input type="password" id="user_password" name="user_password" value="<?= $acc->user_password ?>" class="form-control" maxlength="35" placeholder="Masukkan password" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Role<i class="text-danger">*</i></label>
                <input type="text" id="user_role_id" name="user_role_id" readonly value="<?= $acc->user_role_id ?>" class="form-control">
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div id="loadItemTableTemp"></div>
                </div>
            </div>
            <hr class="colorgraph">
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary font-weight-bold" id="btnCreateInvoice"><i class="fas fa-save"></i> Save</button>
                    <a href="<?= base_url('admin/manage_account') ?>" class="btn btn-danger font-weight-bold float-right" id="btnCancel"><i class="fas fa-times"></i> Cancel</a>

                </div>
            </div>
        </form>
    <?php endforeach; ?>
</div>
<!-- /.container -->