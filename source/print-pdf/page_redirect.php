<?php 
 include "../data-form.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Page Print</title>
</head>

<body>
    <div class="mt-4 text-center container-md">
        <form action="print_from_form.php" method="post">
            <h3>Silahkan Klik Tombol Dibawah Untuk Print Data</h3>
            <!-- Input 1 -->
            <input name="opd-1" type="hidden" value="<?= $opd?>" />
            <input type="hidden" name="tanggal-1" value="<?= $tanggal?>">
            <input type="hidden" name="bagian-1" value="<?= $bidang?>">
            <input name="alamat-1" type="hidden" value="<?= $alamat?>" />
            <input name="telp-1" type="hidden" value="<?= $FirstTelp?>" />
            <input name="email-1" type="hidden" value="<?= $FirstMail?>" />

            <!-- Input 2 -->
            <input name="nm-admin" type="hidden" value="<?= $NmAdmin?>" />
            <input name="nip-admin" type="hidden" value="<?= $NipAdmin?>" />
            <input name="jbt-admin" type="hidden" value="<?= $JbtAdmin?>" />
            <input name=" mail-admin" type="hidden" value="<?= $MailAdmin?>" />
            <input name="telp-admin" type="hidden" value="<?= $TelpAdmin?>" />

            <!-- Input 3 -->
            <input name="nm-teknis" type="hidden" value="<?= $NmTeknis?>" />
            <input name="nip-teknis" type="hidden" value="<?= $NipTeknis?>" />
            <input name="jbt-teknis" type="hidden" value="<?= $JbtTeknis?>" />
            <input name="mail-teknis" type="hidden" value="<?= $MailTeknis?>" />
            <input name="telp-teknis" type="hidden" value="<?= $TelpTeknis?>" />

            <!-- Input 4 -->
            <input name="merk" type="hidden" value="<?= $merk?>" />
            <input name="ram" type="hidden" value="<?= $ram?>" />
            <input name="hdd" type="hidden" value="<?= $hdd?>" />
            <input name="psu" type="hidden" value="<?= $psu?>" />
            <input name="tipe" type="hidden" value="<?= $tipe?>" />
            <input name="proc" type="hidden" value="<?= $proc?>" />
            <input name="core" type="hidden" value="<?= $core?>" />
            <input name="os" type="hidden" value="<?= $os?>" />
            <input name="sn" type="hidden" value="<?= $sn?>" />
            <input name="app_server" type="hidden" value="<?= $appServer?>" />
            <input name="des_app" type="hidden" value="<?= $desServer?>" />

            <!-- Input 5 -->
            <input name="nama-terang-1" type="hidden" value="<?= $nmTerang1?>" />
            <input name="nip-1" type="hidden" value="<?= $nipTtd1?>" />
            <input name="nama-terang-2" type="hidden" value="<?= $nmTerang2?>" />
            <input name="nip-2" type="hidden" value="<?= $nipTtd2?>" />

            <!-- Input 6 -->
            <?php if( isset($_POST["child-merk"]) ) : ?>
            <input name="child-merk" type="hidden" value="<?= $merk2?>" />
            <input name="child-ram" type="hidden" value="<?= $ram2?>" />
            <input name="child-hdd" type="hidden" value="<?= $hdd2?>" />
            <input name="child-psu" type="hidden" value="<?= $psu2?>" />
            <input name="child-tipe" type="hidden" value="<?= $tipe2?>" />
            <input name="child-proc" type="hidden" value="<?= $proc2?>" />
            <input name="child-core" type="hidden" value="<?= $core2?>" />
            <input name="child-os" type="hidden" value="<?= $os2?>" />
            <input name="child-sn" type="hidden" value="<?= $sn2?>" />
            <input name="child-app_server" type="hidden" value="<?= $appServer2?>" />
            <?php endif;?>
            <button type="submit" class="btn btn-primary btn-lg">Print Data</button>
        </form>
    </div>

</body>

</html>