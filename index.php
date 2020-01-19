<?php
include('php-scripts/configuration.php');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DB);
mysqli_set_charset($con, 'utf8');
$query = mysqli_query($con, "SELECT MAX(P.valoracion) AS valoracion, P.idUsuario, P.equipo, P.fecha, U.Nombre FROM plantillas AS P INNER JOIN usuarios AS U ON P.idUsuario = U.Id GROUP BY P.idUsuario, P.equipo, P.fecha, U.Nombre ORDER BY valoracion DESC LIMIT 1");
$assoc = mysqli_fetch_assoc($query);
$num = mysqli_num_rows($query);
$team = json_decode($assoc['equipo'], true);
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="js/login.js"></script>
  <script src="js/XI.js"></script>
  <title>TeamMaker</title>
</head>

<body onload="getTop5Users()">
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
        <h1>The top 5</h1>
        <hr />
        <div id="top5" class="list-group"></div>
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
      <a href="XI.php" class="btn btn-success">Create your XI</a>
      <a href="login.php" class="btn btn-dark">Login</a>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="display-4">The best team</h1>
        <p class="lead">Discover the best teams made by the comunity</p>
        <hr />
        <center>
          <h1>Rating: <span class="color-green" id="rating"><?php echo $assoc['valoracion']; ?></span></h1>
          <h2>Made by <?php echo $assoc['Nombre']; ?> on day <?php echo $assoc['fecha']; ?></h2>
        </center>
        <div id="433" class="row pitch">
          <div class="container">
            <center>
              <div class="row">
                <div class="col-sm">
                  <div id="del1" class="card">
                    <img class="d-block w-100" src="<?php echo $team['delanteros'][0]['Imagen']; ?>" alt="Third slide" />
                  </div>
                </div>
                <div class="col-sm">
                  <div id="del2" class="card">
                    <img class="d-block w-100" src="<?php echo $team['delanteros'][1]['Imagen']; ?>" alt="Third slide" />
                  </div>
                </div>
                <div class="col-sm">
                  <div id="del3" class="card">
                    <img class="d-block w-100" src="<?php echo $team['delanteros'][2]['Imagen']; ?>" alt="Third slide" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <div id="mc1" class="card">
                    <img class="d-block w-100" src="<?php echo $team['centrocampistas'][0]['Imagen']; ?>" alt="Third slide" />
                  </div>
                </div>
                <div class="col-sm">
                  <div id="mc2" class="card">
                    <img class="d-block w-100" src="<?php echo $team['centrocampistas'][1]['Imagen']; ?>" alt="Third slide" />
                  </div>
                </div>
                <div class="col-sm">
                  <div id="mc3" class="card">
                    <img class="d-block w-100" src="<?php echo $team['centrocampistas'][2]['Imagen']; ?>" alt="Third slide" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <div id="df1" class="card">
                    <img class="d-block w-100" src="<?php echo $team['defensas'][0]['Imagen']; ?>" alt="Third slide" />
                  </div>
                </div>
                <div class="col-sm">
                  <div id="df2" class="card">
                    <img class="d-block w-100" src="<?php echo $team['defensas'][1]['Imagen']; ?>" alt="Third slide" />
                  </div>
                </div>
                <div class="col-sm">
                  <div id="df3" class="card">
                    <img class="d-block w-100" src="<?php echo $team['defensas'][2]['Imagen']; ?>" alt="Third slide" />
                  </div>
                </div>
                <div class="col-sm">
                  <div id="df4" class="card">
                    <img class="d-block w-100" src="<?php echo $team['defensas'][3]['Imagen']; ?>" alt="Third slide" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <div id="gk" class="card">
                    <img class="d-block w-100" src="<?php echo $team['portero']['Imagen']; ?>" alt="Third slide" />
                  </div>
                </div>
              </div>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    include("components/footer.php");
  ?>
</body>

</html>