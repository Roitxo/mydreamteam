<?php
if (isset($_GET['id'])) {
    include("php-scripts/configuration.php");
    $id = $_GET['id'];
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DB);
    mysqli_set_charset($con, 'utf8');
    $query = mysqli_query($con, "SELECT * FROM plantillas AS P INNER JOIN usuarios AS U ON P.idUsuario = U.Id WHERE P.Id = $id");
    $assoc = mysqli_fetch_assoc($query);
    $num = mysqli_num_rows($query);
    $team = json_decode($assoc['equipo'], true);
} else {
    header('Location: index.php');
}
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
    include("components/header.php");
    echo $header;
    ?>
    <div class="jumbotron jumbotron-fluid call-to-action bg-dark">
        <div class="container">
            <h1 class="display-4"><?php echo $num > 0 ? 'Team #' . $id : "The team does not exist"; ?></h1>
            <p class="lead"><?php echo $num > 0 ? 'Made by ' . $assoc['Nombre'] . ' on ' . $assoc['fecha'] : ""; ?></p>
        </div>
    </div>
    <?php
        if ($num == 0) {
            die;
        }
    ?>

    <center>
        <h1><span class="color-green" id="rating"><?php echo $assoc['valoracion']; ?></span></h1>
        <h2>TEAM RATING</h2>
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
                        <div id="mc3" class="card">ç
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
</body>

</html>