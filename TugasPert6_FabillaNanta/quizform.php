<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome back</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<header class="p-3 bg-gray text-black">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="marianatrench.html" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="quiz.html" class="nav-link px-2 text-black">Quiz</a></li>
          <li><a href="journeytothedeep.html" class="nav-link px-2 text-black">Sign Up</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-black me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
      </div>
    </div>
  </header>
<body>
<div class="modal modal-tour position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalTour">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-6 shadow">
      <div class="modal-body p-5">
        <h2 class="fw-bold mb-0">Confirmation</h2>

        <ul class="d-grid gap-4 my-5 list-unstyled">
          <li class="d-flex gap-4">
             <?php
   echo "Your Name: ";
   echo $_GET['name'];
   echo "<br>Your Favorite Marine Animal: ";
   echo $_GET['favorite'];

 

    ?>
          </li>
        </ul>
        <a href="journeytothedeep.html" type="button" class="btn btn-lg btn-warning mt-5 w-100" data-bs-dismiss="modal">EXPLORE THE TRENCH!</a>
      </div>
    </div>
  </div>
</div>

   
</body>

</html>
