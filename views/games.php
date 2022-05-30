<?php
require '../views/db.php';

class Games{
    function __construct(){
        $this->db=dbConnect();
    }
    function getGames(){
        $getGames = $this->db->prepare('SELECT * FROM games');
        $getGames->execute();
        $getG = $getGames->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($getG);
    }
}

$ng = new Games;
$ng->getGames();


?>