<!DOCTYPE html>
<html>
 
<?php

require 'belajar.php';



if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


$id = $_SESSION["nama"];

$result = mysqli_query($conn, "SELECT * FROM users WHERE nama = '$id' ");
$row = mysqli_fetch_object($result);

?>

<head>
    <title>welcome</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body style="background-color:  #B0C4DE;">

    <body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">

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
        </div>
    </body>

</html>
</nav>
<div class="d-flex justify-content-center" style="margin-top:20px">
    <div class="shadow bg-white rounded">
        <div class="card">
            <form action="login.php" method="POST">
                <div class="card-body" style="width: 500px;">

                    <h3 style="text-align:center; margin-top: 10px;">WELCOME</h3>
                    <hr style="width: 50%;">
                    <div class="form-group" style="width: 500px; margin-left: 35px;">
                        <img src="logosihure.JPG" alt="logo" style="width:400px;">
                    </div>
                    <br><br>

                </div>

                <?php if ($row->jabatan ==  'admin') : ?>
                <a style="background-color:#042331 ;width: 500px; height: 50px" href="admin.php" class="btn btn-primary">anda login sebagai <?= $id ?> </a>
                <?php endif; ?>
                <?php if ($row->jabatan ==  'hr') : ?>
                <a style="background-color:#042331 ;width: 500px; height: 50px" href="hr.php" class="btn btn-primary">anda login sebagai <?= $id ?> </a>
                <?php endif; ?>
                <?php if ($row->jabatan ==  'karyawan') : ?>
                <a style="background-color:#042331 ;width: 500px; height: 50px" href="absen.php" class="btn btn-primary">anda login sebagai <?= $id ?> </a>
                <?php endif; ?>

                   
            </form>
        </div>
    </div>
</div>
</body>

</html>