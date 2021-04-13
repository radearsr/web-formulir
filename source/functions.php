<?php 

// Koneksi Ke Databse
$conn = mysqli_connect("localhost", "root", "", "tugas_magang" );

// Fungsi Tambah Data Ke Database
function insertData($no, $tanggal, $opd, $bidang, $alamat, $FirstTelp, $FirstMail, $NmAdmin, $NipAdmin, $JbtAdmin, $MailAdmin, $TelpAdmin, $NmTeknis, $NipTeknis, $JbtTeknis, $MailTeknis, $TelpTeknis, $merk, $ram, $hdd, $psu, $tipe, $proc, $core, $os, $sn, $appServer, $desServer, $nmTerang1, $nipTtd1, $nmTerang2, $nipTtd2){
    global $conn;

    $query = "INSERT INTO data_print
                VALUES
        ('', '$no', '$tanggal', '$opd', '$bidang', '$alamat', '$FirstTelp', '$FirstMail', '$NmAdmin', '$NipAdmin', '$JbtAdmin', '$MailAdmin', '$TelpAdmin', '$NmTeknis', '$NipTeknis', '$JbtTeknis', '$MailTeknis', '$TelpTeknis', '$merk', '$ram', '$hdd', '$psu', '$tipe', '$proc', '$core', '$os', '$sn', '$appServer', '$desServer', '$nmTerang1', '$nipTtd1', '$nmTerang2', '$nipTtd2') 
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

    
}

function fetch_data(){
    global $conn;
    
    $result = mysqli_query($conn, "SELECT * FROM data_print ");

    $rows = [];

    if( mysqli_num_rows($result) > 0 ){

        while( $data = mysqli_fetch_assoc($result) ){
            $rows[] = $data;
        }
        return $rows;
    }

}


?>