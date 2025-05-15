<?php

//-----------------------------  NOTE MY INFINITY FREE DATA BASE ---------------------------------------


        $dbserver_database = "mysql:host=sql311.infinityfree.com;dbname=if0_38883938_portal";
        $dbname = "if0_38883938";
        $dbpass = "tRT3ziMo72c81";

        $pdo = "";

        try {
                $pdo = new PDO ($dbserver_database,
                                $dbname,
                                $dbpass );

                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                echo"Connected to portal database" . "<br>";

        } catch (PDOException $e) {
            echo"Unable to connect to database ". " ". $e->getMessage();
        }







//   ----------------------------LOCALHOST DATABASE-----------------------------------------



        // $dbserver_database = "mysql:host=localhost;dbname=portal";
        // $dbname = "root";
        // $dbpass = "";

        // $pdo = "";

        // try {
        //         $pdo = new PDO ($dbserver_database,
        //                         $dbname,
        //                         $dbpass );

        //         $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //         echo"Connected to portal database" . "<br>";

        // } catch (PDOException $e) {
        //     echo"Unable to connect to database ". " ". $e->getMessage();
        // }





?>