<?php

/*
@author Silas Sangmin
Date started: 
Date completed: 
Description: A mini project for the Web Tech Class 
*/

//IMPORT CONTROLLER CLASSES
require_once __DIR__."../../controller/person_controller.php"; 
require_once __DIR__."../../controller/clubs_controller.php"; 
require_once __DIR__."../../controller/players_controller.php";
require_once __DIR__."../../controller/matches_controller.php";
require_once __DIR__."../../controller/users_controller.php";
require_once __DIR__."../../controller/leagueTable_controller.php";

//CREATE GLOBAL CONTROLLER CLASSES OBJECTS
  $personsObj = new PersonController();
  $clubObj = new ClubController();
  $playerObj= new PlayerController();
  $matchObj=new MatchController();
  $userObj=new UserController();
  $tableObj=new TableController();
//Keep track of errors
  $errors = array();



  /**
   * ====================================================================================================================
   * INSERTING INTO DATABSE
   * =================================================================================================================
   */

/**************************************************************************************************************
 * ADD NEW PERSON TO GPL
 * *************************************************************************************************************
 */

  //Check if info for person has been submitted
  if(isset($_POST['submit-new-person'])){
    $id=$_POST['person_id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $telNo=$_POST['telNo'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    //$photo=$_POST['image'];

   
    //person image validation
    $target_dir = "images/";
    // file path
    $target_file = $target_dir.basename($_FILES["image"]["name"]);
    // image file type
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // check if image has been uploaded
    if(empty($_FILES["image"]["name"])){
        array_push($errors, "file cannot be empty");
    }else{
        // check if its an actual image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check == false){
            array_push($errors, "file is not an image");
        }

        // check if the file already exists
        if(file_exists($target_file)){
            array_push($errors, "file already exists");
        }

        // limit file size to 5MB
        if($_FILES["image"]["size"] > 5000000){
            array_push($errors, "upload an image less than 5MB");
        }

        // limit file type
        if($image_file_type != "jpeg" && $image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "gif"){
            array_push($errors, "Sorry, only JPG, PNG & GIF files are allowed. You Uploaded ".$image_file_type);
        }
    }
   
    //check if there are errors
    if(count($errors)>0){ 
       // store the errors inside session
       $_SESSION["errors"] = $errors;
       print_r($_SESSION["errors"]);
    //If no errors
    }else{
      // upload image
      $upload_image = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
      if($upload_image){
        //update user
        $results=$personsObj->createPerson($id,$fname,$lname,$telNo,$email,$dob,$target_file);
        //IF QUERY IS SUCCESSFUL
        if($results){
          //REDIRECT TO PERSON DASHBOARD
          header("Location:persons.php"); 
          } else {
            die('Shit! Failed to add player');
          } 
        }else{
            die("Upload failed");
      }
    }
  }


/*************************************************************************************************************
 * ADD PLAYER
 * **********************************************************************************************************
 */

if(isset($_POST['submit-player'])) {
  $id=$_POST['player_id'];
  $club_name=$_POST['club'];
  $position=$_POST['position'];
  $rating=$_POST['rating'];

  
  $results=$playerObj->createPlayer($id,$club_name,$position,$rating);
    if($results){
       header('location: players.php');
    } else {
      die('Shit! Failed to add player');
    } 
    
}

/***************************************************************************************************
 * ADD CLUB
 * *********************************************************************************************************
 */

 //CHECK IF NEW CLUB DETAILS ARE SUBMITTED
if(isset($_POST['submit-club'])){
  $club_name=$_POST['club_name'];
  $coach_id=$_POST['coach_id'];
  $owner_id=$_POST['owner_id'];
  $location=$_POST['location'];
  $num_members=$_POST['num_members'];
  $club_logo=$_POST['club_logo'];

    // CLUB LOGO VALIDATION
    $target_dir = "images/";
    // file path
    $target_file = $target_dir.basename($_FILES["image"]["name"]);
    // image file type
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // check if image has been uploaded
    if(empty($_FILES["image"]["name"])){
        array_push($errors, "file cannot be empty");
    }else{
        // check if its an actual image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check == false){
            array_push($errors, "file is not an image");
        }

        // check if the file already exists
        if(file_exists($target_file)){
            array_push($errors, "file already exists");
        }

        // limit file size to 5MB
        if($_FILES["image"]["size"] > 5000000){
            array_push($errors, "upload an image less than 5MB");
        }

        // limit file type
        if($image_file_type != "jpeg" && $image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "gif"){
            array_push($errors, "Sorry, only JPG, PNG & GIF files are allowed. You Uploaded ".$image_file_type);
        }
    }

    //IF THERE ARE ERR0RS
    if(count($errors)>0){
      // store the errors inside session
      $_SESSION["errors"] = $errors;
      print_r($_SESSION["errors"]);

    //NO ERRORS
    }else{ 
      // upload image
      $upload_image = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
      if($upload_image){  
        //update user
        $results= $clubObj->createClub($club_name,$coach_id,$owner_id,$location,$num_members,$target_file);
        if($results){
          header('location: clubs.php');
        }else{
          die('Oh! Failed to add club');
        }

      }else{
        die("Upload failed");
      }
    }
}


