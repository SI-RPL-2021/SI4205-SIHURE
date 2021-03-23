<!DOCTYPE html>

<html>

<?php

if (isset($_COOKIE['login'])) {
    if ($_COOKIE['login'] == 'true') {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'belajar.php';

if (isset($_POST["login"])) {

    $nama = $_POST["nama"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE nama = '$nama'");

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            $_SESSION["login"] = true;

            $_SESSION["nama"] = $_POST["nama"];

            //cookie
            if (isset($_POST['remember'])) {

                setcookie('login', 'true', time() + 43200);
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}



?>


<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body style="background-color:  #B0C4DE;">

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="#">
                <img src="logosihure.JPG" alt="logo" style="width:40px;">
            </a>

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" href="index.php">SIHURE</a>
            </ul>
            <div id="navbarNavDropdown" class="navbar-collapse collapse">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="Register.php">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
    </body>

</html>

<div class="d-flex justify-content-center" style="margin-top:20px">
    <div class="shadow bg-white rounded">
        <div class="card">
            <form action="login.php" method="POST">
                <div class="card-body" style="width: 500px;">
                    <h3 style="text-align:center; margin-top: 10px;">Login</h3>
                    <hr style="width: 80%;">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Anda" name="nama">

                    <div class="form-group  col-15 ">
                        <label for="password">Kata Sandi</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                    <br>
                    <p style="text-align: center;">Belum punya akun? <a href="Register.php">Registrasi</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
</body>

</html>