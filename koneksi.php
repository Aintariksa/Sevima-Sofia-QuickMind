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
                document.location.href = 'user/index.php';
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

function ubah($data) {
    global $kon;

    $id_user = $data["id_user"];
    $nama = htmlspecialchars($data["nama"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $jk = htmlspecialchars($data["jk"]);
    // $alamat = htmlspecialchars($data["alamat"]);
    // $notelf = htmlspecialchars($data["notelf"]);
    $password = htmlspecialchars($data["password"]);

        //Query insert data
$query = "UPDATE user SET
            nama = '$nama',
            tanggal_lahir = '$tanggal_lahir',
            jk = '$jk',
            -- alamat = '$alamat',
            -- notelf = '$notel'
            WHERE id_user = $id_user
            ";
$result = mysqli_query($kon, $query);

return mysqli_affected_rows($kon);
}

// function pesan($data) {
//     global $kon;

//     $
// }

function reservasi($data) {
    global $kon;

    $tipe_kamar = htmlspecialchars($data["tipe_kamar"]);
    $nomorkamar = htmlspecialchars($data["nomorkamar"]);
    $harga = htmlspecialchars($data["harga"]);
    $nama = htmlspecialchars($data["nama"]);
    $tanggal_masuk = htmlspecialchars($data["tanggal_masuk"]);
    $tanggal_keluar = htmlspecialchars($data["tanggal_keluar"]);
    $waktu_reservasi = date("Y-m-d H:i:s");

    $query = "INSERT INTO pemesanan VALUES
    ('', '$waktu_reservasi', '$tipe_kamar', '$nomorkamar', '$harga', '$nama', '$tanggal_masuk', '$tanggal_keluar')";
    
    // $tersedia = "UPDATE kamar SET statuskamar = 'Terisi' WHERE nomorkamar = '$nomor_kamar'";

    $result = mysqli_query($kon, $query);

    if ($result) {
        // Jika data berhasil ditambahkan ke tabel reservasi, ubah status kamar menjadi "Terisi"
        $query = "UPDATE kamar SET statuskamar = 'Terisi' WHERE nomorkamar = '$nomorkamar'";
        $result = mysqli_query($kon, $query);
        
        if ($result) {
        // Jika status kamar berhasil diubah, tampilkan pesan sukses
        echo 
        "<script>
        alert('Berhasil update status kamar!');
        </script>
        ";
        } else {
        // Jika terjadi kesalahan saat mengubah status kamar, tampilkan pesan error
        echo "Terjadi kesalahan saat mengubah status kamar. Silakan coba lagi.";
        }
        } else {
        // Jika terjadi kesalahan saat menambahkan data ke tabel reservasi, tampilkan pesan error
        echo "Terjadi kesalahan saat melakukan reservasi. Silakan coba lagi.";
        } 

    return mysqli_affected_rows($kon);

}

function kamar($data) {
    global $kon;

// $tipe_kamar = "SELECT tipe_kamar FROM kamar";

// $query = "SELECT nomorkamar FROM kamar";
$tipe_kamar = htmlspecialchars($data["tipe_kamar"]);

$tipe_kamar = $_POST["tipe_kamar"];

$query = "SELECT nomorkamar FROM kamar WHERE tipe_kamar = '$tipe_kamar'";

$result = mysqli_query($kon, $query);
return mysqli_affected_rows($kon);
}

function noka($data) {
// Memperbarui status kamar
if (isset($_POST['nomorkamar'])) {
	$nomor_kamar = $_POST['nomorkamar'];

	$sql = "UPDATE kamar SET statuskamar = 'Terisi' WHERE nomorkamar = $nomor_kamar";

	$result = mysqli_query($kon, $sql);
    //  {
	// 	echo "Status kamar berhasil diperbarui";
	// } else {
	// 	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	// }
}

mysqli_close($conn);
}

?>
