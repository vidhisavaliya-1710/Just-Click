    <?php 
        include('../database.php');
        if(isset($_POST['updatefun'])){
            $id=$_POST['id'];
            $funname=$_POST['type'];
            $img=$_POST['img'];
    
            $update1=mysqli_query($con,"UPDATE packages SET type='$funname',img='$img' WHERE id=$id");
    
            if($update1){
                header("location:package.php");
            }
            else{
                echo "Error updating record";
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
                <h3 class="text-center">Update Packages And Function Type</h3>
            <div class="row mt-3">
            <div class="col-lg-6">
                <table border="1" class="">
       <tr class="table_sec text-white">
        <th class="p-3 fs-5">Function Type</th>
       </tr>
       <tr class="bg-white">
        <td class="ps-5 pt-2 fs-5">Function:</td>
       </tr>
       <tr class="bg-white">
        <td class="pt-2">
                <?php 
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $update_qry1=mysqli_query($con,"SELECT * FROM packages WHERE id=$id");

                        if(mysqli_num_rows($update_qry1)>0){
                            $fetch_qry1=mysqli_fetch_assoc($update_qry1);
                        }
                    }
                ?>

            <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $fetch_qry1['id']; ?>">
            <input type="text" placeholder="Enter Function Type" class="me-5 ms-5 pe-2 ps-2 fs-6 pt-2 pb-2" name="type" value="<?php echo $fetch_qry1['type']; ?>">
            <input type="file" class="me-5 ms-5 pe-2 ps-2 fs-6 pt-2 pb-2" name="img" value="<?php echo $fetch_qry1['img']; ?>">
            <tr class="bg-white">
                <td class="ps-5 pt-4 pb-4">
                <button type="submit" class="fs-5 border-0 p-2 btn_color text-white ps-4 pe-4" name="updatefun">Update Function</button>
                </td>
            </tr>
            </form>
        </td>
       </tr>
    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>