    <div class="container mt-4">
        <h3 class="display-5">Daftar Produk</h3>
        <table class="table table-hover table-dark table-stripped-columns">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Jenis</th>
                <th>Berat</th>
                <th>Varian</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1;
            foreach ($data['prd'] as $prd) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $prd['nama'] ?></td>
                <td><?= $prd['jenis'] ?></td>
                <td><?= $prd['berat'] ?></td>
                <td><?= $prd['varian'] ?></td>
                <td>Rp. <?= $prd['harga'] ?></td>
            </tr>
            <?php $i++;
            endforeach; ?>
        </table>
    </div>