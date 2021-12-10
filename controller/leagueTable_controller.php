<?php 
    #Import db connection class from db_conn.php
    require_once(__DIR__."/../models/leagueTable_model.php");

    class TableController extends TableModel{

        //add a club to league table
        public function addToLeagueTable($club_name,$position,$matches_played,$wins,$draws,$loss,$gd,$points){
            $results=$this->addToTable($club_name,$position,$matches_played,$wins,$draws,$loss,$gd,$points);
            
            if(!$results){
                die("Fail to add club to league table in Controller");
            }else{
                return $results;  
            }

        }

        //update club flieds
        public function updateClubInTable($club_name,$position,$matches_played,$wins,$draws,$loss,$gd,$points){
            $results=$this->updateClubInfo($club_name,$position,$matches_played,$wins,$draws,$loss,$gd,$points);
            if(!$results){
                die(mysqli_error($this->connect(),$results));
            }else{
                return $results;  
            }

        }

        //delete from table
        public function deletefromLeagueTable($club_name){
            $results = $this->deletefromTable($club_name);

            if(!$results){
                die(mysqli_error($this->connect(),$results));
            }else{
                return $results;  
            }

        }

        //select all form table
        public function getAllClubPositions(){
            $results=$this->getAllPositions();
            if(!$results){
                die(mysqli_error($this->connect(),$results));
            }else{
                return mysqli_fetch_all($results, MYSQLI_ASSOC);  
            }
        }

        //get single position info
        public function getPosAt($position){
            $results=$this->getAtPos($position);
            if(!$results){
                die(mysqli_error($this->connect(),$results));
            }else{
                return mysqli_fetch_all($results, MYSQLI_ASSOC);  
            }
        }
    }
?>