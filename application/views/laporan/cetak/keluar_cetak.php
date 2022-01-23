
    <center>
        <br><br>
        <font size="4" face="times new roman"><b>LAPORAN BARANG KELUAR<br><br></b></font>
    </center>

    <table cellspacing="0">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">No. Transaksi</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Pegawai</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($keluar as $b) { ?>
                <tr>
                    <th width="10px" scope="row"><?= $no++ ?></th>
                    <td><?= $b->kode ?></td>
                    <td><?= date("d M Y", strtotime($b->waktu)) ?></td>
                    <td><?= $b->nama_barang ?></td>
                    <td><?= $b->jumlah . ' ' . $b->satuan ?></td>
                    <td><?= $b->pegawai ?></td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
   