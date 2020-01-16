<?php
if (isset($_SESSION['nombre'])) {
  header('Location: profile.php?user=' . $_SESSION['nombre']);
}
include("components/header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto+Condensed&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js"></script>
  <script src="js/login.js"></script>
  <title>TeamMaker</title>
</head>

<body>
  <?php
    echo $header;
  ?>
  <div class="jumbotron jumbotron-fluid call-to-action bg-dark">
    <div class="container">
      <h1 class="display-4">Login to your account or create a new one</h1>
      <p class="lead">Let's start!</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div id="errors" class="col-6"></div>
    </div>
    <div id="app" class="row">
      <div class="form col-6">
        <h1>Login</h1>
        <hr>
        <input id="log-username" type="text" placeholder="Username" class="form-control">
        <br>
        <input id="log-pass" type="password" placeholder="·············" class="form-control">
        <br>
        <button onclick="login()" class="btn btn-dark">Login</button>
      </div>
      <div class="form col-6">
        <h1>Register</h1>
        <hr>
        <input id="re-username" type="text" placeholder="Username" class="form-control">
        <br>
        <input id="re-password" type="password" placeholder="Your password" class="form-control">
        <br>
        <input id="re-password2" type="password" placeholder="Repeat password" class="form-control">
        <br>
        <button onclick="register()" class="btn btn-dark">Register</button>
      </div>
    </div>
  </div>
  <footer class="row bg-dark">
    <div class="col-3 ">
      <h1>My<span class="color-green">Dream</span>Team</h1>
      <hr />
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
        sapien mauris, luctus eu risus quis, luctus dictum tortor. Suspendisse
        potenti. Nulla sed molestie magna.
      </p>
    </div>
    <div class="col-3">
      <h1>My <span class="color-green">Account</span></h1>
      <hr />
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
        sapien mauris, luctus eu risus quis, luctus dictum tortor. Suspendisse
        potenti. Nulla sed molestie magna.
      </p>
    </div>
    <div class="col-3">
      <h1>About <span class="color-green">Me</span></h1>
      <hr />
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
        sapien mauris, luctus eu risus quis, luctus dictum tortor. Suspendisse
        potenti. Nulla sed molestie magna.
      </p>
    </div>
    <div class="col-3">
      <h1>Learn <span class="color-green">More</span></h1>
      <hr />
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
        sapien mauris, luctus eu risus quis, luctus dictum tortor. Suspendisse
        potenti. Nulla sed molestie magna.
      </p>
    </div>
  </footer>
  <div class="bottom-end row align-items-center">
    <div class="col-sm">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
    </div>
  </div>
</body>

</html>