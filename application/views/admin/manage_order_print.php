<div class="container-fluid">
  <h2 class="mt-4 mb-3">Kelola Orderan Print</h2>
  <a href="<?= base_url().'admin/add_order_print' ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tambah Orderan Print</a>

    <table class="table table-bordered mt-4">
        <tr align="center">
            <th>No</th>
            <th>File</th>
            <th>Jumlah</th>
            <th>Berat Kertas</th>
            <th>Ukuran Kertas</th>
            <th>Jenis Tinta</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no=1;
        foreach ($order_print as $prt) : ?>

        <tr align="center">
            <td><?= $no++ ?></td>
            <td><img src="<?= base_url().'uploads/'.$prt->file_print ?>"></td>
            <td><?= $prt->jml_rangkap ?></td>
            <td><?= $prt->berat_kertas ?></td>
            <td><?= $prt->ukuran_kertas ?></td>
            <td><?= $prt->jenis_tinta ?></td>
            <td><?= $prt->no_telp ?></td>
            <td><?= $prt->alamat ?></td>
            <td><?= $prt->total_belanja ?></td>
            <td>
                <?php echo anchor('admin/order_print/hapus_order_print/' . $prt->id_order_print, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>'); ?>
            </td>
        </tr>

        <?php endforeach; ?>
            
    </table>
</div>