<?php
$day=$_GET['day'];
$room=$_GET['room'];
$period=$_GET['period'];

$connect = new mysqli("localhost","root","","pinioncinema");

$sql = "SELECT "."$period"." FROM "."$day"."_"."$room";
$result = $connect -> query($sql);
 
$row = mysqli_fetch_row($result);
$ans = $row[0];

$connect ->close();

echo "var string="."'"."$ans"."'".";";

?>