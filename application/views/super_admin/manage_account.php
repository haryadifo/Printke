<div class="container-fluid">
    <h2 class="mt-4 mb-3">Kelola Akun</h2>
    <a href="<?= base_url().'super_admin/add_admin' ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tambah Akun</a>

    <table class="table table-bordered mt-4">
        <tr align="center">
            <th>No</th>
            <th>Nama User</th>
            <th>Username</th>
            <th>Role</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        $no=1;
        foreach ($manage_account as $acc) : ?>
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
        <tr align="center">
            <td><?= $no++ ?></td>
            <td><?= $acc->user_nama ?></td>
            <td><?= $acc->username ?></td>
            <td><?= $acc->user_role_id ?></td>
            <td>
            <?php echo anchor('super_admin/manage_account/edit_account/' . $acc->id_user, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>'); ?>
            </td>
            <td>
                <?php echo anchor('super_admin/manage_account/hapus_admin/' . $acc->id_user, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>'); ?>
            </td>
        </tr>

        <?php endforeach; ?>
            
    </table>
</div>