/**************************************************************************************************
 * ADD MATCH
 * ************************************************************************************************
 */

 //CHECK IF NEW MATCH DETAILS HAVE BEEN SUBMITTED HERE
if(isset($_POST['submit-match'])){
  $id=$_POST['id'];
  $versus=$_POST['versus'];
  $match_date=$_POST['match_date'];
  $match_time=$_POST['match_time'];
  $official_id=$_POST['official_id'];
  $location=$_POST['location'];
  $scores=$_POST['scores'];
  $home_team=$_POST['home_team'];
  $away_team=$_POST['away_team'];
  
  
  //Run update query with matchObj with editMatch function
  $results=$matchObj->createMatch($versus,$match_date,$match_time,$location,$scores,$official_id,$home_team,$away_team);
  if($results){
    //redirect
    header("location: matches.php");
  }else{
    echo "Failed";
  }
}

/**************************************************************************************************
 * ADD TO LEAGUE TABLE
 * ************************************************************************************************
 */

 //CHECK IF NEW  table DETAILS HAVE BEEN SUBMITTED HERE
 if(isset($_POST['submit-new-table'])){
   $club_name=$_POST['club_name'];
  $position=$_POST['position'];
  $matches_played=$_POST['matches_played'];
  $wins=$_POST['wins'];
  $draws=$_POST['draws'];
  $loss=$_POST['loss'];
  $gd=$_POST['gd'];
  $points=$_POST['points'];
 
  
  
  //Run update query with matchObj with editMatch function
  $results=$tableObj->addToLeagueTable($club_name,$position,$matches_played,$wins,$draws,$loss,$gd,$points);
  if($results){
    //redirect
    header("location: league_table.php");
  }else{
    echo "Failed";
  }
}




/***************************************************************
REGISTER NEW USER
*********************************************************************
*/

  //check if new user details have been submitted

// keep track of errors
$errors = array();
$userObj=new UserController();
// check if the button has been clicked
if(isset($_POST["submit-new-user"])){
    // grab form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["password2"];

    // validate data
    // check if fields are empty
    if(empty($username)){
        array_push($errors, "name is requried");
    }
    if(empty($email)){
        array_push($errors, "email is requried");
    }
    if(empty($password)){
        array_push($errors, "password is requried");
    }
    if(empty($confirm_password)){
        array_push($errors, "password 2 is requried");
    }

    // check if email already exists
    $verify_email = $userObj->verify_email_fxn($email);
    if(!$verify_email){
        array_push($errors, "email already exists");
    }

    // check if fields are of appropriate length
    if(strlen($username) > 100){
        array_push($errors, "username must be shorter than 100 characters");
    }
    if(strlen($email) > 100){
        array_push($errors, "email must be shorter than 100 characters");
    }

    // check if passwords are the same
    if($password != $confirm_password){
        array_push($errors, "passwords need to match");
    }

    // validate email with regex
    $regex = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
    // set an error if not a valid email address
    if(!preg_match($regex, $email)){
        array_push($errors, "enter a valid email address");
    }

    // if form is fine
    if(count($errors) == 0){
            //Encrypt password
           // $password = md5($password);
           // echo $username."  ".$email.$password;

            // register the new user
            $register_user = $userObj->register_new_user($username, $email, $password);

            // check if user is registered
            if(!$register_user){
                echo "failed";
            }else{
                echo "success";
                // redirect
                header("location: ../user-view/login.php");
                //header("location: ../user-view/index.php");

            }
    }else{
        session_start();
        // store the errors inside session
        $_SESSION["errors"] = $errors;
        print_r($_SESSION["errors"]);
        //header("location: ../sign_up.php");
    
    } 
 }


    //Valid user Login
    if(isset($_POST["submit-login"])){
      // grab form data
      $username = $_POST["username"];
      $password = $_POST["password"];
     
     
  
      // validate data
      // check if fields are empty
      if(empty($username)){
          array_push($errors, "name is requried");
      }

      if(empty($password)){
          array_push($errors, "password is requried");
      }
      
  
      // fetch user details from database
      $user = $userObj->selectUser($username);
      //print_r($user);
      if(count($user)==0){
          array_push($errors, "User does not Exist");
      }else{

       //Encrypt password
       //$password = md5($password);
      if(($user[0]['password']) !=$password){
        array_push($errors, "Incorrect password!");
        //echo $user[0]['password']." new p : ".$password;
      }
      }


  
      // if form is fine
      if(count($errors) == 0){  
          echo "success";
          // redirect
           header("location: ../dashboard-view/index.php");
      }else{
          session_start();
          // store the errors inside session
          $_SESSION["errors"] = $errors;
          print_r($_SESSION["errors"]);
          //header("location: ../sign_up.php");
      }  
}

