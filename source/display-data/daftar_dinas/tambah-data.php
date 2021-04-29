<?php 

 include "../../config.php";

 foreach ($_POST["nama_dinas"] as $key => $val) {
     
    $nama = $_POST["nama_dinas"][$key];

    if ( $nama !== '' ) {
        $sql = "INSERT INTO daftar_dinas VALUES ('',";
        $sql .= "'$nama')";
        
        mysqli_query($conn, $sql) or die($sql);

        header('Location: ../main_display.php?page=NamaDinas');
    }
    


 }

?>