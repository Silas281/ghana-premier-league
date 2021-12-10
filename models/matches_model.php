<?php 
#Import db connection class from db_conn.php
require_once(__DIR__."/../db-config/db_conn.php");

class MatchModel extends DatabaseConnection{
    //add a match
    public function addMatch($versus,$match_date,$match_time,$location,$scores,$official_id,$home_team,$away_team){
        $results=mysqli_query($this->connect(),
        "INSERT INTO matches(versus,match_date,match_time,location,scores,official_id,home_team,away_team) VALUES('$versus','$match_date','$match_time','$location','$scores','$official_id','$home_team','$away_team')"
        );
        if(!$results){
            echo "OH Insertion Failed in Model";
        }else{
            return $results;
        }

    }

    //update a match
    public function updateMatch($id,$versus,$match_date,$match_time,$location,$scores,$official_id,$home_team,$away_team){
        $results=mysqli_query($this->connect(),
        "UPDATE `matches` SET `versus`='$versus',`match_date`='$match_date',`match_time`='$match_time',`location`='$location',`scores`='$scores',`official_id`='$official_id',`home_team`='$home_team',`away_team`='$away_team'
         WHERE id=$id"
        );
        if(!$results){
            echo "OH Insertion Failed in Model";
        }else{
            return $results;
        }

    }

    //update a match
    public function deleteMatch($id){
        $results=mysqli_query($this->connect(),
        "DELETE FROM matches
        Where id='$id'"
        );
        if(!$results){
            echo "OH Match deletion Failed in Model";
        }else{
            return $results;
        }

    }

     //get single Match
     public function getMatch($id){
        $results=mysqli_query($this->connect(),
        "SELECT * FROM matches
        Where id='$id'"
        );
        if(!$results){
            echo "OH getting a single match Failed in Model";
        }else{
            return $results;
        }

    }


    public function getMatches(){
        $results=mysqli_query($this->connect(),
        "SELECT * 
        FROM matches
        ORDER BY match_date DESC "
        );
        if(!$results){
            echo "OH getting all matches Failed in Model";
        }else{
            return $results;
        }
    }

    //get Past matches
    public function getPastMatches(){
        $results=mysqli_query($this->connect(),
        "SELECT *
        FROM matches
        WHERE (match_date < cast(now() as date))
        ORDER BY match_date desc"
        );
        if(!$results){
            echo "OH getting past matches Failed in Model";
        }else{
            return $results;
        }
    }

    //get Past matches
    public function getUpcomingMatches(){
        $results=mysqli_query($this->connect(),
        "SELECT *
        FROM matches
        WHERE (match_date > cast(now() as date))
        ORDER BY match_date desc"
        );
        if(!$results){
            echo "OH getting upcoming matches Failed in Model";
        }else{
            return $results;
        }
    }
    //get Past matches
    public function getCurrentMatches(){
        $results=mysqli_query($this->connect(),
        "SELECT *
        FROM matches
        WHERE (match_date =cast(now() as date))
        ORDER BY match_date desc"
        );
        if(!$results){
            echo "OH getting current matches Failed in Model";
        }else{
            return $results;
        }
    }
    //Get matches count
    public function getMatchCount(){
        $results = mysqli_query($this -> connect(), 
        "SELECT COUNT(1) FROM `matches`"
        );
        return $results;
    }
}

?>