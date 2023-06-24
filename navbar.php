<?php

include("koneksi.php");

$nama = $_SESSION['nama'];

?>

<div class="header_section">
         <div class="container">
            <nav class="navbar navbar-dark bg-dark">
               <a class="logo" href="index.php"><img src="images/logo.png" width="300"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <?php
               if (isset($_SESSION['nama'])) {
    // Pengguna sudah login, tampilkan tombol "Akun"
               echo '<a href="akun.php"><?= $nama; ?></a>';
               } else {
              echo '<a href="login.php" style="color:white">Masuk</a>';
              echo '<a href="daftar.php" style="color:white">Daftar</a>';
}
?>
               <div class="collapse navbar-collapse" id="navbarsExample01">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Utama</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">Tentang Kami</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.php">Quiz</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog.php">Tanya Jawab</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">Kontak Kami</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>