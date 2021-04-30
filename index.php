<?php 
 include "source/functions.php";

 $rows = fetch_data('', "SELECT * FROM daftar_dinas");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font/css/materialdesignicons.min.css">
    <title>Tugas Magang</title>
</head>

<body>
    <div class="container-md">
        <div class="row justify-content-center">
            <!-- Main Card -->
            <div class="col-md-7">
                <div class="shadow mt-4 mb-4 card border-secondary">
                    <!-- Card Header -->
                    <div class="card-header bg-secondary bg-gradient text-white">
                        <h3 class="text-center">FORMULIR PERMOHONAN COLOCATION SERVER DI DATA CENTER PEMPROV JATENG</h3>
                    </div>
                    <!-- Akhir Card Header -->

                    <form action="source/print-pdf/print_from_form.php" method="post">
                        <!-- Data Form -->
                        <?php
                                include "source/form/sub-card-1.php";
                                include "source/form/sub-card-2.php";
                                include "source/form/sub-card-3.php";
                                include "source/form/sub-card-4.php";
                                include "source/form/sub-card-5.php";
                        ?>
                        <!-- Data Form -->
                    </form>
                </div>
            </div>
            <!-- Akhir Main Card -->
        </div>
    </div>
</body>
<script src="assets/custom/js/custom.js"></script>

</html>