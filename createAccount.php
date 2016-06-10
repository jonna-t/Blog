<?php
  include 'dbh.php';
?>

<!DOCTYPE html>
<html>
<body>
<title>THIS IS A HEADING</title>


<form action="signup.php" method="POST">
  <input type="text" name="first" placeholder="First name">
  <input type="text" name="last" placeholder="Last name">
  <input type="text" name="uid" placeholder="Username">
  <input type="password" name="pwd" placeholder="Password">
  <button type="submit">SIGNUP</button>
</form>



</body>
</html>
