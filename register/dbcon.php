<?php

$server="localhost";
$user="root";
$password="";
$db="businessregister";

$con=mysqli_connect($server,$user,$password,$db);
if($con){
	//echo "Connection succesfull!";
}
else{
	//echo "No connection!";
}


?>