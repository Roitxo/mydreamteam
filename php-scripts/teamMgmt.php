<?php
include('configuration.php');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DB);
mysqli_set_charset($con,'utf8');

function insertTeam($connection, $userid, $avg, $team){
    $today = date('Y-m-d');
    mysqli_query($connection, "INSERT INTO plantillas (IdUsuario, formacion, equipo, valoracion, fecha) VALUES ($userid, '433', '$team', '$avg' ,'$today')");
    echo "inserted";
}

echo $_POST['action'] == "insert" ? insertTeam($con, $_POST['userid'], $_POST['avg'], $_POST['team']) : null ;