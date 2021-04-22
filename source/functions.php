<?php 
include "config.php";

// Fungsi Tambah Data Ke Database
function insertData($tanggal, $opd, $bidang, $alamat, $FirstTelp, $FirstMail, $NmAdmin, $NipAdmin, $JbtAdmin, $MailAdmin, $TelpAdmin, $NmTeknis, $NipTeknis, $JbtTeknis, $MailTeknis, $TelpTeknis, $merk, $ram, $hdd, $psu, $tipe, $proc, $core, $os, $sn, $appServer, $desServer, $nmTerang1, $nipTtd1, $nmTerang2, $nipTtd2){
    global $conn;

    $query = "INSERT INTO data_print
                VALUES
        ('', '$tanggal', '$opd', '$bidang', '$alamat', '$FirstTelp', '$FirstMail', '$NmAdmin', '$NipAdmin', '$JbtAdmin', '$MailAdmin', '$TelpAdmin', '$NmTeknis', '$NipTeknis', '$JbtTeknis', '$MailTeknis', '$TelpTeknis', '$merk', '$ram', '$hdd', '$psu', '$tipe', '$proc', '$core', '$os', '$sn', '$appServer', '$desServer', '$nmTerang1', '$nipTtd1', '$nmTerang2', '$nipTtd2') 
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

    
}

// Fungsi Untuk Menampilkan Data Dari Database
function fetch_data(){
    global $conn;
    
    $result = mysqli_query($conn, "SELECT * FROM data_print ");

    $rows = [];

    $error = 1;

    if( mysqli_num_rows($result) > 0 ){

        while( $data = mysqli_fetch_assoc($result) ){
            $rows[] = $data;
        }
        return $rows;
    }else{

        return $error;

    }

}

// fungsi untuk menghapus Data dari Database
function delete($id){

    global $conn;

    mysqli_query($conn, "DELETE FROM data_print WHERE id='$id'");

    return mysqli_affected_rows($conn);


}

// Fungsi untuk Update Data dari database
function update($id, $tanggal, $opd, $bidang, $alamat, $FirstTelp, $FirstMail, $NmAdmin, $NipAdmin, $JbtAdmin, $MailAdmin, $TelpAdmin, $NmTeknis, $NipTeknis, $JbtTeknis, $MailTeknis, $TelpTeknis, $merk, $ram, $hdd, $psu, $tipe, $proc, $core, $os, $sn, $appServer, $desServer, $nmTerang1, $nipTtd1, $nmTerang2, $nipTtd2){
    global $conn;

    $query = (
        " UPDATE data_print SET
          tanggal       = '$tanggal',
          opd           = '$opd',
          bidang        = '$bidang',
          alamat        = '$alamat',
          firstTelp     = '$FirstTelp',
          firstMail     = '$FirstMail',
          nmAdmin       = '$NmAdmin',
          nipAdmin      = '$NipAdmin',
          jbtAdmin      = '$JbtAdmin', 
          mailAdmin     = '$MailAdmin', 
          telpAdmin     = '$TelpAdmin',
          nmTeknis      = '$NmTeknis',
          nipTeknis     = '$NipTeknis',
          jbtTeknis     = '$JbtTeknis',
          mailTeknis    = '$MailTeknis',
          telpTeknis    = '$TelpTeknis',
          merk          = '$merk',
          ram           = '$ram',
          hdd           = '$hdd',
          psu           = '$psu',
          tipe          = '$tipe',
          proc          = '$proc',
          core          = '$core',
          os            = '$os',
          sn            = '$sn',
          appServer     = '$appServer',
          desServer     = '$desServer',
          nmTerang1     = '$nmTerang1',
          nipTtd1       = '$nipTtd1',
          nmTerang2     = '$nmTerang2',
          nipTtd2       = '$nipTtd2'
          WHERE id = '$id'
        "
    );

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    // return mysqli_error($conn);
}


?>