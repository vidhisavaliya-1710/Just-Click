<?php 
    session_start();
    include('../database.php');
    $email=$_SESSION['email'];
    if(empty($email)){
    header('location:login.php');
  }
  $select_profile="SELECT * FROM `admins` WHERE email='$email'";
  $data=mysqli_query($con,$select_profile);
  $result=mysqli_fetch_array($data);
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
        .bg_admin{
            /* background-color: #F8F7F4; */
            background-color: #E5EBF2;
            width:100%
        }
        .admin_box{
    width: 23% !important;
}
.box_color{
    
    background: linear-gradient(#cfe8ff, #2f6291);
    box-shadow: 0px 0px 4px grey;
}
    .user_icon3{
        background-color: #fff2c6 ;
        color: #ffce26;
    }
    .user_icon2{
        background: rgb(209, 161, 200);
  color: rgb(107, 56, 98);
    }
    .user_icon1{
        background: rgb(165, 196, 165);
  color: green;
    }
    .user_icon{
        background: rgb(212, 201, 201);
        color: rgb(115, 49, 49);
    }
    
      
      </style>
</head>
<body>

    
    <?php include('dash.php')?>
   
        <div class="bg_admin">
    <div class="container pt-5 pb-5">
        <div class="row d-flex gap-3 justify-content-center">
        <?php 
                    if(isset($_SESSION['email'])){
                        echo "<h2>Welcome,".$_SESSION['email']."!</h2>";
                    }
                    else{
                        echo "<h2>Please log in first</h2>";
                    }
                ?>
            
            <div class="col-lg-3 text-dark rounded-2 lh-1 admin_box p-3 box_color">
            <a href="order.php">
            <div class="d-flex align-items-center">
                <i class="fa-brands fa-first-order-alt fs-3 p-2 rounded-2 user_icon3"></i>
                <span class="ms-3">
                    <?php 
                        include('../database.php');
                        $qry="SELECT * FROM orders";
                        $r=mysqli_query($con,$qry);
                        $number_of_client=mysqli_num_rows($r);
                    ?>
                    <h3 class="text-dark"><?php echo $number_of_client?></h3>
                <p class='fs-5 text-dark'>Orders</p>
                
                </span>
                </div>
                </a>
               
            </div>
            
            
       
       
         <div class="col-lg-3 text-dark rounded lh-1 admin_box p-3 box_color ">
            
            <a href="userDetails.php">
            <div class="d-flex align-items-center">
        <i class="fa-solid fa-users fs-3 p-2 rounded-2 user_icon2"></i>
            <span class="ms-3">
                <?php 
                    include('../database.php');
                    $qry="SELECT * FROM users";
                    $r=mysqli_query($con,$qry);
                    $number_of_user=mysqli_num_rows($r);
                ?>
                <h3 class="text-dark"><?php echo $number_of_user?></h3>
            <p class='fs-5 text-dark'>Users</p>
            
            </span>
            </div>
            </a>
           
        
        </div>
       

        
        <div class="col-lg-3 text-dark rounded lh-1 admin_box p-3 box_color">
            <a href="contactdetails.php">
                <div class="d-flex align-items-center">
                <i class="fa-solid fa-envelope fs-3 p-2 rounded-2 user_icon1"></i>
            <span class="ms-3">
            <?php 
                    include('../database.php');
                    $qry="SELECT * FROM contactus";
                    $r=mysqli_query($con,$qry);
                    $total_users=mysqli_num_rows($r);
                ?>
            
            <h3 class="text-dark"><?php echo $total_users?></h3>
            <p class='fs-5 text-dark'>Messages</p>
            </span>
                </div>
            </a>
       
        </div>


        <div class="col-lg-3 text-dark rounded lh-1 admin_box p-3 box_color">
            <a href="home.php">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-user fs-3 p-2 rounded-2 user_icon"></i>
                    <span class="ms-3">
                        <?php 
                                include('../database.php');
                                $qry="SELECT * FROM admins";
                                $r=mysqli_query($con,$qry);
                                $number_of_admins=mysqli_num_rows($r);
                            ?>
            
                        <h3 class=' text-dark'><?php echo $number_of_admins?></h3>
                        <p class="text-dark fs-5">Admins</p>
                    </span>
                </div>
            </a>
        
        </div>
    </div>
    </div>
    </div>
        
    
    
    

    <!-- bootstrap script file -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- script file -->
     <script src="js/script.js"></script>
</body>
</html>