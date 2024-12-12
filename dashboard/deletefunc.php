    <?php 
        include('../database.php');
        if(isset($_GET['id'])){
            $delete_id1=$_GET['id'];
            $delete_qry1=mysqli_query($con,"Delete from packages where id=$delete_id1");
            if($delete_qry1){
                header("location:package.php");
            }
            else{
                echo "Function not delete..";
                header("location:package.php");
            }
        }
    ?>