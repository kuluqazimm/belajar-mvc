<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['atl']['nama'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['atl']['umur'] ?> Tahun</h6>
            <p class="card-text">Atlet dari Cabang Olahraga : <?= $data['atl']['cabang'] ?></p>
            <p class="card-text">Asal Kota : <?= $data['atl']['asal'] ?></p>
            <a href="<?= BASEURL; ?>/Atlet" class="card-link">Kembali</a>
        </div>
    </div>