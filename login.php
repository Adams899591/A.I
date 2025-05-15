<?php
   session_start();
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
        <!-- for log in -->
                    <h2 style="color: red;">login</h2>
            <form action="login view.php" method="post">
                   Username <br> <input type="text" name="username" id=""><br><br>
                   <!-- Email <br> <input type="text" name="email" id=""><br><br> -->
                   Password <br> <input type="text" name="password" id=""><br><br>
                   <button>login</button>
                   <?php
         
            if (isset($_GET["x"])) {
               echo "<p style='color: red;'> {$_GET['x']} </p>";
            }
            if (isset($_GET["y"])) {
               echo "<p style='color: blue;'> {$_GET['y']} </p>";
            }
            if (isset($_GET["z"])) {
               echo "<p style='color: red;'> {$_GET['z']} </p>";
            }
            
            ?>
            </form>


        

                        
                     <!-- for sign up -->
            <span>You dont have an account ?</span>
            <form action="signup.php" method="post">
                <button name="signup">Sign up</button> <br><br>
    
            </form>
      </div>
</body>
</html>

<?php
        //   direct user to sign up page 
      if (isset($_POST["signup"])) {
         header("Location: signup.php");
      }


?>