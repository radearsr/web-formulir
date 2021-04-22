<?php 
include "../functions.php";

// Jika Button Perbarui Data Diklik Maka
if ( isset($_POST['ubah-data']) ) {
    require "../data-form.php";
    $id = $_POST["id"];
    $ubah = update($id, $tanggal, $opd, $bidang, $alamat, $FirstTelp, $FirstMail, $NmAdmin, $NipAdmin, $JbtAdmin, $MailAdmin, $TelpAdmin, $NmTeknis, $NipTeknis, $JbtTeknis, $MailTeknis, $TelpTeknis, $merk, $ram, $hdd, $psu, $tipe, $proc, $core, $os, $sn, $appServer, $desServer, $nmTerang1, $nipTtd1, $nmTerang2, $nipTtd2);
    // var_dump($ubah);
    if ( $ubah > 0) {
		echo "
			<script>
				alert('Data Berhasil Diubah');
				document.location.href='display.php';
			</script>
		";
	}else{
		echo "	
		<script>
			alert('Sistem Gagal Mengubah Data');
				document.location.href='display.php';
		</script>
		";
	}
}
?>