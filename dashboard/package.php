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
    
    // include('../database.php');
    $qry="SELECT * FROM packages";
    $result=mysqli_query($con,$qry);

    $qry1="SELECT * FROM packages";
    $result1=mysqli_query($con,$qry1);
?>

<?php 
    
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
      <script src="../js/sweetalert.min.js"></script>
      <style>
        .table_sec{
            background-color: #3D8ECA;
        }
        .btn_color{
            background-color: #3D8ECA;
        }
        .bg_admin{
            background-color: #E5EBF2;
        }
        
      </style>
</head>
<body>
    
        <?php include('dash.php')?>

   <div class="pt-3 bg_admin pb-5 w-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                <table border="1" class="">
       <tr class="table_sec text-white">
        <th class="p-3 fs-5">Packages And Amounts</th>
        <th></th>
       </tr>
       
       <tr class="bg-white">
        <td class="ps-5 pt-2 fs-5">Packages:</td>
        <td class="ps-5 pt-2 fs-5">Function_Type:</td>
       </tr>
       <tr class="bg-white">
        <td class="pt-2">
            <form action="" method="post">
                <div class="row">
                    <div class="col-lg-6">
                    <input type="text" placeholder="Enter Packages" class="me-5 ms-5 pe-2 ps-2 fs-6 pt-2 pb-2" name="package_name">
                    <input type="text" placeholder="Enter Amounts" class="me-5 ms-5 pe-2 ps-2 fs-6 pt-2 pb-2 mt-3" name="amounts">
                    </div>
                    </td>
                    
                        <td>
                            <input type="text" placeholder="Enter Function Type" class="me-5  ms-5 pe-2 ps-2 fs-6 pt-2 pb-2" name="type">
                    <input type="file" class="me-5 ms-5 pe-2 ps-2 fs-6 pt-2 pb-2 mt-3" name="img">
                        </td>
                    </tr>   
                    <!-- <div class="col-lg-6">
                        <h4 class="ms-5">Function Type   </h4>
                    <input type="text" placeholder="Enter Function Type" class="me-5  ms-5 pe-2 ps-2 fs-6 pt-2 pb-2" name="type">
                    <input type="file" class="me-5 ms-5 pe-2 ps-2 fs-6 pt-2 pb-2" name="img">
                    </div> -->
                    
                </div>
           
           
           
           
            <tr class="bg-white bg_width">
                <td class="ps-5 pt-4 pb-4">
                <button type="submit" class="fs-5 border-0 p-2 btn_color text-white ps-4 pe-4" name="add">Add</button>
                </td>
                <td></td>
            </tr>
            </form>
        </td>
       </tr>
    </table>
                
  
                
                 </div>

                <div class="col-lg-8 mt-3">
                    <h3>All Packages</h3>
                    <table class="table-bordered" border="2" cellspacing="5" cellpadding="5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Packages</th>
                                <th>Amount</th>
                                <th>Actions</th>
                            </tr>
                            <tbody>
                                <?php 
                                    if(mysqli_num_rows($result)>0){
                                        while($row=mysqli_fetch_assoc($result)){
                                            echo "<tr>";
                                            echo "<td>".$row['id']."</td>";
                                            echo "<td>".$row['package_name']."</td>";
                                            echo "<td>".$row['amounts']."</td>";
                                            echo "<td>";
                                            echo "<a href='updatepack.php?id=" . $row["id"] . "' class='text-success'><i class='fa-solid fa-pen-to-square'></i></a> ";
                                            echo "<a href='deletepack.php?id=" . $row["id"] . "' class='text-danger'><i class='fa-solid fa-trash'></i></a>";
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                    }
                                ?>
                            </tbody>
                        </thead>
                    </table>
                </div>
              

                <div class="col-lg-4 mt-3">
                    <h3>All Functions</h3>
                    <table class="table-bordered" border="2" cellspacing="5" cellpadding="5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Function Name</th>
                                <th>Images</th>
                                <th>Actions</th>
                            </tr>
                            <tbody>
                                <?php 
                                    if(mysqli_num_rows($result1)>0){
                                        while($row=mysqli_fetch_assoc($result1)){
                                            echo "<tr>";
                                            echo "<td>".$row['id']."</td>";
                                            echo "<td>".$row['type']."</td>";
                                            echo "<td><img src='../img/".$row['img']."'/></td>";
                                            echo "<td>";
                                            echo "<a href='updatefunc.php?id=" . $row["id"] . "' class='text-success'><i class='fa-solid fa-pen-to-square'></i></a> ";
                                            echo "<a href='deletefunc.php?id=" . $row["id"] . "' class='text-danger'><i class='fa-solid fa-trash'></i></a>";
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                    }
                                ?>
                            </tbody>
                        </thead>
                    </table>
                </div>


            </div>
        </div>
   </div>

   <?php
        include('../database.php');
        if(isset($_POST['add'])){
            $pack=$_POST['package_name'];
            $amount=$_POST['amounts'];
            $type=$_POST['type'];
            $img=$_POST['img'];

            $sql="insert into packages(package_name,amounts,type,img) values ('$pack','$amount','$type','$img')";
            $insert=mysqli_query($con,$sql);
            if($insert){
                echo "<script>
                swal({
                    title: 'Success!',
                    text: 'Package Add SuccessFully...',
                    icon: 'success',
                    button: 'Ok',
                }).then(function() {
                    window.location = 'package.php';
                });
            </script>";
            }
            else{
                echo "<script>
            swal({
                title: 'Error!',
                text: 'Package Not Add',
                icon: 'error',
                button: 'Ok',
            }).then(function() {
                window.location = 'package.php';
            });
        </script>";
            }
           
        }

        // if(isset($_POST['added'])){
        //     $type=$_POST['type'];
        //     $img=$_POST['img'];

        //     $sql="insert into packages(type,img) values ('$type','$img')";
        //     if(mysqli_query($con,$sql)){
        //         echo "<script>
        //         swal({
        //             title: 'Success!',
        //             text: 'Function Type Add SuccessFully...',
        //             icon: 'success',
        //             button: 'Ok',
        //         }).then(function() {
        //             window.location = 'package.php';
        //         });
        //     </script>";
        //     }
        //     else{
        //         echo "<script>
        //         swal({
        //             title: 'Error!',
        //             text: 'FUnction Type Not Add',
        //             icon: 'error',
        //             button: 'Ok',
        //         }).then(function() {
        //             window.location = 'package.php';
        //         });
        //     </script>";
        //     }
        // }
   ?>
    <!-- bootstrap script file -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- script file -->
     <script src="js/script.js"></script>
</body>
</html>