<?php

require 'koneksi.php';

if(isset($_POST["daftar"])) {
 
    if(daftar($_POST) > 0) {
    echo "
        <script>
        alert('Congratulations atas keberhasilannya!');
        document.location.href = 'user/index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Duh, maaf, belum bisa daftar!');
        document.location.href = 'daftar.php';
        </script>
        ";
    } 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="gambar/icon.png" type="image" sizes="16x16">
    <title>Yuk Daftar!</title>
    <link rel="stylesheet" href="css/log.css">
</head>
<body>
    <div class="container">
        <div class="daftar">
            <h1>Pendaftaran User</h1>
            <form action="" method="post">
                    <label for="nama">Nama Lengkap :</label><br>
                    <input type="text" name="nama" id="nama" required>
                    <br><br>
                    <label for="tanggal_lahir">Tanggal Lahir :</label><br>
                    <input type="date" name="tanggal_lahir" id="tgl_lahir" required>
                    <br><br>
                    <label for="alamat">Alamat :</label><br>
                    <input type="text" name="alamat" id="alamat" required>
                    <br><br>
                    <label for="jk">Jenis Kelamin :</label><br><br>
                    <input type="radio" name="jk" id="jk" value="L">Laki-laki
                    <input type="radio" name="jk" id="jk" value="P">Perempuan
                <br><br>
                    <label for="notelf">Nomor Telefon :</label><br>
                    <input type="number" name="notelf" id="notelf" required>
                <br><br>
                <label for="Email">Email :</label><br>
                <input type="text" name="email" id="Email" required>
                <br><br>
                <label for="password">Password :</label><br>
                <input type="password" name="password" id="password" required>
                <br><br>
                <button type="submit" name="daftar">DAFTAR</button>
            </form>
        </div>
    </div>
</body>
</html>