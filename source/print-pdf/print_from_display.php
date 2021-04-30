<?php 
 
 include "../functions.php";

 $id = $_GET["dtid"];

 $rows = fetch_data('', "SELECT center_table.main_id, DATE_FORMAT(center_table.tanggal, '%d-%m-%Y') AS 'tanggal', data_pemohon.*, data_penanggung.*,spek_server.*,data_ttd.* 
 FROM center_table 
 JOIN data_pemohon 
 ON center_table.id_pemohon = data_pemohon.id 
 JOIN data_penanggung 
 ON center_table.id_penanggung = data_penanggung.id 
 JOIN spek_server 
 ON center_table.id_spek_server = spek_server.id_spek 
 JOIN data_ttd
 ON center_table.id_ttd = data_ttd.id
 WHERE center_table.main_id = '$id'
 ");

var_dump($rows);
echo"<br>";
?>
<?php 
 include "library_pdf/vendor/autoload.php";
 $mpdf = new \Mpdf\Mpdf();

foreach( $rows as $row ){

    // Jika id spek server 2 NULL maka tampilkan 2 lembar PDF
    if ( $row["id_spek_server2"] === NULL ) {
        
        include "lembar_pdf/from_display/printMode1.php";

    }

    // Jika Ada maka tampilkan 4 lembar PDF
    elseif ( $row["id_spek_server2"] !== NULL ){

        $id = $row["id_spek_server2"];
        $speks_2 = fetch_data('', "SELECT * FROM spek_server_2 WHERE id_spek_2='$id'");
        foreach( $speks_2 as $spek_2 ){

            include "lembar_pdf/from_display/printMode2.php";

        }


    }
}

$mpdf->writeHTML($html);
$mpdf->Output('Form Colocation Data Center_v2',\Mpdf\Output\Destination::INLINE);

?>