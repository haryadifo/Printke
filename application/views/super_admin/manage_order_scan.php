<div class="container-fluid">
  <h2 class="mt-4 mb-3">Kelola Orderan Scan</h2>
  <a href="<?= base_url().'super_admin/add_order_scan' ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tambah Orderan Scan</a>

    <table class="table table-bordered mt-4">
        <tr align="center">
            <th>No</th>
            <th>File</th>
            <th>Jumlah</th>
            <th>Berat Kertas</th>
            <th>Ukuran Kertas</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no=1;
        foreach ($order_scan as $scn) : ?>

        <tr align="center">
            <td><?= $no++ ?></td>
            <td><img src="<?= base_url().'uploads/'.$scn->file_scan ?>"></td>
            <td><?= $scn->jml_scan ?></td>
            <td><?= $scn->berat_scan ?></td>
            <td><?= $scn->ukuran_scan ?></td>
            <td><?= $scn->no_telpon ?></td>
            <td><?= $scn->alamat ?></td>
            <td><?= $scn->total_belanja ?></td>
            <td>
                <?php echo anchor('super_admin/order_scan/hapus_order_scan/' . $scn->id_order_scan, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>'); ?>
            </td>
        </tr>

        <?php endforeach; ?>
            
    </table>
</div>