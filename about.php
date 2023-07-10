<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tentang</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Tentang Kami</h3>
   <p> <a href="home.php">Beranda</a> / Tentang </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Kenapa harus kami?</h3>
         <p>Bookly adalah toko buku yang menyediakan berbagai macam genre buku mulai dari petualangan yang menantang hingga horror yang menakutkan. Dapatkan buku tanpa harus pergi keluar rumah dengan memesan secara online.</p>
         <p>Ayo pesan bukumu dan buktikan sendiri!</p>
         <a href="contact.php" class="btn">Hubungi Kami</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Review Pelanggan</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.jpg" alt="">
         <p>Buku bukunya lengkap banget, buat yang suka baca buku tapi ga ada waktu buat beli sih cocok. Goodjob Bookly!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Annisa</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.jpg" alt="">
         <p>Buku terbaru selalu lengkap, suka banget tinggal pesan langsung diantar jadi gaperlu cape cape pergi.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ashifa</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.jpg" alt="">
         <p>Bukunya oke, cuma pengemasannya agak lama huhu, padahal ingin cepet2 baca. Tapi bagus sih soalnya pas dapet diskon.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fa-regular fa-star"></i>
         </div>
         <h3>Isny</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Top penulis bulan ini</h1>

   <div class="box-container" style="width: 390px;">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>John Row</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>