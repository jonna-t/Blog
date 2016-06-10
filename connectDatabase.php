<?php
  include 'dbh.php';
?>

<!DOCTYPE html>
<html>
<body>
<title>THIS IS A HEADING</title>
<?php

$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

<form>
  <input type="text" name="first" placeholder="First name">
  <input type="text" name="last" placeholder="Last name">
  <input type="text" name="uid" placeholder="Username">
  <input type="password" name="pwd" placeholder="Password">
  <button type="submit">SIGNUP</button>
</form>

// while($row = $result->fetch_assoc()){
//   echo "<h1>".$row['subject']."</h1><br>";
// }


$row

?>

</body>
</html>
