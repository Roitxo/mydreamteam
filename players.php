<?php
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
    <script src="js/XI.js"></script>
    <script src="js/login.js"></script>
    <title>TeamMaker</title>
</head>

<body onload="getAllPlayers()">
    <?php
    echo $header;
    ?>
    <div class="jumbotron jumbotron-fluid call-to-action bg-dark">
        <div class="container">
            <h1 class="display-4">Players Database</h1>
            <p class="lead">All players on the game</p>
        </div>
    </div>
    <div class="container">
        <h1 class="display-4">Strikers</h1>
        <div id="strikers" class="row"></div>
        <h1 class="display-4">Midfielders</h1>
        <div id="mid" class="row"></div>
        <h1 class="display-4">Defenders</h1>
        <div id="defenders" class="row">
        </div>
        <h1 class="display-4">Goalkeepers</h1>
        <div id="goalkeepers" class="row">
        </div>
    </div>
    <?php
        include("components/footer.php");
    ?>
</body>

</html>