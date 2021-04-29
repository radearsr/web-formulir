<?php 
    // Main Form
    if ( isset($_POST["tanggal-1"]) ) {
        $tanggal = $_POST["tanggal-1"]; 
    }

    // First Form
    $opd       = $_POST["opd-1"];
    $bidang    = $_POST["bidang-1"];
    $alamat    = $_POST["alamat-1"];
    $FirstTelp = $_POST["telp-1"];
    $FirstMail = $_POST["email-1"];

    // Second Form A
    $NmAdmin    = $_POST["nm-admin"];
    $NipAdmin   = $_POST["nip-admin"];
    $JbtAdmin   = $_POST["jbt-admin"];
    $MailAdmin  = $_POST["mail-admin"];
    $TelpAdmin  = $_POST["telp-admin"];   

    // Second Form B
    $NmTeknis    = $_POST["nm-teknis"];
    $NipTeknis   = $_POST["nip-teknis"];
    $JbtTeknis   = $_POST["jbt-teknis"];
    $MailTeknis  = $_POST["mail-teknis"];
    $TelpTeknis  = $_POST["telp-teknis"];  

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

    // Child Third Form 
    if( isset($_POST["child-merk"])){
        $merk2       = $_POST["child-merk"];
        $ram2        = $_POST["child-ram"];
        $hdd2        = $_POST["child-hdd"];
        $psu2        = $_POST["child-psu"];
        $tipe2       = $_POST["child-tipe"];              
        $proc2       = $_POST["child-proc"];
        $core2       = $_POST["child-core"];
        $os2         = $_POST["child-os"];
        $sn2         = $_POST["child-sn"];
        $appServer2  = $_POST["child-app_server"];
        $desServer2  = $_POST["child-des_app"];
    } 

    // Fourth Form
    $nmTerang1 = $_POST["nama-terang-1"];
    $nipTtd1   = $_POST["nip-1"];
    $nmTerang2 = $_POST["nama-terang-2"];
    $nipTtd2   = $_POST["nip-2"];
?>