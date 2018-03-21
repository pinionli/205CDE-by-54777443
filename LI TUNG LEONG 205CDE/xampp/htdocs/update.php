<?php

$day=$_GET['day'];
$room=$_GET['room'];
$period=$_GET['period'];
$nstring=$_GET['nstring'];

$connect = new mysqli("localhost","root","","pinioncinema");

$sql = "UPDATE "."$day"."_"."$room"." SET "."$period"."="."$nstring";

if (mysqli_query($connect, $sql)) {
    echo "Record updated successfully";
}
mysqli_close($connect);

header("Refresh: 1; book.html"); 
exit();

?>