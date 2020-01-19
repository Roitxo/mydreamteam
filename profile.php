<?php
if (isset($_GET['user'])) {
    include("php-scripts/configuration.php");
    $user = $_GET['user'];
    $mine = !isset($_SESSION['nombre']) ? false : true;
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DB);
    $query = mysqli_query($con, "SELECT * FROM usuarios WHERE Nombre = '$user'");
    $assoc = mysqli_fetch_assoc($query);
    $id = $assoc['Id'];
    $num = mysqli_num_rows($query);
    $q_equipos = mysqli_query($con, "SELECT * FROM usuarios AS U INNER JOIN plantillas AS P ON U.Id = P.idUsuario WHERE Nombre = '$user'");
    $equipos = mysqli_fetch_array($query);
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
            <h1 class="display-4"><?php echo $num > 0 ? $user : "The user does not exist"; ?></h1>
            <p class="lead">User profile</p>
        </div>
    </div>
    <?php
        include("components/footer.php");
    ?>
</body>

</html>