<?php 
  include('database.php');
  $qry="SELECT * FROM packages";
  $result=mysqli_query($con,$qry);
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
        .gallery_title{
          font-family: var(--fontEB) !important;
            font-size: 53px;
            font-family: 'light' !important;
            color: var(--colordark);
        }
        @media screen and (max-width:768px) {
            .img_item3{
                margin-bottom: 20px !important;
             }
        }
      </style>
</head>
<body>
    

        <div class="container spacer">
            <h1 class="text-center gallery_title">Gallery</h1>
            <div class="row row_img3 gx-3 mt-4">
              <?php 
                if(mysqli_num_rows($result)>0){
                  while($row=mysqli_fetch_assoc($result)){
                    echo "<div class='col-lg-4 mt-3'>";
                    echo "<div class='img_item3'>";
                    echo "<img src='img/".$row['img']."' alt= height='311px'>";
                    echo "<div class='text3'>";
                    echo "<p>Couple</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                  }
                }
              ?>
              <!-- <div class="col-lg-4">
                <div class="img_item3">
                   <img src="img/silder_img2.webp" alt="" height="311px">
                    <div class="text3">
                        <p>Couple</p>
                    </div>
                </div>
              </div> -->
              <!-- <div class="col-lg-4">
                <div class="img_item3">
                  <img src="img/silder_img3.jpeg" alt="" height="311px">
                    <div class="text3">
                        <p>PreWedding</p>
                    </div>
                </div>
              </div> -->
             
            </div>
          </div>

     <!-- bootstrap script file -->
     <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>