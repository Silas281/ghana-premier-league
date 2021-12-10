<?php 
    require_once(__DIR__."/../models/clubs_model.php");

    class ClubController extends ClubModel{

        //Add a club
        public function createClub($club_name,$coach_id,$owner_id,$location,$num_members,$club_logo){
            $results=$this->addClub($club_name,$coach_id,$owner_id,$location,$num_members,$club_logo);
            if(!$results){
                die("OH: Failed to add club in Controller");
            }else{
                return $results;  
            }
           

        }
    
        //update Club
        public function editClub($club_name,$coach_id,$owner_id,$location,$num_members,$club_logo){
            $results=$this->updateClub($club_name,$coach_id,$owner_id,$location,$num_members,$club_logo);
            if(!$results){
                return false;
            }else{
                return $results;  
            }
           
        }
    
        //Delete Club
        public function removeClub($club_name){
           $results= $this->deleteClub($club_name);
           if(!$results){
                return false;
            }else{
                return $results;    
            }
           
        }
    
        //Get A single Club
        public function selectClub($club_name){
            $results=$this->getClub($club_name);
            if(!$results){
                return false;
            }else{
                return mysqli_fetch_all($results, MYSQLI_ASSOC);  
            }
           
        }
    
        //Get all Clubs
        public function selectAllClubs(){
            $results=$this->getAllClubs();
            if(!$results){
                echo "failed";
            }else{
                return mysqli_fetch_all($results, MYSQLI_ASSOC);  
            }
        }

         //get Coach
        public function SelectCoach($id){
            $results=$this->getCoach($id);
            if(!$results){
                return false;
            }else{
                return mysqli_fetch_all($results, MYSQLI_ASSOC);  
            } 
        }

        //get Owner
        public function selectOwner($id){
            $results=$this->getOwner($id);
            if(!$results){
                return false;
            }else{
                return mysqli_fetch_all($results, MYSQLI_ASSOC);  
            }
            
        }
        //GetClubPlayers
        public function selectAllplayers($club_name){
            $results=$this->getAllplayers($club_name);
            if(!$results){
                return false;
            }else{
                return mysqli_fetch_all($results, MYSQLI_ASSOC);  
            }
        }
        //get clubs count
        public function retrieveClubCount(){
            $results = $this -> getClubCount();
            $clubcount = mysqli_fetch_all($results, MYSQLI_ASSOC);
            if(!$results){
                return false;
            }else{
                return $clubcount[0]["COUNT(1)"];  
            }
        }
    }
?>