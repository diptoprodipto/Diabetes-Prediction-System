<?php
session_start();

include 'conn.php';


if ($_SESSION) {

    if ($_SESSION['email'] == 'admin@gmail.com') {
        header("location: admin.php");
    } else {
        header("location: profile.php");
    }
} else if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql1 = "select * from admin where email='$email'";
    $result2 = mysqli_query($conn, $sql1);

    $count1 = mysqli_num_rows($result2);

    if ($count1 == 1) {
        $row = mysqli_fetch_assoc($result2);
        if ($row['password'] == $password) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header("location: admin.php");
        } else {
            echo "<script>alert('Wrong Username or Password!')</script>";
?>
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=https://localhost/diabetes/templates/login.php">
            <?php
        }
    } else {
        $sql = "select * from users where email='$email'";

        $result = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['password'] == $password) {
                $_SESSION['email'] = $email;
                header("location: profile.php");
            } else {
                echo "<script>alert('Wrong Email or Password!')</script>";
            ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; URL=https://localhost/diabetes/templates/login.php">
            <?php
            }
        } else {
            echo "<script>alert('Wrong Email or Password!')</script>";
            ?>
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=https://localhost/diabetes/templates/login.php">
<?php
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <!--  <link href="../styles/css/styles.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="loginStyle.css">
    <link href="../styles/css/fontawesome-all.css" rel="stylesheet">
    <link href="../styles/css/swiper.css" rel="stylesheet">
    <link href="../styles/css/magnific-popup.css" rel="stylesheet">
    <link href="../styles/css/bootstrap.css" rel="stylesheet">

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
                    <a class="nav-link page-scroll" href="register.php">REGISTER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">ABOUT</a>
                </li>
            </ul>

        </div>
    </nav>

    <!-- end of navbar -->

    <div id="login" style="background-color: #17a2b8">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 bg-dark">
                        <form id="login-form" class="form" action="login.php" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                                <br><br>
                                <a href="register.php" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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