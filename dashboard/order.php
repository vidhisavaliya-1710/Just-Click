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
    <div class="pt-5 bg_admin pb-5">
        <h3 class="text-center">All Orders</h3>
    <table class="table-bordered" border="2" cellspacing="5" cellpadding="5">
        
    
            <tr class="bg_table text-white">
                <th>Id</th>
                <th>Full Name</th>
                <th>Email Id</th>
                <th>Guest</th>
                <th>Date</th>
                <th>City</th>
                <th>Country</th>
                <th>Packages And Amounts</th>
                <th>Function</th>
                <th>Action</th>
            </tr>
        
            
                <?php
                include('../database.php');
               
                 $qry="SELECT * FROM orders";
               
                
                 $res=$con->query($qry);
                
                 if($res->num_rows >0){
                    
                    
                     while($row =$res->fetch_assoc()){
                        
                        
                        //  echo "<tr>
                        //      <td>".$row['id']."</td>
                        //      <td>".$row['fullname']."</td>
                        //      <td>".$row['email']."</td>
                        //      <td>".$row['guest']."</td>
                        //      <td>".$row['dates']."</td>
                        //      <td>".$row['city']."</td>
                        //     <td>".$row['country']."</td>
                        //      <td>".$row['package']."</td>
                        //      <td>".$row['func']."</td>
                        //       <td>
                        //       <a herf='updateorder.php?id=".(isset($row['id']) ? $row['id']: '')."'>
                        //       <i class='fa-solid fa-trash text-danger ms-2 fs-5'></i>
                        //       </a>
                        //          <a href=''>
                        //             <i class='fa-regular fa-pen-to-square text-success fw-bold ms-2 fs-5 me-2'></i>
                        //          </a>
                        //       </td>
                        //  </tr>";
                        if(isset($_GET['id'])){   
                        $order_id=$_GET['id'];
            $sql="delete from orders where id='$order_id'";
            $result=$con->query($sql);
                        }
                        echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['fullname']."</td>
    <td>".$row['email']."</td>
    <td>".$row['guest']."</td>
    <td>". $row['dates']."</td>
    <td>".$row['city'] ."</td>
    <td>".$row['country']."</td>
    <td>".$row['package']."</td>
    <td>".$row['func']."</td>
    <td>
        
         
        <a href='deleteorder.php?id=".$row['id']."'>
            
            <i class='fa-solid fa-trash text-danger fs-5'></i>
        </a>
    </td>
</tr>";

                     }
                    }
                
    ?>
                     
            
        
    </table>
    </div>

    
</body>
</html>