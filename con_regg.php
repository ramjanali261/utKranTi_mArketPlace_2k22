<?php
$alert = false;
$serror = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include './config.php';
    $userid = $_POST["userid"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $address = $_POST["address"];
    $phn = $_POST["phn"];



    if ($password == $cpassword) {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `consumer` ( `userid`, `email`,`name`, `password`,`address`,`phn`) VALUES ('$userid','$email','$name','$hash','$address','$phn')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $alert = true;
        }
    } else {
        $serror = "Password doesn't match";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Home
    </title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CDN for bootsrtap end -->

    <link rel="stylesheet" type="text/css" href="style1.css">
    <script src="https://kit.fontawesome.com/2de3e6b641.js" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Open+Sans:wght@300&family=Poppins:wght@500&family=Satisfy&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Nav bar start-->

    <nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="./index.php"><img src="images/logo.png" width="90"></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class=" collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto">

                </ul>

                <div class="links">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.html">About US</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Registration</a>
                        </li>
                </div>
            </div>
        </div>
    </nav>

    <?php
    if ($alert) {
        echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Registered Successfully</strong> Now you can Login
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
    if ($serror) {
        echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error! </strong> ' . $serror . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
    ?>


    <!-- Nav bar end -->


    <section class="container reg ">
        <div class="row shadow p-4 content">
            <div class="local col-6 col-md-6">

                <img src="images/local.png" class="card-img-top" alt="...">
            </div>

            <div class="col-6 col-md-6">
                <h3>Hello!</h3>
                <h3>We are glade to see you :)</h3>
                <div class="d-flex">
                    <button type="button" class="btn btn-light m-2"><i class="fa-brands fa-google pr-2"></i> Sign Up With
                        Google</button>
                    <button type="button" class="btn btn-light m-2"><i class="fa-brands fa-facebook"></i></button>
                    <button type="button" class="btn btn-light m-2"><i class="fa-brands fa-twitter"></i></button>
                </div>

                <div class="d-flex line">
                    <hr style="width:40%">
                    Or
                    <hr style="width:40%">
                </div>

                <!-- form -->
                <form class="form" action="./con_regg.php" method="post">

                    <div class="row">
                        <div class="col-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required name="name">
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">User Id</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required name="userid">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Id</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="@gmail.com" required name="email">
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required name="address">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required name="password">
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Confirm Password</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required name="cpassword">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mobile No.</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required name="phn">
                            </div>
                        </div>

                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">I agree terms of Service and Privicy
                            Policy</label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-light btn-lg">Sign Up</button>
                    <br />
                    <a class="liink" href="con_logg.php">Already Registered!! Click here to login</a>
                </form>

            </div>
        </div>
    </section>

    <!-- FOOTR -->

    <footer class="text-center p-4">
        <div class="row">
            <div class="col-12 col-md-4">
                <h4><b>Kuolihaat</b></h4>
            </div>

            <div class="col-12 col-md-4">
                <h4></h4>
            </div>

            <div class="col-12 col-md-4">
                <h4>About Us</h4>
            </div>
        </div>

        <div class="row mt-2 links">
            <div class="col-12 col-md-4">
                Home
            </div>

            <div class="col-12 col-md-4">
                Guahati University
            </div>

            <div class="col-12 col-md-4">
                <i class="pr-2 fa-brands fa-facebook"></i> <i class="pr-2 fa-brands fa-twitter"></i> <i class="fa-brands fa-linkedin"></i>
            </div>
        </div>


        <div class="row mt-2 links">
            <div class="col-12 col-md-4">
                Career
            </div>

            <div class="col-12 col-md-4">
                xyz@gmail.com
            </div>


        </div>


    </footer>


</body>

</html>