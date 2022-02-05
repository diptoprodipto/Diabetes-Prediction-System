<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Diabetes Prediction</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="styles/css/styles.css" rel="stylesheet">
    <link href="indexStyle.css" rel="stylesheet">
    <link href="styles/css/fontawesome-all.css" rel="stylesheet">
    <link href="styles/css/swiper.css" rel="stylesheet">
    <link href="styles/css/magnific-popup.css" rel="stylesheet">
    <link href="styles/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- Favicon  -->
    <link rel="icon" href="templates/logo.svg">
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
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->
        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="/"><img src="templates/logo.svg" alt="alternative" style="width: 40px; height: 40px;"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="templates/prediction.php">PREDICT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="templates/login.php">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">ABOUT</a>
                </li>
            </ul>

        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1><span id="js-rotating">Diabetes Prediction, Using Machine Learning</span></h1>
                            <p class="p-heading p-large"></p>
                            <a class="btn-solid-lg page-scroll" href="templates/prediction.php">Predict</a>
                            <a class="btn-solid-lg page-scroll" href="templates/register.php">Sign Up</a>

                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!-- Description -->
    <!-- Team -->
    <section id="team" class="pb-5">
        <div class="container">
            <div class="row">
                <!-- Team member -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="https://icon-library.com/images/registration-icon/registration-icon-6.jpg"></p>
                                        <h4 class="card-title">Predict & Do more</h4>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Register</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                        <button class="submit btn btn-primary" type="button" style="width: 200px; font-size:15px;font-weight:bold;">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="https://nanohub.org/app/site/groups/33013/uploads/5387109-machine-learning-icon-iot-slam-machine-learning-icon-300_300_preview.png" alt="card image"></p>
                                        <h4 class="card-title">Explore our model</h4>
                                        <p class="card-text"></p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Learn about our model</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                        <button class="submit btn btn-primary" type="button" style="width: 200px; font-size:15px;font-weight:bold;">Learn about the model</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="https://library.kissclipart.com/20180831/qie/kissclipart-diabetes-icon-clipart-diabetes-mellitus-blood-gluc-adf0fd1c89977f44.png" alt="card image"></p>
                                        <h4 class="card-title">Learn about Diabetes</h4>
                                        <p class="card-text"></p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Learn about Diabetes</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                        <button class="submit btn btn-primary" type="button" style="width: 200px; font-size:15px;font-weight:bold;">Learn about Diabetes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
            </div>
        </div>
    </section>
    <!-- Team -->

    <!-- Footer -->
    <div id=contact class="footer">
        <div class="container">
            <div class="row">
                <!--   <img class="card-image" src="styles/images/" width="150" height="150" alt="alternative"> -->

                <div class="col-md-6 col-lg-6 text-center text-lg-left text-xl-left">
                    <div class="text-container about">
                        <h4>Developed by:</h4>
                        <h2 class="white">Prodipto Roy Dipto</h2>
                        <p class="white">Daffodil International University, Dhaka</p>
                        <p class="white">Email: prodipto15-9689@diu.edu.bd</p>

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <br>
                <div class="col-md-6 col-lg-6 text-center">
                    <div class="text-container">
                        <h4>Connect</h4>

                        <a href="#" class="fa fa-github" style="font-size: 30px; text-decoration: none;"></a>
                        <a href="#" class="fa fa-linkedin" style="font-size: 30px; text-decoration: none;"></a>
                        <a href="#" class="fa fa-google" style="font-size: 30px; text-decoration: none;"></a>
                        <a href="#" class="fa fa-facebook" style="font-size: 30px; text-decoration: none;"></a>

                        <!--
                        <ul class="list-unstyled li-space-lg white">
                            <li>
                                <a class="white" href="">LinkedIn</a>

                            </li>
                            <li>
                                <a class="white" href="">Github</a>

                            </li>
                            <li>
                                <a class="white" href="">Kaggle</a>
                            </li>
                        </ul>
                        -->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->

                <!--
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Tools Used</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="https://www.ichec.ie/about/infrastructure/kay">ICHEC Kay</a>
                            </li>
                            <li>
                                <a class="white" href="https://public.tableau.com/profile/kunal.goyal#!/vizhome/lendingclub_15949916461750/Dashboard1">Tableau</a>
                            </li>
                            <li class="media">
                                <a class="white" href="https://www.lendingclub.com/info/statistics.action">Lending Club</a>
                            </li>
                        </ul>
                    </div> 
                </div> -->

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->



    <!-- Scripts -->
    <script src="styles/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="styles/js/popper.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="styles/js/bootstrap.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="styles/js/jquery.easing.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="styles/js/jquery.magnific-popup.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="styles/js/morphext.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="styles/js/isotope.pkgd.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="styles/js/validator.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="styles/js/scripts.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->

</body>

</html>