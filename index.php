<!-- https://firstsight.design/amie/onepage/ -->
<!-- https://wedding.nicdark.com/wedding-planner/prices/ -->
<!-- https://tfhtml.themepul.com/ovation/demo/pricing.html# -->
<!-- https://tfhtml.themepul.com/ovation/demo/home-3.html -->
<!-- https://www.scribd.com/document/700051557/F-2-1 -->
 <!-- https://demo.themefisher.com/quixlab-bootstrap/ -->
<!DOCTYPE html>
<?php
  include('database.php');
  session_start();
  $email=$_SESSION['email'];
  if(empty($email)){
    header('location:login.php');
  }
  $select_profile="SELECT * FROM `users` WHERE email='$email'";
  $data=mysqli_query($con,$select_profile);
  $result=mysqli_fetch_array($data);
?>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Just Click</title>
    <!-- fevi-icon -->
     <link rel="shortcut icon" href="img/icon3.png" type="image/x-icon">
    <!-- bootstrap file -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome file -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- owl carousel file -->
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/animate.min.css">
    <!-- stylesheet file -->
     <link rel="stylesheet" href="css/style.css">
     <!-- responsive file -->
      <link rel="stylesheet" href="css/media.css">
      <style>
        .moment_sec{
          margin-top: 150px !important;
        }
        .moment_sec p{
            font-size: 12px;
            color: var(--colorpink);
        }
        .moment_sec h2 span{
          font-style: italic;
          font-weight: 400;
        }
        .moment_sec h2{
          color: var(--colordark);
        }
        .moment_sec button{
            font-size: 11px;
        }
        .bread_sec{
            background: url('./img/breadcrumb-bg.png');
            
        }
        /* .silder_sec{
          
          animation: 'animate__fadeInLeft';
          animation-duration: 2s;
        } */
        .silder_sec{
          width: 100%;
        overflow: hidden;
         max-width: 700px;
        }
       
@keyframes slide-left {
  to {
    transform:translateX(0);
  }
}
        
        .silder_sec p{
          font-family: var(--fontEB);
          font-size: 25px;
          color: var(--colorpink);
          animation: 1s slide-left 1s forwards;
          transform:translateX(100%);
        }
        .silder-text{
          font-family: var(--fontEB) !important;
          font-size: 22px !important;
          color: var(--colordark) !important;
          animation: 1s slide-left 1s forwards;
          transform:translateX(100%);
        }
        .silder_sec h1{
          font-family: var(--fontEB);
          font-size: 50px;
          color: var(--colordark);
          animation: 1s slide-left 1s forwards;
          transform:translateX(100%);
        }
        .silder_sec button{
          animation: 1s slide-left 1s forwards;
          transform:translateX(100%);
        }
        .silder_sec img{
          animation: 1s slide-left 1s forwards;
          transform:translateX(-100%)
        }
      </style>
 </head>
 <body>
    <!-- header section start -->
    <?php include('header.php') ?>
     <!-- header section end -->

     
    <main>
    
      <div class="bread_sec pt-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 silder_sec">
                <img src="img/hero_1_2.png" alt="" width="100%">
              </div>
              <div class="col-lg-6 silder_sec mt-5 text-center">
                    
                    <p class="">DECEMBER 29</p>
                    <p class="silder-text">Are getting married!Save the date:</p>
                    <h1 class="">MARY & PETE  LAVISH WEDDING</h1>
                    <button class="btn_sec border-0 p-2 ps-3 pe-3 mt-4"><a href="reservation.php" class="fs-6 text-white">Make Reservation</a></button>
                    
              </div>
            </div>
          </div>
      </div>
        <!-- silder section end -->

        <!-- About section Start -->
         
          <?php include('about.php') ?>

        <!-- About section end -->

        <!-- Gallery section start -->
          <?php include('gallery.php') ?>
        <!-- Gallery section end -->

        <!-- moment section start -->
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <img src="img/Modern1.png" alt="">
              </div>
              <div class="col-md-6 moment_sec text-center">
                <p class="fw-bold">@JUSTCLICK - WEDDING</p>
                <h2 data-ninja-font="prompt_medium_normal">Let’s Capture your best <span class="style-italic" data-ninja-font="ebgaramond_regular_italic">moments & event</span> </h2>
                <button class="btn btn_sec text-white  me-3 rounded-0 fw-bold p-2 mt-4" type="submit"><a href="" class="text-white">SHARE WITH US</a></button>
              </div>
            </div>
          </div>
        <!-- moment section end -->

        <!-- price section start -->
           <!-- include('pricesec.php')  -->
        <!-- price section end -->

        <!-- contact us section start -->
          <?php include('contactus.php') ?>
        <!-- contact us section end -->

        <!-- Testimonal section start -->
           <?php include('testimonal.php') ?>
         <!-- Testimonal section end -->
    </main>
    
     <!-- Footer Section start -->
        <?php include('footer.php') ?>
     <!-- Footer section end -->

    <!-- bootstrap script file -->
     <script src="js/bootstrap.bundle.min.js"></script>
    <!-- owl carousel script file -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- script file -->
     <script src="js/script.js"></script>
 </body>
 </html>