<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal"
                data-bs-target="#formModal">
                Tambah data Atlet
            </button><br><br>
            <h3 class="display-7">
                Daftar Atlet
            </h3>
            <ul class="list-group">
                <?php foreach ($data['atl'] as $atl) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <?= $atl['nama'] ?>
                    </div>
                    <a href="<?= BASEURL; ?>/Atlet/detail/<?= $atl['id'] ?>"><span class="badge bg-primary ml-2">detail
                        </span></a> |
                    <a href=""><span class="badge bg-info ml-2 tampilModalUbah" data-bs-toggle="modal"
                            data-bs-target="#formModal">edit
                        </span></a> |
                    <a href="<?= BASEURL; ?>/Atlet/hapus/<?= $atl['id'] ?>"><span class="badge bg-danger ml-2"
                            onclick="return confirm('Yakin ingin menghapus?')">
                            hapus</span></a>
                </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Atlet</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/Atlet/tambah" method="post">
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama </label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Fulan">
                    </div>
                    <div class="form-group">
                        <label for="jenisKel">Jenis Kelamin</label>
                        <select name="jenisKel" id="jenisKel" class="form-select">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="umur" class="form-label">Umur </label>
                        <input type="text" class="form-control" id="umur" name="umur">
                    </div>
                    <div class="form-group">
                        <label for="asal" class="form-label">Asal </label>
                        <input type="text" class="form-control" id="asal" name="asal">
                    </div>
                    <div class="form-group">
                        <label for="cabang">Cabang Olahraga</label>
                        <select class="form-select" name="cabang" id="cabang" aria-label="Default select example">
                            <option selected>Pilih Cabang Olahraga</option>
                            <option value="Basket">Basket</option>
                            <option value="Sepak Bola">Sepak Bola</option>
                            <option value="Bulutangkis">Bulutangkis</option>
                            <option value="Voli">Voli</option>
                            <option value="Renang">Renang</option>
                            <option value="Catur">Catur</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>

                </form>
            </div>
        </div>
    </div>
</div>