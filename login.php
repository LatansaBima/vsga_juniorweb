<?php
include 'koneksi.php';

if( isset($_POST["submit"]) ){

    $username = $_POST["user"];
    $password = $_POST["password"];

    $query = "SELECT * FROM akun WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    //cek username dan password
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Memeriksa kesesuaian password
        if ($password === $user['password']) {
            // Redirect ke halaman administrator jika login berhasil
            header("location:administrator.php");
            exit;
        } else {
            // Tampilkan pesan error jika password salah
            $error_message = "Password salah.";
        }
    } else {
        // Tampilkan pesan error jika username tidak ditemukan
        $error_message = "Username tidak ditemukan.";
    }
}
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link href="style.css" rel="stylesheet">


        <title>Login Page</title>
    </head>
    <body>

        <div class="global-container">
            <div class="card login-form">
                <div class="card-body">
                    <a href="home.php" class="fs-6 card-title text-center"> kembali ke website </a>
                    <h1 class="card-title text-center"> LOGIN PAGE </h1>
                </div>
                <div class="card-text">
                <form action="administrator.php" method="post">
                    <div class="mb-3">
                        <label for="user" class="form-label">Username</label>
                        <input type="text" class="form-control" name ="user" id="user">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                </div>
            </div>
        </div>


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>