<?php
  session_start() ;
  require "db.php" ;
  // check if the user authenticated before
  if( !validSession()) {
      header("Location: login.php?error") ;
      exit ; 
  }
 
  $user = $_SESSION["user"] ;
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <h1>Sensitive Information</h1>
    <h3>Welcome <?= $user["name"] ?></h3>
    <p>You are studying at <?= $user["department"] . " in " . $user["university"] ?></p>
    <div class="center">
        <a href="logout-confirm.php" class="btn">Logout</a>
    </div>
</body>
</html>