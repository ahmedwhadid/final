<?php
include '../Model/db_helper.php';
header("Content-Type:application/json");
$db_helper = new DbHelper();
$db_helper->createDbConnection();
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name = $_POST["name"];
$email = $_POST["email"];
$myFile = $_FILES["image"];

$db_helper->updateStudent($name,$email,$myFile);
}
?>