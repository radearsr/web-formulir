<?php 

require "../functions.php";

// Panggil fungsi Dari "functions.php" Dan simpan Dalam Variabel $rows
$rows = fetch_data();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/font/css/materialdesignicons.min.css">
    <title>Tampilan Data</title>
</head>

<body>
    <nav class="mb-3 navbar fixed-top fw-bold bg-dark">
        <div class="container-md">
            <a class="navbar-brand text-light" href="#">Tabel Database Hasil Input</a>
        </div>
    </nav>

    <div class="mt-5 pt-5 container-md">
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
                    <?php include "modal-data.php"; ?>

                    <!-- Table Data Aksi -->
                    <td class="text-center">
                        <!-- Button Delete -->
                        <a href="../delete/delete.php?dt=<?= $row['id']?>" class="btn btn-danger"
                            onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');"><span
                                class="mdi mdi-delete"></span></a>
                    </td>
                    <td class="text-center">
                        <!-- Button Edit  -->
                        <button type="button" data-bs-toggle="modal" data-bs-target="#editData<?= $row["id"]?>"
                            class="btn btn-warning"><span class="mdi mdi-pencil-box-multiple"></span></button>
                    </td>

                    <!-- Modal Popup "Button Edit" -->
                    <?php include "modal-edit.php"; ?>


                </tr>
                <?php $i++?>
                <?php endforeach;?>
                <!-- Akhir Contents Table -->
            </table>
        </div>
    </div>
</body>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>

</html>