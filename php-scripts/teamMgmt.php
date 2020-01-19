<?php
include('configuration.php');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DB);
mysqli_set_charset($con, 'utf8');

function insertTeam($connection, $userid, $avg, $team)
{
    $today = date('Y-m-d');
    mysqli_query($connection, "INSERT INTO plantillas (IdUsuario, formacion, equipo, valoracion, fecha) VALUES ($userid, '433', '$team', '$avg' ,'$today')");
    echo "inserted";
}
function getBest($connection, $limit)
{
    $query = mysqli_query($connection, "SELECT U.Nombre, P.Id, P.formacion, P.equipo, P.valoracion, P.fecha FROM plantillas AS P INNER JOIN usuarios AS U ON P.idUsuario = U.Id ORDER BY valoracion DESC LIMIT $limit");
    $array = [];
    foreach ($query as $value) {
        array_push(
            $array,
            [
                "user" => $value["Nombre"],
                "id" => $value["Id"],
                "formacion" => $value["formacion"],
                "equipo" => $value["equipo"],
                "valoracion" => $value["valoracion"],
                "fecha" => $value["fecha"]
            ]
        );
    }
    $json = json_encode($array);
    return $json;
}
function getBestU($connection, $limit)
{
 $query = mysqli_query($connection, "SELECT U.Nombre, U.fecha, SUM(P.valoracion) AS Puntos FROM usuarios AS U INNER JOIN plantillas AS P ON P.idUsuario WHERE P.idUsuario = U.Id GROUP BY U.Nombre");    
 $array = [];
    foreach($query as $value) {
        array_push(
            $array,
            [
                "user" => $value["Nombre"],
                "valoracion" => $value['Puntos'],
                "fecha" => $value["fecha"]
            ]
        );
    }
    $json = json_encode($array);
    return $json;
}

echo $_POST['action'] == "insert" ? insertTeam($con, $_POST['userid'], $_POST['avg'], $_POST['team']) : null;
echo $_POST['action'] == "getBest" ? getBest($con, $_POST['limit']) : null;
echo $_POST['action'] == "getBestU" ? getBestU($con, $_POST['limit']) : null;
