<?php
$alert = false;
$serror = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include './config.php';
  $first = $_POST["first"];
  $last = $_POST["last"];
  $email = $_POST["email"];
  $skill = $_POST["skill"];

  $sql = "INSERT INTO `career` ( `first`, `last`,`email`, `skill`) VALUES ('$first','$last','$email','$skill')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    $alert = true;
  }
} else {
  $serror = "Password doesn't match";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="Style.css" />
  <title>Career Kuolihaat</title>
</head>

<body>
  <!-- Navbar-->
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
    <div class="container">
      <a href="./index.php" class="navbar-brand">Kuolihaat</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="./index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">About Us</a>
          </li>
          <li class="nav-item">
            <a href="#contant" class="nav-link">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--navbar-->

  <!--Body-->
  <section class="bg-light text-dark p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
    <div class="container">
      <div class="d-sm-flex align-items-center justify-content-between">
        <div>
          <h1>Want to <span class="text-warning"> JOIN US? </span></h1>
          <p class="lead my-4">
            Have a zeal to contribute to the real world and create a visible
            impact in the business and lives of constomers?
          </p>
          <a class="btn btn-success btn-lg" href="#formm">
            Start The Enrollment
          </a>
        </div>
        <img class="img-fluid w-50 d-none d-sm-block" src="Capture.PNG" />
      </div>
    </div>
  </section>
  <!--Body-->

  <!--why join us-->

  <section id="instructors" class="p-5 bg-success">
    <div class="container">
      <h2 class="text-center text-white">Benefits</h2>
      <br />
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="card bg-light">
            <div class="card-body text-center">
              <h3 class="card-title mb-3">Free Stocks</h3>
              <p class="card-text">
                You will recieve free stocks of the company
              </p>
              <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card bg-light">
            <div class="card-body text-center">
              <h3 class="card-title mb-3">Work Experience</h3>
              <p class="card-text">
                You will get a positive enviroment where you will get chance
                to learn new skills and improve your skills.
              </p>
              <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card bg-light">
            <div class="card-body text-center">
              <h3 class="card-title mb-3">Timely payment</h3>
              <p class="card-text">
                Get a chance to earn a descent amount of money according to
                your work.
              </p>
              <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="card bg-light">
            <div class="card-body text-center">
              <h3 class="card-title mb-3">Fast Growing Company</h3>
              <p class="card-text">
                One of the leading company,it is a business of providing
                digital technology
              </p>
              <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
              <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--form-->
  <div id="formm" class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="signup-form">
          <form action="./Career.php" method="post" class="mt-5 border p-4 bg-light shadow">

            <h4 class="mb-5 text-secondary">Enroll Now...</h4>
            <div class="row">
              <div class="mb-3 col-md-6">
                <label>First Name<span class="text-danger">*</span></label>
                <input type="text" name="first" class="form-control" placeholder="Enter First Name" />
              </div>

              <div class="mb-3 col-md-6">
                <label>Last Name<span class="text-danger">*</span></label>
                <input type="text" name="last" class="form-control" placeholder="Enter Last Name" />
              </div>

              <div class="mb-3 col-md-12">
                <label>Email<span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" />
              </div>
              <div class="mb-3 col-md-12">
                <label>Skills<span class="text-danger">*</span></label>
                <input type="text" name="skill" class="form-control" placeholder="Enter your skills" />
              </div>
              <div class="col-md-12">
                <button class="btn btn-success float-end">Enroll</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br />
  <br />

  <!--footer-->
  <footer class="p-5 bg-dark text-white text-center position-relative">
    <div class="container">
      <p class="lead">Copyright &copy; 2022 Kuolihaat</p>

      <a href="#" class="position-absolute bottom-0 end-0 p-5">
        <i class="bi bi-arrow-up-circle h1"></i>
      </a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>