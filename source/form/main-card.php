<!-- Card Body -->
<div class="card-body main-form">
    <h5 class="text-center">BAGIAN HEADER FORMULIR</h5>

    <!-- First Input -->
    <div class="mt-4 mb-4 row justify-content-center">
        <label for="in-no-1" class="col-sm-3 col-form-label fw-bold">No.</label>
        <div class="col-sm-8">
            <input name="no-1" type="number" class="p-2 form-control" id="in-no-1" required />
        </div>
    </div>


    <input type="hidden" name="tanggal-1" value="<?php echo date("d-m-Y"); ?>">


    <!-- <div class="mt-5 d-grid gap-3 col-md-5 mx-auto">
        <button name="kirim1" class="p-2 rounded-3 btn btn-primary btn-lanjut-1" type="submit">Lanjut</button>
    </div> -->

</div>
<!-- Akhir Card Body -->

<!-- Footer Card -->
<!-- <div class="card-footer text-center f-main">
    1 of 6
</div> -->