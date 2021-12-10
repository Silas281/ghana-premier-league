
<?php 
#Import db connection class from db_conn.php
require_once(__DIR__."/../db-config/db_conn.php");

class PersonModel extends DatabaseConnection{

    //add a person
    public function addPerson($id,$fname,$lname,$telNo,$email,$dob,$photo){
        $results = mysqli_query($this-> connect(),
            "INSERT INTO `person`(`person_id`, `fname`, `lname`, `telNo`, `email`, `dob`,`photo`) 
            VALUES ('$id','$fname','$lname','$telNo','$email','$dob','$photo')"
           );

        if(!$results){
            echo "Model Failed";
        }else{
            echo "Model passed";
            return $results;
        }
    }

    //update a person
    public function updatePerson($id,$fname,$lname,$telNo,$email,$dob,$photo){
        $results = mysqli_query($this -> connect(),
        "UPDATE `person` SET `person_id`='$id', `fname`='$fname', `lname`='$lname', `telNo`='$telNo', `email`='$email', `dob`='$dob',`photo`='$photo'
        WHERE `person_id`='$id'");
        return $results;
        
    }

    //Delete Person
    public function deletePerson($id){
        $results = mysqli_query($this -> connect(),
        "DELETE FROM `person` WHERE `person_id`='$id'");
        return $results;
    }

    //get a Single Person
    public function getPerson($id){
        $results = mysqli_query($this -> connect(),
        "SELECT * FROM `person` 
        WHERE `person_id`='$id'");

        return $results;
    }

    //Get All Persons
    public function getAllPersons(){
        $results = mysqli_query($this -> connect(),
        "SELECT * FROM `person`");
        return $results;
    }
    //Get Person count
    public function getPersonCount(){
        $results = mysqli_query($this -> connect(), 
        "SELECT COUNT(1) FROM `person`"
        );
        return $results;
    }

    
}

?>