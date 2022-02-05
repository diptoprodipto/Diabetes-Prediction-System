<?php

include 'session.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <!--  <link href="../styles/css/styles.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="profileStyle.css">
    <link href="../styles/css/fontawesome-all.css" rel="stylesheet">
    <link href="../styles/css/swiper.css" rel="stylesheet">
    <link href="../styles/css/magnific-popup.css" rel="stylesheet">
    <link href="../styles/css/bootstrap.css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!-- Favicon  -->
    <link rel="icon" href="logo.svg">
</head>

<body data-spy="scroll" data-target=".fixed-top" style="background-color: #17a2b8">

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
                    <a class="nav-link page-scroll" href="#contact">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="logout.php">LOGOUT</a>
                </li>
            </ul>

        </div>
    </nav>

    <!-- end of navbar -->



    <!----edit Data--->

    <?php

    $get_data = "SELECT * FROM users";
    $run_data = mysqli_query($conn, $get_data);

    while ($row = mysqli_fetch_array($run_data)) {
        
        $name = $row['name'];
        $email = $row['email'];
        $password = $row['password'];
        $image = $row['image'];
        echo "

    <div id='myModal' class='modal fade' role='dialog'>
    <div class='modal-dialog'>

        <!-- Modal content-->
        <div class='modal-content'>
        <div class='modal-header'>
                <h4 class='modal-title text-center'>Edit your Data</h4> 
                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                
        </div>

        <div class='modal-body'>
            <form action='profileUpdate.php?email=$email' method='post' enctype='multipart/form-data'>

                
                <div class='form-group'>
                    <label>Name</label>
                    <input type='text' name='name' class='form-control' value='$name'>
                </div>
                
                <div class='form-group'>
                    <label>Password</label>
                    <input type='password' name='password' class='form-control' value='$password'>
                </div>

                <div class='form-group'>
                    <label>Image</label>
                    <input type='file' name='image' class='form-control' required>
                    <img src = 'userimages/$image' style='width:50px; height:50px'>
                </div>

                
                <input type='submit' name='update' class='btn btn-info btn-large' value='Save changes'>
                



            </form>
        </div>

        </div>

    </div>
    </div>


	";
    }


    ?>




    <!-- Team -->
    <section id="team" class="pb-5">
        <div class="container">
            <br><br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card p-4 bg-dark text-white">
                        <div class="row">
                            <div class="col-lg-4 text-center">
                                <img class="m-auto d-block img-fluid rounded-circle" src="userimages/<?php echo $image; ?>" alt="card image" style="width: 200px; height: 210px;">
                                <br>
                                <button class="submit btn btn-primary" type="button" data-toggle='modal' data-target='#myModal' style="width: 200px; font-size:15px;font-weight:bold;">Edit Profile</button>
                            </div>
                            <div class="col-lg-6">
                                <br>
                                <h4>Name: <?php echo $result['name'] ?></h4>
                                <br>
                                <h4>Email: <?php echo $result['email'] ?></h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <br><br>
            <div class="row">
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="icons/neural.png"></p>
                                        <h4 class="card-title">Prediction</h4>
                                        <p class="card-text">Enter your data and get the predicted result by our model.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Prediction</h4>
                                        <p class="card-text">Enter your data and get the predicted result by our model.</p>
                                        <button class="submit btn btn-primary" type="button" onclick="location.href='prediction.php'" style="width: 200px; font-size:15px;font-weight:bold;">Predict</button>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <!--
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="https://images.squarespace-cdn.com/content/v1/57d04a7737c581bb6fd2e8b0/1504045039472-LOBUFZRGK6JPYGAKOMWL/ke17ZwdGBToddI8pDm48kAf-OpKpNsh_OjjU8JOdDKBZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZUJFbgE-7XRK3dMEBRBhUpwkCFOLgzJj4yIx-vIIEbyWWRd0QUGL6lY_wBICnBy59Ye9GKQq6_hlXZJyaybXpCc/Big+Data+Solutions+-+Alliance+Technology+Group" alt="card image"></p>
                                        <h4 class="card-title">Previous Data & Results</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Previous Data & Results</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                        <button class="submit btn btn-primary" type="button" style="width: 200px; font-size:15px;font-weight:bold;">Previous Data</button>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            -->
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="icons/hospital.png" alt="card image"></p>
                                        <h4 class="card-title">Nearby Hospitals</h4>
                                        <p class="card-text">Enter your area and find nearby hospitals.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Nearby Hospitals</h4>
                                        <p class="card-text">Enter your area and find nearby hospitals.</p>
                                        <button class="submit btn btn-primary" type="button" onclick="location.href='hospital.php'" style="width: 200px; font-size:15px;font-weight:bold;">Nearby Hospitals</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="icons/doctor.png" alt="card image"></p>
                                        <h4 class="card-title">Find Doctors</h4>
                                        <p class="card-text">Enter your area and find the doctors, hospital name and contact number.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Find Doctors</h4>
                                        <p class="card-text">Enter your area and find the doctors, hospital name and contact number.</p>
                                        <button class="submit btn btn-primary" type="button" onclick="location.href='doctor.php'" style="width: 200px; font-size:15px;font-weight:bold;">Find Doctors</button>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                
                <!-- ./Team member -->
                <!-- Team member -->
                <!--
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="https://toppng.com/uploads/preview/custom-color-handshake-icon-free-handshake-icons-business-icon-png-flat-11563587413e4u0cumfrz.png" alt="card image"></p>
                                        <h4 class="card-title">Contribute</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Contribute</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                        <button class="submit btn btn-primary" type="button" style="width: 200px; font-size:15px;font-weight:bold;">Contribute</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            -->
                <!-- ./Team member -->
                <!-- Team member -->
                <!--
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_06.jpg" alt="card image"></p>
                                        <h4 class="card-title">Sunlimetech</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Sunlimetech</h4>
                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <!-- ./Team member -->

            </div>
        </div>
    </section>
    <!-- Team -->

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