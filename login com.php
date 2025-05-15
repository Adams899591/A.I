<?php


 function Display_login_errors($username,$password){
    if (empty($username) || empty($password)) {
         return true;
      }else{
        return false;
      }
 }

             // ------------ USES USERNAME AND PASSWORD TO LOGIN----------------------
function fetch_username_and_password_from_database_for_login_con($pdo,$username,$password){
  if (fetch_username_and_password_from_database_for_login($pdo,$username,$password)) {
    return true;
  }else {
   return  false;
  }
}



                        // ------------ USES USERNAME AND PASSWORD TO Email----------------------
// function fetch_username_and_password_from_database_for_login_con($pdo,$username,$email){
//      if (fetch_username_and_password_from_database_for_login($pdo,$username,$email)) {
//        return true;
//      }else {
//       return  false;
//      }
// } 


?>