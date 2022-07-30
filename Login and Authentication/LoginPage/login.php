<?php
  session_start();
  require "db.php" ;
  if ( !empty($_POST)) {
      extract($_POST) ;

      if ( checkUser($email, $pass) ) {
          // you are authenticated
          // session_start() creates a random id called session id.
          // and stores in a cookie.

          $_SESSION["user"] = getUser($email) ;
          $_SESSION["login-time"] = new DateTime() ; // login time
          header("Location: main.php") ;
          exit ;
      }
      echo "<p>Wrong email or password</p>" ;
  }
  // auto login (homework)
  if ( validSession()) {
      header("Location: main.php") ;
      exit ;
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <form action="?" method="post">
        <table>
            <tr>
                <td>Email :</td>
                <td><input type="text" name="email" ></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="pass" ></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn">login</button>
                </td>
            </tr>
        </table>
    </form>
    <?php
      if ( isset($_GET["error"])) {
          echo "<p>You tried to access main.php directly</p>" ;
      }
    ?>
</body>
</html>