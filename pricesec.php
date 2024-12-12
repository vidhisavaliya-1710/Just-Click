<?php 
    include('database.php');
    $qry="SELECT * FROM packages";
    $result=mysqli_query($con,$qry);

    // $qry1="SELECT * FROM function_type";
    // $result1=mysqli_query($con,$qry1);

?>

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
      <style>
        
        .price_sec{
            border: 1px solid #dedede;
        }
        .price_sec h3{
            color: var(--colorpink);
        }
        .pricing_sec h3,h5,p{
            /* line-height: 13px !important;
            font-size: 13px; */
            color: var(--colordark);
        }
        .pricing_sec button{
            font-size: 13px;
        }
        .price_title{
            font-family: var(--fontEB) !important;
            font-size: 53px;
            font-family: 'light' !important;
            color: var(--colorpink);
        }
        .amonut_sec{
            color: var(--colorpink) !important;
        }
        @media screen and (max-width:768px) {
            .price_sec{
                margin-bottom: 20px !important;
             }
        }
      </style>
</head>
<body>
    

    <!-- pricing section start -->
    <!-- <div class="container spacer">
        <h1 class="price_title text-center mb-3">Wedding Plan</h1>
            <div class="row">
                <div class="col-lg-4">
                    <div class="price_sec">
                        <img src="img/blog_1_2.png" alt="" height="280px">
                        <div class="text-center mt-4">
                            <h4>Pre wedding</h4>
                            <h3>₹ 1,50,000 <span class="fs-6">/ starting from</span></h3>
                        </div>
                        <hr>
                        <div class="pricing_sec text-center mb-4">
                            <p>This package includes individual meetings.</p>
                            <p>Up to two hours photo shoot.</p>
                            <p>We’ll make some pictures using our drone.</p>
                            <p>All pictures will be retouched.</p>
                            <p>More than 100 pictures shared.</p>
                            <button class="btn btn_sec text-white me-3 rounded-0" type="submit"><a href="reservation.php" class="text-white">ORDER NOW</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                <div class="price_sec">
                        <img src="img/gallery-1.jpg" alt="" height="280px">
                        <div class="text-center mt-4">
                            <h4>Wedding</h4>
                            <h3>₹ 2,00,000 <span class="fs-6">/ starting from</span></h3>
                        </div>
                        <hr>
                        <div class="pricing_sec text-center mb-4">
                            <p>This package includes individual meetings.</p>
                            <p>Up to five hours photo shoot.</p>
                            <p>We’ll make some pictures using our drone.</p>
                            <p>All pictures will be retouched.</p>
                            <p>More than 150 pictures shared.</p>
                            <button class="btn btn_sec text-white me-3 rounded-0" type="submit"><a href="reservation.php" class="text-white">ORDER NOW</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                <div class="price_sec">
                        <img src="img/portfolio1_1.png" alt="">
                        <div class="text-center mt-4">
                            <h4>Pre wedding + Wedding</h4>
                            <h3>₹ 3,00,000 <span class="fs-6">/ starting from</span></h3>
                        </div>
                        <hr>
                        <div class="pricing_sec text-center mb-4">
                            <p>The package includes up to twelve hours of shooting your special day.</p>
                            <p>Team consists of two photographers to be sure that we capture all special moments.</p>
                            <p>All pictures will be retouched.</p>
                            <p>More than 1000 pictures shared in individual gallery online.</p>
                            <button class="btn btn_sec text-white me-3 rounded-0" type="submit"><a href="reservation.php" class="text-white">ORDER NOW</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container spacer">
        <h1 class="price_title text-center mb-3">Packages</h1>
            <div class="row">
             
            <?php 
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<div class='col-lg-4 mt-3'>";
                        echo "<div class='card text-center' style='width: 18rem;'>";
                        echo "<div class='card-body pricing_sec'>";
                        echo "<h3 class='card-title'>Package</h3><hr/>";
                        
                        echo "<p class='card-text fs-6'>".$row['package_name']."</p>";
                        echo "<p class='pricing_sec fs-6'>24/7 availability</p>";
                        echo "<p>Provide 2 photographers and 1 videographers capture all the memory of the happy moments.</p>";
                        echo "<h3 class='amonut_sec'>".$row['amounts']."</h3>";
                        echo " <button class='btn btn_sec text-white me-3 rounded-0 mt-2' type='submit'><a href='reservation.php' class='text-white'>ORDER NOW</a></button>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                }
            ?>

                







  
   
    
    
   
    
   
  <!-- </div>
</div>
</div>
<div class="col-lg-4">
<div class="card text-center" style="width: 18rem;">
  <div class="card-body pricing_sec">
    <h3 class="card-title">Package</h3><hr/>
    <p class="pricing_sec fs-4">PreWedding</p>
    <p class="card-text fs-6">1 day photography</p>
    <p>Provide 2 photographers and 1 videographers capture all the memory of the happy moments.</p>
    <h3>30,000 - 50,000</h3>
    <button class="btn btn_sec text-white me-3 rounded-0 mt-2" type="submit"><a href="reservation.php" class="text-white">ORDER NOW</a></button>
  </div>
</div>
</div>
<div class="col-lg-4">
<div class="card text-center" style="width: 18rem;">
  <div class="card-body pricing_sec">
    <h3 class="card-title">Package</h3><hr/>
    <p class="pricing_sec fs-4">PreWedding</p>
    <p class="card-text fs-6">1 day photography</p>
    <p>Provide 2 photographers and 1 videographers capture all the memory of the happy moments.</p>
    <h3>30,000 - 50,000</h3>
    <button class="btn btn_sec text-white me-3 rounded-0 mt-2" type="submit"><a href="reservation.php" class="text-white">ORDER NOW</a></button>
  </div>
</div>
</div> -->
            </div>
            
        </div>
       
     <!-- pricing section end -->

    <!-- bootstrap script file -->
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>