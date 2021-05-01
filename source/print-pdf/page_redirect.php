<?php 
 include "../data-form.php";
 include "../functions.php";

 if ( isset($_POST['opd-1']) ) {
     
    if( isset($_POST["child-merk"]) ){

        // Insert Spek Server 2
        $id_spek_2 = inSpekServer2( $merk2, $ram2, $hdd2, $psu2, $tipe2, $proc2, $core2, $os2, $sn2, $appServer2, $desServer2);
   
        // Insert Spek Server
        $id_spek = inSpekServer1( $merk, $ram, $hdd, $psu, $tipe, $proc, $core, $os, $sn, $appServer, $desServer, $id_spek_2);
   
        // Insert All Data
        $insert = insertData($opd, $bidang, $alamat, $FirstTelp, $FirstMail, $NmAdmin, $NipAdmin, $JbtAdmin, $MailAdmin, $TelpAdmin, $NmTeknis, $NipTeknis, $JbtTeknis, $MailTeknis, $TelpTeknis ,$nmTerang1, $nipTtd1, $nmTerang2, $nipTtd2);
    }
    elseif( !isset($_POST["child-merk"]) ){
   
        // Insert Spek Server
        $id_spek = inSpekServer1( $merk, $ram, $hdd, $psu, $tipe, $proc, $core, $os, $sn, $appServer, $desServer, NULL);
    
        // Insert All Data
        $insert = insertData($opd, $bidang, $alamat, $FirstTelp, $FirstMail, $NmAdmin, $NipAdmin, $JbtAdmin, $MailAdmin, $TelpAdmin, $NmTeknis, $NipTeknis, $JbtTeknis, $MailTeknis, $TelpTeknis ,$nmTerang1, $nipTtd1, $nmTerang2, $nipTtd2);
   
    }  

 }

 $id = mysqli_insert_id($conn)
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/font/css/materialdesignicons.min.css">
    <title>Page Print</title>
</head>

<body>
    <?php if( isset($insert) > 0 ) :?>
    <div class="alert alert-success alert-dismissible fade show container-md" role="alert">
        <strong>Data Berhasil Masuk!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php else: ?>
    <div class="alert alert-danger alert-dismissible fade show container-md" role="alert">
        <strong>Data Gagal Masuk Kedatabase! error MYSQL : </strong> <?php var_dump(mysqli_error($conn)); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif;?>
    <div class="mt-4 text-center container-lg">

        <?php if( isset($_POST["opd-1"]) ) :?>

        <h5>Silahkan Klik Tombol Print Data Untuk Mendownload File PDF</h5>
        <a href="print_from_display.php?dtid=<?= $id ?>" class="btn btn-primary btn-lg"><span
                class="mdi mdi-printer"></span>
            Print
            Data</a>
        <br>
        <a href="../../index.php" class="mt-2 btn btn-danger btn-lg"><span
                class="mdi mdi-keyboard-backspace"></span>Kembali Ke Halaman
            Formulir</a>
        <?php elseif( !isset($_POST["opd-1"]) ) :?>
        <h5>Klik Kembali Untuk Mengisi Formulir</h5>
        <a href="../../index.php" class="btn btn-danger btn-lg"><span class="mdi mdi-keyboard-backspace"></span>Kembali
            Ke Halaman
            Formulir</a>
        <?php endif;?>
    </div>

</body>
<script src="../../assets/js/bootstrap.min.js"></script>

</html>