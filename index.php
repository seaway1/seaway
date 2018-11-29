<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="MDB/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link href="MDB/css/mdb.min.css" rel="stylesheet">
      <!--  font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- local css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- owlcarousal css -->
    <link rel="stylesheet" href="OwlCarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel/css/owl.theme.default.min.css">
    <title>seaway</title>
  </head>
  <body>
<!--  landing page slider-->
       <div class="slider ">
        <div class="load fixed-top">

        </div>
        <div class="content">
            <div class="row">
                <div class="container col-md-8">
                    <?php include 'includes/nav.html'; ?>
                </div>
            </div>

        </div>

      </div>
<!--Owl carousel-->
  <div class="container mt-5">
      <div class="row">


          <div class="owl-carousel owl-theme">
              <div class="item"><img alt="image" class="img-fluid" src="images/drinkshtl.jpg"></div>
              <div class="item"><img alt="image" class="img-fluid" src="images/carhire.jpg"></div>
              <div class="item"><img alt="image" class="img-fluid" src="images/deliveryServices.jpg"></div>
              <div class="item"><img alt="image" class="img-fluid" src="images/eventManagement.jpg"></div>
              <div class="item"><img alt="image" class="img-fluid" src="images/mountains.jpg"></div>
              <div class="item"><img alt="image" class="img-fluid" src="images/plane.jpg"></div>
              <div class="item"><img alt="image" class="img-fluid" src="images/sewaylogo.jpg"></div>

          </div>
      </div>
  </div>

      <!-- footer -->
    <div>
        <a name="contucts"></a>
    <a name="contucts"></a>
        <?php include 'includes/footer.html'; ?>
    </div>



     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <!-- Jquery -->
      <script src="MDB/js/jquery-3.3.1.min.js"></script>
    <!-- popper js -->
    <script src="MDB/js/popper.min.js"></script>
    
    <!-- bootsrap.js -->
    <script src="MDB/js/bootstrap.min.js"></script>
  <!-- owl carousel js -->
  <script src="OwlCarousel/js/owl.carousel.min.js"></script>
  <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
          loop:true,
          margin:10,
          nav:false,
          dot:false,
          center:true,
          autoplay:true,
          responsive:{
              0:{
                  items:1
              },
              480:{
                  items:3
              },
              768:{
                  items:5
              }
          }
      })
  </script>
    </body>
</html>