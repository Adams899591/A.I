<?php
session_start();


      if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
             $username  = $_POST["username"];
             $password  = $_POST["password"];
             $conpassword   = $_POST["conpassword"];
             $email  = $_POST["email"];

             include("database.php");
             include("signup con.php");
             include("signup model.php");

             


             if (Display_signup_errors($username,$password ,$conpassword, $email)){
                 header("location: signup.php?x=Pls fill all field ;");
                 exit;
             } else if (Password_varify($password,$conpassword)) {    
                 header("location: signup.php?y= your password and  conpassword must be thesame ;");
                 exit;
             }elseif (email_verify($email)) {
                header("location: signup.php?z=invalide email;");
                exit;
             }else {

                      if (fetch_username_database_from_con($pdo,$username,$result)) {
                               $_SESSION["username"] =  "Username has already be taking!"  ; 
                               header("location: signup.php");
                               exit;
                      }

                      if (fetch_email_database_from_con($pdo,$email,$result)) {
                              $_SESSION["email"] =  "Email has already be taking!"  ; 
                               header("location: signup.php");
                              exit;
                      }

                      // $hash  = password_hash($password, PASSWORD_DEFAULT);
                      // insert_into_database($pdo, $username,$hash,$conpassword,$email );
                      include("hash.php");
                      $hash  = password_hash($conpassword, PASSWORD_DEFAULT);
                       insert_into_database($pdo, $username,$hash,$hash,$email);
                      header("location: home.php?login=login surcessful ;");
            }

      } else {
        header("location: signup.php");
        exit;
      }
      




// --------------------------------------------------------------------------------------------------------------------
?>



