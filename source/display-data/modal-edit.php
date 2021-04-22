<!-- Modal Semua Data  -->
<div class="modal fade" id="editData<?= $row["id"]?>" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-md-down">
        <div class="modal-content">
            <!-- Modal Title -->
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body/Content -->
            <form action="update.php" method="post">
                <!-- Hidden Input For Update Data -->
                <input type="hidden" name="id" value="<?= $row["id"]?>">
                <input type="hidden" name="tanggal-1" value="<?= $row["tanggal"]?>">

                <div class="modal-body">
                    <!-- Data Instansi Pemohon -->
                    <h5 class="text-center fs-3">Data Instansi Pemohon</h5>
                    <div class="mb-3">
                        <label class="col-form-label">OPD</label>
                        <input name="opd-1" type="text" class="form-control" value="<?= $row['opd']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Bidang / Bagian / UPTD</label>
                        <input name="bidang-1" type="text" class="form-control" value="<?= $row['bidang']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Alamat</label>
                        <input name="alamat-1" type="text" class="form-control" value="<?= $row['alamat']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">No.Telepon</label>
                        <input name="telp-1" type="text" class="form-control" value="<?= $row['firstTelp']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Email</label>
                        <input name="email-1" type="text" class="form-control" value="<?= $row['firstMail']?>" />
                    </div>
                    <!-- Akhir Data Instansi Pemohon -->

                    <hr class="mb-3">

                    <!-- Data Penanggung Jawab Server -->
                    <h5 class="mb-4 pt-4 text-center fs-3">Data Penangung Jawab Server</h5>

                    <!-- ===============Penanggung Jawab Administratif================ -->
                    <h6 class="pt-4 fw-lighter fst-italic">*Penanggung Jawab Administratif</h6>
                    <div class="mb-3">
                        <label class="col-form-label">Nama</label>
                        <input name="nm-admin" type="text" class="form-control" value="<?= $row['nmAdmin']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">NIP</label>
                        <input name="nip-admin" type="text" class="form-control" value="<?= $row['nipAdmin']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Jabatan</label>
                        <input name="jbt-admin" type="text" class="form-control" value="<?= $row['jbtAdmin']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Email</label>
                        <input name="mail-admin" type="text" class="form-control" value="<?= $row['mailAdmin']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">No.Telp/HP</label>
                        <input name="telp-admin" type="text" class="form-control" value="<?= $row['telpAdmin']?>" />
                    </div>

                    <!-- ================Penanggung Jawab Teknis================ -->
                    <h6 class="pt-4 fw-lighter fst-italic">*Penanggung Jawab Teknis</h6>
                    <div class="mb-3">
                        <label class="col-form-label">Nama</label>
                        <input name="nm-teknis" type="text" class="form-control" value="<?= $row['nmTeknis']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">NIP</label>
                        <input name="nip-teknis" type="text" class="form-control" value="<?= $row['nipTeknis']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Jabatan</label>
                        <input name="jbt-teknis" type="text" class="form-control" value="<?= $row['jbtTeknis']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Email</label>
                        <input name="mail-teknis" type="text" class="form-control" value="<?= $row['mailTeknis']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">No.Telp/HP</label>
                        <input name="telp-teknis" type="text" class="form-control" value="telpTeknis" />
                    </div>
                    <!-- Akhir Data Penanggung Jawab Server -->

                    <hr class="mb-3">

                    <!-- Keterangan Data Server -->
                    <h5 class="mb-4 pt-4 text-center fs-3">Data Server</h5>
                    <div class="mb-3">
                        <label class="col-form-label">Merk & Tipe Server</label>
                        <input name="merk" type="text" class="form-control" value="<?= $row['merk']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">RAM (GB)</label>
                        <input name="ram" type="text" class="form-control" value="<?= $row['ram']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">HDD (GB)</label>
                        <input name="hdd" type="text" class="form-control" value="<?= $row['hdd']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">PSU (W)</label>
                        <input name="psu" type="text" class="form-control" value="<?= $row['psu']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">TYPE (U)</label>
                        <input name="tipe" type="text" class="form-control" value="<?= $row['tipe']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">PROC</label>
                        <input name="proc" type="text" class="form-control" value="<?= $row['proc']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">CORE</label>
                        <input name="core" type="text" class="form-control" value="<?= $row['core']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">OS</label>
                        <input name="os" type="text" class="form-control" value="<?= $row['os']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">SN</label>
                        <input name="sn" type="text" class="form-control" value="<?= $row['sn']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Aplikasi didalam Server</label>
                        <textarea name="app_server" class="form-control"><?= $row['appServer']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Deskripsi Aplikasi</label>
                        <textarea name="des_app" class="form-control"><?= $row['desServer']?></textarea>
                    </div>
                    <!-- Akhir Keterangan Data Server -->

                    <hr class="mb-3">

                    <!-- Bagian Tanda Tangan -->
                    <h5 class="mb-4 pt-4 text-center fs-3">Bagian Tanda Tangan</h5>
                    <!-- =======================Mengetahui Kepala Bidang================= -->
                    <h6 class="pt-4 fw-lighter fst-italic">
                        *Mengetahui, Kepala Bidang/Seksi (OPD yang akan
                        colocation)
                    </h6>
                    <div class="mb-3">
                        <label class="col-form-label">Nama Terang</label>
                        <input name="nama-terang-1" type="text" class="form-control" value="<?= $row['nmTerang1']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">NIP</label>
                        <input name="nip-1" type="text" class="form-control" value="<?= $row['nipTtd1']?>" />
                    </div>
                    <!-- ===================Mengetahui Administratif======================= -->
                    <h6 class="pt-4 fw-lighter fst-italic">*Penanggung Jawab Administratif</h6>
                    <div class="mb-3">
                        <label class="col-form-label">Nama Terang</label>
                        <input name="nama-terang-2" type="text" class="form-control" value="<?= $row['nmTerang2']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">NIP</label>
                        <input name="nip-2" type="text" class="form-control" value="<?= $row['nipTtd2']?>" />
                    </div>
                    <!-- Akhir Bagian Tanda Tangan -->
                </div>
                <div class="modal-footer">
                    <button name="ubah-data" class="btn btn-info" type="submit">Perbarui Data</button>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Akhir Modal Semua Data -->