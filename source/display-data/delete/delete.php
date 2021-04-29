<?php
require "../../functions.php";

if( isset($_GET["dtM1"]) ){

	$id = $_GET["dtM1"];

	$status_del = delete("DELETE center_table, data_pemohon, data_penanggung, data_ttd, spek_server
	FROM center_table 
	JOIN data_pemohon 
	ON center_table.id_pemohon = data_pemohon.id 
	JOIN data_penanggung 
	ON center_table.id_penanggung = data_penanggung.id
	JOIN spek_server
	ON center_table.id_spek_server = spek_server.id_spek
	JOIN data_ttd 
	ON center_table.id_ttd = data_ttd.id 
	WHERE center_table.main_id ='$id'"
	);
	if ( $status_del > 0 ) {
		echo "
				<script>
					alert('Data Berhasil Dihapus');
					document.location.href='../main_display.php';
				</script>
		";
	}else{
		echo "
				<script>
					alert('Gagal');
						document.location.href='../main_display.php';
				</script>
		";
	}

}
elseif( isset($_GET["dtM2"]) ){

	$id = $_GET["dtM2"];

	$status_del = delete("DELETE center_table, data_pemohon, data_penanggung, spek_server, spek_server_2, data_ttd 
	FROM center_table 
	JOIN data_pemohon 
	ON center_table.id_pemohon = data_pemohon.id 
	JOIN data_penanggung 
	ON center_table.id_penanggung = data_penanggung.id 
	JOIN spek_server 
	ON center_table.id_spek_server = spek_server.id_spek
	JOIN spek_server_2
	ON spek_server.id_spek_server2 = spek_server_2.id_spek_2
	JOIN data_ttd
	ON center_table.id_ttd = data_ttd.id
	WHERE center_table.main_id = '$id'"
	);

	if ( $status_del > 0 ) {
		echo "
				<script>
					alert('Data Berhasil Dihapus');
					document.location.href='../main_display.php';
				</script>
		";
	}else{
		echo "
				<script>
					alert('Gagal');
						document.location.href='../main_display.php';
				</script>
		";
	}

}elseif ( isset($_GET["dtdns"]) ) {
	
	$id = $_GET["dtdns"];

	$status_del = delete("DELETE FROM daftar_dinas WHERE id='$id'");

	if ( $status_del > 0 ) {
		echo "
				<script>
					alert('Data Berhasil Dihapus');
					document.location.href='../main_display.php?page=NamaDinas';
				</script>
		";
	}else{
		echo "
				<script>
					alert('Gagal');
						document.location.href='../main_display.php?page=NamaDinas';
				</script>
		";
	}
}






?>