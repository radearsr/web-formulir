<!-- Cetak Lembar Dan isi Inputan Dengan Data dari file "data-form.php" -->
<?php
 include "../data-form.php";

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