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
    <h2>Welcome to my home page <br> <?php echo$_SESSION['user'] ?></h2>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
         Reprehenderit amet dolores ut voluptatibus expedita ipsam
          voluptatem adipisci deserunt similique non? Doloribus null
          a eos, qui molestias aliquam aliquid voluptatum debitis natus.</p> <br><br>


          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, assumenda eaque, 
          quos temporibus possimus consequatur vitae consectetur in qua
          e quidem ipsa sapiente voluptate ullam alias obcaecati harum praesentium? Officiis, quibusdam!

          <a href="home2.php">go back to home page 2</a> <br><br>
     <a href="login.php">Log out</a> 
</body>
</html>

<?php
//    session_destroy();
?>