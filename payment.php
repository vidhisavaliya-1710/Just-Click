

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
        .payment_sec{
            width: 50%;
            box-shadow: 0px 0px 8px black;
        }
        .payment_sec h1{
            color: var(--colordark);
            font-family: var(--fontEB);
            
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
                    <h2 class="fs-1 color_dark">Payment</h2>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-5">
                        <li class="breadcrumb-item fs-5 fw-medium"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item fs-5 fw-medium" aria-current="page">Payment</li>
                    </ol>
                </nav>
        </div>
     <!-- breadcrumb section end -->

        <!-- payment section start -->
            <div class="container d-flex justify-content-center">
                <div class="payment_sec  mt-4 p-4">
                    <div class="d-flex  justify-content-between">
                    <h1>Payment</h1>
                    <div class="d-flex align-items-center">
                    <i class="fa-brands fa-cc-visa fs-3"></i>
                    <i class="fa-regular fa-credit-card fs-3 ms-3"></i>
                    </div>
                    </div>
                    <form action="" method="post" class="mt-3">
                        <div class="row">
                            <div class="col-lg-6">
                            <label for="" class="form-label fs-5">Account Holder Name:</label>
                            <input type="text" class="form-control" name="name">
                            </div>
                            <div class="col-lg-6">
                            <label for="" class="form-label fs-5">Account Number:</label>
                            <input type="text" class="form-control" name="anumber">
                            </div>
                            <div class="col-lg-6">
                            <label for="" class="form-label fs-5 mt-3">Card Expiry:</label>
                            <input type="date" class="form-control" name="expiry">
                            </div>
                            <div class="col-lg-6">
                            <label for="" class="form-label fs-5 mt-3">Card CVV:</label>
                            <input type="text" class="form-control" name="cvv">
                            </div>
                            <div class="col-lg-6">
                            <label for="" class="form-label fs-5 mt-3">Card Number:</label>
                            <input type="text" class="form-control" name="cnumber">
                            </div>
                            <div class="col-lg-6">
                            <label for="" class="form-label fs-5 mt-3">Amount:</label>
                            <input type="text" class="form-control" name="amount">
                            </div>
                            <button type="submit" class="btn_sec border-0 text-white fs-5  text-center p-2 mt-3" name="pay">Pay Now</button>
                        </div>   
                    </form>
                </div>
            </div>
        <!-- payment section end -->
     <?php include('footer.php') ?>

     <?php 
    include('database.php');
    if(isset($_POST['pay'])){
         
        $name=$_POST['name'];
        $anumber=$_POST['anumber'];
        $expiry=$_POST['expiry'];
        $cvv=$_POST['cvv'];
        $cnumber=$_POST['cnumber'];
        $amount=$_POST['amount'];

        $sql="Insert into payments (name,anumber,expiry,cvv,cnumber,amount) values ('$name','$anumber','$expiry','$cvv','$cnumber','$amount')";
        if(mysqli_query($con,$sql)){
            echo "<script>
                    swal({
                        title: 'Success!',
                        text: 'Payment Successfully...!',
                        icon: 'success',
                        button: 'Ok',
                    }).then(function() {
                        window.location = 'reservation.php';
                    });
                </script>";
        }
        else{
            echo "<script>
            swal({
                title: 'Error!',
                text: 'Payment Not Successfully..!',
                icon: 'error',
                button: 'Ok',
            }).then(function() {
                window.location = 'payment.php';
            });
        </script>";
        }
      }
?>

    <!-- bootstrap script file -->
    <script src="js/bootstrap.bundle.min.js"></script>


</body>
</html>