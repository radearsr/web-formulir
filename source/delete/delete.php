<?php
require "../functions.php";
$id = $_GET["dt"];

if ( delete($id) > 0 ) {
	echo "
			<script>
				alert('Data Berhasil Dihapus');
				document.location.href='../display-data/display.php';
			</script>
	";
}else{
	echo "
			<script>
				alert('Gagal');
					document.location.href='../display-data/display.php';
			</script>
	";
}


?>