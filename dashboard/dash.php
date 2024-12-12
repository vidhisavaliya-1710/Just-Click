<?php 
  include('../database.php');
  if(isset($_POST['logout'])){
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
     <link rel="shortcut icon" href="../img/icon3.png" type="image/x-icon">
    <!-- bootstrap file -->
     <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- font awesome file -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- stylesheet file -->
     <link rel="stylesheet" href="../css/style.css">
     <!-- responsive file -->
      <link rel="stylesheet" href="../css/media.css">
      <style>
       /* .admin_sec{
         background-color: #F8F7F4; 
         background-color: var(--colordark); 
         background-color: #1c3a57;
        
         width: 20%; 
         height: 100vh; 
       } */
       body{
        margin: 0px !important;
       }
       .admin_sec{
            font-family: var(--fontEB);
            /* color: var(--colordark); */
            color: white;
       }
       ul{
        list-style: none;
       }
       a{
        text-decoration: none;
       }
       /* .admin_part li a{
        color: white;
        font-weight: 500;
       } */
       .sidebar {
       height: 150vh;
      background-color: #1c3a57 !important;
      color: white !important;
    }
    .navbar_sec{
        background-color: #1c3a57 !important;
    }
       
    .bg_logout{
      background-color: transparent;
    }
      </style>
</head>
<body>

        <nav class="navbar navbar-light navbar_sec">
    <div class="container-fluid">
      <a class="navbar-brand fs-3 text-white admin_sec" href="#">Just Click</a>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="d-flex">
    <div class="sidebar d-flex flex-column p-3 bg-light text-dark" style="width: 250px;">
      <ul class="nav nav-pills flex-column mb-auto fs- fw-medium">
        <li>
          <a href="home.php" class="nav-link text-dark p-md-3 text-white"><i class="fa fa-dashboard me-4"></i>Dashboard</a>
        </li>
        <li>
          <a href="order.php" class="nav-link text-dark p-3 text-white"><i class="fa-brands fa-first-order-alt me-3"></i>Orders</a>
        </li>
        <li>
          <a href="package.php" class="nav-link text-dark p-3 text-white"><i class="fa-solid fa-bars me-4"></i>Packages</a>
        </li>
        <li>
          <a href="userDetails.php" class="nav-link text-dark p-3 text-white"><i class="fa fa-users me-3"></i>Users</a>
        </li>
        <hr>
        <li>
          <a href="contactdetails.php" class="nav-link text-dark p-3 text-white"><i class="fa-solid fa-envelope me-3"></i>Contact Us</a>
        </li>
        <li>
          <form action="" method="post">
            <button type="submit" name="logout" class="bg_logout border-0 text-white p-3">
              <i class="fa-solid fa-right-from-bracket me-3"></i>logout</button>
          </form>
        </li>
      </ul>
    </div>
    
    
    <!-- bootstrap script file -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- script file -->
     <script src="js/script.js"></script>
</body>
</html>