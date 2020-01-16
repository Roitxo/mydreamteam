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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="js/login.js"></script>
  <title>TeamMaker</title>
</head>

<body>
  <?php
    include("components/header.php");
    echo $header;
  ?>
  <div class="jumbotron jumbotron-fluid jumbo-home">
    <div class="container">
      <h1 class="display-4">Your dream team in a website</h1>
      <p class="lead">
        Create your team now!
      </p>
      <a href="XI.php" class="btn btn-success">Create my XI</a>
    </div>
  </div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-8 column">
        <h1>The top 10</h1>
        <hr />
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active">
            Winner
          </a>
          <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
          <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
          <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
          <a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a>
        </div>
      </div>
      <div class="col-3 transparent">
        <div id="carouselExampleIndicators" class="carousel slide carousel-card" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner card-slider">
            <div class="carousel-item active">
              <img class="d-block w-100 card-slider" src="img/centrocampistas/Kaka.jpg" alt="First slide" />
            </div>
            <div class="carousel-item card-slider">
              <img class="d-block w-100" src="img/delanteros/Pele.jpg" alt="Second slide" />
            </div>
            <div class="carousel-item card-slider">
              <img class="d-block w-100 card-img" src="img/defensas/Cannavaro.jpg" alt="Third slide" />
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="jumbotron jumbotron-fluid call-to-action bg-dark">
    <div class="container">
      <h1 class="display-4">Get Started</h1>
      <p class="lead">Create your team offline o sing up to rank your XI</p>
      <button class="btn btn-success">Create your XI</button>
      <button class="btn btn-dark">Login</button>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="display-4">Top Teams</h1>
        <p class="lead">Discover the best teams made by the comunity</p>
        <hr />
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/grass_night.png" class="d-block w-100" alt="test" />
            </div>
            <div class="carousel-item">
              <img src="img/grass_night.png" class="d-block w-100" alt="test" />
            </div>
            <div class="carousel-item">
              <img src="img/grass_night.png" class="d-block w-100" alt="test" />
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
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