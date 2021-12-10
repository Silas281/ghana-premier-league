<?php 

#Import db connection class from db_conn.php
require_once(__DIR__."/../db-config/db_conn.php");

class UserModel extends DatabaseConnection{
    // register user
    public function register($username, $email, $password){
        $results = mysqli_query($this -> connect(),
        "INSERT INTO `users`(`user_name`, `email`, `password`) VALUES ('$username', '$email', '$password')"
    );

    if(!$results){
        die("Model Failed");
    }else{
        return $results;
    }
    }

    // verify user email
    public function verify_email($email){
        $results = mysqli_query($this -> connect(),
       "SELECT * FROM `users` WHERE `email`='$email'"
        );
        return $results;
    }

    //fetch user email
    public function db_fetch($email){
        $results = mysqli_query($this -> connect(),
        "SELECT email 
        FROM users
        WHERE email='$email'"
        );
        return mysqli_fetch_all($results, MYSQLI_ASSOC); 
    }

    //fetch user by user Name
    public function fetchUser($user_name){
        $results = mysqli_query($this -> connect(),
       "SELECT * FROM `users` WHERE `user_name`='$user_name'"
        );
        if(!$results){
            die("Model Failed");
        }else{
            return $results;
        }
    }

    public function fetchUserName($user_name){
        $results = mysqli_query($this -> connect(),
       "SELECT * FROM `users` WHERE `user_name`='$user_name'"
        );
        if(!$results){
            die("Model Failed");
        }else{
            return $results;
        }
    }

    public function fetchUserPassword($user_name){
        $results = mysqli_query($this -> connect(),
       "SELECT `password` FROM `users` WHERE `user_name`='$user_name'"
        );
        if(!$results){
            die("Model Failed");
        }else{
            return $results;
        }
    }

}
?>