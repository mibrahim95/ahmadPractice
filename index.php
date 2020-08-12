<?php 
require_once('./Database.php');
$dataBase = new Database;


if($_POST['test']){
    switch($_POST['test']){
    case 'a':
       $test = $dataBase->getHeaders();
       echo $test;
    break;
    }
}

include("./viewTemplate.php");
?>

