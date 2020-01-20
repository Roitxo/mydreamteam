<?php
    include("components/header.php");
    if (!isset($_SESSION['nombre'])) {
    header('Location: login.php');
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
    <script src="js/XI.js"></script>
    <script src="js/login.js"></script>
    <title>TeamMaker</title>
</head>

<body onload="getPlayers('433', 9)">
    <?php
    echo $header;
    ?>
    <div class="jumbotron jumbotron-fluid call-to-action bg-dark">
        <div class="container">
            <h1 class="display-4">Create your XI</h1>
            <p class="lead">Let's start!</p>
        </div>
    </div>
    <center>
        <div class="row">
            <div id="summary" class="col-sm swing-in-top-fwd">
                <h1><span class="color-green" id="rating"></span></h1>
                <h2>YOUR RATING</h2>
                <p>Your team has been saved on your profile</p>
                <a href="team-ranking.php" class="btn btn-dark">See Ranking</a>
                <a href="XI.php" class="btn btn-success">Try Again</a>
            </div>
        </div>
    </center>
    <input type="number" hidden id="userid" value="<?php echo  $_SESSION['id'];?>">
    <div id="433" class="row pitch">
        <div class="container">
            <center>
                <div class="row">
                    <div class="col-sm">
                        <div id="del1" class="card">
                            <button onclick="choosePlayer(0, 'delantero', 'del1', () => {document.getElementById('dialogChoosePlayer').style.display = 'inline'})" class="btn btn-img-card"><img class="d-block w-100" src="img/add.jpg" alt="Third slide" /></button>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div id="del2" class="card">
                            <button onclick="choosePlayer(3, 'delantero', 'del2', () => {document.getElementById('dialogChoosePlayer').style.display = 'inline'})" class="btn btn-img-card"><img class="d-block w-100" src="img/add.jpg" alt="Third slide" /></button>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div id="del3" class="card">
                            <button onclick="choosePlayer(6, 'delantero', 'del3', () => {document.getElementById('dialogChoosePlayer').style.display = 'inline'})" class="btn btn-img-card"><img class="d-block w-100" src="img/add.jpg" alt="Third slide" /></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div id="mc1" class="card">
                            <button onclick="choosePlayer(0, 'centrocampista', 'mc1', () => {document.getElementById('dialogChoosePlayer').style.display = 'inline'})" class="btn btn-img-card"><img class="d-block w-100" src="img/add.jpg" alt="Third slide" /></button>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div id="mc2" class="card">
                            <button onclick="choosePlayer(3, 'centrocampista', 'mc2', () => {document.getElementById('dialogChoosePlayer').style.display = 'inline'})" class="btn btn-img-card"><img class="d-block w-100" src="img/add.jpg" alt="Third slide" /></button>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div id="mc3" class="card">
                            <button onclick="choosePlayer(6, 'centrocampista', 'mc3', () => {document.getElementById('dialogChoosePlayer').style.display = 'inline'})" class="btn btn-img-card"><img class="d-block w-100" src="img/add.jpg" alt="Third slide" /></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div id="df1" class="card">
                            <button onclick="choosePlayer(0, 'defensa', 'df1', () => {document.getElementById('dialogChoosePlayer').style.display = 'inline'})" class="btn btn-img-card"><img class="d-block w-100" src="img/add.jpg" alt="Third slide" /></button>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div id="df2" class="card">
                            <button onclick="choosePlayer(3, 'defensa', 'df2', () => {document.getElementById('dialogChoosePlayer').style.display = 'inline'})" class="btn btn-img-card"><img class="d-block w-100" src="img/add.jpg" alt="Third slide" /></button>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div id="df3" class="card">
                            <button onclick="choosePlayer(6, 'defensa', 'df3', () => {document.getElementById('dialogChoosePlayer').style.display = 'inline'})" class="btn btn-img-card"><img class="d-block w-100" src="img/add.jpg" alt="Third slide" /></button>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div id="df4" class="card">
                            <img onclick="choosePlayer(9, 'defensa', 'df4', () => {document.getElementById('dialogChoosePlayer').style.display = 'inline'})" class="d-block w-100 card-img" src="img/add.jpg" alt="Third slide" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div id="gk" class="card">
                            <button onclick="choosePlayer(0, 'portero', 'gk', () => {document.getElementById('dialogChoosePlayer').style.display = 'inline'})" class="btn btn-img-card"><img class="d-block w-100" src="img/add.jpg" alt="Third slide" /></button>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
    <?php
        include("components/footer.php");
    ?>

    <!-- Dialog choose player -->
    <div id="dialogChoosePlayer">
        <div id="dialogChoosePlayerInner">
            <div class="container">
                <center>
                    <div id="dialogChoosePlayerBoxes" class="row">
                        <div class="col">
                            <div class="card fade-in1">
                                <button class="btn btn-img-card"><img class="d-block w-100" src="img/add.jpg" alt="Third slide" /></button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card fade-in2">
                                <button class="btn btn-img-card"><img class="d-block w-100" src="img/add.jpg" alt="Third slide" /></button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card fade-in3">
                                <button class="btn btn-img-card"><img class="d-block w-100" src="img/add.jpg" alt="Third slide" /></button>
                            </div>
                        </div>

                    </div>
                </center>
            </div>
        </div>
    </div>
</body>

</html>