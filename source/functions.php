<?php 
include "config.php";

// Fungsi Insert Data Tabel Spek Server 2
function inSpekServer2($merk2, $ram2, $hdd2, $psu2, $tipe2, $proc2, $core2, $os2, $sn2, $appServer2, $desServer2){

    global $conn;

    // Query Untuk Insert Data ke Tabel spek_server2
    $query_spek_server2 = "INSERT INTO spek_server_2
            VALUES
            ('', '$merk2', '$ram2', '$hdd2', '$psu2', '$tipe2', '$proc2', '$core2', '$os2', '$sn2', '$appServer2', '$desServer2')
    ";

    // Insert ke Tabel spek_server2
    mysqli_query($conn, $query_spek_server2);

    // Return Nilai
    return mysqli_insert_id($conn);
}


// Fungsi Insert Data Tabel Spek Server 1
function inSpekServer1($merk, $ram, $hdd, $psu, $tipe, $proc, $core, $os, $sn, $appServer, $desServer, $id_spek_2){

    global $conn;

    if( $id_spek_2 === NULL ){
        // Query Untuk Insert Data ke Tabel spek_server
        $query_spek_server = "INSERT INTO spek_server
                VALUES
                ('', '$merk', '$ram', '$hdd', '$psu', '$tipe', '$proc', '$core', '$os', '$sn', '$appServer', '$desServer', NULL)
            ";
            
        // Insert ke Tabel spek_server
        mysqli_query($conn, $query_spek_server);

        // Return Nilai
        return mysqli_error($conn);
    }
    // Query Untuk Insert Data ke Tabel spek_server
    $query_spek_server = "INSERT INTO spek_server
                    VALUES
            ('', '$merk', '$ram', '$hdd', '$psu', '$tipe', '$proc', '$core', '$os', '$sn', '$appServer', '$desServer', '$id_spek_2')
    ";
        
    // Insert ke Tabel spek_server
    mysqli_query($conn, $query_spek_server);

    // Return Nilai
    return mysqli_error($conn);

}


// Fungsi Tambah Data Ke Database
function insertData($opd, $bidang, $alamat, $FirstTelp, $FirstMail, $NmAdmin, $NipAdmin, $JbtAdmin, $MailAdmin, $TelpAdmin, $NmTeknis, $NipTeknis, $JbtTeknis, $MailTeknis, $TelpTeknis, $nmTerang1, $nipTtd1, $nmTerang2, $nipTtd2){
    global $conn;

    $id_spek = mysqli_insert_id($conn);

    //===========================Tabel Data Pemohon============================
    $query_dt_pemohon = "INSERT INTO data_pemohon 
            VALUES
            ('', '$opd', '$bidang', '$alamat', '$FirstTelp', '$FirstMail')
    ";
    // Insert Ke Tabel data_pemohon 
    mysqli_query($conn, $query_dt_pemohon);
    // Cek Apakah Insert Berhasil
    if ( mysqli_affected_rows($conn) < 1 ) {
        return mysqli_error($conn);
    }
    // Dapatkan Id yang baru saja diinsert
    $id_pemohon = mysqli_insert_id($conn);


    //===========================Tabel Data Penanggung=========================
    $query_dt_penanggung = "INSERT INTO data_penanggung 
            VALUES
            ('', '$NmAdmin', '$NipAdmin', '$JbtAdmin', '$MailAdmin', '$TelpAdmin', '$NmTeknis', '$NipTeknis', '$JbtTeknis', '$MailTeknis', '$TelpTeknis')
    "; 
    // Insert Ke Tabel data_penanggung
    mysqli_query($conn, $query_dt_penanggung);
    // Cek Apakah Insert Berhasil
    if ( mysqli_affected_rows($conn) < 1 ) {
        return mysqli_error($conn);
    }
    // Dapatkan Id yang baru saja diinsert
    $id_penanggung = mysqli_insert_id($conn);


    //===========================Tabel Data TTD===============================
    $query_dt_ttd = "INSERT INTO data_ttd
            VALUES
            ('', '$nmTerang1', '$nipTtd1', '$nmTerang2', '$nipTtd2')
    ";
    // Insert ke tabel data_ttd
    mysqli_query($conn, $query_dt_ttd);
    // Cek Apakah Data Berhasil Diinsert
    if ( mysqli_affected_rows($conn) < 1 ) {
        return mysqli_error($conn);
    }
    // Dapatkan Id yang baru saja diinsert
    $id_ttd = mysqli_insert_id($conn);

    
    //===========================Tabel Center Table===========================
    $date = date('Y-m-d');
    $query_center_table = "INSERT INTO center_table
                VALUES
                ('','$date', '$id_pemohon', '$id_penanggung', '$id_ttd', '$id_spek')
    ";

    mysqli_query($conn, $query_center_table);
    
    // Cek Apakah Data Berhasil Diinsert
    if ( mysqli_affected_rows($conn) < 1 ) {
        return mysqli_error($conn);
    }

    return mysqli_affected_rows($conn);
}

