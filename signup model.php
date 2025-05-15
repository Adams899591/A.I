<?php

    //  try {
    //     $pdo_sql = "INSERT INTO signup (username, password,cpassword,email)
    //     VALUE (:username, :password, :cpassword, :email)";
        

    //         $value = $pdo->prepare($pdo_sql);
    //         $value-> bindParam(":username", $username);
    //         $value-> bindParam(":password", $password );
    //         $value-> bindParam(":cpassword", $conpassword);
    //         $value-> bindParam(":email", $email);

    //          $value->execute(); 
     
    //  } catch (PDOException $e) {
    //       echo" unable to insert users details" ."". $e->getMessage();
    //  }

    //--------------------- insert user into data base ---------------------

  function insert_into_database($pdo, $username,$password,$conpassword,$email ){
     try {
                $pdo_sql = "INSERT INTO signup (username, password,cpassword,email)
                VALUE (:username, :password, :cpassword, :email)";
                

                    $value = $pdo->prepare($pdo_sql);
                    $value-> bindParam(":username", $username);
                    $value-> bindParam(":password", $password );
                    $value-> bindParam(":cpassword", $conpassword);
                    $value-> bindParam(":email", $email);

                    $value->execute(); 
     
     } catch (PDOException $e) {
          echo" unable to insert users details" ."". $e->getMessage();
     }

  };

   

                  //  fetch user name from data base
  function  fetch_username_database($pdo,$username,$result){
    try {
        
        $pdo_sql_1 = "SELECT username FROM signup WHERE username = :username;";

        $value1 = $pdo->prepare($pdo_sql_1);
        $value1-> bindParam(":username",$username);

        $value1->execute();

        $result  = $value1-> fetch(PDO::FETCH_ASSOC);

        return $result;
        


   } catch (PDOException $e) {
       echo" unable to fetch user name " ."". $e->getMessage();
  }
  }

                      //  fetch email from database 
  function  fetch_email_database($pdo,$email,$result){
    try {
        
        $pdo_sql_1 = "SELECT email FROM signup WHERE email = :email;";

        $value2 = $pdo->prepare($pdo_sql_1);
        $value2-> bindParam(":email",$email);

        $value2->execute();

        $result  = $value2-> fetch(PDO::FETCH_ASSOC);

        return $result;
        


   } catch (PDOException $e) {
       echo" unable to fetch user name " ."". $e->getMessage();
  }
  }
?>