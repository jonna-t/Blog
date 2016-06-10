<?php

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


$sql = "INSERT INTO user (first, last, uid, pwd)
VALUES ('$first','$last','$uid','$pwd')";
$result = $conn->query($sql);


// $row = $result->fetch_assoc();

// while($row = $result->fetch_assoc()){
//   echo "<h1>".$row['subject']."</h1><br>";
// }
