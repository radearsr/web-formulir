<?php 
include "../../functions.php";

// Jika Button Perbarui Data(Formulir) Diklik Maka
if ( isset($_POST['ubah-data']) ) {
    require "../../data-form.php";

	if ( !isset($_POST["child-merk"]) && isset($_POST["id"]) ){

		$id = $_POST["id"];
		$ubah = update($id, $opd, $bidang, $alamat, $FirstTelp, $FirstMail, $NmAdmin, $NipAdmin, $JbtAdmin, $MailAdmin, $TelpAdmin, $NmTeknis, $NipTeknis, $JbtTeknis, $MailTeknis, $TelpTeknis, $merk, $ram, $hdd, $psu, $tipe, $proc, $core, $os, $sn, $appServer, $desServer, $nmTerang1, $nipTtd1, $nmTerang2, $nipTtd2,'', '', '', '', '', '','','','','','');
		// var_dump($ubah);
		if ( $ubah > 0) {
			echo "
				<script>
					alert('Data Berhasil Diubah');
					document.location.href='../main_display.php';
				</script>
			";
		}
		echo "	
		<script>
			alert('Sistem Gagal Mengubah Data');
				document.location.href='../main_display.php';
		</script>
		";

	}
	elseif ( isset($_POST["child-merk"]) && isset($_POST["id"]) ) {

		$id = $_POST["id"];
		$ubah = update($id,  $opd, $bidang, $alamat, $FirstTelp, $FirstMail, $NmAdmin, $NipAdmin, $JbtAdmin, $MailAdmin, $TelpAdmin, $NmTeknis, $NipTeknis, $JbtTeknis, $MailTeknis, $TelpTeknis, $merk, $ram, $hdd, $psu, $tipe, $proc, $core, $os, $sn, $appServer, $desServer, $nmTerang1, $nipTtd1, $nmTerang2, $nipTtd2, $merk2, $ram2, $hdd2, $psu2, $tipe2, $proc2, $core2, $os2, $sn2, $appServer2, $desServer2);
		// var_dump($ubah);
		if ( $ubah > 0) {
			echo "
				<script>
					alert('Data Berhasil Diubah');
					document.location.href='../main_display.php';
				</script>
			";
		}
		echo "	
		<script>
			alert('Sistem Gagal Mengubah Data');
				document.location.href='../main_display.php';
		</script>
		";
	}
	

}

// Jika Button Perbarui Data(Nama Dinas) Diklik Maka
elseif ( isset($_POST["btn-edit-dinas"]) ) {
		
	$id   = $_POST["id"];
	$nama = $_POST["nama_dinas"];
	
	$sql = "UPDATE daftar_dinas SET nama_dinas='$nama'";

	$ubah = mysqli_query($conn, $sql);

	// var_dump($ubah);
	if ( $ubah > 0) {
		echo "
			<script>
				alert('Data Berhasil Diubah');
				document.location.href='../main_display.php?page=NamaDinas';
			</script>
		";
	}
	echo "	
	<script>
		alert('Sistem Gagal Mengubah Data');
			document.location.href='../main_display.php?page=NamaDinas';
	</script>
	";

}
?>