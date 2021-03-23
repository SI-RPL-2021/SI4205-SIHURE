<!DOCTYPE html>

<?php
require 'belajar.php';

$id = $_SESSION["nama"];

?>

<html>

<head>
    <link rel="shortcut icon" href="logosihure.JPG">
    <title>Absen</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css.css">

</head>

<body>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:  #B0C4DE;">

            <!-- Brand/logo -->
            <a class="navbar-brand" href="#">
                <img src="logosihure.JPG" alt="logo" style="width:40px;">
            </a>

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" href="index.php">SIHURE</a>
                </li>

            </ul>
            <div id="navbarNavDropdown" class="navbar-collapse collapse">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item active">

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="login.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Selamat datang, <?php echo $_SESSION["nama"] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="logout.php">Logout</a>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="row">

            <div class="col-sm">

                <div class="sidebar">
                    <header>Karyawan</header>
                    <ul>
                        <li><a href="absen.php"><i class="fas fa-qrcode"></i>Absensi</a></li>
                        <li><a href="Cuti.php"><i class="fas fa-link"></i>Cuti</a></li>
                        <li><a href="lembur.php"><i class="fas fa-stream"></i>Lembur</a></li>
                        <li><a href="karyawan.php"><i class="fas fa-calendar-week"></i>Karyawan</a></li>
                        <li><a href="gaji.php"><i class="fas fa-sliders-h"></i>Gaji</a></li>

                    </ul>
                </div>
            </div>

            <div class="col-sm-10">
                <h6 style="text-align:right;color:black;">Jumat, 19 Maret 2021
                </h6>
                <h6 style="text-align:right;color:black;">15:59</h6>
                <h3 style="text-align:center;color:black;font-weight:bolder;">ABSENSI</h3>
                <div class="d-flex justify-content-center" style="margin-top: 10px">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <div style="width: 500px; height: 300px" class="card text-center">
                                    <div class="card text-center">

                                        <div style="background-color:#B0C4DE" class="card-body">
                                            <h5 class="card-text">Nama: Titisari Ramadhane</h5>
                                            <p class="card-text">NIP: 1202184209</p>
                                            <a style="background-color:#042331 ;width: 300px; height: 45px" href="todoKaryawan.php" class="btn btn-primary">Masuk</a><br><br>
                                            <a style="background-color:#042331 ;width: 300px; height: 45px" href="submitpulang.php" class="btn btn-primary">Pulang</a><br><br>
                                        </div>
                                        <div class="card-footer text-muted">
                                            SIHURE
                                        </div>
                                    </div>

                                    <script>
                                        // Add the following code if you want the name of the file appear on select
                                        $(".custom-file-input").on("change", function() {
                                            var fileName = $(this).val().split("\\").pop();
                                            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>



</html>