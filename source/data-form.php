<?php 
if ( isset($_POST["opd-1"])  ) {
    
    // Main Form
    if ( isset($_POST["tanggal-1"]) ) {
        $tanggal = htmlspecialchars($_POST["tanggal-1"]); 
    }

    // First Form
    $opd       = htmlspecialchars($_POST["opd-1"]);
    $bidang    = htmlspecialchars($_POST["bidang-1"]);
    $alamat    = htmlspecialchars($_POST["alamat-1"]);
    $FirstTelp = htmlspecialchars($_POST["telp-1"]);
    $FirstMail = htmlspecialchars($_POST["email-1"]);

    // Second Form A
    $NmAdmin    = htmlspecialchars($_POST["nm-admin"]);
    $NipAdmin   = htmlspecialchars($_POST["nip-admin"]);
    $JbtAdmin   = htmlspecialchars($_POST["jbt-admin"]);
    $MailAdmin  = htmlspecialchars($_POST["mail-admin"]);
    $TelpAdmin  = htmlspecialchars($_POST["telp-admin"]);   

    // Second Form B
    $NmTeknis    = htmlspecialchars($_POST["nm-teknis"]);
    $NipTeknis   = htmlspecialchars($_POST["nip-teknis"]);
    $JbtTeknis   = htmlspecialchars($_POST["jbt-teknis"]);
    $MailTeknis  = htmlspecialchars($_POST["mail-teknis"]);
    $TelpTeknis  = htmlspecialchars($_POST["telp-teknis"]);  

    // Third Form 
    $merk       = htmlspecialchars($_POST["merk"]);
    $ram        = htmlspecialchars($_POST["ram"]);
    $hdd        = htmlspecialchars($_POST["hdd"]);
    $psu        = htmlspecialchars($_POST["psu"]);
    $tipe       = htmlspecialchars($_POST["tipe"]);              
    $proc       = htmlspecialchars($_POST["proc"]);
    $core       = htmlspecialchars($_POST["core"]);
    $os         = htmlspecialchars($_POST["os"]);
    $sn         = htmlspecialchars($_POST["sn"]);
    $appServer  = htmlspecialchars($_POST["app_server"]);
    $desServer  = htmlspecialchars($_POST["des_app"]);

    // Child Third Form 
    if( isset($_POST["child-merk"])){
        $merk2       = htmlspecialchars($_POST["child-merk"]);
        $ram2        = htmlspecialchars($_POST["child-ram"]);
        $hdd2        = htmlspecialchars($_POST["child-hdd"]);
        $psu2        = htmlspecialchars($_POST["child-psu"]);
        $tipe2       = htmlspecialchars($_POST["child-tipe"]);              
        $proc2       = htmlspecialchars($_POST["child-proc"]);
        $core2       = htmlspecialchars($_POST["child-core"]);
        $os2         = htmlspecialchars($_POST["child-os"]);
        $sn2         = htmlspecialchars($_POST["child-sn"]);
        $appServer2  = htmlspecialchars($_POST["child-app_server"]);
        $desServer2  = htmlspecialchars($_POST["child-des_app"]);
    } 

    // Fourth Form
    $nmTerang1 = htmlspecialchars($_POST["nama-terang-1"]);
    $nipTtd1   = htmlspecialchars($_POST["nip-1"]);
    $nmTerang2 = htmlspecialchars($_POST["nama-terang-2"]);
    $nipTtd2   = htmlspecialchars($_POST["nip-2"]);
}
?>