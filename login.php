<?php
  if (isset($_POST['submit'])) {
    session_start();
    $_SESSION['name']=$_POST['name'];
    echo $_SESSION['name'];
    header('Location:index.php');
  }

 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
  </head>
  <body>
    <h1>Login Page</h1>
    <form class="" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
      <input type="text" name="name"  placeholder="Enter your name:">
      <input type="submit" name="submit" value="submit">

    </form>
  </body>
</html>
