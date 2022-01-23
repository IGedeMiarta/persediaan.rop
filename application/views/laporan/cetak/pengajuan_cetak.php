
    <center>
        <br><br>
        <font size="4" face="times new roman"><b>LAPORAN PENGAJUAN BARANG<br><br></b></font>
    </center>

    <table cellspacing="0">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal Diajuakn</th>
                <th scope="col">ID Barang</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga Satuan</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Supplier</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($status as $b) { ?>
                <tr>
                    <th width="10px"><?= $no++ ?></th>
                    <td><?= date("d M Y", strtotime($b->tgl_diajukan)) ?></td>
                    <td><?= $b->kode ?></td>
                    <td><?= $b->nama_barang ?></td>
                    <td><?= $b->harga ?></td>
                    <td><?= $b->jumlah . ' ' . $b->satuan ?></td>
                    <td><?= $b->nama_supp ?></td>
                    <td><?= $b->status ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
