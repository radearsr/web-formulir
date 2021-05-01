<?php 

require "../functions.php";

// Panggil fungsi Dari "functions.php" Dan simpan Dalam Variabel $rows
$rows = fetch_data('',
"SELECT center_table.main_id, DATE_FORMAT(center_table.tanggal, '%d-%m-%Y') AS 'tanggal', data_pemohon.*, data_penanggung.*,spek_server.*,data_ttd.* 
FROM center_table 
JOIN data_pemohon 
ON center_table.id_pemohon = data_pemohon.id 
JOIN data_penanggung 
ON center_table.id_penanggung = data_penanggung.id 
JOIN spek_server 
ON center_table.id_spek_server = spek_server.id_spek 
JOIN data_ttd
ON center_table.id_ttd = data_ttd.id"
);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/font/css/materialdesignicons.min.css">
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <title>Tampilan Data</title>
</head>

<body>
    <nav class="sticky-top navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-md">
            <a class="navbar-brand fs-5 fw-bold" href="#">Simple Database</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="?">Data Formulir</a></li>
                            <li><a class="dropdown-item" href="?page=NamaDinas">Daftar Nama Dinas</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="mt-5 pt-5 container-md">
        <?php
      $queries = [];
      parse_str($_SERVER['QUERY_STRING'], $queries);
      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      switch ($queries['page']) {
        // Tampilan tabel Nama - nama dinas dari database
      	case 'NamaDinas':
      		include 'daftar_dinas/nama_dinas.php';
          break;
          
        // Tampilan Utama
        default:
		      include 'display.php';
		      break;
        }
    ?>
    </div>
</body>
<script src="../../assets/custom/js/custom.js"></script>

</html>