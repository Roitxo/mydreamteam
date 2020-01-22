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
function getBestP($connection){
    $query = mysqli_query($connection, "SELECT MAX(P.valoracion) AS valoracion, P.idUsuario, P.equipo, P.valoracion, P.fecha, U.Nombre FROM plantillas AS P INNER JOIN usuarios AS U ON P.idUsuario = U.Id");
    $assoc = mysqli_fetch_assoc($query);
    $array = [
        "user" => $assoc['Nombre'],
        "valoracion" => $assoc['valoracion'],
        "equipo" => $assoc['equipo'],
        "fecha" => $assoc['fecha']
    ];
    return json_encode($array);
}
function getBestU($connection, $limit)
{
 $query = mysqli_query($connection, "SELECT U.Nombre, U.fecha,  ROUND(SUM(P.valoracion), 2) AS Puntos FROM usuarios AS U INNER JOIN plantillas AS P ON P.idUsuario WHERE P.idUsuario = U.Id GROUP BY U.Nombre ORDER BY Puntos DESC LIMIT 5");    
 $array = [];
 $valArr = [];
    foreach($query as $key => $value) {
        array_push(
            $array,
            [
                "user" => $value["Nombre"],
                "valoracion" => $value['Puntos'],
                "fecha" => $value["fecha"]
            ]
        );
        $valArr[$key] = $value['valoracion'];
    }
    array_multisort($valArr, SORT_DESC, $array);
    $json = json_encode($array);
    return $json;
}
function getUserDetails($connection, $id){
    $user_details = mysqli_query($connection, "SELECT * FROM Id = $id");
    $user_assoc = mysqli_fetch_assoc($user_details);
    $val = mysqli_query($connection, "SELECT SUM(valoracion) AS valoracion FROM plantillas WHERE idUsuario = $id");
    $val_assoc = mysqli_fetch_assoc($val);
    $teams = mysqli_query($connection, "SELECT * FROM plantillas WHERE idUsuario = $id");
    $array = ["fecha" => $user_assoc['fecha'], "valoracion" => $val_assoc["valoracion"], "equipos" => []];
    foreach ($teams as $value) {
        array_push($array['equipos'], [
            "formacion" => $value["formacion"],
            "equipo" => $value["equipo"],
            "valoracion" => $value["valoracion"],
            "fecha" => $value["fecha"]
        ]);
    }
    return json_encode($array);
}
echo $_POST['action'] == "insert" ? insertTeam($con, $_POST['userid'], $_POST['avg'], $_POST['team']) : null;
echo $_POST['action'] == "getBest" ? getBest($con, $_POST['limit']) : null;
echo $_POST['action'] == "getBestU" ? getBestU($con, $_POST['limit']) : null;
echo $_POST['action'] == "bestTeam" ? getBestP($con) : null;
echo $_POST['action'] == "userDetails" ? getUserDetails($con, $_POST['id']) : null;