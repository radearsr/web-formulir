<?php 

    require "functions.php";


    // Main Form
    $no      = $_POST["no-1"];
    $tanggal = $_POST["tanggal-1"];

    // Debug
    // echo "=======Main Form======";
    // echo "<br>";
    // echo $no;
    // echo "<br>";
    // echo $tanggal;

    // First Form
    $opd       = $_POST["opd-1"];
    $bidang    = $_POST["bidang-1"];
    $alamat    = $_POST["alamat-1"];
    $FirstTelp = $_POST["telp-1"];
    $FirstMail = $_POST["email-1"];

    // Debug
    // echo "<br>";
    // echo "=======Form Satu======";
    // echo "<br>";
    // echo $opd;
    // echo "<br>";
    // echo $bidang;
    // echo "<br>";
    // echo $alamat;
    // echo "<br>";
    // echo $FirstTelp;
    // echo "<br>";
    // echo $FirstMail;

    // Second Form -1
    $NmAdmin    = $_POST["nm-admin"];
    $NipAdmin   = $_POST["nip-admin"];
    $JbtAdmin   = $_POST["jbt-admin"];
    $MailAdmin  = $_POST["mail-admin"];
    $TelpAdmin  = $_POST["telp-admin"];

    // Debug
    // echo "<br>";
    // echo "=======Form Dua 1======";
    // echo "<br>";
    // echo $NmAdmin;
    // echo "<br>";
    // echo $NipAdmin;
    // echo "<br>";
    // echo $JbtAdmin;
    // echo "<br>";
    // echo $MailAdmin;
    // echo "<br>";
    // echo $TelpAdmin;    

    // Second Form -2
    $NmTeknis    = $_POST["nm-teknis"];
    $NipTeknis   = $_POST["nip-teknis"];
    $JbtTeknis   = $_POST["jbt-teknis"];
    $MailTeknis  = $_POST["mail-teknis"];
    $TelpTeknis  = $_POST["telp-teknis"];

    // // Debug
    // echo "<br>";
    // echo "=======Form Tiga======";
    // echo "<br>";
    // echo $NmTeknis;
    // echo "<br>";
    // echo $NipTeknis;
    // echo "<br>";
    // echo $JbtTeknis;
    // echo "<br>";
    // echo $MailTeknis;
    // echo "<br>";
    // echo $TelpTeknis;    

    // Third Form 
    $merk       = $_POST["merk"];
    $ram        = $_POST["ram"];
    $hdd        = $_POST["hdd"];
    $psu        = $_POST["psu"];
    $tipe       = $_POST["tipe"];              
    $proc       = $_POST["proc"];
    $core       = $_POST["core"];
    $os         = $_POST["os"];
    $sn         = $_POST["sn"];
    $appServer  = $_POST["app_server"];
    $desServer  = $_POST["des_app"];

    // Debug 
    // echo "<br>";
    // echo "=======Form Empat======";  
    // echo $merk;
    // echo "<br>";
    // echo $ram;
    // echo "<br>";
    // echo $hdd;
    // echo "<br>";
    // echo $psu;
    // echo "<br>";
    // echo $tipe;
    // echo "<br>";
    // echo $proc;
    // echo "<br>";
    // echo $core;
    // echo "<br>";
    // echo $os;
    // echo "<br>";
    // echo $sn;
    // echo "<br>";
    // echo $appServer;
    // echo "<br>";
    // echo $desServer;  



    // Fourth Form
    $nmTerang1 = $_POST["nama-terang-1"];
    $nipTtd1   = $_POST["nip-1"];
    $nmTerang2 = $_POST["nama-terang-2"];
    $nipTtd2   = $_POST["nip-2"];

    // Debug 
    // echo "<br>";
    // echo "=======Form Lima======";  
    // echo $nmTerang1;
    // echo "<br>";
    // echo $nipTtd1;
    // echo "<br>";
    // echo $nmTerang2;
    // echo "<br>";
    // echo $nipTtd2;
    // echo "<br>";

    $tambah = insertData($no, $tanggal, $opd, $bidang, $alamat, $FirstTelp, $FirstMail, $NmAdmin, $NipAdmin, $JbtAdmin, $MailAdmin, $TelpAdmin, $NmTeknis, $NipTeknis, $JbtTeknis, $MailTeknis, $TelpTeknis, $merk, $ram, $hdd, $psu, $tipe, $proc, $core, $os, $sn, $appServer, $desServer, $nmTerang1, $nipTtd1, $nmTerang2, $nipTtd2);

    if ( $tambah > 0) {
        echo "<script>alert('Data Berhasil Masuk Database')</script>";
    }


?>