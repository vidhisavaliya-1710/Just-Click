<?php
  
    if(isset($_POST['login'])){
      require 'database.php';
      $email=$_POST['email'];
      $password=$_POST['password'];

      $qry="select * from users where email='$email' and password='$password'";
      $result=mysqli_query($con,$qry);
      //
        if(mysqli_num_rows($result) == 1){
          $row=mysqli_fetch_assoc($result);
          session_start();
          $_SESSION['email']=$email;
         
            
            header("location:index.php");
          
          
        }
      else{
          echo "<script>alert('not registered')</script>";
        }
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
    
     

    <!-- login form section start -->
     
        <main>
        <div class="d-flex justify-content-center mt-5">
          <div class="login_sec">
            <h3 class="bg_login p-2 ps-4 text-white">Login</h3>
        <form action="login.php" class="m-5" onsubmit="return validate()" method="post">
        <div class="row">
            <div class="col-12">
              <div class="d-flex align-items-center">
                <i class="fa-regular fa-envelope position-absolute ps-3 login_icon fs-6"></i><input type="email" placeholder="Email Id" class="mb-2 ps-5 p-1 fs-6 w-100" id="email" name="email">
             </div>
             <div id="err" class="text-danger fs-6 fw-medium"></div>
             </div>
             <div class="col-12">
                <div class="d-flex align-items-center">
                  <i class="fa-solid fa-lock position-absolute ps-3 login_icon fs-6"></i></i><input type="password" placeholder="password" class="mb-2 ps-5 p-1 fs-6 w-100" id="password" name="password">
                </div>
                <div id="err1" class="text-danger fs-6 fw-medium"></div>
            </div>
            <div class="col-12">
            <a href="" class="fs-6 text-center">Forgot Password?</a>
            </div>
            <div class="col-12">
                <button class="mt-3 btn fs-5 fw-medium login_btn text-white w-100" name="login">LogIn

                </button>
            </div>
            <div class="col-md-12">
              <p class="mt-3 fs-6">Don't have an account? <a href="register.php">Signup</a></p>
            </div>
        </div>
      </form>
      </div>
      </div>
            
        </main>
    <!-- login form section end -->


     <!-- bootstrap script file -->
     <script src="js/bootstrap.bundle.min.js"></script>
     <!-- validation code start -->
     <script>
        function validate(){
          var email=document.getElementById('email').value;
            var pattern1=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
          var pattern=/^[A-Za-z0-9!@#$&*]{8,16}$/;
          var psw=document.getElementById("password").value;
          if(email==""){
              document.getElementById('err').innerText="Enter Your Email-id"
              return false;
            }
            if (pattern1.test(email)==false) {
				        document.getElementById('err').innerText="Enter proper Email-id"
				        return false;
			      }
          if(pattern.test(psw)==false){
            document.getElementById("err1").innerText="Please Enter Proper Password"
            return false;
          }
          if(psw==""){
            document.getElementById("err1").innerText="Password Must be required!.."
          }
        }
     </script>

     <!-- validation code end -->
        
     
          
</body>
</html>