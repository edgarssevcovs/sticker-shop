<?php
    require_once('config.php');

$id  = $_GET["id"];


$mysqli = new mysqli($host, $user, $pass, $db);
$result = $mysqli->query ("DELETE FROM cart WHERE id=$id");
header('location: cart.php');