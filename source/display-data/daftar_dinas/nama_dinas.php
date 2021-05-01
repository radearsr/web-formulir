<h1 class="text-center">Data Daftar Nama Dinas</h1>
<div class="pt-4 table-responsive">
    <!-- Button Add Data -->
    <button type="button" data-bs-toggle="modal" data-bs-target="#addData" class="mb-2 btn btn-success"> <span
            class="mdi mdi-text-box-plus-outline"></span> Tambah Data</button>
    <!-- Modal -->
    <div class="modal fade" id="addData" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="daftar_dinas/tambah-data.php" method="post">
                    <div class="modal-body">
                        <label class="col-8 col-form-label">Nama Dinas</label>
                        <div class="row" id="input-1">
                            <div class="col-10">
                                <input name="nama_dinas[]" type="text" class="form-control" />
                            </div>
                            <button type="button" id="btn-add" class="col-2 btn fw-bold"
                                style="background-color: rgb(108, 245, 45);color: #fff;">+</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><span class="mdi mdi-content-save"></span>
                            Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <!-- Main Header Table -->
        <tr class="table-dark">
            <th>No</th>
            <th>Nama Dinas</th>
            <th>Aksi</th>
        </tr>


        <!-- Contents Table Saat Tidak Ada Data Dalam Database -->
        <?php if( $dinas === 1 ) : ?>
        <tr>
            <td colspan="3">Tidak Ada Data</td>
        </tr>
        <?php endif;?>


        <!-- Contents Table -->
        <?php $dinas = fetch_data('', "SELECT * FROM daftar_dinas");  $i = 1;?>
        <?php foreach( $dinas as $dns ) : ?>
        <tr>
            <!-- Tabel No -->
            <th class="mt-1"><?= $i?></th>

            <!-- Table Tanggal -->
            <td class="mt-1"><?= $dns["nama_dinas"]?></td>


            <td>
                <!-- Button Update -->
                <button type="button" data-bs-toggle="modal" data-bs-target="#upData"
                    class="mt-1 btn btn-outline-primary">
                    <span class="mdi mdi-pencil-box-multiple"></span></button>
                <!-- Button Delete -->
                <a href="delete/delete.php?dtdns=<?= $dns["id"]?>" class="mt-1 btn btn-outline-danger"
                    onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');"><span
                        class="mdi mdi-delete"></span></a>
            </td>
            <!-- Modal Edit Data -->
            <div class="modal fade" id="upData" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="update/update.php" method="post">
                            <div class="modal-body">
                                <div class="row">
                                    <label class="col-3 col-form-label">Nama Dinas</label>
                                    <div class="col-9">
                                        <input name="nama_dinas" value="<?= $dns["nama_dinas"]?>" type="text"
                                            class="form-control" />
                                        <input type="hidden" name="id" value="<?= $dns["id"]?>">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="btn-edit-dinas" class="btn btn-warning"><span
                                        class="mdi mdi-content-save"></span>
                                    Simpan</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </tr>
        <?php $i++?>
        <?php endforeach;?>
        <!-- Akhir Contents Table -->
    </table>

</div>