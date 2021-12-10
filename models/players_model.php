<?php 
#Import db connection class from db_conn.php
require_once(__DIR__."/../db-config/db_conn.php");

class PlayerModel extends DatabaseConnection{

    //add a player
    public function addPlayer($id,$club_name,$position,$rating){
        $results = mysqli_query($this -> connect(),
            "INSERT INTO `player`(`player_id`,`club_name`,`position`,`rating`) 
            VALUES ('$id','$club_name','$position','$rating')"
           );
           if(!$results){
            die("Oh Shit! Failed in Model");
           }else{
            return $results;    
        }
    }

    //update a player
    public function updatePlayer($id,$fname,$lname,$club_name,$position,$rating){
        $results = mysqli_query($this -> connect(),
        "UPDATE person, player
        SET person_id='$id',fname='$fname',lname='$lname',player_id='$id', club_name='$club_name', position='$position', rating='$rating'
        WHERE person_id=player_id AND player_id='$id'");
        if(!$results){
            return false;
        }else{
            return $results;    
        }
    }

    //Delete player
    public function deletePlayer($id){
        $results = mysqli_query($this -> connect(),
        "DELETE person, player 
        FROM  person INNER JOIN player ON person_id=player_id
        WHERE person_id = player_id 
        AND player_id = '$id'"
        );
        if(!$results){
           Echo "Model failed";
        }else{
            return $results;    
        }
    }

    //get a Single player
    public function getPlyer($id){
        $results = mysqli_query($this -> connect(),
        "SELECT `player_id`,`fname`,`lname`,`club_name`,`position`, `rating` FROM `person`
        INNER JOIN `player` ON `person_id`=`player_id`
        WHERE `player_id`='$id'");
        if(!$results){
            echo "model failed";
            return false;
        }else{
            return $results;    
        }
    }

    //Get All players
    public function getAllPlayers(){
        $results = mysqli_query($this -> connect(),
        "SELECT `player_id`,`fname`,`lname`,`club_name`,`position`, `rating`,`photo` FROM `person`
        INNER JOIN `player` ON `person_id` = `player_id` 
         ORDER BY `rating` DESC");
        if(!$results){
            return false;
        }else{
            return $results;    
        }
    }
    //Get Players count
    public function getPlayerCount(){
        $results = mysqli_query($this -> connect(), 
        "SELECT COUNT(1) FROM `player`"
        );
        return $results;
    }
    
}
?>