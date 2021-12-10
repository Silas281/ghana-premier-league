<?php
//connect to database class
require_once(__DIR__."/../models/users_model.php");

class UserController extends UserModel{

function register_new_user($username, $email, $password){

    // run the query
    $results = $this->register($username, $email, $password);

    // if successful
    if($results){
        return $results;
    }else{
        return false;
    }
}

function verify_email_fxn($email){
      // run the query
    $results = $this->verify_email($email);

    // if successful
    if($results){
        // fetch data from database
        $user_email = $this->db_fetch($email);
        if(empty($user_email)){
            // if empty means the email isn't in the database already
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

public function selectUser($user_name){
    $results= $this->fetchUser($user_name);
    return mysqli_fetch_all($results, MYSQLI_ASSOC); 
}

 //fetch user by user Name
 public function userInfo($user_name){
    $results =$this->fetchUser($user_name);
    if(!$results){
        die("Failed");
    }else{
        return mysqli_fetch_all($results, MYSQLI_ASSOC);;
    }
}

public function UserName($user_name){
    $results = $this->fetchUserName($user_name);
    if(!$results){
        die("Failed");
    }else{
        return mysqli_fetch_all($results, MYSQLI_ASSOC);;
    }
}

public function UserPassword($user_name){
    $results =  fetchUserPassword($user_name);
    if(!$results){
        die("Failed");
    }else{
        return mysqli_fetch_all($results, MYSQLI_ASSOC);;
    }
}


}