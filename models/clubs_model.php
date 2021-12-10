<?php 
#Import db connection class from db_conn.php
require_once(__DIR__."/../db-config/db_conn.php");

class ClubModel extends DatabaseConnection{

    //Add a club
    public function addClub($club_name,$coach_id,$owner_id,$location,$num_members,$club_logo){
        $results=mysqli_query($this->connect(),
        "INSERT INTO `club`(`club_name`,`coach_id`,`owner_id`,`location`,`num_members`,`club_logo`) VALUES('$club_name','$coach_id','$owner_id','$location','$num_members','$club_logo')"
        );
        if(!$results){
            die("OH: Failed to add Club in Model");
        }else{
            return $results;
        }

    }

    //update Club
    public function updateClub($club_name,$coach_id,$owner_id,$location,$num_members,$club_logo){
       $results= mysqli_query($this->connect(),
            "UPDATE `club` SET `club_name`='$club_name',`coach_id`='$coach_id',`owner_id`='$owner_id',`location`='$location',`num_members`='$num_members',`club_logo`='$club_logo'
            WHERE `club_name`='$club_name'"
        );
        if(!$results){
            die(mysqli_error($this->connect(),$results));
        }else{
            return $results;
        }
    }

    //Delete Club
    public function deleteClub($club_name){
        $results=mysqli_query($this->connect(),
            "DELETE FROM `club` WHERE `club_name`='$club_name'"
        );
        if(!$results){
            die("Failed");
        }else{
            return $results;
        }
    }

    //Get A single Club
    public function getClub($club_name){
       $results= mysqli_query($this->connect(),
            "SELECT * FROM `club` WHERE `club_name`='$club_name'"
        );
        if(!$results){
            die(mysqli_error($this->connect(),$results));
        }else{
            return $results;
        }
    }

    //Get all Clubs
    public function getAllClubs(){
        $results=mysqli_query($this->connect(),
        "SELECT * FROM `club`"
        );
        if(!$results){
            die(mysqli_error($this->connect(),$results));
        }else{
            return $results;
        }
    }

    //get Coach
    public function getCoach($id){
       $results= mysqli_query($this->connect(),
        "SELECT * FROM `person` WHERE `person_id`='$id'"
        );
        if(!$results){
            die(mysqli_error($this->connect(),$results));
        }else{
            return $results;
        }
    }

    //get Owner
    public function getOwner($id){
       $results= mysqli_query($this->connect(),
        "SELECT * FROM `person` WHERE `person_id`='$id'"
        );
        if(!$results){
            die(mysqli_error($this->connect(),$results));
        }else{
            return $results;
        }
    }
     
    //GetClubPlayers
    public function getAllplayers($club_name){
        $results= mysqli_query($this->connect(),
        "SELECT `player_id`, `fname`, `lname`,`club_name`, `position`,`rating`,`photo`
         FROM `person` 
         INNER JOIN `player` ON `person_id` = `player_id` AND `club_name`='$club_name' 
         ORDER BY `rating` DESC"
        );
        if(!$results){
            die(mysqli_error($this->connect(),$results));
        }else{
            return $results;
        }
    }

    //Get Club count
    public function getClubCount(){
        $results = mysqli_query($this -> connect(), 
        "SELECT COUNT(1) FROM `club`"
        );
        return $results;
    }
}
?>