/**
 * =========================================================================================================================
 * END OF INSERTION QUERIES
 * =========================================================================================================================
 * =========================================================================================================================
 */

/**
   * ====================================================================================================================
   * UPDATE QUERIES
   * =================================================================================================================
   */

  /**************************************************************************************************
 * UPDATE PERSON
 * ************************************************************************************************
 */
  

  //Check if updated info for person has been submitted
if(isset($_POST['submit-person'])){
        $id=$_POST['person_id'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $telNo=$_POST['telNo'];
        $email=$_POST['email'];
        $dob=$_POST['dob'];
        $photo=$_POST['photo'];


        //person image validation
    $target_dir = "images/";
    // file path
    $target_file = $target_dir.basename($_FILES["image"]["name"]);
    // image file type
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // check if image has been uploaded
    if(empty($_FILES["image"]["name"])){
        array_push($errors, "file cannot be empty");
    }else{
        // check if its an actual image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check == false){
            array_push($errors, "file is not an image");
        }

        // // check if the file already exists
        // if(file_exists($target_file)){
        //     array_push($errors, "file already exists");
        // }

        // limit file size to 5MB
        if($_FILES["image"]["size"] > 5000000){
            array_push($errors, "upload an image less than 5MB");
        }

        // limit file type
        if($image_file_type != "jpeg" && $image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "gif"){
            array_push($errors, "Sorry, only JPG, PNG & GIF files are allowed. You Uploaded ".$image_file_type);
        }
    }
   
    
    if(count($errors)>0){
       // store the errors inside session
       $_SESSION["errors"] = $errors;
       print_r($_SESSION["errors"]);
    }else{
      // upload image
      $upload_image = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    if($upload_image){
    //update user
    
        //update user
        $results=$personsObj->editPerson($id,$fname,$lname,$telNo,$email,$dob,$target_file);
        if(!$results){
        echo $results;
        }else{
          header("Location:persons.php"); 
        }
    }else{
      die("Upload failed");
    }
  }
               

}





// /* *****************************************************************
//     EDIT A PERSON IN THE player AND PERSON TABLES AT THE SAME TIME
//    *****************************************************************
// */

if(isset($_POST['edit-player'])) {

  $player_id = $_POST['player_id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $club_name = $_POST['club_name'];
  $position = $_POST['position'];
  $rating = $_POST['rating'];

  $result = $playerObj->editPlayer($player_id,$fname,$lname,$club_name,$position,$rating); //attempt to execute the query

  if ( $result) {  //if the query is successful...
  
      echo "<script> alert('Record Successfully Updated!'); </script>";
      header("location: players.php");
  
  } else { 
  
      echo "Query Failed ";  //else return this error if query failed

  }
}

  /**************************************************************************************************
 * UPDATE CLUB
 * ************************************************************************************************
 */
  

//Check if updated info for club has been submitted    
if(isset($_POST['submit-edit-club'])){
      $club_name=$_POST['club_name'];
      $coach_id=$_POST['coach_id'];
      $owner_id=$_POST['owner_id'];
      $location=$_POST['location'];
      $num_members=$_POST['num_members'];
      $club_logo=$_POST['image'];
     
       // image validation
    $target_dir = "images/";
    // file path
    $target_file = $target_dir.basename($_FILES["image"]["name"]);
    // image file type
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // check if image has been uploaded
    if(empty($_FILES["image"]["name"])){
        array_push($errors, "file cannot be empty");
    }else{
        // check if its an actual image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check == false){
            array_push($errors, "file is not an image");
        }
        // limit file size to 5MB
        if($_FILES["image"]["size"] > 5000000){
            array_push($errors, "upload an image less than 5MB");
        }

        // limit file type
        if($image_file_type != "jpeg" && $image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "gif"){
            array_push($errors, "Sorry, only JPG, PNG & GIF files are allowed. You Uploaded ".$image_file_type);
        }
    }
   
    
    if(count($errors)>0){
       // store the errors inside session
       $_SESSION["errors"] = $errors;
       print_r($_SESSION["errors"]);
    }else{
      // upload image
      $upload_image = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
      if($upload_image){
      //update user
    
      
      //update club
      $results=$clubObj->editClub($club_name,$coach_id,$owner_id,$location,$num_members,$target_file);
      if(!$results){
        echo $results."Edit failed";
      }else{
        
        header("Location:clubs.php"); 
      }
    }else{
        die("Upload failed");
    }
  }   

}


