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

      <style>
        .reg_sec{
            width: 50% !important;
            box-shadow: 0px 0px 8px black;
        }
        
        .bg_signup{
            background-color: var(--colorpink);
        }
      </style>
</head>
<body>
   

     <!-- register form section start -->
        <div class="d-flex justify-content-center">
            <div class="reg_sec rounded mt-5">
            <h3 class="bg_signup p-2 ps-4 text-white">SignUp</h3>
            <form class="row g-3 m-4 mb-5 p-3" onsubmit="return regvalidation()" method="post">
  <div class="col-6">
    <label for="" class="form-label fs-6">FullName</label>
    <input type="text" class="form-control fs-6 p-2" id="fullname" placeholder="Enter Your FullName" name="fullname">
    <div class="text-danger fs-6 fw-medium" id="err"></div>
  </div>
  <div class="col-6">
    <label for="" class="form-label fs-6">UserName</label>
    <input type="text" class="form-control fs-6 p-2" id="username" placeholder="Enter Your UserName" name="username">
    <div class="text-danger fs-6 fw-medium" id="err1"></div>
  </div>
  <div class="col-6">
    <label for="" class="form-label fs-6">Email</label>
    <input type="email" class="form-control fs-6 p-2" id="email" placeholder="Enter Your Email" name="email">
    <div class="text-danger fs-6 fw-medium" id="err2"></div>
  </div>
 
  <div class="col-6">
    <label for="" class="form-label fs-6">Password</label>
    <input type="password" class="form-control fs-6  p-2" id="psw" placeholder="Enter Your Password" name="password">
    <div class="text-danger fs-6 fw-medium" id="err4"></div>
  </div>
  
  
  <div class="col-12">
    <a href="login.php"><button type="submit" class="btn btn_sec text-white w-100 fs-6 border-0" name="submit" id="liveToastBtn">Sign in</button></a>
  </div>
</form>
            </div>
        </div>

        

    <!-- register form section end -->

     <!-- bootstrap script file -->
     <script src="js/bootstrap.bundle.min.js"></script>

     <!-- validation start-->
        <script>
          function regvalidation(){
            var fname=document.getElementById('fullname').value;
            var uname=document.getElementById('username').value;
            var email=document.getElementById('email').value;
            var pattern1=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
          
            var pass=document.getElementById('psw').value;
            var pattern2=/^[A-Za-z0-9!@#$&*]{8,16}$/;
            if(fname==""){
              document.getElementById("err").innerText="Enter Your Full Name"
              return false;
            }
            if(uname==""){
              document.getElementById('err1').innerText="Enter Your Username"
              return false;
            }
            if(email==""){
              document.getElementById('err2').innerText="Enter Your Email-id"
              return false;
            }
            if (pattern1.test(email)==false) {
				        document.getElementById('err2').innerText="Enter proper Email-id"
				        return false;
			      }
            
           
            if(pass==''){
              document.getElementById('err4').innerText="Please Enter password"
              return false;
            }
            if (pattern2.test(pass)==false) {
				        document.getElementById('err4').innerText="Follow the password syntax"
				        return false;
			      }
            if(cpass==''){
              document.getElementById('err5').innerText="Please Enter confirm password"
              return false;
            }
           
          }
        </script>
     <!-- validation end -->

     <?php
        
        $con=mysqli_connect("localhost","root","","justclick");
        if(isset($_POST['submit'])){
         
          $fullname=$_POST['fullname'];
          $username=$_POST['username'];
          $email=$_POST['email'];
          $password=$_POST['password'];

          $sql="Insert into users (fullname,username,email,password) values ('$fullname','$username','$email','$password')";
          if(mysqli_query($con,$sql)){
              header("location:login.php");
            

          }
          else{
            echo 'not inserted';
          }
        }
     ?>
     <script src="js/bootstrap.bundle.min.js"></script>
     
</body>
</html>