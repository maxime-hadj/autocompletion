<?php

session_start();
function dbConnect(){
    $db_host = "localhost";
    //$db_user = "root";
    //$db_password = "";
    //$db_name = "autocompletion";
    $db_user = "maxime_hadj";
    $db_password = "Telecaster0603";
    $db_name = "maxime-hadj_autocompletion";
    
        $db = new PDO ("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password, 
        [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
        return $db;
    }

function error(){
    require '../views/index.php';
    exit();
}