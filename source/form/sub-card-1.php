<!-- Card Body -->
<div class="card-body first-form">
    <h5 class="text-center">DATA INSTANSI PEMOHON</h5>

    <div class="mt-3 mb-4 row justify-content-start">
        <label for="in-opd" class="col-md-10 col-form-label fst-italic">*Isilah data dengan menggunakan huruf balok
            hingga halaman terakhir.</label>
    </div>

    <!-- Input OPD -->
    <div class="mb-4 row justify-content-center">
        <label for="in-opd" class="col-md-4 col-form-label fw-bold">OPD</label>
        <div class="col-sm-8">
            <input name="opd-1" type="text" class="p-2 form-control" id="in-opd" required />
        </div>
    </div>

    <!-- Input Tanggal(Hidden) -->
    <input type="hidden" name="tanggal-1" value="<?php echo date("d-m-Y"); ?>">

    <!-- Input Bidang/Bagian/UPTD -->
    <div class="mb-4 row justify-content-center">
        <label for="in-bidang" class="col-md-4 col-form-label fw-bold">Bidang / Bagian / UPTD</label>
        <div class="col-sm-8">
            <input type="text" list="dataDinas" name="bidang-1" class="p-2 form-control" autocomplete="off">
            <datalist class="dropdown-menu" id="dataDinas">
                <option class="dropdown-item" value="Dinas"></option>
            </datalist>
        </div>
    </div>

    <!-- Input Alamat -->
    <div class="mb-4 row justify-content-center">
        <label for="alamat" class="col-md-4 col-form-label fw-bold">Alamat</label>
        <div class="col-sm-8">
            <input name="alamat-1" type="text" class="p-2 form-control" id="alamat" required />
        </div>
    </div>

    <!-- Input No Telp -->
    <div class="mb-4 row justify-content-center">
        <label for="nomer" class="col-md-4 col-form-label fw-bold">No. Telepon</label>
        <div class="col-sm-8">
            <input name="telp-1" type="number" class="p-2 form-control" id="nomer" required />
        </div>
    </div>

    <!-- Input Email -->
    <div class="mb-4 row justify-content-center">
        <label for="email" class="col-md-4 col-form-label fw-bold">Email</label>
        <div class="col-sm-8">
            <input name="email-1" type="email" class="p-2 form-control" id="email" required />
        </div>
    </div>


</div>