
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form  id="myForm" action="index.php" method="post">
  
      <input type="text" name="username" id="username"> <br><br>

      <input type="text" name="password" id="password"> <br><br>

      <button  type="submit">submit</button>



</form>
<p id="massage"></p>
</body>
</html>
<script>

   const form = document.getElementById("myForm");
   const username = document.getElementById("username");
   const password= document.getElementById("password");
   const massage = document.getElementById("massage");


   form.addEventListener("submit", function (e) {
        e.preventDefault();

        if (username.value ===  "" || password.value ==="") {
            alert("fild can not b empty");
            return
        }

        if (username.value === password.value) {
            alert("username & password cannot be thesame");
            return
        }
        massage.textContent = "plase waite............";



        setTimeout(() => {
        massage.textContent ="------------999999999999......."

       
          }, 2000);

          setTimeout(() => {
        massage.textContent ="submited"

       
          }, 4000);

    setTimeout(() => {
        massage.textContent ="submiting now........"

        form.submit();
    }, 7000);


   })

</script>

<?php
  if($_SERVER["REQUEST_METHOD"] == "POST")

   $username = $_POST["username"]. "<br>";
   $password = $_POST["password"]. "<br>";
    //  header("location: home.php")
//    echo "form surmitrd surcessfully". "<br>";
//    echo  $username;
//    echo   $password;
//    exit

?>