<?php
session_start();
$elements = [
    ["title" => "Home", "link" => "index.php"],
    ["title" => "XI", "link" => "XI.php"],
    ["title" => "Top Players", "link" => "index.php"],
    ["title" => "Top Teams", "link" => "index.php"],
    ["title" => "Players Database", "link" => "index.php"]
];
$header = "
<div class='row subheader-row navbar-dark bg-dark'>
<div class='col-10 subheader-col '></div>
<div id='subheader-col-2' class='col-2 subheader-col '>";

if (isset($_SESSION['nombre'])) {
    $header .= "<small>Hello, " . $_SESSION['nombre'] . "</small>";
    $header .= ' - ';
    $header .= "<a href='profile.php?user=".$_SESSION['nombre']."'><i class='fas fa-user'></i>
        </a><button class='btn' onclick='logout()'><i class='fas fa-sign-out-alt'></i></button>";
} else {
    $header .= "<a href='login.php'>
        <i class='fas fa-sign-in-alt'></i>
        <small class='nomargin'>Log In</small>
        </a>'";
}

$header .= "</div>
    </div>
    <nav id='navbar' class='navbar-dark bg-green'>
            <div class='row align-items-center'>
                <div class='col-2 logo-box'>
                    <a href='#'>
                        <img src='img/logo.png' alt='logo' id='logo' />
                    </a>
                </div>
                <div class='col-8'>
                    <ul class='nav'>";
foreach ($elements as $element) {
    $header .= " <li class='nav-item'><a class=";
    if (__FILE__ == $element['link']) {
        $header .= "'nav-link link-active' href='".$element['link']."'>".$element['title']."</a></li>";
    } else {
        $header .= "'nav-link' href='".$element['link']."'>".$element['title']."</a></li>";
    }
    
}
$header .= "</ul></div></div></nav>";
?>