// Fungsi Untuk Menampilkan Data Dari Database
function fetch_data($id, $query){
    global $conn;
    
    $result = mysqli_query($conn, $query);
    $rows = [];

    // Jika variabel $id adalah kosong maka lakukan script dibawah ini
    if( $id === '' ){

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

    // Jika Memiliki Nilai Maka lakukan Script dibawah ini
    while( $data = mysqli_fetch_assoc($result) ){

        $rows [] = $data;

    }
    return $rows;

}


// fungsi untuk menghapus Data dari Database
function delete($query_delete){

    global $conn;

    mysqli_query($conn, $query_delete);

    return mysqli_affected_rows($conn);


}

// Fungsi untuk Update Data dari database
function update($id, $opd, $bidang, $alamat, $FirstTelp, $FirstMail, $NmAdmin, $NipAdmin, $JbtAdmin, $MailAdmin, $TelpAdmin, $NmTeknis, $NipTeknis, $JbtTeknis, $MailTeknis, $TelpTeknis, $merk, $ram, $hdd, $psu, $tipe, $proc, $core, $os, $sn, $appServer, $desServer, $nmTerang1, $nipTtd1, $nmTerang2, $nipTtd2, $merk2, $ram2, $hdd2, $psu2, $tipe2, $proc2, $core2, $os2, $sn2, $appServer2, $desServer2){
    global $conn;

    if ( $merk2 !== '' ){

        $query = ("UPDATE center_table AS a
        JOIN data_pemohon AS b 
        ON a.id_pemohon = b.id
        JOIN data_penanggung AS c
        ON a.id_penanggung = c.id
        JOIN spek_server AS d
        ON a.id_spek_server = d.id_spek
        JOIN spek_server_2 e
        ON d.id_spek_server2 = e.id_spek_2
        JOIN data_ttd AS f
        ON a.id_ttd = f.id
        SET 
        b.opd        = '$opd',
        b.bidang     = '$bidang',
        b.alamat     = '$alamat',
        b.telp       = '$FirstTelp',
        b.email      = '$FirstMail',
        c.nmAdmin    = '$NmAdmin',
        c.nipAdmin   = '$NipAdmin',
        c.jbtAdmin   = '$JbtAdmin',
        c.mailAdmin  = '$MailAdmin',
        c.telpAdmin  = '$TelpAdmin',
        c.nmTeknis   = '$NmTeknis',
        c.nipTeknis  = '$NipTeknis',
        c.jbtTeknis  = '$JbtTeknis',
        c.mailTeknis = '$MailTeknis',
        c.telpTeknis = '$TelpTeknis',
        d.merk       = '$merk',
        d.ram        = '$ram',
        d.hdd        = '$hdd',
        d.psu        = '$psu',
        d.tipe       = '$tipe',
        d.proc       = '$proc',
        d.core       = '$core',
        d.os         = '$os',
        d.sn         = '$sn',
        d.app_server = '$appServer',
        d.des_server = '$desServer',
        e.merk       = '$merk2',
        e.ram        = '$ram2',
        e.hdd        = '$hdd2',
        e.psu        = '$psu2',
        e.tipe       = '$tipe2',
        e.proc       = '$proc2',
        e.core       = '$core2',
        e.os         = '$os2',
        e.sn         = '$sn2',
        e.app_server = '$appServer2',
        e.des_server = '$desServer2',
        f.nm_terang1 = '$nmTerang1',
        f.nip_ttd1   = '$nipTtd1',
        f.nm_terang2 = '$nmTerang2',
        f.nip_ttd2   = '$nipTtd2'
        WHERE a.main_id = '$id' "
    );

    }
    elseif ( $merk2 === '' ) {
        
        $query = ("UPDATE center_table AS a
        JOIN data_pemohon AS b 
        ON a.id_pemohon = b.id
        JOIN data_penanggung AS c
        ON a.id_penanggung = c.id
        JOIN spek_server AS d
        ON a.id_spek_server = d.id_spek
        JOIN data_ttd AS e
        ON a.id_ttd = e.id
        SET 
        b.opd        = '$opd',
        b.bidang     = '$bidang',
        b.alamat     = '$alamat',
        b.telp       = '$FirstTelp',
        b.email      = '$FirstMail',
        c.nmAdmin    = '$NmAdmin',
        c.nipAdmin   = '$NipAdmin',
        c.jbtAdmin   = '$JbtAdmin',
        c.mailAdmin  = '$MailAdmin',
        c.telpAdmin  = '$TelpAdmin',
        c.nmTeknis   = '$NmTeknis',
        c.nipTeknis  = '$NipTeknis',
        c.jbtTeknis  = '$JbtTeknis',
        c.mailTeknis = '$MailTeknis',
        c.telpTeknis = '$TelpTeknis',
        d.merk       = '$merk',
        d.ram        = '$ram',
        d.hdd        = '$hdd',
        d.psu        = '$psu',
        d.tipe       = '$tipe',
        d.proc       = '$proc',
        d.core       = '$core',
        d.os         = '$os',
        d.sn         = '$sn',
        d.app_server = '$appServer',
        d.des_server = '$desServer',
        e.nm_terang1 = '$nmTerang1',
        e.nip_ttd1   = '$nipTtd1',
        e.nm_terang2 = '$nmTerang2',
        e.nip_ttd2   = '$nipTtd2'
        WHERE a.main_id = '$id' "
    );

    }
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    // return mysqli_error($conn);
}


?>