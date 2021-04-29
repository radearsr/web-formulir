<h1 class="text-center">Data Hasil Inputan Formulir Permohonan</h1>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <!-- Main Header Table -->
        <tr class="table-dark">
            <th class="text-center">No</th>
            <th class="text-center">Tanggal</th>
            <th class="text-center">Data</th>
            <th colspan="2" class="text-center">Aksi</th>
        </tr>


        <!-- Contents Table Saat Tidak Ada Data Dalam Database -->
        <?php if( $rows === 1 ) : ?>
        <tr>
            <td colspan="4" class="text-center">Tidak Ada Data</td>
        </tr>
        <?php die;?>
        <?php endif;?>


        <!-- Contents Table -->
        <?php  $i = 1;?>
        <?php foreach( $rows as $row ) : ?>
        <tr>
            <!-- Tabel No -->
            <th class="text-center"><?= $i?></th>

            <!-- Table Tanggal -->
            <td class="text-center"><?= $row["tanggal"]?></td>

            <!-- Table Lihat Data -->
            <td class="text-center">
                <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                    data-bs-target="#allData<?= $row["id"]?>">
                    <span class="mdi mdi-eye"></span> Lihat
                </button>
            </td>

            <!-- Modal Popup "Button Lihat" -->
            <?php include "popup/modal-data.php"; ?>

            <!-- Table Data Aksi -->
            <td class="text-center">
                <!-- Button Edit  -->
                <button type="button" data-bs-toggle="modal" data-bs-target="#editData<?= $row["id"]?>"
                    class="btn btn-warning"><span class="mdi mdi-pencil-box-multiple"></span></button>
            </td>

            <td class="text-center">
                <?php if( $row["id_spek_server2"] === NULL ) : ?>
                <!-- Button Delete -->
                <a href="delete/delete.php?dtM1=<?= $row['main_id']?>" class="btn btn-danger"
                    onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');"><span
                        class="mdi mdi-delete"></span></a>

                <!-- Jika Terdapat Data Spek Server 2 Maka lakukan Script Dibawah -->
                <?php elseif( $row["id_spek_server2"] !== NULL ) : ?>
                <!-- Button Delete -->
                <a href="delete/delete.php?dtM2=<?= $row['main_id']?>" class="btn btn-danger"
                    onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');"><span
                        class="mdi mdi-delete"></span></a>
                <?php endif;?>

            </td>

            <!-- Modal Popup "Button Edit" -->
            <?php include "popup/modal-edit.php"; ?>

        </tr>
        <?php $i++?>
        <?php endforeach;?>
        <!-- Akhir Contents Table -->
    </table>

</div>