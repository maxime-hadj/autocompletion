<?php

session_start();
function dbConnect(){
$db=new PDO
        ('mysql:host=localhost;dbname=autocompletion;charset=utf8','root','',
        [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
    return $db;
    }

function error(){
    require 'index.php';
    exit();
}