/* **************************************************************fxFlex="
UPDATE MATCH
*********************************************************************
*/

if(isset($_POST['submit-match-edit'])){
  $id=$_POST['id'];
  $versus=$_POST['versus'];
  $match_date=$_POST['match_date'];
  $match_time=$_POST['match_time'];
  $official_id=$_POST['official_id'];
  $location=$_POST['location'];
  $scores=$_POST['scores'];
  $home_team=$_POST['home_team'];
  $away_team=$_POST['away_team'];
  
  
  //Run update query with matchObj with editMatch function
  $results=$matchObj->editMatch($id,$versus,$match_date,$match_time,$location,$scores,$official_id,$home_team,$away_team);
  if($results){
    //redirect
    header("location: matches.php");
  }else{
    echo "Failed";
  }

}


//CHECK IF Updated  table DETAILS HAVE BEEN SUBMITTED HERE
if(isset($_POST['submit-table-to-edit'])){
  $club_name=$_POST['club_name'];
 $position=$_POST['position'];
 $matches_played=$_POST['matches_played'];
 $wins=$_POST['wins'];
 $draws=$_POST['draws'];
 $loss=$_POST['loss'];
 $gd=$_POST['gd'];
 $points=$_POST['points'];

 
 
 //Run update query with matchObj with editMatch function
 $results=$tableObj->updateClubInTable($club_name,$position,$matches_played,$wins,$draws,$loss,$gd,$points);
 if($results){
   //redirect
   header("location: league_table.php");
 }else{
   echo "Failed";
 }
}



/**
 * =========================================================================================================================
 * END OF UPDATE QUERIES
 * =========================================================================================================================
 * =========================================================================================================================
 */



 /**
 * =========================================================================================================================
 * DELETE QUERIES
 * =========================================================================================================================
 */

/***************************************************************
DELETE PERSON
*********************************************************************
*/
    //check if deleted id is sent
    if(isset($_GET['delete_id'])){
      //assign id to a variable
      $person_id=$_GET['delete_id'];
      //delete person
      $results=$personsObj ->removePerson($person_id);
      echo $results;
      if(!$results){
          echo " Deletion Failed";
      }else{
      //route to person.php
      header("Location:persons.php"); 
      }

    }


/***************************************************************
DELETE Club from League table
*********************************************************************
*/
    //check if deleted id of table is sent
    if(isset($_GET['league-to-delete_id'])){
      //assign id to a variable
      $club_name=$_GET['league-to-delete_id'];
      //delete person
      $results=$tableObj ->deletefromLeagueTable($club_name);
      echo $results;
      if(!$results){
          echo " Deletion Failed";
      }else{
      //route to person.php
      header("Location:league_table.php"); 
      }

    }


/***************************************************************
DELETE CLUB
*********************************************************************
*/
    //check if deleted club name is sent
    if(isset($_GET['club_name'])){
      //assign id to a variable
      $club_name=$_GET['club_name'];
      //delete person
      $results=$clubObj ->removeClub($club_name);
      echo $results;
      if(!$results){
          echo " Deletion Failed";
      }else{
        //echo $club_name;
      //route to person.php
      header("Location:clubs.php"); 
      }

    }





/* *******************************************************************
    DELETE A PERSON IN THE ATHLETE AND PERSON TABLES AT THE SAME TIME
   *******************************************************************
*/

if ( isset($_GET['deleteP_id']) ) {  //if the delete icon is clicked

    //grab the id 
    $id = $_GET['deleteP_id'];
    
    //attempt to run a delete query to delete from both parent and child table, ie, person and child table
    $sql = 

    $result =$playerObj->removePlayer($id); //attempt to execute the query

    if( $result ) { //if query is successful...
        header("location: players.php");

    } else {
        echo "Query Failed";  // if it fails throw an error   
        //echo "ERROR: Could not able to execute $sql. 
    }
}







/*
***************************************************************************************
 * DELETE MATCH
 ***********************************************************************************************
 */

 if(isset($_GET['delete_match_id'])){
   $match_id=$_GET['delete_match_id'];
   $results=$matchObj->revomeMatch($match_id);
   if($results){
    //redirect
    header("location: matches.php");
  }else{
    echo "Failed to delete match";
  }
 }



?>