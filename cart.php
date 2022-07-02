<!DOCTYPE html>
<html>

<head>
    <title>
        Cart
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
                            <a class="nav-link" href="registration.html">Registration</a>
                        </li>
                </div>
            </div>
        </div>
    </nav>


    <!-- Nav bar end -->

    <div class="container shadow p-4 mt-4">
        <div class="row mt-4 ">
            <div class="col-12 col-md-6">
                <h2>Product</h2>
            </div>

            <div class="col-12 col-md-6">
                <h2 class="text-center">Price</h2>
            </div>
        </div>

        <!-- first product -->
        <div class="row mt-4 text-center">
            <div class="col-12 col-md-6">
                <div class="card" style="width:200px">
                    <img class="card-img-top" src="images/mango.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Mango</h4>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <h2 class="">200</h2>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col-12 col-md-6">

            </div>

            <div class="cart col-12 col-md-6 text-center shadow">
                <h2 class="">
                    Cart Total $400
                </h2>

                <button class="btn btn-dark p-2" onclick="myFunction()"> PLACE ORDER <i class=" fa-solid fa-cart-shopping"></i></button>
                <script>
                    function myFunction() {
                        alert("Thank you! Ordered placed successfully!");
                        window.location.href = "./index.php";

                    }
                </script>
            </div>
        </div>

    </div>



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