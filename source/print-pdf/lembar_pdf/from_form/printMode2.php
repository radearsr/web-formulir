<?php 
$html = ('
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="../../assets/custom/css/print.pdf.css">
</head>

<body>

    <!-- =====================================FORM Ke 1============================ -->
    <!-- Bagian Header Laporan -->
    <div class="start-header">
        <table cellspacing="0" class="tabel">
            <tr>
                <td class="gambar-header" rowspan="3"><img src="img/logo-jateng.jpg" width="85"></td>
                <td class="f-bold subtitle-header" rowspan="3">FORMULIR PERMOHONAN <span
                        class="cetak-miring">CO-LOCATION</span></td>
                <td class="ket">No</td>
                <td class="input-dt-header" contenteditable="true"></td>
            </tr>
            <tr>
                <td class="ket">Tanggal</td>
                <td class="input-dt-header" contenteditable="true">'.$tanggal.'</td>
            </tr>
            <tr>
                <td class="ket">Halaman</td>
                <td class="input-dt-header" contenteditable="true">1</td>
            </tr>
        </table>
    </div>
    <!-- Bagian Akhir Header Laporan -->

    <!-- Main Page -->
    <div class="main">
        <!-- Bagian Note Awalan -->
        <h4>FORMULIR PERMOHONAN <span class="cetak-miring">COLOCATION</span> SERVER DI <span class="cetak-miring">DATA
                CENTER</span> PEMPROV JATENG</h4>
        <ol>
            <li>Isilah semua data berikut di bawah ini dengan menggunakan huruf balok.</li>
            <li>Setelah diisi, formulir diserahkan ke Bidang TIK, Diskominfo Provinsi Jawa Tengah, Jl. Menteri Supeno I
                / 2 Semarang 50243. Telepon : (024) 08319140</li>
        </ol>
        <!-- Bagian Akhir Note Awalan -->

        <!-- Tabel Data Pemohon -->
        <div class="mgb-20 dt-pemohon">
            <table class="tabel">
                <tr>
                    <td class="fz-18 pd-8 f-bold t-center" colspan="2">DATA INSTANSI PEMOHON</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-pemohon">OPD</td>
                    <td class="pl-6 input-dt-pemohon">'.$opd.'</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-pemohon">Bidang / Bagian / UPTD</td>
                    <td class="pl-6">'.$bidang.'</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-pemohon">Alamat</td>
                    <td class="pl-6">'.$alamat.'</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-pemohon">No. Telepon</td>
                    <td class="pl-6">'.$FirstTelp.'</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-pemohon">Email</td>
                    <td class="pl-6">'.$FirstMail.'</td>
                </tr>
            </table>
        </div>
        <!-- Akhir Tabel Data Pemohon -->



        <!-- Tabel Data Penangung Jawab -->
        <div class="mgb-10 dt-penanggung">
            <table class="tabel">
                <!-- title Tabel -->
                <tr>
                    <td class="fz-18 pd-8 f-bold t-center" colspan="4">DATA PENANGGUNG JAWAB SERVER</td>
                </tr>

                <!-- Subtitle Tabel -->
                <tr>
                    <td class="fz-15 pd-8 t-center f-bold" colspan="2">Penanggung Jawab Administratif</td>
                    <td class="fz-15 pd-8 t-center f-bold" colspan="2">Penanggung Jawab Teknis</td>
                </tr>

                <!-- Isi/Form Tabel -->
                <tr>
                    <td class="pd-8 title-input-penanggung">Nama</td>
                    <td class="pl-6 input-dt-penanggung">'.$NmAdmin.'</td>
                    <td class="pd-8 title-input-penanggung">Nama</td>
                    <td class="pl-6 input-dt-penanggung">'.$NmTeknis.'</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-penanggung">NIP</td>
                    <td class="pl-6 input-dt-penanggung">'.$NipAdmin.'</td>
                    <td class="pd-8 title-input-penanggung">NIP</td>
                    <td class="pl-6 input-dt-penanggung">'.$NipTeknis.'</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-penanggung">Jabatan</td>
                    <td class="pl-6 input-dt-penanggung">'.$JbtAdmin.'</td>
                    <td class="pd-8 title-input-penanggung">Jabatan</td>
                    <td class="pl-6 input-dt-penanggung">'.$JbtTeknis.'</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-penanggung">Email</td>
                    <td class="pl-6 input-dt-penanggung">'.$MailAdmin.'</td>
                    <td class="pd-8 title-input-penanggung">Email</td>
                    <td class="pl-6 input-dt-penanggung">'.$MailTeknis.'</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-penanggung">No. Telp / HP</td>
                    <td class="pl-6 input-dt-penanggung">'.$TelpAdmin.'</td>
                    <td class="pd-8 title-input-penanggung">No. Telp / HP</td>
                    <td class="pl-6 input-dt-penanggung">'.$TelpTeknis.'</td>
                </tr>
            </table>
        </div>
        <!-- Akhir Tabel Data Penangung Jawab -->

        <!-- Tabel Data Server -->
        <div class="mgb-10 dt-server">
            <table class="tabel">
                <!-- title tabel -->
                <tr>
                    <td class="fz-18 pd-8 f-bold t-center" colspan="5">DATA SERVER</td>
                </tr>

                <!-- Isi/Form Tabel -->
                <tr>
                    <td class="title-input-server">Merk dan tipe server</td>
                    <td class="pl-6" colspan="4">'.$merk.'</td>
                </tr>
                <tr>
                    <td class="title-input-server" rowspan="3">Spesifikasi server</td>
                    <td class="t-in-dt-server">RAM= '.$ram.'GB</td>
                    <td class="t-in-dt-server">HDD= '.$hdd.'GB</td>
                    <td class="t-in-dt-server">PSU= '.$psu.'W</td>
                    <td class="t-in-dt-server">TYPE= '.$tipe.'(U)</td>
                </tr>
                <tr>
                    <td class="t-in-dt-server" colspan="2">PROC= '.$proc.'</td>
                    <td colspan="2">CORE= '.$core.'</td>
                </tr>
                <tr>
                    <td class="t-in-dt-server" colspan="2">OS= '.$os.'</td>
                    <td colspan="2">SN= '.$sn.'</td>
                </tr>
                <tr>
                    <td class="title-input-server">Aplikasi yang ada di dalam server</td>
                    <td colspan="4">'.$appServer.'</td>
                </tr>
                <tr>
                    <td class="title-input-server">Deskripsi aplikasi</td>
                    <td colspan="4">'.$desServer.'</td>
                </tr>
            </table>
        </div>
        <!-- Akhir Tabel Data Server -->


        <!-- Tabel info Persetuan -->
        <div class="mgb-5 nt-setuju">
            <table class="tabel">
                <!-- title Tabel -->
                <tr>
                    <td class="fz-18 f-bold t-center">PERSETUJUAN</td>
                </tr>
                <!-- Note -->
                <tr>
                    <td class="note-end">Dengan ini saya menyatakan bahwa data di atas adalah benar. Saya telah membaca
                        dan setuju untuk mematuhi semua aturan yang ditentukan dan berlaku bagi seluruh pengguna
                        fasilitas layanan Data Center Pemerintah Provinsi Jawa Tengah.</td>
                </tr>
            </table>
        </div>
        <!-- Akhir Tabel info Persetuan -->

    </div>
    <!-- Akhir Main Page -->


    <!-- Bagian Header Laporan -->
    <div class="end-header">
        <div class="container">
            <table cellspacing="0" class="tabel">
                <tr>
                    <td class="gambar-header" rowspan="3"><img src="img/logo-jateng.jpg" width="78"></td>
                    <td class="f-bold subtitle-header" rowspan="3">FORMULIR PERMOHONAN <span
                            class="cetak-miring">CO-LOCATION</span></td>
                    <td class="ket">No</td>
                    <td class="input-dt-header" contenteditable="true"></td>
                </tr>
                <tr>
                    <td class="ket">Tanggal</td>
                    <td class="input-dt-header" contenteditable="true">'.$tanggal.'</td>
                </tr>
                <tr>
                    <td class="ket">Halaman</td>
                    <td class="input-dt-header" contenteditable="true">2</td>
                </tr>
            </table>
        </div>
    </div>
    <!-- Bagian Akhir Header Laporan -->

    <br>

    <!-- Bagian Form TTD -->
    <div class="form-ttd">
        <table class="tabel">
            <tr>
                <td class="bagian-ttd">
                    Mengetahui,
                    <br>
                    Kepala Bidang/Seksi (OPD yang akan colocation)
                    <br>
                    <br><br><br><br>


                    <span class="t-unline">
                        '.$nmTerang1.'
                    </span>
                    <br>
                    NIP.'.$nipTtd1.'
                </td>
                <td class="bagian-ttd">
                    <div class="body-ttd">
                        Penanggung Jawab Administratif
                        <br><br><br><br><br><br>

                        <span class="t-unline">
                            '.$nmTerang2.'
                        </span>
                        <br>
                        NIP.'.$nipTtd2.'
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <!-- Akhir Bagian Form TTD -->

    <br>

    <!-- Form Administrator -->
    <div class="form-administrator">
        <table class="tabel">
            <tr>
                <td class="pd-8 f-bold t-center" colspan="2">DIISI OLEH ADMINISTRATOR DATA CENTER</td>
            </tr>
            <tr>
                <td class="pd-7">Diterima Tanggal : </td>
                <td rowspan="2" class="pd-8 ttd-admin">
                    Administrator
                    <br><br><br><br><br><br>
                    <span class="t-unline">AGUS AMINUDIN, S.KOM</span>
                    <br>
                    NIP. 197808062009011008
                </td>
            </tr>
            <tr>
                <td class="in-dt-admin">
                    Diproses tanggal :
                    <br><br>
                    Berlaku sampai :
                </td>
            </tr>
        </table>
    </div>
    <!-- Akhir Form Administrator -->

    <!-- Note Akhir -->
    <div class="tit-footer-note">
        <p>Catatan :
        <div class="footer-note">
            <ul>
                <li>- Data Center Pemerintah Provinsi Jawa Tengah tidak menerima colocation server berbentuk tower.</li>
                <li>- Setiap software dan aplikasi yang diinstal ke dalam server adalah software legal dan memenuhi
                    standard keamanan informasi.</li>
            </ul>
        </div>
        </p>
    </div>
    <!-- =====================================FORM Ke 2============================ -->

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Bagian Header Laporan -->
    <div class="start-header">
        <table cellspacing="0" class="tabel">
            <tr>
                <td class="gambar-header" rowspan="3"><img src="img/logo-jateng.jpg" width="85"></td>
                <td class="f-bold subtitle-header" rowspan="3">FORMULIR PERMOHONAN <span
                        class="cetak-miring">CO-LOCATION</span></td>
                <td class="ket">No</td>
                <td class="input-dt-header" contenteditable="true"></td>
            </tr>
            <tr>
                <td class="ket">Tanggal</td>
                <td class="input-dt-header" contenteditable="true">'.$tanggal.'</td>
            </tr>
            <tr>
                <td class="ket">Halaman</td>
                <td class="input-dt-header" contenteditable="true">1</td>
            </tr>
        </table>
    </div>
    <!-- Bagian Akhir Header Laporan -->

    <!-- Main Page -->
    <div class="main">
        <!-- Bagian Note Awalan -->
        <h4>FORMULIR PERMOHONAN <span class="cetak-miring">COLOCATION</span> SERVER DI <span class="cetak-miring">DATA
                CENTER</span> PEMPROV JATENG</h4>
        <ol>
            <li>Isilah semua data berikut di bawah ini dengan menggunakan huruf balok.</li>
            <li>Setelah diisi, formulir diserahkan ke Bidang TIK, Diskominfo Provinsi Jawa Tengah, Jl. Menteri Supeno I
                / 2 Semarang 50243. Telepon : (024) 08319140</li>
        </ol>
        <!-- Bagian Akhir Note Awalan -->

        <!-- Tabel Data Pemohon -->
        <div class="mgb-20 dt-pemohon">
            <table class="tabel">
                <tr>
                    <td class="fz-18 pd-8 f-bold t-center" colspan="2">DATA INSTANSI PEMOHON</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-pemohon">OPD</td>
                    <td class="pl-6 input-dt-pemohon">'.$opd.'</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-pemohon">Bidang / Bagian / UPTD</td>
                    <td class="pl-6">'.$bidang.'</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-pemohon">Alamat</td>
                    <td class="pl-6">'.$alamat.'</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-pemohon">No. Telepon</td>
                    <td class="pl-6">'.$FirstTelp.'</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-pemohon">Email</td>
                    <td class="pl-6">'.$FirstMail.'</td>
                </tr>
            </table>
        </div>
        <!-- Akhir Tabel Data Pemohon -->



        <!-- Tabel Data Penangung Jawab -->
        <div class="mgb-10 dt-penanggung">
            <table class="tabel">
                <!-- title Tabel -->
                <tr>
                    <td class="fz-18 pd-8 f-bold t-center" colspan="4">DATA PENANGGUNG JAWAB SERVER</td>
                </tr>

                <!-- Subtitle Tabel -->
                <tr>
                    <td class="fz-15 pd-8 t-center f-bold" colspan="2">Penanggung Jawab Administratif</td>
                    <td class="fz-15 pd-8 t-center f-bold" colspan="2">Penanggung Jawab Teknis</td>
                </tr>

                <!-- Isi/Form Tabel -->
                <tr>
                    <td class="pd-8 title-input-penanggung">Nama</td>
                    <td class="pl-6 input-dt-penanggung">'.$NmAdmin.'</td>
                    <td class="pd-8 title-input-penanggung">Nama</td>
                    <td class="pl-6 input-dt-penanggung">'.$NmTeknis.'</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-penanggung">NIP</td>
                    <td class="pl-6 input-dt-penanggung">'.$NipAdmin.'</td>
                    <td class="pd-8 title-input-penanggung">NIP</td>
                    <td class="pl-6 input-dt-penanggung">'.$NipTeknis.'</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-penanggung">Jabatan</td>
                    <td class="pl-6 input-dt-penanggung">'.$JbtAdmin.'</td>
                    <td class="pd-8 title-input-penanggung">Jabatan</td>
                    <td class="pl-6 input-dt-penanggung">'.$JbtTeknis.'</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-penanggung">Email</td>
                    <td class="pl-6 input-dt-penanggung">'.$MailAdmin.'</td>
                    <td class="pd-8 title-input-penanggung">Email</td>
                    <td class="pl-6 input-dt-penanggung">'.$MailTeknis.'</td>
                </tr>
                <tr>
                    <td class="pd-8 title-input-penanggung">No. Telp / HP</td>
                    <td class="pl-6 input-dt-penanggung">'.$TelpAdmin.'</td>
                    <td class="pd-8 title-input-penanggung">No. Telp / HP</td>
                    <td class="pl-6 input-dt-penanggung">'.$TelpTeknis.'</td>
                </tr>
            </table>
        </div>
        <!-- Akhir Tabel Data Penangung Jawab -->

        <!-- Tabel Data Server -->
        <div class="mgb-10 dt-server">
            <table class="tabel">
                <!-- title tabel -->
                <tr>
                    <td class="fz-18 pd-8 f-bold t-center" colspan="5">DATA SERVER</td>
                </tr>

                <!-- Isi/Form Tabel -->
                <tr>
                    <td class="title-input-server">Merk dan tipe server</td>
                    <td class="pl-6" colspan="4">'.$merk2.'</td>
                </tr>
                <tr>
                    <td class="title-input-server" rowspan="3">Spesifikasi server</td>
                    <td class="t-in-dt-server">RAM= '.$ram2.'GB</td>
                    <td class="t-in-dt-server">HDD= '.$hdd2.'GB</td>
                    <td class="t-in-dt-server">PSU= '.$psu2.'W</td>
                    <td class="t-in-dt-server">TYPE= '.$tipe2.'(U)</td>
                </tr>
                <tr>
                    <td class="t-in-dt-server" colspan="2">PROC= '.$proc2.'</td>
                    <td colspan="2">CORE= '.$core2.'</td>
                </tr>
                <tr>
                    <td class="t-in-dt-server" colspan="2">OS= '.$os2.'</td>
                    <td colspan="2">SN= '.$sn2.'</td>
                </tr>
                <tr>
                    <td class="title-input-server">Aplikasi yang ada di dalam server</td>
                    <td colspan="4">'.$appServer2.'</td>
                </tr>
                <tr>
                    <td class="title-input-server">Deskripsi aplikasi</td>
                    <td colspan="4">'.$desServer2.'</td>
                </tr>
            </table>
        </div>
        <!-- Akhir Tabel Data Server -->


        <!-- Tabel info Persetuan -->
        <div class="mgb-5 nt-setuju">
            <table class="tabel">
                <!-- title Tabel -->
                <tr>
                    <td class="fz-18 f-bold t-center">PERSETUJUAN</td>
                </tr>
                <!-- Note -->
                <tr>
                    <td class="note-end">Dengan ini saya menyatakan bahwa data di atas adalah benar. Saya telah membaca
                        dan setuju untuk mematuhi semua aturan yang ditentukan dan berlaku bagi seluruh pengguna
                        fasilitas layanan Data Center Pemerintah Provinsi Jawa Tengah.</td>
                </tr>
            </table>
        </div>
        <!-- Akhir Tabel info Persetuan -->

    </div>
    <!-- Akhir Main Page -->


    <!-- Bagian Header Laporan -->
    <div class="end-header">
        <div class="container">
            <table cellspacing="0" class="tabel">
                <tr>
                    <td class="gambar-header" rowspan="3"><img src="img/logo-jateng.jpg" width="78"></td>
                    <td class="f-bold subtitle-header" rowspan="3">FORMULIR PERMOHONAN <span
                            class="cetak-miring">CO-LOCATION</span></td>
                    <td class="ket">No</td>
                    <td class="input-dt-header" contenteditable="true"></td>
                </tr>
                <tr>
                    <td class="ket">Tanggal</td>
                    <td class="input-dt-header" contenteditable="true">'.$tanggal.'</td>
                </tr>
                <tr>
                    <td class="ket">Halaman</td>
                    <td class="input-dt-header" contenteditable="true">2</td>
                </tr>
            </table>
        </div>
    </div>
    <!-- Bagian Akhir Header Laporan -->

    <br>

    <!-- Bagian Form TTD -->
    <div class="form-ttd">
        <table class="tabel">
            <tr>
                <td class="bagian-ttd">
                    Mengetahui,
                    <br>
                    Kepala Bidang/Seksi (OPD yang akan colocation)
                    <br>
                    <br><br><br><br>


                    <span class="t-unline">
                        '.$nmTerang1.'
                    </span>
                    <br>
                    NIP.'.$nipTtd1.'
                </td>
                <td class="bagian-ttd">
                    <div class="body-ttd">
                        Penanggung Jawab Administratif
                        <br><br><br><br><br><br>

                        <span class="t-unline">
                            '.$nmTerang2.'
                        </span>
                        <br>
                        NIP.'.$nipTtd2.'
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <!-- Akhir Bagian Form TTD -->

    <br>

    <!-- Form Administrator -->
    <div class="form-administrator">
        <table class="tabel">
            <tr>
                <td class="pd-8 f-bold t-center" colspan="2">DIISI OLEH ADMINISTRATOR DATA CENTER</td>
            </tr>
            <tr>
                <td class="pd-7">Diterima Tanggal : </td>
                <td rowspan="2" class="pd-8 ttd-admin">
                    Administrator
                    <br><br><br><br><br><br>
                    <span class="t-unline">AGUS AMINUDIN, S.KOM</span>
                    <br>
                    NIP. 197808062009011008
                </td>
            </tr>
            <tr>
                <td class="in-dt-admin">
                    Diproses tanggal :
                    <br><br>
                    Berlaku sampai :
                </td>
            </tr>
        </table>
    </div>
    <!-- Akhir Form Administrator -->

    <!-- Note Akhir -->
    <div class="tit-footer-note">
        <p>Catatan :
        <div class="footer-note">
            <ul>
                <li>- Data Center Pemerintah Provinsi Jawa Tengah tidak menerima colocation server berbentuk tower.</li>
                <li>- Setiap software dan aplikasi yang diinstal ke dalam server adalah software legal dan memenuhi
                    standard keamanan informasi.</li>
            </ul>
        </div>
        </p>
    </div>

</body>

</html>
');
?>