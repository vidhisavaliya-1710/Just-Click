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
        .head_sec{
        /* background-color: #F8F7F4; */
        /* background-color: var(--colordark); */
        background-color: #1c3a57;
        
        height: 55px;
        /* width: 100%; */
       }
       .serach{
        position: relative;
       }
       .serach_icon{
        position: absolute;
        left: 35.5%;
        top: 16px;
        font-size: 18px;
        background-color: white;
        color: var(--colordark);
       }
       
      </style>
</head>
<body>
    

       <div class="head_sec p-3 sticky-top">
            <nav class="d-flex align-items-center">
                
                <i class='fa fa-bars fs-4 pe-3 text-white'></i>
                
            <form action="#">
                <div class="form-input">
                    
                    <input type="search" placeholder="Search..." class="rounded border-0 ps-3 p-1 rounded-5 serach">
                    <button type="submit" class="search-btn border-0 rounded-5 serach_icon p-1 pe-3 ps-3"><i class="fa fa-search"></i></button>
                </div>
            </form>
            </nav>
       </div>

       <?php include('package.php') ?>
    
    <!-- bootstrap script file -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- script file -->
     <script src="js/script.js"></script>

</body>
</html>