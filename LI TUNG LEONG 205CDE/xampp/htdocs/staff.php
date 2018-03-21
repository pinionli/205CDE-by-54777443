<?php
$name=$_GET['name'];
$pw=$_GET['pw'];

$connect = new mysqli("localhost","root","","pinioncinema");

$sql = "SELECT * FROM staff";
$result = $connect -> query($sql);
 
$row = mysqli_fetch_row($result);

$name2 = $row[0];
$pw2 = $row[1];

$connect ->close();

if ($name == $name2) {
  if ($pw == $pw2) {
		echo "Welcome staff "."$name2";
		header("Refresh: 1; book.html"); 
		exit();
  }
  else {echo "Wrong password";}
} else {echo "Wrong name";}



?>