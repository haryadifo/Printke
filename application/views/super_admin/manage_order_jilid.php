<div class="container-fluid">
  <h2 class="mt-4 mb-3">Kelola Orderan Jilid</h2>
  <a href="<?= base_url().'super_admin/add_order_jilid' ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tambah Orderan Jilid</a>

    <table class="table table-bordered mt-4">
        <tr align="center">
            <th>No</th>
            <th>Ukuran Kertas</th>
            <th>Warna Kertas</th>
            <th>Jumlah</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>File</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no=1;
        foreach ($order_jilid as $jld) : ?>

        <tr align="center">
            <td><?= $no++ ?></td>
            <td><?= $jld->ukuran_kertas ?></td>
            <td><?= $jld->warna_kamb ?></td>
            <td><?= $jld->juml_rangkap ?></td>
            <td><?= $jld->no_telp ?></td>
            <td><?= $jld->alamat ?></td>
            <td><img src="<?= base_url().'uploads/'.$jld->file_jilid ?>"></td>
            <td><?= $jld->total_belanja ?></td>
            <td>
                <?php echo anchor('super_admin/order_jilid/hapus_order_jilid/' . $jld->id_order_jilid, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>'); ?>
            </td>
        </tr>

        <?php endforeach; ?>
            
    </table>
</div>
