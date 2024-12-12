<?php 
  require('database.php');

  if(isset($_POST['signout'])){
    session_destroy();
    header('location:login.php');
    exit();
  }

?>

<!DOCTYPE html>
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
    <!-- stylesheet file -->
     <link rel="stylesheet" href="css/style.css">
     <!-- responsive file -->
      <link rel="stylesheet" href="css/media.css">
</head>
<body>
    
 <!-- header section start -->

 <header class="sticky-top">
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="80px">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0 fs-5 me-5">
                  <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-2 " href="aboutus.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-2" href="gallerypg.php">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-2" href="price.php">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  
                </ul>
               
                  <button class="btn btn_sec text-white  fs-5 me-3" type="submit"><a href="reservation.php" class="text-white">Book Order</a></button>
                  <form method="post">
                  <button class="btn btn_sec text-white  fs-5 me-3" type="submit" name="signout">logout</button>
                  </form>
               
              </div>
            </div>
          </nav>
    </header>
     <!-- header section end -->

     <!-- bootstrap script file -->
     <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>