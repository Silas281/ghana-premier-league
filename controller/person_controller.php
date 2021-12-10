<?php
 
require_once(__DIR__."/../models/person_model.php");

class PersonController extends PersonModel{
    
    //add a person
    public function createPerson($id,$fname,$lname,$telNo,$email,$dob,$photo){
        $results = $this->addPerson($id,$fname,$lname,$telNo,$email,$dob,$photo);
        if(!$results){
            echo "Controller Failed";
        }else{
            echo "Controller passed";
            return $results;
        }
        
    }

    //update a person
    public function editPerson($id,$fname,$lname,$telNo,$email,$dob,$photo){
       $results=$this->updatePerson($id,$fname,$lname,$telNo,$email,$dob,$photo);
       if(!$results){
        return false;
        }else{
            return $results;  
        }
       

    }

    //Delete Person
    public function removePerson($id){
        $results =$this->deletePerson($id);
        if(!$results){
            echo "Con fa";
            return false;
        }else{
            return $results;  
        }
    }

    //get a Single Person
    public function selectPerson($id){
        $results=$this->getPerson($id);
        if(!$results){
            return false;
        }else{
            return mysqli_fetch_all($results, MYSQLI_ASSOC);  
        }
    }

    //Get All Persons
    public function selectAllPersons(){
      $results=$this->getAllPersons();
        if(!$results){
            return false;
        }else{
            return mysqli_fetch_all($results, MYSQLI_ASSOC);  
        }       
    }
    //get Persons count
    public function retrievePersonCount(){
        $results = $this -> getPersonCount();
        $clubcount = mysqli_fetch_all($results, MYSQLI_ASSOC);
        if(!$results){
            return false;
        }else{
            return $clubcount[0]["COUNT(1)"];  
        }
    }

}
?>