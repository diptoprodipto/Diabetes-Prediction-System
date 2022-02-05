<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prediction</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="predictionStyle.css" rel="stylesheet">
    <link href="../styles/css/fontawesome-all.css" rel="stylesheet">
    <link href="../styles/css/swiper.css" rel="stylesheet">
    <link href="../styles/css/magnific-popup.css" rel="stylesheet">
    <link href="../styles/css/bootstrap.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="predictionAPI.js"></script>

    <!-- Favicon  -->
    <link rel="icon" href="logo.svg">
</head>

<body data-spy="scroll" data-target=".fixed-top" style="background-color: black;">
    <!-- Preloader -->

    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <!-- end of preloader -->


    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image ml-5" href="../index.php"><img src="logo.svg" style="width: 40px; height: 40px;" alt="alternative"></a>

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
                    <a class="nav-link page-scroll" href="login.php">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="register.php">REGISTER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">ABOUT</a>
                </li>
            </ul>

        </div>
    </nav> <!-- end of navbar -->

    <!-- end of navbar -->


    <!-- Terms Content -->
    <div class="container" style="text-align: center;">
        <br><br><br><br>
        <!--
        <div class="result text-white" style="text-align:center; color:white;">
            <h2 style="color: white;"></h2>
        </div>-->
        <br>

        <form action="/predict" method="GET">


            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="background-color:#B40431;">
                        <div class="card-body">
                            <h5 class="card-title" style="color:white;">Age</h5>

                            <input type="text" name="age" id="age" placeholder="Enter your age" required="required" style="text-align: center;" /><br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="background-color:#B40431;">
                        <div class="card-body">

                            <h5 class="card-title" style="color:white;">Gender</h5>
                            <select name="gender" id="gender" required="required" style="width: 100px;">
                                <option value="1">Male</option>
                                <option value="0">Female</option>
                            </select><br>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="background-color:#B40431;">
                        <div class="card-body">
                            <h5 class="card-title" style="color:white;">Polyuria</h5>

                            <select name="polyuria" id="polyuria" required="required" style="width: 100px;">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select><br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="background-color:#B40431;">
                        <div class="card-body">
                            <h5 class="card-title" style="color:white;">Polydipsia</h5>

                            <select name="polydipsia" id="polydipsia" required="required" style="width: 100px;">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <br>


            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="background-color:#B40431;">
                        <div class="card-body">
                            <h5 class="card-title" style="color:white;">Sudden Weight Loss</h5>

                            <select name="sudden" id="sudden" required="required" style="width: 100px;">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select><br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="background-color:#B40431;">
                        <div class="card-body">
                            <h5 class="card-title" style="color:white;">Itching</h5>

                            <select name="itching" id="itching" required="required" style="width: 100px;">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select><br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="background-color:#B40431;">
                        <div class="card-body">

                            <h5 class="card-title" style="color:white;">Irritability</h5>
                            <select name="irritability" id="irritability" required="required" style="width: 100px;">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select><br>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="background-color:#B40431;">
                        <div class="card-body">

                            <h5 class="card-title" style="color:white;">Delayed Healing</h5>
                            <select name="delayed" id="delayed" required="required" style="width: 100px;">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select><br>

                        </div>
                    </div>
                </div>
            </div>

            <br>


            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="card" style="background-color:#B40431;">
                        <div class="card-body">
                            <h5 class="card-title" style="color:white;">Partial Paresis</h5>

                            <select name="partial" id="partial" required="required" style="width: 100px;">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select><br>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card" style="background-color:#B40431;">
                        <div class="card-body">
                            <h5 class="card-title" style="color:white;">Alopecia</h5>

                            <select name="alopecia" id="alopecia" required="required" style="width: 100px;">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select><br>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <button class="submit btn" onclick="onClickedPredict()" type="button" data-toggle="modal" data-target="#myModal" style="width:400px;font-size:25px;font-weight:bold;background: #113448;color: white;">PREDICT</button>
            <!-- Submit -->
            <!--<input type="submit" onclick="onClickedPredict()" value="Predict" class="btn btn-warning" style="width:500px;font-size:25px;font-weight:bold;">-->
        </form>

        <br>
        <br>

    </div>


    <div id='myModal' class='modal fade' role='dialog'>
        <div class='modal-dialog'>

            <!-- Modal content-->
            <div class='modal-content'>
                <div class='modal-header'>
                    <h4 class='modal-title text-center'>Prediction Result</h4>
                    <button type='button' class='close' data-dismiss='modal'>&times;</button>

                </div>

                <div class='modal-body text-center' id="prediction">
                    <h4>Please wait...</h4>
                </div>

                <div class="modal-footer">
                 <!--   <button type="submit" name="submit" class="btn btn-primary">Save your data</button>-->
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>

        </div>
    </div>


    <!-- end of copyright -->
    <!-- end of copyright -->
    <!-- Scripts -->

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

    <!-- JavaScript -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
-->
</body>

</html>