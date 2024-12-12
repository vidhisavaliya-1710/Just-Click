

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
    <!-- stylesheet file -->
     <link rel="stylesheet" href="css/style.css">
     <!-- responsive file -->
      <link rel="stylesheet" href="css/media.css">

      <style>
        .bread_sec{
            background: url('./img/breadcrumb-bg.png');
            opacity: 0.8;
        }
        .breadcrumb li a{
            color: var(--colordark);
        }
        .breadcrumb li{
            color: var(--colordark);
        }
      </style>
</head>
<body>
    
    <!-- header section start -->
        <?php include('header.php') ?>
    <!-- header section end -->

    <!-- breadcrumb section start -->
    <div class="bread_sec p-5 d-flex justify-content-between">
                <div class="m-5">
                    <h2 class="fs-1 color_dark">About Us</h2>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-5">
                        <li class="breadcrumb-item fs-5 fw-medium"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item fs-5 fw-medium" aria-current="page">AboutUs</li>
                    </ol>
                </nav>
        </div>
     <!-- breadcrumb section end -->

    <!-- about section start -->
        <?php include('about.php') ?>
    <!-- about section end -->


    <!-- footer section start -->
        <?php include('footer.php') ?>
    <!-- footer section end -->
</body>
</html>