<?php

include 'session.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nearby Hospitals</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <!--  <link href="../styles/css/styles.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="hospitalStyle.css?v=<?php echo time(); ?>">
    <link href="../styles/css/fontawesome-all.css" rel="stylesheet">
    <link href="../styles/css/swiper.css" rel="stylesheet">
    <link href="../styles/css/magnific-popup.css" rel="stylesheet">
    <link href="../styles/css/bootstrap.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="logo.svg">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->

    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <!-- end of preloader -->

    <!-- Navbar -->

    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">

        <!-- Image Logo -->
        <a class="navbar-brand logo-image ml-5" href="../index.php"><img src="logo.svg" alt="alternative" style="width: 40px; height: 40px;" alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse mr-5" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="../index.php">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="prediction.php">PREDICT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="profile.php">PROFILE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">ABOUT</a>
                </li>
            </ul>

        </div>
    </nav>

    <!-- end of navbar -->

    <div id="login-column" class="col-md-12" style="height: 120px; background: #113448;">
        <div class="main fixed-top">

            <!-- Another variation with a button -->
            <form method="POST">
                <div class="input-group">
                    <input type="text" name="address" class="form-control" placeholder="Enter your area">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit" name="submit_address">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <?php

    if (isset($_POST["submit_address"])) {
        $address = $_POST["address"];
    ?>
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>+diabetes&output=embed"></iframe>
    <?php
    }

    ?>

    <script src="../styles/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../styles/js/popper.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../styles/js/bootstrap.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../styles/js/jquery.easing.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../styles/js/jquery.magnific-popup.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../styles/js/morphext.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../styles/js/isotope.pkgd.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../styles/js/validator.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../styles/js/scripts.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../styles/js/swiper.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->


</body>

</html>