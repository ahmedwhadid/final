<?php
error_reporting(0);
ini_set('display_errors', 0);
include '../Model/db_helper.php';
header("Content-Type:application/json");
$db_helper = new DbHelper();
$db_helper->createDbConnection();
if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_GET["id"])){
        $db_helper->getStudentById($_GET["id"]);
    }else{
        $db_helper->getAllStudents();
    }


}
?>