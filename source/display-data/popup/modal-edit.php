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
            <form action="update/update.php" method="post">
                <!-- Hidden Input For Update Data -->
                <input type="hidden" name="id" value="<?= $row["main_id"]?>">

                <div class="modal-body">
                    <!-- Data Instansi Pemohon -->
                    <h5 class="text-center fs-3">Data Instansi Pemohon</h5>
                    <div class="mb-3">
                        <label class="col-form-label">OPD</label>
                        <input name="opd-1" type="text" class="form-control" value="<?= $row['opd']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Bidang / Bagian / UPTD</label>
                        <input type="text" list="dataDinas" name="bidang-1" value="<?= $row['bidang']?>"
                            class="form-control" autocomplete="off">
                        <datalist class="dropdown-menu" id="dataDinas">
                            <?php $dinas = fetch_data('', "SELECT * FROM daftar_dinas"); foreach( $dinas as $dns ) : ?>
                            <option class="dropdown-item" value="<?= $dns['nama_dinas']?>"></option>
                            <?php endforeach;?>
                        </datalist>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Alamat</label>
                        <input name="alamat-1" type="text" class="form-control" value="<?= $row['alamat']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">No.Telepon</label>
                        <input name="telp-1" type="number" class="form-control" value="<?= $row['telp']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Email</label>
                        <input name="email-1" type="email" class="form-control" value="<?= $row['email']?>" />
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
                        <input name="nip-admin" type="number" class="form-control" value="<?= $row['nipAdmin']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Jabatan</label>
                        <input name="jbt-admin" type="text" class="form-control" value="<?= $row['jbtAdmin']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Email</label>
                        <input name="mail-admin" type="email" class="form-control" value="<?= $row['mailAdmin']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">No.Telp/HP</label>
                        <input name="telp-admin" type="number" class="form-control" value="<?= $row['telpAdmin']?>" />
                    </div>

                    <!-- ================Penanggung Jawab Teknis================ -->
                    <h6 class="pt-4 fw-lighter fst-italic">*Penanggung Jawab Teknis</h6>
                    <div class="mb-3">
                        <label class="col-form-label">Nama</label>
                        <input name="nm-teknis" type="text" class="form-control" value="<?= $row['nmTeknis']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">NIP</label>
                        <input name="nip-teknis" type="number" class="form-control" value="<?= $row['nipTeknis']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Jabatan</label>
                        <input name="jbt-teknis" type="text" class="form-control" value="<?= $row['jbtTeknis']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Email</label>
                        <input name="mail-teknis" type="email" class="form-control" value="<?= $row['mailTeknis']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">No.Telp/HP</label>
                        <input name="telp-teknis" type="number" class="form-control" value="<?= $row['telpTeknis']?>" />
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
                        <input name="ram" type="number" class="form-control" value="<?= $row['ram']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">HDD (GB)</label>
                        <input name="hdd" type="number" class="form-control" value="<?= $row['hdd']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">PSU (W)</label>
                        <input name="psu" type="number" class="form-control" value="<?= $row['psu']?>" />
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
                        <textarea name="app_server" class="form-control"><?= $row['app_server']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Deskripsi Aplikasi</label>
                        <textarea name="des_app" class="form-control"><?= $row['des_server']?></textarea>
                    </div>
                    <!-- Akhir Keterangan Data Server -->

                    <hr class="mb-3">

                    <!-- Jika Ada Data Keterangan Server 2 Maka Tampilkan Data -->

                    <!-- ================================Keterangan Data Server 2========================= -->
                    <?php if( $row["id_spek_server2"] !== NULL ) :?>
                    <?php $id = $row["id_spek_server2"]; $speks = fetch_data($id, "SELECT * FROM spek_server_2 WHERE id_spek_2 = '$id'")?>
                    <?php foreach( $speks as $spek ) :?>

                    <h5 class="mb-4 pt-4 text-center fs-3">Data Server 2</h5>
                    <div class="mb-3">
                        <label class="col-form-label">Merk & Tipe Server</label>
                        <input type="text" name="child-merk" class="form-control" value="<?= $spek['merk']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">RAM (GB)</label>
                        <input type="number" name="child-ram" class="form-control" value="<?= $spek['ram']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">HDD (GB)</label>
                        <input type="number" name="child-hdd" class="form-control" value="<?= $spek['hdd']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">PSU (W)</label>
                        <input type="number" name="child-psu" class="form-control" value="<?= $spek['psu']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">TYPE (U)</label>
                        <input type="text" name="child-tipe" class="form-control" value="<?= $spek['tipe']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">PROC</label>
                        <input type="text" name="child-proc" class="form-control" value="<?= $spek['proc']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">CORE</label>
                        <input type="text" name="child-core" class="form-control" value="<?= $spek['core']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">OS</label>
                        <input type="text" name="child-os" class="form-control" value="<?= $spek['os']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">SN</label>
                        <input type="text" name="child-sn" class="form-control" value="<?= $spek['sn']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Aplikasi didalam Server</label>
                        <textarea name="child-app_server" class="form-control"><?= $spek['app_server']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">Deskripsi Aplikasi</label>
                        <textarea name="child-des_app" class="form-control"><?= $spek['des_server']?></textarea>
                    </div>
                    <?php endforeach;?>
                    <?php endif;?>

                    <!-- Bagian Tanda Tangan -->
                    <h5 class="mb-4 pt-4 text-center fs-3">Bagian Tanda Tangan</h5>
                    <!-- =======================Mengetahui Kepala Bidang================= -->
                    <h6 class="pt-4 fw-lighter fst-italic">
                        *Mengetahui, Kepala Bidang/Seksi (OPD yang akan
                        colocation)
                    </h6>
                    <div class="mb-3">
                        <label class="col-form-label">Nama Terang</label>
                        <input name="nama-terang-1" type="text" class="form-control" value="<?= $row['nm_terang1']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">NIP</label>
                        <input name="nip-1" type="number" class="form-control" value="<?= $row['nip_ttd1']?>" />
                    </div>
                    <!-- ===================Mengetahui Administratif======================= -->
                    <h6 class="pt-4 fw-lighter fst-italic">*Penanggung Jawab Administratif</h6>
                    <div class="mb-3">
                        <label class="col-form-label">Nama Terang</label>
                        <input name="nama-terang-2" type="text" class="form-control" value="<?= $row['nm_terang2']?>" />
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label">NIP</label>
                        <input name="nip-2" type="number" class="form-control" value="<?= $row['nip_ttd2']?>" />
                    </div>
                    <!-- Akhir Bagian Tanda Tangan -->
                </div>
                <div class="modal-footer">
                    <button name="ubah-data" class="btn btn-success" type="submit">Perbarui Data</button>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Akhir Modal Semua Data -->