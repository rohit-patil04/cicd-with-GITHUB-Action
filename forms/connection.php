<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$username = 'root';
$password = 'root';
$server = 'localhost';
$database = 'cricketteam';


$con = mysqli_connect($username,$password,$server,$database);

 

 if($con){

 echo "Connection succesfull";
 ?>
 <script>
	alert('connection succesfull');
</script>
<?php
 }else {
	 	 echo "No connection";
die("no connection" . mysqli_connect_error());
 }
?>
