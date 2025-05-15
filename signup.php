<?php
session_start()
    //  include("signup.php")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="justify-items: center;">
                         <h2>Sign UP</h2>

              <form action="signup view.php" method="post">
                   Username <br> <input type="text" name="username" id=""><br><br>
                   Password <br> <input type="text" name="password" id=""><br><br>
                  Confirm Password <br> <input type="text" name="conpassword" id=""><br><br>
                   Email <br> <input type="text" name="email" id=""><br><br>
                   <button name="login">Log in</button><br>
                  
                   <?php
                      if (isset($_GET["x"])) {
                         echo "<p style='color: red;'> {$_GET['x']} </p>";
                      }
                      if (isset($_GET["y"])) {
                        echo "<p style='color: red;'> {$_GET['y']} </p>";
                     }
                     if (isset($_GET['z'])) {
                        echo "<p style='color: red;'> {$_GET['z']} </p>";
                     }
// from data base ---------------->    
                     if (isset($_SESSION["username"])) {
                       echo "<p style='color: red;'> {$_SESSION["username"]} </p> ";
                       session_destroy();
                     }

                     if (isset($_SESSION["email"])) {
                        echo "<p style='color: red;'> {$_SESSION["email"]} </p> ";
                        session_destroy();
                      }

                      if (isset($_GET["login"])) {
                        echo "<p style='color: blue;'> {$_GET['login']} </p>";
                     }
                     

                   ?>
                  
              </form>

    </div>
</body>
</html>

<?php
//    if (isset($_POST["login"])) {
//          header("Location: home.php");
//    }

?>