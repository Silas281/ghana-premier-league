<?php 
#Import db connection class from db_conn.php
require_once(__DIR__."/../models/matches_model.php");

class MatchController extends MatchModel{
    //add a match
    public function createMatch($versus,$match_date,$match_time,$location,$scores,$official_id,$home_team,$away_team){
        $results=$this->addMatch($versus,$match_date,$match_time,$location,$scores,$official_id,$home_team,$away_team);
        if(!$results){
            echo "OH Insertion Failed in controller";
        }else{
            return $results;
        }

    }

    //update a match
    public function editMatch($id,$versus,$match_date,$match_time,$location,$scores,$official_id,$home_team,$away_team){
        $results=$this->updateMatch($id,$versus,$match_date,$match_time,$location,$scores,$official_id,$home_team,$away_team);
        if(!$results){
            echo "OH editing match Failed in Controller";
        }else{
            return $results;
        }

    }

    //update a match
    public function revomeMatch($id){
        $results= $this->deleteMatch($id);
        if(!$results){
            echo "OH removing match Failed in Controller";
        }else{
            return $results;
        }

    }

     //get single Match
     public function selectMatch($id){
        $results=$this->getMatch($id);
        if(!$results){
            echo "OH getting a single match Failed in Controller";
        }else{
            return mysqli_fetch_all($results, MYSQLI_ASSOC);  
        }

    }


    public function selectAllMatches(){
        $results=$this->getMatches();
        if(!$results){
            echo "OH getting all matches Failed in Controller";
        }else{
           return  mysqli_fetch_all($results, MYSQLI_ASSOC);  
        }
    }

    //get Past matches
    public function selectPastMatches(){
        $results=$this->getPastMatches();
        if(!$results){
            echo "OH getting past matches Failed in Controller";
        }else{
            return  mysqli_fetch_all($results, MYSQLI_ASSOC);  
        }
    }

    //get Past matches
    public function selectUpcomingMatches(){
        $results=$this->getUpcomingMatches();
        if(!$results){
            echo "OH getting upcoming matches Failed in Controller";
        }else{
            return  mysqli_fetch_all($results, MYSQLI_ASSOC);  
        }
    }
    //get Past matches
    public function selectCurrentMatches(){
        $results=$this->getCurrentMatches();
        if(!$results){
            echo "OH getting current matches Failed in Controller";
        }else{
            return  mysqli_fetch_all($results, MYSQLI_ASSOC);  
        }
    }

    //get matches count
    public function retrieveMatchCount(){
        $results = $this -> getMatchCount();
        $clubcount = mysqli_fetch_all($results, MYSQLI_ASSOC);
        if(!$results){
            return false;
        }else{
            return $clubcount[0]["COUNT(1)"];  
        }
    }
}

?>