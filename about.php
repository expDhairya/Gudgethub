<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/23.png" alt="">
      </div>

      <div class="content">
         <h3>Developer's Message:</h3>
         <p>Hey There ! I'm Dhairya Mehta. A Student of MCA  from Charusat College [Batch : 2023] . I love designing websites and exploring new things. Learning new things is my hobby.</p>

        
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">About Us</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images\profile-pic.png" alt="">
         <p>Hey There ! I'm Dhairya Mehta. A Student of MCA  from Charusat College [Batch : 2023] . I love designing websites and exploring new things. Learning new things is my hobby.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> <a href="https://www.instagram.com/dhairyaaa_03_/" target="_blank">Dhairya Mehta</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images\Ketul.png" alt="">
         <p>Hey There ! I'm ketul brahmbhatt. A Student of MCA  from Charusat College [Batch : 2023] . I love exploring new things. Reading Book or Anything is my hobby.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.instagram.com/ketul_brahmbhatt_/" target="_blank">Ketul Brahmbhatt</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images\Dhruven.png" alt="">
         <p>Hey There ! I'm Dhruven Parekh. A Student of MCA  from Charusat College [Batch : 2023] . Doing Workout is my hobby.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.instagram.com/_dp512/" target="_blank">Dhruven Parekh</a></h3>
      </div>


    


   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>