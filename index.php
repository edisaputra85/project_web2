<?php
session_start();
ob_start();

include "library/config.php";

if (empty($_SESSION['username']) or empty($_SESSION['password']) or empty($_SESSION['role'])) {
    echo "<p align='center'> Anda harus login terlebih dahulu!</p>";
    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
} else{
    define('INDEX',true);
    if ($_SESSION['role']=="admin") define('ADMIN',true);
    if ($_SESSION['role']=="user") define('USER',true);


//Indonesian Time
$date = new DateTime("",new DateTimeZone('Asia/Jakarta'));
?>

    <!doctype html>

    <html lang="en" class="h-100">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" initial-scale="1" shrink-to-fit="no">
        <title>Dashboard</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="open-iconic/font/css/open-iconic-bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="plugin/DataTables/datatables.min.css" />
        <link href="plugin/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
        <link href="plugin/summernote/summernote.min.css" rel="stylesheet">

        <style>
            .headerfooter{
                background-color:darkorchid;
                color:white;
            }
            .warnakonten{
                background-color:Lavender;
            }
        </style>
    </head>

    <body class="h-100">
        <nav class="navbar navbar-expand-sm navbar-dark sticky-top headerfooter ps-3">
        <div class="container-fluid">
            <a class="navbar-brand fw-bolder" href="#">MANAJEMEN PEGAWAI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar" 
            aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="collapse navbar-collapse" id="sidebar">
                <ul class="navbar-nav d-sm-none">
                    <li class="nav-item">
                        <a class="nav-link" href="?hal=dashboard">
                            <i class="oi oi-dashboard"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?hal=pegawai">
                            <i class="oi oi-person"></i>Data Pegawai
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?hal=jabatan">
                            <i class="oi oi-sort-descending"></i>Data Jabatan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="oi oi-account-logout"></i>Keluar
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        </nav>

        <div class="container-fluid h-100">
            <div class="row h-100">
                <nav class="col-md-2 col-sm-3 bg-light h-100 p-0 position-fixed d-none d-sm-block">
                    <ul class="list-group list-grup-flush">
                        <li class="list-group-item ">
                            <a class="nav-link" href="?hal=dashboard">
                                <i class="oi oi-dashboard"></i> Dashboard</a>
                        </li>
                        <li class="list-group-item">
                            <a class="nav-link" href="?hal=pegawai">
                                <i class="oi oi-person"></i> Data Pegawai</a>
                        </li>
                        <li class="list-group-item">
                            <a class="nav-link" href="?hal=jabatan">
                                <i class="oi oi-sort-descending"></i> Data Jabatan</a>
                        </li>
                        <li class="list-group-item">
                            <a class="nav-link" href="logout.php">
                                <i class="oi oi-account-logout"></i> Keluar</a>
                        </li>
                    </ul>
                </nav>
                
                <div class="col-md-10 col-sm-9 offset-md-2 offset-sm-3 pb-5 warnakonten">
                    <section>
                        <?php include "konten.php"; ?>
                    </section>
                </div>
        
            </div>
        </div>

        <div class="headerfooter fixed-bottom">
            <p class="m-0 text-center">Copyright &copy; Edi Saputra</p>
        </div>

        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="plugin/DataTables/datatables.min.js"></script>
        <script type="text/javascript" src="plugin/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <!--plugin untuk mengubah datepicker menjadi berbahasa indonesia-->
        <script type="text/javascript" src="plugin/bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js"></script>
        <!--plugin untuk summernote-->
        <script type="text/javascript" src="plugin/summernote/summernote.min.js"></script>
        <!--Script jQuery untuk implementasi plugin DataTable-->
        <script>
            $(function() {
                $('.table').DataTable();
            });
        </script>

        <!--Script jQuery untuk implementasi DatePicker ref: https://bootstrap-datepicker.readthedocs.io/en/latest/-->
        <script>
            $(function() {
                $('#tanggal').datepicker({
                    format: 'yyyy-mm-dd',
                    language:'id'
                });
            });
        </script>
        <!--Script jQuery untuk implementasi plugin summernote-->
        <script>
            $(function() {
                $('#keterangan').summernote();
            });
        </script>

    </body>

    </html>
<?php
}
?>
