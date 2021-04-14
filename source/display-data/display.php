<?php 

require "../functions.php";

$rows = fetch_data();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
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
            <table class="table table-bordered">
                <!-- Main Header Table -->
                <tr>
                    <th rowspan="2">No Tabel</th>
                    <th colspan="2">Bagian Header Formulir</th>
                    <th rowspan="2">Data Instansi Pemohon</th>
                    <th colspan="2">Data Penangung Jawab Server</th>
                    <th rowspan="2">Data Server</th>
                    <th rowspan="2">Bagian Tanda Tangan</th>
                    <th rowspan="2">Aksi</th>
                </tr>
                <!-- Lanjutan Header Table -->
                <tr>
                    <!-- 1 -->
                    <td>No.</td>
                    <td>Tanggal</td>
                    <!-- 2 -->
                    <!-- Baris baru -->
                    <!-- 3 -->
                    <td>Penanggung Jawab Administratif</td>
                    <td>Penanggung Jawab Teknis</td>
                    <!-- 4 -->
                    <!-- Baris Baru -->
                    <!-- 5 -->
                    <!-- Baris Baru -->
                    <!-- 6 -->
                    <!-- Baris Baru -->
                </tr>

                <!-- Contents Table -->
                <?php  $i = 1;?>
                <?php foreach( $rows as $row ) : ?>
                <tr>
                    <th><?= $i?></th>
                    <!-- 1 -->
                    <td><?= $row["no"]?></td>
                    <td><?= $row["tanggal"]?></td>
                    <!-- 2 -->
                    <td>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#dtPemohon<?= $row["id"]?>">
                            Lihat
                        </button>
                    </td>

                    <!-- Pop Up Btn 2 -->
                    <div class="modal fade" id="dtPemohon<?= $row["id"]?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Data Instansi Pemohon</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="col-form-label">OPD</label>
                                            <input type="text" class="form-control" value="<?= $row['opd']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">Bidang / Bagian / UPTD</label>
                                            <input type="text" class="form-control" value="<?= $row['bidang']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">Alamat</label>
                                            <input type="text" class="form-control" value="<?= $row['alamat']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">No.Telepon</label>
                                            <input type="text" class="form-control" value="<?= $row['firstTelp']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">Email</label>
                                            <input type="text" class="form-control" value="<?= $row['firstMail']?>"
                                                readonly />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Pop Up Btn 2 -->

                    <!-- 3 -->
                    <td>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#dtAdmin<?= $row["id"]?>">
                            Lihat
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#dtTeknis<?= $row["id"]?>">
                            Lihat
                        </button>
                    </td>

                    <!-- Pop Up Btn 3.1 -->
                    <div class="modal fade" id="dtAdmin<?= $row["id"]?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Data Penangung Jawab Server</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h6>*Penanggung Jawab Administratif</h6>
                                    <form>
                                        <div class="mb-3">
                                            <label class="col-form-label">Nama</label>
                                            <input type="text" class="form-control" value="<?= $row['nmAdmin']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">NIP</label>
                                            <input type="text" class="form-control" value="<?= $row['nipAdmin']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">Jabatan</label>
                                            <input type="text" class="form-control" value="<?= $row['jbtAdmin']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">Email</label>
                                            <input type="text" class="form-control" value="<?= $row['mailAdmin']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">No.Telp/HP</label>
                                            <input type="text" class="form-control" value="<?= $row['telpAdmin']?>"
                                                readonly />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Popup Btn 3.1 -->

                    <!-- Pop Up Btn 3.2 -->
                    <div class="modal fade" id="dtTeknis<?= $row["id"]?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Data Penangung Jawab Server</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h6>*Penanggung Jawab Teknis</h6>
                                    <form>
                                        <div class="mb-3">
                                            <label class="col-form-label">Nama</label>
                                            <input type="text" class="form-control" value="<?= $row['nmTeknis']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">NIP</label>
                                            <input type="text" class="form-control" value="<?= $row['nipTeknis']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">Jabatan</label>
                                            <input type="text" class="form-control" value="<?= $row['jbtTeknis']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">Email</label>
                                            <input type="text" class="form-control" value="<?= $row['mailTeknis']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">No.Telp/HP</label>
                                            <input type="text" class="form-control" value="telpTeknis" readonly />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Popup Btn 3.2 -->

                    <!-- 4 -->
                    <td>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#dtServer<?= $row["id"]?>">
                            Lihat
                        </button>
                    </td>

                    <!-- Pop Up Btn 4 -->
                    <div class="modal fade" id="dtServer<?= $row["id"]?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Data Server</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="col-form-label">Merk & Tipe Server</label>
                                            <input type="text" class="form-control" value="<?= $row['merk']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">RAM (GB)</label>
                                            <input type="text" class="form-control" value="<?= $row['ram']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">HDD (GB)</label>
                                            <input type="text" class="form-control" value="<?= $row['hdd']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">PSU (W)</label>
                                            <input type="text" class="form-control" value="<?= $row['psu']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">TYPE (U)</label>
                                            <input type="text" class="form-control" value="<?= $row['tipe']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">PROC</label>
                                            <input type="text" class="form-control" value="<?= $row['proc']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">CORE</label>
                                            <input type="text" class="form-control" value="<?= $row['core']?>"
                                                readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">OS</label>
                                            <input type="text" class="form-control" value="<?= $row['os']?>" readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">SN</label>
                                            <input type="text" class="form-control" value="<?= $row['sn']?>" readonly />
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">Aplikasi didalam Server</label>
                                            <textarea class="form-control" readonly><?= $row['appServer']?></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="col-form-label">Deskripsi Aplikasi</label>
                                            <textarea class="form-control" readonly><?= $row['desServer']?></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Popup Btn 4 -->

                    <!-- 5 -->
                    <td>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#dtFormttd<?= $row["id"]?>">
                            Lihat
                        </button>

                        <!-- Pop Up Btn 5 -->
                        <div class="modal fade" id="dtFormttd<?= $row["id"]?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Bagian Tanda Tangan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <h6>
                                                *Mengetahui, Kepala Bidang/Seksi (OPD yang akan
                                                colocation)
                                            </h6>
                                            <div class="mb-3">
                                                <label class="col-form-label">Nama Terang</label>
                                                <input type="text" class="form-control" value="<?= $row['nmTerang1']?>"
                                                    readonly />
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">NIP</label>
                                                <input type="text" class="form-control" value="<?= $row['nipTtd1']?>"
                                                    readonly />
                                            </div>

                                            <h6 class="mt-2">*Penanggung Jawab Administratif</h6>
                                            <div class="mb-3">
                                                <label class="col-form-label">Nama Terang</label>
                                                <input type="text" class="form-control" value="<?= $row['nmTerang2']?>"
                                                    readonly />
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label">NIP</label>
                                                <input type="text" class="form-control" value="<?= $row['nipTtd2']?>"
                                                    readonly />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Popup Btn 5 -->
                    </td>

                    <!-- 6 -->
                    <td><a href="../delete/delete.php?dt=<?= $row['id']?>" class="btn btn-danger">DELETE</a></td>
                </tr>
                <?php $i++?>
                <?php endforeach;?>
                <!-- Akhir Contents Table -->
            </table>
        </div>
    </div>
</body>
<script src="../assets/js/bootstrap.bundle.min.js"></script>

</html>