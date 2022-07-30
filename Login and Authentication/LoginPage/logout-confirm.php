<?php
   session_start() ;

   $user = $_SESSION["user"] ;
   $elapsed = $_SESSION["login-time"]->diff(new DateTime()) ; 

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <h1>Logout Confirmation</h1>
    <p>Hi, <?= $user["name"] ?></p>
    <p>Elapsed Time :  <?= $elapsed->h . ":" . $elapsed->i . ":" . $elapsed->s ?> </p>
    <p>Are you sure ? </p>
    <div class="center">
        <a href="main.php" class="btn">NO</a>
        <a href="logout.php" class="btn">YES</a>
    </div>
</body>
</html>