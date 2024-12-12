    <?php 
        include('../database.php');
        if(isset($_GET['id'])){
            $delete_id=$_GET['id'];
            $delete_qry=mysqli_query($con,"Delete from packages where id=$delete_id");
            if($delete_qry){
                header("location:package.php");
            }
            else{
                echo "Package not delete..";
                header("location:package.php");
            }
        }

        
?>