<?php
 $result = null;


function fetch_username_and_password_from_database_for_login($pdo,$username,$password){
  try {
    $pdo_sql = "SELECT  * FROM signup WHERE username = :username ";
    $value = $pdo->prepare($pdo_sql);
    $value-> bindParam(":username", $username);

    $value->execute();
    
    $result = $value->fetch(PDO::FETCH_ASSOC);

    if ($result && password_verify($password,$result["password"])) {
        return true;
        exit;
    } else {
      return false;
      exit;
    }

  } catch (PDOException $e) {
    echo" unable to sellect users details" ."". $e->getMessage();
  }
  
   
}




                          // ------------ USES USERNAME AND PASSWORD TO LOGIN----------------------

// function fetch_username_and_password_from_database_for_login($pdo,$username,$email){
//   try {
//     $pdo_sql = "SELECT  * FROM signup WHERE username = :username AND email = :email";
//     $value = $pdo->prepare($pdo_sql);
//     $value-> bindParam(":username", $username);
//     $value-> bindParam(":email", $email);


//     $value->execute();
    
//     $result = $value->fetch(PDO::FETCH_ASSOC);
      
//     return $result;
//   } catch (PDOException $e) {
//     echo" unable to sellect users details" ."". $e->getMessage();
//   }
// }









?>