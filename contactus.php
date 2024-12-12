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
      <script src="./js/sweetalert.min.js"></script>
      <style>
        .contact_sec{
            background-color: #F8F7F4;
        }
        .contact_part p{
            font-size: 12px;
            letter-spacing: 4px;
            color: var(--colorpink);
        }
        .contact_part h4{
            font-size: 40px;
            font-family: var(--fontEB);
            color: var(--colordark);
        }
        .contact_part input, .contact_part textarea{
            background-color: transparent;
            border: 1px solid #dedede;
            font-size: 13px;
            color: var(--colordark);
            font-weight: 400;
            /* width: 105%; */
        }
      </style>
</head>
<body>
    
    <!-- contact us section start -->
        <div class="container spacer">
            <div class="row contact_sec">
                <div class="col-lg-6 p-5 contact_part">
                    <p class="fw-bold">CONTACT US</p>
                    <h4>Get In Touch!</h4>
                    <form action="" method="post">
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <input type="text" placeholder="Enter Full Name" class="p-2" name="name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Email Address" class="p-2" name="email">
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" id="" placeholder="Type Your Message" cols="43" row="30" class="mt-3 p-2 "></textarea>
                            </div>
                            <button type="submit" class="btn_sec border-0 p-2 ps-3 pe-3 w-50 ms-5 mt-4 fs-6 text-white" name="send">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 map_sec">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7438.677534672791!2d72.8792481400165!3d21.218410973452983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f6ef999fe8b%3A0x2b1e12024710c65b!2sChikuwadi%2C%20Nana%20Varachha%2C%20Surat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1723378435443!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                </div>
            </div>
        </div>
        
    <!-- contact us section end-->


    <?php 
    include('database.php');
    if(isset($_POST['send'])){
         
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];
    

        $sql="Insert into contactus (name,email,message) values ('$name','$email','$message')";
        if(mysqli_query($con,$sql)){
            echo "<script>
                    swal({
                        title: 'Success!',
                        text: 'feedback Successfully...!',
                        icon: 'success',
                        button: 'Ok',
                    }).then(function() {
                        window.location = 'contactus.php';
                    });
                </script>";
        }
        else{
            echo "<script>
            swal({
                title: 'Error!',
                text: 'feedback Not Successfully..!',
                icon: 'error',
                button: 'Ok',
            }).then(function() {
                window.location = 'contactus.php';
            });
        </script>";
        }
      }
?>

     <!-- bootstrap script file -->
     <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>