<?php
include('configuration.php');
$action = $_POST['action'];
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DB);
function login($connection, $username, $password){
    $query = mysqli_query($connection, "SELECT * FROM usuarios WHERE Nombre = '$username' AND AES_DECRYPT(Pass, 'MyDreamPHP*') = '$password'");
    $num = mysqli_num_rows($query);
    $assoc = mysqli_fetch_assoc($query);
    if ($num >= 1) {
        session_start();
        $_SESSION['nombre'] = $username;
        $_SESSION['id'] = $assoc['Id'];
        return 'logged';
    } else {
        return 'not logged';
    }
}
function logout(){
    session_start();
    session_destroy();
    return "logout";
}
function register($connection ,$user, $pass){
    $query = mysqli_query($connection, "SELECT * FROM usuarios WHERE Nombre = '$user'");
    $num = mysqli_num_rows($query);
    $today = date('Y-m-d');
    if ($num > 0) {
        return "exists";
    } else {
        mysqli_query($connection, "INSERT INTO usuarios (Nombre, Pass, fecha) VALUES ('$user', AES_ENCRYPT('$pass', 'MyDreamPHP*'), '$today')");
        return "registered";
    }
}
//exec
echo $action == "login" ? login($con, trim(strtolower($_POST['username'])), $_POST['pass']) : null;
echo $action == "logout" ? logout() : null;
echo $action == "register" ? register($con, trim(htmlentities(strtolower($_POST['username']))),$_POST['pass']) : null;