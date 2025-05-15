<?php
session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username  = $_POST["username"];
      // $email  = $_POST["email"];
      $password  = $_POST["password"];


      include("database.php"); 
      include("login com.php");
      include("login model.php");
      include("hash.php");
      

        

      if (Display_login_errors($username,$password )) {               //check if any input field are empty
            header("location: login.php?x=Pls fill all field");
            exit;
       }

   // ------------ USES USERNAME AND PASSWORD TO LOGIN----------------------

       if (fetch_username_and_password_from_database_for_login_con($pdo,$username,$password)) {                   
        $_SESSION["user"] = $username;  
                   header("location: home.php");
                    exit;   
                
                           
       }else{
                   header("location: login.php?z=Invalid credencials");
                   exit;   
       }


       
     
             // ------------ USES USERNAME AND eMAIL TO LOGIN----------------------

      // if (Display_login_errors($username,$email)) {
      //      header("location: login.php?x=Pls fill all field");
      //      exit;
      // }

      // if (fetch_username_and_password_from_database_for_login_con($pdo,$username,$email)) {
      //       header("location: login.php?y=Pls fi-------------------");
      //             exit;  
      // }else {
      //             header("location: login.php?z=Pls fi----");
      //             exit;   
      // }


        
      }


?>