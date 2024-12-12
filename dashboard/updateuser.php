<?php 
    include('../database.php');
    if(isset($_POST['Update'])){
        $id=$_POST['id'];
        $fullname=$_POST['fullname'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];


        $update=mysqli_query($con, "UPDATE users SET fullname='$fullname' , username='$username' , email='$email'  , password='$password' WHERE id=$id");

        if($update){
            header("location:userDetails.php");
        }
        else{
            echo "Error updating Record";
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
<div class="d-flex justify-content-center">
            <div class="reg_sec rounded mt-5">
            <h3 class="bg_signup p-2 ps-4 text-white">SignUp</h3>

            <?php 
                if(isset($_GET['id'])){
                    $update_id=$_GET['id'];
                    $update_qry=mysqli_query($con, "SELECT * FROM users WHERE id=$update_id");

                    if(mysqli_num_rows($update_qry)>0){
                        $fetch_qry=mysqli_fetch_assoc($update_qry);
                    
            ?>
            <form class="row g-3 m-4 mb-5 p-3" method="post">
            <input type="hidden" name="id" value="<?php echo $fetch_qry['id']; ?>"> 
  <div class="col-6">
    <label for="" class="form-label fs-6">FullName</label>
    <input type="text" class="form-control fs-6 p-2" id="fullname" placeholder="Enter Your FullName" name="fullname" value="<?php echo $fetch_qry['fullname'];?>">
    <div class="text-danger fs-6 fw-medium" id="err"></div>
  </div>
  <div class="col-6">
    <label for="" class="form-label fs-6">UserName</label>
    <input type="text" class="form-control fs-6 p-2" id="username" placeholder="Enter Your UserName" name="username"  value="<?php echo $fetch_qry['username'];?>">
    <div class="text-danger fs-6 fw-medium" id="err1"></div>
  </div>
  <div class="col-6">
    <label for="" class="form-label fs-6">Email</label>
    <input type="email" class="form-control fs-6 p-2" id="email" placeholder="Enter Your Email" name="email" value="<?php echo $fetch_qry['email'];?>">
    <div class="text-danger fs-6 fw-medium" id="err2"></div>
  </div>
  
  <div class="col-6">
    <label for="" class="form-label fs-6">Password</label>
    <input type="password" class="form-control fs-6  p-2" id="psw" placeholder="Enter Your Password" name="password"  value="<?php echo $fetch_qry['password'];?>">
    <div class="text-danger fs-6 fw-medium" id="err4"></div>
  </div>
  
  
  <div class="col-12">
    <button type="submit" class="btn btn_sec text-white w-100 fs-6 border-0" name="Update" value="update">Update</button>
  </div>
</form>
        <?php
                }
            }
        ?>
            </div>
        </div>
</body>
</html>