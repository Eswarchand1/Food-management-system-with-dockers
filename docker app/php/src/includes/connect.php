<?php
session_start();
$servername = "db";
$server_user = "root";
$server_pass = "MYSQL_ROOT_PASSWORD";
$dbname = "food";
if (isset( $_SESSION['name']) || isset( $_SESSION['role']) )
{ 
    $name = $_SESSION['name'];
    $role = $_SESSION['role'];
}

$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>