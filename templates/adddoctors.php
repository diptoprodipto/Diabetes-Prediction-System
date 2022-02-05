<?php

include 'adminsession.php';
include 'conn.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Doctors</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <!--  <link href="../styles/css/styles.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="adddoctorsStyle.css">
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

<body data-spy="scroll" data-target=".fixed-top" style="background-color: ">

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
                    <a class="nav-link page-scroll" href="admin.php">PROFILE</a>
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


    <div class="container">
        <br><br><br>
        <h1 class="text-primary text-center">
            Add Doctors
        </h1>

        <div class="d-flex justify-content-center">

            <a href="#"><i class="fa fa-plus" data-toggle="modal" data-target="#myModal"></i></a>
        </div>

        <h2 class="text-danger">All Records</h2>

        <div id="records_content">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Hospital</th>
                    <th class="text-center">Area</th>
                    <th class="text-center">Contact</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Delete</th>
                </tr>

                <?php

                $get_data = "SELECT * FROM doctors";
                $run_data = mysqli_query($conn, $get_data);

                while ($row = mysqli_fetch_array($run_data)) {
                    $id = $row['id'];
                    $image = $row['image'];
                    $name = $row['name'];
                    $hospital = $row['hospital'];
                    $area = $row['area'];
                    $contact = $row['contact'];

                    echo "

                <tr>
                <td class='text-center'>$id</td>
				<td class='text-center'><img src='images/$image' style='width:50px; height:50px;'></td>
				<td class='text-center'>$name</td>
                <td class='text-center'>$hospital</td>
                <td class='text-center'>$area</td>
				<td class='text-center'>$contact</td>
				
				<td class='text-center'>
					<span>
					     <a href='#'>
					         <i class='fa fa-edit' data-toggle='modal' data-target='#edit$id' style='' aria-hidden='true'></i>
					    </a>
					</span>
					
				</td>
				<td class='text-center'>
					<span>
						<a href='#'>
						     <i class='fa fa-trash' data-toggle='modal' data-target='#delete$id' style='' aria-hidden='true'></i>
						</a>
					</span>
					
				</td>
			</tr>


        		";
                }

                ?>



            </table> 
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Insert Doctor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="add.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>ID:</label>
                                <input type="text" name="id" id="id" class="form-control" placeholder="Enter doctor's ID">
                            </div>
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter doctor's name">
                            </div>
                            <div class="form-group">
                                <label>Hospital:</label>
                                <input type="text" name="hospital" id="hospital" class="form-control" placeholder="Enter hospital name">
                            </div>
                            <div class="form-group">
                                <label>Area:</label>
                                <input type="text" name="area" id="area" class="form-control" placeholder="Enter area">
                            </div>
                            <div class="form-group">
                                <label>Contact Number:</label>
                                <input type="tel" name="contact" id="contact" class="form-control" placeholder="Enter contact number">
                            </div>
                            <div class="form-group">
                                <label>Profile picture</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <!------DELETE modal---->




    <!-- Modal -->
    <?php

    $get_data = "SELECT * FROM doctors";
    $run_data = mysqli_query($conn, $get_data);

    while ($row = mysqli_fetch_array($run_data)) {
        $id = $row['id'];
        echo "

    <div id='delete$id' class='modal fade' role='dialog'>
    <div class='modal-dialog'>

        <!-- Modal content-->
        <div class='modal-content'>
        <div class='modal-header'>
            <h4 class='modal-title text-center'>Are you want to sure??</h4>
            <button type='button' class='close text-center' data-dismiss='modal'>&times;</button>
        </div>
        <div class='modal-body text-center'>
            <a href='delete.php?id=$id' class='btn btn-danger'>Delete</a>
        </div>
        
        </div>

    </div>
    </div>


	";
    }


    ?>


    <!----edit Data--->

    <?php

    $get_data = "SELECT * FROM doctors";
    $run_data = mysqli_query($conn, $get_data);

    while ($row = mysqli_fetch_array($run_data)) {
        $id = $row['id'];
        $name = $row['name'];
        $hospital = $row['hospital'];
        $contact = $row['contact'];
        $area = $row['area'];
        $image = $row['image'];
        echo "

    <div id='edit$id' class='modal fade' role='dialog'>
    <div class='modal-dialog'>

        <!-- Modal content-->
        <div class='modal-content'>
        <div class='modal-header'>
                <h4 class='modal-title text-center'>Edit your Data</h4> 
                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                
        </div>

        <div class='modal-body'>
            <form action='edit.php?id=$id' method='post' enctype='multipart/form-data'>

                
                <div class='form-group'>
                    <label>Name</label>
                    <input type='text' name='name' class='form-control' value='$name'>
                </div>

                <div class='form-group'>
                    <label>Hospital</label>
                    <input type='text' name='hospital' class='form-control' value='$hospital'>
                </div>
                
                <div class='form-group'>
                    <label>Area</label>
                    <input type='text' name='area' class='form-control' value='$area'>
                </div>

                <div class='form-group'>
                    <label>Contact</label>
                    <input type='text' name='contact' class='form-control' value='$contact'>
                </div>

                <div class='form-group'>
                    <label>Image</label>
                    <input type='file' name='image' class='form-control' required>
                    <img src = 'images/$image' style='width:50px; height:50px'>
                </div>

                
                <input type='submit' name='submit' class='btn btn-info btn-large' value='Save changes'>
                



            </form>
        </div>

        </div>

    </div>
    </div>


	";
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