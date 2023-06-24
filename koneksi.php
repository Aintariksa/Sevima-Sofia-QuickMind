<?php

$kon = mysqli_connect("localhost", "root", "", "qumi");

session_start();

function query($query) {
    global $kon;
    $result = mysqli_query($kon, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function daftar($data) {
    global $kon;

    $nama = htmlspecialchars($data["nama"]);
    $tanggal_lahir = htmlspecialchars($data["tgl_lahir"]);
    $jk = htmlspecialchars($data["jk"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $notelf = htmlspecialchars($data["notelf"]);
    $password = htmlspecialchars($data["password"]);
    $email = htmlspecialchars($data["email"]);

    $query = "INSERT INTO user VALUES
    ('', '$nama', '$tanggal_lahir', '$jk', '$alamat', '$notelf', '$email', '$password', 'User')";
    $result = mysqli_query($kon, $query);

    return mysqli_affected_rows($kon);
}

function masuk($post) {
    global $kon;
    // menangkap data yang dikirim dari form login
    $nama = $post['nama'];
    $password = $post['password'];
    // menyeleksi data user dengan username dan password yang sesuai
    $login = mysqli_query($kon,"SELECT * FROM user WHERE nama='$nama' and password='$password'");
    // $id = mysqli_fetch_assoc(mysqli_query($kon, "SELECT id_user FROM user WHERE nama='$nama' and password='$password'"))["id_user"];
    
    // $id = $login["id_user"];
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);
     
    // cek apakah username dan password di temukan pada database
    if($cek > 0){
    
        $data = mysqli_fetch_assoc($login);
     
        // cek jika user login sebagai admin
        if($data['level']=="Admin"){
     
            // buat session login dan username
            $_SESSION['nama'] = $nama;
            $_SESSION['level'] = "Admin";
            $_SESSION['id_user'] = $id;
            // alihkan ke halaman dashboard admin
            echo "
            <script>
                alert('Selamat datang di dashboard admin!');
                document.location.href = 'admin/dashboard.php';
            </script>
            ";
     
        // cek jika user login sebagai pegawai
        }else if($data['level']=="User"){
            // buat session login dan username
            $_SESSION['nama'] = $nama;
            $_SESSION['level'] = "User";
            // $_SESSION['id_user'] = $id;
            // alihkan ke halaman dashboard pengurus
            echo "
            <script>
                alert('Selamat datang di dashboard user!');
                document.location.href = 'index.php';
            </script>
            ";
        }
    }else{
        echo "
            <script>
                alert('login gagal!');
                document.location.href = 'login.php';
            </script>
        ";
    }

    return mysqli_affected_rows($kon);
}

function pesan($data) {
    global $kon;

    $nama = htmlspecialchars($data["nama"]);
    $notelf = htmlspecialchars($data["notelf"]);
    $email = htmlspecialchars($data["email"]);
    $pesan = htmlspecialchars($data["pesan"]);

    $query = "INSERT INTO pesan VALUES
    ('', '$nama', '$notelf', '$email', '$pesan')";
    $result = mysqli_query($kon, $query);

    return mysqli_affected_rows($kon);
}