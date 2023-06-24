<?php

// require 'koneksi.php';

// session_start();

include("koneksi.php");
if (isset($_POST["masuk"])){
    masuk($_POST);
    // $_SESSION['nama'] = $nama;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="gambar/icon.png" type="image" sizes="16x16">
    <title>Masuk</title>
    <link rel="stylesheet" href="css/log.css">
</head>
<body>
    <div class="container">
        <div class="masuk">
            <h1>Masuk ke Quick Mind!</h1>
            <form action="" method="post">
                <label for="nama">Nama Lengkap :</label><br>
                <input type="text" name="nama" id="nama" required>
                <br><br>
                <label for="password">Password :</label><br>
                <input type="password" name="password" id="password" required>
                <br><br>
                <button type="submit" name="masuk">Masuk!</button>
            </form>
            <p>Belum memiliki Akun? Ayo <a href="daftar.php">Daftar</a>!</p>
            <!-- <p>Masuk sebagai <a href="admin/index.php">Admin</a> | <a href="resepsionis">Resepsionis</a></p> -->
        </div>
    </div>
</body>
</html>