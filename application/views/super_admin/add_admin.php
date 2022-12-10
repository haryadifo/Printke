<div class="container-fluid">
<h2 class="mt-4 mb-3">Tambah Akun</h2>
    <form action="<?= base_url() . 'super_admin/manage_account/add_admin' ?>" id="invoice_form" method="post">
            <div class="form-group">
                <label>Nama Lengkap <i class="text-danger">*</i></label>
                <input type="text" id="user_nama" name="user_nama" class="form-control" maxlength="50" placeholder="Masukkan Nama Lengkap" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email <i class="text-danger">*</i></label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan Username" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password <i class="text-danger">*</i></label>
                <input type="password" id="user_password" name="user_password" class="form-control" maxlength="50" placeholder="Masukkan Password" autocomplete="off">
                <input type="hidden" id="user_role_id" name="user_role_id" value="2" class="form-control" maxlength="35" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Role <i class="text-danger">*</i></label>
                <select name="user_role_id" id="role" class="custom-select">
                    <option value="2">Admin</option>
                    <option value="3">User</option>
                </select>
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div id="loadItemTableTemp"></div>
                </div>
            </div>
            <hr class="colorgraph">
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary font-weight-bold" id="btnCreateInvoice"><i class="fas fa-plus"></i> Add</button>
                    <a href="<?= base_url('super_admin/manage_account/index');?>" class="btn btn-danger font-weight-bold float-right" id="btnCancel"><i class="fas fa-times"></i> Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>