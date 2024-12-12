    <?php 
        include('../database.php');
        if(isset($_GET['id'])){
            $delete_id=$_GET['id'];
            $delete_qry=mysqli_query($con,"delete from orders where id=$delete_id");
            if($delete_qry){
                header("location:order.php");
            }
            else{
                echo "Order not deleted";
                header("location:order.php");
            }
        }
?>