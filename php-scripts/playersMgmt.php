<?php
    include('configuration.php');
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DB);
    mysqli_set_charset($con,'utf8');
    function getPlayers($conexion, $qty_st, $qty_md, $qty_df){
        $query_delanteros = mysqli_query($conexion,"SELECT * FROM Jugadores WHERE Pos = 'delantero' ORDER BY Rand() LIMIT $qty_st");
        $array_delanteros = [];
        $query_centrocampistas = mysqli_query($conexion,"SELECT * FROM Jugadores WHERE Pos = 'centrocampista' ORDER BY Rand() LIMIT $qty_md");
        $array_centrocampistas = [];
        $query_defensas = mysqli_query($conexion,"SELECT * FROM Jugadores WHERE Pos = 'defensa' ORDER BY Rand() LIMIT $qty_df");
        $array_defensas = [];
        $query_porteros = mysqli_query($conexion,"SELECT * FROM Jugadores WHERE Pos = 'portero' ORDER BY Rand() LIMIT 3");
        $array_porteros = [];
        foreach ($query_delanteros as $value) {
            array_push($array_delanteros, ["nombre"=> $value["Nombre"], "media" => $value["Media"], "Imagen" => $value["Imagen"]]);
        }
        foreach ($query_centrocampistas as $value) {
            array_push($array_centrocampistas, ["nombre"=> $value["Nombre"], "media" => $value["Media"], "Imagen" => $value["Imagen"]]);
        }
        foreach ($query_defensas as $value) {
            array_push($array_defensas, ["nombre"=> $value["Nombre"], "media" => $value["Media"], "Imagen" => $value["Imagen"]]);
        }
        foreach ($query_porteros as $value) {
            array_push($array_porteros, ["nombre"=> $value["Nombre"], "media" => $value["Media"], "Imagen" => $value["Imagen"]]);
        }
        $players = ["delanteros" => $array_delanteros, "centrocampistas" => $array_centrocampistas, "defensas" =>  $array_defensas, "porteros" => $array_porteros];
        $json = json_encode($players);
        return $json;
    }
    echo getPlayers($con, $_POST['qty_st'], $_POST['qty_md'], $_POST['qty_df']);
?>