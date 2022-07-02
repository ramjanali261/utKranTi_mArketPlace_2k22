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
    <?php
    $login = false;
    $serror = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include './config.php';
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "Select * from consumer where email='$email'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($password, $row['password'])) {
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['email'] = $email;
                    header("location: item_con.php");
                }
            }
        }
    } else {
    }
    ?>

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
                            <a class="nav-link" href="registration.html">Registration</a>
                        </li>
                </div>
            </div>
        </div>
    </nav>


    <!-- Nav bar end -->

    <?php

    if ($login) {
        echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Login Successfull</strong> you are logged in
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
    ?>
    <section class="container reg ">


        <div class="row shadow p-4 content">

            <div class="col-6 col-md-6">
                <h3>Hello!</h3>
                <h3>We are glad to see you :)</h3>
                <div class="d-flex">
                    <button type="button" class="btn btn-light m-2"><i class="fa-brands fa-google pr-2"></i> Sign Up
                        With
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
                <form action="con_logg.php" method="post">

                    <div class="row">
                        <div class="col-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email id</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="email">
                            </div>
                        </div>

                        <!-- <div class="col-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">User Id</label>
                                <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                            </div>
                        </div> -->
                    </div>




                    <div class="row">
                        <div class="col-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="password">
                            </div>
                        </div>

                        <!-- <div class="col-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Confirm Password</label>
                                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Eg. travel@12359#$">
                            </div>
                        </div> -->
                    </div>



                    <div class="form-group form-check">

                        <label class="form-check-label" for="exampleCheck1"><a href="./con_regg.php">Not yet registered? Click here to register</a></label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-light btn-lg">Login</button>
                </form>

            </div>

            <div class="login col-6 col-md-6">
                <img src="images/local.png" class="card-img-top" alt="...">
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