<!-- Modal Semua Data  -->
<div class="modal fade" id="allData<?= $row["id"]?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Modal Title -->
            <div class="modal-header">
                <h5 class="modal-title">Tampilan Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body/Content -->
            <div class="modal-body">
                <!-- Data Instansi Pemohon -->
                <h5 class="text-center fs-3">Data Instansi Pemohon</h5>
                <div class="mb-3">
                    <label class="col-form-label">OPD</label>
                    <input type="text" class="form-control" value="<?= $row['opd']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Bidang / Bagian / UPTD</label>
                    <input type="text" class="form-control" value="<?= $row['bidang']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Alamat</label>
                    <input type="text" class="form-control" value="<?= $row['alamat']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">No.Telepon</label>
                    <input type="text" class="form-control" value="<?= $row['firstTelp']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Email</label>
                    <input type="text" class="form-control" value="<?= $row['firstMail']?>" readonly />
                </div>
                <!-- Akhir Data Instansi Pemohon -->

                <hr class="mb-3">

                <!-- Data Penanggung Jawab Server -->
                <h5 class="mb-4 pt-4 text-center fs-3">Data Penangung Jawab Server</h5>

                <!-- ===============Penanggung Jawab Administratif================ -->
                <h6 class="pt-4 fw-lighter fst-italic">*Penanggung Jawab Administratif</h6>
                <div class="mb-3">
                    <label class="col-form-label">Nama</label>
                    <input type="text" class="form-control" value="<?= $row['nmAdmin']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">NIP</label>
                    <input type="text" class="form-control" value="<?= $row['nipAdmin']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Jabatan</label>
                    <input type="text" class="form-control" value="<?= $row['jbtAdmin']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Email</label>
                    <input type="text" class="form-control" value="<?= $row['mailAdmin']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">No.Telp/HP</label>
                    <input type="text" class="form-control" value="<?= $row['telpAdmin']?>" readonly />
                </div>

                <!-- ================Penanggung Jawab Teknis================ -->
                <h6 class="pt-4 fw-lighter fst-italic">*Penanggung Jawab Teknis</h6>
                <div class="mb-3">
                    <label class="col-form-label">Nama</label>
                    <input type="text" class="form-control" value="<?= $row['nmTeknis']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">NIP</label>
                    <input type="text" class="form-control" value="<?= $row['nipTeknis']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Jabatan</label>
                    <input type="text" class="form-control" value="<?= $row['jbtTeknis']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Email</label>
                    <input type="text" class="form-control" value="<?= $row['mailTeknis']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">No.Telp/HP</label>
                    <input type="text" class="form-control" value="telpTeknis" readonly />
                </div>
                <!-- Akhir Data Penanggung Jawab Server -->

                <hr class="mb-3">

                <!-- Keterangan Data Server -->
                <h5 class="mb-4 pt-4 text-center fs-3">Data Server</h5>
                <div class="mb-3">
                    <label class="col-form-label">Merk & Tipe Server</label>
                    <input type="text" class="form-control" value="<?= $row['merk']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">RAM (GB)</label>
                    <input type="text" class="form-control" value="<?= $row['ram']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">HDD (GB)</label>
                    <input type="text" class="form-control" value="<?= $row['hdd']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">PSU (W)</label>
                    <input type="text" class="form-control" value="<?= $row['psu']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">TYPE (U)</label>
                    <input type="text" class="form-control" value="<?= $row['tipe']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">PROC</label>
                    <input type="text" class="form-control" value="<?= $row['proc']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">CORE</label>
                    <input type="text" class="form-control" value="<?= $row['core']?>" readonly />
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
                    <input type="text" class="form-control" value="<?= $row['nmTerang1']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">NIP</label>
                    <input type="text" class="form-control" value="<?= $row['nipTtd1']?>" readonly />
                </div>
                <!-- ===================Mengetahui Administratif======================= -->
                <h6 class="pt-4 fw-lighter fst-italic">*Penanggung Jawab Administratif</h6>
                <div class="mb-3">
                    <label class="col-form-label">Nama Terang</label>
                    <input type="text" class="form-control" value="<?= $row['nmTerang2']?>" readonly />
                </div>
                <div class="mb-3">
                    <label class="col-form-label">NIP</label>
                    <input type="text" class="form-control" value="<?= $row['nipTtd2']?>" readonly />
                </div>
                <!-- Akhir Bagian Tanda Tangan -->
            </div>
        </div>
    </div>
</div>
<!-- Akhir Modal Semua Data -->