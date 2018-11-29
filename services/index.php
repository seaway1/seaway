<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../MDB/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link href="../MDB/css/mdb.min.css" rel="stylesheet">
    <!--  font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- local css -->
    <link rel="stylesheet" href="../css/style.css">
    <title>About Seaway Travelers</title>
</head>
<body>

<!--nav-->
<div class="row mt-1">
    <div class="container col-md-8">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded">
            <a class="navbar-brand pt-0 waves-effect" href="">
                <img src="../images/sewaylogo.jpg" width="70" height="50" class="d-inline-block align-top rounded" alt="SeaWay logo">

            </a>
            <h2 class=" white-text">Seaway Travelers</h2>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../aboutus">About Us <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contucts">Contuct us </a>
                    </li>
                </ul>
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="#" class="nav-link waves-effect">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link waves-effect">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link waves-effect">
                            <i class="fa fa fa-linkedin"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>

<!--services-->
<div class="row mt-5">
    <div class="container col-md-11">
        <?php include '../includes/services.html';?>
    </div>
</div>

<!--footer-->
<div class="row mt-5">
    <a name="contucts"></a>
    <div class="container col-md-11">
        <?php include '../includes/footer.html';?>
    </div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- Jquery -->
<script src="../MDB/js/jquery-3.3.1.min.js"></script>
<!-- popper js -->
<script src="../MDB/js/popper.min.js"></script>

<!-- bootsrap.js -->
<script src="../MDB/js/bootstrap.min.js"></script>

</body>
</html>