function myFunction() {
  var buttonPush = document.getElementById("check2").checked;
  var elementParent = document.getElementById("form-data1");
  // console.log("Hello  World");
  // console.log(buttonPush);
  var html =
    '<div class="pb-2 card-body child-fourth-form" id="form-data2"> <h5 class="text-center">DATA SERVER 2</h5> <div class="mt-4 mb-3 row justify-content-center"><label for="child-merk&tipe" class="col-sm-3 col-form-label fw-bold">Merk dan tipe server</label><div class="col-sm-8"><input name="child-merk" type="text" class="p-2 form-control" id="child-merk&tipe" required /></div></div> <div class="row justify-content-start"><label class="col-sm-5 col-form-label fw-bold fst-italic">*Spesifikasi server</label></div> <div class="mb-4 row justify-content-center"><label for="child-in-ram" class="col-sm-3 col-form-label fw-bold">RAM (GB)</label><div class="col-sm-8"><input name="child-ram" type="number" class="p-2 form-control" id="child-in-ram" required /></div></div> <div class="mb-4 row justify-content-center"><label for="child-in-hdd" class="col-sm-3 col-form-label fw-bold">HDD (GB)</label><div class="col-sm-8"><input name="child-hdd" type="number" class="p-2 form-control" id="child-in-hdd" required /></div></div> <div class="mb-4 row justify-content-center"><label for="child-in-psu" class="col-sm-3 col-form-label fw-bold">PSU (W)</label><div class="col-sm-8"><input name="child-psu" type="number" class="p-2 form-control" id="child-in-psu" required /></div></div> <div class="mb-4 row justify-content-center"><label for="child-in-type" class="col-sm-3 col-form-label fw-bold">TYPE (U)</label><div class="col-sm-8"><input name="child-tipe" type="text" class="p-2 form-control" id="child-in-type" required /></div></div> <div class="mb-4 row justify-content-center"><label for="child-in-proc" class="col-sm-3 col-form-label fw-bold">PROC</label><div class="col-sm-8"><input name="child-proc" type="text" class="p-2 form-control" id="child-in-proc" required /></div></div> <div class="mb-4 row justify-content-center"><label for="child-in-core" class="col-sm-3 col-form-label fw-bold">CORE</label><div class="col-sm-8"><input name="child-core" type="text" class="p-2 form-control" id="child-in-core" required /></div></div> <div class="mb-4 row justify-content-center"><label for="child-in-os" class="col-sm-3 col-form-label fw-bold">OS</label><div class="col-sm-8"><input name="child-os" type="text" class="p-2 form-control" id="child-in-os" required /></div></div> <div class="mb-4 row justify-content-center"><label for="child-in-sn" class="col-sm-3 col-form-label fw-bold">SN</label><div class="col-sm-8"><input name="child-sn" type="text" class="p-2 form-control" id="child-in-sn" required /></div></div> <div class="mb-3 row justify-content-center"><label for="child-app-server" class="col-sm-3 col-form-label fw-bold">Aplikasi Didalam Server</label><div class="col-md-8"><textarea name="child-app_server" class="form-control" id="child-app-server" rows="2" required></textarea></div></div> <div class="mb-3 row justify-content-center"><label for="child-des-app" class="col-sm-3 col-form-label fw-bold">Deskripsi aplikasi</label><div class="col-md-8"><textarea name="child-des_app" class="form-control" id="child-des-app" rows="3" required></textarea></div></div> </div>';

  if (buttonPush === true) {
    elementParent.insertAdjacentHTML("afterend", html);
  } else {
    var elementChild = document.getElementById("form-data2");
    elementChild.remove();
  }
}

var BtnAdd = document.getElementById("btn-add");
var elementParent = document.getElementById("input-1");

var form =
  '<div id="child-input" class="mt-3 row"><div class="col-10"><input name="nama_dinas[]" type="text" class="form-control" /></div><button type="button" id="btn-del" class="col-2 btn fw-bold"style="background-color: rgb(245, 45, 45); color: #fff;">x</button></div>';

BtnAdd.addEventListener("click", () => {
  elementParent.insertAdjacentHTML("afterend", form);
  var BtnDel = document.getElementById("btn-del");
  BtnDel.addEventListener("click", () => {
    var elementChild = document.getElementById("child-input");
    elementChild.remove();
  });
});
