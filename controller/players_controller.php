<?php 
#Import db connection class from db_conn.php
require_once(__DIR__."../../models/players_model.php");

class PlayerController extends PlayerModel{

    //add a player
    public function createPlayer($id,$club_name,$position,$rating){
        $results = $this->addPlayer($id,$club_name,$position,$rating);
        if(!$results){
            die('Failed to add in Controller');
        }else{
            return $results;    
        }
    
    }

    //update a player
    public function editPlayer($id,$fname,$lname,$club_name,$position,$rating){
        $results = $this->updatePlayer($id,$fname,$lname,$club_name,$position,$rating);
        if(!$results){
            return false;
        }else{
            return $results;    
        }
        
        
    }

    //Delete player
    public function removePlayer($id){
        $results = $this->deletePlayer($id);
        if(!$results){
           die("Oh Shit! Could not be deleted");
        }else{
            return $results;  
        }
    }

    //get a Single player
    public function selectPlayer($player_id){
        $results = $this->getPlyer($player_id);
        if(!$results){
            return false;
        }else{
            return mysqli_fetch_all($results, MYSQLI_ASSOC);  
        }
    }

    //Get All players
    public function selectAllPlayers(){
        $results=$this->getAllPlayers();
        if(!$results){
            return false;
        }else{
            return mysqli_fetch_all($results, MYSQLI_ASSOC);  
        }
    }

    //get clubs count
    public function retrievePlayerCount(){
        $results = $this -> getPlayerCount();
        $clubcount = mysqli_fetch_all($results, MYSQLI_ASSOC);
        if(!$results){
            return false;
        }else{
            return $clubcount[0]["COUNT(1)"];  
        }
    }
}
?>