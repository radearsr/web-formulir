<!-- Masukkan Data Yang Sudah diinput kedatabase -->
<?php

    include "../data-form.php";
    include "../functions.php";

    if( isset($_POST["child-merk"]) ){

        // Insert Spek Server 2
        $id_spek_2 = inSpekServer2( $merk2, $ram2, $hdd2, $psu2, $tipe2, $proc2, $core2, $os2, $sn2, $appServer2, $desServer2);

        // Insert Spek Server
        $id_spek = inSpekServer1( $merk, $ram, $hdd, $psu, $tipe, $proc, $core, $os, $sn, $appServer, $desServer, $id_spek_2);

        // Insert All Data
        $insert = insertData($opd, $bidang, $alamat, $FirstTelp, $FirstMail, $NmAdmin, $NipAdmin, $JbtAdmin, $MailAdmin, $TelpAdmin, $NmTeknis, $NipTeknis, $JbtTeknis, $MailTeknis, $TelpTeknis ,$nmTerang1, $nipTtd1, $nmTerang2, $nipTtd2);
        var_dump(mysqli_insert_id($conn));
    }
    elseif( !isset($_POST["child-merk"]) ){

        // Insert Spek Server
        $id_spek = inSpekServer1( $merk, $ram, $hdd, $psu, $tipe, $proc, $core, $os, $sn, $appServer, $desServer, NULL);
    
        // Insert All Data
        $insert = insertData($opd, $bidang, $alamat, $FirstTelp, $FirstMail, $NmAdmin, $NipAdmin, $JbtAdmin, $MailAdmin, $TelpAdmin, $NmTeknis, $NipTeknis, $JbtTeknis, $MailTeknis, $TelpTeknis ,$nmTerang1, $nipTtd1, $nmTerang2, $nipTtd2);
        var_dump(mysqli_insert_id($conn));

    }





?>

<!-- Cetak Lembar Dan isi Inputan Dengan Data dari file "data-form.php" -->
<?php
 include "library_pdf/vendor/autoload.php";
 $mpdf = new \Mpdf\Mpdf();

if ( !isset($_POST["child-merk"]) ) {
    
    include "lembar_pdf/from_form/printMode1.php";

}
elseif ( isset($_POST["child-merk"]) ) {

    include "lembar_pdf/from_form/printMode2.php";


}

$mpdf->writeHTML($html);
$mpdf->Output('Form Colocation Data Center_v2',\Mpdf\Output\Destination::INLINE);

?>