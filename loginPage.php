<?php
    session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
</style>
</head>
<body>  

<h2>Please enter your username & password</h2>
<form method="post" action="loginAuthentication.php">  
  Username: <input type="text" name="username">
  <br><br>
  Password: <input type="text" name="password">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
    if (isset($_SESSION["error"]) == 1){
    echo $_SESSION["error"];
    };
?>

</body>
</html>