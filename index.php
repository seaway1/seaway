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
                <div class="container col-md-8" id="positionnav">
                    <?php include 'includes/nav.html'; ?>
                </div>
            </div>
            <!--Owl carousel-->
            <div class="container" id="owlstuff">
                <div class="row">


                    <div class="owl-carousel owl-theme">
                        <div class="item"><a href="services"><img alt="image" class="img-fluid" src="images/image39.jpg"></a></div>
                        <div class="item"><a href="services"><img alt="image" class="img-fluid" src="images/drinkshtl.jpg"></a></div>
                        <div class="item"><a href="services"><img alt="image" class="img-fluid" src="images/image17.jpg"></a></div>
                        <div class="item"><a href="services"><img alt="image" class="img-fluid" src="images/image28.jpg"></a></div>
                        <div class="item"><a href="services"><img alt="image" class="img-fluid" src="images/plane.jpg"></a></div>
                        <div class="item"><a href="services"><img alt="image" class="img-fluid" src="images/image11.jpg"></a></div>
                        <div class="item"><a href="services"><img alt="image" class="img-fluid" src="images/image26.jpg"></a></div>

                    </div>
                </div>
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
                  items:3
              },
              480:{
                  items:3
              },
              768:{
                  items:5
              },
              1000:{
                  items:5
              },
              1200:{
                  items:5
              }
          }
      })
  </script>
    </body>
</html>