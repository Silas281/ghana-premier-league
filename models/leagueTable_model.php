<?php 
    #Import db connection class from db_conn.php
    require_once(__DIR__."/../db-config/db_conn.php");

    class TableModel extends DatabaseConnection{

        //add a club to league table
        public function addToTable($club_name,$position,$matches_played,$wins,$draws,$loss,$gd,$points){
            $results=mysqli_query($this->connect(),
            "INSERT INTO `league_table`(`position`, `club_name`, `matches_played`, `wins`, `draws`, `loss`, `goal_difference`, `points`)
             VALUES ('$position','$club_name','$matches_played','$wins','$draws','$loss','$gd','$points')"
            );
            if(!$results){
                die(mysqli_error($this->connect(),$results));
            }else{
                return $results;
            }

        }

        //update club flieds
        public function updateClubInfo($club_name,$position,$matches_played,$wins,$draws,$loss,$gd,$points){
            $results=mysqli_query($this->connect(),
            "UPDATE `league_table` 
            SET `position`='$position',`club_name`='$club_name',`matches_played`='$matches_played',`wins`='$wins',`draws`='$draws',`loss`='$loss',`goal_difference`='$gd',`points`='$points'
            WHERE `club_name`='$club_name'"
            );
            if(!$results){
                die(mysqli_error($this->connect(),$results));
            }else{
                return $results;
            }
        }

        //delete from table
        public function deletefromTable($club_name){
            $results = mysqli_query($this->connect(),
            "DELETE FROM `league_table` WHERE `club_name`='$club_name'"
            );

            if(!$results){
                die(mysqli_error($this->connect(),$results));
            }else{
                return $results;
            }
        }

        //select all form table
        public function getAllPositions(){
            $results=mysqli_query($this->connect(),
            "SELECT `position`, `club_name`, `matches_played`, `wins`, `draws`, `loss`, `goal_difference`, `points` 
            FROM `league_table`
            ORDER BY `points` DESC"
            );
            if(!$results){
                die(mysqli_error($this->connect(),$results));
            }else{
                return $results;
            }

        }

            //get single position info
            public function getAtPos($position){
                $results=mysqli_query($this->connect(),
                "SELECT `position`, `club_name`, `matches_played`, `wins`, `draws`, `loss`, `goal_difference`, `points` 
                FROM `league_table`
                WHERE `position`='$position'"
                );
                if(!$results){
                    die(mysqli_error($this->connect(),$results));
                }else{
                    return $results;
                }

            }
    }
?>