<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="MDB/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link href="MDB/css/mdb.min.css" rel="stylesheet"><!--  font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- local css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- owlcarousal css -->
    <link rel="stylesheet" href="OwlCarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel/css/owl.theme.default.min.css">
    <title>seaway</title>
  </head>
  <body>
  <a name="top"></a>
      <head>

      </head>
      <div class="slider">
        <div class="load">

        </div>
        <div class="content">
            <div class="row">
                <div class="container col-md-8">
                    <?php include 'includes/nav.html'; ?>
                </div>
            </div>
          <div class="principal">
          <h1 class="h1-responsive font-weight-bold mt-sm-5">Seaway Travelers</h1>
                    <hr class="hr-light">
                    <h6 class="mb-4">
                      Seaway Travelers Limitedis Tours and Travel Company in Kenya that handles; Air ticketing 
                  both Domestic and International flights , Visa and Passport application, Car Hire, Hotel 
                  Bookings, Event management and consultancy, Meetings, Conferences ,Safaris, Beach 
                  Holidays, Package Tours and Holidays.<br>
                  Welcome. 
                </h6>
          </div>


        </div>

      </div>
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
      <div class="container-fluid" id="sliders">
      <a name="services"></a>
        <div class="row ml-auto mr-auto">
          <!-- services-->
<!--          <div class="card col-md-5" id="slide1">-->
<!--          <div class="card-header red-text text-center" style="margin-top: 10px;">-->
<!--                <h3> Our Services</h3>-->
<!--          </div>-->
<!--                <div class="card-body">-->
<!--                  --><?php //include 'includes/slider.html'; ?>
<!--                 -->
<!--                </div>-->
<!---->
<!--         -->
<!--          </div>-->
          <!-- about us content -->
          <div class=" card col-md-12" style="margin-left:20px;">
          <a name="aboutus"></a>
            <div class="card-header red-text text-center" style="margin-top: 10px;">
                <h3> About Us</h3>
            </div>
            <div class="card-body">
              
            
            <p>
            We are very excited to introduce <b>SEAWAY TRAVELERS LIMITED</b> as the one stop provider for 
            all your travel needs and requirements. We label ourselves as leading, innovative, and highly 
            efficient and look forward to demonstrate these qualities at the earliest possible chance. 
            Since established in 2018, the primary aim was to provide quality travel services to business 
            and leisure travelers. The agency continued to grow and branch out its interests to rise as one 
            of the exponents in the travel industry. 
            Supported by strong financial management, impressive customer satisfaction and constant 
            improvement, Seaway Travelers has expanded to cover various facets of the industry. Our 
            experience led to perfection in both our outbound and inbound units. 
            </p>
            </div>
           
        </div>
        
        </div>
      </div>
      <!-- button link to top of page -->
      <div class="row col-md-12 ">
        <a href="#top" class=" mr-auto ml-auto btn btn-outline-info rounded btn-block z-depth-0 my-4 waves-effect" style="width:200px; margin-top: auto; margin-bottom: auto;">back to top</a>
    </div>
    
      <!-- footer -->
    <div>
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