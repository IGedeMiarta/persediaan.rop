
        <center>
        <br><br>
        <font size="4" face="times new roman"><b>LAPORAN BARANG MASUK<br><br></b></font>
    </center>

    <table cellspacing="0">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">No. Transaksi</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Supplier</th>
                <th scope="col">Jumlah Masuk</th>
                <th scope="col">Harga (st)</th>
                <th scope="col">Pegawai</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $total = 0;
            foreach ($masuk as $b) { ?>
                <tr>
                    <th width="10px" scope="row"><?= $no++ ?></th>
                    <td><?= $b->kode ?></td>
                    <td><?= date("d M Y", strtotime($b->waktu)) ?></td>
                    <td><?= $b->nama_barang ?></td>
                    <td><?= $b->supplier ?></td>
                    <td><?= $b->jumlah . ' ' . $b->satuan ?></td>
                    <td><?= $b->harga ?></td>
                    <td><?= $b->pegawai ?></td>
                </tr>
                <?php $total += $b->harga;?>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="6" class="text-end">Total</th>
                <th><?= $total ?></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
    