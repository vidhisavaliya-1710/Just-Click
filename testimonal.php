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
    <!-- owl carousel file -->
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     
    <!-- stylesheet file -->
     <link rel="stylesheet" href="css/style.css">
     <!-- responsive file -->
      <link rel="stylesheet" href="css/media.css">
      <style>
        .test_sec img{
            width: 100px !important;
           /* padding-left: 20px; */
            margin-left: 230px !important; 
        }
        .test_sec{
            display: flex;
            justify-content: center;
            
        }
        .client_sec{
          width: 650px;
          background-color: #FDF5F0;
        }
        .client_sec h4{
          color: #666861;
          font-family: var(--fontEB);
          font-size: 30px;
          font-weight: 500;
        }
        .client_sec p{
          color: #84847c;
        }
        .title_sec h2{
          font-family: var(--fontEB);
          font-size: 40px !important;
          color: var(--colordark);
        }
        
        
      </style>
</head>
<body>

<div class="container spacer title_sec">
  <h2 class="text-center mb-4">Our Testimonials</h2>

     <div class="owl-carousel owl-theme" id="testimonal">
        <div class="item text-center test_sec">
           <div class="client_sec pt-4 pb-3 ps-5 pe-5">
            <img src="img/testi_1_1.png" alt="" height="100px" width="100px" class="text-center mb-2">
            <div>
            <h4 class="mb-2">Andrew Daniel</h4>
            <p>“Laculis primis leo pharetra ac varius diam class odio, turpis nascetur gravida senectus sollicitudin lacus cursus tortor”</p>
          </div>
           </div>
        </div>
        <div class="item text-center test_sec">
          <div class="client_sec pt-4 pb-3 ps-5 pe-5">
            <img src="img/testi_1_2.png" alt="" height="100px" width="100px" class="text-center mb-2">
            <div>
            <h4 class="mb-2">Louisa Abadie</h4>
            <p>“Laculis primis leo pharetra ac varius diam class odio, turpis nascetur gravida senectus sollicitudin lacus cursus tortor”</p>
          </div>
           </div>
        </div>
        <div class="item text-center test_sec">
          <div class="client_sec pt-4 pb-3 ps-5 pe-5">
            <img src="img/testi_1_1.png" alt="" height="100px" width="100px" class="text-center mb-2">
            <div>
            <h4 class="mb-2">Andrew Daniel</h4>
            <p>“Laculis primis leo pharetra ac varius diam class odio, turpis nascetur gravida senectus sollicitudin lacus cursus tortor”</p>
          </div>
           </div>
        </div>
        <div class="item text-center test_sec">  
          <div class="client_sec pt-4 pb-3 ps-5 pe-5">
            <img src="img/testi_1_3.png" alt="" height="100px" width="100px" class="text-center mb-2">
            <div>
            <h4 class="mb-2">Marks Daniel</h4>
            <p>“Laculis primis leo pharetra ac varius diam class odio, turpis nascetur gravida senectus sollicitudin lacus cursus tortor”</p>
          </div>
           </div>
        </div>
      </div>
      </div>

      <!-- bootstrap script file -->
     <script src="js/bootstrap.bundle.min.js"></script>
    <!-- owl carousel script file -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- script file -->
     <script src="js/script.js"></script>
     <script>
    $(document).ready(function(){
        $('#testimonal').owlCarousel({
        loop:true,
        margin:20,
        nav:false,
        // dots:false,
        items:1,
        autoplay:true,
        autoplayTimeout:3000,
        autoplaySpeed:2000,
  	    smartSpeed:1000,
        responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:false,
            loop:true
        }
      }
        })
    })
     </script>
</body>
</html>