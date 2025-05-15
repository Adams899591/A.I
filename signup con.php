<?php


    function Display_signup_errors($username,$password ,$conpassword, $email){
        if (empty($username) || empty($password ) || empty($conpassword) || empty($email)) {
             return true;
        }else {
            return false;
        }

    }

    function  Password_varify($password,$conpassword){
        if ($password != $conpassword) {
             return true;
        }else {
            return false;
        }

    }

    function email_verify($email){
        if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
            return false;
        }else {
            return true;
        }
    }

//    this function come from data base!
    function fetch_username_database_from_con($pdo,$username,$result){

        if (fetch_username_database($pdo,$username,$result)) {
            return true;
        }else {
           return false;
        }

    }

    function fetch_email_database_from_con($pdo,$email,$result) {
         if (fetch_email_database($pdo,$email,$result)) {
            return true;
         }else {
            return false;
         }
    }





?>