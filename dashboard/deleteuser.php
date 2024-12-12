    <?php 
        include('../database.php');
        if(isset($_GET['id'])){
            $delete_id=$_GET['id'];
            $delete_qry=mysqli_query($con,"DELETE From users WHERE id=$delete_id");
            if($delete_qry){
                header("location:userDetails.php");
                
            }
            else{
                echo "Not Delete User";
                header("location:userDetails.php");
            }
        }
    ?>