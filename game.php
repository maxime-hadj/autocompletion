<?php
require 'db.php';

class Game{
    function __construct(){
        $this->db=dbConnect();
    }
    function getGame($id){
        $getGame = $this->db->prepare('SELECT * FROM games WHERE id = :id');
        $getGame->execute(array('id' => $id));
        $getGbis = $getGame->fetchAll(PDO::FETCH_ASSOC);
        return $getGbis;
    }

    function seekGames($seek){
        $seekGame = $this->db->prepare("SELECT * FROM games WHERE title LIKE '$seek%'");
        $seekGame->execute();
        $seek = $seekGame->fetchAll(PDO::FETCH_ASSOC);
        return $seek;
    }
}