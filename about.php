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
   <title>about</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      hr{
         color: white;
         height: 30px;
      }
   </style>
</head>
<body>
<?php include 'components/user_header.php'; ?>
<section class="about">
   <div class="row">
      <div class="image">
         <img src="images/about image.jpg" alt="">
      </div>
      <div class="content">
         <h3>What we do?</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam veritatis minus et similique doloribus? Harum molestias tenetur eaque illum quas? Obcaecati nulla in itaque modi magnam ipsa molestiae ullam consequuntur.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>
   </div>
   <br><hr><br>
   <div class="row">
      <div class="image">
         <img src="images/about2.jpg" height="350px" alt="">
      </div>
      <div class="content">
         <h3>Our motto?</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam veritatis minus et similique doloribus? Harum molestias tenetur eaque illum quas? Obcaecati nulla in itaque modi magnam ipsa molestiae ullam consequuntur.</p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias vel hic corporis magni facilis minus corrupti aperiam eum molestiae ratione dolorum blanditiis natus perspiciatis tenetur reiciendis dolore eaque optio cupiditate quo illum, quam laudantium voluptatibus. Fugiat suscipit cum nostrum labore rerum quo deleniti aliquid illo minus ex. Reiciendis aliquam enim, voluptates dignissimos deserunt velit et!</p>
      </div>
   </div>
   <br><hr><br>
   <div class="row">
      <div class="image">
         <img src="images/about3.jpg" height="250px" alt="">
      </div>
      <div class="content">
         <h3>Our Availabilities</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam veritatis minus et similique doloribus? Harum molestias tenetur eaque illum quas? Obcaecati nulla in itaque modi magnam ipsa molestiae ullam consequuntur.</p>
         <a href="shop.php" class="btn">Explore</a>
      </div>
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