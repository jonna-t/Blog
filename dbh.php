<?php

$conn = mysqli_connect('localhost', 'root', '', 'blog');


// defensive programming
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}
