<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'root','cricketteam');

// get the post records
$tname = $_POST['tname'];
$taddress = $_POST['taddress'];
$captname = $_POST['captname'];	
$phone = $_POST['phone'];
$player1 = $_POST['player1'];
$player2 = $_POST['player2'];
$player3 = $_POST['player3'];
$player4 = $_POST['player4'];
$player5 = $_POST['player5'];
$player6 = $_POST['player6'];
$player7 = $_POST['player7'];
$player8 = $_POST['player8'];

// database insert SQL code
$sql = "INSERT INTO `TeamData` (`tname`, `taddress`, `captname`, `phone`, `player1`,'player2','player3','player4','player5','player6','player7','player8') VALUES ('$tname', '$taddress', '$captname', '$phone', '$player1', '$player2', '$player3', '$player4', '$player5', '$player6', '$player7', '$player8')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>