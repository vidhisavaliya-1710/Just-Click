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
    // include ('../database.php');
    $sql="SELECT * FROM users";
    $result=$con->query($sql);
   
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
        .bg_table{
            background-color: #3D8ECA !important;
        }
        .bg_admin{
            background-color: #E5EBF2;
        }
      </style>
</head>
<body>
    
        <?php include('dash.php')?>
        
        <div class="pt-5 bg_admin pb-5 text-center w-100">
        <h2 class="mb-4">All User</h2>
                <div class="d-flex justify-content-center">
            <table class="table-bordered mt-3" border="2" cellspacing="5" cellpadding="5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>User Name</th>
                        <th>Email Id</th>
                        <th>Password</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if($result->num_rows > 0){
                            while ($row=$result->fetch_assoc()){
                                echo "<tr>";
                                echo "<td>".$row['id']."</td>";
                                echo "<td>".$row['fullname']."</td>";
                                echo "<td>".$row['username']."</td>";
                                echo "<td>".$row['email']."</td>";
                                echo "<td>".$row['password']."</td>";
                                echo "<td>";
                            // echo "<a href='updateuser.php?id=" . $row["id"] . "' class='text-success'><i class='fa-solid fa-pen-to-square'></i></a> ";
                            echo "<a href='deleteuser.php?id=" . $row["id"] . "' class='text-danger'><i class='fa-solid fa-trash'></i></a>";
                            echo "</td>";
                            echo "</tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
</body>
</html>