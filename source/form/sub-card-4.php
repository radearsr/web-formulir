<!-- Card Body -->
<div class="card-body fourth-form" id="form-data1">
    <h5 class="text-center">DATA SERVER 1</h5>
    <br>
    <label for="form2" class="col-md-9 col-form-label fw-lighter">*Hidupkan Tombol <span class="fw-bold">Data Server
            2</span> Jika Ingin Memasukkan 2 Data
        Server</label>
    <br>

    <div class="justify-content-center">
        <!-- Checkbox Disable -->
        <div style="display: inline-block;" class="ms-3 form-check form-switch">
            <input class="form-check-input" type="checkbox" id="form1" checked disabled>
            <label class="form-check-label" for="form1">Data Server 1</label>
        </div>
        <!-- Checkbox On -->
        <div style="display: inline-block;" class="ms-3 form-check form-switch">
            <label class="form-check-label" for="check2">Data Server 2</label>
            <input class="form-check-input" onclick="myFunction()" type="checkbox" id="check2">
        </div>
    </div>
    <!-- Input Tipe / Merk -->
    <br>
    <div class="mt-3 mb-4 row justify-content-center">
        <label for="merk&tipe" class="col-sm-3 col-form-label fw-bold">Merk dan tipe server</label>
        <div class="col-sm-8">
            <input name="merk" type="text" class="p-2 form-control" id="merk&tipe" required />
        </div>
    </div>

    <!-- Catatan -->
    <div class="row justify-content-start">
        <label class="col-sm-5 col-form-label fw-bold fst-italic">*Spesifikasi server</label>
    </div>

    <!-- Input RAM -->
    <div class="mb-4 row justify-content-center">
        <label for="in-ram" class="col-sm-3 col-form-label fw-bold">RAM (GB)</label>
        <div class="col-sm-8">
            <input name="ram" type="number" class="p-2 form-control" id="in-ram" required />
        </div>
    </div>

    <!-- Input HDD -->
    <div class="mb-4 row justify-content-center">
        <label for="in-hdd" class="col-sm-3 col-form-label fw-bold">HDD (GB)</label>
        <div class="col-sm-8">
            <input name="hdd" type="number" class="p-2 form-control" id="in-hdd" required />
        </div>
    </div>

    <!-- Input PSU -->
    <div class="mb-4 row justify-content-center">
        <label for="in-psu" class="col-sm-3 col-form-label fw-bold">PSU (W)</label>
        <div class="col-sm-8">
            <input name="psu" type="number" class="p-2 form-control" id="in-psu" required />
        </div>
    </div>

    <!-- Input TYPE -->
    <div class="mb-4 row justify-content-center">
        <label for="in-type" class="col-sm-3 col-form-label fw-bold">TYPE (U)</label>
        <div class="col-sm-8">
            <input name="tipe" type="text" class="p-2 form-control" id="in-type" required />
        </div>
    </div>

    <!-- Input PROC -->
    <div class="mb-4 row justify-content-center">
        <label for="in-proc" class="col-sm-3 col-form-label fw-bold">PROC</label>
        <div class="col-sm-8">
            <input name="proc" type="text" class="p-2 form-control" id="in-proc" required />
        </div>
    </div>

    <!-- Input CORE -->
    <div class="mb-4 row justify-content-center">
        <label for="in-core" class="col-sm-3 col-form-label fw-bold">CORE</label>
        <div class="col-sm-8">
            <input name="core" type="text" class="p-2 form-control" id="in-core" required />
        </div>
    </div>

    <!-- Input OS -->
    <div class="mb-4 row justify-content-center">
        <label for="in-os" class="col-sm-3 col-form-label fw-bold">OS</label>
        <div class="col-sm-8">
            <input name="os" type="text" class="p-2 form-control" id="in-os" required />
        </div>
    </div>

    <!-- Input SN -->
    <div class="mb-4 row justify-content-center">
        <label for="in-sn" class="col-sm-3 col-form-label fw-bold">SN</label>
        <div class="col-sm-8">
            <input name="sn" type="text" class="p-2 form-control" id="in-sn" required />
        </div>
    </div>

    <!-- Input App -->
    <div class="mb-3 row justify-content-center">
        <label for="app-server" class="col-sm-3 col-form-label fw-bold">Aplikasi Didalam Server</label>
        <div class="col-md-8">
            <textarea name="app_server" class="form-control" id="app-server" rows="2" required></textarea>
        </div>
    </div>

    <!-- Input Des App -->
    <div class="mb-3 row justify-content-center">
        <label for="des-app" class="col-sm-3 col-form-label fw-bold">Deskripsi aplikasi</label>
        <div class="col-md-8">
            <textarea name="des_app" class="form-control" id="des-app" rows="3" required></textarea>
        </div>
    </div>

</div>