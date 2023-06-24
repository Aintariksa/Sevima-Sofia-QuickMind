<?php

// require 'koneksi.php';
include("koneksi.php");

if(isset($_POST["pesann"])) {
 
    if(pesan($_POST) > 0) {
    echo "
        <script>
        alert('Siap! Terima kasih atas pesannya!');
        document.location.href = 'pesan.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Belum terkirim, nih. Coba lagi, yuk?');
        document.location.href = 'contact.php';
        </script>
        ";
    } 
}

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Kontak</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- owl carousel style -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <?php require_once 'navbar.php'; ?>
      <!--header section end -->
      <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="touch_taital">Kontak Kami</h1>
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="email_text">
                        <div class="form-group">
                           <form action="" method="post">
                           <input type="text" class="email-bt" name="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                           <input type="number" class="email-bt" name="notelf" placeholder="Nomor Telepon">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                           <textarea class="massage-bt" name="pesan" placeholder="Pesan Yang Ingin Disampaikan" rows="5"></textarea>
                        </div>
                        <div class="send_btn">
                           <button type="submit" name="pesann">KIRIM</button>
                        </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="map_main">
                        <div class="map-responsive">
                           <!-- <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe> -->
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7359135913425!2d106.81819217423421!3d-6.298392261641551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed1aea2566fd%3A0xa43a768fbbbd72af!2sUniversitas%20Siber%20Asia%20(UNSIA)!5e0!3m2!1sid!2sid!4v1687631090875!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--footer section start -->
      <?php require_once 'footer.php'; ?>
      <!--footer section end -->
      <!--copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <!-- <p class="copyright_text">Copyright 2023 All Right Reserved By <a href="https://html.design">Free Html Templates</a> Distributed by: <a href="https://themewagon.com">ThemeWagon</a></p> -->
         </div>
      </div>
      <!--copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
      <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../../assets/js/vendor/popper.min.js"></script>
      <script src="../../dist/js/bootstrap.min.js"></script>
   </body>
</html>