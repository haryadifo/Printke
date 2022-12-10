<div class="container-fluid">
    <h2 class="mt-4 mb-3">Bukti Pembayaran</h2>
        <table class="table table-bordered mt-4">
        <tr align="center">
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Bukti Pembayaran</th>
        </tr>

        <?php
        $no=1;
        foreach ($bukti_pembayaran as $byr) : ?>

        <tr align="center">
            <td><?= $no++ ?></td>
            <td><?= $byr->nama_pelanggan ?></td>
            <td><img src="<?= base_url().'uploads/'.$byr->foto_bukti ?>"></td>
        </tr>

        <?php endforeach; ?>
            
    </table>
</div>