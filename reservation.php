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
    <!-- stylesheet file -->
     <link rel="stylesheet" href="css/style.css">
     <!-- responsive file -->
      <link rel="stylesheet" href="css/media.css">
      <script src="./js/sweetalert.min.js"></script>
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
        .reservation_part input, .reservation_part select{
            background-color: transparent;
            border: 1px solid #dedede;
            font-size: 13px;
            color: var(--colordark);
            font-weight: 400;
            width: 105%;
        }
        
        .date-input-container {
    position: relative;
    display: inline-block;
}

.date-input {
    padding-left: 40px;
    -webkit-appearance: none; 
    -moz-appearance: none;
    appearance: none; 
    position: relative;
    width: 175% !important;
}

.date-input::-webkit-calendar-picker-indicator {
    position: absolute;
    left: 10px;
    z-index: 1;
    width: 24px;
    height: 24px;
    opacity: 0; 
}

.date-input-container::before {
    content: '\1F4C5'; 
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none; 
    color: #C78665 !important; 
}
.date-input-container i{
    padding-left: 13px;
    padding-top: 23px;
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
                    <h2 class="fs-1 color_dark">Make Reservation</h2>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-5">
                        <li class="breadcrumb-item fs-5 fw-medium"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item fs-5 fw-medium" aria-current="page">Make Reservation</li>
                    </ol>
                </nav>
        </div>
     <!-- breadcrumb section end -->

        <!-- reservation section start -->
            <div class="container spacer">
                <div class="row">
                    <div class="col-lg-6 reservation_part">
                    <form method="post">
                        <div class="row mt-5">
                            <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-user position-absolute ps-3 login_icon fs-5"></i><input type="text" placeholder="Enter Full Name" class="mb-2 ps-5 pb-3 pt-3" id="fullname" name="fullname" required>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fa-regular fa-envelope position-absolute ps-3 login_icon fs-5"></i><input type="email" placeholder="Enter Email Id" class="mb-2 ps-5 pb-3 pt-3"  name="email" required>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-users position-absolute ps-3 login_icon fs-5"></i><input type="text" placeholder="No of Guest" class="mb-2 ps-5 pb-3 pt-3" name="guest" required>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="date-input-container mb-2">
                                    <i class="fa-solid fa-calendar position-absolute  login_icon fs-5"></i>
                                    <input type="date" class="date-input mb-2 ps-5 pb-3 pt-3" name="dates" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-city position-absolute ps-3 login_icon fs-5"></i><input type="text" placeholder="Enter City" class="mb-2 ps-5 pb-3 pt-3" name="city" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-earth-americas position-absolute ps-3 login_icon fs-5"></i><input type="text" placeholder="Enter Country" class="mb-2 ps-5 pb-3 pt-3" name="country" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-box position-absolute ps-3 login_icon fs-5"></i>
                                <select name="package" id="" class="mb-2 ps-5 pb-3 pt-3" required>
                                    <option value="">-- Select Your Package and Amount --</option>

                                    <?php
                                        include('database.php');
                                        $sql="SELECT * FROM packages";
                                        $getresult=mysqli_query($con,$sql);
                                        while($row= mysqli_fetch_array($getresult)){
                                            echo '<option value="' .$row['package_name'].'"> ' .$row['package_name'].'</option>';
                                        }
                                        
                                    ?>
                                </select>
                                
                            </div>
                            </div>


                            <div class="col-md-12 mt-2">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-box position-absolute ps-3 login_icon fs-5"></i>
                                <select name="func" id="" class="mb-2 ps-5 pb-3 pt-3" required>
                                     <option value="">--Function Type--</option>
                                    <?php 
                                        $sql1="SELECT * FROM packages";
                                        $getres=mysqli_query($con,$sql1);
                                        while($row=mysqli_fetch_array($getres)){
                                            echo '<option value="'.$row['type'].'">'.$row['type'].'</option>';
                                        }
                                    ?>
                                </select>
                                
                            </div>
                            </div>

                            
                            
                            <button class="btn_sec border-0 p-2 ps-3 pe-3 w-50 ms-5 mt-4 text-white" name="book" data-bs-toggle="modal" data-bs-target="#exampleModal">Make Reservation</button>

                        </div>
                    </form>
                    </div>
                    <div class="col-lg-6">
                        <img src="img/reservation-thumb.png" alt="" height="500px">
                    </div>
                </div>
            </div>
        <!-- reservation section end -->

        <?php 
       $con=mysqli_connect("localhost","root","","justclick");
            if(isset($_POST['book'])){
                $fullname=$_POST['fullname'];
                $email=$_POST['email'];
                $guest=$_POST['guest'];
                $dates=$_POST['dates'];
                $city=$_POST['city'];
                $country=$_POST['country'];
                $package=$_POST['package'];
                $func=$_POST['func'];

                $sql="insert into orders (fullname,email,guest,dates,city,country,package,func) values ('$fullname','$email','$guest','$dates','$city','$country','$package','$func')";
                if(mysqli_query($con,$sql)){
                    echo "<script>
                    swal({
                        title: 'Success!',
                        text: 'Order Placed',
                        icon: 'success',
                        button: 'Ok',
                    }).then(function() {
                        window.location = 'payment.php';
                    });
                </script>";
                }
                else{
                    echo "<script>
            swal({
                title: 'Error!',
                text: 'Order Not Placed',
                icon: 'error',
                button: 'Ok',
            }).then(function() {
                window.location = 'reservation.php';
            });
        </script>";
                }
            }
        ?>

        <?php include('footer.php') ?>

    <!-- bootstrap script file -->
    <script src="js/bootstrap.bundle.min.js"></script>
   
    
</body>
</html>